<?php

namespace Faker\Provider\me_ME;

class Address extends \Faker\Provider\Address
{
    protected static $postcode = array('#####');

    protected static $streetPrefix = array(
        'Bulevar',
    );

    protected static $street = array(
        '1. crnogorske brigade narodne odbrane', '1. maja', '1. proleterske brigade', '10. crnogorske brigade', '13. jula', '18. februara', '18. jula', '19. decembra', '2. crnogorskog bataljona', '2. proleterske dalmatinske brigade', '27. marta', '3. sandžačke proleterske brigade', '4. jula', '4. proleterske brigade', '5. proleterske brigade', '6. crnogorske udarne brigade', '7. omladinske brigade', '8. crnogorske udarne brigade', '8. jula', '8. marta', '9. crnogorske brigade', 'Admirala Zmajevića', 'Aerodromska', 'Aleksandra Ace Prijića', 'Aleksandra Lesa Ivanovića', 'Aleksandra Puškina', 'Alekse Šantića', 'Alfreda Tenisona', 'Andrije Paltašića', 'Andrijevička', 'Antona Čehova', 'Arhitekte Milana Popovića', 'Arsenija Čarnojevića', 'Atinska', 'AVNOJ-a', 'Balkanska', 'Balšića', 'Barska', 'Belvederska', 'Beogradska', 'Berska', 'Bjelasička', 'Bjelopoljska', 'Blaža Jovanovića', 'Bohinjska', 'Bokeljske mornarice', 'Bokeška', 'Bore i Ramiza', 'Borisa Kidriča', 'Boška Buhe', 'Botunska', 'Bracana Bracanovića', 'Braće Ribar', 'Branislava Lekića', 'Branka Ćopića', 'Branka Deletića', 'Branka Radičevića', 'Bratonožićka', 'Bratstva i jedinstva', 'Bregalnička', 'Buda Tomovića', 'Budvanska', 'Bulevar Džordža Vašingtona', 'Bulevar Ivana Crnojevića', 'Bulevar Mihaila Lalića', 'Bulevar revolucije', 'Bulevar Save Kovačevića', 'Cara Lazara', 'Carev laz', 'Ceklinska', 'Cetinjski put', 'Crnogorskih serdara', 'Crnojevića', 'Cvijetna', 'Dajbabska', 'Dalmatinska', 'Danilovgradska', 'Desanke Maksimović', 'Dositeja Obradovića', 'Dr Blaža Raičevića', 'Dr Filipa Šoća', 'Dr Milutina Kažića', 'Dr Nika Miljanića', 'Dr Saše Božovića', 'Drvarska', 'Dukljanska', 'Dunavska', 'Durmitorska', 'Dušana Duće Mugoše', 'Dušana Milutinovića', 'Dušana Vukotića', 'Džan', 'Đečevića', 'Đoka Miraševića', 'Đuje Jovanovića', 'Đure Daničića', 'Emila Zole', 'Franca Prešerna', 'Franca Rozmana', 'Fruškogorska', 'Fundinske bitke', 'Gavra Vukovića', 'Gavrila Principa', 'Generala Sava Orlovića', 'Georgi Dimitrova', 'Geteova', 'Goce Delčeva', 'Gojka Radonjića', 'Goranska', 'Gorička', 'Grahovačka', 'Hajduk Veljkova', 'Hercegnovska', 'Hercegovačka', 'Husinskih rudara', 'Igmanska', 'Ilije Milačića', 'Isidore Sekulić', 'Ivana Cankara', 'Ivana Gorana Kovačića', 'Ivana Milutinovića', 'Ivana Vujoševića', 'Ivangradska', 'Ive Andrića', 'Iveze Vukova', 'Jadranska', 'Janka Đanovića', 'Janka Vukotića', 'Jaroslava Čermaka', 'Jelene Balšić', 'Jerevanska', 'Jezerska', 'Josipa Broza Tita', 'Jovana Cvijića', 'Jovana Ćetkovića', 'Jovana Tomaševića', 'Kadinjača', 'Karađorđeva', 'Kninska', 'KNOJ-a', 'Kolašinska', 'Komska', 'Kosmajska', 'Kosovska', 'Kosovskih junaka', 'Koste Racina', 'Kotorska', 'Kozaračka', 'Kragujevačka', 'Kralja Nikole', 'Kraljevačka', 'Lamela', 'Lazara Sočice', 'Lička', 'Lovćenska', 'Ludviga Kube', 'Luke Boljevića', 'Lutovačkih barjaktara', 'Ljesanska', 'Ljeskopoljska', 'Ljube Čupića', 'Ljube Nenadovića', 'Ljubljanska', 'Ljubostinjskih junaka', 'Ljubovićka', 'Majevička', 'Manastirska', 'Marka Mašanovića', 'Marka Miljanova', 'Matije Gupca', 'Mediteranska', 'Medunska', 'Meše Selimovića', 'Mila Milunovića', 'Mila Peruničića', 'Mila Radunovića', 'Miladina Popovića', 'Milana Kuča', 'Milana Raičkovića', 'Miloja Pavlovića', 'Miloša Obilića', 'Miljana Vukova', 'Miodraga Bulatovića', 'Mirka Banjevića', 'Mirka Vešovića', 'Mitra Bakića', 'Mojkovačka', 'Mojsija Zečevića', 'Moračka', 'Moskovska', 'Moskovski most', 'Mosorska', 'Most Milenijum', 'Most žrtava 5. maja 1944.', 'Mušikića', 'Neznanih junaka', 'Nikca od Rovina', 'Nikole Đurkovića', 'Nikole Lopičića', 'Nikole Tesle', 'Nikšićka', 'Novaka Miloševa', 'Novaka Ramova', 'Novosadska', 'Njegoševa', 'Obala Ribnice', 'Obodska', 'Ohridska', 'Oktobarske revolucije', 'Omera Abdovića', 'Omladinskih brigada', 'Orijenska', 'Pariske komune', 'Partizanski put', 'Pera Počeka', 'Perojska', 'Petra Kočića', 'Petra Lubarde', 'Petra Prlje', 'Pilota Cvetkovića i Milojevića', 'Piperska', 'Pivska', 'Plavska', 'Plitvička', 'Plužinska', 'Pljevaljska', 'Pohorska', 'Polimska', 'Popa Boška Popovića', 'Predraga Golubovića', 'Princa Mihaila Petrovića', 'Prištinska', 'Prolaz Generala Dožića', 'Radnička', 'Radoja Jovanovića', 'Radomira Ivanovića', 'Radosava Burića', 'Radosava Popovića', 'Radovana Petrovića', 'Radovana Vukanovića', 'Radovana Zogovića', 'Radula Rusa Radulovića', 'Rista Stijovića', 'Rogamska', 'Rovačka', 'Ruža', 'Sarajevska', 'Sava Lubarde', 'Sava Nikolića', 'Savska', 'Serdara Jola Piletića', 'Sergeja Jesenjina', 'Sime Matavulja', 'Simona Ivanova', 'Sitnička', 'Skadarska', 'SKOJ-a', 'Skopska', 'Slavonska', 'Slobodana Škerovića', 'Slobode', 'Sloge', 'Spasa Nikolića', 'Spasoja Raspopovića', 'Srednjoškolska', 'Stanka Dragojevića', 'Stefana Mitrova Ljubiše', 'Steva Boljevića', 'Steva Kraljevića', 'Studentska', 'Svetog Petra Cetinjskog', 'Svetozara Markovića', 'Šarkića', 'Šavnička', 'Španskih boraca', 'Špira Mugoše', 'Tivatska', 'Trebinjska', 'Trg Božane Vučinić', 'Trg golootočkih žrtava', 'Trg Nikole Kovačevića', 'Trg republike', 'Trifuna Đukića', 'Triglavska', 'Tripa Kukolja', 'Tuška', 'Ulcinjska', 'Užička', 'Valtazara Bogišića', 'Vardarska', 'Vasa Raičkovića', 'Velimira Stojanovića', 'Velimira Terzića', 'Veljka Jankovića', 'Vezirov most', 'Vinogradska', 'Vitomira Vita Nikolića', 'Vlada Ćetkovića', 'Vlada Martinovića', 'Vladike Danila', 'Vladike Petra I', 'Vladike Vasilija Petrovića', 'Vojisavljevića', 'Vojislava Grujića', 'Vojvode Ilije Plamenca', 'Vojvode Mijajla Nišina', 'Vojvode Mirka Petrovića', 'Vojvode Raduna', 'Vojvode Vase Bracanova', 'Vojvođanska', 'Vrela 2.', 'Vrela 3.', 'Vrela 4.', 'Vrela 5.', 'Vrela 6.', 'Vučedolska', 'Vuka Đurovića', 'Vuka Karadžića', 'Vuka Mandušića', 'Vuka Mićunovića', 'Vukice Mitrović', 'Vukosava Božovića', 'Zagrebačka', 'Zetskih vladara', 'Zetskog odreda', 'Zmaj Jovina', 'Žabljačka', 'Žarka Zrenjanina', 'Žikice Jovanovića Španca', 'Žrtava fašizma',
    );

