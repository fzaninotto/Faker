<?php

namespace Faker\Provider\fa_IR;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    ];

    protected static array $companyPrefix = [
        'شرکت',
        'موسسه',
        'سازمان',
        'بنیاد',
    ];

    protected static array $companyField = [
        'فناوری اطلاعات',
        'راه و ساختمان',
        'توسعه معادن',
        'استخراج و اکتشاف',
        'سرمایه گذاری',
        'نساجی',
        'کاریابی',
        'تجهیزات اداری',
        'تولیدی',
        'فولاد',
    ];

    protected static array $contract = [
        'رسمی',
        'پیمانی',
        'تمام وقت',
        'پاره وقت',
        'پروژه ای',
        'ساعتی',
    ];

    /**
     * @example 'شرکت'
     */
    public static function companyPrefix(): string
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     */
    public static function companyField(): string
    {
        return static::randomElement(static::$companyField);
    }

    /**
     * @example 'تمام وقت'
     */
    public function contract(): string
    {
        return static::randomElement(static::$contract);
    }
}
