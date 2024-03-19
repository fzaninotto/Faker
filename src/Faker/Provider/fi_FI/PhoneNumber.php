<?php

namespace Faker\Provider\fi_FI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html
     */
    protected static array $landLineareaCodes = [
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
    ];

    /**
     * @see https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html
     */
    protected static array $mobileNetworkAreaCodes = [
        '040',
        '050',
        '044',
        '045',
    ];

    protected static array $numberFormats = [
        '### ####',
        '#######',
    ];

    protected static array $formats = [
        '+358 ({{ e164MobileNetworkAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164MobileNetworkAreaCode }} {{ numberFormat }}',
        '+358 ({{ e164landLineAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164landLineAreaCode }} {{ numberFormat }}',
        '{{ mobileNetworkAreaCode }}{{ separator }}{{ numberFormat }}',
        '{{ landLineAreaCode }}{{ separator }}{{ numberFormat }}',
    ];

    public function landLineAreaCode(): string
    {
        return static::randomElement(static::$landLineareaCodes);
    }

    public function e164landLineAreaCode(): string
    {
        return \substr(static::randomElement(static::$landLineareaCodes), 1);
    }

    public function mobileNetworkAreaCode(): string
    {
        return static::randomElement(static::$mobileNetworkAreaCodes);
    }

    public function e164MobileNetworkAreaCode(): string
    {
        return \substr(static::randomElement(static::$mobileNetworkAreaCodes), 1);
    }

    public function numberFormat(): string
    {
        return static::randomElement(static::$numberFormats);
    }

    public function separator(): string
    {
        return static::randomElement([' ', '-']);
    }
}
