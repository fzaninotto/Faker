<?php
namespace Faker\Test\Provider;

use Faker\Provider\Biased;
use Faker\Generator;

class BiasedTest extends \PHPUnit_Framework_TestCase
{
    const MAX = 10;
    const NUMBERS = 10000;
    protected $generator;
    protected $results = array();
    
    protected function setUp()
    {
        $this->generator = new Generator();
        $this->generator->addProvider(new Biased($this->generator));
        $this->generator->seed(0);

        $this->results = array_fill(1, self::MAX, 0);
    }
    
    public function performFake($function)
    {
        for($i = 0; $i < self::NUMBERS; $i++) {
            $this->results[$this->generator->biasedInteger(1, self::MAX, $function)]++;
        }
    }
    
    public function testUnbiased()
    {
        $this->performFake(array('\Faker\Provider\Biased', 'unbiased'));

        // assert that all numbers are near the expected unbiased value
        foreach ($this->results as $number => $amount) {
            $this->assertGreaterThan((self::NUMBERS / self::MAX) * .95, $amount, "Value was more than 5 percent under the expected value");
            $this->assertLessThan((self::NUMBERS / self::MAX) * 1.05, $amount, "Value was more than 5 percent over the expected value");
        }
    }
    
    public function testLinearHigh()
    {
        $this->performFake(array('\Faker\Provider\Biased', 'linearHigh'));

        $last = 0;
        // assert that the list is ordered
        foreach ($this->results as $number => $amount) {
            $this->assertGreaterThan($last * .98, $amount, "Amount was smaller than that of the number before");
        }
    }
    
    public function testLinearLow()
    {
        $this->performFake(array('\Faker\Provider\Biased', 'linearLow'));

        $last = PHP_INT_MAX;
        // assert that the list is ordered
        foreach ($this->results as $number => $amount) {
            $this->assertLessThan($last, $amount, "Amount was greater than that of the number before");
        }
    }
}
