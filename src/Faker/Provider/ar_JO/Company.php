<?php

namespace Faker\Provider\ar_JO;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static array $bsWords = [
        [],
    ];

    protected static array $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية',
            'الذكية',
            'المتطورة',
            'المتقدمة',
            'الدولية',
            'المتخصصه',
            'السريعة',
            'المثلى',
            'الابداعية',
            'المتكاملة',
            'المتغيرة',
            'المثالية',
        ],
    ];

    protected static array $companyPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected static array $companySuffix = ['وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه'];

    /**
     * @example 'مؤسسة'
     */
    public function companyPrefix(): string
    {
        return static::randomElement(self::$companyPrefix);
    }

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
