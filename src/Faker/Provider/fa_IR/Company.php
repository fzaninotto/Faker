<?php

namespace Faker\Provider\fa_IR;

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
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    );

    protected static $companyField = array(
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد'
    );

    protected static $contract = array(
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    );

    protected static $jobTitle = array(
        'دریانورد', 'مدیر حساب', 'حسابدار', 'هنرپیشه',  'کارمند تنظیم', 'مدیر', 'قاضی دادگستری', 'مدیریت خدمات اداری', 'ناظران حمایت اداری', 'مدیر تبلیغات یا مدیر تبلیغات', 'نمایندگی فروش تبلیغات', 'مهندس هوافضا', 'مدیر مزرعه کشاورزی', 'کشاورز', 'مهندس', 'اپراتور', 'بازرس',  'نمایندگی فروش', 'تکنسین', 'معلم', 'تکنسین', 'کارگر', 'همماندار', 'خلبان'
      );

    /**
     * @example 'مهندس'
     * @return string
     */
    public static function jobTitle()
    {
        return static::randomElement(static::$jobTitle);
    }
    /**
     * @example 'شرکت'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::$companyField);
    }

    /**
    * @example 'تمام وقت'
    * @return string
    */
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
