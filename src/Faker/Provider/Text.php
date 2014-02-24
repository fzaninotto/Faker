<?php

namespace Faker\Provider;

class Text extends \Faker\Provider\Base
{
    protected static $baseText = <<<EOT
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
EOT;
    protected static $normalizedText = null;
    protected static $tables = array();

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a random valid looking text.
     *
     * @example 'Lorem ipsum dolor sit amet'
     * @param  integer $maxNbChars Maximum number of characters the text should contain
     * @param  integer $indexSize Determines how many words / chars are considered for the generation of the next token (higher number = correcter, lower number = more random)
     * @param  string $indexUnit Determines whether 'words' or 'chars' represent the basis of the generator.
     * @return string
     */
    public static function text($maxNbChars = 200, $indexSize = 2, $indexUnit = 'words')
    {
        if (!isset(static::$tables[$indexUnit.'-'.$indexSize])) {
            $text = static::getNormalizedText();

            switch ($indexUnit) {
                case 'words':
                    $delimiter = ' ';
                break;
                case 'chars':
                    $delimiter = '';
                break;
                default:
                    throw new \InvalidArgumentException('Unexpected indexUnit');
            }

            // split into look up parts
            $parts = preg_split('/'.preg_quote($delimiter, '/').'/u', $text, -1, PREG_SPLIT_NO_EMPTY);

            // generate look up table
            $table = array();
            for ($i = $indexSize, $max = count($parts) - 1; $i < $max; $i++) {
                // calculate index
                $index = implode($delimiter, array_slice($parts, $i - $indexSize, $indexSize));
                if (!isset($table[$index])) $table[$index] = array();

                // value: next part
                $table[$index][] = $parts[$i];
            }

            // cache look up table for performance
            static::$tables[$indexUnit.'-'.$indexSize] = array(
                $delimiter,
                $table
            );
        }

        list($delimiter, $table) = static::$tables[$indexUnit.'-'.$indexSize];
        $result = array();
        $resultLength = 0;

        // take a random starting point
        $next = static::randomKey($table);
        while ($resultLength < $maxNbChars && isset($table[$next])) {
            // fetch a random element to append
            $append = static::randomElement($table[$next]);

            // calculate next index
            $next = preg_split('/'.preg_quote($delimiter, '/').'/u', $next, -1, PREG_SPLIT_NO_EMPTY);
            $next[] = $append;
            array_shift($next);
            $next = implode($delimiter, $next);

            // ensure text starts with an uppercase letter
            if ($resultLength == 0 && !preg_match('/^\p{Lu}/u', $append)) continue;

            // append the element
            $result[] = $append;
            $resultLength += strlen($append);
        }

        // remove the element that caused the text to overflow
        array_pop($result);

        // build result
        $result = implode($delimiter, $result);

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
