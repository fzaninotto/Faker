<?php
require_once __DIR__.'/../vendor/autoload.php';

// This file demonstrates how the ArrayPopulator can be used to populate various arrays using the ConfigGuesser with
// or without the Name guesser as a fallback.

// Create the generator to use
$generator = \Faker\Factory::create();

// Initialize the configuration guesser based on a JSON file
$guesser = new \Faker\Guesser\ConfigGuesser($generator);
\Faker\Config\ConfigGuesserLoader::loadFile($guesser, __DIR__ . '/example-config.json');

// Create an ArrayPopulator to fill up your arrays based on configuration only
$populator = new \Faker\Populator\ArrayPopulator($generator, $guesser);

// Create an ArrayPopulator to fill up your arrays based on configuration with a fallback on the name guesser for properties that are not configured
$populator2 = new \Faker\Populator\ArrayPopulator($generator, $guesser, new \Faker\Guesser\Name($generator));


$book = array(
    'id' => null,
    'summary' => null,
    'property1' => null
);

echo '----------------------------------'.PHP_EOL;
echo 'Book array before being populated:'.PHP_EOL;
print_r($book);
echo '----------------------------------'.PHP_EOL;

$populator->populate($book);
echo '----------------------------------------------'.PHP_EOL;
echo 'Book array populated as an "anonymous" entity:'.PHP_EOL;
print_r($book);
echo '----------------------------------------------'.PHP_EOL;

$book = array(
    'id' => null,
    'summary' => null,
    'property1' => null
);
$populator->populate($book, 'Book');
echo '----------------------------------------'.PHP_EOL;
echo 'Book array populated as a "Book" entity:'.PHP_EOL;
print_r($book);
echo '----------------------------------------'.PHP_EOL;

$book = array(
    'id' => null,
    'summary' => null,
    'property1' => null
);
$populator2->populate($book);
echo '-----------------------------------------------------------------------------'.PHP_EOL;
echo 'Book array populated as an "anonymous" entity with name guesser as a fallback:'.PHP_EOL;
print_r($book);
echo '-----------------------------------------------------------------------------'.PHP_EOL.PHP_EOL;

$book = array(
    'id' => null,
    'summary' => null,
    'property1' => null
);
$populator2->populate($book, 'Book');
echo '------------------------------------------------------------------------'.PHP_EOL;
echo 'Book array populated as a "Book" entity with name guesser as a fallback:'.PHP_EOL;
print_r($book);
echo '------------------------------------------------------------------------'.PHP_EOL.PHP_EOL;


$entity = array(
    'id' => null,
    'firstName' => null,
    'lastName' => null,
    'property1' => null,
    'property2' => null,
    'property3' => null
);
echo '-------------------------------------'.PHP_EOL;
echo 'Entity object before being populated:'.PHP_EOL;
print_r($entity);

$populator->populate($entity);
echo '------------------------------------------------'.PHP_EOL;
echo 'Entity array populated as an "anonymous" entity:'.PHP_EOL;
print_r($entity);
echo '------------------------------------------------'.PHP_EOL;

$entity = array(
    'id' => null,
    'firstName' => null,
    'lastName' => null,
    'property1' => null,
    'property2' => null,
    'property3' => null
);
$populator->populate($entity, 'Entity');
echo '---------------------------------------------'.PHP_EOL;
echo 'Entity array populated as an "Entity" entity:'.PHP_EOL;
print_r($entity);
echo '---------------------------------------------'.PHP_EOL;

$entity = array(
    'id' => null,
    'firstName' => null,
    'lastName' => null,
    'property1' => null,
    'property2' => null,
    'property3' => null
);
$populator->populate($entity, 'Package\Entity');
echo '----------------------------------------------------'.PHP_EOL;
echo 'Entity array populated as a "Package\Entity" entity:'.PHP_EOL;
print_r($entity);
echo '----------------------------------------------------'.PHP_EOL;


$entity = array(
    'id' => null,
    'firstName' => null,
    'lastName' => null,
    'property1' => null,
    'property2' => null,
    'property3' => null
);
$populator2->populate($entity, 'Entity');
echo '-----------------------------------------------------------------------------'.PHP_EOL;
echo 'Entity array populated as an "Entity" entity with name guesser as a fallback:'.PHP_EOL;
print_r($entity);
echo '-----------------------------------------------------------------------------'.PHP_EOL;

$entity = array(
    'id' => null,
    'firstName' => null,
    'lastName' => null,
    'property1' => null,
    'property2' => null,
    'property3' => null
);
$populator2->populate($entity, 'Package\Entity');
echo '------------------------------------------------------------------------------------'.PHP_EOL;
echo 'Entity array populated as a "Package\Entity" entity with name guesser as a fallback:'.PHP_EOL;
print_r($entity);
echo '------------------------------------------------------------------------------------'.PHP_EOL;
