<?php

namespace Faker\Test;

use Faker\Generator;
use Faker\TakeGenerator;
use stdClass;

class TakeGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerConstructorRejectsInvalidCount
     *
     * @param mixed $count
     */
    public function testConstructorRejectsInvalidCount($count)
    {
        $this->setExpectedException('InvalidArgumentException');

        new TakeGenerator(
            $this->getGeneratorMock(),
            $count
        );
    }

    /**
     * @return array
     */
    public function providerConstructorRejectsInvalidCount()
    {
        return array(
            array(new stdClass()),
            array(false),
            array(null),
            array(0),
            array(3.14),
        );
    }

    public function testReturnsExactlyCountResultsWhenUsingMethod()
    {
        $count = 5;
        $provider = 'foo';

        $composedGenerator = $this->getGeneratorMock(array(
            $provider,
        ));

        $composedGenerator
            ->expects($this->exactly($count))
            ->method($provider)
            ->willReturnCallback(function () {
                static $invocation = 0;

                return ++$invocation;
            })
        ;

        $generator = new TakeGenerator(
            $composedGenerator,
            $count
        );

        $result = $generator->{$provider}();

        $this->assertInternalType('array', $result);
        $this->assertCount($count, $result);
    }

    public function testReturnsExactlyCountResultsForPropertyAccess()
    {
        $count = 5;
        $provider = 'bar';

        $composedGenerator = $this->getGeneratorMock(array(
            '__get',
            $provider,
        ));

        $composedGenerator
            ->expects($this->exactly($count))
            ->method($provider)
            ->willReturnCallback(function () {
                static $invocation = 0;

                return ++$invocation;
            })
        ;

        $generator = new TakeGenerator(
            $composedGenerator,
            $count
        );

        $result = $generator->{$provider};

        $this->assertInternalType('array', $result);
        $this->assertCount($count, $result);
    }

    /**
     * @param array $methods
     * @return Generator|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getGeneratorMock(array $methods = array())
    {
        return $this->getMockBuilder('Faker\Generator')
            ->setMethods($methods)
            ->disableOriginalConstructor()
            ->getMock()
        ;
    }
}
