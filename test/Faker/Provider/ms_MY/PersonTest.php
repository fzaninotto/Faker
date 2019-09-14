<?php

namespace Faker\Test\Provider\ms_MY;

use Faker\Generator;
use Faker\Provider\ms_MY\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_identity_card#Structure_of_the_National_Registration_Identity_Card_Number_(NRIC)
     */
    public function testPersonalIdentityCardNumber()
    {
        $myKadNumber = $this->faker->myKadNumber;

        $yy = substr($myKadNumber, 0, 2);
        //match any year from 00-99
        $this->assertRegExp("/^[0-9]{2}$/", $yy);

        $mm = substr($myKadNumber, 2, 2);
        //match any month from 01-12
        $this->assertRegExp("/^0[1-9]|1[0-2]$/", $mm);

        $dd = substr($myKadNumber, 4, 2);
        //match any date from 01-31
        $this->assertRegExp("/^0[1-9]|1[0-9]|2[0-9]|3[0-1]$/", $dd);

        $pb = substr($myKadNumber, 6, 2);
        //match any valid place of birth code from 01-59 except 17-20
        $this->assertRegExp("/^(0[1-9]|1[0-6])|(2[1-9]|3[0-9]|4[0-9]|5[0-9])$/", $pb);

        $nnnn = substr($myKadNumber, 8, 4);
        //match any number from 0000-9999
        $this->assertRegExp("/^[0-9]{4}$/", $nnnn);
    }
}
