<?php
require_once __DIR__.'/../vendor/autoload.php';

// This file demonstrates how the ObjectPopulator can be used to populate various objects using the ConfigGuesser with
// or without the Name guesser as a fallback.

// Define sample classes used in this example
class Book {
    private $id;
    private $summary;
    private $property1;

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}

    public function getSummary() {return $this->summary;}
    public function setSummary($summary) {$this->summary = $summary;}

    public function getProperty1() {return $this->property1;}
    public function setProperty1($property1) {$this->property1 = $property1;}
}

class Entity {
    public $id;
    public $firstName;
    public $lastName;
    public $property1;
    public $property2;
    public $property3;
}

// Create the generator to use
$generator = \Faker\Factory::create();

// Initialize the configuration guesser based on a JSON file
$guesser = new \Faker\Guesser\ConfigGuesser($generator);
\Faker\Config\ConfigGuesserLoader::loadFile($guesser, __DIR__ . '/example-config.json');

// Create an ObjectPopulator to fill up your objects based on configuration only
$populator = new \Faker\Populator\ObjectPopulator($generator, $guesser);

// Create an ObjectPopulator to fill up your objects based on configuration with a fallback on the name guesser for properties that are not configured
$populator2 = new \Faker\Populator\ObjectPopulator($generator, $guesser, new \Faker\Guesser\Name($generator));

$book = new Book();
echo '-----------------------------------'.PHP_EOL;
echo 'Book object before being populated:'.PHP_EOL;
print_r($book);
echo '-----------------------------------'.PHP_EOL;

$populator->populate($book);
echo '-------------------------------------------------'.PHP_EOL;
echo 'Populated book object based on configuration only:'.PHP_EOL;
print_r($book);
echo '-------------------------------------------------'.PHP_EOL;

$book = new Book();
$populator2->populate($book);
echo '-----------------------------------------------------------------------------'.PHP_EOL;
echo 'Populated book object based on configuration with name guesser as a fallback:'.PHP_EOL;
print_r($book);
echo '-----------------------------------------------------------------------------'.PHP_EOL.PHP_EOL;


$entity = new Entity();
echo '-------------------------------------'.PHP_EOL;
echo 'Entity object before being populated:'.PHP_EOL;
print_r($entity);

$populator->populate($entity);
echo '----------------------------------------------------'.PHP_EOL;
echo 'Populated entity object based on configuration only:'.PHP_EOL;
print_r($entity);
echo '----------------------------------------------------'.PHP_EOL;

$entity = new Entity();
$populator2->populate($entity);
echo '-------------------------------------------------------------------------------'.PHP_EOL;
echo 'Populated entity object based on configuration with name guesser as a fallback:'.PHP_EOL;
print_r($entity);
echo '-------------------------------------------------------------------------------'.PHP_EOL;

