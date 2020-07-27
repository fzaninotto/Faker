<?php

namespace Faker\Provider\ar_DZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static $formats = array(
        // International format
        '+213{{mobileServiceProviderCode}}########',
        '00213{{mobileServiceProviderCode}}########',
        '+213-{{mobileServiceProviderCode}}-##-##-##-##',
        '00213-{{mobileServiceProviderCode}}-##-##-##-##',
        '+213{{mobileServiceProviderCode}}##-###-###',
        '00213{{mobileServiceProviderCode}}##-###-###',
        '+213-{{areaCode}}-##-##-##',
        '00213-{{areaCode}}-##-##-##',
        '+213{{areaCode}}######',
        '00213{{areaCode}}######',

        // local format

        '0{{mobileServiceProviderCode}}#######',
        '0{{mobileServiceProviderCode}}-##-##-##-##',
        '0{{mobileServiceProviderCode}}##-###-###',
        '0{{areaCode}}######',
        '0{{areaCode}}##-##-##',
    );
    public static $areaCodes = array(
        '49', '27', '29', '32', '33', '34', '25', '26',
        '37', '43', '46', '21', '23', '36', '48', '39',
        '38', '31', '45', '35', '24',
    );
    /**
     *
     * @return string
     */
    public static function mobileServiceProviderCode()
    {
        $digits[] = self::numberBetween(5, 7);

        return join('', $digits);
    }
    /**
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Algeria
     *
     * @return string
     */
    public static function areaCode()
    {
        return self::randomElement(static::$areaCodes);
    }
}
