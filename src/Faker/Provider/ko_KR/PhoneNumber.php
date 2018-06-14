<?php

namespace Faker\Provider\ko_KR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '010-####-####',
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',
        '1588-####',
    );
    
    protected static $cellPhoneFormats = array(
        '010-####-####',
    );
    
    public function cellPhoneNumber()
    {
        $format = self::randomElement(static::$cellPhoneFormats);

        return self::numerify($this->generator->parse($format));
    }
    
    protected static $commonPhoneFormats = array(
        // Standard formats
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',
    );
    
    public function commonPhoneNumber()
    {
        $format = self::randomElement(static::$commonPhoneFormats);

        return self::numerify($this->generator->parse($format));
    }
}
