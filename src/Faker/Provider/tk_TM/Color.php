<?php

namespace Faker\Provider\tk_TM;

class Color extends \Faker\Provider\Color
{
    /**
     * @var array Renkler
     */
    protected static $safeColorNames = array(
        'gara', 'gyzyl', 'sary', 'gök', 'mämişi',
        'ýaşyl', 'benewşe', 'kümüş', 'çal', 'gülgüne',
    );

    /**
     * Ähli türkmen reňkleri tapmak kyn
     *
     * @var array Asyl türkçe'däki reňkler
     */
    protected static $allColorNames = array();
}
