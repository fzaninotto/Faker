<?php

namespace Faker\Provider\ro_RO;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('CEC Bank', 'Romgaz', 'Hidroelectrica', 'Dedeman', 'Automobile Dacia', 'BCR', 'BRD', 'RCS & RDS', 'Romtelecom', 'Azomures', 'Banca Transilvania', 'Interagro', 'Enel', 'Petrom', 'BAT Romania Trading');
}
