<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Company;
use Faker\Provider\ar_DZ\Person;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfCatchPhraseIsCatchy()
    {
        $catchPhrase = $this->faker->catchPhrase();
        $this->assertNotNull($catchPhrase);
        $this->assertInternalType('string', $catchPhrase);
    }
    public function testJobTitle()
    {
        $job = $this->faker->jobTitle;
        $this->assertNotNull($job);
        $this->assertInternalType('string', $job);
        $this->assertRegExp('/^\p{Arabic}+/u', $job);
    }
}
