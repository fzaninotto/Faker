<?php

namespace Faker\Provider;

class Company extends Base
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
    ];

    protected static array $companySuffix = ['Ltd'];

    protected static array $jobTitleFormat = [
        '{{word}}',
    ];

    /**
     * @example 'Acme Ltd'
     */
    public function company(): string
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     */
    public static function companySuffix(): string
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @example 'Job'
     */
    public function jobTitle(): string
    {
        $format = static::randomElement(static::$jobTitleFormat);

        return $this->generator->parse($format);
    }
}
