<?php

namespace Faker\Provider\ps_AF;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    );

    protected static $companyPrefix = array(
        'شرکت', 'موسسه', 'بنسټ'
    );

    protected static $companyField = array(
        'خبرتیاوې', 'بیا رغاونه', 'کان کیندنه',
        'پانګه اچونه', 'نساجی', 'کارموندنه', 'سرک جوړونه', 'تولیدی', 'کور جوړونه'
    );

    protected static $contract = array(
        'رسمی', 'ټوله ورځ', 'له رسمي وخت وروسته', 'د پروژې اړوند', 'ساعتی',
    );

    /**
     * @example 'بنسټ'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'پانګه اچونه'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::$companyField);
    }

    /**
    * @example 'ټوله ورځ'
    * @return string
    */
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
