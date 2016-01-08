<?php

namespace Faker\Locale;

class NullLocale implements \Faker\ClassQualifier
{
    public function representsLocaleCode($localeCode)
    {
        return ($localeCode === NULL_LOCALE);
    }

    /**
     * returns a provider class name without any locale qualifications
     * @param  string  $className the provider class name
     * @return string             the provider class name, without locale qualification
     * @access public
     */
    public function getQualifiedClassName($className)
    {
        return $className;
    }
}
