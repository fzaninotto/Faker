<?php

namespace Faker\Provider\pl_PL;

use Faker\Generator;
use Faker\Test\TestCase;

final class LicensePlateTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator;
        $faker->addProvider(new LicensePlate($faker));
        $this->faker = $faker;
    }

    /**
     * Test the validity of license plate
     */
    public function testNonSpecialLicensePlates()
    {
        for ($i = 0; $i < 40; $i++) {
            $licensePlate = $this->faker->licensePlate;
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-GI-TV-Z][A-PR-Z] [A-PR-Z\d]{5}|[A-GI-TV-Z][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plates are filtered out
     */
    public function testExplicitlyNonSpecialLicensePlates()
    {
        for ($i = 0; $i < 40; $i++) {
            $licensePlate = $this->faker->licensePlate(
                false
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-GI-TV-Z][A-PR-Z] [A-PR-Z\d]{5}|[A-GI-TV-Z][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plates are filtered out
     */
    public function testWithSpecialLicensePlates()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to podkapracikie voivodeship
     */
    public function testPodkarpackieLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['podkarpackie']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:R[A-PR-Z] [A-PR-Z\d]{5}|R[A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship or to army
     */
    public function testLodzkieOrArmyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['łódzkie', 'army']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[EU][A-PR-Z] [A-PR-Z\d]{5}|[EU][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship but filters out army
     */
    public function testLodzkieButNotArmyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['łódzkie', 'army']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[E][A-PR-Z] [A-PR-Z\d]{5}|[E][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs is generated when invorrect voivodeship is given
     */
    public function testNoCorrectVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['fake voivodeship', 'fake voivodeship2']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when no voivodeship is given
     */
    public function testNoVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                []
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when no voivodeship or county is given
     */
    public function testNoVoivodeshipNoCountyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                [],
                []
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to one of warszawski zachodni or radomski counties or to Border Guard
     */
    public function testVoivodeshipCountyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['mazowieckie', 'services'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:WZ [A-PR-Z\d]{5}|(?:WRA|HWA|HWK) [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate belonging to the correct voivedeship is generated when non-existing county is given
     */
    public function testVoivodeshipFakeCountyLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['mazowieckie', 'services'],
                ['fake county']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[WH][A-PR-Z] [A-PR-Z\d]{5}|[WH][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when non-existing voivodeship is given
     */
    public function testVoivodeshipFakeVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['fake voivodeship'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given instead of voivodeships list
     */
    public function testVoivodeshipNullVoivodeshipArrayLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                null,
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given in voivodeships array
     */
    public function testVoivodeshipNullVoivodeshipLicensePlate()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                [null],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski']
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plate is not generated when 1st argument is false
     */
    public function testVoivodeship1stArgumentFalse()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['mazowieckie', 'services'],
                null
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:W[A-PR-Z] [A-PR-Z\d]{5}|W[A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plate is generated when 1st argument is true
     */
    public function testVoivodeship1stArgumentTrue()
    {
        for ($i = 0; $i < 5; $i++) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['services'],
                null
            );
            $this->assertNotEmpty($licensePlate);
            $this->assertIsString($licensePlate);
            $this->assertMatchesRegularExpression('/^(?:H[A-PR-Z] [A-PR-Z\d]{5}|H[A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }
}
