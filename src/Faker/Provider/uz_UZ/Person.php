<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Person
 * Description: Generates name of people in uzbek langugae
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */

class Person extends \Faker\Provider\Person
{
    /**
     * @var string[]
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    );

    /**
     * @var string[]
     */
    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}а',
        '{{lastName}}а {{firstNameFemale}} {{middleNameFemale}}',
    );

    /**
     * @var string[]
     */
    protected static $firstNameMale = array(
        'Abbos', 'Abdolniyoz', 'Abdulaziz', 'Abror', 'Avliyo', 'Adham', 'Azamat', 'Aziz', 'Azim',
        'Ayniddin', 'Ayyub', 'Akbar', 'Akmal', 'Akram', 'Alimardon', 'Alisher', 'Alouddin', 'Amin',
        'Amir', 'Anvar', 'Anis', 'Anortoy', 'Ansoriddin', 'Anqoboy', 'Ardasher', 'Asad', 'Asaf', 'Aslam',
        'Asil', 'Asomiddin', 'Asror', 'Asqad', 'Asqar', 'Atoulla', 'Afandixon', 'Afzal', 'Afridin',
        'Aflotun', 'Axbor', 'Afridin', 'Ashraf', 'Ashur', 'A`zam', 'Ahmad', 'Ahror', 'Ahtam', 'Badal',
        'Badiuzzamon', 'Badriddin', 'Bakir', 'Bakr', 'Baraka', 'Barot', 'Baxir', 'Baxtiyor', 'Baxshi',
        'Bashar', 'Bashir', 'Baqo', 'Bahman', 'Bahouvdin', 'Bahriddin', 'Bahrom', 'Bahruz', 'Berdimavlon',
        'Berun', 'Behbud', 'Behzod', 'Biymirza', 'Bilol', 'Birodar', 'Bobak', 'Bobir', 'Boboxon', 'Bozor',
        'Boriy', 'Bosit', 'Botiy', 'Boxir', 'Boqi', 'Bunyod', 'Burhon', 'Vadiuddin', 'Vadud', 'Vajiullo',
        'Vays', 'Vakil', 'Vali', 'Valid', 'Vallamat', 'Vasih', 'Vasliddin', 'Vassof', 'Vafo', 'Vaqqos',
        'Vagiz', 'Vahhob', 'Vozid', 'Vomiq', 'Vosi', 'Vosil', 'Vosim', 'Vosif', 'Vosiq', 'Vofi', 'Vofir',
        'Voqi', 'Voqif', 'Vohib', 'Vohid', 'Gado', 'Gazanfar', 'Ganay', 'Gandum', 'Ganja', 'Garzan', 'Garon',
        'Govdil', 'Guzar', 'Gurtboy', 'Dabir', 'Davlat', 'Davrboy', 'Davron', 'Dayyor', 'Dalir', 'Damin',
        'Darvesh', 'Darxon', 'Devloh', 'Dehqon', 'Diyor', 'Dilbashir', 'Dilmurod', 'Dilshod', 'Dinor', 'Dovar',
        'Dovud', 'Dolim', 'Doni', 'Donish', 'Donomurod', 'Dorob', 'Doston', 'Yodgor', 'Yozdonqul', 'Yozi',
        'Yorboy', 'Jabin', 'Jabroil', 'Javdat', 'Javdon', 'Javlon', 'Javod', 'Javonsher', 'Javohir', 'Javhar',
        'Jayhun', 'Jalid', 'Jaloliddin', 'Jambul', 'Jamoliddin', 'Janobiddin', 'Jarullo', 'Jasur', 'Ja`far',
        'Jahongir', 'Jobir', 'Jovid', 'Jonibek  —yoqimtoy, bek bola.', 'Jonxo`roz', 'Johid', 'Jumaboy',
        'Junaydullo', 'Jur`at', 'Jo`ra', 'Zabiy', 'Zabir', 'Zabihullo', 'Zabur', 'Zavqiddin', 'Zayd',
        'Zaynobiddin', 'Zayfullo', 'Zakariyo', 'Zaki', 'Zadriddin', 'Zamon', 'Zarif', 'Zafar', 'Zahiriddin',
        'Ziyo', 'Ziyod', 'Ziynatullo', 'Zinnat', 'Ziyoriddin', 'Zinnat', 'Zikir', 'Zobir', 'Zobit', 'Zoid',
        'Zoir', 'Zokir', 'Zohid', 'Zohir', 'Zubayr', 'Zulfiddin', 'Zulfiqor', 'Zuhriddin', 'Ibod', 'Ibrohim',
        'Idibek', 'Idris', 'Izom', 'Izohiddin', 'Izhoriddin', 'Ikmol', 'Ikrom', 'Ilyos', 'Ilim', 'Ilhom', 'Imod',
        'Imom', 'Imron', 'Inobiddin', 'Inoyat', 'Inog`om', 'Insof', 'In`om', 'Iris', 'Iskandar', 'Islomiddin',
        'Islom', 'Ismat', 'Ismoil', 'Ieo', 'Isomiddin', 'Isroil', 'Isrofil', 'Istad', 'Istam', 'Isfan', 'Isfahon',
        'Iftixor', 'Iffatullo', 'Ixlosiddin', 'Ixtiyoriddin', 'Iqboliddin', 'Iqroriddin', 'Yo`ldoshmuhammad',
        'Kabir', 'Kalimullo', 'Kamol', 'Kamtar', 'Karimullo', 'Karom', 'Kashshof', 'Keldiyor', 'Kibor',
        'Kiromiddin', 'Kishvar', 'Kozim', 'Komyor', 'Komil', 'Komron', 'Koshif', 'Kubro', 'Kushanboy', 'Laziz',
        'Latif', 'Lashkar', 'Lutfiddin', 'Luqmon', 'Mavlaviy', 'Mavlon', 'Mavriddin', 'Madad', 'Madazim', 'Madal',
        'Mador', 'Majdud', 'Majid', 'Mazbut', 'Mazda', 'Mazid', 'Mazhar', 'Makorim', 'Malik', 'Malhamiddin',
        'Mamad', 'Mamdud', 'Manzar', 'Mansur', 'Mardi', 'Marzbon', 'Marhabiddin', 'Masar', 'Mas`ud', 'Matlab',
        'Matmirza', 'Maxdum', 'Maxsum', 'Maxtum', 'Ma`di', 'Ma`mun', 'Ma`mur', 'Ma`ruf', 'Ma`qul', 'Mashrab',
        'Maqsad', 'Maqsum', 'Maqsur', 'Mahan', 'Mahdi', 'Mahdum', 'Mahkam', 'Mahmud', 'Mahram', 'Mahsud', 'Mahsun',
        'Mengazim', 'Mergan', 'Merosiddin', 'Mehmon', 'Mehriddin', 'Mehtar', 'Miad', 'Midhad', 'Miyon', 'Mizrob',
        'Minobiddin', 'Minhojiddin', 'Miraziz', 'Mirza', 'Miftohiddin', 'Miqroziddin', 'Muayyid', 'Mugashshir',
        'Mubin', 'Muborakullo', 'Muboriz', 'Muboshir', 'Mudarris', 'Mudrik', 'Mujiriddin', 'Mujohid', 'Muzaffar',
        'Muzohir', 'Muzrob', 'Muiz', 'Muin', 'Mukdadil', 'Mulla', 'Mumtoz', 'Munzir', 'Munib', 'Munim',
        'Muntajibiddin', 'Mun`im', 'Murod', 'Murtazo', 'Murtoz', 'Murshid', 'Musaddin', 'Musayyab', 'Musallim',
        'Musammo', 'Musin', 'Musir', 'Musif', 'Muslim', 'Muslihiddin', 'Muso', 'Mustafo', 'Mustaqim', 'Musulmon',
        'Mutavakkal', 'Mutal', 'Mutasim', 'Mufaddal', 'Mufid', 'Mufiz', 'Muflih', 'Mufti', 'Muxlisiddin', 'Muxtor',
        'Mu`in', 'Mushirboy', 'Mushrif', 'Mushfiq', 'Muqanna', 'Muqbil', 'Muqim', 'Muqrim', 'Muqtazo', 'Muhammad',
        'Muhib', 'Muhiddin', 'Muhriz', 'Muhsin', 'Mo`min', 'Nabi', 'Nabih', 'Nabot', 'Navvot', 'Navdor', 'Navid',
        'Navkar', 'Navoiy', 'Navol', 'Navro`z', 'Navfal', 'Navqon', 'Nadim', 'Najab', 'Najdat', 'Najib', 'Najim',
        'Nazar', 'Nazifullo', 'Nazihullo', 'Nazrullo', 'Naim', 'Naymai', 'Namoz', 'Narimon', 'Narmin', 'Nasibullo',
        'Nasim', 'Nasriddin', 'Nafig`ullo', 'Naqib', 'Nahan', 'Nahriddin', 'Nekbaxt', 'Ne`mat', 'Niyoz',
        'Nizom', 'Nishon', 'Niyat', 'Novqat', 'Nodim', 'Nodir', 'Noib', 'Nor', 'Norin', 'Nosir', 'Noshir',
        'Nohid', 'Nur', 'Nusrat', 'Nuh', 'No`g`ay', 'Obid', 'Obirahmat', 'Obod', 'Ovsharboy', 'Ogah', 'Odam',
        'Odil', 'Odina', 'Ozar', 'Ozod', 'Oyazim', 'Olim', 'Olloyor', 'Oltiyor', 'Oltoy', 'Omad', 'Omon', 'Orif',
        'Osim', 'Osif', 'Osmon', 'Oston', 'Otavali', 'Ofiyatullo', 'Oshiq', 'Oqdavlat', 'Oqlimirza', 'Payom',
        'Payshanba', 'Panji', 'Panohiddin', 'Parvez', 'Parda', 'Parpi', 'Partov', 'Pahlavon', 'Peshavor',
        'Peshdod', 'Pirnazar', 'Poyon', 'Polvon', 'Poliyor', 'Porso ', 'Purdil', 'Po`lat', 'Rabbimqul', 'Rabi',
        'Rabib', 'Ravziddin', 'Ravnaq', 'Ravshan', 'Radi', 'Rajab', 'Raji', 'Razzoq', 'Razin', 'Razmin', 'Rais',
        'Raif', 'Ramazon', 'Ramal', 'Ramz', 'Rami', 'Ramil', 'Rasim', 'Rasif', 'Rasix', 'Raso', 'Rasul', 'Ratib',
        'Rauf', 'Rafael', 'Rafi', 'Rafid', 'Rafiq', 'Raf`at', 'Rafqat', 'Raxshon', 'Rashid', 'Rashodat',
        'Rashshod', 'Raqoqul', 'Rag`ib', 'Rahib', 'Rahim', 'Rahmat', 'Rahmon', 'Rivojiddin', 'Riyoziddin',
        'Rizo', 'Rizqiddin', 'Rif`at', 'Rixsitilla', 'Robiddin', 'Roji', 'Roiz', 'Royiq', 'Roqib', 'Roqiy',
        'Roqim', 'Rohatali', 'Rubiddin', 'Ruknoyiddin', 'Ruslan', 'Rustam', 'Ruxsat', 'Rushdi', 'Ruhiddin',
        'Ro`zatilla', 'Ro`zbeh', 'Ro`zbon', 'Ro`zim', 'Sabohiddin', 'Sabriddin', 'Savron', 'Sadaddin', 'Sadar',
        'Sadiboy', 'Sadid', 'Sadomat', 'Sadr', 'Said', 'Sain', 'Sanr', 'Sayid', 'Sayim', 'Sayfi', 'Salavatullo',
        'Salim', 'Salmon', 'Salom', 'Salor', 'Saloh', 'Samandar', 'Samar', 'Sami', 'Samim', 'Samin', 'Samir',
        'Samit', 'Sangin', 'Sanjar', 'Sanoqul', 'San`at', 'Sarvar', 'Sarvat', 'Sardor', 'Safar', 'Safiullo',
        'Safo', 'Saxiboy', 'Sa`di', 'Sahmon', 'Sahobiddin', 'Sib`atullo', 'Siddiq', 'Sindor', 'Sino', 'Siroj',
        'Sifatullo', 'Soat', 'Sobir', 'Sobit', 'Sodir', 'Sodiq', 'Soib', 'Solih', 'Sotir', 'Soqi', 'Sohib',
        'Suvon', 'Sulaymon', 'Sulton', 'Sunnat', 'Surxob', 'Surxon', 'Sur`at', 'Sug`ro', 'Suhrob', 'So`fi',
        'Tabibullo', 'Tavakkal', 'Tavallo', 'Tavsan', 'Tavfiq', 'Tavhid', 'Tavhir', 'Takmil', 'Tal`at', 'Tansiq',
        'Tarzabon', 'Tarxon', 'Tilla', 'Toji', 'Toib', 'Toir', 'Toyib', 'Tolib', 'Toqiddin', 'Tohir', 'Tuman',
        'Turob', 'Tuhfat', 'To`fon', 'Ubay', 'Ugur', 'Uzayr', 'Ulfat', 'Umar', 'Umid', 'Umir', 'Ummat', 'Umron',
        'Urfon', 'Usmon', 'Favzi', 'Fadl', 'Fazli', 'Fayz', 'Fayyoz', 'Faraj', 'Farbud', 'Farvardin', 'Fardis',
        'Faryob', 'Farziddin', 'Farid', 'Farmon', 'Farodis', 'Farohiddin', 'Farroh', 'Farrux', 'Faruq',
        'Farxiddin', 'Farhid', 'Fasih', 'Fasl', 'Fattoh', 'Fath', 'Faxri', 'Fahmiddin', 'Fikrat', 'Firdavs',
        'Firuz', 'Fitrat', 'Fozil', 'Foiq', 'Forobiy', 'Fotiq', 'Fotih', 'Fuad', 'Fuzail', 'Fuzul', 'Xabir',
        'Xazin', 'Xazorboy', 'Xazri', 'Xayyom', 'Xayri', 'Xalil', 'Xalif', 'Xanjar', 'Xarros', 'Xarrot',
        'Xaspo`lat', 'Xatib', 'Xafs', 'Xidir', 'Xirmon', 'Xirojiddin', 'Xislat', 'Xovar', 'Xoja', 'Xol', 'Xolid',
        'Xolis', 'Xoliq', 'Xonazim', 'Xubbim', 'Xurdak', 'Xurdod', 'Xurram', 'Xursand', 'Xurshid', 'Xushbaxt',
        'Xo`ja', 'Cherikboy', 'Chehrazod', 'Chilton', 'Chingiz', 'Chinor', 'Chori', 'Chust', 'Cho`lpon',
        'Cho`pon', 'Shavvoz', 'Shavkat', 'Shavqiddin', 'Shayx', 'Shamsi', 'Shamshir', 'Shamshod', 'Sharaf',
        'Sharif', 'Shafqatullo', 'Shahar', 'Shahboz', 'Shahvor', 'Shahir', 'Shahob', 'Shahsuvor', 'Sher',
        'Shiddat', 'Shijoat', 'Shior', 'Shihob', 'Sho', 'Shoddil', 'Shoir', 'Shoif', 'Shoiq', 'Shoybek', 'Shokir',
        'Shokuh', 'Shomi', 'Shomil', 'Shohid', 'Shuayb', 'Shujo', 'Shukur', 'Shuhrat', 'Sho`ra', 'Ezid', 'Eldor',
        'Emin', 'Erkin', 'Eshon', 'Yunus', 'Yusuf', 'Yazdon', 'Yamin', 'Yatim', 'Yahyo', 'O`rda', 'O`rxon',
        'O`g`lon', 'Qavomiddin', 'Qaviy', 'Qavs ', 'Qadam', 'Qadim', 'Qadr', 'Qays', 'Qaysar', 'Qayyum',
        'Qalandar', 'Qalmoq', 'Qamar', 'Qambar', 'Qahramon', 'Qiyom', 'Qiyos', 'Qobil', 'Qozi', 'Qozoq',
        'Qoim', 'Qora', 'Qori', 'Qosid', 'Qosim', 'Qohir', 'Qubod', 'Quvvat', 'Quvomiddin', 'Quddus', 'Qudrat',
        'Qul', 'Qulfiddin', 'Qurbat', 'Qurbon', 'Qurbug`a', 'Quron', 'Qutbiddin', 'G`aybiddin', 'G`ayni', 'G`ayrat',
        'G`alil', 'G`ani', 'G`arib', 'G`afur', 'G`iyos', 'G`ozi', 'G`oyib', 'G`olib', 'G`ulom', 'G`ufron',
        'G`o`non', 'Habib', 'Habil', 'Hadis', 'Hayot', 'Hazrat', 'Haybat', 'Haydar', 'Hayit', 'Hayrat', 'Hakim',
        'Halim', 'Hamdam', 'Hamza', 'Hamid', 'Hammod', 'Hamro', 'Hanjar', 'Haris', 'Hasan', 'Hafiz', 'Hashmat',
        'Haq', 'Hidoyat', 'Hiloliddin', 'Himmat', 'Hisom', 'Hifziddin', 'Hodi', 'Hoji', 'Hoziq', 'Hokim',
        'Homid', 'Homil', 'Horun', 'Hosil', 'Hotam', 'Hoshim', 'Hubbim', 'Huvaydo', 'Hujjat', 'Huzur',
        'Humoyiddin', 'Humom', 'Humoyun', 'Hunar', 'Hurmat', 'Hurullo', 'Husayn', 'Husn'
    );

    /**
     * @var string[]
     */
    protected static $firstNameFemale = array(
        'Imona', 'Mubina', 'Madina', 'Muslima', 'Afruza', 'Iymona', 'Soliha',
        'Sabina', 'Farzona', 'Maftuna', 'Aziza', 'Imrona', 'Samiya', 'Samira',
        'Yasmina', 'Dilnoza', 'Robiya', 'Feruza', 'Dildora', 'Nargiza', 'Shukrona',
        'Nilufar', 'Malika', 'Sabrina', 'Yasmina', 'Hadicha', 'Bonu', 'Zarina',
        'Omina', 'Sevara', 'Solixa', 'Diyora', 'Sarvinoz', 'Zilola', 'Muxlisa',
        'Odina', 'Jasmina', 'Fotima', 'Nozima', 'Mohinur', 'Durdona', 'Rayona',
        'Oysha', 'Dilfuza', 'Safina', 'Nodira', 'Iroda', 'Sitora', 'Sofiya', 'Farangiz',
        'Umida', 'Nigora', 'Nigina', 'Maryam', 'Mushtariy', 'Saida', 'Laylo', 'Osiyo',
        'Marjona', 'Sevinch', 'Gulnoza', 'Bibisora', 'Sora', 'Gulmira', 'Safiya', 'Rayyona',
        'Ifora', 'Dilafruz', 'Sumayya', 'Zuhra', 'Munisa', 'Dilnura', 'Shahrizoda', 'Yasina',
        'Gulnora', 'Shahnoza', 'Yulduz', 'Farida', 'Sa’diya', 'Kamola', 'Parizoda', 'Zebo',
        'Nasiba', 'Shirin', 'Nafisa', 'Ruxshona', 'Ziyoda', 'Charos', 'Samina', 'Komila',
        'E’zoza', 'Shahina', 'Amina', 'Zarnigor', 'Gul', 'Asal', 'Mahliyo', 'Mohira', 'Ro‘za', 'Zinnura'
    );

    /**
     * @var string[]
     */
    protected static $lastName = array(
        'Mingyasharov', 'Ulug\'murodov', 'Pardayev', 'Abdirashidov', 'Rashidov', 'Asadov', 'Azimov',
        'Nurullayev', 'Farxodov', 'Beknazarov', 'Ilhomov', 'Farmonov', 'Isabekov', 'Murtozoyev'
    );

    /**
     * @var string[]
     */
    protected static $lastNameSuffix = array('');

    /**
     * Return male middle name
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$firstNameMale) . " o'g'li";
    }

    /**
     * Return female middle name
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$firstNameMale) . " qizi";
    }

    /**
     * Return middle name for the specified gender.
     *
     * @access public
     * @param string|null $gender A gender the middle name should be generated
     *     for. If the argument is skipped a random gender will be used.
     * @return string Middle name
     */
    public function middleName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement(array(
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        )));
    }

    /**
     * Return last name for the specified gender.
     *
     * @param string|null $gender A gender of the last name should be generated
     *     for. If the argument is skipped a random gender will be used.
     * @return string Last name
     */
    public function lastName($gender = null)
    {
        $lastName = static::randomElement(static::$lastName);

        if (static::GENDER_FEMALE === $gender) {
            return $lastName . 'a';
        } elseif (static::GENDER_MALE === $gender) {
            return $lastName;
        }

        return $lastName . static::randomElement(static::$lastNameSuffix);
    }
}
