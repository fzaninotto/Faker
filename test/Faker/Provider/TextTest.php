<?php
namespace Faker\Test\Provider;

use Faker\Provider\Text;
use Faker\Generator;

class TextTest extends \PHPUnit_Framework_TestCase
{
    public function testTextMaxLength()
    {
        $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);

        $lengths = array(10, 20, 50, 70, 90, 120, 150, 200, 500);

        foreach ($lengths as $length) {
            $this->assertLessThan($length, $generator->text($length));
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextInvalidUnit()
    {
        Text::text(200, 2, 'invalid');
    }
}
