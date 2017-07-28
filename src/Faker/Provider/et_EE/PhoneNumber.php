<?php

namespace Faker\Provider\et_EE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Estonia
     */
    protected static $formats = array(
        // International format
        '{{landlineNumber}}',
        '+{{areaCode}}-{{landlineNumber}}',
        '+{{areaCode}} {{landlineNumber}}',
        '(+{{areaCode}}){{landlineNumber}}',
        '(+{{areaCode}}) {{landlineNumber}}',
        '({{areaCode}}){{landlineNumber}}',
        '({{areaCode}}) {{landlineNumber}}',
        '{{emergencyNumber}}',

        '{{mobileNumber}}',
        '+{{areaCode}}-{{mobileNumber}}',
        '+{{areaCode}} {{mobileNumber}}',
        '(+{{areaCode}}){{mobileNumber}}',
        '(+{{areaCode}}) {{mobileNumber}}',
        '({{areaCode}}){{mobileNumber}}',
        '({{areaCode}}) {{mobileNumber}}',

        '{{specialNumber}}',
        '+{{areaCode}}-{{specialNumber}}',
        '+{{areaCode}} {{specialNumber}}',
        '(+{{areaCode}}){{specialNumber}}',
        '(+{{areaCode}}) {{specialNumber}}',
        '({{areaCode}}){{specialNumber}}',
        '({{areaCode}}) {{specialNumber}}',

        '{{personalNumber}}',
        '+{{areaCode}}-{{personalNumber}}',
        '+{{areaCode}} {{personalNumber}}',
        '(+{{areaCode}}){{personalNumber}}',
        '(+{{areaCode}}) {{personalNumber}}',
        '({{areaCode}}){{personalNumber}}',
        '({{areaCode}}) {{personalNumber}}',

    );

    /**
     * An array of et:ET country code for calling from outside the country
     * @var string
     */
    protected static $countryCode = "372";

    /**
     * An Emergency phone number
     * @var string
     */
    protected static $emergency = "112";

    /**
     * An array of et:ET mobile (cell) phone number formats
     * @var array
     */
    protected static $landlineFormats = array(
      // Local
      '32# ####',      //Landline  (Rakvere)
      '33# ####',      //Landline  (Kohtla-Järve)
      '35# ####',      //Landline  (Narva)
      '38# ####',      //Landline  (Paide)
      '39# ####',      //Landline  (Sillamäe)
      '43# ####',      //Landline  (Viljandi)
      '44# ####',      //Landline  (Pärnu)
      '45# ####',      //Landline  (Kuressaare)
      '46# ####',      //Landline  (Kärdla)
      '47# ####',      //Landline  (Haapsalu)
      '48# ####',      //Landline  (Rapla)
      '6## ####',      //Landline  (Tallinn and Harju County)
      '7## ####',      //Landline  (Tartu)
      '71# ####',      //Landline
      '72# ####',      //Landline
      '73# ####',      //Landline
      '74# ####',      //Landline
      '75# ####',      //Landline
      '76# ####',      //Landline  (Valga)
      '77# ####',      //Landline  (Jõgeva)
      '78# ####',      //Landline  (Võru)
      '79# ####',      //Landline  (Põlva)
      '88# ####',      //Landline
      '901 ####'       //Landline
    );
    
    /**
     * An array of Estonian mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
      // Local
      '5## ####',      //Mobile
      '5### ####',     //Mobile
      '81## ####',    //Mobile
      '82## ####',     //Mobile
      '83## ####',     //Mobile
      '87## #### ####'   //Mobile  (M2M mobiiltelefoninumbrid)
    );

    /**
     * An array of Estonian Special services formats
     * @var array
     */
    protected static $specialServicesFormats = array(
      '40## ####'     //Special services
    );

    /**
     * An array of Estonian Premium services formats
     * @var array
     */
    protected static $premiumFormats = array(
      '70## ####'     //Premium
    );

    /**
     * An array of Estonian Personal services formats
     * @var array
     */
    protected static $personalFormats = array(
      '900 ####',      //Personal
    );

    /**
     * get Estonian country calling number
     * @return string
     */
    public function areaCode()
    {
        return self::$countryCode;
    }

    /**
     * get Estonian Emergency phone number
     * @return string
     */
    public function emergencyNumber()
    {
        return self::$emergency;
    }

    /**
    * get Estonian landline number
    * @return string
    */
    public function landlineNumber()
    {
        return self::randomElement(static::$landlineFormats);
    }

    /**
    * get Estonian mobile number
    * @return string
    */
    public function mobileNumber()
    {
        return self::randomElement(static::$mobileFormats);
    }

    /**
    * get Estonian Special services number
    * @return string
    */
    public function specialNumber()
    {
        return self::randomElement(static::$specialServicesFormats);
    }

    /**
    * get Estonian Personal services number
    * @return string
    */
    public function personalNumber()
    {
        return self::randomElement(static::$personalFormats);
    }
}
