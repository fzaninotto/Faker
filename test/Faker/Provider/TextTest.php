<?php
namespace Faker\Test\Provider;

use Faker\Provider\en_US\Text;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testTextMaxLength()
    {
        $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);

        $lengths = array(10, 20, 50, 70, 90, 120, 150, 200, 500);

        foreach ($lengths as $length) {
            $this->assertLessThan($length, $generator->realText($length));
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMaxIndex()
    {
    $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);
    $generator->realText(200, 11);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinIndex()
    {
    $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);
        $generator->realText(200, 0);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextMinLength()
    {
    $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);
        $generator->realText(9);
    }
}
