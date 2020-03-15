<?php

namespace Faker\Test\Provider\en_US;

use Faker\Generator;
use Faker\Provider\en_US\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->phoneNumber;
            $baseNumber = preg_replace('/ *x.*$/', '', $number); // Remove possible extension
            $digits = array_values(array_filter(str_split($baseNumber), 'ctype_digit'));

            // Prefix '1' allowed
            if (count($digits) === 11) {
                $this->assertEquals('1', $digits[0]);
                $digits = array_slice($digits, 1);
            }

            // 10 digits
            $this->assertCount(10, $digits);

            // Last two digits of area code cannot be identical
            $this->assertNotEquals($digits[1], $digits[2]);

            // Last two digits of exchange code cannot be 1
            if ($digits[4] === 1) {
                $this->assertNotEquals($digits[4], $digits[5]);
            }

            // Test format
            $this->assertRegExp('/^(\+?1)?([ -.]*\d{3}[ -.]*| *\(\d{3}\) *)\d{3}[-.]?\d{4}$/', $baseNumber);
        }
    }

    public function testTollFreeAreaCode()
    {
        $this->assertContains($this->faker->tollFreeAreaCode, [800, 822, 833, 844, 855, 866, 877, 888, 880, 887, 889]);
    }

    public function testTollFreePhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->tollFreePhoneNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            // Prefix '1' allowed
            if (count($digits) === 11) {
                $this->assertEquals('1', $digits[0]);
                $digits = array_slice($digits, 1);
            }

            // 10 digits
            $this->assertCount(10, $digits);

            $areaCode = $digits[0] . $digits[1] . $digits[2];
            $this->assertContains($areaCode, ['800', '822', '833', '844', '855', '866', '877', '888', '880', '887', '889']);

            // Last two digits of exchange code cannot be 1
            if ($digits[4] === 1) {
                $this->assertNotEquals($digits[4], $digits[5]);
            }

            // Test format
            $this->assertRegExp('/^(\+?1)?([ -.]*\d{3}[ -.]*| *\(\d{3}\) *)\d{3}[-.]?\d{4}$/', $number);
        }
    }
}
