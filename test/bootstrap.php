<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once __DIR__.'/../vendor/autoload.php';
$loader->add('Faker\\Test\\', __DIR__);
$loader->add('Faker\\PHPUnit\\', __DIR__);

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));