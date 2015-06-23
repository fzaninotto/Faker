<?php

namespace Faker;

class Factory
{
    const DEFAULT_LOCALE = 'en_US';

    protected static $defaultProviders = array('Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid');

    protected static $defaultLocale = null;

    public static function create($locale = null)
    {
        $generator = new Generator();

        if (!$locale) {
            $locale = static::getDefaultLocale();
        }

        foreach (static::$defaultProviders as $provider) {
            $providerClassName = self::getProviderClassname($provider, $locale);
            $generator->addProvider(new $providerClassName($generator));
        }

        return $generator;
    }

    protected static function getProviderClassname($provider, $locale = '')
    {
        if ($providerClass = self::findProviderClassname($provider, $locale)) {
            return $providerClass;
        }

        // fallback to default locale
        if ($providerClass = self::findProviderClassname($provider, static::getDefaultLocale())) {
            return $providerClass;
        }

        if (static::DEFAULT_LOCALE != static::getDefaultLocale()) {
            // fallback to DEFAULT_LOCALE
            if ($providerClass = self::findProviderClassname($provider, static::DEFAULT_LOCALE)) {
                return $providerClass;
            }
        }

        // fallback to no locale
        $providerClass = self::findProviderClassname($provider);
        if (class_exists($providerClass)) {
            return $providerClass;
        }

        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s" with locale "%s"', $provider, $locale));
    }

    protected static function findProviderClassname($provider, $locale = '')
    {
        $providerClass = 'Faker\\' . ($locale ? sprintf('Provider\%s\%s', $locale, $provider) : sprintf('Provider\%s', $provider));
        if (class_exists($providerClass, true)) {
            return $providerClass;
        }
    }

    public static function setDefaultLocale($locale)
    {
        static::$defaultLocale = $locale;
    }

    public static function getDefaultLocale()
    {
        return isset(static::$defaultLocale) ? static::$defaultLocale : static::DEFAULT_LOCALE;
    }
}
