<?php
require_once __DIR__ . '/../src/Factory.php';
require_once __DIR__ . '/../src/Documentor.php';

$generator = Faker\Factory::create();
$documentor = new Faker\Documentor($generator);
print_r($documentor->getFormatters());
