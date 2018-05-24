<?php

namespace Faker\Provider\nl_SR;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('BV', 'NV', 'eenmanszaak', 'Stichting');


    public static function ein()
    {
        return sprintf("%02d", self::randomNumber(5, true));
    }

    /**
     * Alias dutch vat number format
     */
    public static function kkf_number()
    {
        return self::ein();
    }
}