<?php

namespace Faker\Provider\ar_SA;

use Faker\Calculator\Luhn;

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
     * @example 'الحلول المتقدمة'
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

    /**
     * example 7001010101.
     **/
    public static function companyIdNumber(): string
    {
        $partialValue = static::numerify(700 .\str_repeat('#', 6));

        return Luhn::generateLuhnNumber($partialValue);
    }
}
