<?php

namespace Faker\Test\Provider\es_MX;

use Faker\Generator;
use Faker\Provider\es_MX\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCurp()
    {
        $curp = $this->faker->curp;
        $this->assertTrue(static::dni($curp));
    }

    public function testRFC()
    {
        $rfc = $this->faker->personRfc;
        $this->assertRegExp('/^[a-zA-Z]{3,4}[0-9]{2}[0-1]{1}[0-9]{1}[0-3]{1}[0-9]{1}[a-zA-Z0-9]{3}$/', $rfc);
    }

    public function testCurpWithFirstNames()
    {
        $curp = $this->faker->curp('Darío');

        $this->assertEquals('D', substr($curp, 3, 1));
    }

    public function testCurpWithFathersLastName()
    {
        $curp = $this->faker->curp('Darío', 'Estrada');
        $this->assertEquals('E', substr($curp, 0, 1));
        $this->assertEquals('A', substr($curp, 1, 1));
    }

    public function testCurpWithMothersLastName()
    {
        $curp = $this->faker->curp(null, null, 'Estrada');
        $this->assertEquals('E', substr($curp, 2, 1));
    }

    public function testCurpFirstPart()
    {
        $curp = $this->faker->curp('Darío', 'Estrada', 'Lucía', new \DateTime('1981-04-27'), Person::GENDER_FEMALE, 'PL');

        $this->assertEquals('EALD810427MPLSCR', substr($curp, 0, 16));
    }

    /**
     * Validates the DNI (CURP)
     *
     * It uses the following explanation:
     *
     *  http://web2.tramitanet.gob.mx/info/curp/gifs/ayuda.gif
     *
     * @param string $dni The CURP code
     *
     * @access  public
     * @return  bool    Passed / Not passed
     *
     * @link       https://github.com/pear/Validate_esMX/blob/master/Validate/esMX.php (Validator taken from there)
     */
    public static function dni($dni)
    {
        
        $dns = strtoupper($dni);
        //Clean it
        $dni = str_replace(array('-', ' '), '', $dni);
        //How big is it?
        if (strlen($dni) !== 18) {
            return false;
        }
        $regexp = '/^([A-Z][AEIOU][A-Z]{2})([0-9]{2})(0?[1-9]|1[0-2])'.
            '(0[1-9]|[1-2][0-9]|3[0-1])(H|M)([A-Z]{2})'.
            '([B-DF-HJ-NP-TV-Z]{3})([0-9]|[A-Z])([0-9]|[A-Z])/i';
        if (preg_match($regexp, $dni, $matches) === 1) {
            //Check the region.
            if (isset($matches[6])) {
                //Not a state or NE (foreign)
                if ($matches[6] != 'NE' && !static::isRegionValid($matches[6])) {
                    return false;
                }
            } else {
                return false;
            }
            //Unique key
            if (isset($matches[8]) && isset($matches[2])) {
                if ((int)$matches[2]{0} == 0) { //On 2000
                    if (!preg_match('/^[A-Z]/i', $matches[8])) {
                        //If born in 2000 the unique key should be a letter.
                        return false;
                    }
                } else {
                    if (!preg_match('/^[0-9]/i', $matches[8])) {
                        return false;
                    }
                }
            } else {
                return false;
            }
            if (isset($matches[9])) {
                //There's no sense in continue the process if $dni is < 17 chars
                if (strlen($dni) < 17) {
                    return false;
                }
                //CURP algorithm to get the digitVerifier.
                $algChar            = '';
                $curpVerifier       = '';
                $counterDigit       = '';
                $l_digito           = '';
                $l_posicion         = '';
                $digitModule        = '';
                $digitVerifier      = '';
                $combinations       = '0123456789ABCDEFGHIJKLMN-OPQRSTUVWXYZ*';
                $combinationsValues = explode(',', '00,01,02,03,04,05,06,07,08,09'.
                                            ',10,11,12,13,14,15,16,17,18,19,20,'.
                                            '21,22,23,24,25,26,27,28,29,30,31,'.
                                            '32,33,34,35,36,37');
                for ($i=0; $i<strlen($dni); $i++) {
                    $algChar = $dni{$i};
                    if ($algChar == '') {
                        $algChar = '*';
                    }
                    $combinationPos = strpos($combinations, $algChar);
                    if ($combinationPos > -1) {
                        $curpVerifier = $curpVerifier .
                            $combinationsValues[$combinationPos];
                    } else {
                        $curpVerifier = $curpVerifier . '00';
                    }
                }
                for ($i=1; $i<strlen($dni); $i++) {
                    $counterDigit += (int)$curpVerifier{($i * 2 - 1)} * (19 - $i);
                }
                $digitModule = $counterDigit % 10;
                if ($digitModule == 0) {
                    $digitVerifier = '0';
                } else {
                    $digitVerifier = 10 - $digitModule;
                }
                if (strlen($digitVerifier) > 1) {
                    $digitVerifier = substr($digitVerifier, -1);
                }
                if ($digitVerifier != $matches[9]) {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
        return true;
    }
    /**
     * Validates a "region" (aka state) code
     *
     * @param string $region Region/State code
     *
     * @access  public
     * @return  bool    Passed / Not passed
     */
    public static function isRegionValid($region)
    {
        switch (strtoupper($region)) {
            case 'AS': //Aguascalientes
            case 'BC': //Baja California
            case 'BS': //Baja California Sur
            case 'CC': //Campeche
            case 'CL': //Coahuila
            case 'CM': //Colima
            case 'CS': //Chiapas
            case 'CH': //Chihuahua
            case 'DF': //Distrito Federal
            case 'DG': //Durango
            case 'GT': //Guanajuato
            case 'GR': //Guerrero
            case 'HG': //Hidalgo
            case 'JC': //Jalisco
            case 'MC': //Mexico
            case 'MN': //Michoacán
            case 'MS': //Morelos
            case 'NT': //Nayarit
            case 'NL': //Nuevo León
            case 'OC': //Oaxaca
            case 'PL': //Puebla
            case 'QT': //Querétaro
            case 'QR': //Quintana Roo
            case 'SP': //San Luis Potosí
            case 'SL': //Sinaloa
            case 'SR': //Sonora
            case 'TC': //Tabasco
            case 'TS': //Tamaulipas
            case 'TL': //Tlaxcala
            case 'VZ': //Veracruz
            case 'YN': //Yucatán
            case 'ZS': //Zacatecas
            return true;
        }
        return false;
    }
}
