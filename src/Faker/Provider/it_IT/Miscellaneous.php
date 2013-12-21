<?php

namespace Faker\Provider\it_IT;

class Miscellaneous extends \Faker\Provider\Miscellaneous
{

    protected static $currency = array(
        '€' => 'Euro', '$' => 'Dollari Americani', '£' => 'Sterline', '¥' => 'Yen Giapponesi', 'Rp' => 'Rupiah Indonesiana',
        'Kč' => 'Corona Ceca', '₱' => 'Pesos Filippini', 'zł' => 'Zloty Polacchi', 'CHF' => 'Fanco Svizzero',
    );

    protected static $unitOfMeasurement = array(
        'A', 'cd', 'm', 'km', 'dm', 'cm', 'mm', 'nm', 'micron', 't', 'kg', 'hg', 'g', 'dg', 'cg', 'mg', 'mol', 'K', 's',
        'Hz', 'N', 'Pa', 'J', 'W', 'Kw', 'C', 'V', 'F', 'T', 'Wb', 'H', '°C', 'rad', 'sr', 'lm', 'lx', 'D', 'Bq',
        'm²', 'm³', 'm/s', 'km/h', 'min', 'h', 'd', "'", '"', 'ha', 'l', 'ua', 'u', 'nm', 'kn', 'b', 'bar', 'Np', 'B',
    );
}
