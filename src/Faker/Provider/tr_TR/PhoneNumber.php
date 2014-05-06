<?php

namespace Faker\Provider\tr_TR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+9050########',
        '+9053########',
        '+9054########',
        '+9055########',
        '+90 50# ## ## ###',
        '+90 53# ## ## ###',
        '+90 54# ## ## ###',
        '+90 55# ## ## ###',
        '+90 (50#) ## ## ###',
        '+90 (53#) ## ## ###',
        '+90 (54#) ## ## ###',
        '+90 (55#) ## ## ###'
    );
}
