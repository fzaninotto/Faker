<?php

namespace Faker\Provider;

class Address extends Base
{
    protected static array $citySuffix = ['Ville'];
    protected static array $streetSuffix = ['Street'];
    protected static array $cityFormats = [
        '{{firstName}}{{citySuffix}}',
    ];
    protected static array $streetNameFormats = [
        '{{lastName}} {{streetSuffix}}',
    ];
    protected static array $streetAddressFormats = [
        '{{buildingNumber}} {{streetName}}',
    ];
    protected static array $addressFormats = [
        '{{streetAddress}} {{postcode}} {{city}}',
    ];

    protected static array $buildingNumber = ['%#'];
    protected static array $postcode = ['#####'];
    protected static array $country = [];

    /**
     * @example 'town'
     */
    public static function citySuffix(): string
    {
        return static::randomElement(static::$citySuffix);
    }

    /**
     * @example 'Avenue'
     */
    public static function streetSuffix(): string
    {
        return static::randomElement(static::$streetSuffix);
    }

    /**
     * @example '791'
     */
    public static function buildingNumber(): string
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    /**
     * @example 'Sashabury'
     */
    public function city(): string
    {
        $format = static::randomElement(static::$cityFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Crist Parks'
     */
    public function streetName(): string
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example '791 Crist Parks'
     */
    public function streetAddress(): string
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 86039-9874
     */
    public static function postcode(): string
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address(): string
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Japan'
     */
    public static function country(): string
    {
        return static::randomElement(static::$country);
    }

    /**
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     *
     * @example '77.147489'
     */
    public static function latitude(int|float $min = -90, int|float $max = 90): float
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     *
     * @example '86.211205'
     */
    public static function longitude(int|float $min = -180, int|float $max = 180): float
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * @return array latitude, longitude
     *
     * @example array('77.147489', '86.211205')
     */
    public static function localCoordinates(): array
    {
        return [
            'latitude' => static::latitude(),
            'longitude' => static::longitude(),
        ];
    }
}
