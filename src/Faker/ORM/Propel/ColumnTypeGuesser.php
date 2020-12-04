<?php

namespace Faker\ORM\Propel;

use ColumnMap;
use PropelColumnTypes;

class ColumnTypeGuesser
{
    protected $generator;

    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param ColumnMap $column
     * @return \Closure|null
     */
    public function guessFormat(ColumnMap $column)
    {
        $generator = $this->generator;
        if ($column->isTemporal()) {
            if ($column->isEpochTemporal()) {
                return function () use ($generator) {
                    return $generator->dateTime;
                };
            }

            return function () use ($generator) {
                return $generator->dateTimeAD;
            };
        }
        $type = $column->getType();
        switch ($type) {
            case PropelColumnTypes::BOOLEAN:
            case PropelColumnTypes::BOOLEAN_EMU:
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case PropelColumnTypes::NUMERIC:
            case PropelColumnTypes::DECIMAL:
                $size = $column->getSize();

                return function () use ($generator, $size) {
                    return $generator->randomNumber($size + 2) / 100;
                };
            case PropelColumnTypes::TINYINT:
                return function () use ($generator) {
                    return $generator->numberBetween(0, 127);
                };
            case PropelColumnTypes::SMALLINT:
                return function () use ($generator) {
                    return $generator->numberBetween(0, 32767);
                };
            case PropelColumnTypes::INTEGER:
                return function () use ($generator) {
                    return $generator->numberBetween(0, 2147483647);
                };
            case PropelColumnTypes::BIGINT:
                return function () use ($generator) {
                    return $generator->numberBetween(0, PHP_INT_MAX);
                };
            case PropelColumnTypes::FLOAT:
            case PropelColumnTypes::DOUBLE:
            case PropelColumnTypes::REAL:
            return function () use ($generator) {
                return $generator->randomFloat();
            };
            case PropelColumnTypes::CHAR:
            case PropelColumnTypes::VARCHAR:
            case PropelColumnTypes::BINARY:
            case PropelColumnTypes::VARBINARY:
                $size = $column->getSize();

                return function () use ($generator, $size) {
                    return $generator->text($size);
                };
            case PropelColumnTypes::LONGVARCHAR:
            case PropelColumnTypes::LONGVARBINARY:
            case PropelColumnTypes::CLOB:
            case PropelColumnTypes::CLOB_EMU:
            case PropelColumnTypes::BLOB:
                return function () use ($generator) {
                    return $generator->text;
                };
            case PropelColumnTypes::ENUM:
                $valueSet = $column->getValueSet();

                return function () use ($generator, $valueSet) {
                    return $generator->randomElement($valueSet);
                };
            case PropelColumnTypes::OBJECT:
            case PropelColumnTypes::PHP_ARRAY:
            default:
            // no smart way to guess what the user expects here
                return null;
        }
    }
}
