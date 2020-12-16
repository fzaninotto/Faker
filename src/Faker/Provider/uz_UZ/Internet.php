<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Internet Generates internet addresses
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 * @file      Faker\Provider\uz_UZ
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var string[]
     */
    protected static $freeEmailDomain = array(
        'umail.uz', 'mail.ru', 'inbox.uz', 'pardayev.uz', 'gmail.com'
    );
    /**
     * @var string[]
     */
    protected static $tld = array(
        'com', 'net', 'org', 'uz', 'uz', 'uz', 'uz'
    );
}
