<?php

namespace Faker\Provider\pl_PL;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class LicensePlateTest extends TestCase
{
    /**
     * Test the validity of license plate
     */
    public function testNonSpecialLicensePlates(): void
    {
        for ($i = 0; $i < 40; ++$i) {
            $licensePlate = $this->faker->licensePlate;
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-GI-TV-Z][A-PR-Z] [A-PR-Z\d]{5}|[A-GI-TV-Z][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plates are filtered out
     */
    public function testExplicitlyNonSpecialLicensePlates(): void
    {
        for ($i = 0; $i < 40; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                false,
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-GI-TV-Z][A-PR-Z] [A-PR-Z\d]{5}|[A-GI-TV-Z][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plates are filtered out
     */
    public function testWithSpecialLicensePlates(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to podkapracikie voivodeship
     */
    public function testPodkarpackieLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['podkarpackie'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[RY][A-PR-Z] [A-PR-Z\d]{5}|[RY][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship or to army
     */
    public function testLodzkieOrArmyLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['łódzkie', 'army'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[EU][A-PR-Z] [A-PR-Z\d]{5}|[EU][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to łodzkie voivodeship but filters out army
     */
    public function testLodzkieButNotArmyLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['łódzkie', 'army'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[E][A-PR-Z] [A-PR-Z\d]{5}|[E][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs is generated when invorrect voivodeship is given
     */
    public function testNoCorrectVoivodeshipLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['fake voivodeship', 'fake voivodeship2'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when no voivodeship is given
     */
    public function testNoVoivodeshipLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                [],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when no voivodeship or county is given
     */
    public function testNoVoivodeshipNoCountyLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                [],
                [],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that license plate belongs to one of warszawski zachodni or radomski counties or to Border Guard
     */
    public function testVoivodeshipCountyLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['mazowieckie', 'services'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[AW]Z [A-PR-Z\d]{5}|(?:[AW]RA|HWA|HWK) [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate belonging to the correct voivedeship is generated when non-existing county is given
     */
    public function testVoivodeshipFakeCountyLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['mazowieckie', 'services'],
                ['fake county'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[AWH][A-PR-Z] [A-PR-Z\d]{5}|[AWH][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when non-existing voivodeship is given
     */
    public function testVoivodeshipFakeVoivodeshipLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['fake voivodeship'],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given instead of voivodeships list
     */
    public function testVoivodeshipNullVoivodeshipArrayLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                null,
                ['Straż Graniczna', 'warszawski zachodni', 'radomski'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that correct license plate is generated when null is given in voivodeships array
     */
    public function testVoivodeshipNullVoivodeshipLicensePlate(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                [null],
                ['Straż Graniczna', 'warszawski zachodni', 'radomski'],
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[A-PR-Z]{2} [A-PR-Z\d]{5}|[A-PR-Z]{3} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plate is not generated when 1st argument is false
     */
    public function testVoivodeship1stArgumentFalse(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                false,
                ['mazowieckie', 'services'],
                null,
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:[AW][A-PR-Z] [A-PR-Z\d]{5}|[AW][A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    /**
     * Test that special license plate is generated when 1st argument is true
     */
    public function testVoivodeship1stArgumentTrue(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $licensePlate = $this->faker->licensePlate(
                true,
                ['services'],
                null,
            );
            self::assertNotEmpty($licensePlate);
            self::assertIsString($licensePlate);
            self::assertMatchesRegularExpression('/^(?:H[A-PR-Z] [A-PR-Z\d]{5}|H[A-PR-Z]{2} [A-PR-Z\d]{4,5})$/', $licensePlate);
        }
    }

    protected function getProviders(): iterable
    {
        yield new LicensePlate($this->faker);
    }
}
