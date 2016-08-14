<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Commerce;

/**
 * Class CommerceTest
 * @package Faker\Test\Provider
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 */
class CommerceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Commerce($faker));
        $this->faker = $faker;
    }

    public function testDepartmentName()
    {
        $departmentName = $this->faker->departmentName();
        $pattern = '/^[A-Za-z]+$/';
        $this->assertRegExp($pattern, $departmentName);
    }

    public function testMaterialName()
    {
        $materialName = $this->faker->materialName();
        $pattern = '/^[A-Za-z]+$/';
        $this->assertRegExp($pattern, $materialName);
    }

    public function testProductName()
    {
        $productName = $this->faker->productName();
        $pattern = '/^[A-Za-z ]+$/';
        $this->assertRegExp($pattern, $productName);
    }
}