<?php


namespace Faker\Guesser;


use Faker\Factory;
use Faker\Config\Format;
use PHPUnit\Framework\TestCase;

class ConfigGuesserTest extends TestCase
{
    /** @var ConfigGuesser */
    private $guesser;

    protected function setUp()
    {
        parent::setUp();
        $generator = Factory::create();
        $generator->seed(1234);
        $this->guesser = new ConfigGuesser($generator);
    }

    /**
     * Validates that when a format has been specified for a given entity+property combination, that it can be used via
     * the guessFormat method.
     *
     * @dataProvider guessFormatDataProvider
     * @param string $entity The entity to associate the format with
     * @param string $property The property to associate the format with
     * @param Format $format Format to parse
     * @param string $expectedValue Expected Value
     */
    public function testGuessFormat($entity, $property, $format, $expectedValue)
    {
        $this->guesser->addFormat($entity, $property, $format);
        self::assertTrue($this->guesser->isConfigured($entity, $property), 'explicit format not registered for property: '.$property);

        $result = $this->guesser->guessFormat($entity, $property);
        self::assertNotNull($result, 'guessFormat returned null');
        self::assertInstanceOf(\Closure::class, $result,  'guessFormat did not return a Closure instance');

        $value = $result();
        self::assertEquals($expectedValue, $value, "Formatted value mismatch");
    }

    public function guessFormatDataProvider()
    {
        return array(
            // Entity, Property, Format, Expected Value
            array('Entity', 'Property', new Format('name', array()), 'Miss Lorna Dibbert'),
            array('Entity', 'Property', new Format('name', array('')), 'Miss Lorna Dibbert'),
            array('Entity', 'Property', new Format('words', array(3, true)), 'consequatur dolores dolorum'),
            array('Entity', 'Property', new Format('randomElements', array(array('a', 'b', 'c'), 1, false)), array('c')),
        );
    }

    /**
     * Validates that when a wildcard format has been specified for a given property, that it can be used via
     * the guessFormat method.
     *
     * @dataProvider guessFormatDataProvider
     * @param string $entity The entity to associate the format with
     * @param string $property The property to associate the format with
     * @param Format $format Format to parse
     * @param string $expectedValue Expected Value
     */
    public function testGuessFormatWildcard($entity, $property, $format, $expectedValue)
    {
        $this->guesser->addFormat(ConfigGuesser::WILDCARD, $property, $format);
        self::assertTrue($this->guesser->isConfigured(ConfigGuesser::WILDCARD, $property), 'wildcard format not registered for property: '.$property);
        self::assertFalse($this->guesser->isConfigured($entity, $property), 'explicit format registered for property: '.$property);

        $result = $this->guesser->guessFormat($entity, $property);
        self::assertNotNull($result, 'guessFormat returned null');
        self::assertInstanceOf(\Closure::class, $result,  'guessFormat did not return a Closure instance');

        $value = $result();
        self::assertEquals($expectedValue, $value, "Formatted value mismatch");
    }

    /**
     * Validates that when no format is registered, the guessFormat falls back to the Name Guesser provided by Faker.
     *
     * @dataProvider guessFormatDefaultDataProvider
     * @param string $entity The entity to associate the format with
     * @param string $property The property to associate the format with
     */
    public function testGuessFormatDefault($entity, $property)
    {
        self::assertFalse($this->guesser->isConfigured("*", $property), 'wildcard format registered for property: '.$property);
        self::assertFalse($this->guesser->isConfigured($entity, $property), 'format registered for property: '.$property);

        $result = $this->guesser->guessFormat($entity, $property);
        self::assertNull($result, 'guessFormat returned a closure');
    }

    public function guessFormatDefaultDataProvider()
    {
        return array(
            // Entity, Property, Expected Value
            array('Entity', 'name'),
            array('Entity', 'sentence'),
            array('Entity', 'firstName'),
            array('Entity', 'unknown'),
        );
    }

}
