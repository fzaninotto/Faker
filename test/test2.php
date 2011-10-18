<?php

require_once dirname(__FILE__) . '/../../Propel/runtime/lib/Propel.php';
set_include_path(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/classes' . PATH_SEPARATOR . get_include_path());
Propel::init(dirname(__FILE__) . '/../../Propel/test/fixtures/bookstore/build/conf/bookstore-conf.php');

require_once '../src/Faker/ORM/Propel.php';
require_once '../src/Faker/Factory.php';

BookQuery::create()->deleteAll();
AuthorQuery::create()->deleteAll();

$inserted = Faker\ORM\Propel::populateClasses(Faker\Factory::create(), array(
	'Author' => 5,
	'Book'   => 10
));

echo BookQuery::create()->joinWith('Book.Author')->find();