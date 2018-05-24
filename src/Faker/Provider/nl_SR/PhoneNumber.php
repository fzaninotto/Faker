<?php

namespace Faker\Provider\nl_SR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static $formats = array(
        // International format
        '+597-{{areaCode}}###',
        '+597-{{mobileCode}}####',
        '(+597){{areaCode}}###',
        '(+597){{mobileCode}}####',
        '+597-{{areaCode}}-###',
        '+597-{{mobileCode}}-####',
        '+597.{{areaCode}}.###',
        '+597.{{mobileCode}}.####',

//        '+597 ({{areaCode}}) {{exchangeCode}}-####',
//        '+597-{{areaCode}}-{{exchangeCode}}-####',
//        '+597.{{areaCode}}.{{exchangeCode}}.####',
//        '+597{{areaCode}}{{exchangeCode}}####',
//
//        // Standard formats
        '{{areaCode}}-###',
        '0{{mobileCode}}-####',
        '{{areaCode}}.###',
        '0{{mobileCode}}.####',
//        '{{areaCode}}-{{exchangeCode}}-####',
//        '({{areaCode}}) {{exchangeCode}}-####',
//        '597-{{areaCode}}-{{exchangeCode}}-####',
//        '{{areaCode}}.{{exchangeCode}}.####',
//
//        '{{areaCode}}-{{exchangeCode}}-####',
//        '({{areaCode}}) {{exchangeCode}}-####',
//        '597-{{areaCode}}-{{exchangeCode}}-####',
//        '{{areaCode}}.{{exchangeCode}}.####',
//
//        // Extensions

        '+597-{{areaCode}}-### x###',
        '+597-{{mobileCode}}-#### x###',
        '{{areaCode}}-### x###',
        '{{areaCode}}-### x####',
//        '{{areaCode}}-{{exchangeCode}}-#### x###',
//        '({{areaCode}}) {{exchangeCode}}-#### x###',
//        '597-{{areaCode}}-{{exchangeCode}}-#### x###',
//        '{{areaCode}}.{{exchangeCode}}.#### x###',
//
//        '{{areaCode}}-{{exchangeCode}}-#### x####',
//        '({{areaCode}}) {{exchangeCode}}-#### x####',
//        '597-{{areaCode}}-{{exchangeCode}}-#### x####',
//        '{{areaCode}}.{{exchangeCode}}.#### x####',
//
//        '{{areaCode}}-{{exchangeCode}}-#### x#####',
//        '({{areaCode}}) {{exchangeCode}}-#### x#####',
//        '597-{{areaCode}}-{{exchangeCode}}-#### x#####',
//        '{{areaCode}}.{{exchangeCode}}.#### x#####'
    );

    /**
     * NPA-format area code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function areaCode()
    {
        //2 nickerie
        //3 commewijne & wanica
        //4 paramaribo
        //5 paramaribo

        //6 paramaribo
        $digits[] = self::numberBetween(2, 5);
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        return join('', $digits);
    }

    /**
     * NXX-format central office exchange code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function mobileCode()
    {
        $digits[] = self::numberBetween(7, 8);
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        return join('', $digits);
    }
}