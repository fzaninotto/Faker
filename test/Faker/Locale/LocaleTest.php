<?php

namespace Faker\Test\Locale;
use Faker\Locale;

class LocaleTest extends \PHPUnit_Framework_Testcase
{
    /**
     * @test
     * @dataProvider localeCodeRepresentationCheckProvider
     */
    public function returnsWhetherOrNotInstanceRepresentsAGivenLocaleCode(
        $localeCode,
        $representationTestLocaleCode,
        $expectedResult)
    {
        $locale = new Locale\Locale($localeCode);
        $this->assertSame($expectedResult, $locale->representsLocaleCode($representationTestLocaleCode));
    }

    public function localeCodeRepresentationCheckProvider()
    {
        return array(
            array(Locale\EN_US, Locale\EN_US, true),
            array(Locale\EN_GB, Locale\EN_US, false),
            array(Locale\EN_GB, Locale\EN_GB, true),
            array(Locale\CS_CZ, Locale\CS_CZ, true)
        );
    }

    /**
     * @test
     * @dataProvider localeInfoProvider
     */
    public function qualifiesGivenClassNameWithALocaleCode(
        $localeCode,
        $providerClassName,
        $expectedLocaleQualifiedProviderClassName)
    {
        $locale = new Locale\Locale($localeCode);
        $this->assertEquals(
            $expectedLocaleQualifiedProviderClassName,
            $locale->getQualifiedClassName($providerClassName)
        );
    }

    public function localeInfoProvider()
    {
        return array(
            array(Locale\EN_US, 'testProvider', 'en_US\testProvider'),
            array(Locale\EN_IN, 'testProvider', 'en_IN\testProvider'),
            array(Locale\IT_IT, 'testProvider', 'it_IT\testProvider'),
            array(Locale\KO_KR, 'testProvider', 'ko_KR\testProvider'),
            array(Locale\PT_BR, 'testProvider', 'pt_BR\testProvider')
        );
    }
}
