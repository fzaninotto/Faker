<?php

namespace Faker\Provider\en_PH;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Anthony', 'Allan',
        'Ben', 'Buboy', 'Bobby', 'Bentong', 'Bayani',
        'Cydrick', 'Carlo', 'Cardo', 'Cesar',
        'JC', 'Mark  Anthony', 'Jayfer', 'Paolo', 'Poy', 'Warren', 'Stephen', 'Maynard',
        'Michael', 'Jeric', 'Rex', 'Benigno'
    );

    protected static $firstNameFemale = array(
        'Ana', 'Pauline', 'Melissa', 'Gerlie', 'Nicolette', 'Marissa', 'Catherine',
        'Maricel', 'Leah', 'Katrina', 'Michelle', 'Jocel', 'Vanesa', 'Janine', 'Nivelyn',
        'Pamela', 'Hannah', 'Gina', 'Maja', 'Kathryn', 'Liza', 'Rose Ann', 'Nadine', 'Lara'
    );

    protected static $lastName = array(
        'Frane', 'Rosario', 'Nonog', 'Balecha', 'Abendanio', 'Ramilio', 'Lacerna', 'Villanueva', 'Padilla',
        'Paredes', 'Feliciano', 'Contreras', 'Tagos', 'Rocamora', 'Sales', 'Ariola', 'Oro', 'Navales', 'Atotubo',
        'Llorca', 'Panalangin', 'Dionisio', 'Cruz', 'Esteban', 'Santos', 'Aquino'
    );

    protected static $suffix = array('Jr.', 'Sr.', 'I', 'II', 'III', 'IV', 'V', 'MD', 'PhD', );
}
