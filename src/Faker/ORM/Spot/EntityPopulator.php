<?php

namespace Faker\ORM\Spot;

use Faker\Generator;
use Faker\Guesser\Name;
use Spot\Locator;
use Spot\Mapper;
use Spot\Relation\BelongsTo;

/**
 * Service class for populating a table through a Spot Entity class.
 */
class EntityPopulator
{
    /**
     * When fetching existing data - fetch only few first rows.
     */
    public const RELATED_FETCH_COUNT = 10;

    protected Mapper $mapper;

    protected Locator $locator;

    protected array $columnFormatters = [];
    protected array $modifiers = [];

    /**
     * @var bool
     */
    protected mixed $useExistingData = false;

    /**
     * Class constructor.
     */
    public function __construct(Mapper $mapper, Locator $locator, $useExistingData = false)
    {
        $this->mapper = $mapper;
        $this->locator = $locator;
        $this->useExistingData = $useExistingData;
    }

    public function getMapper(): Mapper
    {
        return $this->mapper;
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

    public function setModifiers(array $modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith(array $modifiers): void
    {
        $this->modifiers = \array_merge($this->modifiers, $modifiers);
    }

    public function guessColumnFormatters(Generator $generator): array
    {
        $formatters = [];
        $nameGuesser = new Name($generator);
        $columnTypeGuesser = new ColumnTypeGuesser($generator);
        $fields = $this->mapper->fields();
        foreach ($fields as $fieldName => $field) {
            if (true === $field['primary']) {
                continue;
            }
            if ($formatter = $nameGuesser->guessFormat($fieldName)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($field)) {
                $formatters[$fieldName] = $formatter;
            }
        }
        $entityName = $this->mapper->entity();
        $entity = $this->mapper->build([]);
        $relations = $entityName::relations($this->mapper, $entity);
        foreach ($relations as $relation) {
            // We don't need any other relation here.
            if ($relation instanceof BelongsTo) {
                $fieldName = $relation->localKey();
                $entityName = $relation->entityName();
                $field = $fields[$fieldName];
                $required = $field['required'];

                $locator = $this->locator;

                $formatters[$fieldName] = function($inserted) use ($required, $entityName, $locator) {
                    if (!empty($inserted[$entityName])) {
                        return $inserted[$entityName][\random_int(0, \count($inserted[$entityName]) - 1)]->get('id');
                    }

                    if ($required && $this->useExistingData) {
                        // We did not add anything like this, but it's required,
                        // So let's find something existing in DB.
                        $mapper = $locator->mapper($entityName);
                        $records = $mapper->all()->limit(self::RELATED_FETCH_COUNT)->toArray();
                        if (empty($records)) {
                            return null;
                        }

                        return $records[\random_int(0, \count($records) - 1)]['id'];
                    }

                    return null;
                };
            }
        }

        return $formatters;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute($insertedEntities): string
    {
        $obj = $this->mapper->build([]);

        $this->fillColumns($obj, $insertedEntities);
        $this->callMethods($obj, $insertedEntities);

        $this->mapper->insert($obj);

        return $obj;
    }

    private function fillColumns($obj, $insertedEntities): void
    {
        foreach ($this->columnFormatters as $field => $format) {
            if (null !== $format) {
                $value = \is_callable($format) ? $format($insertedEntities, $obj) : $format;
                $obj->set($field, $value);
            }
        }
    }

    private function callMethods($obj, $insertedEntities): void
    {
        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
    }
}
