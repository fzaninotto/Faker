<?php

namespace Faker\Provider\lt_LT;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
    );

    protected static $companySuffix = array('UAB', 'AB', 'IĮ', 'MB', 'VŠĮ');

    /**
     * @link https://lt.wikipedia.org/wiki/Kategorija:Profesijos
     **/
    protected static $jobTitles = array(
        'Aktorius', 'Akušeris', 'Alchemistas', 'Artistas', 'Astronomas', 'Auksakalys', 'Autobusų dispečeris',
        'Aviatorius', 'Baldžius', 'Barista', 'Barmenas', 'Barzdaskutys', 'Bendrosios praktikos slaugytojas',
        'Bendruomenės slaugytojas', 'Burliokas', 'Dailidė', 'Dailininkas', 'Darbo asistentas', 'Daržininkas',
        'Dievdirbys', 'Dispečeris', 'Ekspertas', 'Felčeris', 'Finansų makleris', 'Fotografas', 'Gidas', 'Gydytojas',
        'Ginklakalys', 'Girininkas', 'Inžinierius', 'Jūreivis', 'Juvelyras', 'Kapelmeisteris', 'Karininkas',
        'Kaskadininkas', 'Komivojažierius', 'Konsultantas', 'Korepetitorius', 'Kubilius', 'Laivo kapitonas',
        'Lėktuvų dispečeris', 'Locmanas', 'Mahoutas', 'Manekenas', 'Mėgėjas', 'Menininkas', 'Mokslininkas',
        'Pameistrys', 'Paštininkas', 'Pienininkas', 'Pilotas', 'Policininkas', 'Portjė', 'Prodiuseris', 'Puodžius',
        'Račius', 'Rašytojas', 'Raštvedys', 'Reporteris', 'Režisierius', 'Sakalininkas', 'Sekretorius', 'Siuvėjas',
        'Skulptorius', 'Someljė', 'Sportininkas', 'Stalius', 'Statistas', 'Stiklo pūtimas', 'Stividoras',
        'Taikinimo tarpininkas', 'Tautodailininkas', 'Tinklo administratorius', 'Tyrėjas', 'Ugniagesys', 'Urėdas',
        'Vairuotojas', 'Virėjas', 'Virtuvės šefas', 'Zakristijonas', 'Auditorius', 'Mokesčių patarėjas', 'Notaras',
        'Patentinis patikėtinis', 'Vertėjas', 'Vertėjas žodžiu', 'Dainininkas', 'Dirigavimas', 'Kompozitorius',
        'Muzikantas', 'Apskaitininkas', 'Atestuotas finansų analitikas', 'Atestuotas vadybos konsultantas',
        'Auditoriaus padėjėjas', 'Auditorius', 'Biržos brokeris', 'Brokeris', 'Buhalteris', 'Draudimo agentas',
        'Ekonomistas', 'Fabrikantas', 'Finansinės rizikos valdytojas', 'Finansininkas', 'Finansų analitikas',
        'Finansų patarėjas', 'Investavimo patarėjas', 'Investuotojas', 'Kotiruotojas', 'Mokestininkas',
        'Nekilnojamojo turto agentas', 'Paskolų brokeris', 'Pirklys', 'Prekybos agentas', 'Spekuliantas',
        'Vadybininkas', 'Verslininkas'
    );

    public function jobTitle()
    {
        return static::randomElement(static::$jobTitles);
    }
}
