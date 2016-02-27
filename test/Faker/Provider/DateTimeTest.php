<?php

namespace Faker\Test\Provider;

use Faker\Provider\DateTime as DateTimeProvider;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->originalTz = date_default_timezone_get();
        $this->defaultTz = 'UTC';
        date_default_timezone_set($this->defaultTz);
    }

    public function tearDown()
    {
        date_default_timezone_set($this->originalTz);
    }

    public function testUnixTime()
    {
        $timestamp = DateTimeProvider::unixTime();
        $this->assertInternalType('int', $timestamp);
        $this->assertTrue($timestamp >= 0);
        $this->assertTrue($timestamp <= time());
    }

    public function testDateTime()
    {
        $date = DateTimeProvider::dateTime();
        $this->assertInstanceOf('\DateTime', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeWithTimezone()
    {
        $date = DateTimeProvider::dateTime('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeAD()
    {
        $date = DateTimeProvider::dateTimeAD();
        $this->assertInstanceOf('\DateTime', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('0000-01-01 00:00:00'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testIso8601()
    {
        $date = DateTimeProvider::iso8601();
        $this->assertRegExp('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}[+-Z](\d{4})?$/', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        $this->assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testDate()
    {
        $date = DateTimeProvider::date();
        $this->assertRegExp('/^\d{4}-\d{2}-\d{2}$/', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        $this->assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testTime()
    {
        $date = DateTimeProvider::time();
        $this->assertRegExp('/^\d{2}:\d{2}:\d{2}$/', $date);
    }

    /**
     *
     * @dataProvider providerDateTimeBetween
     */
    public function testDateTimeBetween($start, $end)
    {
        $date = DateTimeProvider::dateTimeBetween($start, $end);
        $this->assertInstanceOf('\DateTime', $date);
        $this->assertGreaterThanOrEqual(new \DateTime($start), $date);
        $this->assertLessThanOrEqual(new \DateTime($end), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function providerDateTimeBetween()
    {
        return array(
            array('-1 year', false),
            array('-1 year', null),
            array('-1 day', '-1 hour'),
            array('-1 day', 'now'),
        );
    }

    /**
     *
     * @dataProvider providerDateTimeInInterval
     */
    public function testDateTimeInInterval($start, $interval = "+5 days", $isInFuture)
    {
        $date = DateTimeProvider::dateTimeInInterval($start, $interval);
        $this->assertInstanceOf('\DateTime', $date);
        
        $_interval = \DateInterval::createFromDateString($interval);
        $_start = new \DateTime($start);
        if ($isInFuture) {
            $this->assertGreaterThanOrEqual($_start, $date);
            $this->assertLessThanOrEqual($_start->add($_interval), $date);
        } else {
            $this->assertLessThanOrEqual($_start, $date);
            $this->assertGreaterThanOrEqual($_start->add($_interval), $date);
        }
    }

    public function providerDateTimeInInterval()
    {
        return array(
            array('-1 year', '+5 days', true),
            array('-1 day', '-1 hour', false),
            array('-1 day', '+1 hour', true),
        );
    }

    public function testFixedSeedWithMaximumTimestamp()
    {
        $max = '2018-03-01 12:00:00';

        mt_srand(1);
        $unixTime = DateTimeProvider::unixTime($max);
        $datetimeAD = DateTimeProvider::dateTimeAD($max);
        $dateTime1 = DateTimeProvider::dateTime($max);
        $dateTimeBetween = DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', $max);
        $date = DateTimeProvider::date('Y-m-d', $max);
        $time = DateTimeProvider::time('H:i:s', $max);
        $iso8601 = DateTimeProvider::iso8601($max);
        $dateTimeThisCentury = DateTimeProvider::dateTimeThisCentury($max);
        $dateTimeThisDecade = DateTimeProvider::dateTimeThisDecade($max);
        $dateTimeThisMonth = DateTimeProvider::dateTimeThisMonth($max);
        $amPm = DateTimeProvider::amPm($max);
        $dayOfMonth = DateTimeProvider::dayOfMonth($max);
        $dayOfWeek = DateTimeProvider::dayOfWeek($max);
        $month = DateTimeProvider::month($max);
        $monthName = DateTimeProvider::monthName($max);
        $year = DateTimeProvider::year($max);
        $dateTimeThisYear = DateTimeProvider::dateTimeThisYear($max);
        mt_srand();

        //regenerate Random Date with same seed and same maximum end timestamp
        mt_srand(1);
        $this->assertEquals($unixTime, DateTimeProvider::unixTime($max));
        $this->assertEquals($datetimeAD, DateTimeProvider::dateTimeAD($max));
        $this->assertEquals($dateTime1, DateTimeProvider::dateTime($max));
        $this->assertEquals($dateTimeBetween, DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', $max));
        $this->assertEquals($date, DateTimeProvider::date('Y-m-d', $max));
        $this->assertEquals($time, DateTimeProvider::time('H:i:s', $max));
        $this->assertEquals($iso8601, DateTimeProvider::iso8601($max));
        $this->assertEquals($dateTimeThisCentury, DateTimeProvider::dateTimeThisCentury($max));
        $this->assertEquals($dateTimeThisDecade, DateTimeProvider::dateTimeThisDecade($max));
        $this->assertEquals($dateTimeThisMonth, DateTimeProvider::dateTimeThisMonth($max));
        $this->assertEquals($amPm, DateTimeProvider::amPm($max));
        $this->assertEquals($dayOfMonth, DateTimeProvider::dayOfMonth($max));
        $this->assertEquals($dayOfWeek, DateTimeProvider::dayOfWeek($max));
        $this->assertEquals($month, DateTimeProvider::month($max));
        $this->assertEquals($monthName, DateTimeProvider::monthName($max));
        $this->assertEquals($year, DateTimeProvider::year($max));
        $this->assertEquals($dateTimeThisYear, DateTimeProvider::dateTimeThisYear($max));
        mt_srand();
    }
}
