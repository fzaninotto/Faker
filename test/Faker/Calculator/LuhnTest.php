<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Luhn;
use PHPUnit\Framework\TestCase;

final class LuhnTest extends TestCase
{

    public function checkDigitProvider()
    {
        return array(
            array('7992739871', '3'),
            array('3852000002323', '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0'),
            array(7992739871, '3'),
            array(3852000002323, '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0')
        );
    }

    /**
     * @dataProvider checkDigitProvider
     */
    public function testComputeCheckDigit($partialNumber, $checkDigit)
    {
        $this->assertInternalType('string', $checkDigit);
        $this->assertEquals($checkDigit, Luhn::computeCheckDigit($partialNumber));
    }

    public function validatorProvider()
    {
        return array(
            array('79927398710', false),
            array('79927398711', false),
            array('79927398712', false),
            array('79927398713', true),
            array('79927398714', false),
            array('79927398715', false),
            array('79927398716', false),
            array('79927398717', false),
            array('79927398718', false),
            array('79927398719', false),
            array(79927398713, true),
            array(79927398714, false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid($number, $isValid)
    {
        $this->assertEquals($isValid, Luhn::isValid($number));
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Argument should be an integer.
     */
    public function testGenerateLuhnNumberWithInvalidPrefix()
    {
        Luhn::generateLuhnNumber('abc');
    }
}
