<?php


namespace Faker\Populator;


use Faker\Factory;
use Faker\Generator;
use Faker\Guesser\ConfigGuesser;
use Faker\Guesser\Name;
use Faker\Config\Format;
use PHPUnit\Framework\TestCase;

class ArrayPopulatorTest extends TestCase
{
    /** @var Generator */
    private $generator;

    /** @var ConfigGuesser */
    private $guesser;

    /** @var ArrayPopulator */
    private $populator;

    protected function setUp()
    {
        parent::setUp();
        $generator = Factory::create();
        $generator->seed(1234);
        $this->generator = $generator;

        $guesser = new ConfigGuesser($this->generator);
        $guesser->addFormat('Entity1', 'property1', new Format('name'));
        $guesser->addFormat('Entity1', 'property2', new Format('words', array(3, true)));
        $guesser->addFormat('Entity2', 'property1', new Format('randomElements', array(array('a', 'b', 'c'), 1, false)));
        $guesser->addFormat(ConfigGuesser::WILDCARD, 'id', new Format('uuid'));
        $guesser->addFormat(ConfigGuesser::WILDCARD, 'property2', new Format('city'));
        $this->guesser = $guesser;

        $this->populator = new ArrayPopulator($this->generator, $this->guesser, new Name($this->generator));
    }

    /**
     * @dataProvider populateDataProvider
     * @param string $entity The name of the entity to associate with the array
     * @param array $array The array to populate
     * @param array $expectedResult The expected populated array
     */
    public function testPopulate($entity, array $array, array $expectedResult)
    {
        $this->populator->populate($array, $entity);
        self::assertEquals($expectedResult, $array, "Mismatch found while populating array");
    }


    public function populateDataProvider()
    {
        return array(
            array(
                'Entity1',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => 'Carolyne Luettgen',
                    'property2' => 'laborum eius est',
                    'property3' => null,
                    'firstName' => 'Bert'
                )
            ),

            array(
                'Entity2',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => array('b'),
                    'property2' => 'South Clairemouth',
                    'property3' => null,
                    'firstName' => 'Bert'
                )
            ),

            array(
                'Entity3',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => 'Orville'
                )
            ),

            array(
                '',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => 'Orville'
                )
            ),

            array(
                null,
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => 'Orville'
                )
            ),
        );
    }

    /**
     * @dataProvider populateDataProviderWithoutName
     * @param string $entity The name of the entity to associate with the array
     * @param array $array The array to populate
     * @param array $expectedResult The expected populated array
     */
    public function testPopulateWithoutName($entity, array $array, array $expectedResult)
    {
        $this->populator = new ArrayPopulator($this->generator, $this->guesser);
        $this->populator->populate($array, $entity);
        self::assertEquals($expectedResult, $array, "Mismatch found while populating array");
    }


    public function populateDataProviderWithoutName()
    {
        return array(
            array(
                'Entity1',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => 'Carolyne Luettgen',
                    'property2' => 'laborum eius est',
                    'property3' => null,
                    'firstName' => null
                )
            ),

            array(
                'Entity2',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => array('b'),
                    'property2' => 'South Clairemouth',
                    'property3' => null,
                    'firstName' => null
                )
            ),

            array(
                'Entity3',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => null
                )
            ),

            array(
                '',
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => null
                )
            ),

            array(
                null,
                array(
                    'id' => null,
                    'property1' => null,
                    'property2' => null,
                    'property3' => null,
                    'firstName' => null
                ),
                array(
                    'id' => '66529e01-d113-3473-8d6f-9e11e09332ea',
                    'property1' => null,
                    'property2' => 'Justenstad',
                    'property3' => null,
                    'firstName' => null
                )
            ),
        );
    }
}
