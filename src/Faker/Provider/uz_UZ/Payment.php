<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Payment
 * Description: Generates name of banks in uzbek langugae
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */
class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Uzbek banks (2015-04-04), source: https://www.uba.uz/uz/rating/
     * @example "cat *.html | grep 'b-cb-list__name' | iconv --f windows-1251 --t utf-8 | grep -o '>.*<' | \
     * sed -r 's/&mdash;//' | sed -r 's/[\<\>]//g' | sed -r "s/(^|$)/'/g" | sed -r 's/$/,/' | sed -r 's/\&(laquo|raquo);/"/g' | \
     * sed -r 's/\s+/ /g'"
     */
    protected static $banks = array(
        '"Asaka" ATB',
        '"Hi-Tech-Bank" XATB',
        '"InFinbank" ATB',
        '"Ipak yo\'li bank" AITB',
        '"KDB Bank Uzbekistan" AJ',
        '"Mikrokreditbank" ATB',
        '"Orient Finans bank" XATB',
        '"Ravnaqbank" XATB',
        '"Trastbank" XAB',
        '"Turkiston" XATB',
        '"Ziraat Bank Uzbekistan" AJ',
        '"Ipoteka" ATIB ',
        '"Qishloq Qurilish Bank" ATB',
        '"Aloqabank" ATB',
        '"Uzsanoatqurilishbank" ATB',
        '"Xalq bank" ATB',
        '"Savdogarbank" ATB',
        '"Kapitalbank" ATB',
        '"Turonbank" ATB',
        '"Agrobank" ATB',
        '"Asia Alliance Bank" ATB',
        '"Universalbank" XATB'
    );

    /**
     * @return mixed|null
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
