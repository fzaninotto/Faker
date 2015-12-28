<?php

namespace Faker\Test;
use Faker\Locale;
use Faker\Locale\Factory;

class LocaleFactoryTest extends \PHPUnit_Framework_Testcase
{
    private $localeFactory;

    public function setUp()
    {
        $this->localeFactory = new Factory();
    }

    /**
     * @test
     */
    public function createsNullLocale()
    {
        $this->assertInstanceOf('Faker\\Locale\\NullLocale', $this->localeFactory->create(Locale\NULL_LOCALE));
    }

    /**
     * @test
     * @dataProvider localeCodeProvider
     */
    public function createsLocaleInstanceRepresentingGivenLocaleCode($localeCode)
    {
        $locale = $this->localeFactory->create($localeCode);
        $this->assertInstanceOf('Faker\\Locale\\Locale', $locale);
    }

    public function localeCodeProvider()
    {
        return array(
            array(Locale\EN_US),
            array(Locale\EN_IN),
            array(Locale\IT_IT),
            array(Locale\KO_KR),
            array(Locale\PT_BR)
        );
    }
}
