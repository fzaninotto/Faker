<?php

namespace Faker\Provider\kk_KZ;

class Company extends \Faker\Provider\Company
{
    protected static $companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static $companyPrefixes = array(
        'АҚ', 'ЖШС', 'ЖАҚ'
    );

    protected static $companyNameSuffixes = array(
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком'
    );

    protected static $companyElements = array(
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    );

    /**
     * @example 'ЖШС АлматыТелеком'
     */
    public function company()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::$companyNameSuffixes);
    }

    /**
     * National Business Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/!utWCM/p/b1/04_Sj9Q1MjAwsDQ1s9CP0I_KSyzLTE8syczPS8wB8aPM4oO8PE2cnAwdDSxMw4wMHE08nZ2CA0KDXcwMgQoikRUYWIY4gxS4hwU4mRkbGBgTp98AB3A0IKQ_XD8KVQkWF4AV4LHCzyM_N1U_uKhUPzcqx83SU9cRANth_Rk!/dl4/d5/L0lHSkovd0RNQU5rQUVnQSEhLzRKVUUvZW4!/
     * @param  \DateTime $registrationDate
     * @return string 12 digits, like 150140000019
     */
    public static function businessIdentificationNumber(\DateTime $registrationDate = null)
    {
        if (!$registrationDate) {
            $registrationDate = \Faker\Provider\DateTime::dateTimeThisYear();
        }

        $dateAsString              = $registrationDate->format('ym');
        $legalEntityType           = (string) static::numberBetween(4, 6);
        $legalEntityAdditionalType = (string) static::numberBetween(0, 3);
        $randomDigits              = (string) static::numerify('######');

        return $dateAsString . $legalEntityType . $legalEntityAdditionalType . $randomDigits;
    }
}
