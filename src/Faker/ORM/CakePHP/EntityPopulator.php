<?php

namespace Faker\ORM\CakePHP;

use Cake\ORM\TableRegistry;

class EntityPopulator
{
    protected $class;
    protected $connectionName;
    protected array $columnFormatters = [];
    protected array $modifiers = [];

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function __get(string $name)
    {
        return $this->{$name};
    }

    public function __set(string $name, $value)
    {
        $this->{$name} = $value;
    }

    public function mergeColumnFormattersWith($columnFormatters): void
    {
        $this->columnFormatters = \array_merge($this->columnFormatters, $columnFormatters);
    }

    public function mergeModifiersWith($modifiers): void
    {
        $this->modifiers = \array_merge($this->modifiers, $modifiers);
    }

    public function guessColumnFormatters($populator): array
    {
        $formatters = [];
        $class = $this->class;
        $table = $this->getTable($class);
        $schema = $table->schema();
        $pk = $schema->primaryKey();
        $guessers = $populator->getGuessers() + ['ColumnTypeGuesser' => new ColumnTypeGuesser($populator->getGenerator())];
        $isForeignKey = static function($column) use ($table) {
            foreach ($table->associations()->type('BelongsTo') as $assoc) {
                if ($column === $assoc->foreignKey()) {
                    return true;
                }
            }

            return false;
        };

        foreach ($schema->columns() as $column) {
            if ($column === $pk[0] || $isForeignKey($column)) {
                continue;
            }

            foreach ($guessers as $guesser) {
                if ($formatter = $guesser->guessFormat($column, $table)) {
                    $formatters[$column] = $formatter;
                    break;
                }
            }
        }

        return $formatters;
    }

    public function guessModifiers(): array
    {
        $modifiers = [];
        $table = $this->getTable($this->class);

        $belongsTo = $table->associations()->type('BelongsTo');
        foreach ($belongsTo as $assoc) {
            $modifiers['belongsTo'.$assoc->name()] = function($data, $insertedEntities) use ($assoc) {
                $table = $assoc->target();
                $foreignModel = $table->alias();

                if (!empty($insertedEntities[$foreignModel])) {
                    $foreignKeys = $insertedEntities[$foreignModel];
                } else {
                    $foreignKeys = $table->find('all')
                        ->select(['id'])
                        ->map(static function($row) {
                            return $row->id;
                        })
                        ->toArray();
                }

                if (empty($foreignKeys)) {
                    throw new \RuntimeException(\sprintf('%s belongsTo %s, which seems empty at this point.', $this->getTable($this->class)->table(), $assoc->table()));
                }

                $foreignKey = $foreignKeys[\array_rand($foreignKeys)];
                $data[$assoc->foreignKey()] = $foreignKey;

                return $data;
            };
        }

        // TODO check if TreeBehavior attached to modify lft/rgt cols

        return $modifiers;
    }

    public function execute($class, $insertedEntities, array $options = [])
    {
        $table = $this->getTable($class);
        $entity = $table->newEntity();

        foreach ($this->columnFormatters as $column => $format) {
            if (null !== $format) {
                $entity->{$column} = \is_callable($format) ? $format($insertedEntities, $table) : $format;
            }
        }

        foreach ($this->modifiers as $modifier) {
            $entity = $modifier($entity, $insertedEntities);
        }

        if (!$entity = $table->save($entity, $options)) {
            throw new \RuntimeException("Failed saving $class record");
        }

        $pk = $table->primaryKey();
        if (\is_string($pk)) {
            return $entity->{$pk};
        }

        return $entity->{$pk[0]};
    }

    public function setConnection($name): void
    {
        $this->connectionName = $name;
    }

    protected function getTable($class)
    {
        $options = [];
        if (!empty($this->connectionName)) {
            $options['connection'] = $this->connectionName;
        }

        return TableRegistry::get($class, $options);
    }
}
