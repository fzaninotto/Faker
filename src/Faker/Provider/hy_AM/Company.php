<?php

namespace Faker\Provider\hy_AM;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} եղբայրներ',
    ];

    protected static array $catchPhraseWords = [
    ];

    protected static array $bsWords = [
    ];

    protected static array $companySuffix = ['ՍՊԸ', 'և որդիներ', 'ՓԲԸ', 'ԲԲԸ'];

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase(): string
    {
        $result = [];
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return \implode(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs(): string
    {
        $result = [];
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return \implode(' ', $result);
    }
}
