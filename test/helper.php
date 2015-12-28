<?php

namespace Faker\Test;
use Faker\Locale;
use \Mockery as m;

function getMockLocaleRepresentingLocaleCode($localeCode)
{
    $mockLocale = m::mock('Faker\Locale\Locale');

    $mockLocale
        ->shouldReceive('representsLocaleCode')
        ->andReturnUsing(function($localeCodeArg) use ($localeCode) {
            return ($localeCodeArg === $localeCode);
        });

    $mockLocale
        ->shouldReceive('getQualifiedClassName')
        ->andReturnUsing(function($className) use ($localeCode) {
            return "{$localeCode}\\{$className}";
        });

    return $mockLocale;
}

function getNullLocaleMock()
{
    $mockLocale = m::mock('Faker\Locale\NullLocale');

    $mockLocale
        ->shouldReceive('representsLocaleCode')
        ->andReturnUsing(function($localeCodeArg) {
            return ($localeCodeArg === Locale\NULL_LOCALE);
        });

    $mockLocale
        ->shouldReceive('getQualifiedClassName')
        ->andReturnUsing(function($className) {
            return $className;
        });

    return $mockLocale;
}
