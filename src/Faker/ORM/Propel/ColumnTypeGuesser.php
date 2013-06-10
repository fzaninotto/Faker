<?php

namespace Faker\ORM\Propel;

use \PropelColumnTypes;

class ColumnTypeGuesser
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat($column)
    {
        $generator = $this->generator;
        if ($column->isTemporal()) {
            if ($column->isEpochTemporal()) {
                return function() use ($generator) { return $generator->dateTime; };
            } else {
                return function() use ($generator) { return $generator->dateTimeAD; };
            }
        }
        $type = $column->getType();
        switch ($type) {
            case PropelColumnTypes::BOOLEAN:
            case PropelColumnTypes::BOOLEAN_EMU:
                return function() use ($generator) { return $generator->boolean; };
            case PropelColumnTypes::NUMERIC:
            case PropelColumnTypes::DECIMAL:
                $size = $column->getSize();

                return function() use ($generator, $size) { return $generator->randomNumber($size + 2) / 100; };
            case PropelColumnTypes::TINYINT:
                return function() { return mt_rand(0,255); };
            case PropelColumnTypes::SMALLINT:
                return function() { return mt_rand(0,65535); };
            case PropelColumnTypes::INTEGER:
                return function() { return mt_rand(0,intval('4294967295')); };
            case PropelColumnTypes::BIGINT:
                return function() { return mt_rand(0,intval('18446744073709551615')); };
            case PropelColumnTypes::FLOAT:
                return function() { return mt_rand(0,intval('4294967295'))/mt_rand(1,intval('4294967295')); };
            case PropelColumnTypes::DOUBLE:
            case PropelColumnTypes::REAL:
                return function() { return mt_rand(0,intval('18446744073709551615'))/mt_rand(1,intval('18446744073709551615')); };
            case PropelColumnTypes::CHAR:
            case PropelColumnTypes::VARCHAR:
            case PropelColumnTypes::BINARY:
            case PropelColumnTypes::VARBINARY:
                $size = $column->getSize();

                return function() use ($generator, $size) { return $generator->text($size); };
            case PropelColumnTypes::LONGVARCHAR:
            case PropelColumnTypes::LONGVARBINARY:
            case PropelColumnTypes::CLOB:
            case PropelColumnTypes::CLOB_EMU:
            case PropelColumnTypes::BLOB:
                return function() use ($generator) { return $generator->text; };
            case PropelColumnTypes::ENUM:
                $valueSet = $column->getValueSet();

                return function() use ($generator, $valueSet) { return $generator->randomElement($valueSet); };
            case PropelColumnTypes::OBJECT:
            case PropelColumnTypes::PHP_ARRAY:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
