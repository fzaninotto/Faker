<?php

namespace Faker\Provider\ps_AF;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );

    protected static $safeEmailTld = array(
        'com', 'af', 'me', 'net', 'org','co.af'
    );

    /**
     * @link https://en.wikipedia.org/wiki/.af
     */
    protected static $tld = array(
        'biz', 'com', 'info', 'af', 'net',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Category:Pashto-language_surnames
     */
    protected static $lastNameAscii = array(
        'momand', 'shinwari', 'abdali', 'safi', 'adamkhel', 'afridi', 'akakhel', 'alikhel', 'allaiwal', 'babai',
        'baizais', 'bangash', 'banoori', 'banuchi', 'barozai', 'bazai', 'bettani', 'changezi', 'dawar',
        'dawi', 'deshiwal', 'dirani', 'durrani', 'gandapur', 'gharghashti', 'ghilji',
        'gul', 'gulwal', 'hafizkhel', 'harifal', 'ibrahimkhel', 'ibrahimzai', 'ibrahimzai',
        'jadun', 'jalalzai', 'kakar', 'kalakhel', 'kharotakhel', 'khudiadadzai', 'lodi', 'lohani', 'mandokhel', 'miani',
        'mirdadzai', 'musakhel', 'nasozai', 'nattuzai', 'niazi', 'painda', 'panni', 'sarwani', 'shirani', 'sur',
        'tikriwal', 'turkhel','yaqubzai',
    );

    /*
     * @link https://en.wikipedia.org/wiki/Category:Pashtun_names
     */
    protected static $firstNameAscii = array(
        'Aashna','Abdal','Afrasiab', 'Aghala','Amiergol', 'Apana','Apriday','Ara','Asghar','Ashrafm','Atal','Balbala','Barsala',
        'Basoor','Benazira', 'Bismillah','Boba','Dewa','Gabina','Ghazala','Goštāspmkurdish','Gulalai','Hamidullahmmuslim','Hask','Heela',
        'Helai','Heley','Hewad','Hila','Hosai','Ishaqmarabic','Jagṛali','Kaki','Kashmala','Khushal','Lalzari','Laro','Lawanga','Malala',
        'Malang','Malghalara','Mina','Miran','Naghma','Nanguyalai','Nangyali','Nikmarghah','Nomyali','Orbala','Orzala','Palay','Panra',
        'Patman','Patson','Pohyali','Zalmay','Zarbaha','Zarghuna','Zarka','Zarsanga','Zartaj','Zlaikha','Zmarai','Zulaikha',
        'Rostum','Rubbinah','Sanga','Selai','Shahlalai','Shaperai','Shapoor','Sharbat','Shastai','Shazmina','Shino','Shpon',
        'Sparli','Spinm', 'Spinzarm','Storai','Tanima','Teri','Toryal','Wajia','Wardak','Wowreena','Wowrina','Zala','Zalmai'
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'pasoon.momand'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'jobs.af'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
