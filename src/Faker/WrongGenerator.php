<?php

namespace Faker;

/**
 * Proxy for other generators, to return wrong values some times. Works with
 * Faker\Generator\Base->wrong()
 */
class WrongGenerator
{
    /**
     *
     * @var array allowed and safe formatters with arguments type
     */
    protected static $safeFormatters = array(
        //Person
        'prefix' => array(),
        'suffix' => array(),
        'name' => array(),
        'firstName' => array(),
        'lastName' => array(),
        //Address
        'cityPrefix' => array(),
        'secondaryAddress' => array(),
        'state' => array(),
        'stateAbbr' => array(),
        'citySuffix' => array(),
        'streetSuffix' => array(),
        'buildingNumber' => array(),
        'city' => array(),
        'streetName' => array(),
        'streetAddress' => array(),
        'postcode' => array(),
        'address' => array(),
        'country' => array(),
        'latitude' => array(),
        'longitude' => array(),
        //PhoneNumber
        'phoneNumber' => array(),
        //Payment
        'creditCardType' => array(),
        'creditCardNumber' => array(),
        'creditCardExpirationDate' => array(),
        'creditCardExpirationDateString' => array(),
        'creditCardDetails' => array(),
        //Lorem
        'word' => array(),
        'words' => array('tiny_int'),
        'sentence' => array('tiny_int'),
        'sentences' => array('tiny_int'),
        'paragraph' => array('tiny_int'),
        'paragraphs' => array('tiny_int'),
        'text' => array('int'),
        //Text
        'realText' => array('int', 3),
        //Internet
        'email' => array(),
        'safeEmail' => array(),
        'freeEmail' => array(),
        'companyEmail' => array(),
        'freeEmailDomain' => array(),
        'safeEmailDomain' => array(),
        'userName' => array(),
        'domainName' => array(),
        'domainWord' => array(),
        'tld' => array(),
        'url' => array(),
        'ipv4' => array(),
        'ipv6' => array(),
        //DateTime
        'unixTime' => array('current_datetime'),
        'dateTime' => array('current_datetime'),
        'dateTimeAD' => array('current_datetime'),
        'iso8601' => array('current_datetime'),
        'date' => array('datetime_format', 'current_datetime'),
        'time' => array('datetime_format', 'current_datetime'),
        'dateTimeBetween' => array('datetime', 'current_datetime'),
        'dateTimeThisCentury' => array('current_datetime'),
        'dateTimeThisDecade' => array('current_datetime'),
        'dateTimeThisYear' => array('current_datetime'),
        'dateTimeThisMonth' => array('current_datetime'),
        'amPm' => array('current_datetime'),
        'dayOfMonth' => array('current_datetime'),
        'dayOfWeek' => array('current_datetime'),
        'month' => array('current_datetime'),
        'monthName' => array('current_datetime'),
        'year' => array('current_datetime'),
        'century' => array(),
        'timezone' => array(),
        //Miscellaneous
        'boolean' => array('percent'),
        'md5' => array(),
        'sha1' => array(),
        'sha256' => array(),
        'locale' => array(),
        'countryCode' => array(),
        'languageCode' => array(),
        //Base
        'randomDigit' => array(),
        'randomDigitNotNull' => array(),
        'randomNumber' => array('tiny_int', 'int'),
        'randomFloat' => array('tiny_int', 'float', 'float'),
        'randomLetter' => array(),
        'randomElements' => array('array', 'tiny_int'),
        'randomElement' => array('array'),
        //UserAgent
        'userAgent' => array(),
        'chrome' => array(),
        'firefox' => array(),
        'safari' => array(),
        'opera' => array(),
        'internetExplorer' => array(),
        //Uuid
        'uuid' => array(),
        //File
        'fileExtension' => array(),
        'mimeType' => array(),
        //Color
        'hexcolor' => array(),
        'rgbcolor' => array(),
        'rgbColorAsArray' => array(),
        'rgbCssColor' => array(),
        'safeColorName' => array(),
        'colorName' => array(),
        //Image
        'imageUrl' => array('int', 'int'),
        //Barcode
        'ean13' => array(),
        'ean8' => array(),
    );
    
    /**
     *
     * @var Generator 
     */
    protected $generator;

    /**
     *
     * @var array
     */
    protected $formatters;
    
    /**
     *
     * @var array
     */
    protected $formattersArguments;
    
    /**
     *
     * @var array
     */
    protected $asString;
    
    /**
     * 
     * @param Generator $generator
     * @param array $formatters list of formatters allowed, if empty use a predefined
     * @param array $formatters array of formatters with arguments for each formatter (key is formatter name and value is an array of arguments).
     *                          if the key is numeric and the value is the formatter name.
     *                          if the array of formatters is empty, it uses a predefined set of formatters.
     * @param boolean $asString convert generated objects and arrays to string, default = true
     */
    public function __construct(Generator $generator, array $formatters = array(), $asString = true)
    {
        $this->generator = $generator;
        $this->formattersArguments = $this->normalizeFormattersArguments($formatters);
        $this->formatters = $this->getSafeFormatters($this->formattersArguments);
        $this->asString = (bool) $asString;
    }

