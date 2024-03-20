<?php

namespace Faker\ORM\Propel2;

use Propel\Generator\Model\PropelTypes;
use Propel\Runtime\Map\ColumnMap;

class ColumnTypeGuesser
{
    protected \Faker\Generator $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat(ColumnMap $column): ?\Closure
    {
        $generator = $this->generator;
        if ($column->isTemporal()) {
            if (PropelTypes::BU_DATE === $column->getType() || PropelTypes::BU_TIMESTAMP === $column->getType()) {
                return static function() use ($generator) {
                    return $generator->dateTime;
                };
            }

            return static function() use ($generator) {
                return $generator->dateTimeAD;
            };
        }
        $type = $column->getType();
        switch ($type) {
            case PropelTypes::BOOLEAN:
            case PropelTypes::BOOLEAN_EMU:
                return static function() use ($generator) {
                    return $generator->boolean;
                };
            case PropelTypes::NUMERIC:
            case PropelTypes::DECIMAL:
                $size = $column->getSize();

                return static function() use ($generator, $size) {
                    return $generator->randomNumber($size + 2) / 100;
                };
            case PropelTypes::TINYINT:
                return static function() {
                    return \random_int(0, 127);
                };
            case PropelTypes::SMALLINT:
                return static function() {
                    return \random_int(0, 32767);
                };
            case PropelTypes::INTEGER:
                return static function() {
                    return \random_int(0, 2147483647);
                };
            case PropelTypes::BIGINT:
                return static function() {
                    return \random_int(0, 9223372036854775807);
                };
            case PropelTypes::FLOAT:
                return static function() {
                    return \random_int(0, 2147483647) / \random_int(1, 2147483647);
                };
            case PropelTypes::DOUBLE:
            case PropelTypes::REAL:
                return static function() {
                    return \random_int(0, 9223372036854775807) / \random_int(1, 9223372036854775807);
                };
            case PropelTypes::CHAR:
            case PropelTypes::VARCHAR:
            case PropelTypes::BINARY:
            case PropelTypes::VARBINARY:
                $size = $column->getSize();

                return static function() use ($generator, $size) {
                    return $generator->text($size);
                };
            case PropelTypes::LONGVARCHAR:
            case PropelTypes::LONGVARBINARY:
            case PropelTypes::CLOB:
            case PropelTypes::CLOB_EMU:
            case PropelTypes::BLOB:
                return static function() use ($generator) {
                    return $generator->text;
                };
            case PropelTypes::ENUM:
                $valueSet = $column->getValueSet();

                return static function() use ($generator, $valueSet) {
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
