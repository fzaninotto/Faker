<?php

namespace Faker;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;

/**
 * @property string $name
 *
 * @method string name(string $gender = null)
 *
 * @property string $firstName
 *
 * @method string firstName(string $gender = null)
 *
 * @property string $firstNameMale
 * @property string $firstNameFemale
 * @property string $lastName
 * @property string $title
 *
 * @method string title(string $gender = null)
 *
 * @property string $titleMale
 * @property string $titleFemale
 * @property string $citySuffix
 * @property string $streetSuffix
 * @property string $buildingNumber
 * @property string $city
 * @property string $streetName
 * @property string $streetAddress
 * @property string $secondaryAddress
 * @property string $postcode
 * @property string $address
 * @property string $state
 * @property string $country
 * @property float  $latitude
 * @property float  $longitude
 * @property string $ean13
 * @property string $ean8
 * @property string $isbn13
 * @property string $isbn10
 * @property string $phoneNumber
 * @property string $e164PhoneNumber
 * @property string $catchPhrase
 * @property string $bs
 * @property string $company
 * @property string $companySuffix
 * @property string $jobTitle
 * @property string $creditCardType
 * @property string $creditCardNumber
 *
 * @method string creditCardNumber($type = null, $formatted = false, $separator = '-')
 *
 * @property \DateTime $creditCardExpirationDate
 * @property string $creditCardExpirationDateString
 * @property array $creditCardDetails
 * @property string $bankAccountNumber
 *
 * @method string iban($countryCode = null, $prefix = '', $length = null)
 *
 * @property string $swiftBicNumber
 * @property string $vat
 * @property string $word
 * @property array|string $words
 *
 * @method array|string words($nb = 3, $asText = false)
 * @method string word()
 *
 * @property string $sentence
 *
 * @method string sentence($nbWords = 6, $variableNbWords = true)
 *
 * @property array|string $sentences
 *
 * @method array|string sentences($nb = 3, $asText = false)
 *
 * @property string $paragraph
 *
 * @method string paragraph($nbSentences = 3, $variableNbSentences = true)
 *
 * @property array|string $paragraphs
 *
 * @method array|string paragraphs($nb = 3, $asText = false)
 *
 * @property string $text
 *
 * @method string text($maxNbChars = 200)
 * @method string realText($maxNbChars = 200, $indexSize = 2)
 * @method string realTextBetween($minNbChars = 150, $maxNbChars = 200, $indexSize = 2)
 *
 * @property string $email
 * @property string $safeEmail
 * @property string $freeEmail
 * @property string $companyEmail
 * @property string $freeEmailDomain
 * @property string $safeEmailDomain
 * @property string $userName
 * @property string $password
 *
 * @method string password($minLength = 6, $maxLength = 20)
 *
 * @property string $domainName
 * @property string $domainWord
 * @property string $tld
 * @property string $url
 * @property string $slug
 *
 * @method string slug($nbWords = 6, $variableNbWords = true)
 *
 * @property string $ipv4
 * @property string $ipv6
 * @property string $localIpv4
 * @property string $macAddress
 * @property int       $unixTime
 * @property \DateTime $dateTime
 * @property \DateTime $dateTimeAD
 * @property string    $iso8601
 * @property \DateTime $dateTimeThisCentury
 * @property \DateTime $dateTimeThisDecade
 * @property \DateTime $dateTimeThisYear
 * @property \DateTime $dateTimeThisMonth
 * @property string    $amPm
 * @property string    $dayOfMonth
 * @property string    $dayOfWeek
 * @property string    $month
 * @property string    $monthName
 * @property string    $year
 * @property string    $century
 * @property string    $timezone
 *
 * @method string amPm($max = 'now')
 * @method string date($format = 'Y-m-d', $max = 'now')
 * @method string dayOfMonth($max = 'now')
 * @method string dayOfWeek($max = 'now')
 * @method string iso8601($max = 'now')
 * @method string month($max = 'now')
 * @method string monthName($max = 'now')
 * @method string time($format = 'H:i:s', $max = 'now')
 * @method int unixTime($max = 'now')
 * @method string year($max = 'now')
 * @method \DateTime dateTime($max = 'now', $timezone = null)
 * @method \DateTime dateTimeAd($max = 'now', $timezone = null)
 * @method \DateTime dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null)
 * @method \DateTime dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
 * @method \DateTime dateTimeThisCentury($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisDecade($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisYear($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisMonth($max = 'now', $timezone = null)
 *
 * @property string $md5
 * @property string $sha1
 * @property string $sha256
 * @property string $locale
 * @property string $countryCode
 * @property string $countryISOAlpha3
 * @property string $languageCode
 * @property string $currencyCode
 * @property bool $boolean
 *
 * @method bool boolean($chanceOfGettingTrue = 50)
 *
 * @property int    $randomDigit
 * @property int    $randomDigitNot
 * @property int    $randomDigitNotNull
 * @property string $randomLetter
 * @property string $randomAscii
 *
 * @method int|string|null randomKey(array $array = array())
 * @method mixed randomElement(array $array = array('a', 'b', 'c'))
 * @method array randomElements(array $array = array('a', 'b', 'c'), $count = 1, $allowDuplicates = false)
 * @method array|string shuffle($arg = '')
 * @method array shuffleArray(array $array = array())
 * @method string shuffleString($string = '', $encoding = 'UTF-8')
 * @method string numerify($string = '###')
 * @method string lexify($string = '????')
 * @method string bothify($string = '## ??')
 * @method string asciify($string = '****')
 * @method string regexify($regex = '')
 * @method string toLower($string = '')
 * @method string toUpper($string = '')
 * @method Generator optional($weight = 0.5, $default = null)
 * @method Generator unique($reset = false, $maxRetries = 10000)
 * @method Generator valid($validator = null, $maxRetries = 10000)
 * @method mixed passthrough($passthrough)
 * @method int biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
 *
 * @property string $macProcessor
 * @property string $linuxProcessor
 * @property string $userAgent
 * @property string $chrome
 * @property string $firefox
 * @property string $safari
 * @property string $opera
 * @property string $internetExplorer
 * @property string $windowsPlatformToken
 * @property string $macPlatformToken
 * @property string $linuxPlatformToken
 * @property string $uuid
 * @property string $mimeType
 * @property string $fileExtension
 *
 * @method string file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
 * @method string imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
 * @method string image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
 *
 * @property string $hexColor
 * @property string $safeHexColor
 * @property string $rgbColor
 * @property array $rgbColorAsArray
 * @property string $rgbCssColor
 * @property string $safeColorName
 * @property string $colorName
 *
 * @method string randomHtml($maxDepth = 4, $maxWidth = 4)
 */
