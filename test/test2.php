<?php

require_once dirname(__FILE__) . '/../../Propel/runtime/lib/Propel.php';
set_include_path(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/classes' . PATH_SEPARATOR . get_include_path());
Propel::init(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/conf/bookstore-conf.php');

require_once '../src/Faker/ORM/Propel/Populator.php';
require_once '../src/Faker/Factory.php';

BookQuery::create()->deleteAll();
AuthorQuery::create()->deleteAll();
$generator = \Faker\Factory::create();
$populator = new Faker\ORM\Propel\Populator($generator);
$populator->addEntity('Author', 5, array(
	'Email' => function($entities) use ($generator) { return $generator->safeEmail; },
));
$populator->addEntity('Book', 10);
$inserted = $populator->execute();

echo BookQuery::create()->joinWith('Book.Author')->find();