# Faker

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](https://rubygems.org/gems/faker).

Faker requires PHP >= 5.3.3.

[![Monthly Downloads](https://poser.pugx.org/fzaninotto/faker/d/monthly.png)](https://packagist.org/packages/fzaninotto/faker) [![Build Status](https://travis-ci.org/fzaninotto/Faker.svg?branch=master)](https://travis-ci.org/fzaninotto/Faker) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/eceb78a9-38d4-4ad5-8b6b-b52f323e3549/mini.png)](https://insight.sensiolabs.com/projects/eceb78a9-38d4-4ad5-8b6b-b52f323e3549)

# Table of Contents

- [Installation](#installation)
- [Basic Usage](#basic-usage)
- [Formatters](#formatters)
	- [Base](#fakerproviderbase)
	- [Lorem Ipsum Text](#fakerproviderlorem)
	- [Person](#fakerprovideren_usperson)
	- [Address](#fakerprovideren_usaddress)
	- [Phone Number](#fakerprovideren_usphonenumber)
	- [Company](#fakerprovideren_uscompany)
	- [Real Text](#fakerprovideren_ustext)
	- [Date and Time](#fakerproviderdatetime)
	- [Internet](#fakerproviderinternet)
	- [User Agent](#fakerprovideruseragent)
	- [Payment](#fakerproviderpayment)
	- [Color](#fakerprovidercolor)
	- [File](#fakerproviderfile)
	- [Image](#fakerproviderimage)
	- [Uuid](#fakerprovideruuid)
	- [Barcode](#fakerproviderbarcode)
	- [Miscellaneous](#fakerprovidermiscellaneous)
	- [Biased](#fakerproviderbiased)
	- [Html Lorem](#fakerproviderhtmllorem)
- [Modifiers](#modifiers)
- [Localization](#localization)
- [Populating Entities Using an ORM or an ODM](#populating-entities-using-an-orm-or-an-odm)
- [Seeding the Generator](#seeding-the-generator)
- [Faker Internals: Understanding Providers](#faker-internals-understanding-providers)
- [Real Life Usage](#real-life-usage)
- [Language specific formatters](#language-specific-formatters)
- [Third-Party Libraries Extending/Based On Faker](#third-party-libraries-extendingbased-on-faker)
- [License](#license)


## Installation

```sh
composer require fzaninotto/faker
```

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
  // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
  // et sit et mollitia sed.
  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
  // sit minima sint.
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

**Tip**: For a quick generation of fake data, you can also use Faker as a command line tool thanks to [faker-cli](https://github.com/bit3/faker-cli).

## Formatters

Each of the generator properties (like `name`, `address`, and `lorem`) are called "formatters". A faker generator has many of them, packaged in "providers". Here is a list of the bundled formatters in the default locale.

### `Faker\Provider\Base`

    randomDigit             // 7
    randomDigitNotNull      // 5
    randomNumber($nbDigits = NULL, $strict = false) // 79907610
    randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) // 48.8932
    numberBetween($min = 1000, $max = 9000) // 8567
    randomLetter            // 'b'
    // returns randomly ordered subsequence of a provided array
    randomElements($array = array ('a','b','c'), $count = 1) // array('c')
    randomElement($array = array ('a','b','c')) // 'b'
    shuffle('hello, world') // 'rlo,h eoldlw'
    shuffle(array(1, 2, 3)) // array(2, 1, 3)
    numerify('Hello ###') // 'Hello 609'
    lexify('Hello ???') // 'Hello wgt'
    bothify('Hello ##??') // 'Hello 42jz'
    asciify('Hello ***') // 'Hello R6+'
    regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'); // sm0@y8k96a.ej

### `Faker\Provider\Lorem`

    word                                             // 'aut'
    words($nb = 3, $asText = false)                  // array('porro', 'sed', 'magni')
    sentence($nbWords = 6, $variableNbWords = true)  // 'Sit vitae voluptas sint non voluptates.'
    sentences($nb = 3, $asText = false)              // array('Optio quos qui illo error.', 'Laborum vero a officia id corporis.', 'Saepe provident esse hic eligendi.')
    paragraph($nbSentences = 3, $variableNbSentences = true) // 'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.'
    paragraphs($nb = 3, $asText = false)             // array('Quidem ut sunt et quidem est accusamus aut. Fuga est placeat rerum ut. Enim ex eveniet facere sunt.', 'Aut nam et eum architecto fugit repellendus illo. Qui ex esse veritatis.', 'Possimus omnis aut incidunt sunt. Asperiores incidunt iure sequi cum culpa rem. Rerum exercitationem est rem.')
    text($maxNbChars = 200)                          // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'

### `Faker\Provider\en_US\Person`

    title($gender = null|'male'|'female')     // 'Ms.'
    titleMale                                 // 'Mr.'
    titleFemale                               // 'Ms.'
    suffix                                    // 'Jr.'
    name($gender = null|'male'|'female')      // 'Dr. Zane Stroman'
    firstName($gender = null|'male'|'female') // 'Maynard'
    firstNameMale                             // 'Maynard'
    firstNameFemale                           // 'Rachel'
    lastName                                  // 'Zulauf'

### `Faker\Provider\en_US\Address`

    cityPrefix                          // 'Lake'
    secondaryAddress                    // 'Suite 961'
    state                               // 'NewMexico'
    stateAbbr                           // 'OH'
    citySuffix                          // 'borough'
    streetSuffix                        // 'Keys'
    buildingNumber                      // '484'
    city                                // 'West Judge'
    streetName                          // 'Keegan Trail'
    streetAddress                       // '439 Karley Loaf Suite 897'
    postcode                            // '17916'
    address                             // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
    country                             // 'Falkland Islands (Malvinas)'
    latitude($min = -90, $max = 90)     // 77.147489
    longitude($min = -180, $max = 180)  // 86.211205

### `Faker\Provider\en_US\PhoneNumber`

    phoneNumber             // '201-886-0269 x3767'
    tollFreePhoneNumber     // '(888) 937-7238'
    e164PhoneNumber     // '+27113456789'

### `Faker\Provider\en_US\Company`

    catchPhrase             // 'Monitored regional contingency'
    bs                      // 'e-enable robust architectures'
    company                 // 'Bogan-Treutel'
    companySuffix           // 'and Sons'
    jobTitle                // 'Cashier'

### `Faker\Provider\en_US\Text`

    realText($maxNbChars = 200, $indexSize = 2) // "And yet I wish you could manage it?) 'And what are they made of?' Alice asked in a shrill, passionate voice. 'Would YOU like cats if you were never even spoke to Time!' 'Perhaps not,' Alice replied."

### `Faker\Provider\DateTime`

    unixTime($max = 'now')                // 58781813
    dateTime($max = 'now', $timezone = date_default_timezone_get()) // DateTime('2008-04-25 08:37:17', 'UTC')
    dateTimeAD($max = 'now', $timezone = date_default_timezone_get()) // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
    iso8601($max = 'now')                 // '1978-12-09T10:10:29+0000'
    date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
    time($format = 'H:i:s', $max = 'now') // '20:49:42'
    dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()) // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
    dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = date_default_timezone_get()) // DateTime('2003-03-15 02:00:49', 'Antartica/Vostok')
    dateTimeThisCentury($max = 'now', $timezone = date_default_timezone_get())     // DateTime('1915-05-30 19:28:21', 'UTC')
    dateTimeThisDecade($max = 'now', $timezone = date_default_timezone_get())      // DateTime('2007-05-29 22:30:48', 'Europe/Paris')
    dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get())        // DateTime('2011-02-27 20:52:14', 'Africa/Lagos')
    dateTimeThisMonth($max = 'now', $timezone = date_default_timezone_get())       // DateTime('2011-10-23 13:46:23', 'Antarctica/Vostok')
    amPm($max = 'now')                    // 'pm'
    dayOfMonth($max = 'now')              // '04'
    dayOfWeek($max = 'now')               // 'Friday'
    month($max = 'now')                   // '06'
    monthName($max = 'now')               // 'January'
    year($max = 'now')                    // '1993'
    century                               // 'VI'
    timezone                              // 'Europe/Paris'

### `Faker\Provider\Internet`

    email                   // 'tkshlerin@collins.com'
    safeEmail               // 'king.alford@example.org'
    freeEmail               // 'bradley72@gmail.com'
    companyEmail            // 'russel.durward@mcdermott.org'
    freeEmailDomain         // 'yahoo.com'
    safeEmailDomain         // 'example.org'
    userName                // 'wade55'
    password                // 'k&|X+a45*2['
    domainName              // 'wolffdeckow.net'
    domainWord              // 'feeney'
    tld                     // 'biz'
    url                     // 'http://www.skilesdonnelly.biz/aut-accusantium-ut-architecto-sit-et.html'
    slug                    // 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
    ipv4                    // '109.133.32.252'
    localIpv4               // '10.242.58.8'
    ipv6                    // '8e65:933d:22ee:a232:f1c1:2741:1f10:117c'
    macAddress              // '43:85:B7:08:10:CA'

### `Faker\Provider\UserAgent`

    userAgent              // 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
    chrome                 // 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
    firefox                // 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
    safari                 // 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
    opera                  // 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
    internetExplorer       // 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'

### `Faker\Provider\Payment`

    creditCardType          // 'MasterCard'
    creditCardNumber        // '4485480221084675'
    creditCardExpirationDate // 04/13
    creditCardExpirationDateString // '04/13'
    creditCardDetails       // array('MasterCard', '4485480221084675', 'Aleksander Nowak', '04/13')
    // Generates a random IBAN. Set $countryCode to null for a random country
    iban($countryCode)      // 'IT31A8497112740YZ575DJ28BP4'
    swiftBicNumber          // 'RZTIAT22263'

### `Faker\Provider\Color`

    hexcolor               // '#fa3cc2'
    rgbcolor               // '0,255,122'
    rgbColorAsArray        // array(0,255,122)
    rgbCssColor            // 'rgb(0,255,122)'
    safeColorName          // 'fuchsia'
    colorName              // 'Gainsbor'

### `Faker\Provider\File`

    fileExtension          // 'avi'
    mimeType               // 'video/x-msvideo'
    // Copy a random file from the source to the target directory and returns the fullpath or filename
    file($sourceDir = '/tmp', $targetDir = '/tmp') // '/path/to/targetDir/13b73edae8443990be1aa8f1a483bc27.jpg'
    file($sourceDir, $targetDir, false) // '13b73edae8443990be1aa8f1a483bc27.jpg'

### `Faker\Provider\Image`

    // Image generation provided by LoremPixel (http://lorempixel.com/)
    imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
    imageUrl($width, $height, 'cats')     // 'http://lorempixel.com/800/600/cats/'
    imageUrl($width, $height, 'cats', true, 'Faker') // 'http://lorempixel.com/800/400/cats/Faker'
    imageUrl($width, $height, 'cats', true, 'Faker', true) // 'http://lorempixel.com/grey/800/400/cats/Faker/' Monochrome image
    image($dir = '/tmp', $width = 640, $height = 480) // '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
    image($dir, $width, $height, 'cats')  // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a cat!
    image($dir, $width, $height, 'cats', false) // '13b73edae8443990be1aa8f1a483bc27.jpg' it's a filename without path
    image($dir, $width, $height, 'cats', true, false) // it's a no randomize images (default: `true`)
    image($dir, $width, $height, 'cats', true, true, 'Faker') // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a cat with 'Faker' text. Default, `null`.

### `Faker\Provider\Uuid`

    uuid                   // '7e57d004-2b97-0e7a-b45f-5387367791cd'

### `Faker\Provider\Barcode`

    ean13          // '4006381333931'
    ean8           // '73513537'
    isbn13         // '9790404436093'
    isbn10         // '4881416324'

### `Faker\Provider\Miscellaneous`

    boolean // false
    boolean($chanceOfGettingTrue = 50) // true
    md5           // 'de99a620c50f2990e87144735cd357e7'
    sha1          // 'f08e7f04ca1a413807ebc47551a40a20a0b4de5c'
    sha256        // '0061e4c60dac5c1d82db0135a42e00c89ae3a333e7c26485321f24348c7e98a5'
    locale        // en_UK
    countryCode   // UK
    languageCode  // en
    currencyCode  // EUR
    emoji         // 😁

### `Faker\Provider\Biased`

    // get a random number between 10 and 20,
    // with more chances to be close to 20
    biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt')

### `Faker\Provider\HtmlLorem`

    //Generate HTML document which is no more than 2 levels deep, and no more than 3 elements wide at any level.
    randomHtml(2,3)   // <html><head><title>Aut illo dolorem et accusantium eum.</title></head><body><form action="example.com" method="POST"><label for="username">sequi</label><input type="text" id="username"><label for="password">et</label><input type="password" id="password"></form><b>Id aut saepe non mollitia voluptas voluptas.</b><table><thead><tr><tr>Non consequatur.</tr><tr>Incidunt est.</tr><tr>Aut voluptatem.</tr><tr>Officia voluptas rerum quo.</tr><tr>Asperiores similique.</tr></tr></thead><tbody><tr><td>Sapiente dolorum dolorem sint laboriosam commodi qui.</td><td>Commodi nihil nesciunt eveniet quo repudiandae.</td><td>Voluptates explicabo numquam distinctio necessitatibus repellat.</td><td>Provident ut doloremque nam eum modi aspernatur.</td><td>Iusto inventore.</td></tr><tr><td>Animi nihil ratione id mollitia libero ipsa quia tempore.</td><td>Velit est officia et aut tenetur dolorem sed mollitia expedita.</td><td>Modi modi repudiandae pariatur voluptas rerum ea incidunt non molestiae eligendi eos deleniti.</td><td>Exercitationem voluptatibus dolor est iste quod molestiae.</td><td>Quia reiciendis.</td></tr><tr><td>Inventore impedit exercitationem voluptatibus rerum cupiditate.</td><td>Qui.</td><td>Aliquam.</td><td>Autem nihil aut et.</td><td>Dolor ut quia error.</td></tr><tr><td>Enim facilis iusto earum et minus rerum assumenda quis quia.</td><td>Reprehenderit ut sapiente occaecati voluptatum dolor voluptatem vitae qui velit.</td><td>Quod fugiat non.</td><td>Sunt nobis totam mollitia sed nesciunt est deleniti cumque.</td><td>Repudiandae quo.</td></tr><tr><td>Modi dicta libero quisquam doloremque qui autem.</td><td>Voluptatem aliquid saepe laudantium facere eos sunt dolor.</td><td>Est eos quis laboriosam officia expedita repellendus quia natus.</td><td>Et neque delectus quod fugit enim repudiandae qui.</td><td>Fugit soluta sit facilis facere repellat culpa magni voluptatem maiores tempora.</td></tr><tr><td>Enim dolores doloremque.</td><td>Assumenda voluptatem eum perferendis exercitationem.</td><td>Quasi in fugit deserunt ea perferendis sunt nemo consequatur dolorum soluta.</td><td>Maxime repellat qui numquam voluptatem est modi.</td><td>Alias rerum rerum hic hic eveniet.</td></tr><tr><td>Tempore voluptatem.</td><td>Eaque.</td><td>Et sit quas fugit iusto.</td><td>Nemo nihil rerum dignissimos et esse.</td><td>Repudiandae ipsum numquam.</td></tr><tr><td>Nemo sunt quia.</td><td>Sint tempore est neque ducimus harum sed.</td><td>Dicta placeat atque libero nihil.</td><td>Et qui aperiam temporibus facilis eum.</td><td>Ut dolores qui enim et maiores nesciunt.</td></tr><tr><td>Dolorum totam sint debitis saepe laborum.</td><td>Quidem corrupti ea.</td><td>Cum voluptas quod.</td><td>Possimus consequatur quasi dolorem ut et.</td><td>Et velit non hic labore repudiandae quis.</td></tr></tbody></table></body></html>

## Modifiers

Faker provides three special providers, `unique()`, `optional()`, and `valid()`, to be called before any provider.

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

// optional() sometimes bypasses the provider to return a default value instead (which defaults to NULL)
$values = array();
for ($i=0; $i < 10; $i++) {
  // get a random digit, but also null sometimes
  $values []= $faker->optional()->randomDigit;
}
print_r($values); // [1, 4, null, 9, 5, null, null, 4, 6, null]

// optional() accepts a weight argument to specify the probability of receiving the default value.
// 0 will always return the default value; 1 will always return the provider. Default weight is 0.5 (50% chance).
$faker->optional($weight = 0.1)->randomDigit; // 90% chance of NULL
$faker->optional($weight = 0.9)->randomDigit; // 10% chance of NULL

// optional() accepts a default argument to specify the default value to return.
// Defaults to NULL.
$faker->optional($weight = 0.5, $default = false)->randomDigit; // 50% chance of FALSE
$faker->optional($weight = 0.9, $default = 'abc')->word; // 10% chance of 'abc'

// valid() only accepts valid values according to the passed validator functions
$values = array();
$evenValidator = function($digit) {
	return $digit % 2 === 0;
};
for ($i=0; $i < 10; $i++) {
	$values []= $faker->valid($evenValidator)->randomDigit;
}
print_r($values); // [0, 4, 8, 4, 2, 6, 0, 8, 8, 6]

// just like unique(), valid() throws an overflow exception when it can't generate a valid value
$values = array();
try {
  $faker->valid($evenValidator)->randomElement(1, 3, 5, 7, 9);
} catch (\OverflowException $e) {
  echo "Can't pick an even number in that set!";
}
```

## Localization

`Faker\Factory` can take a locale as an argument, to return localized data. If no localized provider is found, the factory fallbacks to the default locale (en_US).

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

Faker provides adapters for Object-Relational and Object-Document Mappers (currently, [Propel](http://www.propelorm.org), [Doctrine2](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/), [CakePHP](http://cakephp.org), [Spot2](https://github.com/vlucas/spot2), [Mandango](https://github.com/mandango/mandango) and [Eloquent](https://laravel.com/docs/master/eloquent) are supported). These adapters ease the population of databases through the Entity classes provided by an ORM library (or the population of document stores using Document classes provided by an ODM library).

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
  'ISBN' => function() use ($generator) { return $generator->ean13(); }
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

> **Tip**: DateTime formatters won't reproduce the same fake data if you don't fix the `$max` value:
>
> ```php
> <?php
> // even when seeded, this line will return different results because $max varies
> $faker->dateTime(); // equivalent to $faker->dateTime($max = 'now')
> // make sure you fix the $max parameter
> $faker->dateTime('2014-02-25 08:37:17'); // will return always the same date when seeded
> ```
>
> **Tip**: Formatters won't reproduce the same fake data if you use the `rand()` php function. Use `$faker` or `mt_rand()` instead:
>
> ```php
> <?php
> // bad
> $faker->realText(rand(10,20));
> // good
> $faker->realText($faker->numberBetween(10,20));
> ```



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
    return $this->generator->ean13();
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
  <contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>" email="<?php echo $faker->email ?>">
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
  <contact firstName="Ona" lastName="Bednar" email="schamberger.frank@wuckert.com">
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
  <contact firstName="Aurelie" lastName="Paucek" email="alfonzo55@durgan.com">
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
  <contact firstName="Clifton" lastName="Kshlerin" email="kianna.wiegand@framiwyman.info">
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
  <contact firstName="Alexandre" lastName="Orn" email="thelma37@erdmancorwin.biz">
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
  <contact firstName="Katelynn" lastName="Kohler" email="reinger.trudie@stiedemannjakubowski.com">
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
  <contact firstName="Blanca" lastName="Stark" email="tad27@feest.net">
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
  <contact firstName="Rene" lastName="Spencer" email="anibal28@armstrong.info">
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
  <contact firstName="Alessandro" lastName="Hagenes" email="tbreitenberg@oharagorczany.com">
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
  <contact firstName="Novella" lastName="Rutherford" email="claud65@bogisich.biz">
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
  <contact firstName="Andreane" lastName="Mann" email="meggie17@ornbaumbach.com">
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

### `Faker\Provider\ar_SA\Person`

```php
<?php

echo $faker->idNumber;      // ID number
echo $faker->nationalIdNumber // Citizen ID number
echo $faker->foreignerIdNumber // Foreigner ID number
echo $faker->companyIdNumber // Company ID number
```

### `Faker\Provider\ar_SA\Payment`

```php
<?php

echo $faker->bankAccountNumber // "SA0218IBYZVZJSEC8536V4XC"
```

### `Faker\Provider\at_AT\Payment`

```php
<?php

echo $faker->vat;           // "AT U12345678" - Austrian Value Added Tax number
echo $faker->vat(false);    // "ATU12345678" - unspaced Austrian Value Added Tax number
```

### `Faker\Provider\bg_BG\Payment`

```php
<?php

echo $faker->vat;           // "BG 0123456789" - Bulgarian Value Added Tax number
echo $faker->vat(false);    // "BG0123456789" - unspaced Bulgarian Value Added Tax number
```

### `Faker\Provider\cs_CZ\Address`

```php
<?php

echo $faker->region; // "Liberecký kraj"
```

### `Faker\Provider\cs_CZ\Company`

```php
<?php

// Generates a valid IČO
echo $faker->ico; // "69663963"
```

### `Faker\Provider\cs_CZ\DateTime`

```php
<?php

echo $faker->monthNameGenitive; // "prosince"
echo $faker->formattedDate; // "12. listopadu 2015"
```

### `Faker\Provider\cs_CZ\Person`

```php
<?php

echo $faker->birthNumber; // "7304243452"
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

### `Faker\Provider\de_DE\Payment`

```php
<?php

echo $faker->bankAccountNumber; // "DE41849025553661169313"
echo $faker->bank; // "Volksbank Stuttgart"

```

### `Faker\Provider\en_HK\Address`

```php
<?php

// Generates a fake town name based on the words commonly found in Hong Kong
echo $faker->town; // "Yuen Long"

// Generates a fake village name based on the words commonly found in Hong Kong
echo $faker->village; // "O Tau"

// Generates a fake estate name based on the words commonly found in Hong Kong
echo $faker->estate; // "Ching Lai Court"

```

### `Faker\Provider\en_HK\Phone`

```php
<?php

// Generates a Hong Kong mobile number (starting with 5, 6 or 9)
echo $faker->mobileNumber; // "92150087"

// Generates a Hong Kong landline number (starting with 2 or 3)
echo $faker->landlineNumber; // "32750132"

// Generates a Hong Kong fax number (starting with 7)
echo $faker->faxNumber; // "71937729"

```

### `Faker\Provider\en_NG\Address`

```php
<?php

// Generates a random region name
echo $faker->region; // 'Katsina'
```

### `Faker\Provider\en_NG\Person`

```php
<?php

// Generates a random person name
echo $faker->name; // 'Oluwunmi Mayowa'
```

### `Faker\Provider\en_NZ\Phone`

```php
<?php

// Generates a cell (mobile) phone number
echo $faker->cellNumber; // "021 123 4567"

// Generates a toll free number
echo $faker->tollFreeNumber; // "0800 123 456"

// Area Code
echo $faker->areaCode; // "03"
```

### `Faker\Provider\en_US\Payment`

```php
<?php

echo $faker->bankAccountNumber;  // '51915734310'
echo $faker->bankRoutingNumber;  // '212240302'
```

### `Faker\Provider\en_US\Person`

```php
<?php

// Generates a random Social Security Number
echo $faker->ssn; // '123-45-6789'
```

### `Faker\Provider\en_ZA\Company`

```php
<?php

// Generates a random company registration number
echo $faker->companyNumber; // 1999/789634/01
```

### `Faker\Provider\en_ZA\Person`

```php
<?php

// Generates a random national identification number
echo $faker->idNumber; // 6606192211041
```

### `Faker\Provider\en_ZA\PhoneNumber`

```php
<?php

// Generates a special rate toll free phone number
echo $faker->tollFreeNumber; // 0800 555 5555

// Generates a mobile phone number
echo $faker->mobileNumber; // 082 123 5555
```

### `Faker\Provider\es_ES\Person`

```php
<?php

// Generates a Documento Nacional de Identidad (DNI) number
echo $faker->dni; // '77446565E'
```

### `Faker\Provider\es_ES\Payment`

```php
<?php
// Generates a Código de identificación Fiscal (CIF) number
echo $faker->vat;           // "A35864370"
```

### `Faker\Provider\es_PE\Person`

```php
<?php

// Generates a Peruvian Documento Nacional de Identidad (DNI) number
echo $faker->dni; // '83367512'
```

### `Faker\Provider\fa_IR\Address`

```php
<?php

// Generates a random building name
echo $faker->building; // "ساختمان آفتاب"

// Returns a random city name
echo $faker->city // "استان زنجان"
```

### `Faker\Provider\fa_IR\Company`

```php
<?php

// Generates a random contract type
echo $faker->contract; // "رسمی"
```

### `Faker\Provider\fi_FI\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "FI8350799879879616"
```

### `Faker\Provider\fi_FI\Person`

```php
<?php

//Generates a valid Finnish personal identity number (in Finnish - Henkilötunnus)
echo $faker->personalIdentityNumber() // '170974-007J'

//Since the numbers are different for male and female persons, optionally you can specify gender.
echo $faker->personalIdentityNumber(\DateTime::createFromFormat('Y-m-d', '2015-12-14'), 'female') // '141215A520B'
```

### `Faker\Provider\fr_BE\Payment`

```php
<?php

echo $faker->vat;           // "BE 0123456789" - Belgian Value Added Tax number
echo $faker->vat(false);    // "BE0123456789" - unspaced Belgian Value Added Tax number
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

### `Faker\Provider\fr_FR\Company`

```php
<?php

// Generates a random SIREN number
echo $faker->siren; // 082 250 104

// Generates a random SIRET number
echo $faker->siret; // 347 355 708 00224
```

### `Faker\Provider\fr_FR\Payment`

```php
<?php

// Generates a random VAT
echo $faker->vat; // FR 12 123 456 789
```

### `Faker\Provider\fr_FR\Person`

```php
<?php

// Generates a random NIR / Sécurité Sociale number
echo $faker->nir; // 1 88 07 35 127 571 - 19
```

### `Faker\Provider\he_IL\Payment`

```php
<?php

echo $faker->bankAccountNumber // "IL392237392219429527697"
```

### `Faker\Provider\hr_HR\Payment`

```php
<?php

echo $faker->bankAccountNumber // "HR3789114847226078672"
```

### `Faker\Provider\hu_HU\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "HU09904437680048220079300783"
```

### `Faker\Provider\id_ID\Person`

```php
<?php

// Generates a random Nomor Induk Kependudukan (NIK)

// first argument is gender, either Person::GENDER_MALE or Person::GENDER_FEMALE, if none specified random gender is used
// second argument is birth date (DateTime object), if none specified, random birth date is used
echo $faker->nik(); // "8522246001570940"
```

### `Faker\Provider\it_IT\Company`

```php
<?php

// Generates a random Vat Id
echo $faker->vatId(); // "IT98746784967"
```

### `Faker\Provider\it_IT\Person`

```php
<?php

// Generates a random Tax Id code (Codice fiscale)
echo $faker->taxId(); // "DIXDPZ44E08F367A"
```

### `Faker\Provider\ja_JP\Person`

```php
<?php

// Generates a 'kana' name
echo $faker->kanaName($gender = null|'male'|'female') // "アオタ ミノル"

// Generates a 'kana' first name
echo $faker->firstKanaName($gender = null|'male'|'female') // "ヒデキ"

// Generates a 'kana' first name on the male
echo $faker->firstKanaNameMale // "ヒデキ"

// Generates a 'kana' first name on the female
echo $faker->firstKanaNameFemale // "マアヤ"

// Generates a 'kana' last name
echo $faker->lastKanaName; // "ナカジマ"
```

### `Faker\Provider\ka_GE\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "GE33ZV9773853617253389"
```

### `Faker\Provider\kk_KZ\Company`

```php
<?php

// Generates an business identification number
echo $faker->businessIdentificationNumber; // "150140000019"
```

### `Faker\Provider\kk_KZ\Payment`

```php
<?php

// Generates a random bank name
echo $faker->bank; // "Қазкоммерцбанк"

// Generates a random bank account number
echo $faker->bankAccountNumber; // "KZ1076321LO4H6X41I37"
```

### `Faker\Provider\kk_KZ\Person`

```php
<?php

// Generates an individual identification number
echo $faker->individualIdentificationNumber; // "780322300455"

// Generates an individual identification number based on his/her birth date
echo $faker->individualIdentificationNumber(new \DateTime('1999-03-01')); // "990301300455"
```

### `Faker\Provider\ko_KR\Address`

```php
<?php

// Generates a metropolitan city
echo $faker->metropolitanCity; // "서울특별시"

// Generates a borough
echo $faker->borough; // "강남구"
```

### `Faker\Provider\lt_LT\Payment`

```php
<?php

echo $faker->bankAccountNumber // "LT300848876740317118"
```

### `Faker\Provider\lv_LV\Person`

```php
<?php

// Generates a random personal identity card number
echo $faker->personalIdentityNumber; // "140190-12301"
```

### `Faker\Provider\ne_NP\Address`

```php
<?php

//Generates a Nepali district name
echo $faker->district;

//Generates a Nepali city name
echo $faker->cityName;
```

### `Faker\Provider\nl_BE\Payment`

```php
<?php

echo $faker->vat;           // "BE 0123456789" - Belgian Value Added Tax number
echo $faker->vat(false);    // "BE0123456789" - unspaced Belgian Value Added Tax number
```

### `Faker\Provider\nl_NL\Company`

```php
<?php

echo $faker->vat; // "NL123456789B01" - Dutch Value Added Tax number
echo $faker->btw; // "NL123456789B01" - Dutch Value Added Tax number (alias)
```

### `Faker\Provider\no_NO\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "NO3246764709816"
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

### `Faker\Provider\pt_PT\Person`

```php
<?php

// Generates a random taxpayer identification number (in portuguese - Número de Identificação Fiscal NIF)
echo $faker->taxpayerIdentificationNumber; // '165249277'
```

### `Faker\Provider\pt_BR\Address`

```php
<?php

// Generates a random region name
echo $faker->region; // 'Nordeste'

// Generates a random region abbreviation
echo $faker->regionAbbr; // 'NE'
```

### `Faker\Provider\pt_BR\PhoneNumber`

```php
<?php

echo $faker->areaCode;  // 21
echo $faker->cellphone; // 9432-5656
echo $faker->landline;  // 2654-3445
echo $faker->phone;     // random landline, 8-digit or 9-digit cellphone number

// Using the phone functions with a false argument returns unformatted numbers
echo $faker->cellphone(false); // 74336667

// cellphone() has a special second argument to add the 9th digit. Ignored if generated a Radio number
echo $faker->cellphone(true, true); // 98983-3945 or 7343-1290

// Using the "Number" suffix adds area code to the phone
echo $faker->cellphoneNumber;       // (11) 98309-2935
echo $faker->landlineNumber(false); // 3522835934
echo $faker->phoneNumber;           // formatted, random landline or cellphone (obeying the 9th digit rule)
echo $faker->phoneNumberCleared;    // not formatted, random landline or cellphone (obeying the 9th digit rule)
```

### `Faker\Provider\pt_BR\Person`

```php
<?php

// The name generator may include double first or double last names, plus title and suffix
echo $faker->name; // 'Sr. Luis Adriano Sepúlveda Filho'

// Valid document generators have a boolean argument to remove formatting
echo $faker->cpf;        // '145.343.345-76'
echo $faker->cpf(false); // '45623467866'
echo $faker->rg;         // '84.405.736-3'
```

### `Faker\Provider\pt_BR\Company`

```php
<?php

// Generates a Brazilian formatted and valid CNPJ
echo $faker->cnpj;        // '23.663.478/0001-24'
echo $faker->cnpj(false); // '23663478000124'
```

### `Faker\Provider\ro_MD\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "MD83BQW1CKMUW34HBESDP3A8"
```

### `Faker\Provider\ro_RO\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "RO55WRJE3OE8X3YQI7J26U1E"
```

### `Faker\Provider\ro_RO\Person`

```php
<?php

// Generates a random male name prefix/title
echo $faker->prefixMale; // "ing."
// Generates a random female name prefix/title
echo $faker->prefixFemale; // "d-na."
// Generates a random male first name
echo $faker->firstNameMale; // "Adrian"
// Generates a random female first name
echo $faker->firstNameFemale; // "Miruna"


// Generates a random Personal Numerical Code (CNP)
echo $faker->cnp; // "2800523081231"
// Valid option values:
//    $gender: null (random), male, female
//    $dateOfBirth (1800+): null (random), Y-m-d, Y-m (random day), Y (random month and day)
//          i.e. '1981-06-16', '2015-03', '1900'
//    $county: 2 letter ISO 3166-2:RO county codes and B1, B2, B3, B4, B5, B6 for Bucharest's 6 sectors
//    $isResident true/false flag if the person resides in Romania
echo $faker->cnp($gender = null, $dateOfBirth = null, $county = null, $isResident = true);

```

### `Faker\Provider\ro_RO\PhoneNumber`

```php
<?php

// Generates a random toll-free phone number
echo $faker->tollFreePhoneNumber; // "0800123456"
// Generates a random premium-rate phone number
echo $faker->premiumRatePhoneNumber; // "0900123456"
```

### `Faker\Provider\ru_RU\Payment`

```php
<?php

// Generates a Russian bank name (based on list of real russian banks)
echo $faker->bank; // "ОТП Банк"

//Generate a Russian Tax Payment Number for Company
echo $faker->inn; //  7813540735

//Generate a Russian Tax Code for Company
echo $faker->kpp; // 781301001
```

### `Faker\Provider\sv_SE\Payment`

```php
<?php

// Generates a random bank account number
echo $faker->bankAccountNumber; // "SE5018548608468284909192"
```

### `Faker\Provider\sv_SE\Person`

```php
<?php

//Generates a valid Swedish personal identity number (in Swedish - Personnummer)
echo $faker->personalIdentityNumber() // '950910-0799'

//Since the numbers are different for male and female persons, optionally you can specify gender.
echo $faker->personalIdentityNumber('female') // '950910-0781'
```


### `Faker\Provider\zh_CN\Payment`

```php
<?php

// Generates a random bank name (based on list of real chinese banks)
echo $faker->bank; // '中国建设银行'
```

### `Faker\Provider\uk_UA\Payment`

```php
<?php

// Generates an Ukraine bank name (based on list of real Ukraine banks)
echo $faker->bank; // "Ощадбанк"
```

### `Faker\Provider\zh_TW\Person`

```php
<?php

// Generates a random personal identify number
echo $faker->personalIdentityNumber; // A223456789
```

### `Faker\Provider\zh_TW\Company`

```php
<?php

// Generates a random VAT / Company Tax number
echo $faker->VAT; //23456789
```


## Third-Party Libraries Extending/Based On Faker

* Symfony2 bundles:
  * [BazingaFakerBundle](https://github.com/willdurand/BazingaFakerBundle): Put the awesome Faker library into the Symfony2 DIC and populate your database with fake data.
  * [AliceBundle](https://github.com/hautelook/AliceBundle), [AliceFixturesBundle](https://github.com/h4cc/AliceFixturesBundle): Bundles for using [Alice](https://packagist.org/packages/nelmio/alice) and Faker with data fixtures. Able to use Doctrine ORM as well as Doctrine MongoDB ODM.
* [FakerServiceProvider](https://github.com/EmanueleMinotto/FakerServiceProvider): Faker Service Provider for Silex
* [faker-cli](https://github.com/bit3/faker-cli): Command Line Tool for the Faker PHP library
* [Factory Muffin](https://github.com/thephpleague/factory-muffin): enable the rapid creation of objects (PHP port of factory-girl)
* [CompanyNameGenerator](https://github.com/fzaninotto/CompanyNameGenerator): Generate names for English tech companies with class
* [PlaceholdItProvider](https://github.com/EmanueleMinotto/PlaceholdItProvider): Generate images using placehold.it
* [datalea](https://github.com/spyrit/datalea) A highly customizable random test data generator web app
* [newage-ipsum](https://github.com/frequenc1/newage-ipsum): A new aged ipsum provider for the faker library inspired by http://sebpearce.com/bullshit/
* [xml-faker](https://github.com/prewk/xml-faker): Create fake XML with Faker
* [faker-context](https://github.com/denheck/faker-context): Behat context using Faker to generate testdata
* [CronExpressionGenerator](https://github.com/swekaj/CronExpressionGenerator): Faker provider for generating random, valid cron expressions.
* [pragmafabrik/Pomm2Faker](https://github.com/pragmafabrik/Pomm2Faker): Faker client for Pomm database framework (PostgreSQL)
* [nelmio/alice](https://packagist.org/packages/nelmio/alice): Fixtures/object generator with a yaml DSL that can use Faker as data generator.
* [CakePHP 2.x Fake Seeder Plugin](https://github.com/ravage84/cakephp-fake-seeder) A CakePHP 2.x shell to seed your database with fake and/or fixed data.
* [images-generator](https://github.com/bruceheller/images-generator): An image generator provider using GD for placeholder type pictures
* [pattern-lab/plugin-php-faker](https://github.com/pattern-lab/plugin-php-faker): Pattern Lab is a Styleguide, Component Library, and Prototyping tool. This creates unique content each time Pattern Lab is generated.
* [guidocella/eloquent-populator](https://github.com/guidocella/eloquent-populator): Adapter for Laravel's Eloquent ORM.
* [tamperdata/exiges](https://github.com/tamperdata/exiges): Faker provider for generating random temperatures

## License

Faker is released under the MIT Licence. See the bundled LICENSE file for details.
