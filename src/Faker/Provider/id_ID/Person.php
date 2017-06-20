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
        '{{firstNameMale}} {{lastNameMale}} {{suffix}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
    );

    /**
     * @link http://www.nama.web.id/search.php?gender=male&origin=Indonesia+-+Jawa&letter=&submit=Search
     */
    protected static $firstNameMale = array(
        'Abyasa', 'Ade', 'Adhiarja', 'Adiarja', 'Adika', 'Adikara', 'Adinata',
        'Aditya', 'Agus', 'Ajiman', 'Ajimat', 'Ajimin', 'Ajiono', 'Akarsana',
        'Alambana', 'Among', 'Anggabaya', 'Anom', 'Argono', 'Aris', 'Arta',
        'Artanto', 'Artawan', 'Arsipatra', 'Asirwada', 'Asirwanda', 'Aslijan',
        'Asmadi', 'Asman', 'Asmianto', 'Asmuni', 'Aswani', 'Atma', 'Atmaja',
        'Bagas', 'Bagiya', 'Bagus', 'Bagya', 'Bahuraksa', 'Bahuwarna',
        'Bahuwirya', 'Bajragin', 'Bakda', 'Bakiadi', 'Bakianto', 'Bakidin',
        'Bakijan', 'Bakiman', 'Bakiono', 'Bakti', 'Baktiadi', 'Baktianto',
        'Baktiono', 'Bala', 'Balamantri', 'Balangga', 'Balapati', 'Balidin',
        'Balijan', 'Bambang', 'Banara', 'Banawa', 'Banawi', 'Bancar', 'Budi',
        'Cagak', 'Cager', 'Cahyadi', 'Cahyanto', 'Cahya', 'Cahyo', 'Cahyono',
        'Caket', 'Cakrabirawa', 'Cakrabuana', 'Cakrajiya', 'Cakrawala',
        'Cakrawangsa', 'Candra', 'Chandra', 'Candrakanta', 'Capa', 'Caraka',
        'Carub', 'Catur', 'Caturangga', 'Cawisadi', 'Cawisono', 'Cawuk',
        'Cayadi', 'Cecep', 'Cemani', 'Cemeti', 'Cemplunk', 'Cengkal', 'Cengkir',
        'Dacin', 'Dadap', 'Dadi', 'Dagel', 'Daliman', 'Dalimin', 'Daliono',
        'Damar', 'Damu', 'Danang', 'Daniswara', 'Danu', 'Danuja', 'Dariati',
        'Darijan', 'Darimin', 'Darmaji', 'Darman', 'Darmana', 'Darmanto',
        'Darsirah', 'Dartono', 'Daru', 'Daruna', 'Daryani', 'Dasa', 'Digdaya',
        'Dimas', 'Dimaz', 'Dipa', 'Dirja', 'Drajat', 'Dwi', 'Dono', 'Dodo',
        'Edi', 'Eka', 'Elon', 'Eluh', 'Eman', 'Emas', 'Embuh', 'Emong',
        'Empluk', 'Endra', 'Enteng', 'Estiawan', 'Estiono', 'Eko', 'Edi',
        'Edison', 'Edward', 'Elvin', 'Erik', 'Emil', 'Ega', 'Emin', 'Eja',
        'Gada', 'Gadang', 'Gaduh', 'Gaiman', 'Galak', 'Galang', 'Galar',
        'Galih', 'Galiono', 'Galuh', 'Galur', 'Gaman', 'Gamani', 'Gamanto',
        'Gambira', 'Gamblang', 'Ganda', 'Gandewa', 'Gandi', 'Gandi', 'Ganep',
        'Gangsa', 'Gangsar', 'Ganjaran', 'Gantar', 'Gara', 'Garan', 'Garang',
        'Garda', 'Gatot', 'Gatra', 'Gilang', 'Galih', 'Ghani', 'Gading',
        'Hairyanto', 'Hardana', 'Hardi', 'Harimurti', 'Harja', 'Harjasa',
        'Harjaya', 'Harjo', 'Harsana', 'Harsanto', 'Harsaya', 'Hartaka',
        'Hartana', 'Harto', 'Hasta', 'Heru', 'Himawan', 'Hadi', 'Halim',
        'Hasim', 'Hasan', 'Hendra', 'Hendri', 'Heryanto', 'Hamzah', 'Hari',
        'Imam', 'Indra', 'Irwan', 'Irsad', 'Ikhsan', 'Irfan', 'Ian', 'Ibrahim',
        'Ibrani', 'Ismail', 'Irnanto', 'Ilyas', 'Ibun', 'Ivan', 'Ikin', 'Ihsan',
        'Jabal', 'Jaeman', 'Jaga', 'Jagapati', 'Jagaraga', 'Jail', 'Jaiman',
        'Jaka', 'Jarwa', 'Jarwadi', 'Jarwi', 'Jasmani', 'Jaswadi', 'Jati',
        'Jatmiko', 'Jaya', 'Jayadi', 'Jayeng', 'Jinawi', 'Jindra', 'Joko',
        'Jumadi', 'Jumari', 'Jamal', 'Jamil', 'Jais', 'Jefri', 'Johan', 'Jono',
        'Kacung', 'Kajen', 'Kambali', 'Kamidin', 'Kariman', 'Karja', 'Karma',
        'Karman', 'Karna', 'Karsa', 'Karsana', 'Karta', 'Kasiran', 'Kasusra',
        'Kawaca', 'Kawaya', 'Kayun', 'Kemba', 'Kenari', 'Kenes', 'Kuncara',
        'Kunthara', 'Kusuma', 'Kadir', 'Kala', 'Kalim', 'Kurnia', 'Kanda',
        'Kardi', 'Karya', 'Kasim', 'Kairav', 'Kenzie', 'Kemal', 'Kamal', 'Koko',
        'Labuh', 'Laksana', 'Lamar', 'Lanang', 'Langgeng', 'Lanjar', 'Lantar',
        'Lega', 'Legawa', 'Lembah', 'Liman', 'Limar', 'Luhung', 'Lukita',
        'Luluh', 'Lulut', 'Lurhur', 'Luwar', 'Luwes', 'Latif', 'Lasmanto',
        'Lukman', 'Luthfi', 'Leo', 'Luis', 'Lutfan', 'Lasmono', 'Laswi',
        'Mahesa', 'Makara', 'Makuta', 'Manah', 'Maras', 'Margana', 'Mariadi',
        'Marsudi', 'Martaka', 'Martana', 'Martani', 'Marwata', 'Maryadi',
        'Maryanto', 'Mitra', 'Mujur', 'Mulya', 'Mulyanto', 'Mulyono', 'Mumpuni',
        'Muni', 'Mursita', 'Murti', 'Mustika', 'Maman', 'Mahmud', 'Mahdi',
        'Mahfud', 'Malik', 'Muhammad', 'Mustofa', 'Marsito', 'Mursinin',
        'Nalar', 'Naradi', 'Nardi', 'Niyaga', 'Nrima', 'Nugraha', 'Nyana',
        'Narji', 'Nasab', 'Nasrullah', 'Nasim', 'Najib', 'Najam', 'Nyoman',
        'Olga', 'Ozy', 'Omar', 'Opan', 'Oskar', 'Oman', 'Okto', 'Okta', 'Opung',
        'Paiman', 'Panca', 'Pangeran', 'Pangestu', 'Pardi', 'Parman', 'Perkasa',
        'Praba', 'Prabu', 'Prabawa', 'Prabowo', 'Prakosa', 'Pranata', 'Pranawa',
        'Prasetya', 'Prasetyo', 'Prayitna', 'Prayoga', 'Prayogo', 'Purwadi',
        'Purwa', 'Purwanto', 'Panji', 'Pandu', 'Paiman', 'Prima', 'Putu',
        'Raden', 'Raditya', 'Raharja', 'Rama', 'Rangga', 'Reksa', 'Respati',
        'Rusman', 'Rosman', 'Rahmat', 'Rahman', 'Rendy', 'Reza', 'Rizki',
        'Ridwan', 'Rudi', 'Raden', 'Radit', 'Radika', 'Rafi', 'Rafid', 'Raihan',
        'Salman', 'Saadat', 'Saiful', 'Surya', 'Slamet', 'Samsul', 'Soleh',
        'Simon', 'Sabar', 'Sabri', 'Sidiq', 'Satya', 'Setya', 'Saka', 'Sakti',
        'Taswir', 'Tedi', 'Teddy', 'Taufan', 'Taufik', 'Tomi', 'Tasnim',
        'Teguh', 'Tasdik', 'Timbul', 'Tirta', 'Tirtayasa', 'Tri', 'Tugiman',
        'Umar', 'Usman', 'Uda', 'Umay', 'Unggul', 'Utama', 'Umaya', 'Upik',
        'Viktor', 'Vino', 'Vinsen', 'Vero', 'Vega', 'Viman', 'Virman',
        'Wahyu', 'Wira', 'Wisnu', 'Wadi', 'Wardi', 'Warji', 'Waluyo', 'Wakiman',
        'Wage', 'Wardaya', 'Warsa', 'Warsita', 'Warta', 'Wasis', 'Wawan',
        'Xanana', 'Yahya', 'Yusuf', 'Yosef', 'Yono', 'Yoga',
    );

    /**
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     */
    protected static $firstNameFemale = array(
        'Ade', 'Agnes', 'Ajeng', 'Amalia', 'Anita', 'Ayu', 'Aisyah', 'Ana',
        'Ami', 'Ani', 'Azalea', 'Aurora', 'Alika', 'Anastasia', 'Amelia',
        'Almira', 'Bella', 'Betania', 'Belinda', 'Citra', 'Cindy', 'Chelsea',
        'Clara', 'Cornelia', 'Cinta', 'Cinthia', 'Ciaobella', 'Cici', 'Carla',
        'Calista', 'Devi', 'Dewi','Dian', 'Diah', 'Diana', 'Dina', 'Dinda',
        'Dalima', 'Eka', 'Eva', 'Endah', 'Elisa', 'Eli', 'Ella', 'Ellis',
        'Elma', 'Elvina', 'Fitria', 'Fitriani', 'Febi', 'Faizah', 'Farah',
        'Farhunnisa', 'Fathonah', 'Gabriella', 'Gasti', 'Gawati', 'Genta',
        'Ghaliyati', 'Gina', 'Gilda', 'Halima', 'Hesti', 'Hilda', 'Hafshah',
        'Hamima', 'Hana', 'Hani', 'Hasna', 'Humaira', 'Ika', 'Indah', 'Intan',
        'Irma', 'Icha', 'Ida', 'Ifa', 'Ilsa', 'Ina', 'Ira', 'Iriana', 'Jamalia',
        'Janet', 'Jane', 'Julia', 'Juli', 'Jessica', 'Jasmin', 'Jelita',
        'Kamaria', 'Kamila', 'Kani', 'Karen', 'Karimah', 'Kartika', 'Kasiyah',
        'Keisha', 'Kezia', 'Kiandra', 'Kayla', 'Kania', 'Lala', 'Lalita',
        'Latika', 'Laila', 'Laras', 'Lidya', 'Lili', 'Lintang', 'Maria', 'Mala',
        'Maya', 'Maida', 'Maimunah', 'Melinda', 'Mila', 'Mutia', 'Michelle',
        'Malika', 'Nadia', 'Nadine', 'Nabila', 'Natalia', 'Novi', 'Nova',
        'Nurul', 'Nilam', 'Najwa', 'Olivia', 'Ophelia', 'Oni', 'Oliva', 'Padma',
        'Putri', 'Paramita', 'Paris', 'Patricia', 'Paulin', 'Puput', 'Puji',
        'Pia', 'Puspa', 'Puti', 'Putri', 'Padmi', 'Qori', 'Queen', 'Ratih',
        'Ratna', 'Restu', 'Rini', 'Rika', 'Rina', 'Rahayu', 'Rahmi', 'Rachel',
        'Rahmi', 'Raisa', 'Raina', 'Sarah', 'Sari', 'Siti', 'Siska', 'Suci',
        'Syahrini', 'Septi', 'Sadina', 'Safina', 'Sakura', 'Salimah', 'Salwa',
        'Salsabila', 'Samiah', 'Shania', 'Sabrina', 'Silvia', 'Shakila',
        'Talia', 'Tami', 'Tira', 'Tiara', 'Titin', 'Tania', 'Tina', 'Tantri',
        'Tari', 'Titi', 'Uchita', 'Unjani', 'Ulya', 'Uli', 'Ulva', 'Umi',
        'Usyi', 'Vanya', 'Vanesa', 'Vivi', 'Vera', 'Vicky', 'Victoria',
        'Violet', 'Winda', 'Widya', 'Wulan', 'Wirda', 'Wani', 'Yani', 'Yessi',
        'Yulia', 'Yuliana', 'Yuni', 'Yunita', 'Yance', 'Zahra', 'Zalindra',
        'Zaenab', 'Zulfa', 'Zizi', 'Zulaikha', 'Zamira', 'Zelda', 'Zelaya',
    );

    /**
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     * @link http://id.wikipedia.org/wiki/Daftar_marga_suku_Batak_di_Toba
     */
    protected static $lastNameMale = array(
        'Adriansyah', 'Ardianto', 'Anggriawan', 'Budiman', 'Budiyanto',
        'Damanik', 'Dongoran', 'Dabukke', 'Firmansyah', 'Firgantoro',
        'Gunarto', 'Gunawan', 'Hardiansyah', 'Habibi', 'Hakim', 'Halim',
        'Haryanto', 'Hidayat', 'Hidayanto', 'Hutagalung', 'Hutapea', 'Hutasoit',
        'Irawan', 'Iswahyudi', 'Kuswoyo', 'Januar', 'Jailani', 'Kurniawan',
        'Kusumo', 'Latupono', 'Lazuardi', 'Maheswara', 'Mahendra', 'Mustofa',
        'Mansur', 'Mandala', 'Megantara', 'Maulana', 'Maryadi', 'Mangunsong',
        'Manullang', 'Marpaung', 'Marbun', 'Narpati', 'Natsir', 'Nugroho',
        'Najmudin', 'Nashiruddin', 'Nainggolan', 'Nababan', 'Napitupulu',
        'Pangestu', 'Putra', 'Pranowo', 'Prabowo', 'Pratama', 'Prasetya',
        'Prasetyo', 'Pradana', 'Pradipta', 'Prakasa', 'Permadi', 'Prasasta',
        'Prayoga', 'Ramadan', 'Rajasa', 'Rajata', 'Saptono', 'Santoso',
        'Saputra', 'Saefullah', 'Setiawan', 'Suryono', 'Suwarno', 'Siregar',
        'Sihombing', 'Salahudin', 'Sihombing', 'Samosir', 'Saragih', 'Sihotang',
        'Simanjuntak', 'Sinaga', 'Simbolon', 'Sitompul', 'Sitorus', 'Sirait',
        'Siregar', 'Situmorang', 'Tampubolon', 'Thamrin', 'Tamba', 'Tarihoran',
        'Utama', 'Uwais', 'Wahyudin', 'Waluyo', 'Wibowo', 'Winarno', 'Wibisono',
        'Wijaya', 'Widodo', 'Wacana', 'Waskita', 'Wasita', 'Zulkarnain',
    );

    /**
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     */
    protected static $lastNameFemale = array(
        'Agustina', 'Andriani', 'Anggraini', 'Aryani', 'Astuti',
        'Fujiati', 'Farida', 'Handayani', 'Hassanah', 'Hartati', 'Hasanah',
        'Haryanti', 'Hariyah', 'Hastuti', 'Halimah', 'Kusmawati', 'Kuswandari',
        'Laksmiwati', 'Laksita', 'Lestari', 'Lailasari', 'Mandasari',
        'Mardhiyah', 'Mayasari', 'Melani', 'Mulyani', 'Maryati', 'Nurdiyanti',
        'Novitasari', 'Nuraini', 'Nasyidah', 'Nasyiah', 'Namaga', 'Palastri',
        'Pudjiastuti', 'Puspasari', 'Puspita', 'Purwanti', 'Pratiwi',
        'Purnawati', 'Pertiwi', 'Permata', 'Prastuti', 'Padmasari', 'Rahmawati',
        'Rahayu', 'Riyanti', 'Rahimah', 'Suartini', 'Sudiati', 'Suryatmi',
        'Susanti', 'Safitri', 'Oktaviani', 'Utami', 'Usamah', 'Usada',
        'Uyainah', 'Yuniar', 'Yuliarti', 'Yulianti', 'Yolanda', 'Wahyuni',
        'Wijayanti', 'Widiastuti', 'Winarsih', 'Wulandari', 'Wastuti', 'Zulaika',
    );

    /**
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    protected static $titleMale = array('dr.', 'drg.', 'Dr.', 'Drs.', 'Ir.', 'H.');

    /**
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    protected static $titleFemale = array('dr.', 'drg.', 'Dr.', 'Hj.');

    /**
     * For academic title
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    private static $suffix = array('S.Ked', 'S.Gz', 'S.Pt', 'S.IP', 'S.E.I',
        'S.E.', 'S.Kom', 'S.H.', 'S.T.', 'S.Pd', 'S.Psi', 'S.I.Kom',
        'S.Sos', 'S.Farm', 'M.M.', 'M.Kom.', 'M.TI.', 'M.Pd', 'M.Farm', 'M.Ak', );

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
        }
        if ($gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }
        $lastNameRandomElement = static::randomElement(static::$lastNameFormat);

        return $this->generator->parse($lastNameRandomElement);
    }

    /**
     * Return last name for male
     *
     * @access public
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

    /**
     * For academic title
     *
     * @access public
     * @return string suffix
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * Generates Nomor Induk Kependudukan (NIK)
     *
     * @link https://en.wikipedia.org/wiki/National_identification_number#Indonesia
     *
     * @param null|string $gender
     * @param null|\DateTime $birthDate
     * @return string
     */
    public function nik($gender = null, $birthDate = null)
    {
        # generate first numbers (region data)
        $nik = $this->generator->numerify('######');

        if (!$birthDate) {
            $birthDate = $this->generator->dateTimeBetween();
        }

        if (!$gender) {
            $gender = $this->generator->randomElement(array(self::GENDER_MALE, self::GENDER_FEMALE));
        }

        # if gender is female, add 40 to days
        if ($gender == self::GENDER_FEMALE) {
            $nik .= $birthDate->format('d') + 40;
        } else {
            $nik .= $birthDate->format('d');
        }

        $nik .= $birthDate->format('my');

        # add last random digits
        $nik.= $this->generator->numerify('####');

        return $nik;
    }
}
