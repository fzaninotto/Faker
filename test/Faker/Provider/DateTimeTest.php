<?php

namespace Faker\Test\Provider;

use Faker\Provider\DateTime;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testDate()
    {
        $this->assertRegExp('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/i', DateTime::date());
    }

    public function testDateFormat()
    {
        $this->assertRegExp('/^[0-9]{8}$/i', DateTime::date('Ymd'));
    }

    public function testDateFormatAndDate()
    {
        $this->assertEquals(date('Ymd', strtotime('+10days')), DateTime::date('Ymd', '+10 days'));
    }
}
