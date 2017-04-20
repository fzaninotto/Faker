<?php
declare(strict_types=1);

namespace Faker\Provider\en_HK;

class Address extends \Faker\Provider\Address
{
    protected static $addressFormats = array(
        '{{streetAddress}} {{city}}',
    );

    protected static $city = array('HONG KONG', 'KOWLOON', 'NEW TERRITORIES');

    public function city()
    {
        return static::randomElement(static::$city);
    }
}
