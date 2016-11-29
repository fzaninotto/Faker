<?php

namespace Faker\Provider\ar_DZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'com', 'dz', 'me', 'net', 'org',
    );

    protected static $tld = array(
        'biz', 'com', 'info', 'dz', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'rahmani', 'charfaoui', 'yakhlif', 'jaloul', 'nouiri', 'touiri', 'blidi',
        'maghraoui', 'aloukbi', 'sahraoui', 'ribhi', 'arbaoui', 'moukhtari', 'laamouri',
        'amara', 'zrouki', 'sabkhaoui', 'kasmi', 'bradii', 'darbali', 'azouz', 'kbaili',
        'chaoui', 'mbrabit', 'maamar',
    );
    protected static $firstNameAscii = array(
        'yasmin', 'amina', 'iman', 'sara', 'inas', 'mariem', 'manal', 'linah', 'amal', 'soufia',
        'amira', 'sabrina', 'aya', 'kamilia', 'noura', 'linda', 'maria', 'firyal', 'rim', 'chahinaz',
        'saalma', 'ikram', 'lilia', 'hiba', 'nisrin', 'rania', 'bouchra', 'ninia', 'nassima', 'nasira',
        'khadija', 'foula', 'safia', 'hana', 'nawal', 'yassmina', 'asma', 'farah', 'kinza', 'hajer',
        'nariman', 'hayat', 'layla', 'souad', 'ilham', 'lamia', 'wafa', 'sabrin', 'fatiha', 'fatma',
        'charifa', 'samira', 'rim', 'anissa', 'jamila', 'kahina', 'rim', 'hind', 'zakia', 'dania', 'batoul',
        'yousra',

        'mohamed', 'karim', 'amin', 'yassim', 'ahmed', 'ali', 'eliyas', 'mahdi', 'nasim', 'jamel',
        'omar', 'kamel', 'walid', 'hakim', 'zaki', 'hamza', 'youssef', 'rachid', 'ibrahim', 'samir',
        'anis', 'rayan', 'rabih', 'abdelkader', 'wassim', 'nathir', 'hisham', 'fares', 'mounir',
        'fatih', 'younis', 'salim', 'mourad', 'islam', 'hassin', 'salah', 'malek', 'adam',
        'farid', 'massinisa', 'aziz', 'moustafa', 'hamid', 'mouloud', 'ismail', 'aymen', 'anis',
        'soufien', 'nabil', 'zakaria', 'farouk', 'taha', 'akram', 'faisal', 'ghasil', 'halim',
        'lotfi', 'faouzi', 'abbas', 'imad', 'amir', 'mahfoudh', 'younis', 'khaled', 'eisa', 'mousa',
        'eliyas', 'adel', 'hisham', 'zahir', 'majdi', 'ousama', 'nasser', 'achour', 'abdelhak', 'ayoub',
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
     * @example 'mohamed.rahmani'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.dz'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
