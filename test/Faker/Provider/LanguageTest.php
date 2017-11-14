<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Factory;
use Faker\Provider\en_US\Language;

class LanguageTest extends \PHPUnit_Framework_TestCase
{
    private $faker;
    private $faker_factory;

    public function setUp()
    {
        //Create generator
        $faker = new Generator();
        $faker->addProvider(new Language($faker));
        $this->faker = $faker;
        
        //Create factory    
        $this->faker_factory = Factory::create();
    }

    public function testLanguageString()
    {
        $language = $this->faker->language;
        $this->assertNotEmpty($language);
    }
    
    public function testFactoryIncludesLanguage()
    {
        $language = $this->faker_factory->language;
        $this->assertNotEmpty($language);
    }
}
