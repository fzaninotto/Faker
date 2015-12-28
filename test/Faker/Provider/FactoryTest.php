<?php

namespace Faker\Test\Provider;
use Faker\Provider;
use Faker\Locale;
use \Faker\Test\getMockLocaleRepresentingLocaleCode;
use \Mockery as m;

class FactoryTest extends \PHPUnit_Framework_Testcase
{
    // private $providerFactory;

    // public function setUp()
    // {
    //     $this->providerFactory = new Provider\Factory();
    // }

    /**
     * @test
     * @dataProvider localeProviderSetProvider
     */
    public function generatesDefaultProviderInstancesForAGivenGeneratorAndLocaleCascade(
        $providerFactoryPartialMock,
        $mockLocaleCascade,
        $expectedFullyQualifiedProviderClassNames)
    {
        $providerInstances =
            $providerFactoryPartialMock->createDefaultProvidersForGenerator(
                m::mock('\Faker\Generator'),
                $mockLocaleCascade
            );

        $this->assertEquals(
            $expectedFullyQualifiedProviderClassNames,
            array_map('get_class', $providerInstances)
        );
    }

    public function localeProviderSetProvider()
    {
        return array(
            $this->generateFactoryTestDataForProviders(
                Provider\ADDRESS, Provider\BARCODE, Provider\BIASED),

            $this->generateFactoryTestDataForProviders(
                Provider\FILE, Provider\IMAGE, Provider\MISC),

            $this->generateFactoryTestDataForProviders(
                Provider\UUID, Provider\COLOR, Provider\INTERNET)
        );
    }

    protected function generateFactoryTestDataForProviders()
    {
        $providerIDs = func_get_args();

        return array(
            // factory partial mock
            $this->getProviderFactoryPartialMockForProviderIDs($providerIDs),

            // mock ProviderQualificationCascade
            $this->generateMockCascadeExpectingProviders($providerIDs),

            // expected fully qualified Provider class names
            array_map(function($providerName) { return "Faker\\Provider\\{$providerName}"; }, $providerIDs)
        );
    }

    protected function getProviderFactoryPartialMockForProviderIDs(array $providerIDs)
    {
        return
            m::mock('\Faker\Provider\Factory[getDefaultProviderIDs]')
                ->shouldReceive('getDefaultProviderIDs')
                ->andReturn($providerIDs)
                ->getMock();
    }

    protected function generateMockCascadeExpectingProviders(array $providerIDs)
    {
        return
            m::mock('\Faker\Locale\ProviderQualificationCascade', array(array()))
                ->shouldReceive('getQualifiedClassName')
                ->times(count($providerIDs))
                ->andReturnUsing(function($providerName) {return "Faker\\Provider\\{$providerName}";})
                ->getMock();
    }
}
