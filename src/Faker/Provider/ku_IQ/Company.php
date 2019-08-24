<?php

namespace Faker\Provider\ku_IQ;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static $bsWords = array(
        array()
    );

    protected static $catchPhraseWords = array(
        array('خزمه‌تگوزاری','چارسه‌ر','ڕێكخراو'),
        array(
            'زێڕی','زیره‌كی','گه‌شپێدراو','پێشكه‌وتوو', 'نێوده‌وڵه‌تی', 'تایبه‌ت', 'ڕوون',
            ),
    );

    protected static $companyPrefix = array('كۆمپانیا','دامه‌زراوه‌','گرووپ','نووسینگه‌','ناوه‌ندی ئه‌كادیمی','پێشانگا');

    protected static $companySuffix = array('موڵكایه‌تی', 'بازرگانی سنووردار', 'بازرگانی گشتی', 'وه‌ هاوبه‌شانی');

    /**
     * @example 
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = array();
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }
}
