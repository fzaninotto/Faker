<?php


namespace Faker\Config;


use Exception;
use Faker\Factory;
use Faker\Guesser\ConfigGuesser;
use PHPUnit\Framework\TestCase;

class ConfigGuesserLoaderTest extends TestCase
{
    /** @var ConfigGuesser */
    private $guesser;

    public function setUp()
    {
        parent::setUp();
        $generator = Factory::create();
        $generator->seed(1234);
        $this->guesser = new ConfigGuesser($generator);
    }

    public function testLoadValidFile()
    {
        ConfigGuesserLoader::loadFile($this->guesser, __DIR__ . '/../../fixtures/guesser-config.json');

        self::assertTrue($this->guesser->isConfigured('project', 'id'), 'explicit format not registered for project.id');
        self::assertTrue($this->guesser->isConfigured('project', 'description'), 'explicit format not registered for project.description');
        self::assertTrue($this->guesser->isConfigured('project', 'department'), 'explicit format not registered for project.department');
        self::assertTrue($this->guesser->isConfigured('project', 'status'), 'explicit format not registered for project.status');
        self::assertTrue($this->guesser->isConfigured('project', 'start'), 'explicit format not registered for project.start');
        self::assertTrue($this->guesser->isConfigured('client', 'fname'), 'explicit format not registered for client.fname');
        self::assertTrue($this->guesser->isConfigured('client', 'lname'), 'explicit format not registered for client.lname');
        self::assertTrue($this->guesser->isConfigured(ConfigGuesser::WILDCARD, 'id'), 'explicit format not registered for *.id');
    }

    public function testLoadObjectConfigFile()
    {
        ConfigGuesserLoader::loadFile($this->guesser, __DIR__ . '/../../fixtures/guesser-object-config.json');

        self::assertTrue($this->guesser->isConfigured('Faker\Populator\GrandParent', 'name'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\GrandParent', 'origin'), 'explicit format not registered');
        self::assertFalse($this->guesser->isConfigured('Faker\Populator\GrandParent', 'unused'), 'unexpected format registered');

        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Father', 'firstName'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Father', 'origin'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Father', 'job'), 'explicit format not registered');
        self::assertFalse($this->guesser->isConfigured('Faker\Populator\Father', 'name'), 'unexpected format registered');

        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Child', 'firstName'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Child', 'job'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Child', 'phone'), 'explicit format not registered');
        self::assertTrue($this->guesser->isConfigured('Faker\Populator\Child', 'note'), 'explicit format not registered');
        self::assertFalse($this->guesser->isConfigured('Faker\Populator\Child', 'name'), 'unexpected format registered');
        self::assertFalse($this->guesser->isConfigured('Faker\Populator\Child', 'origin'), 'unexpected format registered');

        self::assertTrue($this->guesser->isConfigured('GrandParent', 'unused'), 'explicit format not registered');
        self::assertFalse($this->guesser->isConfigured('GrandParent', 'name'), 'unexpected format registered');
        self::assertFalse($this->guesser->isConfigured('GrandParent', 'origin'), 'unexpected format registered');

        self::assertTrue($this->guesser->isConfigured(ConfigGuesser::WILDCARD, 'id'), 'explicit format not registered for *.id');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessageRegExp /Config file cannot be found: .+/
     */
    public function testLoadUnknownFileShouldThrowsException()
    {
        ConfigGuesserLoader::loadFile($this->guesser, __DIR__ . '/../../fixtures/unknown-file.json');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessageRegExp /Failed to decode config file: .+ Error: 4 -  Syntax error/
     */
    public function testLoadInvalidJsonFileShouldThrowsException()
    {
        ConfigGuesserLoader::loadFile($this->guesser, __DIR__ . '/../../fixtures/invalid-json.json');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessageRegExp /Failed to decode config file: .+ Invalid format provided for Entity 'project', Property 'id': .+/
     */
    public function testLoadInvalidFormatFileShouldThrowsException()
    {
        ConfigGuesserLoader::loadFile($this->guesser, __DIR__ . '/../../fixtures/invalid-format.json');
    }

}
