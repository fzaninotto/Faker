<?php

namespace Faker\Provider\zh_TW;

class Payment extends \Faker\Provider\Payment
{
    public function creditCardDetails($valid = true)
    {
        return \Faker\Factory::create('en_US')->creditCardDetails($valid);
    }
}
