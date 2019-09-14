<?php

namespace Faker\Provider\ko_KR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    //reference : https://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%A0%84%ED%99%94%EB%B2%88%ED%98%B8_%EC%B2%B4%EA%B3%84
    
    protected static $formats = array(
        '010-####-####',
        '011-####-####',
        '012-####-####',
        '070-####-####' 
    );
    
    public function localAreaPhoneNumber()
    {
        $format = self::randomElement(array_slice(static::$formats, 0, 6));

        return self::numerify($this->generator->parse($format));
    }
    
    
    
    public function cellPhoneNumber()
    {
        $format = self::randomElement(array_slice(static::$formats, 6, 1));

        return self::numerify($this->generator->parse($format));
    }
}
