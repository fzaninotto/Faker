<?php

namespace Faker\Provider\en_US;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static array $formats = [
        // International format
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1 ({{areaCode}}) {{exchangeCode}}-####',
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1.{{areaCode}}.{{exchangeCode}}.####',
        '+1{{areaCode}}{{exchangeCode}}####',

        // Standard formats
        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',

        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',

        // Extensions
        '{{areaCode}}-{{exchangeCode}}-#### x###',
        '({{areaCode}}) {{exchangeCode}}-#### x###',
        '1-{{areaCode}}-{{exchangeCode}}-#### x###',
        '{{areaCode}}.{{exchangeCode}}.#### x###',

        '{{areaCode}}-{{exchangeCode}}-#### x####',
        '({{areaCode}}) {{exchangeCode}}-#### x####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x####',
        '{{areaCode}}.{{exchangeCode}}.#### x####',

        '{{areaCode}}-{{exchangeCode}}-#### x#####',
        '({{areaCode}}) {{exchangeCode}}-#### x#####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x#####',
        '{{areaCode}}.{{exchangeCode}}.#### x#####',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Toll-free_telephone_number#United_States
     */
    protected static array $tollFreeAreaCodes = [
        800,
        844,
        855,
        866,
        877,
        888,
    ];
    protected static array $tollFreeFormats = [
        // Standard formats
        '{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '({{tollFreeAreaCode}}) {{exchangeCode}}-####',
        '1-{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '{{tollFreeAreaCode}}.{{exchangeCode}}.####',
    ];

    public function tollFreeAreaCode(): string
    {
        return self::randomElement(static::$tollFreeAreaCodes);
    }

    public function tollFreePhoneNumber(): string
    {
        $format = self::randomElement(static::$tollFreeFormats);

        return self::numerify($this->generator->parse($format));
    }

    /**
     * NPA-format area code.
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     */
    public static function areaCode(): string
    {
        $digits[] = self::numberBetween(2, 9);
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigitNot($digits[1]);

        return \implode('', $digits);
    }

    /**
     * NXX-format central office exchange code.
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     */
    public static function exchangeCode(): string
    {
        $digits[] = self::numberBetween(2, 9);
        $digits[] = self::randomDigit();

        if (1 === $digits[1]) {
            $digits[] = self::randomDigitNot(1);
        } else {
            $digits[] = self::randomDigit();
        }

        return \implode('', $digits);
    }
}
