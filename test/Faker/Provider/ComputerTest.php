<?php

namespace Faker\Test\Provider;

use Faker\Provider\Computer;
use Faker\Generator;

class ComputerTest extends \PHPUnit_Framework_TestCase
{
    public function testMacAddress()
    {
        $this->assertRegExp('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})$/i', Computer::macAddress());
    }

    public function testLocalIp()
    {
        $range1 = '(10)(\.(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])|[1][0-9][0-9]|[1-9][0-9]|[0-9])){3}';
        $range2 = '(192)\.(168)(\.(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])|[1][0-9][0-9]|[1-9][0-9]|[0-9])){2}';

        $this->assertRegExp('/^'.$range1.'|'.$range2.'$/', Computer::localIp());
    }
}
