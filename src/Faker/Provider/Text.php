<?php

namespace Faker\Provider;

abstract class Text extends \Faker\Provider\Base
{
    protected static $baseText = '';
    protected $explodedText = null;
    protected $consecutiveWords = array();

    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     * @param  integer $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param  integer $indexSize  Determines how many words are considered for the generation of the next word.
     *                             The minimum is 1, and it produces the higher level of randomness, although the
     *                             generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                             produce more correct text, at the price of less randomness.
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

        if ($indexSize > 5) {
            throw new \InvalidArgumentException('indexSize must be at most 5');
        }

        $words = $this->getConsecutiveWords($indexSize);
        $result = array();
        $resultLength = 0;
        // take a random starting point
        $next = static::randomKey($words);
        while ($resultLength < $maxNbChars && isset($words[$next])) {
            // fetch a random word to append
            $word = static::randomElement($words[$next]);

            // calculate next index
            $currentWords = explode(' ', $next);
            $currentWords[] = $word;
            array_shift($currentWords);
            $next = implode(' ', $currentWords);

            // ensure text starts with an uppercase letter
            if ($resultLength == 0 && !preg_match('/^\p{Lu}/u', $word)) {
                continue;
            }

            // append the element
            $result[] = $word;
            $resultLength += strlen($word) + 1;
        }

        // remove the element that caused the text to overflow
        array_pop($result);

        // build result
        $result = implode(' ', $result);

        return $result.'.';
    }

    protected function getConsecutiveWords($indexSize)
    {
        if (!isset($this->consecutiveWords[$indexSize])) {
            $parts = $this->getExplodedText();
            $words = array();
            $index = array();
            for ($i = 0; $i < $indexSize; $i++) {
                $index[] = array_shift($parts);
            }

            for ($i = 0, $count = count($parts); $i < $count; $i++) {
                $stringIndex = implode(' ', $index);
                if (!isset($words[$stringIndex])) {
                    $words[$stringIndex] = array();
                }
                $word = $parts[$i];
                $words[$stringIndex][] = $word;
                array_shift($index);
                $index[] = $word;
            }
            // cache look up words for performance
            $this->consecutiveWords[$indexSize] = $words;
        }

        return $this->consecutiveWords[$indexSize];
    }

    protected function getExplodedText()
    {
        if ($this->explodedText === null) {
            $this->explodedText = explode(' ', preg_replace('/\s+/u', ' ', static::$baseText));
        }

        return $this->explodedText;
    }
}
