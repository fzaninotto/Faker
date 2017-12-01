<?php

namespace Faker\Provider\fa_AF;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Afghanistan
     */
    protected static $formats = array(
        // Landlines
        '+9320#######', // Kabul province - International Landlines (fixed lines) format
        '020#######',  // Kabul province - Standard Landlines (fixed lines) format
        
        '+9340#######', // Herat province
        '040#######',  // Herat province

        '+9330#######', // Kandahar province
        '030#######',  // Kandahar province

        '+9350#######', // Balkh province
        '050#######',  // Balkh province

        '+9360#######', // Jalalabad province
        '060#######',  // Jalalabad province
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Afghanistan
     */
    protected static $mobileNumberPrefixes = array(
        // AWCC - International Mobile lines (cellular phones) formats
        '+9370#######',
        '070#######',
        // AWCC - Standard Mobile lines (cellular phones) formats
        '+9371#######',
        '071#######',
        
        // Roshan
        '+9379#######',
        '079#######',
        '+9372#######',
        '072#######',

        // Etisalat
        '+9378#######',
        '078#######',
        '+9373#######',
        '073#######',
        
        // MTN
        '+9377#######',
        '077#######',
        '+9376#######',
        '076#######',

        // Salaam
        '+9374#######',
        '074#######',

        // Afghan Telecom
        '+9375#######',
        '075#######',
        '+9372#######',
        '072#######',
    );

    /**
     * @example '+93743758087'
     * @example '0718872113'
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }

    /**
     * @example '+93408662902'
     * @example '0402811933'
     */
    public function phoneNumber()
    {
        return static::numerify(static::randomElement(static::$formats));
    }
}
