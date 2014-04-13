<?php

namespace Faker\Provider;

use Faker\Generator;
use Faker\NullGenerator;
use Faker\UniqueGenerator;
use Faker\WrongGenerator;

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
        if ($to !== null && $from > $to) {
            $tmp = $from;
            $from = $to;
            $to = $tmp;
        }
        
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
     * Returns random elements from a provided array
     *
     * @param  array            $array Array to take elements from. Defaults to a-f
     * @param  integer          $count Number of elements to take.
     * @throws \LengthException When requesting more elements than provided
     *
     * @return array New array with $count elements from $array
     */
    public static function randomElements(array $array = array('a', 'b', 'c'), $count = 1)
    {
        $allKeys = array_keys($array);
        $numKeys = count($allKeys);

        if ($numKeys < $count) {
            throw new \LengthException(sprintf('Cannot get %d elements, only %d in array', $count, $numKeys));
        }

        $highKey = $numKeys - 1;
        $keys = $elements = array();
        $numElements = 0;

        while ($numElements < $count) {
            $num = mt_rand(0, $highKey);
            if (isset($keys[$num])) {
                continue;
            }

            $keys[$num] = true;
            $elements[] = $array[$allKeys[$num]];
            $numElements++;
        }

        return $elements;
    }

    /**
     * Returns a random element from a passed array
     *
     * @param  array $array
     * @return mixed
     */
    public static function randomElement($array = array('a', 'b', 'c'))
    {
        if (!$array) {
            return null;
        }
        $elements = static::randomElements($array, 1);

        return $elements[0];
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
     * Uses mb_string extension if available.
     *
     * @param  string $string String that should be converted to lowercase
     * @return string
     */
    public static function toLower($string = '')
    {
        return extension_loaded('mbstring') ? mb_strtolower($string, 'UTF-8') : strtolower($string);
    }

    /**
     * Converts string to uppercase.
     * Uses mb_string extension if available.
     *
     * @param  string $string String that should be converted to uppercase
     * @return string
     */
    public static function toUpper($string = '')
    {
        return extension_loaded('mbstring') ? mb_strtoupper($string, 'UTF-8') : strtoupper($string);
    }

    /**
     * Chainable method for making any formatter optional.
     *
     * @param float $weight Set the probability of receiving a null value.
     *                      "0" will always return null, "1" will always return the generator.
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
     * Chainable method for using a different formatter than the one called and return a wrong value.
     *
     * @param float $weight Set the probability of receiving a wrong value.
     *                      "0" will always return the wrong value generator, "1" will always return the generator.
     * @param array $formatters array of formatters with arguments for each formatter (key is formatter name and value is an array of arguments).
     *                          if the key is numeric and the value is the formatter name.
     *                          if the array of formatters is empty, it uses a predefined set of formatters.
     * @param boolean $asString convert generated objects and arrays to string, default = true
     * @return mixed|null
     */
    public function wrong($weight = 0.5, array $formatters = array(), $asString = true)
    {
        if (mt_rand() / mt_getrandmax() <= $weight) {
            return $this->generator;
        }

        return new WrongGenerator($this->generator, $formatters, $asString);
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
