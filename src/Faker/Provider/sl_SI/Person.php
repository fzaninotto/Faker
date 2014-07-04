<?php

namespace Faker\Provider\sl_SI;

class Person extends \Faker\Provider\Person
{

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * {@link} http://www.stat.si/imena_top_imena_spol.asp?r=True
     * {@link} http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */

    protected static $firstNameMale = array(
        'Franc', 'Janez', 'Anton', 'Ivan', 'Jožef', 'Andrej', 'Marko', 'Jože', 'Marjan', 'Peter', 'Milan', 'Matej', 'Tomaž', 'Branko', 'Stanislav',
        'Luka', 'Aleš', 'Bojan', 'Robert', 'Boštjan', 'Rok', 'Matjaž', 'Gregor', 'Martin', 'Miha', 'Alojz', 'Igor', 'Boris', 'Dušan', 'Dejan', 'David',
        'Jan', 'Uroš', 'Jure', 'Mitja', 'Blaž', 'Simon', 'Žiga', 'Nejc', 'Darko', 'Klemen', 'Drago', 'Primož', 'Jernej', 'Štefan', 'Matic', 'Žan',
        'Aleksander', 'Miran', 'Roman', 'Denis', 'Gašper', 'Tadej', 'Vladimir', 'Aljaž', 'Srečko', 'Anže', 'Slavko', 'Janko', 'Mirko', 'Borut', 'Damjan',
        'Jaka', 'Miroslav', 'Jakob', 'Matija', 'Zoran', 'Stanko', 'Alojzij', 'Alen', 'Danijel', 'Mihael', 'Tilen', 'Domen', 'Nik', 'Marijan', 'Goran',
        'Sašo', 'Vinko', 'Iztok', 'Rudolf', 'Jurij', 'Viktor', 'Matevž', 'Andraž', 'Urban', 'Leon', 'Zvonko', 'Vid', 'Zdravko', 'Pavel', 'Edvard',
        'Danilo', 'Filip', 'Rajko', 'Samo', 'Zlatko', 'Gorazd', 'Tim', 'Dragan', 'Bogdan', 'Benjamin', 'Sandi', 'Ludvik', 'Emil', 'Josip', 'Kristjan',
        'Sebastjan', 'Erik', 'Mark', 'Ciril', 'Franci', 'Vojko', 'Frančišek', 'Silvo', 'Maks', 'Albin', 'Damir', 'Željko', 'Damijan', 'Aljoša', 'Božidar',
        'Leopold', 'Timotej', 'Daniel', 'Dominik', 'Gal', 'Viljem', 'Silvester', 'Miloš', 'Lovro', 'Vincenc', 'Stojan', 'Karel', 'Patrik', 'Niko',
        'Tomislav', 'Davorin', 'Nikola', 'Maj', 'Anej', 'Valentin', 'Mario', 'Franjo', 'Saša', 'Grega', 'Vlado', 'Mladen', 'Ladislav', 'Tine', 'Kristijan',
        'Zdenko', 'Aleksandar', 'Davor', 'Bogomir', 'Lan', 'Karl', 'Sebastijan', 'Stjepan', 'Aleks', 'Ernest', 'Ivo', 'Maksimiljan', 'Jasmin', 'Elvis',
        'Rado', 'Avgust', 'Valter', 'Marcel', 'Jani', 'Nenad', 'Ervin', 'Izidor', 'Ignac', 'Petar', 'Adolf', 'Edin', 'Rene', 'Metod', 'Nikolaj', 'Nino',
        'Renato', 'Radovan', 'Ferdinand', 'Bruno', 'Bor', 'Albert', 'Sergej', 'Senad', 'Mirsad', 'Enej', 'Joško', 'Bernard', 'Hasan', 'Slobodan', 'Rudi',
        'Samir', 'Miro', 'Rafael', 'Cvetko', 'Luka', 'Nik', 'Žan', 'Jan', 'Žiga', 'Mark', 'Nejc', 'Matic', 'Anže', 'Filip', 'Jakob', 'Jaka', 'David',
        'Vid', 'Tim', 'Aljaž', 'Miha', 'Maks', 'Gal', 'Lan', 'Maj', 'Lovro', 'Rok', 'Anej', 'Tilen', 'Jure', 'Tian', 'Gašper', 'Patrik', 'Matevž',
        'Matija', 'Urban', 'Blaž', 'Val', 'Aleks', 'Erik', 'Marko', 'Martin', 'Leon', 'Tai', 'Bor', 'Oskar', 'Matej', 'Andraž', 'Enej', 'Taj', 'Liam',
        'Rene', 'Timotej', 'Tine', 'Domen', 'Alen', 'Benjamin', 'Svit', 'Teo', 'Tadej', 'Alex', 'Nace', 'Izak', 'Jernej', 'Ožbej', 'Dominik', 'Marcel',
        'Lukas', 'Aleksej', 'Jon', 'Klemen', 'Vito', 'Max', 'Jurij', 'Jaša', 'Kristjan', 'Lenart', 'Nikola', 'Tristan', 'Aleksander', 'Andrej', 'Niko',
        'Nino', 'Ažbe', 'Brin', 'Tomaž', 'Erazem', 'Gregor', 'Tevž', 'Gaber', 'Gabriel', 'Ian', 'Staš', 'Tarik', 'Bine', 'Mai', 'Nal', 'Adam', 'Denis',
        'Kevin', 'Peter', 'Tjaš', 'Jošt', 'Žak'

    );

