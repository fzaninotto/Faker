<?php
namespace Faker\Test\Provider;

use Faker\Provider\en_US\Text;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    /**
     * @var Generator
     */
    private $generator;

    /**
     * @before
     */
    public function buildGenerator()
    {
        $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);

        $this->generator = $generator;
    }

    /**
     * @testWith [10]
     *           [20]
     *           [50]
     *           [70]
     *           [90]
     *           [120]
     *           [150]
     *           [200]
     *           [500]
     */
    public function testTextMaxLength(int $length)
    {
        $this->assertLessThan($length, $this->generator->realText($length));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMaxIndex()
    {
        $this->generator->realText(200, 11);

        $this->fail('The index should be less than or equal to 5.');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinIndex()
    {
        $this->generator->realText(200, 0);

        $this->fail('The index should be greater than or equal to 1.');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinLength()
    {
        $this->generator->realText(9);

        $this->fail('The text should be at least 10 characters.');
    }
}
