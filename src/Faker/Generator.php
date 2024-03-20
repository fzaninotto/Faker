<?php

namespace Faker;

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
 * @property string $company
 * @property string $companySuffix
 * @property string $jobTitle
 * @property string $creditCardType
 * @property string $creditCardNumber
 *
 * @method string creditCardNumber($type = null, $formatted = false, $separator = '-')
 *
 * @property \DateTime $creditCardExpirationDate
 * @property string    $creditCardExpirationDateString
 * @property array     $creditCardDetails
 * @property string    $bankAccountNumber
 *
 * @method string iban($countryCode = null, $prefix = '', $length = null)
 *
 * @property string       $swiftBicNumber
 * @property string       $vat
 * @property string       $word
 * @property string|array $words
 *
 * @method string|array words($nb = 3, $asText = false)
 * @method string       word()
 *
 * @property string $sentence
 *
 * @method string sentence($nbWords = 6, $variableNbWords = true)
 *
 * @property string|array $sentences
 *
 * @method string|array sentences($nb = 3, $asText = false)
 *
 * @property string $paragraph
 *
 * @method string paragraph($nbSentences = 3, $variableNbSentences = true)
 *
 * @property string|array $paragraphs
 *
 * @method string|array paragraphs($nb = 3, $asText = false)
 *
 * @property string $text
 *
 * @method string text($maxNbChars = 200)
 * @method string realText($maxNbChars = 200, $indexSize = 2)
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
 * @property string    $ipv4
 * @property string    $ipv6
 * @property string    $localIpv4
 * @property string    $macAddress
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
 * @method string    amPm($max = 'now')
 * @method string    date($format = 'Y-m-d', $max = 'now')
 * @method string    dayOfMonth($max = 'now')
 * @method string    dayOfWeek($max = 'now')
 * @method string    iso8601($max = 'now')
 * @method string    month($max = 'now')
 * @method string    monthName($max = 'now')
 * @method string    time($format = 'H:i:s', $max = 'now')
 * @method int       unixTime($max = 'now')
 * @method string    year($max = 'now')
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
 * @property bool   $boolean
 *
 * @method bool boolean($chanceOfGettingTrue = 50)
 *
 * @property int    $randomDigit
 * @property int    $randomDigitNot
 * @property int    $randomDigitNotNull
 * @property string $randomLetter
 * @property string $randomAscii
 *
 * @method int             randomNumber($nbDigits = null, $strict = false)
 * @method int|string|null randomKey(array $array = [])
 * @method int             numberBetween($min = 0, $max = 2147483647)
 * @method float           randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
 * @method mixed           randomElement(array $array = ['a', 'b', 'c'])
 * @method array           randomElements(array $array = ['a', 'b', 'c'], $count = 1, $allowDuplicates = false)
 * @method array|string    shuffle($arg = '')
 * @method array           shuffleArray(array $array = [])
 * @method string          shuffleString($string = '', $encoding = 'UTF-8')
 * @method string          numerify($string = '###')
 * @method string          lexify($string = '????')
 * @method string          bothify($string = '## ??')
 * @method string          asciify($string = '****')
 * @method string          regexify($regex = '')
 * @method string          toLower($string = '')
 * @method string          toUpper($string = '')
 * @method Generator       optional($weight = 0.5, $default = null)
 * @method Generator       unique($reset = false, $maxRetries = 10000)
 * @method Generator       valid($validator = null, $maxRetries = 10000)
 * @method mixed           passthrough($passthrough)
 * @method int             biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
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
 * @property array  $rgbColorAsArray
 * @property string $rgbCssColor
 * @property string $safeColorName
 * @property string $colorName
 *
 * @method string randomHtml($maxDepth = 4, $maxWidth = 4)
 *
 */
class Generator
{
    protected array $providers = [];
    protected array $formatters = [];

    public function addProvider($provider): void
    {
        \array_unshift($this->providers, $provider);
    }

    public function getProviders(): array
    {
        return $this->providers;
    }

    public function seed($seed = null): void
    {
        if (null === $seed) {
            \mt_srand();
        } else {
            \mt_srand((int) $seed, \MT_RAND_PHP);
        }
    }

    public function format($formatter, $arguments = []): mixed
    {
        return \call_user_func_array($this->getFormatter($formatter), $arguments);
    }

    public function getFormatter(string $formatter): callable
    {
        if (isset($this->formatters[$formatter])) {
            return $this->formatters[$formatter];
        }
        foreach ($this->providers as $provider) {
            if (\method_exists($provider, $formatter)) {
                $this->formatters[$formatter] = [$provider, $formatter];

                return $this->formatters[$formatter];
            }
        }
        throw new \InvalidArgumentException(\sprintf('Unknown formatter "%s"', $formatter));
    }

    /**
     * Replaces tokens ('{{ tokenName }}') with the result from the token method call.
     */
    public function parse(string $string): string
    {
        return \preg_replace_callback('/\{\{\s?(\w+)\s?\}\}/u', [self::class, 'callFormatWithMatches'], $string);
    }

    protected function callFormatWithMatches($matches): mixed
    {
        return $this->format($matches[1]);
    }

    public function __get(string $attribute): mixed
    {
        return $this->format($attribute);
    }

    public function __call(string $method, array $attributes): mixed
    {
        return $this->format($method, $attributes);
    }

    public function __destruct()
    {
        $this->seed();
    }
}
