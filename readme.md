# Faker

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](http://faker.rubyforge.org/).

Faker requires PHP >= 5.3.

## Basic Usage

Require the Faker autoloader to use Faker in a script

```php
<?php

require_once '/path/to/src/autoload.php';
```

Or use your own autoloader (ex: Symfony2 ClassLoader) to autoload the Faker namespace.

Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
<?php
$faker = Faker\Factory::create(); // $faker is a Faker\Generator instance

echo $faker->name; 
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->lorem;
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

### `Faker\Provider\en_US\PhoneNumber`

    phoneNumber             // '132-149-0269x3767'  

### `Faker\Provider\en_US\Company`

    catchPhrase             // 'Monitored regional contingency'  
    bs                      // 'e-enable robust architectures'  
    company                 // 'Bogan-Treutel'  
    companySuffix           // 'and Sons'  

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
    freeEmailDomain         // 'yahoo.com'  
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

### `Faker\Provider\Miscellaneous`

    boolean                 // true  
    md5                     // 'de99a620c50f2990e87144735cd357e7'  
    sha1                    // 'f08e7f04ca1a413807ebc47551a40a20a0b4de5c'  
    sha256                  // '0061e4c60dac5c1d82db0135a42e00c89ae3a333e7c26485321f24348c7e98a5'  

### `Faker\Provider\Base`

    randomDigit             // 7  
    randomNumber($nbDigits = NULL) // 79907610  
    randomLetter            // 'b'  
    randomElement($array = array ('a','b','c')) // 'b'  
    numerify($string = '###') // '609'  
    lexify($string = '????') // 'wgts'  
    bothify($string = '## ??') // '42 jz' 

## Localization

`Faker\Factory` can take a locale as an argument, to return localized data. If no localized provider is found, the factory fallbacks to the default locale.

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

The localization of Faker is an ongoing process, for which we need your help. Don't hesitate to create localized providers to your own locale and submit a PR!

## Populating Entities Using an ORM

Faker provides an adapter for the [Propel ORM](http://www.propelorm.org) to ease the population of a database using the Entity classes managed by the ORM.

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

The populator uses name and column type guessers to populate each column with relevant data. For instance, Faker populates a column named `first_name` using the `firstName` formatter, and a column with a `TIMESTAMP` type using the `dateTime` formatter. The resulting entities are therefore coherent. If Faker misinterprets a column name, you can still specify a custom clusure to be used for populating a particular column, using the third argument to `addEntity()`:

```php
<?php
$populator->addEntity('Book', 5, array(
  'ISBN' => function() use ($generator) { return $generator->randomNumber(13); }
));
```

In this example, Faker will guess a formatter for all columns except `ISBN`, for which the given anonymous function will be used.

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
$faker->addProvider(new Faker\Provider\en_US\Name($faker));
$faker->addProvider(new Faker\Provider\en_US\Address($faker));
$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\en_US\Company($faker));
$faker->addProvider(new Faker\Provider\Lorem($faker));
$faker->addProvider(new Faker\Provider\Internet($faker));
````

Whenever you try to access a property on the `$faker` object, the generator looks for a method with the same name in all the providers attached to it. For instance, calling `$faker->name` triggers a call to `Faker\Provider\Name::name()`. And since Faker starts with the last provider, you can easily override existing formatters: just add a provider containing methods named after the formatters you want to override.

That means that you can esily add your own providers to a `Faker\Generator`. Just have a look at the existing providers to see how you can design powerful data generators in no time.

## Real Life Usage

The following script generates a valid XML document:

```php
<?php
$generator = Faker\Factory::create();
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $generator->firstName ?>" lastName="<?php echo $generator->lastName ?>" email="<?php echo $generator->email ?>"/>
    <phone number="<?php echo $generator->phoneNumber ?>"/>
<?php if (mt_rand(0,3) == 0): ?>
    <birth date="<?php echo $generator->dateTimeThisCentury->format('Y-m-d') ?>" place="<?php echo $generator->city ?>"/>
<?php endif; ?>
    <address>
      <street><?php echo $generator->streetAddress ?></street>
      <city><?php echo $generator->city ?></city>
      <postcode><?php echo $generator->postcode ?></postcode>
      <state><?php echo $generator->state ?></state>
    </address>
    <company name="<?php echo $generator->company ?>" catchPhrase="<?php echo $generator->catchPhrase ?>">
<?php if (mt_rand(0,2) == 0): ?>
      <offer><?php echo $generator->bs ?></offer>
<?php endif; ?>
<?php if (mt_rand(0,3) == 0): ?>
      <director name="<?php echo $generator->name ?>" />
<?php endif; ?>
    </company>
<?php if (mt_rand(0,5) == 0): ?>
    <details>
<![CDATA[
<?php echo $generator->text(400) ?> 
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
    <birth date="2008-07-25" place="Zulaufborough"/>
    <address>
      <street>478 Daisha Landing Apt. 510</street>
      <city>West Lizethhaven</city>
      <postcode>30566-5362</postcode>
      <state>WestVirginia</state>
    </address>
    <company name="Wiza Inc" catchPhrase="Persevering reciprocal approach">
      <director name="Roel DuBuque" />
    </company>
  </contact>
  <contact firstName="Erwin" lastName="Nienow" email="hudson88@lockman.com"/>
    <phone number="+87(6)0704857083"/>
    <birth date="2009-02-11" place="Estrellaside"/>
    <address>
      <street>0920 Adah Skyway</street>
      <city>South Kristopher</city>
      <postcode>62693</postcode>
      <state>Mississippi</state>
    </address>
    <company name="Jakubowski Inc" catchPhrase="Secured object-oriented conglomeration">
    </company>
  </contact>
  <contact firstName="Zoie" lastName="Murazik" email="zschuster@hartmann.org"/>
    <phone number="(179)927-3745"/>
    <address>
      <street>91758 Sienna Burg Apt. 791</street>
      <city>Murrayfurt</city>
      <postcode>44284</postcode>
      <state>Virginia</state>
    </address>
    <company name="Schmitt-Moore" catchPhrase="Robust modular software">
      <director name="Brianne Fahey" />
    </company>
  </contact>
  <contact firstName="Claud" lastName="Rosenbaum" email="adelbert08@barrowsshields.com"/>
    <phone number="203.581.7085x587"/>
    <address>
      <street>165 Bogisich Unions Apt. 630</street>
      <city>Corwinhaven</city>
      <postcode>57971</postcode>
      <state>Virginia</state>
    </address>
    <company name="Mann, Price and Hartmann" catchPhrase="Versatile mobile securedline">
    </company>
  </contact>
</contacts>
```

## License

Faker is released under the MIT Licence.

Copyright (c) 2011 François Zaninotto  
Portions Copyright (c) 2008 Caius Durling  
Portions Copyright (c) 2008 Adam Royle  
Portions Copyright (c) 2008 Fiona Burrows  

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.