class Generator
{
    protected $providers = [];
    protected $formatters = [];

    private $container;

    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container ?: Extension\ContainerBuilder::getDefault();
    }

    /**
     * @template T of Extension\Extension
     *
     * @param class-string<T> $id
     *
     * @throws ContainerExceptionInterface
     * @throws Extension\ExtensionNotFound
     *
     * @return T
     */
    public function ext(string $id): Extension\Extension
    {
        if (!$this->container->has($id)) {
            throw new Extension\ExtensionNotFound(sprintf(
                'No Faker extension with id "%s" was loaded.',
                $id
            ));
        }

        $extension = $this->container->get($id);

        if ($extension instanceof Extension\GeneratorAwareExtension) {
            $extension = $extension->withGenerator($this);
        }

        return $extension;
    }

    public function addProvider($provider)
    {
        array_unshift($this->providers, $provider);
    }

    public function getProviders()
    {
        return $this->providers;
    }

    public function seed($seed = null)
    {
        if ($seed === null) {
            mt_srand();
        } else {
            mt_srand((int) $seed, MT_RAND_PHP);
        }
    }

    public function format($formatter, $arguments = [])
    {
        return call_user_func_array($this->getFormatter($formatter), $arguments);
    }

    /**
     * @param string $formatter
     *
     * @return callable
     */
    public function getFormatter($formatter)
    {
        if (isset($this->formatters[$formatter])) {
            return $this->formatters[$formatter];
        }

        foreach ($this->providers as $provider) {
            if (method_exists($provider, $formatter)) {
                $this->formatters[$formatter] = [$provider, $formatter];

                return $this->formatters[$formatter];
            }
        }

        throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter));
    }

    /**
     * Replaces tokens ('{{ tokenName }}') with the result from the token method call
     *
     * @param string $string String that needs to bet parsed
     *
     * @return string
     */
    public function parse($string)
    {
        return preg_replace_callback('/\{\{\s?(\w+)\s?\}\}/u', [$this, 'callFormatWithMatches'], $string);
    }

    /**
     * Get a random MIME type
     *
     * @example 'video/avi'
     */
    public function mimeType()
    {
        return $this->ext(Extension\FileExtension::class)->mimeType();
    }

    /**
     * Get a random file extension (without a dot)
     *
     * @example avi
     */
    public function fileExtension()
    {
        return $this->ext(Extension\FileExtension::class)->extension();
    }

    /**
     * Get a full path to a new real file on the system.
     */
    public function filePath()
    {
        return $this->ext(Extension\FileExtension::class)->filePath();
    }

    /**
     * Get an actual blood type
     *
     * @example 'AB'
     */
    public function bloodType(): string
    {
        return $this->ext(Extension\BloodExtension::class)->bloodType();
    }

    /**
     * Get a random resis value
     *
     * @example '+'
     */
    public function bloodRh(): string
    {
        return $this->ext(Extension\BloodExtension::class)->bloodRh();
    }

    /**
     * Get a full blood group
     *
     * @example 'AB+'
     */
    public function bloodGroup(): string
    {
        return $this->ext(Extension\BloodExtension::class)->bloodGroup();
    }

    /**
     * Get a random EAN13 barcode.
     *
     * @example '4006381333931'
     */
    public function ean13(): string
    {
        return $this->ext(Extension\BarcodeExtension::class)->ean13();
    }

    /**
     * Get a random EAN8 barcode.
     *
     * @example '73513537'
     */
    public function ean8(): string
    {
        return $this->ext(Extension\BarcodeExtension::class)->ean8();
    }

    /**
     * Get a random ISBN-10 code
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '4881416324'
     */
    public function isbn10(): string
    {
        return $this->ext(Extension\BarcodeExtension::class)->isbn10();
    }

    /**
     * Get a random ISBN-13 code
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '9790404436093'
     */
    public function isbn13(): string
    {
        return $this->ext(Extension\BarcodeExtension::class)->isbn13();
    }

    /**
     * Returns a random number between $int1 and $int2 (any order)
     *
     * @example 79907610
     */
    public function numberBetween($int1 = 0, $int2 = 2147483647): int
    {
        return $this->ext(Extension\NumberExtension::class)->numberBetween((int) $int1, (int) $int2);
    }

    /**
     * Returns a random number between 0 and 9
     */
    public function randomDigit(): int
    {
        return $this->ext(Extension\NumberExtension::class)->randomDigit();
    }

    /**
     * Generates a random digit, which cannot be $except
     */
    public function randomDigitNot($except): int
    {
        return $this->ext(Extension\NumberExtension::class)->randomDigitNot((int) $except);
    }

    /**
     * Returns a random number between 1 and 9
     */
    public function randomDigitNotZero(): int
    {
        return $this->ext(Extension\NumberExtension::class)->randomDigitNotZero();
    }

    /**
     * Return a random float number
     *
     * @example 48.8932
     */
    public function randomFloat($nbMaxDecimals = null, $min = 0, $max = null): float
    {
        return $this->ext(Extension\NumberExtension::class)->randomFloat(
            $nbMaxDecimals !== null ? (int) $nbMaxDecimals : null,
            (float) $min,
            $max !== null ? (float) $max : null
        );
    }

    /**
     * Returns a random integer with 0 to $nbDigits digits.
     *
     * The maximum value returned is mt_getrandmax()
     *
     * @param int|null $nbDigits Defaults to a random number between 1 and 9
     * @param bool     $strict   Whether the returned number should have exactly $nbDigits
     *
     * @example 79907610
     */
    public function randomNumber($nbDigits = null, $strict = false): int
    {
        return $this->ext(Extension\NumberExtension::class)->randomNumber(
            $nbDigits !== null ? (int) $nbDigits : null,
            (bool) $strict
        );
    }

    protected function callFormatWithMatches($matches)
    {
        return $this->format($matches[1]);
    }

    /**
     * @param string $attribute
     *
     * @deprecated Use a method instead.
     */
    public function __get($attribute)
    {
        trigger_deprecation('fakerphp/faker', '1.14', 'Accessing property "%s" is deprecated, use "%s()" instead.', $attribute, $attribute);

        return $this->format($attribute);
    }

    /**
     * @param string $method
     * @param array  $attributes
     */
    public function __call($method, $attributes)
    {
        return $this->format($method, $attributes);
    }

    public function __destruct()
    {
        $this->seed();
    }

    public function __wakeup()
    {
        $this->formatters = [];
    }
}
