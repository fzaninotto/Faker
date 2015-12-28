<?php

namespace Faker\Locale;

/**
 * standard iLocale implementation identified by a given locale code (defined in Faker/src/const.php).
 */
class Locale implements \Faker\ClassQualifier
{
    private $code;

    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * @param  string $localeCode  the locale code to test for
     * @return bool  true if the Locale instance does represent the same locale as that identified
     *               by the given locale code, fales otherwise
     */
    public function representsLocaleCode($localeCode)
    {
        return ($this->code === $localeCode);
    }

    /**
     * qualifies a given provider class using the locale code
     * @param  string  $className the provider class name requiring qualification
     * @return string             the provider class name, qualified using the locale code
     * @access public
     */
    public function getQualifiedClassName($className)
    {
        return sprintf('%s\%s', $this->code, $className);
    }
}