    /**
     * Catch and proxy all generator calls but return only wrong values with a different method
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only wrong values with a different method
     */
    public function __call($name, $arguments)
    {
        //get random formatter to use
        $methods = array_filter(array_keys($this->formatters), function($var) use ($name) {
            return $var != $name;
        });
        $method = $this->generator->randomElement($methods);
        
        //generate default formatter arguments and override them with custom arguments
        $randomArguments = array_replace(
            $this->generateRandomArguments($this->formatters[$method]), 
            isset($this->formattersArguments[$method]) ? $this->formattersArguments[$method] : array()
        );

        $value = call_user_func_array(array($this->generator, $method), $randomArguments);
        
        // cast as string if needed and allowed
        if ($this->asString) {
            if (is_array($value)) {
                $value = implode(',', $value);
            }
            
            if ($value instanceof \DateTime) {
                $value = $value->format($this->getRandomDateTimeFormat());
            }
            
            if (is_object($value) && method_exists($value, '__toString')) {
                $value = (string) $value;
            }
        }
        
        return $value;
    }
    
    protected function normalizeFormattersArguments(array $formatters = array())
    {
        $normalized = array();
        foreach ($formatters as $key => $value) {
            if (is_numeric($key) && is_string($value)) {
                $normalized[$value] = array();
            } elseif (is_string($key)) {
                $normalized[$key] = (array) $value;
            }
        }
        
        return $normalized;
    }
    
    protected function getSafeFormatters(array $formatters = array())
    {
        $args = array(static::$safeFormatters, $this->generator->getFormatters());
        if (!empty($formatters)) {
            $args[] = $formatters;
        }
        
        return call_user_func_array('array_intersect_key', $args);
    }
    
    protected function generateRandomArguments(array $types)
    {
        $arguments = array();
        
        foreach ($types as $type) {
            try {
                switch ($type) {
                    case 'tiny_int':
                        $arg = $this->generator->randomNumber(1,20);
                        break;
                    case 'int':
                        $arg = $this->generator->randomNumber(1,500);
                        break;
                    case 'float':
                        $arg = $this->generator->randomFloat(5, 0, 2000);
                        break;
                    case 'percent':
                        $arg = $this->generator->randomNumber(1,100);
                        break;
                    case 'string':
                        $arg = $this->generator->word;
                        break;
                    case 'current_datetime':
                        $arg = 'now';
                        break;
                    case 'datetime':
                        $arg = $this->generator->dateTimeThisCentury();
                        break;
                    case 'datetime_format':
                        $arg = $this->getRandomDateTimeFormat();
                        break;
                    case 'array':
                        $arg = $this->generator->words(20);
                        break;
                    default:
                        $arg = $type;
                        break;
                }
            } catch (\InvalidArgumentException $e) {
                switch ($type) {
                    case 'tiny_int':
                        $arg = 3;
                        break;
                    case 'int':
                        $arg = 50;
                        break;
                    case 'float':
                        $arg = 0.5;
                        break;
                    case 'percent':
                        $arg = 50;
                        break;
                    case 'string':
                        $arg = 'lorem';
                        break;
                    case 'current_datetime':
                        $arg = 'now';
                        break;
                    case 'datetime':
                        $arg = '-5 years';
                        break;
                    case 'datetime_format':
                        $arg = 'Y-m-d H:i';
                        break;
                    case 'array':
                        $arg = array('ea', 'praesentium', 'quia', 'saepe', 'aut', 'ducimus', 'et', 'ut', 'est', 'corporis', 'explicabo', 'reiciendis', 'blanditiis', 'non', 'id', 'quam', 'quia', 'animi', 'dolores');
                        break;
                    default:
                        $arg = $type;
                        break;
                }
            }
            
            $arguments[] = $arg;
        }
        
        return $arguments;
    }
    
    protected function getRandomDateTimeFormat()
    {
        return $this->generator->randomElement(array(
            'l Y-m-d H:i:s',
            'Y-m-d H:i:s',
            'Y-m-d H:i:s.u O',
            'Y-m-d H:i:s O',
            'Y-m-d H:i',
            'Y-m-d\TH:i:s.u',
            'Y-m-d\TH:i:s',
            'd/m/Y H:i:s',
            'd/m/Y H:i',
            'd-m-Y H:i:s',
            'd-m-Y H:i:s.u O',
            'd-m-Y H:i:s O',
            'd-m-Y H:i',
            'd-m-Y',
            'Y-m-d',
            'l Y-m-d',
            'd/m/Y',
            'H:i:s.u',
            'H:i:s',
            'H:i',
        ));
    }
}
