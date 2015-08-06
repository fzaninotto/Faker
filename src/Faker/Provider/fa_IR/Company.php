<?php

namespace Faker\Provider\fa_IR;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{firstName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
        '{{companyPrefix}} {{city}} {{companySuffix}}',
    );
    
    protected static $companyPrefix = array('باربری', 'تولیدی', 'توسعه', 'شرکت', 'صنایع', 'کارخانه', 'گروه صنعتی', 'کشت و صنعت', 'مجموعه', 'موسسه');

    protected static $companySuffix = array('ایران', 'پارسیان', 'جنوب', 'سپاهان', 'سهامی خاص', 'سهامی عام', 'شرق', 'شمال', 'غرب', 'مسئولیت محدود', 'و پسران', 'و شرکا');

    protected static $catchPhraseWords = array(
        array(
            'آزمایشگاه', 'آژانس', 'آموزش', 'تعمیرات', 'تهیه و بسته بندی', 'تهیه و تولید', 'تولید', 'خدمات', 'خرید و فروش', 'دفتر', 'سرویس', 'فروش', 'لوازم', 
        ),
        array(
            'آرایشی و بهداشتی', 'آکواریوم', 'بیمه', 'پزشکی', 'ثبت', 'خدماتی', 'دخانیات', 'درمانی', 'سخت افزار', 'عکاسی و فیلمبرداری', 'کامپیوتر', 'لوازم الکترونیکی', 'مجالس', 'مسافرتی', 'مسکن', 'مشاور مسکن', 'مواد غذایی', 'نرم افزار', 
        ),
    );

    protected static $bsWords = array();

    /**
     * @example 'شرکت'
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example 'تهیه و تولید سخت افزار'
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join($result, ' ');
    }

    /**
     * @example ''
     */
    public function bs()
    {
        $result = array();
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join($result, ' ');
    }
}
