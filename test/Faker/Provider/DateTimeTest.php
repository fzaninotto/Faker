<?php

namespace Faker\Test\Provider;

use Faker\Provider\DateTime as DateTimeProvider;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class DateTimeTest extends TestCase
{
    protected function setUp(): void
    {
        $this->defaultTz = 'UTC';
        DateTimeProvider::setDefaultTimezone($this->defaultTz);
    }

    protected function tearDown(): void
    {
        DateTimeProvider::setDefaultTimezone();
    }

    public function testPreferDefaultTimezoneOverSystemTimezone(): void
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp().
         */
        $originalSystemTimezone = date_default_timezone_get();
        $systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set($systemTimezone);

        /**
         * Get a new date/time value and assert that it prefers the default
         * timezone over the system timezone.
         */
        $date = DateTimeProvider::dateTime();
        self::assertNotSame($systemTimezone, $date->getTimezone()->getName());
        self::assertSame($this->defaultTz, $date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set($originalSystemTimezone);
    }

    public function testUseSystemTimezoneWhenDefaultTimezoneIsNotSet(): void
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp() *and* reset the default timezone.
         */
        $originalSystemTimezone = date_default_timezone_get();
        $originalDefaultTimezone = DateTimeProvider::getDefaultTimezone();
        $systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set($systemTimezone);
        DateTimeProvider::setDefaultTimezone();

        /**
         * Get a new date/time value and assert that it uses the system timezone
         * and not the system timezone.
         */
        $date = DateTimeProvider::dateTime();
        self::assertSame($systemTimezone, $date->getTimezone()->getName());
        self::assertNotSame($this->defaultTz, $date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set($originalSystemTimezone);
    }

    public function testUnixTime(): void
    {
        $timestamp = DateTimeProvider::unixTime();
        self::assertIsInt($timestamp);
        self::assertGreaterThanOrEqual(0, $timestamp);
        self::assertLessThanOrEqual(time(), $timestamp);
    }

    public function testDateTime(): void
    {
        $date = DateTimeProvider::dateTime();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('@0'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeWithTimezone(): void
    {
        $date = DateTimeProvider::dateTime('now', 'America/New_York');
        self::assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeAD(): void
    {
        $date = DateTimeProvider::dateTimeAD();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('0000-01-01 00:00:00'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisCentury(): void
    {
        $date = DateTimeProvider::dateTimeThisCentury();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('-100 year'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisDecade(): void
    {
        $date = DateTimeProvider::dateTimeThisDecade();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('-10 year'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisYear(): void
    {
        $date = DateTimeProvider::dateTimeThisYear();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('first day of january this year'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisMonth(): void
    {
        $date = DateTimeProvider::dateTimeThisMonth();
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime('-1 month'), $date);
        self::assertLessThanOrEqual(new \DateTime(), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisCenturyWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisCentury('now', 'America/New_York');
        self::assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisDecadeWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisDecade('now', 'America/New_York');
        self::assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisYearWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisYear('now', 'America/New_York');
        self::assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisMonthWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisMonth('now', 'America/New_York');
        self::assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testIso8601(): void
    {
        $date = DateTimeProvider::iso8601();
        self::assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}[+-Z](\d{4})?$/', $date);
        self::assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        self::assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testDate(): void
    {
        $date = DateTimeProvider::date();
        self::assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}$/', $date);
        self::assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        self::assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testTime(): void
    {
        $date = DateTimeProvider::time();
        self::assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $date);
    }

    /**
     * @dataProvider providerDateTimeBetween
     */
    public function testDateTimeBetween($start, $end): void
    {
        $date = DateTimeProvider::dateTimeBetween($start, $end);
        self::assertInstanceOf('\DateTime', $date);
        self::assertGreaterThanOrEqual(new \DateTime($start), $date);
        self::assertLessThanOrEqual(new \DateTime($end ?: 'now'), $date);
        self::assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function providerDateTimeBetween()
    {
        return [
            ['-1 year', false],
            ['-1 year', null],
            ['-1 day', '-1 hour'],
            ['-1 day', 'now'],
        ];
    }

    /**
     * @dataProvider providerDateTimeInInterval
     */
    public function testDateTimeInInterval($start, $interval, $isInFuture): void
    {
        $date = DateTimeProvider::dateTimeInInterval($start, $interval);
        self::assertInstanceOf('\DateTime', $date);

        $_interval = \DateInterval::createFromDateString($interval);
        $_start = new \DateTime($start);

        if ($isInFuture) {
            self::assertGreaterThanOrEqual($_start, $date);
            self::assertLessThanOrEqual($_start->add($_interval), $date);
        } else {
            self::assertLessThanOrEqual($_start, $date);
            self::assertGreaterThanOrEqual($_start->add($_interval), $date);
        }
    }

    public function providerDateTimeInInterval()
    {
        return [
            ['-1 year', '+5 days', true],
            ['-1 day', '-1 hour', false],
            ['-1 day', '+1 hour', true],
        ];
    }

    public function testFixedSeedWithMaximumTimestamp(): void
    {
        $max = '2118-03-01 12:00:00';

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
        self::assertEquals($unixTime, DateTimeProvider::unixTime($max));
        self::assertEquals($datetimeAD, DateTimeProvider::dateTimeAD($max));
        self::assertEquals($dateTime1, DateTimeProvider::dateTime($max));
        self::assertEquals($dateTimeBetween, DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', $max));
        self::assertEquals($date, DateTimeProvider::date('Y-m-d', $max));
        self::assertEquals($time, DateTimeProvider::time('H:i:s', $max));
        self::assertEquals($iso8601, DateTimeProvider::iso8601($max));
        self::assertEquals($dateTimeThisCentury, DateTimeProvider::dateTimeThisCentury($max));
        self::assertEquals($dateTimeThisDecade, DateTimeProvider::dateTimeThisDecade($max));
        self::assertEquals($dateTimeThisMonth, DateTimeProvider::dateTimeThisMonth($max));
        self::assertEquals($amPm, DateTimeProvider::amPm($max));
        self::assertEquals($dayOfMonth, DateTimeProvider::dayOfMonth($max));
        self::assertEquals($dayOfWeek, DateTimeProvider::dayOfWeek($max));
        self::assertEquals($month, DateTimeProvider::month($max));
        self::assertEquals($monthName, DateTimeProvider::monthName($max));
        self::assertEquals($year, DateTimeProvider::year($max));
        self::assertEquals($dateTimeThisYear, DateTimeProvider::dateTimeThisYear($max));
        mt_srand();
    }

    public function testTimezone(): void
    {
        $timezone = DateTimeProvider::timezone();
        $countryTimezone = DateTimeProvider::timezone('US');

        self::assertIsString($timezone);
        self::assertContains($timezone, \DateTimeZone::listIdentifiers());
        self::assertIsString($countryTimezone);
        self::assertContains($countryTimezone, \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, 'US'));
    }
}
