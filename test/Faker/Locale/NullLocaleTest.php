<?php

namespace Faker\Test\Locale;
use Faker\Locale;

class NullLocaleTest extends \PHPUnit_Framework_Testcase
{
    /**
     * @test
     * @dataProvider localeCodeRepresentationCheckProvider
     */
    public function returnsWhetherOrNotInstanceRepresentsAGivenLocaleCode(
        $localeCode,
        $expectedResult)
    {
        $locale = new Locale\NullLocale();
        $this->assertSame($expectedResult, $locale->representsLocaleCode($localeCode));
    }

    public function localeCodeRepresentationCheckProvider()
    {
        return array(
            array(Locale\EN_US, false),
            array(Locale\EN_GB, false),
            array(Locale\EN_GB, false),
            array(Locale\NULL_LOCALE, true)
        );
    }

    /**
     * @test
     * @dataProvider localeInfoProvider
     */
    public function returnsGivenClassNameWithoutLocaleQualification(
        $localeCode,
        $providerClassName)
    {
        $locale = new Locale\NullLocale($localeCode);
        $this->assertEquals(
            $providerClassName,
            $locale->getQualifiedClassName($providerClassName)
        );
    }

    public function localeInfoProvider()
    {
        return array(
            array(Locale\EN_US, 'testProvider'),
            array(Locale\EN_IN, 'testProvider'),
            array(Locale\IT_IT, 'testProvider'),
            array(Locale\KO_KR, 'testProvider'),
            array(Locale\PT_BR, 'testProvider')
        );
    }
}
