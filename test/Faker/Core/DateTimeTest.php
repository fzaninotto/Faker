<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Extension\DateTimeExtension;
use Faker\Test\TestCase;

/**
 * @covers \Faker\Core\DateTime
 */
final class DateTimeTest extends TestCase
{
    /**
     * @var DateTimeExtension
     */
    protected $extension;

    protected function setUp(): void
    {
        parent::setUp();

        $this->extension = $this->faker->ext(DateTimeExtension::class);
    }

    public function testDateTime()
    {
        $dateTime = $this->extension->dateTime('2005-10-19T14:12:00');

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertEquals(new \DateTime('1990-09-29T12:12:53'), $dateTime);
    }

    public function testDateTimeWithTimezone()
    {
        $dateTime = $this->extension->dateTime('2021-09-05T15:10:00', 'America/Los_Angeles');

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertEquals(new \DateTime('1999-12-11T22:41:46.000000-0800'), $dateTime);
        self::assertEquals(new \DateTimeZone('America/Los_Angeles'), $dateTime->getTimezone());
    }

    public function testDateTimeAD()
    {
        $dateTime = $this->extension->dateTimeAD('2012-04-12T19:22:23');

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertEquals(new \DateTime('1166-06-01T17:43:42'), $dateTime);
    }

    public function testDateTimeBetween()
    {
        $dateTime = $this->extension->dateTimeBetween('1998-12-18T11:23:40', '2004-09-15T22:10:45');

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertEquals(new \DateTime('2002-04-17T09:33:38'), $dateTime);
    }

    public function testDateTimeBetweenShouldThrowIfFromIsNotAnteriorToUntil()
    {
        self::expectException(\InvalidArgumentException::class);
        $this->extension->dateTimeBetween('2004-09-15T22:10:45', '1998-12-18T11:23:40');
    }

    public function testDateTimeInInterval()
    {
        $dateTime = $this->extension->dateTimeInInterval('1999-07-16T17:30:12', '+2 years');

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertEquals(new \DateTime('2000-09-12T07:10:58'), $dateTime);
    }

    public function testDateTimeThisWeek()
    {
        $dateTime = $this->extension->dateTimeThisWeek();

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertGreaterThanOrEqual(new \DateTime('monday this week'), $dateTime);
        self::assertLessThanOrEqual(new \DateTime('sunday this week'), $dateTime);
    }

    public function testDateTimeThisMonth()
    {
        $dateTime = $this->extension->dateTimeThisMonth();

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertGreaterThanOrEqual(new \DateTime('first day of this month'), $dateTime);
        self::assertLessThanOrEqual(new \DateTime('last day of this month'), $dateTime);
    }

    public function testDateTimeThisYear()
    {
        $dateTime = $this->extension->dateTimeThisYear();

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertGreaterThanOrEqual(new \DateTime('first day of january'), $dateTime);
        self::assertLessThanOrEqual(new \DateTime('last day of december'), $dateTime);
    }

    public function testDateTimeThisDecade()
    {
        $dateTime = $this->extension->dateTimeThisDecade();

        $year = floor(date('Y') / 10) * 10;

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertGreaterThanOrEqual(new \DateTime("first day of january $year"), $dateTime);
        self::assertLessThanOrEqual(new \DateTime('now'), $dateTime);
    }

    public function testDateTimeThisCentury()
    {
        $dateTime = $this->extension->dateTimeThisCentury();

        $year = floor(date('Y') / 100) * 100;

        self::assertInstanceOf(\DateTime::class, $dateTime);
        self::assertGreaterThanOrEqual(new \DateTime("first day of january $year"), $dateTime);
        self::assertLessThanOrEqual(new \DateTime('now'), $dateTime);
    }

    public function testDate()
    {
        $date = $this->extension->date('Y-m-d', '2102-11-12T14:45:29');

        self::assertIsString($date);
        self::assertEquals('2046-12-26', $date);
    }

    public function testTime()
    {
        $time = $this->extension->time('H:i:s', '1978-06-27T09:43:21');

        self::assertIsString($time);
        self::assertEquals('21:59:44', $time);
    }

    public function testUnixTime()
    {
        $unixTime = $this->extension->unixTime('1993-08-29T15:10:00');

        self::assertIsInt($unixTime);
        self::assertEquals(432630664, $unixTime);
    }

    public function testUnitTimeWithNumericUntil()
    {
        $unixTime = $this->extension->unixTime(1643830258);

        self::assertIsInt($unixTime);
        self::assertEquals(952499510, $unixTime);
    }

    public function testIso8601()
    {
        $iso8601 = $this->extension->iso8601('1993-07-11T15:10:00');

        self::assertIsString($iso8601);
        self::assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\+\d{4}$/', $iso8601);
        self::assertEquals('1983-08-19T21:45:51+0000', $iso8601);
    }

    public function testAmPm()
    {
        $amPm = $this->extension->amPm('1929-04-14T15:10:23');

        self::assertIsString($amPm);
        self::assertEquals('pm', $amPm);
        self::assertContains($amPm, ['am', 'pm']);
    }

    public function testDayOfMonth()
    {
        $dayOfMonth = $this->extension->dayOfMonth('2001-04-29T15:10:12');

        self::assertIsString($dayOfMonth);
        self::assertEquals('25', $dayOfMonth);
    }

    public function testDayOfWeek()
    {
        $dayOfWeek = $this->extension->dayOfWeek('2021-12-12T15:10:00');

        self::assertIsString($dayOfWeek);
        self::assertEquals('Monday', $dayOfWeek);
    }

    public function testMonth()
    {
        $month = $this->extension->month('2021-05-23T15:10:00');

        self::assertIsString($month);
        self::assertEquals('10', $month);
    }

    public function testMonthName()
    {
        $monthName = $this->extension->monthName('2021-06-06T15:10:00');

        self::assertIsString($monthName);
        self::assertEquals('October', $monthName);
    }

    public function testYear()
    {
        $year = $this->extension->year('2021-09-12T15:10:00');

        self::assertIsString($year);
        self::assertEquals('1999', $year);
    }

    public function testCentury()
    {
        $century = $this->extension->century();

        self::assertIsString($century);
        self::assertEquals('XIX', $century);
    }

    public function testTimezone()
    {
        $timezone = $this->extension->timezone();

        self::assertIsString($timezone);
        self::assertContains($timezone, \DateTimeZone::listIdentifiers());
    }
}
