<?php

namespace Faker\Provider\pt_PT;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $phoneNumberPrefixes = array(
        'Abrantes' => '241',
        'Angra do Heroísmo' => '295',
        'Arganil' => '235',
        'Aveiro' => '234',
        'Beja' => '284',
        'Braga' => '253',
        'Bragança' => '273',
        'Caldas da Rainha' => '262',
        'Castelo Branco' => '272',
        'Castro Verde' => '286',
        'Chaves' => '276',
        'Coimbra' => '239',
        'Covilhã' => '275',
        'Estremoz' => '268',
        'Évora' => '266',
        'Faro' => '289',
        'Figueira da Foz' => '233',
        'Funchal' => '291',
        'Guarda' => '271',
        'Horta' => '292',
        'Idanha-a-Nova' => '277',
        'Leiria' => '244',
        'Lisboa' => '21#',
        'Mealhada' => '231',
        'Mirandela' => '278',
        'Moncorvo' => '279',
        'Moura' => '285',
        'Odemira' => '283',
        'Penafiel' => '255',
        'Peso da Régua' => '254',
        'Pombal' => '236',
        'Ponta Delgada' => '296',
        'Ponte de Sôr' => '242',
        'Portalegre' => '245',
        'Portimão' => '282',
        'Porto' => '22#',
        'Proença-a-Nova' => '274',
        'S. João da Madeira' => '256',
        'Santarém' => '243',
        'Santiago do Cacém' => '269',
        'Seia' => '238',
        'Setúbal' => '265',
        'Tavira' => '281',
        'Torres Novas' => '249',
        'Torres Vedras' => '261',
        'Valença' => '251',
        'Viana do Castelo' => '258',
        'Vila Franca de Xira' => '263',
        'V. N. de Famalicão' => '252',
        'Vila Real' => '259',
        'Viseu' => '232',
    );

    protected static $mobileFormats = array(
        '91#######',
        '92#######',
        '93#######',
        '96#######',
    );

    protected static $countryCode = '+351';

    public static function phoneNumber($allowCountryCodePrefix = true)
    {
        $format = static::randomElement(static::$phoneNumberPrefixes).'######';

        if ($allowCountryCodePrefix) {
            return static::numerify(static::randomElement(array(static::$countryCode, '')).$format);
        }

        return static::numerify($format);
    }

    public static function mobileNumber($allowCountryCodePrefix = true)
    {
        $format = static::numerify(static::randomElement(static::$mobileFormats));

        if ($allowCountryCodePrefix) {
            return static::numerify(static::randomElement(array(static::$countryCode, '')).$format);
        }
        
        return static::numerify($format);
        
    }
}
