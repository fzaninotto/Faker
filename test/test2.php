<?php

require_once dirname(__FILE__) . '/../../Propel/runtime/lib/Propel.php';
set_include_path(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/classes' . PATH_SEPARATOR . get_include_path());
Propel::init(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/conf/bookstore-conf.php');

require_once '../src/Faker/ORM/Propel.php';
require_once '../src/Faker/Factory.php';

$entities = array();
$generator = Faker\Factory::create();
AuthorQuery::create()->deleteAll();
$populator = new Faker\ORM\Propel('Author');
$authorColumnFormatters = array(
	'FirstName' => function() use ($generator) { return $generator->firstName; },
	'LastName' => function() use ($generator) { return $generator->lastName; }
);
$populator->setColumnFormatters($authorColumnFormatters);
$populator->populate(10, $entities);
$bookColumnFormatters = array(
	'Title' => function() use ($generator) { return $generator->sentence; },
	'AuthorId' => function($inserted) { return $inserted['Author'][mt_rand(0, count($inserted['Author']) - 1)]; }
);
$populator = new Faker\ORM\Propel('Book');
$populator->setColumnFormatters($bookColumnFormatters);
$inserted = $populator->populate(10, $entities);
echo BookQuery::create()->joinWith('Book.Author')->find();