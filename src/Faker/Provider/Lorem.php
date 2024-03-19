<?php

namespace Faker\Provider;

class Lorem extends Base
{
    protected static array $wordList = [
        'alias',
        'consequatur',
        'aut',
        'perferendis',
        'sit',
        'voluptatem',
        'accusantium',
        'doloremque',
        'aperiam',
        'eaque',
        'ipsa',
        'quae',
        'ab',
        'illo',
        'inventore',
        'veritatis',
        'et',
        'quasi',
        'architecto',
        'beatae',
        'vitae',
        'dicta',
        'sunt',
        'explicabo',
        'aspernatur',
        'aut',
        'odit',
        'aut',
        'fugit',
        'sed',
        'quia',
        'consequuntur',
        'magni',
        'dolores',
        'eos',
        'qui',
        'ratione',
        'voluptatem',
        'sequi',
        'nesciunt',
        'neque',
        'dolorem',
        'ipsum',
        'quia',
        'dolor',
        'sit',
        'amet',
        'consectetur',
        'adipisci',
        'velit',
        'sed',
        'quia',
        'non',
        'numquam',
        'eius',
        'modi',
        'tempora',
        'incidunt',
        'ut',
        'labore',
        'et',
        'dolore',
        'magnam',
        'aliquam',
        'quaerat',
        'voluptatem',
        'ut',
        'enim',
        'ad',
        'minima',
        'veniam',
        'quis',
        'nostrum',
        'exercitationem',
        'ullam',
        'corporis',
        'nemo',
        'enim',
        'ipsam',
        'voluptatem',
        'quia',
        'voluptas',
        'sit',
        'suscipit',
        'laboriosam',
        'nisi',
        'ut',
        'aliquid',
        'ex',
        'ea',
        'commodi',
        'consequatur',
        'quis',
        'autem',
        'vel',
        'eum',
        'iure',
        'reprehenderit',
        'qui',
        'in',
        'ea',
        'voluptate',
        'velit',
        'esse',
        'quam',
        'nihil',
        'molestiae',
        'et',
        'iusto',
        'odio',
        'dignissimos',
        'ducimus',
        'qui',
        'blanditiis',
        'praesentium',
        'laudantium',
        'totam',
        'rem',
        'voluptatum',
        'deleniti',
        'atque',
        'corrupti',
        'quos',
        'dolores',
        'et',
        'quas',
        'molestias',
        'excepturi',
        'sint',
        'occaecati',
        'cupiditate',
        'non',
        'provident',
        'sed',
        'ut',
        'perspiciatis',
        'unde',
        'omnis',
        'iste',
        'natus',
        'error',
        'similique',
        'sunt',
        'in',
        'culpa',
        'qui',
        'officia',
        'deserunt',
        'mollitia',
        'animi',
        'id',
        'est',
        'laborum',
        'et',
        'dolorum',
        'fuga',
        'et',
        'harum',
        'quidem',
        'rerum',
        'facilis',
        'est',
        'et',
        'expedita',
        'distinctio',
        'nam',
        'libero',
        'tempore',
        'cum',
        'soluta',
        'nobis',
        'est',
        'eligendi',
        'optio',
        'cumque',
        'nihil',
        'impedit',
        'quo',
        'porro',
        'quisquam',
        'est',
        'qui',
        'minus',
        'id',
        'quod',
        'maxime',
        'placeat',
        'facere',
        'possimus',
        'omnis',
        'voluptas',
        'assumenda',
        'est',
        'omnis',
        'dolor',
        'repellendus',
        'temporibus',
        'autem',
        'quibusdam',
        'et',
        'aut',
        'consequatur',
        'vel',
        'illum',
        'qui',
        'dolorem',
        'eum',
        'fugiat',
        'quo',
        'voluptas',
        'nulla',
        'pariatur',
        'at',
        'vero',
        'eos',
        'et',
        'accusamus',
        'officiis',
        'debitis',
        'aut',
        'rerum',
        'necessitatibus',
        'saepe',
        'eveniet',
        'ut',
        'et',
        'voluptates',
        'repudiandae',
        'sint',
        'et',
        'molestiae',
        'non',
        'recusandae',
        'itaque',
        'earum',
        'rerum',
        'hic',
        'tenetur',
        'a',
        'sapiente',
        'delectus',
        'ut',
        'aut',
        'reiciendis',
        'voluptatibus',
        'maiores',
        'doloribus',
        'asperiores',
        'repellat',
    ];

