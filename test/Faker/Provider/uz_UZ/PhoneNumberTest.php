<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/3/18
 * Time: 1:57 PM
 */

namespace Faker\Test\Provider\uz_UZ;


use Faker\Generator;
use Faker\Provider\uz_UZ\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    private $faker;
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneFormat()
    {
        $generatedPhone = $this->faker->phoneNumber;
        $pattern = "/\+998 \(9([0|1|3-5|7-9])\) ([\d]{7})/m";
        $matches = array();
        $this->assertSame(preg_match($pattern, $generatedPhone, $matches),
                        1,
                    'Phone Format is invalid');
    }
}