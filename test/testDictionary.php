<?php

require __DIR__ .'/../vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i = 1; $i <= 250; $i++) {
    $iadefaults[] = $faker->unique()->word(true, 300);
}

echo count($iadefaults) . PHP_EOL;