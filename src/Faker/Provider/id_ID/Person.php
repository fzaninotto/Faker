<?php

namespace Faker\Provider\id_ID;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}'
    );

    /**
     * @link http://www.kaskus.co.id/thread/52d563adbfcb1764748b459f/prediksi-nama-bayi-populer-indonesia-2014
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     */
    protected static $firstNameMale = array(
        'Ahmad', 'Adi', 'Aditya', 'Agung', 'Agus', 'Angga', 'Arif', 'Asep',
        'Ali', 'Anto', 'Anton', 'Abdi', 'Ari', 'Akeenan', 'Afabian', 'Akeanu',
        'Adrian', 'Alvin', 'Ajayden', 'Aaron',
        'Bagus', 'Bayu', 'Bari', 'Badri', 'Bama', 'Basri', 'Budi', 'Budiono',
        'Chandra', 'Charles', 'Cahya', 'Catur', 'Cecep', 'Ciptadi', 'Christian',
        'Dani', 'Dimas', 'Dede', 'Dedi', 'Dadan', 'Dahri', 'Damian', 'Dana',
        'Dono', 'Darren', 'Dodo', 'Doni', 'Desta', 'Datuk', 'Deni',
        'Eko', 'Edo', 'Edi', 'Edison', 'Edwin', 'Edward', 'Elvin', 'Emil',
        'Erik',
        'Fajar', 'Fahri', 'Firman', 'Fauzi', 'Febi', 'Fadhil', 'Fabian',
        'Fahmi',
        'Gading', 'Gilang', 'Gema', 'Gafar', 'Gagah', 'Galih', 'Galvin', 'Geri',
        'Ghani',
        'Hadi', 'Halim', 'Hasim', 'Hasan', 'Hendra', 'Hendri', 'Heryanto',
        'Hamzah', 'Hari',
        'Imam', 'Indra', 'Irwan', 'Irsad', 'Ikhsan', 'Irfan', 'Ian', 'Ibrahim',
        'Ibrani',
        'Jaka', 'Jamal', 'Jamil', 'Jais', 'Jefri', 'Johan', 'Johanes', 'Joko',
        'Jusfik', 'Josef', 'Jerry', 'Jumari',
        'Kadir', 'Kala', 'Kalim', 'Kurnia', 'Kanda', 'Kardi', 'Karya', 'Kasim',
        'Kairav', 'Kenzie', 'Kemal',
        'Latif', 'Lasmanto', 'Lukman', 'Luthfi', 'Leo', 'Luis', 'Lutfan',
        'Maman', 'Mahmud', 'Mahdi', 'Mahfud', 'Malik', 'Muhammad', 'Mustofa',
        'Michael',
        'Narji', 'Nasab', 'Nasrullah', 'Nasim', 'Najib', 'Najam', 'Nyoman',
        'Noah',
        'Olga', 'Ozy', 'Omar', 'Opan', 'Oscar',
        'Panji', 'Panca', 'Pandu', 'Paiman', 'Prima', 'Putu', 'Pasha', 'Petra',
        'Petrus', 'Prabu', 'Pardi',
        'Rahmat', 'Rahman', 'Rendy', 'Reza', 'Rizki', 'Ridwan', 'Rudi', 'Raden',
        'Raditya', 'Radit', 'Radika', 'Rafi', 'Rafid', 'Raihan', 'Rama',
        'Ramon', 'Rafael', 'Ryan',
        'Salman', 'Saadat', 'Saiful', 'Surya', 'Slamet', 'Samsul', 'Soleh',
        'Simon', 'Sabar', 'Sabri', 'Sidiq', 'Satya', 'Setya', 'Saka', 'Sakti',
        'Salim',
        'Taswir', 'Tedi', 'Teddy', 'Taufan', 'Taufik', 'Tomi', 'Tasnim',
        'Tristan',
        'Umar', 'Usman', 'Uda', 'Umay',
        'Viktor', 'Vino', 'Vincent',
        'Wahyu', 'Wira', 'Wisnu', 'Wadi', 'Wardi', 'Warji',
        'Xavier',
        'Yahya', 'Yusuf', 'Yosef', 'Yono', 'Yoga',
        'Zainal'
    );

    /**
     * @link http://www.kaskus.co.id/thread/52d563adbfcb1764748b459f/prediksi-nama-bayi-populer-indonesia-2014
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     */
    protected static $firstNameFemale = array(
        'Ade', 'Agnes', 'Ajeng', 'Amalia', 'Anita', 'Ayu', 'Aisyah', 'Ana',
        'Ami', 'Ani', 'Azalea', 'Aurora', 'Alika', 'Anastasia', 'Amelia',
        'Almira',
        'Bella', 'Betania', 'Belinda',
        'Citra', 'Cindy', 'Chelsea', 'Clara', 'Cornelia', 'Cinta', 'Cinthia',
        'Ciaobella', 'Cici', 'Carla', 'Calista',
        'Devi', 'Dewi','Dian', 'Diah', 'Diana', 'Dina', 'Dinda', 'Dalima',
        'Eka', 'Eva', 'Endah', 'Elisa', 'Eli', 'Ella', 'Ellis', 'Elma',
        'Elvina',
        'Fitria', 'Fitriani', 'Febi', 'Faizah', 'Farah', 'Farhunnisa',
        'Fathonah',
        'Gabriella', 'Gasti', 'Gawati', 'Genta', 'Ghaliyati', 'Gina', 'Gilda',
        'Halima', 'Hesti', 'Hilda', 'Hafshah', 'Hamima', 'Hana', 'Hani',
        'Hasna', 'Humaira',
        'Ika', 'Indah', 'Intan', 'Irma', 'Icha', 'Ida', 'Ifa', 'Ilsa', 'Ina',
        'Ira', 'Iriana',
        'Jamalia', 'Janet', 'Jane', 'Julia', 'Juli', 'Jessica', 'Jasmin',
        'Jelita',
        'Kamaria', 'Kamila', 'Kani', 'Karen', 'Karimah', 'Kartika', 'Kasiyah',
        'Keisha', 'Kezia', 'Kiandra', 'Kayla', 'Kania',
        'Lala', 'Lalita', 'Latika', 'Laila', 'Laras', 'Lidya', 'Lili',
        'Lintang',
        'Maria', 'Mala', 'Maya', 'Maida', 'Maimunah', 'Melinda', 'Mila',
        'Mutia', 'Michelle', 'Malika',
        'Nadia', 'Nadine', 'Nabila', 'Natalia', 'Novi', 'Nova', 'Nurul',
        'Nilam', 'Najwa',
        'Olivia', 'Ophelia', 'Oni', 'Oliva',
        'Padma', 'Putri', 'Paramita', 'Paris', 'Patricia', 'Paulin', 'Puput',
        'Puji', 'Pia', 'Puspa', 'Puti', 'Putri', 'Padmi',
        'Qori',
        'Ratih', 'Ratna', 'Restu', 'Rini', 'Rika', 'Rina', 'Rahayu', 'Rahmi',
        'Rachel', 'Rahmi', 'Raisa', 'Raina',
        'Sarah', 'Sari', 'Siti', 'Siska', 'Suci', 'Syahrini', 'Septi', 'Sadina',
        'Safina', 'Sakura', 'Salimah', 'Salwa', 'Salsabila', 'Samiah', 'Shania',
        'Sabrina', 'Silvia', 'Shakila',
        'Talia', 'Tami', 'Tira', 'Tiara', 'Titin', 'Tania', 'Tina', 'Tantri',
        'Tari', 'Titi',
        'Uchita', 'Unjani', 'Ulya', 'Uli', 'Ulva', 'Umi', 'Usyi',
        'Vanya', 'Vanesa', 'Vivi', 'Vera', 'Vicky', 'Victoria', 'Violet',
        'Winda', 'Widya', 'Wulan', 'Wirda', 'Wani',
        'Yani', 'Yessi', 'Yulia', 'Yuliana', 'Yuni', 'Yunita', 'Yance',
        'Zahra', 'Zalindra', 'Zaenab', 'Zulfa', 'Zizi',
    );

    protected static $lastNameMale = array(
        'Adriansyah', 'Ardianto', 'Anggriawan',
        'Budiman', 'Budiyanto',
        'Firmansyah', 'Firgantoro',
        'Gunarto', 'Gunawan',
        'Hardiansyah', 'Habibi', 'Hakim', 'Halim', 'Haryanto', 'Hidayat',
        'Hidayanto',
        'Irawan', 'Iswahyudi',
        'Kuswoyo',
        'Januar', 'Jailani',
        'Kurniawan', 'Kusumo',
        'Latupono', 'Lazuardi',
        'Maheswara', 'Mahendra', 'Mustofa', 'Mansur', 'Mandala', 'Megantara',
        'Maulana', 'Maryadi',
        'Narpati', 'Natsir', 'Nugroho', 'Najmudin', 'Nashiruddin',
        'Pangestu', 'Putra', 'Pranowo', 'Prabowo', 'Pratama', 'Prasetya',
        'Prasetyo', 'Pradana', 'Pradipta', 'Prakasa', 'Permadi', 'Prasasta',
        'Prayoga',
        'Ramadan', 'Rajasa', 'Rajata',
        'Saptono', 'Santoso', 'Saputra', 'Saefullah', 'Setiawan', 'Suryono',
        'Suwarno', 'Siregar', 'Sihombing', 'Salahudin',
        'Tampubolon', 'Thamrin',
        'Utama', 'Uwais',
        'Wahyudin', 'Waluyo', 'Wibowo', 'Winarno', 'Wibisono', 'Wijaya',
        'Widodo', 'Wacana', 'Waskita', 'Wasita',
        'Zulkarnain'
    );

    protected static $lastNameFemale = array(
        'Agustina', 'Andriani', 'Anggraini', 'Aryani', 'Astuti',
        'Fujiati', 'Farida',
        'Handayani', 'Hassanah', 'Hartati', 'Hasanah', 'Haryanti', 'Hariyah',
        'Hastuti', 'Halimah',
        'Kusmawati', 'Kuswandari',
        'Laksmiwati', 'Laksita', 'Lestari', 'Lailasari',
        'Mandasari', 'Mardhiyah', 'Mayasari', 'Melani', 'Mulyani', 'Maryati',
        'Nurdiyanti', 'Novitasari', 'Nuraini', 'Nasyidah', 'Nasyiah', 'Namaga',
        'Palastri', 'Puspasari', 'Puspita', 'Purwanti', 'Pratiwi', 'Purnawati',
        'Pertiwi', 'Permata', 'Prastuti', 'Padmasari',
        'Rahmawati', 'Rahayu', 'Riyanti', 'Rahimah',
        'Suartini', 'Sudiati', 'Suryatmi', 'Susanti', 'Safitri',
        'Oktaviani',
        'Utami', 'Usamah', 'Usada', 'Uyainah',
        'Yuniar', 'Yuliarti', 'Yulianti', 'Yolanda',
        'Wahyuni', 'Wijayanti', 'Widiastuti', 'Winarsih', 'Wulandari',
        'Wastuti',
        'Zulaika',
    );

    /**
     * Return last name
     *
     * @param string|null $gender male or female or null for any
     *
     * @return string last name
     */
    public function lastName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {

            return static::lastNameMale();

        } elseif ($gender === static::GENDER_FEMALE) {

            return static::lastNameFemale();

        }

        $lastNameRandomElement = static::randomElement(static::$lastNameFormat);

        return $this->generator->parse($lastNameRandomElement);
    }

    /**
     * Return last name for male
     *
     * @return string last name
     */
    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    /**
     * Return last name for female
     *
     * @access public
     * @return string last name
     */
    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }
}
