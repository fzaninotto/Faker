<?php

namespace Faker\Provider\en_IN;

class Address extends \Faker\Provider\Address
{
    protected static $addressFormats = array(
        '{{streetAddress}} {{postcode}} {{city}}',
    );

    /** Street
      *
      */
    protected static $streetAddressFormats = array(
        '{{streetNumber}}, {{streetName}}',
    );

    public function streetNumber(){
        return Self::numberBetween(1, 19);
    }

    protected static $streetSuffix = array(
        'Marg','Rasta','Road','Chowk','Udyan','Street'
    );
    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );

    /** Secondary Address
      *
      */
    protected static $secondaryAddressFormats = array(
        'Building No. ###',
        'Rowhouse No. ###',
    );

    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /** City
      *
      */
    protected static $cityFormats = array(
        '{{cityPrefix}} {{cityName}}',
        '{{cityName}}',
        '{{cityName}}',
        '{{cityName}}',
        '{{cityName}}',
        '{{cityName}} {{citySuffix}}',
        '{{cityPrefix}} {{cityName}} {{citySuffix}}',
    );
    protected static $cityPrefix = array('New','Old');
    protected static $cityName = array('Akola','Pune','Nagpur','Mumbai'); // Fill it;
    protected static $citySuffix = array('East','West');
    /**
     * @example 'East'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }
    /**
     * @example 'Road'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }
    /**
     * @example 'Akola'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }
    public function city()
    {
        $format = static::randomElement(static::$cityFormats);

        return $this->generator->parse($format);
    }

    /** 
     * State
     *
     */
    protected static $state = array(
        'Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Orissa','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttarakhand','Uttar Pradesh','West Bengal','Tamil Nadu','Tripura','Andaman and Nicobar Islands','Chandigarh','Dadra and Nagar Haveli','Daman and Diu','Delhi','Lakshadweep','Pondicherry'
    );
    protected static $stateAbbr = array(
       'AP','AR','AS','BR','CG','GA','GJ','HR','HP','JK','JH','KA','KL','MP','MH','MN','ML','MZ','NL','OR','PB','RJ','SK','TN','TR','UK','UP','WB','TN','TR','AN','CH','DH','DD','DL','LD','PY'
    );

    /**
     * @example 'Maharashtra'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'MH'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }

    /** 
     * PostCode & pincode
     *
     */    
    protected static $postcode = array('######');
    public static function pincode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$pincode)));
    }
    protected static $pincode = array('######');

    /** 
     * Rural
     *
     */

    protected static $RuralAddressFormats = array(
        'NH# {{village}}, {{district}}',
    );
    public function RuralAddress(){
        $format = static::randomElement(static::$RuralAddressFormats);
        return static::numerify($this->generator->parse($format));
    }

    protected static $villageNames = array('Vyala');
    protected static $districtNames = array('Buldhana');
    public static function village(){
        return static::randomElement(static::$villageNames);
    }
    public static function district(){
        return static::randomElement(static::$districtNames);
    }

}
