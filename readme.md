# Faker

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](http://faker.rubyforge.org/).

Faker requires PHP >= 5.3.

## Basic Usage

Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
<?php
require_once '/path/to/Faker/src/Factory.php';
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

**Tip**: Even if this example shows a property access, each call to `$faker->name` yields a different (random) result. This is because Faker uses `__get()` magic, and forwards `Faker\Generator->$property` calls to `Faker\Generator->format($property)`.

## Formatters

Each of the generator properties (like `name`, `address`, and `lorem`) are called "formatters". A faker generator has many of them, packaged in "providers". Here is a list of the bundled formatters in the default locale.

### `Faker\Provider\Internet`

    domainName()         // 'mueller.info'  
    domainWord()         // 'von'  
    email()              // 'cshields@rosenbaum.com'  
    freeEmail()          // 'dayna55@gmail.com'  
    freeEmailDomain()    // 'yahoo.com'  
    ipv4()               // '237.149.115.38'  
    ipv6()               // '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'  
    safeEmail()          // 'nbatz@example.org'  
    tld()                // 'info'  
    url()                // 'http://www.runolfsdottir.com/'  
    userName()           // 'tremblay.haylie'  

### `Faker\Provider\Lorem`

    lorem()              // 'Fuga totam reiciendis qui architecto fugiat. (...)'  
    paragraph()          // 'Sed a nam et sint autem. Aut officia aut. Blanditiis et ducimus.'  
    paragraphs()         // array('Amet et est. (...)', 'Sequi cum culpa rem. Rerum exercitationem est.')  
    sentence()           // 'Sit vitae voluptas sint non.'  
    sentences()          // array('Ut optio quos qui illo error nihil.', 'Vero a officia id corporis incidunt.', 'Provident esse hic eligendi quos culpa ut.')  
    word()               // 'aut'  
    words()              // array('porro', 'sed', 'magni')  

### `Faker\Provider\en_US\Address`

    address()            // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'  
    buildingNumber()     // '484'  
    city()               // 'West Judge'  
    cityPrefix()         // 'Lake'  
    citySuffix()         // 'borough'  
    country()            // 'Falkland Islands (Malvinas)'  
    postcode()           // '17916'  
    secondaryAddress()   // 'Suite 961'  
    state()              // 'NewMexico'  
    stateAbbr()          // 'OH'  
    streetAddress()      // '439 Karley Loaf Suite 897'  
    streetName()         // 'Keegan Trail'  
    streetSuffix()       // 'Keys'  

### `Faker\Provider\en_US\Company`

    bs()                 // 'e-enable robust architectures'  
    catchPhrase()        // 'Monitored regional contingency'  
    company()            // 'Bogan-Treutel'  
    companySuffix()      // 'and Sons'  

### `Faker\Provider\en_US\Name`

    firstName()          // 'Maynard'  
    lastName()           // 'Zulauf'  
    name()               // 'Dr. Zane Stroman'  
    prefix()             // 'Ms.'  
    suffix()             // 'Jr.'  

### `Faker\Provider\en_US\PhoneNumber`

    phoneNumber()        // '132-149-0269x3767' 
    
## Localization

`Faker\Factory` can take a locale as an argument, to return localized data. If no localized provider is found, the factory fallbacks to the default locale.

```php
$faker = Faker\Factory::create('fr_FR'); // create a French faker
echo $faker->name; // 'Jean Dupont'
```

## Seeding the Generator

You may want to get always the same generated data - for instance when using Faker for unit testing purposes. The generator offers a `seed()` method, which seeds the random number generator. Calling the same script twice with the same seed produces the same results.

```php
<?php
require_once '/path/to/Faker/src/Factory.php';
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

Whenever you try to access a property on the `$faker` object, the generator looks for a method with the same name in all the providers attached to it. For instance, calling `$faker->name` triggers a call to `Faker\Provider\Name::name()`.

That means that you can esily add your own providers to a `Faker\Generator`. Just have a look at the existing providers to see how you can design powerful data generators in no time.

## Real Life Usage

The following script generates a valid XML document:

```php
<?php
require_once '/path/to/Faker/src/Factory.php';
$faker = Faker\Factory::create();
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>">
    <phone number="<?php echo $faker->phoneNumber ?>"/>
<?php if (mt_rand(0,5) == 0): ?>
    <countryOfBirth><?php echo $faker->country ?></countryOfBirth>
<?php endif; ?>
    <address>
      <street><?php echo $faker->streetAddress ?></street>
      <city><?php echo $faker->city ?></city>
      <postcode><?php echo $faker->postcode ?></postcode>
      <state><?php echo $faker->state ?></state>
    </address>
    <company name="<?php echo $faker->company ?>" catchPhrase="<?php echo $faker->catchPhrase ?>">
<?php if (mt_rand(0,2) == 0): ?>
      <offer><?php echo $faker->bs ?></offer>
<?php endif; ?>
<?php if (mt_rand(0,3) == 0): ?>
      <director name="<?php echo $faker->name ?>"/>
<?php endif; ?>
    </company>
<?php if (mt_rand(0,5) == 0): ?>
    <details>
    <![CDATA[<?php echo $faker->lorem(3) ?>]]>
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
  <contact firstName="Rosario" lastName="Collier">
    <phone number="(931)716-3327x645"/>
    <address>
      <street>09678 Douglas Throughway</street>
      <city>Cronaville</city>
      <postcode>97573-1273</postcode>
      <state>Wisconsin</state>
    </address>
    <company name="Rowe-Crist" catchPhrase="Persevering disintermediate support">
      <offer>enhance scalable vortals</offer>
      <director name="Lucy Bechtelar"/>
    </company>
    <details>
    <![CDATA[Ea libero quia ratione. Architecto reiciendis et. Qui provident natus quo ut inventore. Voluptas quisquam deleniti. Sed ut voluptas.
Distinctio quo pariatur at natus vel. Ut deleniti eos voluptatem ut voluptas. Odit sint est temporibus et. Accusamus quam qui ad. Qui dolorem et earum. Rerum qui cupiditate iusto.
Autem quis suscipit molestias cumque incidunt. Porro omnis autem. Odit quia ipsum et iste. Iure veniam qui.
Assumenda numquam et itaque beatae ut ullam. Itaque totam dolor error ducimus facilis. Consequatur adipisci cum voluptate optio vel velit. Optio velit repellat magnam suscipit. Commodi repellat vel et quaerat. Amet ut corrupti tenetur voluptates dignissimos quo.
Debitis nostrum sunt sit porro maiores voluptates. Expedita perspiciatis est labore ex ipsam sint. Consequatur ipsa consequatur. Adipisci voluptatibus voluptate dolorem consequatur ducimus. Delectus suscipit explicabo ea nostrum.
Rerum sunt eos. Sed exercitationem iure consequatur doloribus. Itaque ratione error porro omnis dolorem. Accusantium sed sint iste fugit quidem veniam. Molestiae facilis consequatur. Optio ducimus eum rerum maxime.]]>
    </details>
  </contact>
  <contact firstName="Korey" lastName="Donnelly">
    <phone number="028-470-4927"/>
    <address>
      <street>413 Harber Street Apt. 536</street>
      <city>Port Kaleighport</city>
      <postcode>16436</postcode>
      <state>Oregon</state>
    </address>
    <company name="Bradtke, Klein and Kiehn" catchPhrase="Pre-emptive directional throughput">
    </company>
  </contact>
  <contact firstName="Jettie" lastName="Rutherford">
    <phone number="175-227-9402x7968"/>
    <address>
      <street>034 Pollich Fords Suite 763</street>
      <city>Port Cloydberg</city>
      <postcode>95235</postcode>
      <state>NewHampshire</state>
    </address>
    <company name="Mohr, Koelpin and Stroman" catchPhrase="User-centric demand-driven migration">
    </company>
  </contact>
  <contact firstName="Ambrose" lastName="Willms">
    <phone number="(992)690-3531x30946"/>
    <placeOfBirth>Pitcairn Islands</placeOfBirth>
    <address>
      <street>70028 Wisoky Wall</street>
      <city>Tremblayberg</city>
      <postcode>59624-3945</postcode>
      <state>Ohio</state>
    </address>
    <company name="Farrell, Leffler and Paucek" catchPhrase="Enhanced global strategy">
      <offer>unleash front-end deliverables</offer>
      <director name="Fletcher Lind"/>
    </company>
    <details>
    <![CDATA[Nesciunt accusantium qui voluptatum. Eum alias sequi a. Ut iusto quos. Molestiae explicabo quam ut reiciendis veritatis velit. Dolor incidunt quaerat.
Molestias harum quidem. Animi velit aut qui. Sunt qui culpa explicabo id id rerum. Consequatur omnis porro.
Numquam nisi maiores eveniet. Sint aut praesentium et fugiat necessitatibus. Esse excepturi non excepturi eaque id illo. Voluptas ea rerum voluptates quidem minima. Dolorum vel odio itaque optio.
Nisi aliquid est autem aspernatur. Quasi eveniet et quas et accusamus. Non nostrum quo. Molestiae dolores aliquam dignissimos non ea ea. Magni molestiae nobis quasi voluptate expedita illum. Illo aperiam et saepe voluptatem vel.
Qui repellendus fuga corrupti perferendis. Magnam amet beatae repellendus. Architecto et et quam. Omnis explicabo maxime qui. Libero et est quasi. Omnis nisi eveniet eum repellendus ut.
Repellat sequi quidem eum quam. Rerum optio totam corporis aut libero necessitatibus. Quisquam nihil aut beatae tempore maxime.]]>
    </details>
  </contact>
  <contact firstName="Clair" lastName="Schumm">
    <phone number="+54(9)9521808817"/>
    <address>
      <street>5208 Celia Route Suite 082</street>
      <city>Port Albin</city>
      <postcode>91670-9099</postcode>
      <state>Wisconsin</state>
    </address>
    <company name="Bins-Effertz" catchPhrase="Triple-buffered systematic initiative">
    </company>
  </contact>
  <contact firstName="Orland" lastName="Collier">
    <phone number="(788)806-3732"/>
    <address>
      <street>692 Nelda Branch</street>
      <city>North Shaina</city>
      <postcode>40220</postcode>
      <state>Nebraska</state>
    </address>
    <company name="Schuster and Sons" catchPhrase="Triple-buffered background synergy">
      <offer>exploit sexy models</offer>
      <director name="Mary Carter PhD"/>
    </company>
  </contact>
  <contact firstName="Jacinto" lastName="Kozey">
    <phone number="271.710.1171x50715"/>
    <address>
      <street>620 Watsica Extension</street>
      <city>Quigleybury</city>
      <postcode>31688-4724</postcode>
      <state>Alaska</state>
    </address>
    <company name="Kuphal-Casper" catchPhrase="Advanced well-modulated policy">
    </company>
  </contact>
  <contact firstName="Filomena" lastName="Jacobs">
    <phone number="(317)630-2597x835"/>
    <address>
      <street>026 Florian Lights Apt. 130</street>
      <city>North Mireille</city>
      <postcode>68929</postcode>
      <state>Maryland</state>
    </address>
    <company name="Romaguera, Buckridge and Kutch" catchPhrase="Self-enabling systemic portal">
      <offer>cultivate rich infomediaries</offer>
    </company>
  </contact>
  <contact firstName="Ettie" lastName="McCullough">
    <phone number="481-073-8855x07450"/>
    <address>
      <street>485 Imani Falls Suite 202</street>
      <city>Marvinbury</city>
      <postcode>12186-1993</postcode>
      <state>WestVirginia</state>
    </address>
    <company name="Volkman-Hand" catchPhrase="User-friendly analyzing groupware">
      <offer>streamline granular users</offer>
      <director name="Bennie Stroman"/>
    </company>
    <details>
    <![CDATA[Iure optio sint dolorum modi. Voluptas est numquam non et. Et ducimus atque ipsam. Rerum cupiditate enim accusantium. Sint adipisci nobis quasi qui. Sed vitae et quaerat illo omnis et.
Illum praesentium non praesentium eum. Occaecati ex voluptatem eos ut velit sunt. Ut quia optio qui.
Temporibus omnis ullam autem voluptatem. Quae est nulla impedit ratione. Quasi quo quo et. Aspernatur delectus aliquid nostrum distinctio perspiciatis autem.
Est voluptate explicabo voluptatibus officia aut sequi. Eveniet vero voluptas quo quaerat. Nihil voluptas exercitationem qui rerum. Magni et aut amet iste. Eum quia et quia quos. Commodi commodi temporibus voluptas.]]>
    </details>
  </contact>
  <contact firstName="Petra" lastName="Lebsack">
    <phone number="1-065-470-3688x528"/>
    <placeOfBirth>Italy</placeOfBirth>
    <address>
      <street>36949 Weissnat Cape</street>
      <city>Swiftfort</city>
      <postcode>80494</postcode>
      <state>WestVirginia</state>
    </address>
    <company name="Nienow LLC" catchPhrase="Balanced grid-enabled task-force">
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