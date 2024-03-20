<?php

namespace Faker\Test\Provider;

use Faker\Provider\DateTime as DateTimeProvider;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class DateTimeTest extends TestCase
{
    private string $defaultTz;

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
        $originalSystemTimezone = \date_default_timezone_get();
        $systemTimezone = 'Antarctica/Vostok';
        \date_default_timezone_set($systemTimezone);

        /**
         * Get a new date/time value and assert that it prefers the default
         * timezone over the system timezone.
         */
        $date = DateTimeProvider::dateTime();
        $this->assertNotSame($systemTimezone, $date->getTimezone()->getName());
        $this->assertSame($this->defaultTz, $date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        \date_default_timezone_set($originalSystemTimezone);
    }

    public function testUseSystemTimezoneWhenDefaultTimezoneIsNotSet(): void
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp() *and* reset the default timezone.
         */
        $originalSystemTimezone = \date_default_timezone_get();
        $originalDefaultTimezone = DateTimeProvider::getDefaultTimezone();
        $systemTimezone = 'Antarctica/Vostok';
        \date_default_timezone_set($systemTimezone);
        DateTimeProvider::setDefaultTimezone();

        /**
         * Get a new date/time value and assert that it uses the system timezone
         * and not the system timezone.
         */
        $date = DateTimeProvider::dateTime();
        $this->assertSame($systemTimezone, $date->getTimezone()->getName());
        $this->assertNotSame($this->defaultTz, $date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        \date_default_timezone_set($originalSystemTimezone);
    }

    public function testUnixTime(): void
    {
        $timestamp = DateTimeProvider::unixTime();
        $this->assertIsInt($timestamp);
        $this->assertGreaterThanOrEqual(0, $timestamp);
        $this->assertLessThanOrEqual(\time(), $timestamp);
    }

    public function testDateTime(): void
    {
        $date = DateTimeProvider::dateTime();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeWithTimezone(): void
    {
        $date = DateTimeProvider::dateTime('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeAD(): void
    {
        $date = DateTimeProvider::dateTimeAD();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('0000-01-01 00:00:00'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisCentury(): void
    {
        $date = DateTimeProvider::dateTimeThisCentury();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('-100 year'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisDecade(): void
    {
        $date = DateTimeProvider::dateTimeThisDecade();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('-10 year'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisYear(): void
    {
        $date = DateTimeProvider::dateTimeThisYear();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('-1 year'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisMonth(): void
    {
        $date = DateTimeProvider::dateTimeThisMonth();
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime('-1 month'), $date);
        $this->assertLessThanOrEqual(new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public function testDateTimeThisCenturyWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisCentury('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisDecadeWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisDecade('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisYearWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisYear('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisMonthWithTimezone(): void
    {
        $date = DateTimeProvider::dateTimeThisMonth('now', 'America/New_York');
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('America/New_York'));
    }

    public function testIso8601(): void
    {
        $date = DateTimeProvider::iso8601();
        $this->assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}[+-Z](\d{4})?$/', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        $this->assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testDate(): void
    {
        $date = DateTimeProvider::date();
        $this->assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}$/', $date);
        $this->assertGreaterThanOrEqual(new \DateTime('@0'), new \DateTime($date));
        $this->assertLessThanOrEqual(new \DateTime(), new \DateTime($date));
    }

    public function testTime(): void
    {
        $date = DateTimeProvider::time();
        $this->assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $date);
    }

    #[DataProvider('providerDateTimeBetween')]
    public function testDateTimeBetween($start, $end): void
    {
        $date = DateTimeProvider::dateTimeBetween($start, $end);
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertGreaterThanOrEqual(new \DateTime($start), $date);
        $this->assertLessThanOrEqual($end ? new \DateTime($end) : new \DateTime(), $date);
        $this->assertEquals(new \DateTimeZone($this->defaultTz), $date->getTimezone());
    }

    public static function providerDateTimeBetween(): array
    {
        return [
            ['-1 year', false],
            ['-1 year', null],
            ['-1 day', '-1 hour'],
            ['-1 day', 'now'],
        ];
    }

    #[DataProvider('providerDateTimeInInterval')]
    public function testDateTimeInInterval(string $start, string $interval, bool $isInFuture): void
    {
        $date = DateTimeProvider::dateTimeInInterval($start, $interval);
        $this->assertInstanceOf(\DateTime::class, $date);

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

    public static function providerDateTimeInInterval(): array
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

        \mt_srand(1);
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
        \mt_srand();

        // regenerate Random Date with same seed and same maximum end timestamp
        \mt_srand(1);
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
        \mt_srand();
    }
}
