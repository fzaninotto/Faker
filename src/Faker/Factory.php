<?php

namespace Faker;

use Faker\Locale;

require_once dirname(__FILE__).'/init.php';

class Factory
{
    private static $fallbackQualificationCascade;
    private static $localeFactory;
    private static $providerFactory;

    /**
     * dependency injection method, called from init.php
     * @param  Locale\Factory                      $localeFactory
     * @param  Locale\ProviderQualificationCascade $fallbackQualificationCascade
     * @param  Provider\Factory                    $providerFactory
     * @access public
     */
    public static function init(
        Locale\Factory $localeFactory,
        Locale\ProviderQualificationCascade $fallbackQualificationCascade,
        Provider\Factory $providerFactory
    ) {
        self::$providerFactory = $providerFactory;
        self::$fallbackQualificationCascade = $fallbackQualificationCascade;
        self::$localeFactory = $localeFactory;
    }

    /**
     * create a new Generator instance loaded with all default providers
     * @param string $localeCode the locale code to use providers within the returned Generator instance
     * @return Generator Generator instance loaded with all default providers
     */
    public static function create($localeCode = Locale\DEFAULT_LOCALE)
    {
        $generator = new Generator();
        $preferredLocale = self::$localeFactory->create($localeCode);

        $providerInstances =
            self::$providerFactory->createDefaultProvidersForGenerator(
                $generator,
                self::$fallbackQualificationCascade->forPreferredLocale($preferredLocale)
            );

        foreach ($providerInstances as $providerInstance) {
            $generator->addProvider($providerInstance);
        }

        return $generator;
    }
}
