<?php

namespace Faker\Provider\pl_PL;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class LicensePlateTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new LicensePlate($faker));
        $this->faker = $faker;
    }

    /**
     * Test the validity of license plate
     */
    public function testRandomLicensePlate()
    {
        for ($i = 0; $i < 50; $i++) {
            $licensePlate = $this->faker->licensePlate;
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to podkapracikie voivodeship
     */
    public function testPodkarpackieLicensePlate()
    {
        for ($i = 0; $i < 20; $i++) {
            $licensePlate = $this->faker->LicensePlate(['podkarpackie']);
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:R[A-Z] [A-Z\d]{5}|R[A-Z]{2} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship or to army
     */
    public function testLodzkieOrArmyLicensePlate()
    {
        for ($i = 0; $i < 20; $i++) {
            $licensePlate = $this->faker->LicensePlate(['łódzkie', 'army']);
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[EU][A-Z] [A-Z\d]{5}|[EU][A-Z]{2} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }
}
