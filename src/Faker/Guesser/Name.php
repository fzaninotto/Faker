<?php

namespace Faker\Guesser;

use Faker\Provider\Base;

class Name
{
    protected $generator;

    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param string $name
     * @param int|null $size Length of field, if known
     * @return callable
     */
    public function guessFormat($name, $size = null)
    {
        $name = Base::toLower($name);
        $generator = $this->generator;
        if (preg_match('/^is[_A-Z]/', $name)) {
            return function () use ($generator) {
                return $generator->boolean;
            };
        }
        if (preg_match('/(_a|A)t$/', $name)) {
            return function () use ($generator) {
                return $generator->dateTime;
            };
        }
        switch (str_replace('_', '', $name)) {
            case 'firstname':
                return function () use ($generator) {
                    return $generator->firstName;
                };
            case 'lastname':
                return function () use ($generator) {
                    return $generator->lastName;
                };
            case 'username':
            case 'login':
                return function () use ($generator) {
                    return $generator->userName;
                };
            case 'email':
            case 'emailaddress':
                return function () use ($generator) {
                    return $generator->email;
                };
            case 'phonenumber':
            case 'phone':
            case 'telephone':
            case 'telnumber':
                return function () use ($generator) {
                    return $generator->phoneNumber;
                };
            case 'address':
                return function () use ($generator) {
                    return $generator->address;
                };
            case 'city':
            case 'town':
                return function () use ($generator) {
                    return $generator->city;
                };
            case 'streetaddress':
                return function () use ($generator) {
                    return $generator->streetAddress;
                };
            case 'postcode':
            case 'zipcode':
                return function () use ($generator) {
                    return $generator->postcode;
                };
            case 'state':
                return function () use ($generator) {
                    return $generator->state;
                };
            case 'county':
                if ($this->generator->locale == 'en_US') {
                    return function () use ($generator) {
                        return sprintf('%s County', $generator->city);
                    };
                }

                return function () use ($generator) {
                    return $generator->state;
                };
            case 'country':
                switch ($size) {
                    case 2:
                        return function () use ($generator) {
                            return $generator->countryCode;
                        };
                    case 3:
                        return function () use ($generator) {
                            return $generator->countryISOAlpha3;
                        };
                    case 5:
                    case 6:
                        return function () use ($generator) {
                            return $generator->locale;
                        };
                    default:
                        return function () use ($generator) {
                            return $generator->country;
                        };
                }
                break;
            case 'locale':
                return function () use ($generator) {
                    return $generator->locale;
                };
            case 'currency':
            case 'currencycode':
                return function () use ($generator) {
                    return $generator->currencyCode;
                };
            case 'url':
            case 'website':
                return function () use ($generator) {
                    return $generator->url;
                };
            case 'company':
            case 'companyname':
            case 'employer':
                return function () use ($generator) {
                    return $generator->company;
                };
            case 'title':
                if ($size !== null && $size <= 10) {
                    return function () use ($generator) {
                        return $generator->title;
                    };
                }

                return function () use ($generator) {
                    return $generator->sentence;
                };
            case 'body':
            case 'summary':
            case 'article':
            case 'description':
                return function () use ($generator) {
                    return $generator->text;
                };
        }
    }
}
