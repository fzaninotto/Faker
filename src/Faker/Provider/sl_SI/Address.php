<?php

namespace Faker\Provider\sl_SI;

class Address extends \Faker\Provider\Address
{

    protected static $cityName = array(
        'Ajdovščina', 'Kozje', 'Ribnica', 'Apače', 'Kranj', 'Ribnica na Pohorju', 'Beltinci', 'Kranjska Gora', 'Rogaška Slatina', 'Benedikt',
        'Križevci', 'Rogašovci', 'Bistrica ob Sotli', 'Krško', 'Rogatec', 'Bled', 'Kungota', 'Ruše', 'Bloke', 'Kuzma', 'Selnica ob Dravi',
        'Bohinj', 'Laško', 'Semič', 'Borovnica', 'Lenart', 'Sevnica', 'Bovec', 'Lendava', 'Sežana', 'Braslovče', 'Litija', 'Slovenj Gradec',
        'Brda', 'Ljubljana', 'Slovenska Bistrica', 'Brezovica', 'Ljubno', 'Slovenske Konjice', 'Brežice', 'Ljutomer', 'Sodražica', 'Cankova',
        'Log - Dragomer', 'Solčava', 'Celje', 'Logatec', 'Središče ob Dravi', 'Cerklje na Gorenjskem', 'Loška Dolina', 'Starše', 'Cerknica',
        'Loški Potok', 'Straža', 'Cerkno', 'Lovrenc na Pohorju', 'Sveta Ana', 'Cerkvenjak', 'Luče', 'Sveta Trojica v Slovenskih goricah',
        'Cirkulane', 'Lukovica', 'Sveti Andraž v Slovenskih goricah', 'Črenšovci', 'Majšperk', 'Sveti Jurij ob Ščavnici', 'Črna na Koroškem',
        'Makole', 'Sveti Jurij v Slovenskih goricah', 'Črnomelj', 'Maribor', 'Sveti Tomaž', 'Destrnik', 'Markovci', 'Šalovci', 'Divača',
        'Medvode', 'Šempeter - Vrtojba', 'Dobje', 'Mengeš', 'Šenčur', 'Dobrepolje', 'Metlika', 'Šentilj', 'Dobrna', 'Mežica', 'Šentjernej',
        'Dobrova - Polhov Gradec', 'Miklavž na Dravskem polju', 'Šentjur', 'Dobrovnik', 'Miren - Kostanjevica', 'Šentrupert', 'Dol pri Ljubljani',
        'Mirna Peč', 'Škocjan', 'Dolenjske Toplice', 'Mislinja', 'Škofja Loka', 'Domžale', 'Mokronog - Trebelno', 'Škofljica', 'Dornava', 'Moravče',
        'Šmarje pri Jelšah', 'Dravograd', 'Moravske Toplice', 'Šmarješke Toplice', 'Duplek', 'Mozirje', 'Šmartno pri Litiji', 'Gorenja vas - Poljane',
        'Murska Sobota', 'Šmartno ob Paki', 'Gorišnica', 'Muta', 'Šoštanj', 'Gorje', 'Naklo', 'Štore', 'Gornja Radgona', 'Nazarje', 'Tabor',
        'Gornji Grad', 'Nova Gorica', 'Tišina', 'Gornji Petrovci', 'Novo mesto', 'Tolmin', 'Grad', 'Odranci', 'Trbovlje', 'Grosuplje', 'Oplotnica',
        'Trebnje', 'Hajdina', 'Ormož', 'Trnovska vas', 'Hoče - Slivnica', 'Osilnica', 'Trzin', 'Hodoš', 'Pesnica', 'Tržič', 'Horjul', 'Piran',
        'Turnišče', 'Hrastnik', 'Pivka', 'Velenje', 'Hrpelje - Kozina', 'Podčetrtek', 'Velika Polana', 'Idrija', 'Podlehnik', 'Velike Lašče',
        'Ig', 'Podvelka', 'Veržej', 'Ilirska Bistrica', 'Poljčane', 'Videm', 'Ivančna Gorica', 'Polzela', 'Vipava', 'Izola', 'Postojna', 'Vitanje',
        'Jesenice', 'Prebold', 'Vodice', 'Jezersko', 'Preddvor', 'Vojnik', 'Juršinci', 'Prevalje', 'Vransko', 'Kamnik', 'Ptuj', 'Vrhnika', 'Kanal ob Soči',
        'Puconci', 'Vuzenica', 'Kidričevo', 'Rače - Fram', 'Zagorje ob Savi', 'Kobarid', 'Radeče', 'Zavrč', 'Kobilje', 'Radenci', 'Zreče', 'Kočevje',
        'Radlje ob Dravi', 'Žalec', 'Komen', 'Radovljica', 'Železniki', 'Komenda', 'Ravne na Koroškem', 'Žetale', 'Koper', 'Razkrižje', 'Žiri',
        'Kostanjevica na Krki', 'Rečica ob Savinji', 'Žirovnica', 'Kostel', 'Renče - Vogrsko', 'Žužemberk'
    );

