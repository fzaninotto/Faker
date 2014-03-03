<?php

namespace Faker\Provider;

abstract class Text extends \Faker\Provider\Base
{
    protected static $baseText = '';
    protected $explodedText = null;
    protected $consecutiveWords = array();

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
    public function realText($maxNbChars = 200, $indexSize = 2)
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

        if (!isset($this->consecutiveWords[$indexSize])) {
            $parts = $this->getExplodedText();

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
            $this->consecutiveWords[$indexSize] = $table;
        }

        $table = $this->consecutiveWords[$indexSize];
        $result = array();
        $resultLength = 0;

        // take a random starting point
        $next = static::randomKey($table);
        while ($resultLength < $maxNbChars && isset($table[$next])) {
            // fetch a random element to append
            $append = static::randomElement($table[$next]);

            // calculate next index
            $next = explode(' ', $next);
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

    protected function getExplodedText()
    {
        if ($this->explodedText === null) {
            $this->explodedText = static::$baseText;
            $this->explodedText = explode(' ', preg_replace('/\s+/', ' ', $this->explodedText));
        }

        return $this->explodedText;
    }
}
