<?php

namespace Faker\Test\Provider;

use Faker\Provider\Vehicle as BaseProvider;

class VehicleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider vehicleProvider
     */
    public function testVehicleReturnsManufacturer($country, $expected)
    {
        $vehicle = BaseProvider::manufacturer($country);

        $this->assertInternalType('string', $vehicle);
        $this->assertContains($vehicle, $expected);
    }

    public function vehicleProvider()
    {
        return array(
            array(BaseProvider::COUNTRY_GERMANY,
                array(
                    '9ff', 'Alpina', 'Artega', 'Audi', 'Bitter', 'BMW', 'Brabus', 'Büssing', 'Carlsson', 'Daimler',
                    'Gumpert', 'Isdera', 'MAN', 'Mansory', 'Mercedes-Benz', 'Multicar', 'Neoplan', 'NSU', 'Opel',
                    'Porsche', 'Robur', 'RUF', 'Smart', 'Volkswagen', 'Wiesmann', 'Yes'
                )
            ),
            array(BaseProvider::COUNTRY_UNITED_KINGDOM,
                array(
                    'AC', 'Allard', 'Alvis', 'Ariel', 'Armstrong', 'Siddeley', 'Ascari', 'Aston Martin', 'Austin',
                    'Austin-Healey', 'BAC', 'Bentley', 'Bowler', 'Bristol', 'British Leyland', 'Caterham', 'Daimler',
                    'Elva', 'Ginetta', 'GKD', 'Gordon Keeble', 'Grinnall', 'Healey', 'Hillman', 'Humber', 'Jaguar',
                    'Javan', 'Jensen', 'Jowett', 'Lanchester', 'Land Rover', 'Lister', 'Lotus', 'Marcos', 'McLaren',
                    'MG, Mini', 'Morgan', 'Morris', 'Noble', 'Radical', 'Riley', 'Rolls Royce', 'Ronart Cars', 'Rover',
                    'Singer', 'Standard', 'Sunbeam', 'Triumph', 'Trojan', 'TVR', 'Ultima Sports', 'Vauxhall', 'Wolseley'
                )
            ),
            array(BaseProvider::COUNTRY_JAPAN,
                array(
                    'Autobacs Seven', 'Daihatsu', 'Datsun', 'Dome', 'Hino', 'Honda', 'Isuzu', 'Kawasaki', 'Mazda',
                    'Mitsubishi', 'Mitsuoka', 'Nissan', 'Subaru', 'Suzuki', 'Toyota', 'Yamaha', 'Yello'
                )
            )
        );
    }
}
