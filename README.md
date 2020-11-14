# Faker

[![Monthly Downloads](https://poser.pugx.org/fakerphp/faker/d/monthly.png)](https://packagist.org/packages/fakerphp/faker)
[![Continuous Integration](https://github.com/FakerPHP/Faker/workflows/Continuous%20Integration/badge.svg?branch=main)](https://github.com/FakerPHP/Faker/actions)
[![StyleCI](https://github.styleci.io/repos/307658860/shield?branch=main&style=plastic)](https://github.styleci.io/repos/307658860?branch=main)

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](https://rubygems.org/gems/faker).

Faker requires PHP >= 7.1.

## Getting Started

### Installation

```shell
composer require fakerphp/faker
```

### Documentation

Full documentation can be found over on [fakerphp.github.io](https://fakerphp.github.io).

### Basic Usage

#### Autoloading

Faker supports both `PSR-0` as `PSR-4` autoloaders.

```php
<?php
# When installed via composer
require_once 'vendor/autoload.php';
```

You can also load `Fakers` shipped `PSR-0` autoloader

```php
<?php
# Load Fakers own autoloader
require_once '/path/to/Faker/src/autoload.php';
```

*alternatively, you can use any another PSR-4 compliant autoloader*

### Create fake data
Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
<?php
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

**Tip**: For a quick generation of fake data, you can also use Faker as a command line tool thanks to [faker-cli](https://github.com/bit3/faker-cli).

## Third-Party Libraries Extending/Based On Faker

* [`hautelook/AliceBundle`](https://github.com/hautelook/AliceBundle) - Bundles for using [`nelmio/alice`](https://packagist.org/packages/nelmio/alice) and Faker with data fixtures. Able to use Doctrine ORM as well as Doctrine MongoDB ODM.
* [`thephpleague/factory-muffin`](https://github.com/thephpleague/factory-muffin) - enable the rapid creation of objects (PHP port of factory-girl)
* [`prewk/xml-faker`](https://github.com/prewk/xml-faker) - Create fake XML with Faker
* [`nelmio/alice`](https://github.com/nelmio/alice) - Fixtures/object generator with a yaml DSL that can use Faker as data generator.
* [`pattern-lab/plugin-php-faker`](https://github.com/pattern-lab/plugin-php-faker) - Pattern Lab is a Styleguide, Component Library, and Prototyping tool. This creates unique content each time Pattern Lab is generated.
* [`guidocella/eloquent-populator`](https://github.com/guidocella/eloquent-populator) - Adapter for Laravel Eloquent ORM.
* [`jzonta/FakerRestaurant`](https://github.com/jzonta/FakerRestaurant) - Faker for Food and Beverage names generate
* [`aalaap/faker-youtube`](https://github.com/aalaap/faker-youtube) - Faker for YouTube URLs in various formats
* [`pelmered/fake-car`](https://github.com/pelmered/fake-car) - Faker for cars and car data
* [`er1z/fakemock`](https://github.com/er1z/fakemock) - Generate mocks using class-configuration and detection via Faker's guesser and Symfony asserts
* [`xvladxtremal/Faker-LoremFlickr`](https://github.com/xvladxtremal/Faker-LoremFlickr) - Generate images using [loremflickr.com](http://loremflickr.com/)
* [`drupol/belgian-national-number-faker`](https://github.com/drupol/belgian-national-number-faker) - Generate fake Belgian national numbers
* [`elgentos/masquerade`](https://github.com/elgentos/masquerade) - Configuration-based, platform-agnostic, locale-compatible data faker tool (out-of-the-box support for Magento 2)
* [`ottaviano/faker-gravatar`](https://github.com/ottaviano/faker-gravatar) - Generate avatars using [Gravatar](https://en.gravatar.com/site/implement/images/)
* [`finwe/phpstan-faker`](https://github.com/finwe/phpstan-faker) - PHPStan extension for Faker methods
* [`SpringbokAgency/faker-xpdo-orm-adapter`](https://github.com/SpringbokAgency/faker-xpdo-orm-adapter) - A Faker ORM adapter to populate xPDO objects with fake data.

## License

Faker is released under the MIT License. See the bundled LICENSE file for details.
