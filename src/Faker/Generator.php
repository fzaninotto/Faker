<?php

namespace Faker;

/**
 * @property string $name
 * @property string $firstName
 * @property string $lastName
 *
 * @property string $citySuffix
 * @property string $streetSuffix
 * @property string $buildingNumber
 * @property string $city
 * @property string $streetName
 * @property string $streetAddress
 * @property string $postcode
 * @property string $address
 * @property string $country
 * @property float  $latitude
 * @property float  $longitude
 *
 * @property string $ean13
 * @property string $ean8
 *
 * @property string $phoneNumber
 *
 * @property string $company
 * @property string $companySuffix
 *
 * @property string $creditCardType
 * @property string $creditCardNumber
 * @property string $creditCardExpirationDate
 * @property string $creditCardExpirationDateString
 * @property string $creditCardDetails
 * @property string $bankAccountNumber
 * @property string $swiftBicNumber
 *
 * @property string $word
 * @method string words()
 * @method string sentence()
 * @method string sentences()
 * @method string paragraph()
 * @method string paragraphs()
 * @method string text()
 *
 * @method string realText()
 *
 * @property string $email
 * @property string $safeEmail
 * @property string $freeEmail
 * @property string $companyEmail
 * @property string $freeEmailDomain
 * @property string $safeEmailDomain
 * @property string $userName
 * @property string $domainName
 * @property string $domainWord
 * @property string $tld
 * @property string $url
 * @property string $ipv4
 * @property string $ipv6
 * @property string $internalIpv4
 * @property string $macAddress
 *
 * @property int       $unixTime
 * @property \DateTime $dateTime
 * @property \DateTime $dateTimeAD
 * @property string    $iso8601
 * @property \DateTime $dateTimeThisCentury
 * @property \DateTime $dateTimeThisDecade
 * @property \DateTime $dateTimeThisYear
 * @property \DateTime $dateTimeThisMonth
 * @property string    $amPm
 * @property int       $dayOfMonth
 * @property int       $dayOfWeek
 * @property int       $month
 * @property string    $monthName
 * @property int       $year
 * @property int       $century
 * @property string    $timezone
 * @method string date()
 * @method string time()
 * @method \DateTime dateTimeBetween()
 *
 * @property string $md5
 * @property string $sha1
 * @property string $sha256
 * @property string $locale
 * @property string $countryCode
 * @property string $languageCode
 * @method boolean boolean()
 *
 * @property int    $randomDigit
 * @property int    $randomDigitNotNull
 * @property string $randomLetter
 * @method int randomNumber()
 * @method mixed randomKey()
 * @method int numberBetween()
 * @method float randomFloat()
 * @method string randomElement()
 * @method string numerify()
 * @method string lexify()
 * @method string bothify()
 * @method string toLower()
 * @method string toUpper()
 * @method mixed optional()
 * @method UniqueGenerator unique()
 *
 * @property string $userAgent
 * @property string $chrome
 * @property string $firefox
 * @property string $safari
 * @property string $opera
 * @property string $internetExplorer
 *
 * @property string $uuid
 *
 * @property string $mimeType
 * @property string $fileExtension
 *
 * @property string $hexcolor
 * @property string $safeHexColor
 * @property string $rgbcolor
 * @property string $rgbColorAsArray
 * @property string $rgbCssColor
 * @property string $safeColorName
 * @property string $colorName
 */
class Generator
{
    protected $providers = array();
    protected $formatters = array();

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
        mt_srand($seed);
    }

    public function format($formatter, $arguments = array())
    {
        return call_user_func_array($this->getFormatter($formatter), $arguments);
    }

    /**
     * @return Callable
     */
    public function getFormatter($formatter)
    {
        if (isset($this->formatters[$formatter])) {
            return $this->formatters[$formatter];
        }
        foreach ($this->providers as $provider) {
            if (method_exists($provider, $formatter)) {
                $this->formatters[$formatter] = array($provider, $formatter);

                return $this->formatters[$formatter];
            }
        }
        throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter));
    }

    /**
     * Replaces tokens ('{{ tokenName }}') with the result from the token method call
     *
     * @param  string $string String that needs to bet parsed
     * @return string
     */
    public function parse($string)
    {
        return preg_replace_callback('/\{\{\s?(\w+)\s?\}\}/u', array($this, 'callFormatWithMatches'), $string);
    }

    protected function callFormatWithMatches($matches)
    {
        return $this->format($matches[1]);
    }

    public function __get($attribute)
    {
        return $this->format($attribute);
    }

    public function __call($method, $attributes)
    {
        return $this->format($method, $attributes);
    }
}
