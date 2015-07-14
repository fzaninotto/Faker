<?php

namespace Faker\Provider\hr_HR;

class Company extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
    );

    protected static $companySuffix = array(
        'd.o.o.', 'j.d.o.o.', 'Security'
    );

    protected static $companyPrefix = array(
        'Prijevoznički obrt', 'Informatički obrt', 'Autoškola', 'Market', 'Suvenirnica', 'Cvjećarnica',
        'Mesnica', 'Voćarna', 'Kamenorezački obrt', 'Turistička agencija', 'Kladionice'
    );

    /**
     * @example 'Kladionice Ćorluka', 'Marić Security'
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @example 'Ltd'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
