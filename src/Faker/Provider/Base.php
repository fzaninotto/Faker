<?php

namespace Faker\Provider;

use Faker\Generator;
use Faker\NullGenerator;
use Faker\UniqueGenerator;

class Base
{
    /**
     * @var \Faker\Generator
     */
    protected $generator;

    /**
     * @var \Faker\UniqueGenerator
     */
    protected $unique;

    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * Returns a random number between 0 and 9
     *
     * @return integer
     */
    public static function randomDigit()
    {
        return mt_rand(0, 9);
    }

    /**
     * Returns a random number between 1 and 9
     *
     * @return integer
     */
    public static function randomDigitNotNull()
    {
        return mt_rand(1, 9);
    }

    /**
     * Returns a random number with 0 to $nbDigits digits
     *
     * If $upTo is passed, it returns a number between $nbDigits (read as from) and $upTo
     *
     * @param integer $nbDigits
     * @param integer $upTo
     * @example 79907610
     *
     * @return integer
     */
    public static function randomNumber($nbDigits = null, $upTo = null)
    {
        if (null === $nbDigits) {
            $nbDigits = static::randomDigit();
        }

        if (null !== $upTo) {
            return static::numberBetween($nbDigits, $upTo);
        }

        return mt_rand(0, pow(10, $nbDigits) - 1);
    }

    /**
     * Return a random float number
     *
     * @param int       $nbMaxDecimals
     * @param int|float $min
     * @param int|float $max
     * @example 48.8932
     *
     * @return float
     */
    public static function randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
    {
        if (null === $nbMaxDecimals) {
            $nbMaxDecimals = static::randomDigit();
        }

        if (null === $max) {
            $max = static::randomNumber();
        }

        if ($min > $max) {
            $tmp = $min;
            $min = $max;
            $max = $tmp;
        }

        return round($min + mt_rand() / mt_getrandmax() * ($max - $min), $nbMaxDecimals);
    }

    /**
     * Returns a random number between $from and $to
     *
     * @param integer $from
     * @param integer $to
     * @example 79907610
     *
     * @return integer
     */
    public static function numberBetween($from = null, $to = null)
    {
        return mt_rand($from ?: 0, $to ?: 2147483647); // 32bit compat default
    }

    /**
     * Returns a random letter from a to z
     *
     * @return string
     */
    public static function randomLetter()
    {
        return chr(mt_rand(97, 122));
    }

    /**
     * Returns a random element from a passed array
     *
     * @param  array $array
     * @return mixed
     */
    public static function randomElement($array = array('a', 'b', 'c'))
    {
        return $array ? $array[self::randomKey($array)] : null;
    }

    /**
     * Returns a random key from a passed associative array
     *
     * @param  array $array
     * @return mixed
     */
    public static function randomKey($array = array())
    {
        if (!$array) {
            return null;
        }
        $keys = array_keys($array);
        $key = $keys[mt_rand(0, count($keys) - 1)];

        return $key;
    }

    /**
     * Replaces all hash sign ('#') occurrences with a random number
     * Replaces all percentage sign ('%') occurrences with a not null number
     *
     * @param  string $string String that needs to bet parsed
     * @return string
     */
    public static function numerify($string = '###')
    {
        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\%/u', 'static::randomDigitNotNull', $string);

        return $string;
    }

    /**
     * Replaces all question mark ('?') occurrences with a random letter
     *
     * @param  string $string String that needs to bet parsed
     * @return string
     */
    public static function lexify($string = '????')
    {
        return preg_replace_callback('/\?/u', 'static::randomLetter', $string);
    }

    /**
     * Replaces hash signs and question marks with random numbers and letters
     *
     * @param  string $string String that needs to bet parsed
     * @return string
     */
    public static function bothify($string = '## ??')
    {
        return static::lexify(static::numerify($string));
    }

    /**
     * Converts string to lowercase.
     * Uses mb_string extension if available
     * @param  string $string String that should be converted to lowercase
     * @return string
     */
    public static function toLower($string = '')
    {
        return extension_loaded('mbstring') ? mb_strtolower($string, 'UTF-8') : strtolower($string);
    }

    /**
     * Converts string to uppercase.
     * Uses mb_string extension if available
     * @param  string $string String that should be converted to uppercase
     * @return string
     */
    public static function toUpper($string = '')
    {
        return extension_loaded('mbstring') ? mb_strtoupper($string, 'UTF-8') : strtoupper($string);
    }

    /**
     * Chainable method for making any formatter optional
     * @param float $weight Set the percentage that the formatter is empty.
     *                      "0" would always return null, "1" would always return the formatter
     * @return mixed|null
     */
    public function optional($weight = 0.5)
    {
        if (mt_rand() / mt_getrandmax() <= $weight) {
            return $this->generator;
        }

        return new NullGenerator();
    }

    /**
     * Chainable method for making any formatter unique.
     *
     * <code>
     * // will never return twice the same value
     * $faker->unique()->randomElement(array(1, 2, 3));
     * </code>
     *
     * @param boolean $reset      If set to true, resets the list of existing values
     * @param integer $maxRetries Maximum number of retries to find a unique value,
     *                            After which an OverflowExcption is thrown.
     * @throws OverflowException When no unique value can be found by iterating $maxRetries times
     *
     * @return UniqueGenerator A proxy class returning only non-existing values
     */
    public function unique($reset = false, $maxRetries = 10000)
    {
        if ($reset || !$this->unique) {
            $this->unique = new UniqueGenerator($this->generator, $maxRetries);
        }

        return $this->unique;
    }
}
