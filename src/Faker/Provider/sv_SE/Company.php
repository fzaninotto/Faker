<?php

namespace Faker\Provider\sv_SE;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} och {{lastName}}',
        '{{lastName}} och {{lastName}} {{companySuffix}}',
    ];

    protected static array $companySuffix = ['AB', 'HB'];

    protected static array $jobTitles = [
        'Automationsingenjör',
        'Bagare',
        'Digital Designer',
        'Ekonom',
        'Ekonomichef',
        'Elektronikingenjör',
        'Försäljare',
        'Försäljningschef',
        'Innovationsdirektör',
        'Investeringsdirektör',
        'Journalist',
        'Kock',
        'Kulturstrateg',
        'Läkare',
        'Lokförare',
        'Mäklare',
        'Programmerare',
        'Projektledare',
        'Sjuksköterska',
        'Utvecklare',
        'UX Designer',
        'Webbutvecklare',
    ];

    public function jobTitle(): string
    {
        return static::randomElement(static::$jobTitles);
    }
}
