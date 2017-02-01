<?php

namespace Faker\Provider\en_EG;

use Faker\Calculator\Luhn;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );


    protected static $firstNameMale = array(
        "Ahmed", "Ali", "Islam", "Khaled", "Mohamed", "Ramy", "Hassan", "Mahmoud", "Adel", "Eyad", "Sameh", "Nabeel", "Tamer", "Mohannad",
        "Kareem", "Amr", "Omar", "Ashraf", "Belal", "Saad", "Ayman", "Hany", "Waael", "Alaa",
        "Hany", "Ayman", "Khaled", "Bhaa", "Saber", "Waleed", "Sherif", "Hamza", "Kamal", "Hossam",
        "Atef", "Medhat", "Osman", "Mourad", "Amir", "Eisa", "Osama", "Wagdy", "Haythem", "Emad", "Tarek",
        "Maher", "Hamada", "Husseen", "Wael", "Anwar", "Magdy", "Nasr", "Naser", "Essam", "Samir", "Bassem",
        "Reda", "Foad", "Raafat", "Ramzy", "Kamel", "Badr", "Ramzy", "Moemen", "Ebrakeem",
        "Samer", "Bahgat", "Ezzat", "Ehab", "Saad", "Taha", "Rady", "Yasser", "Mohab", "Hamdy",


    );


    protected static $firstNameFemale = array(
        'Eman', 'Amyra', 'Abeer', 'Joudy', 'Joumana', 'Jana', 'Janna', 'Sabah', "Noha",
        "Enas", "Ghada", "Hanan", "Madeeha", "Mervat", "Mona", "Maha", "Suzan", "Mariem", "Shery",
        "Dina", "Mahetab", "Elshaymaa", "Hoda", "Sara", "hadeer", "Hanaa", "Fayza", "Salwa", "Amal",
        "Doaa", "Nadeen", "Faryda", "Mai", "Naglaa", "Marwa", "Tasneem", "Mayar", "Amina", "Sama", "Malak", "Sama",
        "Israa", "Aya", "Ayat", "Basma", "Bousy", "Saly", "Nashwa", "Shaymaa", "Gehan", "Ola", "Jasmin",
        "Layla", "Salma", "Nahed", "Hana", "Radwa", "Reem", "Enas", "Ensaf", "Azza", "Karyma",
        "Amany", "Nermeen"
    );

    protected static $lastName = array(
        'Khalil', 'Zaky', "Fawzy", "Abo Klela", "Foad", "Hasaneen", "Mubarak", "Al-Seedy", "Al-Kabeer", "Al-Sheemy", "Al-Sherbeny",
        "Awny", "Gomaa", "Khamees", "Rabee", "Al-Seesy", "Al-Sagheer", "Yousry", "Khalaf", "Nageeb", "Al-nakeeb", "Shaker",
        "Ibraheem", "Fathey", "Makram", "Almnshawy", "Abbas", "Abdalaleem", "Abdalbary", "Abdalfatah",
        "Abdalgwad", "Abbasy", "Abdalaziz", "Abdalftah", "Abdalhady", "Abdalkawy", "Abdalkrem", "Abdallah", "Abdallatef", "Abdalmeged", "Abdalmlk",

    );


    /**
     * @example 10101010101010
     */
    public static function nationalIdNumber()
    {
        $partialValue = static::numerify(1 . str_repeat('#', 14));
        return Luhn::generateLuhnNumber($partialValue);
    }


}
