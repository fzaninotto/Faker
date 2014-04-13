<?php

namespace Faker\ORM\Mandango;

use Mandango\Mandango;
use Faker\Provider\Base;

/**
 * Service class for populating a table through a Mandango ActiveRecord class.
 */
class EntityPopulator
{
    protected $class;
    protected $columnFormatters = array();

    /**
     * Class constructor.
     *
     * @param string $class A Mandango ActiveRecord classname
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setColumnFormatters($columnFormatters)
    {
        $this->columnFormatters = $columnFormatters;
    }

    public function getColumnFormatters()
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters)
    {
        $this->columnFormatters = array_merge($this->columnFormatters, $columnFormatters);
    }

    public function guessColumnFormatters(\Faker\Generator $generator, Mandango $mandango)
    {
        $formatters = array();
        $nameGuesser = new \Faker\Guesser\Name($generator);
        $columnTypeGuesser = new \Faker\ORM\Mandango\ColumnTypeGuesser($generator);

        $metadata = $mandango->getMetadata($this->class);

        // fields
        foreach ($metadata['fields'] as $fieldName => $field) {
            if ($formatter = $nameGuesser->guessFormat($fieldName)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($field)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
        }

        // references
        foreach (array_merge($metadata['referencesOne'], $metadata['referencesMany']) as $referenceName => $reference) {
            if (!isset($reference['class'])) {
                continue;
            }
            $referenceClass = $reference['class'];

            $formatters[$referenceName] = function ($insertedEntities) use ($referenceClass) {
                if (isset($insertedEntities[$referenceClass])) {
                    return Base::randomElement($insertedEntities[$referenceClass]);
                }
            };
        }

        return $formatters;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute(Mandango $mandango, $insertedEntities)
    {
        $metadata = $mandango->getMetadata($this->class);

        $obj = $mandango->create($this->class);
        foreach ($this->columnFormatters as $column => $format) {
            if (null !== $format) {
                $value =  is_callable($format) ? $format($insertedEntities, $obj) : $format;

                if (isset($metadata['fields'][$column]) ||
                    isset($metadata['referencesOne'][$column])) {
                    $obj->set($column, $value);
                }

                if (isset($metadata['referencesMany'][$column])) {
                    $adder = 'add'.ucfirst($column);
                    $obj->$adder($value);
                }
            }
        }
        $mandango->persist($obj);

        return $obj;
    }
}
