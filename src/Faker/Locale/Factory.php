<?php

namespace Faker\Locale;

class Factory
{
    /**
     * @param  string  $localeID the locale code for which to generate an iLocale instance
     * @return iLocale           the appropriate iLocale instance as determined from the given localeID
     * @access public
     */
    public function create($localeID)
    {
        return
            ($localeID === NULL_LOCALE)
                ? new NullLocale()
                : new Locale($localeID);
    }
}
