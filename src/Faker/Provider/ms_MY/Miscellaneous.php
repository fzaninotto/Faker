<?php

namespace Faker\Provider\ms_MY;

class Miscellaneous extends \Faker\Provider\Miscellaneous
{
    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia
     */
    protected static array $jpjNumberPlateFormats = [
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        'W{{validAlphabet}}{{validAlphabet}} {{numberSequence}} {{validAlphabet}}',
        'KV {{numberSequence}} {{validAlphabet}}',
        '{{sarawakPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{sabahPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{specialPrefix}} {{numberSequence}}',
    ];

    /**
     * Some alphabet has higher frequency that coincides with the current number
     * of registrations. E.g. W = Wilayah Persekutuan.
     *
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static array $peninsularPrefix = [
        'A',
        'A',
        'B',
        'C',
        'D',
        'F',
        'J',
        'J',
        'K',
        'M',
        'N',
        'P',
        'P',
        'R',
        'T',
        'V',
        'W',
        'W',
        'W',
        'W',
        'W',
        'W',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_2
     */
    protected static array $sarawakPrefix = [
        'QA',
        'QK',
        'QB',
        'QC',
        'QL',
        'QM',
        'QP',
        'QR',
        'QS',
        'QT',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_3
     */
    protected static array $sabahPrefix = [
        'SA',
        'SAA',
        'SAB',
        'SAC',
        'SB',
        'SD',
        'SG',
        'SK',
        'SL',
        'SS',
        'SSA',
        'ST',
        'STA',
        'SU',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Commemorative_plates
     */
    protected static array $specialPrefix = [
        '1M4U',
        'A1M',
        'BAMbee',
        'Chancellor',
        'G',
        'G1M',
        'GP',
        'GT',
        'Jaguh',
        'K1M',
        'KRISS',
        'LOTUS',
        'NAAM',
        'NAZA',
        'NBOS',
        'PATRIOT',
        'Perdana',
        'PERFECT',
        'Perodua',
        'Persona',
        'Proton',
        'Putra',
        'PUTRAJAYA',
        'RIMAU',
        'SAM',
        'SAS',
        'Satria',
        'SMS',
        'SUKOM',
        'T1M',
        'Tiara',
        'TTB',
        'U',
        'US',
        'VIP',
        'WAJA',
        'XIIINAM',
        'XOIC',
        'XXVIASEAN',
        'XXXIDB',
        'Y',
    ];

    /**
     * Chances of having an empty alphabet will be 1/24.
     *
     * @see https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static array $validAlphabets = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'J',
        'K',
        'L',
        'M',
        'N',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        '',
    ];

    /**
     * Return a valid Malaysia JPJ(Road Transport Department) vehicle licence plate number.
     *
     * @example 'WKN 2368'
     */
    public function jpjNumberPlate(): string
    {
        $formats = static::toUpper(static::lexify(static::bothify(static::randomElement(static::$jpjNumberPlateFormats))));

        return $this->generator->parse($formats);
    }

    /**
     * Return Peninsular prefix alphabet.
     *
     * @example 'W'
     */
    public static function peninsularPrefix(): string
    {
        return static::randomElement(static::$peninsularPrefix);
    }

    /**
     * Return Sarawak state prefix alphabet.
     *
     * @example 'QA'
     */
    public static function sarawakPrefix(): string
    {
        return static::randomElement(static::$sarawakPrefix);
    }

    /**
     * Return Sabah state prefix alphabet.
     *
     * @example 'SA'
     */
    public static function sabahPrefix(): string
    {
        return static::randomElement(static::$sabahPrefix);
    }

    /**
     * Return specialty licence plate prefix.
     *
     * @example 'G1M'
     */
    public static function specialPrefix(): string
    {
        return static::randomElement(static::$specialPrefix);
    }

    /**
     * Return a valid license plate alphabet.
     *
     * @example 'A'
     */
    public static function validAlphabet(): string
    {
        return static::randomElement(static::$validAlphabets);
    }

    /**
     * Return a valid number sequence between 1 and 9999.
     *
     * @example '1234'
     */
    public static function numberSequence(): string
    {
        return \random_int(1, 9999);
    }
}
