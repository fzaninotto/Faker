<?php

namespace Faker\Test\Fixture\Provider\fr_FR\Company;

use Faker\Provider\fr_FR\Company;

class TestableCompany extends Company
{
    public static function isCatchPhraseValid($catchPhrase)
    {
        return parent::isCatchPhraseValid($catchPhrase);
    }
}
