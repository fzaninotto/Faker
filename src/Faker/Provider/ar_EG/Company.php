<?php


namespace Faker\Provider\ar_EG;

/**
 * Provides some generated company names
 *
 * Class Company
 * @package Faker\Provider\ar_EG
 */
class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static $catchPhraseWords = array(
        array('الخدمات', 'الانظمة', 'للتعدين', 'للحديد والصلب', 'السيارات', 'للغاز الطبيعي'),
        array(
            'الذكية', 'الدولية', 'الالمانية', 'المتخصصة',
            'السريعة', 'الخيرية', 'العالمية', 'للاتصالاات',
            'المصرية', 'العربية', 'الغازات الطبيعية', 'مصر'
        ),
    );

    protected static $companyPrefix = array(
        'شركة', 'مؤسسة', 'مجموعة', 'مكتب',
        'معرض', 'اكاديمية', 'مطاعم', 'محلات'
    );

    protected static $companySuffix = array(
        'واولاده', 'للغزل والنسيج', 'وشركائه', 'للزيت', 'س.م.ح'
    );

    /**
     * @example شركة
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example شركة مصر الالمانية
     * @return string
     */
    public function catchPhrases()
    {
        $result =  array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }
}
