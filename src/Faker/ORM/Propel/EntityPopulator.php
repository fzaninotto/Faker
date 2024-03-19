<?php

namespace Faker\ORM\Propel;

use ColumnMap;
use Faker\Provider\Base;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
    protected string $class;
    protected array $columnFormatters = [];
    protected array $modifiers = [];

    /**
     * Class constructor.
     *
     * @param string $class A Propel ActiveRecord classname
     */
    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setColumnFormatters($columnFormatters): void
    {
        $this->columnFormatters = $columnFormatters;
    }

    public function getColumnFormatters(): array
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters): void
    {
        $this->columnFormatters = \array_merge($this->columnFormatters, $columnFormatters);
    }

    public function guessColumnFormatters(\Faker\Generator $generator): array
    {
        $formatters = [];
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();
        $nameGuesser = new \Faker\Guesser\Name($generator);
        $columnTypeGuesser = new ColumnTypeGuesser($generator);
        foreach ($tableMap->getColumns() as $columnMap) {
            // skip behavior columns, handled by modifiers
            if ($this->isColumnBehavior($columnMap)) {
                continue;
            }
            if ($columnMap->isForeignKey()) {
                $relatedClass = $columnMap->getRelation()->getForeignTable()->getClassname();
                $formatters[$columnMap->getPhpName()] = static function($inserted) use ($relatedClass) {
                    return isset($inserted[$relatedClass]) ? $inserted[$relatedClass][\random_int(0, \count($inserted[$relatedClass]) - 1)] : null;
                };
                continue;
            }
            if ($columnMap->isPrimaryKey()) {
                continue;
            }
            if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) {
                $formatters[$columnMap->getPhpName()] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) {
                $formatters[$columnMap->getPhpName()] = $formatter;
            }
        }

        return $formatters;
    }

    protected function isColumnBehavior(ColumnMap $columnMap): bool
    {
        foreach ($columnMap->getTable()->getBehaviors() as $name => $params) {
            $columnName = Base::toLower($columnMap->getName());
            switch ($name) {
                case 'nested_set':
                    $columnNames = [$params['left_column'], $params['right_column'], $params['level_column']];
                    if (\in_array($columnName, $columnNames)) {
                        return true;
                    }
                    break;
                case 'timestampable':
                    $columnNames = [$params['create_column'], $params['update_column']];
                    if (\in_array($columnName, $columnNames)) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }

    public function setModifiers($modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith($modifiers): void
    {
        $this->modifiers = \array_merge($this->modifiers, $modifiers);
    }

    public function guessModifiers(\Faker\Generator $generator): array
    {
        $modifiers = [];
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();
        foreach ($tableMap->getBehaviors() as $name => $params) {
            switch ($name) {
                case 'nested_set':
                    $modifiers['nested_set'] = static function($obj, $inserted) use ($class, $generator) {
                        if (isset($inserted[$class])) {
                            $queryClass = $class.'Query';
                            $parent = $queryClass::create()->findPk($generator->randomElement($inserted[$class]));
                            $obj->insertAsLastChildOf($parent);
                        } else {
                            $obj->makeRoot();
                        }
                    };
                    break;
                case 'sortable':
                    $modifiers['sortable'] = static function($obj, $inserted) use ($class) {
                        $maxRank = isset($inserted[$class]) ? \count($inserted[$class]) : 0;
                        $obj->insertAtRank(\random_int(1, $maxRank + 1));
                    };
                    break;
            }
        }

        return $modifiers;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute($con, $insertedEntities)
    {
        $obj = new $this->class();
        foreach ($this->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                $obj->setByName($column, \is_callable($format) ? $format($insertedEntities, $obj) : $format);
            }
        }
        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
        $obj->save($con);

        return $obj->getPrimaryKey();
    }
}
