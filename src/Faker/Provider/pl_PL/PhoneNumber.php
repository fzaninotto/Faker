<?php

namespace Faker\Provider\pl_PL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+48 {{areaCode}} ### ## ##',
        '+48 {{areaCode}}### ## ##',
        '#######',
        '({{areaCode}}) ### ## ##',
        '+48({{areaCode}})#######',
        '0048({{areaCode}})#######',
    );

    protected static $mobileFormats = array(
        '+48 {{mobileNetworkIdentifier}}# ### ###',
        '+48{{mobileNetworkIdentifier}}# ### ###',
        '+(48) {{mobileNetworkIdentifier}}# ### ###',
        '+(48){{mobileNetworkIdentifier}}# ### ###',
        '0048 {{mobileNetworkIdentifier}}# ### ###',
        '0048{{mobileNetworkIdentifier}}# ### ###',
        '{{mobileNetworkIdentifier}}# ### ###',
        '{{mobileNetworkIdentifier}}#######',
    );

    /**
     * Only certain area codes are allowed
     * {@link} http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20130001281
     */
    public function areaCode()
    {
        $areaCodes = array(12, 13, 14, 15, 16, 17, 18, 22, 23, 24, 25, 29, 32, 33, 34, 41, 42,
            43, 44, 46, 48, 52, 54, 55, 56, 58, 59, 61, 62, 63, 65, 67, 68, 71,
            74, 75, 76, 77, 81, 82, 83, 84, 85, 86, 87, 89, 91, 94, 95);

        return $this->generator->randomElement($areaCodes);
    }


    /**
     * Only certain mobile network identifiers are allowed
     *
     * {@link} http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20130001281
     */
    public function mobileNetworkIdentifier()
    {
        $networkIdentifiers = array(50, 51, 53, 57, 60, 66, 69, 72, 73, 78, 79, 88);

        return $this->generator->randomElement($networkIdentifiers);
    }

    /**
     * @example '0048123123123'
     */
    public function mobilePhoneNumber()
    {
        $format = static::randomElement(static::$mobileFormats);

        return static::numerify($this->generator->parse($format));
    }
}
