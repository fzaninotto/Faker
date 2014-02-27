<?php

namespace Faker\Provider;

class Text extends \Faker\Provider\Base
{
    protected static $baseText = <<<'EOT'
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
EOT;
    protected static $normalizedText = null;
    protected static $tables = array();

    /**
     * Generate a text string by the Markov chain algorithm.
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @example 'Lorem ipsum dolor sit amet'
     * @param  integer $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param  integer $indexSize Determines how many words are considered for the generation of the next word. The minimum is 1, and it produces the higher level of randomness, although the
     *                            generated text usually doesn't make sense. Higher index size (up to 10) produce more correct text, at the price of less randomness.
     * @return string
     */
    public static function realText($maxNbChars = 200, $indexSize = 2)
    {
        if ($maxNbChars < 10) {
            throw new \InvalidArgumentException('maxNbChars must be at least 10');
        }

        if ($indexSize < 1) {
            throw new \InvalidArgumentException('indexSize must be at least 1');
        }

        if ($indexSize > 10) {
            throw new \InvalidArgumentException('indexSize must be at most 10');
        }

        if (!isset(static::$tables[$indexSize])) {
            $text = static::getNormalizedText();

            // split into look up parts
            $parts = preg_split('/ /u', $text, -1, PREG_SPLIT_NO_EMPTY);

            // generate look up table
            $table = array();
            for ($i = $indexSize, $max = count($parts) - 1; $i < $max; $i++) {
                // calculate index
                $index = implode(' ', array_slice($parts, $i - $indexSize, $indexSize));
                if (!isset($table[$index])) $table[$index] = array();

                // value: next part
                $table[$index][] = $parts[$i];
            }

            // cache look up table for performance
            static::$tables[$indexSize] = $table;
        }

        $table = static::$tables[$indexSize];
        $result = array();
        $resultLength = 0;

        // take a random starting point
        $next = static::randomKey($table);
        while ($resultLength < $maxNbChars && isset($table[$next])) {
            // fetch a random element to append
            $append = static::randomElement($table[$next]);

            // calculate next index
            $next = preg_split('/ /u', $next, -1, PREG_SPLIT_NO_EMPTY);
            $next[] = $append;
            array_shift($next);
            $next = implode(' ', $next);

            // ensure text starts with an uppercase letter
            if ($resultLength == 0 && !preg_match('/^\p{Lu}/u', $append)) continue;

            // append the element
            $result[] = $append;
            $resultLength += strlen($append);
        }

        // remove the element that caused the text to overflow
        array_pop($result);

        // build result
        $result = implode(' ', $result);

        return $result.'.';
    }

    protected static function getNormalizedText()
    {
        if (static::$normalizedText === null) {
            static::$normalizedText = static::$baseText;
            static::$normalizedText = preg_replace('/\s+/', ' ', static::$normalizedText);
        }

        return static::$normalizedText;
    }
}