    /**
     * {@link} http://www.stat.si/imena_top_imena_spol.asp?r=True
     * {@link} http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */

    protected static $firstNameFemale = array(
        'Marija', 'Ana', 'Maja', 'Irena', 'Mojca', 'Mateja', 'Nataša', 'Jožefa', 'Nina', 'Barbara', 'Jožica', 'Andreja', 'Petra', 'Frančiška',
        'Katja', 'Ivana', 'Anja', 'Sonja', 'Milena', 'Katarina', 'Tatjana', 'Tanja', 'Alenka', 'Terezija', 'Majda', 'Martina', 'Vesna', 'Tina',
        'Urška', 'Eva', 'Sara', 'Helena', 'Anica', 'Špela', 'Kristina', 'Dragica', 'Nada', 'Tjaša', 'Angela', 'Antonija', 'Nika', 'Darja', 'Olga',
        'Danica', 'Marjeta', 'Simona', 'Zdenka', 'Suzana', 'Vida', 'Lidija', 'Ivanka', 'Marta', 'Ljudmila', 'Sabina', 'Janja', 'Alojzija', 'Veronika',
        'Silva', 'Neža', 'Darinka', 'Karmen', 'Stanislava', 'Štefanija', 'Lara', 'Anita', 'Aleksandra', 'Brigita', 'Elizabeta', 'Ema', 'Metka',
        'Cvetka', 'Maša', 'Jana', 'Monika', 'Natalija', 'Nevenka', 'Pavla', 'Lucija', 'Slavica', 'Marjana', 'Lea', 'Jasmina', 'Renata', 'Branka',
        'Saša', 'Klara', 'Kaja', 'Tamara', 'Rozalija', 'Vera', 'Bernarda', 'Klavdija', 'Danijela', 'Lana', 'Erika', 'Zala', 'Bojana', 'Romana', 'Mira',
        'Jasna', 'Polona', 'Jelka', 'Mirjana', 'Manca', 'Sandra', 'Valentina', 'Teja', 'Valerija', 'Tadeja', 'Sanja', 'Laura', 'Mihaela', 'Ines',
        'Ida', 'Breda', 'Julijana', 'Maruša', 'Hana', 'Karolina', 'Nuša', 'Ksenija', 'Albina', 'Patricija', 'Gabrijela', 'Matilda', 'Julija', 'Amalija',
        'Vanja', 'Viktorija', 'Magdalena', 'Živa', 'Zofija', 'Vlasta', 'Ajda', 'Marjetka', 'Melita', 'Cecilija', 'Ljubica', 'Marina', 'Gordana',
        'Emilija', 'Pia', 'Marinka', 'Marica', 'Neja', 'Justina', 'Polonca', 'Nadja', 'Alja', 'Urša', 'Tea', 'Karin', 'Damjana', 'Milka', 'Nastja',
        'Doroteja', 'Milica', 'Marijana', 'Taja', 'Jerneja', 'Nives', 'Štefka', 'Slavka', 'Dušanka', 'Jelena', 'Andrejka', 'Larisa', 'Marjanca',
        'Stanka', 'Lilijana', 'Irma', 'Ana Marija', 'Rebeka', 'Mirjam', 'Miroslava', 'Zoja', 'Zlatka', 'Jolanda', 'Zvonka', 'Tinkara', 'Brina', 'Gaja',
        'Zora', 'Ela', 'Ivica', 'Hermina', 'Tia', 'Blanka', 'Iva', 'Iris', 'Erna', 'Žana', 'Liljana', 'Daša', 'Anka', 'Daniela', 'Hedvika', 'Vita',
        'Magda', 'Lina', 'Eva', 'Sara', 'Lara', 'Nika', 'Ana', 'Ema', 'Zala', 'Lana', 'Neža', 'Julija', 'Zoja', 'Hana', 'Ajda', 'Ela', 'Neja', 'Maja',
        'Manca', 'Nina', 'Klara', 'Maša', 'Mia', 'Kaja', 'Lina', 'Tia', 'Brina', 'Taja', 'Žana', 'Živa', 'Špela', 'Pia', 'Tinkara', 'Ula', 'Lucija',
        'Gaja', 'Alina', 'Anja', 'Naja', 'Vita', 'Iza', 'Zarja', 'Katarina', 'Neli', 'Larisa', 'Tina', 'Maruša', 'Teja', 'Tjaša', 'Iva', 'Laura',
        'Lea', 'Nuša', 'Mila', 'Alja', 'Zara', 'Tara', 'Lia', 'Valentina', 'Mija', 'Katja', 'Urška', 'Lili', 'Karin', 'Nikolina', 'Veronika',
        'Sofija', 'Ivana', 'Pika', 'Tea', 'Kristina', 'Luna', 'Aneja', 'Iris', 'Leja', 'Lejla', 'Kim', 'Rebeka', 'Tajda', 'Tiana', 'Tija', 'Tisa',
        'Patricija', 'Elena', 'Julia', 'Liza', 'Tamara', 'Daša', 'Ella', 'Kiara', 'Meta', 'Anika', 'Izabela', 'Nastja', 'Sofia', 'Stela', 'Ines',
        'Jerca', 'Loti', 'Ajla', 'Erika', 'Gloria', 'Inja', 'Viktorija'

    );

