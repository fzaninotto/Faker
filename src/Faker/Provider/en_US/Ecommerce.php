<?php

namespace Faker\Provider\en_US;

class Ecommerce extends \Faker\Provider\Ecommerce
{
    protected static $category = array(
        'Desktop', 'Laptop', 'Notebook', 'Mice', 'Trackball', 'Motherboard', 'Processor',
        'Network device', 'Memory', 'Monitor', 'Printer', 'Scanner', 'Web Camera', 'Tablet',
        'Software', 'Phone', 'PDA', 'Camera', 'MP3 Player', 'PC', 'Mac', 'Flash Drive'
    );

    protected static $priceFormat = "$####,##";
}