    protected static $streetNameFormats = array(
        '{{street}}',
        '{{streetPrefix}} {{street}}',
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    /**
     * @link http://sr.wikipedia.org/sr-el/%D0%93%D1%80%D0%B0%D0%B4_%D1%83_%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B8
     */
    protected static $cityNames = array(
       'Bar', 'Budva', 'Herceg Novi', 'Kotor', 'Tivat', 'Ulcinj', 'Podgorica', 'Cetinje', 'Nikšić', 'Danilovgrad', 'Žabljak', 'Kolašin', 'Andrijevica', 'Berane', 'Bijelo Polje', 'Mojkovac', 'Plav', 'Plužine', 'Pljevlja', 'Rožaje', 'Šavnik',
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static $country = array(
        'Ostrvo Asension', 'Andora', 'Ujedinjeni Arapski Emirati', 'Avganistan', 'Antigva i Barbuda', 'Angvila', 'Albanija', 'Armenija', 'Holandski Antili', 'Angola', 'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Aruba', 'Alandska ostrva', 'Azerbejdžan', 'Bosna i Hercegovina', 'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Sv. Bartolomej', 'Bermuda', 'Brunej', 'Bolivija', 'Brazil', 'Bahami', 'Butan', 'Buve Ostrva', 'Bocvana', 'Belorusija', 'Belise', 'Kanada', 'Kokos (Keling) Ostrva', 'Demokratska Republika Kongo', 'Centralno Afrička Republika', 'Kongo', 'Švajcarska', 'Obala Slonovače', 'Kukova Ostrva', 'Čile', 'Kamerun', 'Kina', 'Kolumbija', 'Ostrvo Kliperton', 'Kostarika', 'Srbija i Crna Gora', 'Kuba', 'Kape Verde', 'Božićna Ostrva', 'Kipar', 'Češka', 'Nemačka', 'Dijego Garsija', 'Džibuti', 'Danska', 'Dominika', 'Dominikanska Republika', 'Alžir', 'Seuta i Melilja', 'Ekvador', 'Estonija', 'Egipat', 'Zapadna Sahara', 'Eritreja', 'Španija', 'Etiopija', 'Evropska unija', 'Finska', 'Fidži', 'Folklandska Ostrva', 'Mikronezija', 'Farska Ostrva', 'Francuska', 'Gabon', 'Velika Britanija', 'Grenada', 'Gruzija', 'Francuska Gvajana', 'Gurnsi', 'Gana', 'Gibraltar', 'Grenland', 'Gambija', 'Gvineja', 'Gvadelupe', 'Ekvatorijalna Gvineja', 'Grčka', 'Južna Džordžija i Južna Sendvič Ostrva', 'Gvatemala', 'Guam', 'Gvineja-Bisao', 'Gvajana', 'Hong Kong (S. A. R. Kina)', 'Herd i Mekdonald Ostrva', 'Honduras', 'Hrvatska', 'Haiti', 'Mađarska', 'Kanarska ostrva', 'Indonezija', 'Irska', 'Izrael', 'Ostrvo Man', 'Indija', 'Britansko Indijska Okeanska Teritorija', 'Irak', 'Iran', 'Island', 'Italija', 'Džersi', 'Jamajka', 'Jordan', 'Japan', 'Kenija', 'Kirgizstan', 'Kambodža', 'Kiribati', 'Komorska Ostrva', 'Sent Kits i Nevis', 'Severna Koreja', 'Južna Koreja', 'Kuvajt', 'Kajmanska Ostrva', 'Kazahstan', 'Laos', 'Liban', 'Sent Lucija', 'Lihtenštajn', 'Šri Lanka', 'Liberija', 'Lesoto', 'Litvanija', 'Luksemburg', 'Letonija', 'Libija', 'Maroko', 'Monako', 'Moldavija', 'Crna Gora', 'Sv. Martin', 'Madagaskar', 'Maršalska Ostrva', 'Makedonija', 'Mali', 'Mijanmar', 'Mongolija', 'Makao (S. A. R. Kina)', 'Severna Marijanska Ostrva', 'Martinik', 'Mauritanija', 'Monserat', 'Malta', 'Mauricius', 'Maldivi', 'Malavi', 'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nova Kaledonija', 'Niger', 'Norfolk Ostrvo', 'Nigerija', 'Nikaragva', 'Holandija', 'Norveška', 'Nepal', 'Nauru', 'Niue', 'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Francuska Polinezija', 'Papua Nova Gvineja', 'Filipini', 'Pakistan', 'Poljska', 'Sen Pjer i Mikelon', 'Pitcairn', 'Porto Riko', 'Palestinska Teritorija', 'Portugal', 'Palau', 'Paragvaj', 'Katar', 'Ostala okeanija', 'Rejunion', 'Rumunija', 'Srbija', 'Rusija', 'Ruanda', 'Saudijska Arabija', 'Solomonska Ostrva', 'Sejšeli', 'Sudan', 'Švedska', 'Singapur', 'Sveta Jelena', 'Slovenija', 'Svalbard i Janmajen Ostrva', 'Slovačka', 'Sijera Leone', 'San Marino', 'Senegal', 'Somalija', 'Surinam', 'Sao Tome i Principe', 'Salvador', 'Sirija', 'Svazilend', 'Tristan da Kunja', 'Turks i Kajkos Ostrva', 'Čad', 'Francuske Južne Teritorije', 'Togo', 'Tajland', 'Tadžikistan', 'Tokelau', 'Istočni Timor', 'Turkmenistan', 'Tunis', 'Tonga', 'Turska', 'Trinidad i Tobago', 'Tuvalu', 'Tajvan', 'Tanzanija', 'Ukrajina', 'Uganda', 'Manja Udaljena Ostrva SAD', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan', 'Vatikan', 'Sent Vinsent i Grenadini', 'Venecuela', 'Britanska Devičanska Ostrva', 'S.A.D. Devičanska Ostrva', 'Vijetnam', 'Vanuatu', 'Valis i Futuna Ostrva', 'Samoa', 'Jemen', 'Majote', 'Južnoafrička Republika', 'Zambija', 'Zimbabve',
    );

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