    /**
     * {@link} http://www.stat.si/imena_top_priimki.asp?r=True
     */

    protected static $lastName = array(
        'Novak', 'Horvat', 'Kovačič', 'Krajnc', 'Zupančič', 'Kovač', 'Potočnik', 'Mlakar', 'Vidmar', 'Kos', 'Golob', 'Turk', 'Božič', 'Kralj',
        'Korošec', 'Zupan', 'Bizjak', 'Hribar', 'Kotnik', 'Rozman', 'Kavčič', 'Petek', 'Kastelic', 'Oblak', 'Žagar', 'Kolar', 'Hočevar', 'Košir',
        'Koren', 'Klemenčič', 'Zajc', 'Medved', 'Knez', 'Petrič', 'Pirc', 'Zupanc', 'Hrovat', 'Pavlič', 'Kuhar', 'Lah', 'Uršič', 'Sever', 'Zorko',
        'Tomažič', 'Babič', 'Erjavec', 'Jerman', 'Jereb', 'Majcen', 'Pušnik', 'Kranjc', 'Rupnik', 'Lesjak', 'Breznik', 'Perko', 'Dolenc', 'Pavlin',
        'Pečnik', 'Furlan', 'Vidic', 'Močnik', 'Logar', 'Jenko', 'Ribič', 'Tomšič', 'Janežič', 'Žnidaršič', 'Černe', 'Kovačević', 'Maček', 'Jelen',
        'Marolt', 'Fras', 'Blatnik', 'Gregorič', 'Pintar', 'Zadravec', 'Kokalj', 'Lešnik', 'Hren', 'Bezjak', 'Mihelič', 'Leban', 'Petrović', 'Cerar',
        'Čeh', 'Dolinar', 'Vidovič', 'Jug', 'Kocjančič', 'Kobal', 'Rus', 'Primožič', 'Bogataj', 'Kolenc', 'Kolarič', 'Lavrič', 'Nemec', 'Lazar', 'Kodrič',
        'Kosi', 'Mrak', 'Debeljak', 'Žižek', 'Tavčar', 'Krivec', 'Zver', 'Žibert', 'Ivančič', 'Jarc', 'Likar', 'Vodopivec', 'Vovk', 'Miklavčič', 'Toplak',
        'Kramberger', 'Hribernik', 'Gorenc', 'Skok', 'Leskovar', 'Stopar', 'Petrovič', 'Jazbec', 'Meglič', 'Simonič', 'Eržen', 'Blažič', 'Železnik',
        'Sitar', 'Marković', 'Jovanović', 'Šinkovec', 'Demšar', 'Hodžić', 'Jamnik', 'Javornik', 'Kočevar', 'Ramšak', 'Ilić', 'Filipič', 'Volk', 'Hozjan',
        'Nikolić', 'Bukovec', 'Podgoršek', 'Popović', 'Pintarič', 'Gorjup', 'Čuk', 'Sušnik', 'Bregar', 'Kokol', 'Kramar', 'Gomboc', 'Koželj', 'Mohorič',
        'Rutar', 'Mavrič', 'Rajh', 'Lebar', 'Šmid', 'Rožman', 'Resnik', 'Godec', 'Pogačnik', 'Gajšek', 'Bergant', 'Kumer', 'Hafner', 'Povše', 'Zemljič',
        'Rožič', 'Ambrožič', 'Mlinar', 'Bajc', 'Cvetko', 'Tratnik', 'Bevc', 'Kristan', 'Markovič', 'Zakrajšek', 'Savić', 'Kalan', 'Mlinarič', 'Humar',
        'Pogačar', 'Kaučič', 'Zorman', 'Jerič', 'Zalokar', 'Šuštar', 'Pirnat', 'Dolinšek', 'Štrukelj', 'Trček', 'Škof', 'Založnik', 'Smrekar', 'Zalar',
        'Kranjec'

    );

    protected static $title = array(
        'dr.', 'mag.', 'inž.', 'univ. dipl.', 'dipl.', 'univ. dipl. inž.', 'dipl. inž.', 'prof.', 'akad.', 'dr. med.', 'spec.'
    );

    private static $suffix = array();

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex slovenian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex slovenian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @example 'Novak'
     */
    public function lastName($gender = null)
    {
        return static::randomElement(static::$lastName);
    }

    public static function lastNameMale()
    {
        return static::lastName();
    }

    public static function lastNameFemale()
    {
        return static::lastName();
    }

    /**
     * @example '...'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
