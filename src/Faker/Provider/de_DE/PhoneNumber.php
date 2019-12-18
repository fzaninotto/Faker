<?php

namespace Faker\Provider\de_DE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+49(0){{areaStartCode}}#########',
        '+49(0){{areaStartCode}}### ######',
        '+49 (0) {{areaStartCode}}### ######',
        '+49(0) {{areaStartCode}}########',
        '+49(0){{areaStartCode}}### #####',
        '0{{areaStartCode}}#########',
        '0{{areaStartCode}}########',
        '0{{areaStartCode}}### ######',
        '0{{areaStartCode}}### #####',
        '(0{{areaStartCode}}###) ######',
        '(0{{areaStartCode}}###) #####',
    );

    public static function areaStartCode()
    {
        return self::numberBetween(1, 9);
    }
}
