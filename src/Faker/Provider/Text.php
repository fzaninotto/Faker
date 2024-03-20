<?php

namespace Faker\Provider;

abstract class Text extends Base
{
    protected static string $baseText = '';
    protected static string $separator = ' ';
    protected static int $separatorLen = 1;
    protected ?array $explodedText = null;
    protected array $consecutiveWords = [];
    protected static bool $textStartsWithUppercase = true;

    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param int $indexSize  Determines how many words are considered for the generation of the next word.
     *                        The minimum is 1, and it produces a higher level of randomness, although the
     *                        generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                        produce more correct text, at the price of less randomness.
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     */
    public function realText(int $maxNbChars = 200, int $indexSize = 2): string
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
        $result = [];
        $resultLength = 0;
        // take a random starting point
        $next = static::randomKey($words);
        while ($resultLength < $maxNbChars && isset($words[$next])) {
            // fetch a random word to append
            $word = static::randomElement($words[$next]);

            // calculate next index
            $currentWords = static::explode($next);
            $currentWords[] = $word;
            \array_shift($currentWords);
            $next = static::implode($currentWords);

            // ensure text starts with an uppercase letter
            if (0 === $resultLength && !static::validStart($word)) {
                continue;
            }

            // append the element
            $result[] = $word;
            $resultLength += static::strlen($word) + static::$separatorLen;
        }

        // remove the element that caused the text to overflow
        \array_pop($result);

        // build result
        $result = static::implode($result);

        return static::appendEnd($result);
    }

    protected function getConsecutiveWords($indexSize)
    {
        if (!isset($this->consecutiveWords[$indexSize])) {
            $parts = $this->getExplodedText();
            $words = [];
            $index = [];
            for ($i = 0; $i < $indexSize; ++$i) {
                $index[] = \array_shift($parts);
            }

            foreach ($parts as $iValue) {
                $stringIndex = static::implode($index);
                if (!isset($words[$stringIndex])) {
                    $words[$stringIndex] = [];
                }
                $word = $iValue;
                $words[$stringIndex][] = $word;
                \array_shift($index);
                $index[] = $word;
            }
            // cache look up words for performance
            $this->consecutiveWords[$indexSize] = $words;
        }

        return $this->consecutiveWords[$indexSize];
    }

    protected function getExplodedText(): array
    {
        if (null === $this->explodedText) {
            $this->explodedText = static::explode(\preg_replace('/\s+/u', ' ', static::$baseText));
        }

        return $this->explodedText;
    }

    protected static function explode($text): array
    {
        return \explode(static::$separator, $text);
    }

    protected static function implode($words): string
    {
        return \implode(static::$separator, $words);
    }

    protected static function strlen($text): int
    {
        return \function_exists('mb_strlen') ? \mb_strlen($text, 'UTF-8') : \strlen($text);
    }

    protected static function validStart($word): bool|int
    {
        $isValid = true;
        if (static::$textStartsWithUppercase) {
            $isValid = \preg_match('/^\p{Lu}/u', $word);
        }

        return $isValid;
    }

    protected static function appendEnd($text): string
    {
        return \preg_replace("/([ ,-:;\x{2013}\x{2014}]+$)/us", '', $text).'.';
    }
}
