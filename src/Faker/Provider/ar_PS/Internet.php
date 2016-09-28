<?php

namespace Faker\Provider\ar_PS;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    
    protected static $safeEmailTld = array('com', 'jo', 'me', 'net', 'org');

    protected static $tld = array('biz', 'com', 'info', 'jo', 'net', 'org');
    
    /**
     * Arabic masculine given names
     * @link    https://en.wikipedia.org/wiki/Category:Arabic_masculine_given_names
     */
    protected static $lastNameAscii = array( 'alaa', 'aman', 'amer', 'amir', 'amjad', 'ammar', 'barkat', 'bashar', 'bashir', 'bilal', 'burhan', 'daud', 'fikri', 'habib', 'hadi', 'hafeez', 'haitham', 'hakam', 'ilyas', 'imad', 'imran', 'inaam', 'iqbal', 'jaber', 'labib', 'latif', 'luay', 'mahir', 'majid', 'mamdouh', 'muammer', 'muhsin', 'mukhtar', 'munir', 'murad', 'musa', 'nasir', 'nasrallah', 'nawfal', 'nihad', 'numan', 'nur', 'rashad', 'ramzi', 'rifat', 'rushdi', 'saad', 'sabri', 'shawki', 'shukri', 'suhail', 'sultan', 'taha', 'taher', 'waleed', 'wasim', 'yacine', 'yasser', 'yunus', 'yusuf');

    /**
     * Arabic masculine given names
     * @link    https://en.wikipedia.org/wiki/Category:Arabic_masculine_given_names
     */
    protected static $firstNameAscii = array('abbad', 'adeel', 'abbas', 'adnan', 'ahmad', 'akram', 'amr', 'anis', 'asem', 'atif', 'awad', 'ayman', 'ekram', 'fadel', 'fadi', 'fahd', 'faheem', 'fahmi', 'harun', 'hatem', 'hossam', 'hussein', 'idris', 'ihab', 'jalal', 'jamal', 'jameel', 'jawdat', 'kamil', 'karem', 'mansur', 'marwan', 'masoud', 'midhat', 'moeen', 'mohannad', 'nabih', 'nabil', 'nader', 'naim', 'naji', 'najib', 'omar', 'osama', 'qusay', 'raed', 'rafiq', 'raji', 'sadik', 'sajid', 'salah', 'salim', 'samir', 'shakir', 'talal', 'tariq', 'tawfik', 'uday', 'wafi', 'wajdi', 'zahir', 'zaid', 'zakariya', 'zaki', 'ziad');

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
