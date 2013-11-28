# Faker #

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](http://faker.rubyforge.org/).

Faker requires PHP >= 5.3.3.

[![Build Status](https://secure.travis-ci.org/fzaninotto/Faker.png)](http://travis-ci.org/fzaninotto/Faker) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/eceb78a9-38d4-4ad5-8b6b-b52f323e3549/mini.png)](https://insight.sensiolabs.com/projects/eceb78a9-38d4-4ad5-8b6b-b52f323e3549)

## Basic Usage

Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
<?php
// require the Faker autoloader
require_once '/path/to/Faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;
  // Sint velit eveniet. Rerum atque repellat voluptatem quia rerum. Numquam excepturi
  // beatae sint laudantium consequatur. Magni occaecati itaque sint et sit tempore. Nesciunt
  // amet quidem. Iusto deleniti cum autem ad quia aperiam.
  // A consectetur quos aliquam. In iste aliquid et aut similique suscipit. Consequatur qui
  // quaerat iste minus hic expedita. Consequuntur error magni et laboriosam. Aut aspernatur
  // voluptatem sit aliquam. Dolores voluptatum est.
  // Aut molestias et maxime. Fugit autem facilis quos vero. Eius quibusdam possimus est.
  // Ea quaerat et quisquam. Deleniti sunt quam. Adipisci consequatur id in occaecati.
  // Et sint et. Ut ducimus quod nemo ab voluptatum.
```

Even if this example shows a property access, each call to `$faker->name` yields a different (random) result. This is because Faker uses `__get()` magic, and forwards `Faker\Generator->$property` calls to `Faker\Generator->format($property)`.

```php
<?php
for ($i=0; $i < 10; $i++) {
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

## Formatters

Each of the generator properties (like `name`, `address`, and `lorem`) are called "formatters". A faker generator has many of them, packaged in "providers". Here is a list of the bundled formatters in the default locale.

### `Faker\Provider\en_US\Person`

    prefix                  // 'Ms.'
    suffix                  // 'Jr.'
    name                    // 'Dr. Zane Stroman'
    firstName               // 'Maynard'
    lastName                // 'Zulauf'

### `Faker\Provider\en_US\Address`

    cityPrefix              // 'Lake'
    secondaryAddress        // 'Suite 961'
    state                   // 'NewMexico'
    stateAbbr               // 'OH'
    citySuffix              // 'borough'
    streetSuffix            // 'Keys'
    buildingNumber          // '484'
    city                    // 'West Judge'
    streetName              // 'Keegan Trail'
    streetAddress           // '439 Karley Loaf Suite 897'
    postcode                // '17916'
    address                 // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
    country                 // 'Falkland Islands (Malvinas)'
    latitude                // '77.147489'
    longitude               // '86.211205'

### `Faker\Provider\en_US\PhoneNumber`

    phoneNumber             // '132-149-0269x3767'

### `Faker\Provider\en_US\Company`

    catchPhrase             // 'Monitored regional contingency'
    bs                      // 'e-enable robust architectures'
    company                 // 'Bogan-Treutel'
    companySuffix           // 'and Sons'

### `Faker\Provider\Payment`

    creditCardType          // 'MasterCard'
    creditCardNumber        // '4485480221084675'
    creditCardExpirationDate // 04/13
    creditCardExpirationDateString // '04/13'
    creditCardDetails       // array('MasterCard', '4485480221084675', 'Aleksander Nowak', '04/13')

### `Faker\Provider\Lorem`

    word                    // 'aut'
    words($nb = 3)          // array('porro', 'sed', 'magni')
    sentence($nbWords = 6)  // 'Sit vitae voluptas sint non voluptates.'
    sentences($nb = 3)      // array('Optio quos qui illo error.', 'Laborum vero a officia id corporis.', 'Saepe provident esse hic eligendi.')
    paragraph($nbSentences = 3) // 'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.'
    paragraphs($nb = 3)     // array('Quidem ut sunt et quidem est accusamus aut. Fuga est placeat rerum ut. Enim ex eveniet facere sunt.', 'Aut nam et eum architecto fugit repellendus illo. Qui ex esse veritatis.', 'Possimus omnis aut incidunt sunt. Asperiores incidunt iure sequi cum culpa rem. Rerum exercitationem est rem.')
    text($maxNbChars = 200) // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'

### `Faker\Provider\Internet`

    email                   // 'tkshlerin@collins.com'
    safeEmail               // 'king.alford@example.org'
    freeEmail               // 'bradley72@gmail.com'
    companyEmail            // 'russel.durward@mcdermott.org'
    freeEmailDomain         // 'yahoo.com'
    safeEmailDomain         // 'example.org'
    userName                // 'wade55'
    domainName              // 'wolffdeckow.net'
    domainWord              // 'feeney'
    tld                     // 'biz'
    url                     // 'http://www.strackeframi.com/'
    ipv4                    // '109.133.32.252'
    ipv6                    // '8e65:933d:22ee:a232:f1c1:2741:1f10:117c'

### `Faker\Provider\DateTime`

    unixTime                // 58781813
    dateTime                // DateTime('2008-04-25 08:37:17')
    dateTimeAD              // DateTime('1800-04-29 20:38:49')
    iso8601                 // '1978-12-09T10:10:29+0000'
    date($format = 'Y-m-d') // '1979-06-09'
    time($format = 'H:i:s') // '20:49:42'
    dateTimeBetween($startDate = '-30 years', $endDate = 'now') // DateTime('2003-03-15 02:00:49')
    dateTimeThisCentury     // DateTime('1915-05-30 19:28:21')
    dateTimeThisDecade      // DateTime('2007-05-29 22:30:48')
    dateTimeThisYear        // DateTime('2011-02-27 20:52:14')
    dateTimeThisMonth       // DateTime('2011-10-23 13:46:23')
    amPm                    // 'pm'
    dayOfMonth              // '04'
    dayOfWeek               // 'Friday'
    month                   // '06'
    monthName               // 'January'
    year                    // '1993'
    century                 // 'VI'
    timezone                // 'Europe/Paris'

### `Faker\Provider\Miscellaneous`

    boolean($chanceOfGettingTrue = 50) // true
    md5                     // 'de99a620c50f2990e87144735cd357e7'
    sha1                    // 'f08e7f04ca1a413807ebc47551a40a20a0b4de5c'
    sha256                  // '0061e4c60dac5c1d82db0135a42e00c89ae3a333e7c26485321f24348c7e98a5'
    locale                  // en_UK
    countryCode             // UK
    languageCode            // en

### `Faker\Provider\Base`

    randomDigit             // 7
    randomDigitNotNull      // 5
    randomNumber($nbDigits = NULL) // 79907610
    randomNumber($from, $to) // 39049
    randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) // 48.8932
    randomLetter            // 'b'
    randomElement($array = array ('a','b','c')) // 'b'
    numerify($string = '###') // '609'
    lexify($string = '????') // 'wgts'
    bothify($string = '## ??') // '42 jz'

### `Faker\Provider\UserAgent`

    userAgent              // 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
    chrome                 // 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
    firefox                // 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
    safari                 // 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
    opera                  // 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
    internetExplorer       // 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'

### `Faker\Provider\Uuid`

    uuid                   // '7e57d004-2b97-0e7a-b45f-5387367791cd'

### `Faker\Provider\File`

    fileExtension          // 'avi'
    mimeType               // 'video/x-msvideo'

### `Faker\Provider\Color`

    hexcolor               // '#fa3cc2'
    rgbcolor               // '0,255,122'
    rgbColorAsArray        // array(0,255,122)
    rgbCssColor            // 'rgb(0,255,122)'
    safeColorName          // 'fuchsia'
    colorName              // 'Gainsbor'

### `Faker\Provider\Image`

    /**
     * Image generation provided by LoremPixel (http://lorempixel.com/)
     *
     * @param $dir An absolute path to a local directory
     * @param $width/$height Size (in pixel) of the generated image (defaults to 640x480)
     * @param $category One of 'abstract','animals','business','cats','city','food','nightlife','fashion','people','nature','sports','technics', and 'transport'
     */
    image($dir)                  // '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
    image($dir, $width, $height) // '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
    image($dir, $width, $height, $category) // '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
    imageUrl                    // 'http://lorempixel.com/640/480/'
    imageUrl($width, $height)   // 'http://lorempixel.com/800/600/'
    imageUrl($width, $height, $category) // 'http://lorempixel.com/800/600/person/'

### `Faker\Provider\Payment`

    creditCardType         // 'MasterCard'
    creditCardNumber($type = null) // '4485480221084675'
    creditCardExpirationDate($valid = true) // DateTime('2014-10-23 13:46:23')
    creditCardExpirationDateString($valid = true) // '10/14'

## Unique and Optional modifiers

Faker provides two special providers, `unique()` and `optional()`, to be called before any provider. `optional()` can be useful for seeding non-required fields, like a mobile telephone number ; `unique()` is required to populate fields that cannot accept twice the same value, like primary identifiers.

```php
// unique() forces providers to return unique values
$values = array();
for ($i=0; $i < 10; $i++) {
  // get a random digit, but always a new one, to avoid duplicates
  $values []= $faker->unique()->randomDigit;
}
print_r($values); // [4, 1, 8, 5, 0, 2, 6, 9, 7, 3]

// providers with a limited range will throw an exception when no new unique value can be generated
$values = array();
try {
  for ($i=0; $i < 10; $i++) {
    $values []= $faker->unique()->randomDigitNotNull;
  }
} catch (\OverflowException $e) {
  echo "There are only 9 unique digits not null, Faker can't generate 10 of them!";
}

// you can reset the unique modifier for all providers by passing true as first argument
$faker->unique($reset = true)->randomDigitNotNull; // will not throw OverflowException since unique() was reset
// tip: unique() keeps one array of values per provider 

// optional() sometimes bypasses the provider to return null instead
$values = array();
for ($i=0; $i < 10; $i++) {
  // get a random digit, but also null sometimes
  $values []= $faker->optional()->randomDigit;
}
print_r($values); // [1, 4, null, 9, 5, null, null, 4, 6, null]

// optional takes a weight argument to make the null occurrence impossible (value 0) or systematic (value 1)
$faker->optional($weight = 0.1)->randomDigit; // 10% chance to get null
$faker->optional($weight = 0.9)->randomDigit; // 90% chance to get null
// the default $weight value is 0.5
```

## Localization

`Faker\Factory` can take a locale as an argument, to return localized data. If no localized provider is found, the factory fallbacks to the default locale (en_EN).

```php
<?php
$faker = Faker\Factory::create('fr_FR'); // create a French faker
for ($i=0; $i < 10; $i++) {
  echo $faker->name, "\n";
}
  // Luce du Coulon
  // Auguste Dupont
  // Roger Le Voisin
  // Alexandre Lacroix
  // Jacques Humbert-Roy
  // Thérèse Guillet-Andre
  // Gilles Gros-Bodin
  // Amélie Pires
  // Marcel Laporte
  // Geneviève Marchal
```

You can check available Faker locales in the source code, [under the `Provider` directory](https://github.com/fzaninotto/Faker/tree/master/src/Faker/Provider). The localization of Faker is an ongoing process, for which we need your help. Don't hesitate to create localized providers to your own locale and submit a PR!

## Populating Entities Using an ORM or an ODM

Faker provides adapters for Object-Relational and Object-Document Mappers (currently, [Propel](http://www.propelorm.org), [Doctrine2](http://www.doctrine-project.org/projects/orm/2.0/docs/en), and [Mandango](https://github.com/mandango/mandango) are supported). These adapters ease the population of databases through the Entity classes provided by an ORM library (or the population of document stores using Document classes provided by an ODM library).

To populate entities, create a new populator class (using a generator instance as parameter), then list the class and number of all the entities that must be generated. To launch the actual data population, call the `execute()` method.

Here is an example showing how to populate 5 `Author` and 10 `Book` objects:

```php
<?php
$generator = \Faker\Factory::create();
$populator = new Faker\ORM\Propel\Populator($generator);
$populator->addEntity('Author', 5);
$populator->addEntity('Book', 10);
$insertedPKs = $populator->execute();
```

The populator uses name and column type guessers to populate each column with relevant data. For instance, Faker populates a column named `first_name` using the `firstName` formatter, and a column with a `TIMESTAMP` type using the `dateTime` formatter. The resulting entities are therefore coherent. If Faker misinterprets a column name, you can still specify a custom closure to be used for populating a particular column, using the third argument to `addEntity()`:

```php
<?php
$populator->addEntity('Book', 5, array(
  'ISBN' => function() use ($generator) { return $generator->randomNumber(13); }
));
```

In this example, Faker will guess a formatter for all columns except `ISBN`, for which the given anonymous function will be used.

**Tip**: To ignore some columns, specify `null` for the column names in the third argument of `addEntity()`. This is usually necessary for columns added by a behavior:

```php
<?php
$populator->addEntity('Book', 5, array(
  'CreatedAt' => null,
  'UpdatedAt' => null,
));
```

Of course, Faker does not populate autoincremented primary keys. In addition, `Faker\ORM\Propel\Populator::execute()` returns the list of inserted PKs, indexed by class:

```php
<?php
print_r($insertedPKs);
// array(
//   'Author' => (34, 35, 36, 37, 38),
//   'Book'   => (456, 457, 458, 459, 470, 471, 472, 473, 474, 475)
// )
```

In the previous example, the `Book` and `Author` models share a relationship. Since `Author` entities are populated first, Faker is smart enough to relate the populated `Book` entities to one of the populated `Author` entities.

Lastly, if you want to execute an arbitrary function on an entity before insertion, use the fourth argument of the `addEntity()` method:

```php
<?php
$populator->addEntity('Book', 5, array(), array(
  function($book) { $book->publish(); },
));
```

## Seeding the Generator

You may want to get always the same generated data - for instance when using Faker for unit testing purposes. The generator offers a `seed()` method, which seeds the random number generator. Calling the same script twice with the same seed produces the same results.

```php
<?php
$faker = Faker\Factory::create();
$faker->seed(1234);

echo $faker->name; // 'Jess Mraz I';
```

## Faker Internals: Understanding Providers

A `Faker\Generator` alone can't do much generation. It needs `Faker\Provider` objects to delegate the data generation to them. `Faker\Factory::create()` actually creates a `Faker\Generator` bundled with the default providers. Here is what happens under the hood:

```php
<?php
$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\en_US\Person($faker));
$faker->addProvider(new Faker\Provider\en_US\Address($faker));
$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\en_US\Company($faker));
$faker->addProvider(new Faker\Provider\Lorem($faker));
$faker->addProvider(new Faker\Provider\Internet($faker));
````

Whenever you try to access a property on the `$faker` object, the generator looks for a method with the same name in all the providers attached to it. For instance, calling `$faker->name` triggers a call to `Faker\Provider\Person::name()`. And since Faker starts with the last provider, you can easily override existing formatters: just add a provider containing methods named after the formatters you want to override.

That means that you can easily add your own providers to a `Faker\Generator` instance. A provider is usually a class extending `\Faker\Provider\Base`. This parent class allows you to use methods like `lexify()` or `randomNumber()`; it also gives you access to formatters of other providers, through the protected `$generator` property. The new formatters are the public methods of the provider class.

Here is an example provider for populating Book data:

```php
<?php

namespace Faker\Provider;

class Book extends \Faker\Provider\Base
{
  public function title($nbWords = 5)
  {
    $sentence = $this->generator->sentence($nbWords);
    return substr($sentence, 0, strlen($sentence) - 1);
  }

  public function ISBN()
  {
    return $this->generator->randomNumber(13);
  }
}
```

To register this provider, just add a new instance of `\Faker\Provider\Book` to an existing generator:

```php
<?php
$faker->addProvider(new \Faker\Provider\Book($faker));
```

Now you can use the two new formatters like any other Faker formatter:

```php
<?php
$book = new Book();
$book->setTitle($faker->title);
$book->setISBN($faker->ISBN);
$book->setSummary($faker->text);
$book->setPrice($faker->randomNumber(2));
```

**Tip**: A provider can also be a Plain Old PHP Object. In that case, all the public methods of the provider become available to the generator.

## Real Life Usage

The following script generates a valid XML document:

```php
<?php
require_once '/path/to/Faker/src/autoload.php';
$faker = Faker\Factory::create();
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>" email="<?php echo $faker->email ?>"/>
    <phone number="<?php echo $faker->phoneNumber ?>"/>
<?php if ($faker->boolean(25)): ?>
    <birth date="<?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>" place="<?php echo $faker->city ?>"/>
<?php endif; ?>
    <address>
      <street><?php echo $faker->streetAddress ?></street>
      <city><?php echo $faker->city ?></city>
      <postcode><?php echo $faker->postcode ?></postcode>
      <state><?php echo $faker->state ?></state>
    </address>
    <company name="<?php echo $faker->company ?>" catchPhrase="<?php echo $faker->catchPhrase ?>">
<?php if ($faker->boolean(33)): ?>
      <offer><?php echo $faker->bs ?></offer>
<?php endif; ?>
<?php if ($faker->boolean(33)): ?>
      <director name="<?php echo $faker->name ?>" />
<?php endif; ?>
    </company>
<?php if ($faker->boolean(15)): ?>
    <details>
<![CDATA[
<?php echo $faker->text(400) ?>
]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>
```

Running this script produces a document looking like:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
  <contact firstName="Ona" lastName="Bednar" email="schamberger.frank@wuckert.com"/>
    <phone number="1-265-479-1196x714"/>
    <address>
      <street>182 Harrison Cove</street>
      <city>North Lloyd</city>
      <postcode>45577</postcode>
      <state>Alabama</state>
    </address>
    <company name="Veum, Funk and Shanahan" catchPhrase="Function-based stable solution">
      <offer>orchestrate compelling web-readiness</offer>
    </company>
    <details>
<![CDATA[
Alias accusantium voluptatum autem nobis cumque neque modi. Voluptatem error molestiae consequatur alias.
Illum commodi molestiae aut repellat id. Et sit consequuntur aut et ullam asperiores. Cupiditate culpa voluptatem et mollitia dolor. Nisi praesentium qui ut.
]]>
    </details>
  </contact>
  <contact firstName="Aurelie" lastName="Paucek" email="alfonzo55@durgan.com"/>
    <phone number="863.712.1363x9425"/>
    <address>
      <street>90111 Hegmann Inlet</street>
      <city>South Geovanymouth</city>
      <postcode>69961-9311</postcode>
      <state>Colorado</state>
    </address>
    <company name="Krajcik-Grimes" catchPhrase="Switchable cohesive instructionset">
    </company>
  </contact>
  <contact firstName="Clifton" lastName="Kshlerin" email="kianna.wiegand@framiwyman.info"/>
    <phone number="692-194-4746"/>
    <address>
      <street>9791 Nona Corner</street>
      <city>Harberhaven</city>
      <postcode>74062-8191</postcode>
      <state>RhodeIsland</state>
    </address>
    <company name="Rosenbaum-Aufderhar" catchPhrase="Realigned asynchronous encryption">
    </company>
  </contact>
  <contact firstName="Alexandre" lastName="Orn" email="thelma37@erdmancorwin.biz"/>
    <phone number="189.655.8677x027"/>
    <address>
      <street>11161 Schultz Via</street>
      <city>Feilstad</city>
      <postcode>98019</postcode>
      <state>NewJersey</state>
    </address>
    <company name="O'Hara-Prosacco" catchPhrase="Re-engineered solution-oriented algorithm">
      <director name="Dr. Berenice Auer V" />
    </company>
    <details>
<![CDATA[
Ut itaque et quaerat doloremque eum praesentium. Rerum in saepe dolorem. Explicabo qui consequuntur commodi minima rem.
Harum temporibus rerum dolores. Non molestiae id dolorem placeat.
Aut asperiores nihil eius repellendus. Vero nihil corporis voluptatem explicabo commodi. Occaecati omnis blanditiis beatae quod aspernatur eos.
]]>
    </details>
  </contact>
  <contact firstName="Katelynn" lastName="Kohler" email="reinger.trudie@stiedemannjakubowski.com"/>
    <phone number="(665)713-1657"/>
    <address>
      <street>6106 Nader Village Suite 753</street>
      <city>McLaughlinstad</city>
      <postcode>43189-8621</postcode>
      <state>Missouri</state>
    </address>
    <company name="Herman-Tremblay" catchPhrase="Object-based explicit service-desk">
      <offer>expedite viral synergies</offer>
      <director name="Arden Deckow" />
    </company>
  </contact>
  <contact firstName="Blanca" lastName="Stark" email="tad27@feest.net"/>
    <phone number="168.719.4692x87177"/>
    <address>
      <street>7546 Kuvalis Plaza</street>
      <city>South Wilfrid</city>
      <postcode>77069</postcode>
      <state>Georgia</state>
    </address>
    <company name="Upton, Braun and Rowe" catchPhrase="Visionary leadingedge pricingstructure">
    </company>
  </contact>
  <contact firstName="Rene" lastName="Spencer" email="anibal28@armstrong.info"/>
    <phone number="715.222.0095x175"/>
    <birth date="2008-08-07" place="Zulaufborough"/>
    <address>
      <street>478 Daisha Landing Apt. 510</street>
      <city>West Lizethhaven</city>
      <postcode>30566-5362</postcode>
      <state>WestVirginia</state>
    </address>
    <company name="Wiza Inc" catchPhrase="Persevering reciprocal approach">
      <offer>orchestrate dynamic networks</offer>
      <director name="Erwin Nienow" />
    </company>
    <details>
<![CDATA[
Dolorem consequatur voluptates unde optio unde. Accusantium dolorem est est architecto impedit. Corrupti et provident quo.
Reprehenderit dolores aut quidem suscipit repudiandae corporis error. Molestiae enim aperiam illo.
Et similique qui non expedita quia dolorum. Ex rem incidunt ea accusantium temporibus minus non.
]]>
    </details>
  </contact>
  <contact firstName="Alessandro" lastName="Hagenes" email="tbreitenberg@oharagorczany.com"/>
    <phone number="1-284-958-6768"/>
    <address>
      <street>1251 Koelpin Mission</street>
      <city>North Revastad</city>
      <postcode>81620</postcode>
      <state>Maryland</state>
    </address>
    <company name="Stiedemann-Bruen" catchPhrase="Re-engineered 24/7 success">
    </company>
  </contact>
  <contact firstName="Novella" lastName="Rutherford" email="claud65@bogisich.biz"/>
    <phone number="(091)825-7971"/>
    <address>
      <street>6396 Langworth Hills Apt. 446</street>
      <city>New Carlos</city>
      <postcode>89399-0268</postcode>
      <state>Wyoming</state>
    </address>
    <company name="Stroman-Legros" catchPhrase="Expanded 4thgeneration moratorium">
      <director name="Earlene Bayer" />
    </company>
  </contact>
  <contact firstName="Andreane" lastName="Mann" email="meggie17@ornbaumbach.com"/>
    <phone number="941-659-9982x5689"/>
    <birth date="1934-02-21" place="Stantonborough"/>
    <address>
      <street>2246 Kreiger Station Apt. 291</street>
      <city>Kaydenmouth</city>
      <postcode>11397-1072</postcode>
      <state>Wyoming</state>
    </address>
    <company name="Lebsack, Bernhard and Kiehn" catchPhrase="Persevering actuating framework">
      <offer>grow sticky portals</offer>
    </company>
    <details>
<![CDATA[
Quia dolor ut quia error libero. Enim facilis iusto earum et minus rerum assumenda. Quia doloribus et reprehenderit ut. Occaecati voluptatum dolor voluptatem vitae qui velit quia.
Fugiat non in itaque sunt nobis totam. Sed nesciunt est deleniti cumque alias. Repudiandae quo aut numquam modi dicta libero.
]]>
    </details>
  </contact>
</contacts>
```

## Language specific formatters


### `Faker\Provider\fr_FR\Company`

```php
<?php

// Generates a random SIREN number
echo $faker->siren; // 082 250 104

// Generates a random SIRET number
echo $faker->siret; // 347 355 708 00224

// Generates a random SIRET number (controlling the number of sequential digits)
echo $faker->siret(3); // 438 472 611 01513

```

### `Faker\Provider\fr_FR\Address`

```php
<?php

// Generates a random department name
echo $faker->departmentName; // "Haut-Rhin"

// Generates a random department number
echo $faker->departmentNumber; // "2B"

// Generates a random department info (department number => department name)
$faker->department; // array('18' => 'Cher');

// Generates a random region
echo $faker->region; // "Saint-Pierre-et-Miquelon"

```

### `Faker\Provider\da_DK\Person`

```php
<?php

// Generates a random CPR number
echo $faker->cpr; // "051280-2387"

```

### `Faker\Provider\da_DK\Address`

```php
<?php

// Generates a random 'kommune' name
echo $faker->kommune; // "Frederiksberg"

// Generates a random region name
echo $faker->region; // "Region Sjælland"

```

### `Faker\Provider\da_DK\Company`

```php
<?php

// Generates a random CVR number
echo $faker->cvr; // "32458723"

// Generates a random P number
echo $faker->p; // "5398237590"

```

### `Faker\Provider\pl_PL\Person`

```php
<?php

// Generates a random PESEL number
echo $faker->pesel; // "40061451555"
// Generates a random personal identity card number
echo $faker->personalIdentityNumber; // "AKX383360"
// Generates a random taxpayer identification number (NIP)
echo $faker->taxpayerIdentificationNumber; // '8211575109'

```

### `Faker\Provider\pl_PL\Company`

```php
<?php

// Generates a random REGON number
echo $faker->regon; // "714676680"
// Generates a random local REGON number
echo $faker->regonLocal; // "15346111382836"

```

### `Faker\Provider\pl_PL\Payment`

```php
<?php

// Generates a random bank name
echo $faker->bank; // "Narodowy Bank Polski"
// Generates a random bank account number
echo $faker->bankAccountNumber; // "PL14968907563953822118075816"

```

## License

Faker is released under the MIT Licence. See the bundled LICENSE file for details.
