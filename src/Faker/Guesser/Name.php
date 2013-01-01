<?php

namespace Faker\Guesser;

use \Faker\Provider\Base;

class Name
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat($name)
    {
        $name = Base::toLower($name);
        $generator = $this->generator;
        if (preg_match('/^is[_A-Z]/', $name)) {
            return function() use ($generator) { return $generator->boolean; };
        }
        if (preg_match('/(_a|A)t$/', $name)) {
            return function() use ($generator) { return $generator->dateTime; };
        }
        switch ($name) {
            case 'first_name':
            case 'firstname':
                return function() use ($generator) { return $generator->firstName; };
            case 'last_name':
            case 'lastname':
                return function() use ($generator) { return $generator->lastName; };
            case 'username':
            case 'login':
                return function() use ($generator) { return $generator->userName; };
            case 'email':
                return function() use ($generator) { return $generator->email; };
            case 'phone_number':
            case 'phonenumber':
            case 'phone':
                return function() use ($generator) { return $generator->phoneNumber; };
            case 'address':
                return function() use ($generator) { return $generator->address; };
            case 'city':
                return function() use ($generator) { return $generator->city; };
            case 'streetaddress':
                return function() use ($generator) { return $generator->streetAddress; };
            case 'postcode':
            case 'zipcode':
                return function() use ($generator) { return $generator->postcode; };
            case 'state':
                return function() use ($generator) { return $generator->state; };
            case 'country':
                return function() use ($generator) { return $generator->country; };
            case 'title':
                return function() use ($generator) { return $generator->sentence; };
            case 'body':
            case 'summary':
                return function() use ($generator) { return $generator->text; };
        }
    }
}
