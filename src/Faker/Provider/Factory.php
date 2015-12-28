<?php

namespace Faker\Provider;

use Faker\Generator;
use Faker\Locale;

class Factory
{
    /**
     * creates a set of Provider instances to be loaded into the given generator
     * TODO: circular dependencies between Faker\Generator instances and Faker\Provider instances
     *       seems like a code smell...something to look into in the future maybe
     * @param  \Faker\Generator                    $generator             the Generator instance for which to create Providers
     * @param  Locale\ProviderQualificationCascade $qualificationCascade  locale cascade to use for Provider qualification
     * @return array                                                      set of locale-qualified Provider instances
     * @access public
     */
    public function createDefaultProvidersForGenerator(
        Generator $generator,
        Locale\ProviderQualificationCascade $qualificationCascade
    ) {
        $providerClassNames = array_map($this->getProviderClassNameFromID(), $this->getDefaultProviderIDs());
        $fullyQualifiedProviderClassNames = array_map(
            array($qualificationCascade, 'getQualifiedClassName'),
            $providerClassNames
        );

        $providerInstances = array_map(
            function ($fullyQualifiedProviderClassName) use ($generator) {
                return new $fullyQualifiedProviderClassName($generator);
            },
            $fullyQualifiedProviderClassNames
        );

        return $providerInstances;
    }

    /**
     * @return array  set of Provider IDs to be loaded into a Generator by default
     * @access public
     */
    public function getDefaultProviderIDs()
    {
        return array(
            ADDRESS,
            BARCODE,
            BIASED,
            COLOR,
            COMPANY,
            DATETIME,
            FILE,
            IMAGE,
            INTERNET,
            LOREM,
            MISC,
            PAYMENT,
            PERSON,
            PHONE_NUMBER,
            TEXT,
            USER_AGENT,
            UUID
        );
    }

    /**
     * higher-order function which converts a given provider ID to a provider class name.  Note that
     * at the moment, the provider ID is the class name.
     * @return Callable  higher-order function which converts a given provider ID to a provider class name
     * @access protected
     */
    protected function getProviderClassNameFromID()
    {
        return
            function ($providerID) {
                return $providerID; // currently, provider name is the provider ID
            };
    }
}