    /**
     * @example 'Lorem'
     */
    public static function word(): string
    {
        return static::randomElement(static::$wordList);
    }

    /**
     * Generate an array of random words.
     *
     * @param int  $nb     how many words to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @example array('Lorem', 'ipsum', 'dolor')
     */
    public static function words(int $nb = 3, bool $asText = false): array|string
    {
        $words = [];
        for ($i = 0; $i < $nb; ++$i) {
            $words[] = static::word();
        }

        return $asText ? \implode(' ', $words) : $words;
    }

    /**
     * Generate a random sentence.
     *
     * @param int  $nbWords         around how many words the sentence should contain
     * @param bool $variableNbWords set to false if you want exactly $nbWords returned,
     *                              otherwise $nbWords may vary by +/-40% with a minimum of 1
     *
     * @example 'Lorem ipsum dolor sit amet.'
     */
    public static function sentence(int $nbWords = 6, bool $variableNbWords = true): string
    {
        if ($nbWords <= 0) {
            return '';
        }
        if ($variableNbWords) {
            $nbWords = self::randomizeNbElements($nbWords);
        }

        $words = static::words($nbWords);
        $words[0] = \ucwords($words[0]);

        return \implode(' ', $words).'.';
    }

    /**
     * Generate an array of sentences.
     *
     * @param int  $nb     how many sentences to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @example array('Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.')
     */
    public static function sentences(int $nb = 3, bool $asText = false): array|string
    {
        $sentences = [];
        for ($i = 0; $i < $nb; ++$i) {
            $sentences[] = static::sentence();
        }

        return $asText ? \implode(' ', $sentences) : $sentences;
    }

    /**
     * Generate a single paragraph.
     *
     * @param int  $nbSentences         around how many sentences the paragraph should contain
     * @param bool $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                  otherwise $nbSentences may vary by +/-40% with a minimum of 1
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     */
    public static function paragraph(int $nbSentences = 3, bool $variableNbSentences = true): string
    {
        if ($nbSentences <= 0) {
            return '';
        }
        if ($variableNbSentences) {
            $nbSentences = self::randomizeNbElements($nbSentences);
        }

        return \implode(' ', static::sentences($nbSentences));
    }

    /**
     * Generate an array of paragraphs.
     *
     * @param int  $nb     how many paragraphs to return
     * @param bool $asText if true the paragraphs are returned as one string, separated by two newlines
     *
     * @example array($paragraph1, $paragraph2, $paragraph3)
     */
    public static function paragraphs(int $nb = 3, bool $asText = false): array|string
    {
        $paragraphs = [];
        for ($i = 0; $i < $nb; ++$i) {
            $paragraphs[] = static::paragraph();
        }

        return $asText ? \implode("\n\n", $paragraphs) : $paragraphs;
    }

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum 5)
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     */
    public static function text(int $maxNbChars = 200): string
    {
        if ($maxNbChars < 5) {
            throw new \InvalidArgumentException('text() can only generate text of at least 5 characters');
        }

        $type = ($maxNbChars < 25) ? 'word' : (($maxNbChars < 100) ? 'sentence' : 'paragraph');

        $text = [];
        while (empty($text)) {
            $size = 0;

            // until $maxNbChars is reached
            while ($size < $maxNbChars) {
                $word = ($size ? ' ' : '').static::$type();
                $text[] = $word;

                $size += \strlen($word);
            }

            \array_pop($text);
        }

        if ('word' === $type) {
            // capitalize first letter
            $text[0] = \ucwords($text[0]);

            // end sentence with full stop
            $text[\count($text) - 1] .= '.';
        }

        return \implode('', $text);
    }

    protected static function randomizeNbElements($nbElements): int
    {
        return (int) ($nbElements * \random_int(60, 140) / 100) + 1;
    }
}
