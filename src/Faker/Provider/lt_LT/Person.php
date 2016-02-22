<?php

namespace Faker\Provider\lt_LT;

use Faker\Calculator\Luhn;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
    );

    /**
     * {@link} http://vardai.nepo.lt/
     **/
    protected static $firstNameMale = array(
        "Vinardas", "Barmantas", "Geistautas", "Josvainė", "Krizantas", "Vytartas", "Gytautas",
        "Jocas", "Edminas", "Irenilus", "Vilimantas", "Vaišvilas", "Arimantas", "Liauteris", "Viačislavas",
        "Kirbutas", "Jevgenijus", "Monikas", "Nastas", "Stanislonas", "Marcelis", "Antanas", "Jopnas", "Lemutė",
        "Viloras", "Aušvydas", "Dominykas", "Alibinas", "Henrichas", "Medeardas", "Vilgelminas", "Egenijus",
        "Juras", "Vilandas", "Juozapotas", "Kertautas", "Tulvirdas", "Feleksas", "Bagdonas", "Arvydas", "Mavatas",
        "Vaidelutis", "Ralfas", "Medastas", "Miderdas", "Richardas", "Vitus", "Irmantas", "Viliusis", "Žygintas",
        "Benadas", "Sigirdas", "Žilmanas", "Bolesis", "Parfionas", "Eigėlas", "Helerijus", "Gustys", "Vicius",
        "Kleopas", "Silvas", "Vladas", "Svajus", "Vylimas", "Jacentas", "Sigismundas", "Palmiras", "Oreginas",
        "Vigilijus", "Svaidargas", "Augustis", "Armis", "Giliaras", "Radmantas", "Drovydas", "Sitas", "Singailė",
        "Džiugilas", "Egilas", "Balandis", "Stamislovas", "Aridas", "Ingoldas", "Gedvardas", "Renadas", "Vientautas",
        "Elmontas", "Michejus", "Veisturas", "Putviras", "Mantas", "Julionas", "Rodrigas", "Ronaldas", "Nadas",
        "Tautvaldas", "Sirijus", "Aldevynas", "Vincencijus", "Edgardas"
    );

    protected static $firstNameFemale = array(
        "Aliūnė", "Kantvyda", "Mykalina", "Galkantė", "Rolana", "Dorina", "Dalija",
        "Mudrė", "Gražytė", "Michasė", "Vincentė", "Prantiška", "Liudviga", "Mėlana", "Miroleta",
        "Kangailė", "Jeugenija", "Palagija", "Anida", "Rigina", "Daivutė", "Sandora", "Marka", "Childa",
        "Ksavera", "Raima", "Alvirutė", "Alita", "Uolė", "Leonova", "Marija", "Eitė", "Elfrosina",
        "Eigė", "Liuzija", "Polkarija", "Erdvila", "Dolita", "Elza", "Vilgelma", "Drovydė", "Gintenė",
        "Tariotė", "Ougenija", "Yda", "Agripina", "Liamutė", "Emilja", "Enata", "Vladimera", "Ula", "Alfaga",
        "Vijolita", "Veranika", "Georgina", "Germinė", "Dzidra", "Egona", "Burkanta", "Ritma", "Fedosija",
        "Josifa", "Ramytė", "Vilgarda", "Vėjūnė", "Kamita", "Iva", "Gedgailė", "Marijina", "Sofi", "Auksana",
        "Almonė", "Benidikta", "Norminta", "Kirmantė", "Juozapava", "Vitorija", "Domincelė", "Rusana", "Lucyna",
        "Kamilija", "Vientautė", "Etmyra", "Barutė", "Kantminė", "Sanita", "Agotė", "Dangirda", "Daugotė",
        "Vaišviltė", "Nerutė", "Kostė", "Burtautė", "Mintara", "Gaudvyda", "Alga", "Elinora", "Iliminata",
        "Aegina", "Idilija"
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     **/
    protected static $lastName = array(
        "Azlauskas", "Tankevičius", "Etrauskas", "Ankauskas", "Ukauskas", "Utkus", "Alčiūnas",
        "Aulauskas", "Asiliauskas", "Baranauskas", "Urbonas", "Navickas", "Ramanauskas", "Savickas",
        "Rimkus", "Žilinskas", "Šimkus", "Kavaliauskas", "Sakalauskas", "Ivanauskas", "Adomaitis",
        "Žemaitis", "Kairys", "Kaminskas", "Mikalauskas", "Petkevičius", "Bagdonas", "Petraitis",
        "Černauskas", "Vaitkevičius", "Mickevičius", "Urbanavičius", "Jurevičius", "Marcinkevičius",
        "Pocius", "Paškevičius", "Rutkauskas", "Mackevičius", "Juška", "Malinauskas", "Sinkevičius",
        "Radzevičius", "Sadauskas", "Kučinskas", "Mažeika", "Vitkauskas", "Vaitkus", "Dambrauskas",
        "Naujokas", "Sabaliauskas", "Mockus", "Bernotas", "Rakauskas", "Lukoševičius", "Norkus", "Butkevičius",
        "Barkauskas", "Lukošius", "Kubilius", "Barauskas", "Rinkevičius", "Jonaitis", "Krasauskas", "Vilkas",
        "Šukys", "Lukaševičius", "Markevičius", "Valaitis", "Mačiulis", "Aleksandravičius", "Venckus",
        "Grigaliūnas", "Juškevičius", "Baltrušaitis", "Morkūnas", "Tamošiūnas", "Adomavičius", "Stonkus",
        "Januškevičius", "Lapinskas", "Šidlauskas", "Stankus", "Banys", "Bartkus", "Povilaitis", "Misiūnas",
        "Rimkevičius", "Mickus", "Karpavičius", "Budrys", "Matulevičius", "Kazakevičius", "Gudaitis", "Račkauskas",
        "Steponavičius", "Noreika", "Brazauskas", "Grigas", "Vanagas", "Petravičius",
        "Misevičius", "Miškinis", "Visockas", "Bružas", "Vyšnauskas", "Astrauskas", "Karalius", "Antanavičius",
        "Šmidtas", "Jakubauskas", "Juknevičius", "Jakštas", "Urbonavičius", "Meškauskas", "Narkevičius", "Tamašauskas",
        "Kalvaitis", "Vaitiekūnas", "Klimas", "Laurinavičius", "Arlauskas", "Petkus", "Simanavičius", "Šulcas",
        "Vaičiulis", "Janušauskas", "Vaičiūnas", "Jokubauskas", "Karvelis", "Kasperavičius", "Ališauskas", "Miliauskas",
        "Giedraitis", "Vitkus", "Gricius", "Stanevičius", "Jurkevičius", "Kulikauskas", "Grigaitis",
        "Bukauskas", "Šalkauskas", "Jurgaitis", "Linkevičius", "Čepas", "Slavinskas", "Jonušas", "Leonavičius",
        "Klimavičius", "Katinas", "Ragauskas", "Balsys", "Markūnas", "Jasiūnas", "Lukauskas", "Alekna", "Burba",
        "Janavičius", "Pečiulis", "Vaškevičius", "Martinkus", "Velička", "Janulevičius", "Peteraitis", "Čepulis",
        "Blažys", "Kalinauskas", "Petronis", "Poška", "Višniauskas", "Blaževičius", "Cibulskas", "Pocevičius",
        "Gailius", "Gasiūnas", "Narbutas", "Jablonskas", "Mockevičius", "Norvaišas", "Grigonis", "Lisauskas",
        "Liutkevičius", "Vilimas", "Masiulis", "Buivydas", "Kriščiūnas", "Liutkus", "Andriuškevičius", "Antanaitis",
        "Markauskas", "Motiejūnas", "Banevičius", "Bieliauskas", "Kvedaras", "Strazdas", "Žukas", "Gedvilas",
        "Kriaučiūnas", "Ramonas", "Poškus", "Stonys"
    );

    protected static $titleMale = array('Dr.');

    protected static $titleFemale = array('Dr.');

    private static $femaleLastNameSuffix = array(
        'ienė', 'aitė', 'ė'
    );

    public function lastName()
    {
        //get male last name
        $lastName = static::randomElement(static::$lastName);
        if (rand(0, 1)) {
            //Make last name for female
            return substr($lastName, 0, -2) . static::randomElement(static::$femaleLastNameSuffix);
        }
        return $lastName;
    }

    public function lastNameMale()
    {
        return static::randomElement(static::$lastName);
    }

    public function lastNameFemale()
    {
        $lastName = static::randomElement(static::$lastName);
        return substr($lastName, 0, -2) . static::randomElement(static::$femaleLastNameSuffix);
    }

    public function driverLicence()
    {
        return $this->bothify("??######");
    }

    public function passportNumber()
    {
        return $this->bothify("??#######");
    }

    /**
     * National Personal Identity number (personas kods)
     * @link https://en.wikipedia.org/wiki/National_identification_number#Latvia
     * @param \DateTime $birthdate
     * @param string $gender
     * @return string on format XXXXXX-XXXXX
     */
    public function personalIdentityNumber(\DateTime $birthdate = null, $gender = self::GENDER_MALE)
    {
        if (!$birthdate) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }

        $datePart = $birthdate->format('ymd');
        $randomDigits = (string) static::numerify('###');

        $checksum = Luhn::computeCheckDigit($datePart . $randomDigits);

        return ($gender === self::GENDER_MALE ? 3 : 2) .  $datePart . $randomDigits . $checksum;
    }
}
