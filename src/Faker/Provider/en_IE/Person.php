<?php

namespace Faker\Provider\en_IE;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
    );

    protected static $firstNameMale = array(
        'Mícheál', 'Seán', 'Oisín', 'Fionn'
    );

    protected static $firstNameFemale = array(
        'Éabha', 'Siobhán', 'Dearbhla'
    );

    protected static $lastNameMale = array(
        'Mac Mathúna', 'Ó Murchú', 'Ó hUiginn', 'Mac Gearailt', 'Ó Dónaill'
    );

    protected static $lastNameFemale = array(
        'Mhic Mhathúna', 'Uí Mhurchú', 'Uí hUiginn', 'Mhic Ghearailt', 'Uí Dhónaill',
        'Bean Mhic Mhathúna', 'Bean Uí Mhurchú', 'Bean Uí hUiginn', 'Bean Mhic Ghearailt', 'Bean Uí Dhónaill',
        'Nic Mhathúna', 'Ní Mhurchú', 'Ní hUiginn', 'Nic Ghearailt', 'Ní Dhónaill'
    );
}
