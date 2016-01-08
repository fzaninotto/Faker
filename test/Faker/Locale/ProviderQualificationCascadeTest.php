<?php

namespace Faker\Test;
use Faker\Locale;
use Faker\Locale\ProviderQualificationCascade;
use \Mockery as m;

class ProviderQualificationCascadeTest extends \PHPUnit_Framework_Testcase
{
    /**
     * @test
     * @dataProvider localeCodeComparisonProvider
     * @covers \Faker\Locale\ProviderQualificationCascade::isRepresentedByLocaleCodes
     */
    public function returnsWhetherOrNotInstanceRepresentedByGivenLocaleCodeSet(
        array $mockLocaleInstances,
        array $comparisonLocaleCodeSet,
        $expectedResult)
    {
        $cascade = new ProviderQualificationCascade($mockLocaleInstances);
        $this->assertSame(
            $expectedResult,
            $cascade->isRepresentedByLocaleCodes($comparisonLocaleCodeSet)
        );
    }

    public function localeCodeComparisonProvider()
    {
        $providerArray = array(
            // empty cascade test
            array(array(), array(), true)
        );

        // ------------------- single-locale cascade tests --------------------
        $providerArray[] = array(
            array(getNullLocaleMock()),
            array(Locale\NULL_LOCALE),
            true);

        $providerArray[] = array(
            array(getMockLocaleRepresentingLocaleCode(Locale\EN_US)),
            array(Locale\NULL_LOCALE),
            false);

        $providerArray[] = array(
            array(getMockLocaleRepresentingLocaleCode(Locale\DE_AT)),
            array(Locale\DE_CH),
            false);

        $providerArray[] = array(
            array(getMockLocaleRepresentingLocaleCode(Locale\DE_AT)),
            array(Locale\DE_AT),
            true);
        
        // -------------------- double-locale cascade tests -------------------
        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            array(
                Locale\EN_US
            ),
            false);

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            array(
                Locale\EN_US,
                Locale\NULL_LOCALE
            ),
            true);

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            array(
                Locale\NULL_LOCALE,
                Locale\EN_US
            ),
            false);

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getMockLocaleRepresentingLocaleCode(Locale\EN_GB)
            ),
            array(
                Locale\EN_US,
                Locale\EN_GB
            ),
            true);

        // ------------------- triple-locale cascade tests --------------------
        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getMockLocaleRepresentingLocaleCode(Locale\EN_GB),
                getNullLocaleMock()
            ),
            array(
                Locale\EN_US,
                Locale\EN_GB,
                Locale\NULL_LOCALE
            ),
            true);

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getMockLocaleRepresentingLocaleCode(Locale\DE_DE),
                getNullLocaleMock()
            ),
            array(
                Locale\EN_US,
                Locale\EN_GB,
                Locale\NULL_LOCALE
            ),
            false);

        return $providerArray;
    }

    /**
     * @test
     * @depends returnsWhetherOrNotInstanceRepresentedByGivenLocaleCodeSet
     * @dataProvider augmentedCascadeProvider
     * @covers \Faker\Locale\ProviderQualificationCascade::forPreferredLocale
     */
    public function returnsCascadeAugmentedByGivenPreferredLocale(
        $intialMockLocaleSet,
        $mockLocaleToGivePrecedence,
        $expectedNewCascadeRepresentation)
    {
        $cascade = new ProviderQualificationCascade($intialMockLocaleSet);
        $newCascade = $cascade->forPreferredLocale($mockLocaleToGivePrecedence);
        $this->assertTrue($newCascade->isRepresentedByLocaleCodes($expectedNewCascadeRepresentation));
    }

    public function augmentedCascadeProvider()
    {
        $providerArray = array(
            array(array(), getMockLocaleRepresentingLocaleCode(Locale\EN_US), array(Locale\EN_US))
        );

        $providerArray[] = array(
            array(getMockLocaleRepresentingLocaleCode(Locale\FR_FR)),
            getMockLocaleRepresentingLocaleCode(locale\EN_GB),
            array(
                locale\EN_GB,
                locale\FR_FR
            )
        );

        $providerArray[] = array(
            array(getNullLocaleMock()),
            getMockLocaleRepresentingLocaleCode(locale\EN_US),
            array(
                locale\EN_US,
                locale\NULL_LOCALE
            )
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            getMockLocaleRepresentingLocaleCode(locale\EN_GB),
            array(
                locale\EN_GB,
                locale\EN_US,
                locale\NULL_LOCALE
            )
        );

        return $providerArray;
    }

    /**
     * @test
     * @dataProvider unqualifiedProviderClassNameProvider
     */
    public function fullyQualifiesAProviderClassNameBasedOnLocales(
        $cascadeLocales,
        $className,
        $expectedFullyQualifiedClassName)
    {
        $cascade = new ProviderQualificationCascade($cascadeLocales);
        $this->assertSame(
            $expectedFullyQualifiedClassName,
            $cascade->getQualifiedClassName($className)
        );
    }

    public function unqualifiedProviderClassNameProvider()
    {
        $providerArray = array();

        $providerArray[] = array(
            array(getNullLocaleMock()),
            'Address',
            '\Faker\Provider\Address'
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\ZH_TW),
                getNullLocaleMock()
            ),
            'Image',
            '\Faker\Provider\Image'
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            'Company',
            '\Faker\Provider\en_US\Company'
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_GB),
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            'Person',
            '\Faker\Provider\en_GB\Person'
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_GB),
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            'Company',
            '\Faker\Provider\en_US\Company'
        );

        $providerArray[] = array(
            array(
                getMockLocaleRepresentingLocaleCode(Locale\EN_GB),
                getMockLocaleRepresentingLocaleCode(Locale\EN_US),
                getNullLocaleMock()
            ),
            'Color',
            '\Faker\Provider\Color'
        );

        return $providerArray;
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @dataProvider badProviderClassNameProvider
     */
    public function exceptionThrownIfCannotQualifyAProviderClassNameBasedOnLocales(
        $cascadeLocales,
        $className)
    {
        $cascade = new ProviderQualificationCascade($cascadeLocales);
        $cascade->getQualifiedClassName($className);
    }

    public function badProviderClassNameProvider()
    {
        return array(
            array(
                array(
                    getNullLocaleMock()
                ),
                'badProviderClass'
            ),

            array(
                array(
                    getMockLocaleRepresentingLocaleCode(Locale\EN_US)
                ),
                'badProviderClass'
            )
        );
    }
}
