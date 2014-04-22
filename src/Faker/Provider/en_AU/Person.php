<?php

namespace Faker\Provider\en_AU;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}'
    );

    protected static $firstNameMale = array(
        'John','Peter','David','Michael','Robert','James','Andrew','Matthew','Christopher','Daniel','Paul','William','Mark','Anthony','Thomas','Stephen','Benjamin','Ian','Joshua','Nicholas',
        'Jason','Steven','Luke','Adam','Timothy','Kevin','Brian','Jack','Richard','Ronald','Gregory','Geoffrey','Kenneth','Raymond','Alan','Lachlan','Nathan','Alexander','Scott','Samuel',
        'Craig','Gary','Graeme','Shane','Darren','Simon','Ryan','George','Wayne','Colin','Bradley','Patrick','Barry','Aaron','Rodney','Liam','Brett','Joseph','Dean','Cameron','Edward','Justin',
        'Adrian','Bruce','Trevor','Neil','Glenn','Graham','Donald','Brendan','Jake','Phillip','Philip','Jacob','Mitchell','Dylan','Russell','Jordan','Keith','Allan','Ross','Charles','Stuart',
        'Ethan','Jeffrey','Sean','Douglas','Leslie','Joel','Oliver','Ashley','Francis','Jamie','Jonathan','Lucas','Martin','Garry','Maxwell','Leigh','Shaun'
    );

    protected static $firstNameFemale = array(
        'Margaret','Jennifer','Sarah','Jessica','Elizabeth','Susan','Michelle','Helen','Patricia','Rebecca','Julie','Emily','Lisa','Mary','Christine','Karen','Judith','Nicole','Emma','Melissa',
        'Catherine','Barbara','Amanda','Sandra','Lynette','Maria','Wendy','Samantha','Stephanie','Robyn','Pamela','Pamela','Olivia','Heather','Sharon','Anne','Joanne','Chloe','Lauren','Joan','Amy',
        'Natalie','Linda','Laura','Kathleen','Kate','Leanne','Fiona','Angela','Shirley','Suzanne','Kylie','Anna','Lorraine','Rachel','Georgia','Jacqueline','Debra','Beverley','Dianne','Sophie',
        'Dorothy','Danielle','Kim','Hannah','Cheryl','Belinda','Janet','Grace','Deborah','Megan','Kathryn','Carol','Charlotte','Alexandra','Isabella','Jane','Katherine','Janice','Zoe','Tracey',
        'Claire','Kelly','Andrea','Maureen','Valerie','Sally','Donna','Carolyn','Ella','Louise','Mia','Hayley','Melanie','Ruby','Alison','Kerry','Diane','Ann','Denise','Natasha'
    );

    protected static $lastName = array('Smith','Jones','Williams','Brown','Wilson','Taylor','Lee','Johnson','Anderson','White','Martin','Thompson','Nguyen','Thomas','Walker','Harris','Ryan','Campbell','King','Robinson');

    protected static $suffix = array('AC','AO','AM','OAM');

    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

}
