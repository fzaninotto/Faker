<?php

namespace Faker\Provider\ne_NP;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array('##########'); // 10 digits Nepali Number format

    protected static $operators = array(
      9813, 9815, 9810, 9818, 9823, 9801,9808, 9804, 9804  //Ncell
      9741, 9843, 9841, 9861, 9849, 9860, 9867, 9851,  //Nepal Telecom
      
    );

    public function phoneNumber()
    {
      $operator = static::randomElement(static::$operators);
      $format = static::randomElement(static::$formats);

      return $operator . static::numerify(substr($format, 0 , strlen($format) - strlen($operator)))
    }

}