    protected static $buildingNumber = array('1##', '##', '##', '##', '##', '#');
    // protected static $streetSuffix = array();
    protected static $postcode = array('###0');
    protected static $streetNameFormats = array(
        'Šolska ulica', 'Prešernova ulica', 'Cankarjeva ulica', 'Vrtna ulica', 'Gregorčičeva ulica', 'Kajuhova ulica', 'Prečna ulica',
        'Levstikova ulica', 'Trubarjeva ulica', 'Mladinska ulica', 'Gubčeva ulica', 'Ljubljanska cesta', 'Partizanska ulica', 'Maistrova ulica',
        'Rožna ulica', 'Bevkova ulica', 'Jurčičeva ulica', 'Župančičeva ulica', 'Kolodvorska ulica', 'Partizanska cesta', 'Gasilska ulica',
        'Kidričeva ulica', 'Aškerčeva ulica', 'Kratka ulica', 'Nova ulica', 'Obrtniška ulica', 'Tomšičeva ulica', 'Cvetlična ulica',
        'Mariborska cesta', 'Ob potoku', 'Trg svobode', 'Ulica talcev', 'Kettejeva ulica', 'Kosovelova ulica', 'Finžgarjeva ulica', 'Ob gozdu',
        'Stara cesta', 'Vegova ulica', 'Prežihova ulica', 'Sončna ulica', 'Gradišče', 'Pristava', 'Brezje', 'Dolenja vas', 'Potok', 'Ravne',
        'Brdo', 'Dobrava', 'Draga', 'Javorje', 'Kal', 'Laze', 'Log', 'Planina', 'Podkraj', 'Selce', 'Trnovec', 'Bistrica', 'Gorenja vas',
        'Gorica', 'Lipa', 'Nova vas', 'Podgora', 'Podgorje', 'Podgrad', 'Ponikve', 'Sela', 'Selo', 'Škocjan', 'Vrh'
    );

    protected static $country = array(
        'Afganistan', 'Albanija', 'Alžirija', 'Andora', 'Angola', 'Antigva in Barbuda', 'Argentina', 'Armenija', 'Avstralija', 'Avstrija',
        'Azerbajdžan', 'Bahami', 'Bahrajn', 'Bangladeš', 'Barbados', 'Belgija', 'Belize', 'Belorusija', 'Benin', 'Bocvana', 'Bolgarija',
        'Bolivija', 'Bosna in Hercegovina', 'Brazilija', 'Brunej', 'Burkina Faso', 'Burundi', 'Butan', 'Ciper', 'Čad', 'Češka', 'Čile',
        'Črna gora', 'Danska', 'Dominika', 'Dominikanska republika', 'Džibuti', 'Egipt', 'Ekvador', 'Ekvatorialna Gvineja', 'Eritreja',
        'Estonija', 'Etiopija', 'Fidži', 'Filipini', 'Finska', 'Francija', 'Gabon', 'Gambija', 'Gana', 'Grčija', 'Grenada', 'Gruzija',
        'Gvajana', 'Gvatemala', 'Gvineja', 'Gvineja Bissau', 'Haiti', 'Honduras', 'Hrvaška', 'Indija', 'Indonezija', 'Irak', 'Iran', 'Irska',
        'Islandija', 'Italija', 'Izrael', 'Jamajka', 'Japonska', 'Jemen', 'Jordanija', 'Južna Afrika', 'Južna Koreja', 'Kambodža', 'Kamerun',
        'Kanada', 'Katar', 'Kazahstan', 'Kenija', 'Kirgizistan', 'Kiribati', 'Kitajska', 'Kolumbija', 'Komori', 'Kongo', 'Demokratična republika Kongo',
        'Kostarika', 'Kuba', 'Kuvajt', 'Laos', 'Latvija', 'Lesoto', 'Libanon', 'Liberija', 'Libija', 'Lihtenštajn', 'Litva', 'Luksemburg', 'Madagaskar',
        'Madžarska', 'Makedonija', 'Malavi', 'Maldivi', 'Malezija', 'Mali', 'Malta', 'Maroko', 'Marshallovi otoki', 'Mauritius', 'Mavretanija', 'Mehika',
        'Mikronezija', 'Mjanmar', 'Moldavija', 'Monako', 'Mongolija', 'Mozambik', 'Namibija', 'Nauru', 'Nemčija', 'Nepal', 'Niger', 'Nigerija',
        'Nikaragva', 'Nizozemska', 'Norveška', 'Nova Zelandija', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Nova Gvineja', 'Paragvaj', 'Peru',
        'Poljska', 'Portugalska', 'Romunija', 'Ruanda', 'Rusija', 'Saint Kitts in Nevis', 'Saint Lucia', 'Saint Vincent in Grenadine',
        'Salomonovi otoki', 'Salvador', 'San Marino', 'Sao Tome in Principe', 'Saudova Arabija', 'Sejšeli', 'Senegal', 'Severna Koreja', 'Sierra Leone',
        'Singapur', 'Sirija', 'Slonokoščena obala', 'Slovaška', 'Slovenija', 'Somalija', 'Srbija', 'Srednjeafriška republika', 'Sudan', 'Surinam',
        'Svazi', 'Španija', 'Šrilanka', 'Švedska', 'Švica', 'Tadžikistan', 'Tajska', 'Tajvan', 'Tanzanija', 'Togo', 'Tonga', 'Trinidad in Tobago',
        'Tunizija', 'Turčija', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukrajina', 'Urugvaj', 'Uzbekistan', 'Vanuatu', 'Vatikan', 'Velika Britanija',
        'Venezuela', 'Vietnam', 'Vzhodni Timor', 'Zahodna Samoa', 'Zambija', 'Združene države Amerike', 'Združeni arabski emirati',
        'Zelenortski otoki', 'Zimbabve'
    );
    protected static $cityFormats = array(
        '{{cityName}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    protected static $addressFormats = array(
        '{{streetAddress}}\n {{postcode}}\n {{cityName}}',
    );

    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }
}
