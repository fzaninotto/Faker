<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class PhoneNumber
 * Description: Generates phone numbers
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @var string[]
     */
    protected static $formats = array(
        '+998 (64) ###-####',
        '+998 (65) ###-####',
        '+998 (66) ###-####',
        '+998 (70) ###-####',
        '+998 (71) ###-####',
        '+998 (75) ###-####',
        '+998 (90) ###-####',
        '+998 (91) ###-####',
        '+998 (93) ###-####',
        '+998 (94) ###-####',
        '+998 (95) ###-####',
        '+998 (98) ###-####',
        '+998 (99) ###-####',
    );
}
