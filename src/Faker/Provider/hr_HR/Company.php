<?php

namespace Faker\Provider\hr_HR;

class Company extends \Faker\Provider\Company
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
<<<<<<< HEAD
=======
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
>>>>>>> ffa809311559752cb5a6c383eb8cbf9eea9d1479
     * @example 'Ltd'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
