<?php

namespace Faker\Provider\en_KE;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastNameMale}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastNameFemale}}'
    );

    /**
     * Typical Kenyan male firstnames
     * @link https://github.com/uzziellite/Faker/blob/master/src/Faker/Provider/en_KE/Person.php
     */
    protected static $firstNameMale = array(
        'Trevor','Martin','Abubakar','Ibrahim','Alex','Allan','Amos','Nicholas','Andrew','Bakadi',
        'Benson','Brian','Carlos','Teddy','Dancan','David','Dennis','Michael','Derrick','Deodre',
        'Barnaby','Isaac','Jackson','James','Jeff','John','George','Joshua','Jude','Juniour',
        'Cahill','Kevin','Johnstone','Kareem','Ryan','Brian','Leon','Lionel','Marvin','Emmanuel','Mark',
        'Peter','Joel','Micky','Joseph','William','Reagan','Samuel','Earnest','Justin','Philip','Paul',
        'Patrick','Fabian','Smith','Ramadhan','Santos','Shawn','Isaiah','Stephen','Stanley','Edwin','Maxwel',
        'Tony','Victor','Vincent','Wilson','Yusuf','Rasael','Parker',
    );

    /**
     * First names for Kenyan Females
     * @link https://github.com/uzziellite/Faker/blob/master/src/Faker/Provider/en_KE/Person.php
     */
    protected static $firstNameFemale = array(
        'Mercy','Mary','Brenda','Angel','Frida','Rose','Anastacia','Margret','Tracey','Stacy','Agnes',
        'Carol','Judy','Sharon','Amina','Coleta','Honorata','Renalda','Matrona','Jamie','Nazarene','Tonia',
        'Azaria','Meda','Leyla','Purity','Ashley','Yvone','Nikki','Becky','Alice','Bella','Anna','Beryl','Aimee',
        'Betty','Bianca','Kate','Celestine','Cesh','Angie','Cynthia','Dokia','Doreen','Dokia','Dota','Eunice',
        'Eva','Faith','Favor','Hilda','Grace','Husna','Irene','Jane','Janet','Jenin','Joy','Joan','Kaila','Susan',
        'Kaitlan','Kokki','Lenah','Lynn',
    );

    /**
     * Kenyan Female Last Names
     * @link https://github.com/uzziellite/Faker/blob/master/src/Faker/Provider/en_KE/Person.php
     */
    protected static $lastNameFemale = array(
       'Auma','Atieno','Mukhoya','Eshkumo','Nangila','Kananu','Ndinda','Muli','Mwende',
       'Wairimu','Wangui','Wambui','Waithera','Wangare','Chebet','Chelang\'at','Wacheke',
       'Sakimpa','Muthoni','Hadija','Amina','Taabu','Khamisi','Njeri','Njoki','Shiko',
       'Semiryan','Mwangela','Malemba','Matunda','Chepkoech','Chelimo','Jelimo','Jepling\'',
       'Radol','Ingavo','Ali','Mwajuma','Masitsa','Minayo','Ingutia','Kemunto','Nzano','Mukami',
       'Abuor','Akech','Chepkemoi','Jebitok','Akello','Wamuyu','Kadzo','Karea',
    );

    /**
     * Kenyan Male Last Names
     * @link https://github.com/uzziellite/Faker/blob/master/src/Faker/Provider/en_KE/Person.php
     */
    protected static $lastNameMale = array(

        'Njenga','Kibet','Maina','Bambanya','Charo','Wafula','Asero','Barasa','Vaati','Wanjohi',
        'Muinde','Mwikya','Kivanguli','Otieno','Okello','Okoth','Ouma','Kimani','Mwangi','Kipkurui',
        'Njuguna','Kipkoech','Njoroge','Matagari','Indiatsi','Shionzo','Shipalapala','Leshitin','Kipkut',
        'Lang\'at', 'Simel','Mwamburi','Mwadime','Poisa','Mwaisho','Mwasungia','Washala','Mwachofi',
        'Onyancha','Musedi','Omondi','Ochola','Gogo','Osundwa','Mutua','Mwiti','Khabelwa','Mutethia',
        'Agengo','Murage','Owino','Jatelo','Jalang\'o','Otoyo','Kiplimo','Kinuthia','Kariuki','Kaula','Ochieng\'',
    );

    /**
     * ID Numbers of kenyans issued from 1970 - Present
     */
    protected static $idNumber = array('8######','########');

    /**
     * Tax Payer PIN Number (KRA PIN) Format
     */
    protected static $kraPin = array('?#########?');

    /**
     * Generate Kenyan Male Last Name
     * @example Osundwa
     */
    public function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    /**
     * Generate Kenyan Female Last Name
     * @example Karea
     */
    public function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }

    /**
     * Generate a valid Kenyan ID Number
     * @example 01011101
     */
    public function idNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$idNumber)));
    }

    /**
     * Generate a valid Kenyan KRA PIN
     * @example Z001002321W
     */
    public function kraPin()
    {
        return strtoupper(static::bothify($this->generator->parse(static::randomElement(static::$kraPin))));
    }
}
