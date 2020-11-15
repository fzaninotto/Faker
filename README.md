# Faker

[![Packagist Downloads](https://img.shields.io/packagist/dm/FakerPHP/Faker)](https://packagist.org/packages/fakerphp/faker)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/FakerPHP/Faker/Continuous%20Integration/main)](https://github.com/FakerPHP/Faker/actions)
[![StyleCI](https://github.styleci.io/repos/307658860/shield?branch=main&style=flat)](https://github.styleci.io/repos/307658860?branch=main)

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

It's heavily inspired by Perl's [Data::Faker](https://metacpan.org/pod/Data::Faker), and by Ruby's [Faker](https://rubygems.org/gems/faker).

## Getting Started

### Installation

Faker requires PHP >= 7.1.

```shell
composer require fakerphp/faker
```

### Documentation

Full documentation can be found over on [fakerphp.github.io](https://fakerphp.github.io).

### Basic Usage

Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by accessing properties
echo $faker->name;
// 'Lucy Cechtelar';
echo $faker->address;
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $faker->text;
// Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
// et sit et mollitia sed.
// Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
// sit minima sint.
```

Even if this example shows a property access, each call to `$faker->name` yields a different (random) result. This is because Faker uses `__get()` magic, and forwards `Faker\Generator->$property` calls to `Faker\Generator->format($property)`.

```php
<?php
for ($i = 0; $i < 10; $i++) {
    echo $faker->name, "\n";
}

// Adaline Reichel
// Dr. Santa Prosacco DVM
// Noemy Vandervort V
// Lexi O'Conner
// Gracie Weber
// Roscoe Johns
// Emmett Lebsack
// Keegan Thiel
// Wellington Koelpin II
// Ms. Karley Kiehn V
```

## License

Faker is released under the MIT License. See the bundled LICENSE file for details.
