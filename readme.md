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

### `Faker\Provider\DateTime`

    amPm()               // 'am'  
    century()            // 'V'  
    date()               // '2008-11-27'  
    dateTime()           // 2005-08-16 20:39:21  
    dateTimeBetween()    // 1999-02-02 11:42:52  
    dateTimeThisCentury() // 1964-04-04 11:02:02  
    dateTimeThisDecade() // 2010-03-10 05:18:58  
    dateTimeThisMonth()  // 2011-10-05 12:51:46  
    dateTimeThisYear()   // 2011-09-19 09:24:37  
    dayOfMonth()         // '29'  
    dayOfWeek()          // 'Thursday'  
    iso8601()            // '2003-10-21T16:05:52+0000'  
    month()              // '06'  
    monthName()          // 'November'  
    time()               // '15:02:34'  
    unixTime()           // 1061306726  
    year()               // '1991' 
    
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
$generator = Faker\Factory::create();
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $generator->firstName ?>" lastName="<?php echo $generator->lastName ?>" email="<?php echo $generator->email ?>"/>
    <phone number="<?php echo $generator->phoneNumber ?>"/>
<?php if (mt_rand(0,5) == 0): ?>
    <countryOfBirth><?php echo $generator->address ?></countryOfBirth>
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
<?php echo $generator->lorem(3) ?> 
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
  <contact firstName="Celestino" lastName="Gottlieb" email="katlyn35@hilll.com"/>
    <phone number="03923563989"/>
    <address>
      <street>39640 Alize Radial</street>
      <city>North Robbburgh</city>
      <postcode>06688-4406</postcode>
      <state>Colorado</state>
    </address>
    <company name="Johnston, Eichmann and Hoppe" catchPhrase="Compatible regional leverage">
      <offer>e-enable bleeding-edge interfaces</offer>
      <director name="Ms. Elton Walsh" />
    </company>
  </contact>
  <contact firstName="Gladyce" lastName="Fritsch" email="nicola77@moore.com"/>
    <phone number="+21(1)6349842909"/>
    <address>
      <street>973 Bruen Lock Suite 302</street>
      <city>Konopelskimouth</city>
      <postcode>11578-6604</postcode>
      <state>Nebraska</state>
    </address>
    <company name="Volkman, Bergnaum and Kub" catchPhrase="Secured intangible firmware">
    </company>
    <details>
<![CDATA[
Et eum voluptatibus dolorum possimus aut beatae. Nam voluptatem maiores reiciendis blanditiis fuga. Eum laborum et voluptate. Architecto quia similique autem consequatur.
Ex nostrum quos. Et adipisci at quod iure quas. Ipsa totam ut dignissimos. Consectetur corrupti quaerat et expedita numquam nesciunt. Recusandae sunt dolor itaque reprehenderit hic. Sunt quibusdam consequatur atque consequatur eos.
Explicabo inventore debitis. Iste ea quidem. Accusantium eum velit aut ab repudiandae voluptate. Dicta aut sit id fuga maxime ea. Aut ex perferendis nisi autem. Voluptas praesentium odio.
Perferendis optio sit possimus voluptate provident sunt. Et temporibus dolores nemo provident neque ut. Natus facilis deleniti alias quam odio.
Voluptatem et dolorum natus tenetur doloremque. Necessitatibus distinctio architecto et natus fuga repudiandae. Rerum natus minus eos.
Autem porro doloribus. Nam non officiis vero vitae autem. Ad nihil unde facere. Aliquam deleniti nesciunt eligendi. Harum accusamus sed consectetur nisi. 
]]>
    </details>
  </contact>
  <contact firstName="Rick" lastName="Emard" email="schulist.branson@mckenzie.net"/>
    <phone number="135.692.0747x21203"/>
    <address>
      <street>1715 King Island Suite 086</street>
      <city>Schmittside</city>
      <postcode>03005-2057</postcode>
      <state>Colorado</state>
    </address>
    <company name="Willms-Hessel" catchPhrase="Progressive neutral pricingstructure">
    </company>
  </contact>
  <contact firstName="Thad" lastName="Windler" email="will99@brown.info"/>
    <phone number="1-150-356-8950x9389"/>
    <address>
      <street>455 Mitchell Harbor Suite 177</street>
      <city>South Alfordville</city>
      <postcode>09848-8284</postcode>
      <state>Idaho</state>
    </address>
    <company name="Erdman and Sons" catchPhrase="Operative multi-state encoding">
    </company>
  </contact>
  <contact firstName="Irma" lastName="Schneider" email="ykeeling@jenkins.net"/>
    <phone number="1-623-377-9667"/>
    <address>
      <street>5024 Kulas Cliffs</street>
      <city>West Carter</city>
      <postcode>24046</postcode>
      <state>SouthCarolina</state>
    </address>
    <company name="Armstrong, Hoeger and Goodwin" catchPhrase="Quality-focused bottom-line access">
      <director name="Miss Neha Stanton" />
    </company>
  </contact>
  <contact firstName="Ellis" lastName="Wolff" email="ebert.myron@schuster.biz"/>
    <phone number="(990)523-4464x553"/>
    <address>
      <street>4313 Edmond Lights</street>
      <city>North Elenahaven</city>
      <postcode>40625</postcode>
      <state>Maryland</state>
    </address>
    <company name="Crist LLC" catchPhrase="Realigned homogeneous GraphicInterface">
      <director name="Jayce Schroeder" />
    </company>
    <details>
