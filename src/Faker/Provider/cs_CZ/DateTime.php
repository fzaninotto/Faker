<?php

namespace Faker\Provider\cs_CZ;

/**
 * Czech months and days without setting locale.
 */
class DateTime extends \Faker\Provider\DateTime
{
    protected static array $days = [
        'neděle',
        'pondělí',
        'úterý',
        'středa',
        'čtvrtek',
        'pátek',
        'sobota',
    ];
    protected static array $months = [
        'leden',
        'únor',
        'březen',
        'duben',
        'květen',
        'červen',
        'červenec',
        'srpen',
        'září',
        'říjen',
        'listopad',
        'prosinec',
    ];
    protected static array $monthsGenitive = [
        'ledna',
        'února',
        'března',
        'dubna',
        'května',
        'června',
        'července',
        'srpna',
        'září',
        'října',
        'listopadu',
        'prosince',
    ];
    protected static array $formattedDateFormat = [
        '{{dayOfMonth}}. {{monthNameGenitive}} {{year}}',
    ];

    public static function monthName(\DateTime|int|string $max = 'now'): string
    {
        return static::$months[parent::month($max) - 1];
    }

    public static function monthNameGenitive($max = 'now'): string
    {
        return static::$monthsGenitive[parent::month($max) - 1];
    }

    public static function dayOfWeek(\DateTime|int|string $max = 'now'): string
    {
        return static::$days[static::dateTime($max)->format('w')];
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @example '2'
     */
    public static function dayOfMonth(\DateTime|int|string $max = 'now'): string
    {
        return static::dateTime($max)->format('j');
    }

    /**
     * Full date with inflected month.
     *
     * @example '16. listopadu 2003'
     */
    public function formattedDate(): string
    {
        $format = static::randomElement(static::$formattedDateFormat);

        return $this->generator->parse($format);
    }
}
