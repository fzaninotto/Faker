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

    public function testTextMaxLength()
    {
        $lengths = array(10, 20, 50, 70, 90, 120, 150, 200, 500);

        foreach ($lengths as $length) {
            $this->assertLessThan($length, $this->generator->realText($length));
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMaxIndex()
    {
        $this->generator->realText(200, 11);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinIndex()
    {
        $this->generator->realText(200, 0);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinLength()
    {
        $this->generator->realText(9);
    }
}