<![CDATA[
Impedit aut rerum praesentium consequatur. Non ut ducimus vel quia impedit ipsa. Explicabo quasi eius et. Sed numquam illo dolores debitis delectus.
Nisi dolore corporis cumque aut enim. Et modi fuga dicta. Quo rem voluptatem. Nulla consequatur vel aut expedita quae.
Rerum sunt qui voluptatem dicta facilis. Rerum maiores omnis repellat. Dolor sed quia rerum qui qui. Accusantium eos ipsa repellendus velit voluptatem asperiores. Et et amet sit in. Explicabo voluptas ut.
Dignissimos porro autem veniam quo aut. Eos perspiciatis rerum magnam adipisci. Ratione quas modi. Ea quia delectus rem dolores. Ea commodi hic.
Fuga quia et facilis nemo voluptate aliquam. Dignissimos aut qui ipsum. Provident distinctio rerum omnis et enim. Qui odit dicta. Soluta distinctio dolorum molestiae sunt ipsa. Nesciunt quaerat beatae exercitationem dolores facere hic.
Dolorem consequuntur repellendus suscipit. Et dolorem consequuntur sint doloremque repellat ad. Impedit reiciendis asperiores. Quod aspernatur nesciunt facere. Nisi minus asperiores ex sed et. Fugiat alias repellendus distinctio nesciunt. 
]]>
    </details>
  </contact>
  <contact firstName="Stanton" lastName="Bruen" email="pacocha.avis@buckridgedavis.com"/>
    <phone number="1-180-800-6214x0417"/>
    <address>
      <street>6277 Bruen Pass</street>
      <city>New Emeliaport</city>
      <postcode>55131-3794</postcode>
      <state>Arkansas</state>
    </address>
    <company name="Shanahan-Mitchell" catchPhrase="Secured grid-enabled throughput">
    </company>
  </contact>
  <contact firstName="Amalia" lastName="Dietrich" email="romaguera.fatima@bogisich.com"/>
    <phone number="250.571.3328"/>
    <address>
      <street>9900 Wellington Center</street>
      <city>Irvingbury</city>
      <postcode>58271</postcode>
      <state>Nevada</state>
    </address>
    <company name="Purdy, Paucek and Hintz" catchPhrase="Ergonomic tertiary data-warehouse">
    </company>
    <details>
<![CDATA[
Voluptas doloremque asperiores. Quaerat iste quia suscipit consectetur. Consectetur placeat rem distinctio numquam.
Ab debitis odio neque. Repellat autem ea quas sequi exercitationem. Tempore omnis totam optio consectetur perferendis. Consectetur saepe voluptatem dolorem quae.
Sed aliquid labore alias libero vitae amet. Asperiores accusantium quidem nihil amet necessitatibus rerum. Aut inventore cupiditate quisquam voluptatibus nesciunt. In sunt quam.
At quis fugiat ut possimus debitis eos. Labore ipsum veniam. Aliquid consequatur voluptatem fugiat deserunt. Natus non voluptatum nam minima. Eveniet libero incidunt dolores iure deleniti. Dolorem deserunt aliquam eius commodi odio. 
]]>
    </details>
  </contact>
  <contact firstName="Laurine" lastName="Prohaska" email="dovie53@jenkinsokuneva.info"/>
    <phone number="502.295.9840x98725"/>
    <address>
      <street>07633 Ryann Throughway</street>
      <city>Hicklefurt</city>
      <postcode>97260</postcode>
      <state>WestVirginia</state>
    </address>
    <company name="Hermiston LLC" catchPhrase="Inverse bi-directional projection">
    </company>
  </contact>
  <contact firstName="Brett" lastName="Lehner" email="tdooley@weber.com"/>
    <phone number="251.924.8740x80198"/>
    <address>
      <street>53265 Abernathy Lock</street>
      <city>South Rosettastad</city>
      <postcode>85744</postcode>
      <state>Oklahoma</state>
    </address>
    <company name="Monahan LLC" catchPhrase="Operative analyzing middleware">
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