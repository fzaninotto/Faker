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
        for ($i = 0; $i < 40; $i++) {
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
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(['podkarpackie']);
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
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(['łódzkie', 'army']);
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[EU][A-Z] [A-Z\d]{5}|[EU][A-Z]{2} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship or to army
     */
    public function testNoCorrectVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(['fake voivodeship', 'fake voivodeship2']);
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship or to army
     */
    public function testNoVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate([]);
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to one of warszawski zachodni or radomski counties or to Border Guard
     */
    public function testVoivodeshipCountyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                ['mazowieckie', 'services'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:WZ [A-Z\d]{5}|(?:WRA|HWA|HWK) [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when non-existing county is given
     */
    public function testVoivodeshipFakeCountyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                ['mazowieckie', 'services'],
                ['fake county']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when non-existing voivodeship is given
     */
    public function testVoivodeshipFakeVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                ['fake voivodeship'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given instead of voivodeships list
     */
    public function testVoivodeshipNullVoivodeshipArrayLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                null,
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given in voivodeships array
     */
    public function testVoivodeshipNullVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                [null],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertInternalType('string', $licensePlate);
            $this->assertRegExp('/^(?:[A-Z]{2} [A-Z\d]{5}|[A-Z]{3} [A-Z\d]{4,5})$/', $licensePlate);
        }
    }
}
