<?php

namespace Faker;

class Factory
{
    const DEFAULT_LOCALE = 'en_US';

    protected static $defaultProviders = array('Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid');

    public static function create($locale = self::DEFAULT_LOCALE)
    {
        $generator = new Generator();
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
        if ($providerClass = self::findProviderClassname($provider, static::DEFAULT_LOCALE)) {
            return $providerClass;
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
}
