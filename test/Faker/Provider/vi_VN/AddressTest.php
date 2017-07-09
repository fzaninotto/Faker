<?php

namespace Faker\Test\Provider\vi_VN;

use Faker\Generator;
use Faker\Provider\vi_VN\Address;
use Faker\Provider\vi_VN\Person;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    /**
     * @var string
     */
    private $pattern = '/[a-z0-9A-Z_[:space:]ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+/u';
    /**
     * @var string
     */
    private $subPattern = '/[a-z0-9A-Z_[:space:]\x{00C0}-\x{00FF}\x{1EA0}-\x{1EFF}]+/u';

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testHamletName()
    {
        $hamletName = $this->faker->hamletName();

        $this->assertUnicodeString($hamletName);
    }

    public function testHamletPrefix()
    {
        $hamletPrefix = $this->faker->hamletPrefix();

        $this->assertUnicodeString($hamletPrefix);
    }

    public function testWardName()
    {
        $name = $this->faker->wardName();

        $this->assertUnicodeString($name);
    }

    public function testWardPrefix()
    {
        $name = $this->faker->wardPrefix();

        $this->assertUnicodeString($name);
    }

    public function testDistrictName()
    {
        $name = $this->faker->districtName();

        $this->assertUnicodeString($name);
    }

    public function testDistrictPrefix()
    {
        $name = $this->faker->districtPrefix();

        $this->assertUnicodeString($name);
    }

    public function testCity()
    {
        $name = $this->faker->city();

        $this->assertUnicodeString($name);
    }

    public function testProvince()
    {
        $name = $this->faker->province();

        $this->assertUnicodeString($name);
    }

    private function assertUnicodeString($string)
    {
        $this->assertTrue(is_string($string));
        $this->assertSame(
            preg_match($this->pattern, $string ),
            1,
            $string . ' is wrong!'
        );

        $this->assertSame(
            preg_match($this->subPattern, $string),
            1,
            $string . ' is wrong!'
        );
    }

}
