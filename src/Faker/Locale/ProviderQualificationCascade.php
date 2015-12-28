<?php

namespace Faker\Locale;

use Faker\Provider;

/**
 * Faker\Locale composite used for Provider classname qualification
 */
class ProviderQualificationCascade implements \Faker\ClassQualifier
{
    private $cascade = array();

    public function __construct(array $localeCascade)
    {
        $this->cascade = $localeCascade;
    }

    /**
     * Factory method that generates a new cascade that gives preference to the given locale code
     * @param  \Faker\Locale $locale  the locale instance to give preference to in the returned cascade
     * @return \Faker\Locale\ProviderQualificationCascade
     * @access public
     */
    public function forPreferredLocale(Locale $locale)
    {
        return new static(array_merge(array($locale), $this->cascade));
    }

    /**
     * @param  array   $localeCodes set of locale codes to check for representational equality
     * @return boolean              true if the given locale code set is representative of the encapsulated
     *                              cascade, false if otherwise
     */
    public function isRepresentedByLocaleCodes(array $localeCodes)
    {
        $cascadeSize = count($this->cascade);
        if (count($localeCodes) !== $cascadeSize) {
            return false;
        }

        for ($i = 0; $i < $cascadeSize; ++$i) {
            $indexCascadeLocale = $this->cascade[$i];
            $indexLocaleCode = $localeCodes[$i];
            if ($indexCascadeLocale->representsLocaleCode($indexLocaleCode) === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param  string  $className Provider class name to apply across the cascade to generate a set
     *                            of potential locale-qualified class names
     * @return string             the given unqualified Provider class name, fully qualified
     * @throws \InvalidArgumentException if given provider class name not found for any locale in
     *                                   the cascade
     * @access public
     */
    public function getQualifiedClassName($className)
    {
        $potentialLocaleQualifiedClassNames = $this->getAllPotentialLocaleQualifiedClassNamesForProviderClass($className);
        return $this->getFirstExistingQualifiedProviderClassNameFromCascadeGeneratedSet(
            $potentialLocaleQualifiedClassNames,
            $className
        );
    }

    /**
     * [getAllPotentialLocaleQualifiedClassNamesForProviderClass description]
     * @param  string  $className the unqualified provider class name for which to generate a set of
     *                            all potential locale-qualified versions
     * @return array              set of all potential locale-qualified versions of the given unqualified
     *                            class names based on the locales within the cascade
     * @access protected
     */
    protected function getAllPotentialLocaleQualifiedClassNamesForProviderClass($className)
    {
        return array_map(
            function ($locale) use ($className) {
                return $locale->getQualifiedClassName($className);
            },
            $this->cascade
        );
    }

    /**
     * @param  array  $potentialClassnames  set of all potential locale-qualified provider class names
     * @param  string $unqualifiedClassName the original unqualified class name represented in the
     *                                      locale-qualified set
     * @return string                       the first class name within the set of given potential
     *                                      class names that can be instantiated (is a valid
     *                                      Faker\Provider class)
     * @throws \InvalidArgumentException if no valid Faker\Provider class names exist in the given
     *                                   set of potential qualified class names
     * @access protected
     */
    protected function getFirstExistingQualifiedProviderClassNameFromCascadeGeneratedSet($potentialClassnames, $unqualifiedClassName)
    {
        foreach ($potentialClassnames as $localeQualifiedClassName) {
            $fullyQualifiedClassName = Provider\NAMESPACE_PREFIX."\\{$localeQualifiedClassName}";
            if (class_exists($fullyQualifiedClassName)) {
                return $fullyQualifiedClassName;
            }
        }

        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s"', $unqualifiedClassName));
    }
}
