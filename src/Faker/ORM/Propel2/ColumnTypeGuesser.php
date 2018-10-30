<?php

namespace Faker\ORM\Propel2;

use \Propel\Generator\Model\PropelTypes;
use \Propel\Runtime\Map\ColumnMap;

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
            if ($column->getType() == PropelTypes::BU_DATE || $column->getType() == PropelTypes::BU_TIMESTAMP) {
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
            case PropelTypes::BOOLEAN:
            case PropelTypes::BOOLEAN_EMU:
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case PropelTypes::NUMERIC:
            case PropelTypes::DECIMAL:
                $size = $column->getSize();

                return function () use ($generator, $size) {
                    return $generator->randomNumber($size + 2) / 100;
                };
            case PropelTypes::TINYINT:
                return function () {
                    return mt_rand(0, 127);
                };
            case PropelTypes::SMALLINT:
                return function () {
                    return mt_rand(0, 32767);
                };
            case PropelTypes::INTEGER:
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case PropelTypes::BIGINT:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case PropelTypes::FLOAT:
                return function () {
                    return mt_rand(0, intval('2147483647'))/mt_rand(1, intval('2147483647'));
                };
            case PropelTypes::DOUBLE:
            case PropelTypes::REAL:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'))/mt_rand(1, intval('9223372036854775807'));
                };
            case PropelTypes::CHAR:
            case PropelTypes::VARCHAR:
            case PropelTypes::BINARY:
            case PropelTypes::VARBINARY:
                $size = $column->getSize();

                return function () use ($generator, $size) {
                    return $generator->text($size);
                };
            case PropelTypes::LONGVARCHAR:
            case PropelTypes::LONGVARBINARY:
            case PropelTypes::CLOB:
            case PropelTypes::CLOB_EMU:
            case PropelTypes::BLOB:
                return function () use ($generator) {
                    return $generator->text;
                };
            case PropelTypes::ENUM:
                $valueSet = $column->getValueSet();

                return function () use ($generator, $valueSet) {
                    return $generator->randomElement($valueSet);
                };
            case PropelTypes::OBJECT:
            case PropelTypes::PHP_ARRAY:
            default:
            // no smart way to guess what the user expects here
                return null;
        }
    }
}
