<?php

namespace Faker\Provider\ms_MY;

use \Faker\Generator;

class Address extends \Faker\Provider\Address
{
    /**
     * @link https://en.wikipedia.org/wiki/Addresses_in_Malaysia
     */
    protected static $addressFormats = array(
        '{{streetAddress}}, {{township}}, {{townState}}',
    );

    protected static $streetAddressFormats = array(
        '{{buildingPrefix}}{{buildingNumber}}, {{streetName}}'
    );

    /**
     * Most of the time 'No.' is not needed, and 'Lot' is less used.
     */
    protected static $buildingPrefix = array(
        '','','','','','',
        'No. ','No. ','No. ',
        'Lot ',
    );

    protected static $buildingNumber = array(
        '%','%','%',
        '%#','%#','%#','%#',
        '%##',
        '%-%',
        '?-##-##',
        '%?-##'
    );

    protected static $streetNameFormats = array(
        '{{streetPrefix}} %',
        '{{streetPrefix}} %/%',
        '{{streetPrefix}} %/%#',
        '{{streetPrefix}} %/%?',
        '{{streetPrefix}} %/%#?',
        '{{streetPrefix}} %?',
        '{{streetPrefix}} %#?',
        '{{streetPrefix}} {{streetSuffix}}',
        '{{streetPrefix}} {{streetSuffix}} %',
        '{{streetPrefix}} {{streetSuffix}} %/%',
        '{{streetPrefix}} {{streetSuffix}} %/%#',
        '{{streetPrefix}} {{streetSuffix}} %/%?',
        '{{streetPrefix}} {{streetSuffix}} %/%#?',
        '{{streetPrefix}} {{streetSuffix}} %?',
        '{{streetPrefix}} {{streetSuffix}} %#?',
    );

    protected static $townshipFormats = array(
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefixAbbr}}%',
        '{{townshipPrefixAbbr}}%#',
        '{{townshipPrefixAbbr}}%#?',
    );
    
    protected static $cityFormats = array(
        '{{townJohor}}',
        '{{townKedah}}',
        '{{townKelantan}}',
        '{{townKL}}',
        '{{townLabuan}}',
        '{{townMelaka}}',
        '{{townNSembilan}}',
        '{{townPahang}}',
        '{{townPenang}}',
        '{{townPerak}}',
        '{{townPerlis}}',
        '{{townPutrajaya}}',
        '{{townSabah}}',
        '{{townSarawak}}',
        '{{townSelangor}}',
        '{{townTerengganu}}',
    );
    
    protected static $stateFormats = array(
        '{{stateJohor}}',
        '{{stateKedah}}',
        '{{stateKelantan}}',
        '{{stateKL}}',
        '{{stateLabuan}}',
        '{{stateMelaka}}',
        '{{stateNSembilan}}',
        '{{statePahang}}',
        '{{statePenang}}',
        '{{statePerak}}',
        '{{statePerlis}}',
        '{{statePutrajaya}}',
        '{{stateSabah}}',
        '{{stateSarawak}}',
        '{{stateSelangor}}',
        '{{stateTerengganu}}',
    );

    /**
     * postcode and town must match with the state
     */
    protected static $townStateFormats = array(
        '{{postcodeJohor}} {{townJohor}}, {{stateJohor}}',
        '{{postcodeKedah}} {{townKedah}}, {{stateKedah}}',
        '{{postcodeKelantan}} {{townKelantan}}, {{stateKelantan}}',
        '{{postcodeKL}} {{townKL}}, {{stateKL}}',
        '{{postcodeKL}} {{townKL}}, {{stateKL}}',
        '{{postcodeKL}} {{townKL}}, {{stateKL}}',
        '{{postcodeLabuan}} {{townLabuan}}, {{stateLabuan}}',
        '{{postcodeMelaka}} {{townMelaka}}, {{stateMelaka}}',
        '{{postcodeNSembilan}} {{townNSembilan}}, {{stateNSembilan}}',
        '{{postcodePahang}} {{townPahang}}, {{statePahang}}',
        '{{postcodePenang}} {{townPenang}}, {{statePenang}}',
        '{{postcodePerak}} {{townPerak}}, {{statePerak}}',
        '{{postcodePerlis}} {{townPerlis}}, {{statePerlis}}',
        '{{postcodePutrajaya}} {{townPutrajaya}}, {{statePutrajaya}}',
        '{{postcodeSabah}} {{townSabah}}, {{stateSabah}}',
        '{{postcodeSarawak}} {{townSarawak}}, {{stateSarawak}}',
        '{{postcodeSelangor}} {{townSelangor}}, {{stateSelangor}}',
        '{{postcodeSelangor}} {{townSelangor}}, {{stateSelangor}}',
        '{{postcodeTerengganu}} {{townTerengganu}}, {{stateTerengganu}}',
    );

    /**
     * 'Jalan' & 'Jln' are more frequently used than 'Lorong'
     * 
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur#Standard_translations
     */
    protected static $streetPrefix = array(
        'Jln','Jln',
        'Jalan','Jalan','Jalan',
        'Lorong'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Ipoh
     * @link https://en.wikipedia.org/wiki/Transportation_in_Seremban#Inner_city_roads
     * @link https://en.wikipedia.org/wiki/List_of_streets_in_George_Town,_Penang
     */
    protected static $streetSuffix = array(
        'Air Itam','Alor','Ampang','Ampang Hilir','Anson','Ariffin',
        'Bangsar','Baru','Bellamy','Birch','Bijih Timah','Bukit Aman','Bukit Bintang','Bukit Petaling','Bukit Tunku',
        'Cantonment','Cenderawasih','Chan Sow Lin','Chow Kit','Cinta','Cochrane','Conlay',
        'D. S. Ramanathan','Damansara','Dang Wangi','Davis','Dewan Bahasa','Dato Abdul Rahman','Dato\'Keramat','Dato\' Maharaja Lela','Doraisamy',
        'Eaton',
        'Faraday',
        'Galloway','Genting Klang','Gereja',
        'Hang Jebat','Hang Kasturi','Hang Lekir','Hang Lekiu','Hang Tuah','Hospital',
        'Imbi','Istana',
        'Jelutong',
        'Kampung Attap','Kebun Bunga','Kedah','Keliling','Kia Peng','Kinabalu','Kuala Kangsar','Kuching',
        'Ledang','Lembah Permai','Loke Yew','Lt. Adnan','Lumba Kuda',
        'Madras','Magazine','Maharajalela','Masjid','Maxwell','Mohana Chandran','Muda',
        'P. Ramlee','Padang Kota Lama','Pahang','Pantai Baharu','Parlimen','Pasar','Pasar Besar','Perak','Perdana','Petaling','Prangin','Pudu','Pudu Lama',
        'Raja','Raja Abdullah','Raja Chulan','Raja Laut','Rakyat','Residensi','Robson',
        'S.P. Seenivasagam','Samarahan 1','Selamat','Sempadan','Sentul','Serian 1','Sasaran','Sin Chee','Sultan Abdul Samad','Sultan Azlan Shah','Sultan Iskandar','Sultan Ismail','Sultan Sulaiman','Sungai Besi','Syed Putra',
        'Tan Cheng Lock','Thambipillay','Tugu','Tuanku Abdul Halim','Tuanku Abdul Rahman','Tun Abdul Razak','Tun Dr Ismail','Tun H S Lee','Tun Ismail','Tun Perak','Tun Razak','Tun Sambanthan',
        'U-Thant','Utama',
        'Vermont','Vivekananda',
        'Wan Kadir','Wesley','Wisma Putra',
        'Yaacob Latif','Yap Ah Loy','Yap Ah Shak','Yap Kwan Seng','Yew',
        'Zaaba','Zainal Abidin'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Petaling_Jaya_city_sections
     * @link https://en.wikipedia.org/wiki/UEP_Subang_Jaya#History
     */
    protected static $townshipPrefixAbbr = array(
        'SS','Seksyen ','PJS','PJU','USJ ',
    );

    /**
     * 'Bandar' and 'Taman' are the most common township prefix
     * 
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur > Townships
     * @link https://en.wikipedia.org/wiki/Template:Johor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kedah > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kelantan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Melaka > Townships
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Perak > Townships
     * @link https://en.wikipedia.org/wiki/Template:Penang > Townships
     * @link https://en.wikipedia.org/wiki/Template:Selangor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Terengganu > Townships
     */
    protected static $townshipPrefix = array(
        'Alam','Apartment','Ara',
        'Bandar','Bandar','Bandar','Bandar','Bandar','Bandar',
        'Bandar Bukit','Bandar Seri','Bandar Sri','Bandar Baru','Batu','Bukit',
        'Desa','Damansara',
        'Kampung','Kampung Baru','Kampung Baru','Kondominium','Kota',
        'Laman','Lembah',
        'Medan',
        'Pandan','Pangsapuri','Petaling','Puncak',
        'Seri','Sri',
        'Taman','Taman','Taman','Taman','Taman','Taman',
        'Taman Desa',
    );
    protected static $townshipSuffix = array(
        'Aman','Amanjaya','Anggerik','Angkasa','Antarabangsa','Awan',
        'Bahagia','Bangsar','Baru','Belakong','Bendahara','Bestari','Bintang','Brickfields',
        'Casa','Changkat','Country Heights',
        'Damansara','Damai','Dato Harun','Delima','Duta',
        'Flora',
        'Gembira','Genting',
        'Harmoni','Hartamas',
        'Impian','Indah','Intan',
        'Jasa','Jaya',
        'Keramat','Kerinchi','Kiara','Kinrara','Kuchai',
        'Laksamana',
        'Mahkota','Maluri','Manggis','Maxwell','Medan','Melawati','Menjalara','Meru','Mulia','Mutiara',
        'Pahlawan','Perdana','Pertama','Permai','Pelangi','Petaling','Pinang','Puchong','Puteri','Putra',
        'Rahman','Rahmat','Raya','Razak','Ria',
        'Saujana','Segambut','Selamat','Selatan','Semarak','Sentosa','Seputeh','Setapak','Setia Jaya','Sinar','Sungai Besi','Sungai Buaya','Sungai Long','Suria',
        'Tasik Puteri','Tengah','Timur','Tinggi','Tropika','Tun Hussein Onn','Tun Perak','Tunku',
        'Ulu','Utama','Utara',
        'Wangi',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Johor
     */
    protected static $townJohor = array(
        'Ayer Hitam',
        'Batu Pahat','Bukit Gambir','Bukit Kepong','Bukit Naning',
        'Desaru',
        'Endau',
        'Gelang Patah','Gemas Baharu',
        'Iskandar Puteri',
        'Jementah','Johor Lama','Johor Bahru',
        'Kempas','Kluang','Kota Iskandar','Kota Tinggi','Kukup','Kulai',
        'Labis ','Larkin','Layang-Layang',
        'Mersing','Muar',
        'Pagoh','Paloh','Parit Jawa','Pasir Gudang','Pekan Nanas','Permas Jaya','Pontian Kechil',
        'Renggam',
        'Segamat','Senai','Simpang Renggam','Skudai','Sri Gading',
        'Tangkak','Tebrau',
        'Ulu Tiram',
        'Yong Peng',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Kedah
     */
    protected static $townKedah = array(
        'Alor Setar',
        'Baling','Bukit Kayu Hitam',
        'Changlun',
        'Durian Burung',
        'Gurun',
        'Jitra',
        'Kepala Batas','Kuah','Kuala Kedah','Kuala Ketil','Kulim',
        'Langgar','Lunas',
        'Merbok',
        'Padang Serai','Pendang',
        'Serdang','Sintok','Sungai Petani',
        'Tawar, Baling',
        'Yan',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Kelantan
     */
    protected static $townKelantan = array(
        'Bachok','Bunut Payong',
        'Dabong',
        'Gua Musang',
        'Jeli',
        'Ketereh','Kota Bharu','Kuala Krai',
        'Lojing',
        'Machang',
        'Pasir Mas','Pasir Puteh',
        'Rantau Panjang',
        'Salor',
        'Tok Bali',
        'Wakaf Bharu','Wakaf Che Yeh',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Melaka
     */
    protected static $townMelaka = array(
        'Alor Gajah',
        'Bandaraya Melaka','Batu Berendam','Bukit Beruang','Bukit Katil',
        'Cheng',
        'Durian Tunggal',
        'Hang Tuah Jaya',
        'Jasin',
        'Klebang',
        'Lubuk China',
        'Masjid Tanah',
        'Naning',
        'Pekan Asahan',
        'Ramuan China',
        'Simpang Ampat',
        'Tanjung Bidara','Telok Mas',
        'Umbai',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan
     */
    protected static $townNSembilan = array(
        'Ayer Kuning','Ampangan',
        'Bahau','Batang Benar',
        'Chembong',
        'Dangi',
        'Gemas',
        'Juasseh',
        'Kuala Pilah',
        'Labu','Lenggeng','Linggi',
        'Mantin',
        'Nilai',
        'Pajam','Pedas','Pengkalan Kempas','Port Dickson',
        'Rantau','Rompin',
        'Senawang','Seremban','Sungai Gadut',
        'Tampin','Tiroi',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Pahang
     */
    protected static $townPahang = array(
        'Bandar Tun Razak','Bentong','Brinchang','Bukit Fraser','Bukit Tinggi',
        'Chendor',
        'Gambang','Genting Highlands','Genting Sempah',
        'Jerantut',
        'Karak','Kemayan','Kota Shahbandar','Kuala Lipis','Kuala Pahang','Kuala Rompin','Kuantan',
        'Lanchang','Lubuk Paku',
        'Maran','Mengkuang','Mentakab',
        'Nenasi',
        'Panching',
        'Pekan','Penor',
        'Raub',
        'Sebertak','Sungai Lembing',
        'Tanah Rata','Tanjung Sepat','Tasik Chini','Temerloh','Teriang','Tringkap',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Perak
     */
    protected static $townPerak = array(
        'Ayer Tawar',
        'Bagan Serai','Batu Gajah','Behrang','Bidor','Bukit Gantang','Bukit Merah',
        'Changkat Jering','Chemor','Chenderiang',
        'Damar Laut',
        'Gerik','Gopeng','Gua Tempurung',
        'Hutan Melintang',
        'Ipoh',
        'Jelapang',
        'Kamunting','Kampar','Kuala Kangsar',
        'Lekir','Lenggong','Lumut',
        'Malim Nawar','Manong','Menglembu',
        'Pantai Remis','Parit','Parit Buntar','Pasir Salak','Proton City',
        'Simpang Pulai','Sitiawan','Slim River','Sungai Siput','Sungkai',
        'Taiping','Tambun','Tanjung Malim','Tanjung Rambutan','Tapah','Teluk Intan',
        'Ulu Bernam',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Perlis
     */
    protected static $townPerlis = array(
        'Arau',
        'Beseri',
        'Chuping',
        'Kaki Bukit','Kangar','Kuala Perlis',
        'Mata Ayer',
        'Padang Besar',
        'Sanglang','Simpang Empat',
        'Wang Kelian',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Penang
     */
    protected static $townPenang = array(
        'Air Itam',
        'Balik Pulau','Batu Ferringhi','Batu Kawan','Bayan Lepas','Bukit Mertajam','Butterworth',
        'Gelugor','George Town',
        'Jelutong',
        'Kepala Batas',
        'Nibong Tebal',
        'Permatang Pauh','Pulau Tikus',
        'Simpang Ampat',
        'Tanjung Bungah','Tanjung Tokong',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Sabah
     */
    protected static $townSabah = array(
        'Beaufort','Bingkor',
        'Donggongon',
        'Inanam',
        'Kinabatangan','Kota Belud','Kota Kinabalu','Kuala Penyu','Kimanis','Kundasang',
        'Lahad Datu','Likas','Lok Kawi',
        'Manggatal',
        'Nabawan',
        'Papar','Pitas',
        'Ranau',
        'Sandakan','Sapulut','Semporna','Sepanggar',
        'Tambunan','Tanjung Aru','Tawau','Tenom','Tuaran',
        'Weston',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Sarawak
     */
    protected static $townSarawak = array(
        'Asajaya',
        'Ba\'kelalan','Bario','Batu Kawa','Batu Niah','Betong','Bintulu',
        'Dalat','Daro',
        'Engkilili',
        'Julau',
        'Kapit','Kota Samarahan','Kuching',
        'Lawas','Limbang','Lubok Antu',
        'Marudi','Matu','Miri',
        'Oya',
        'Pakan',
        'Sadong Jaya','Sematan','Sibu','Siburan','Song','Sri Aman','Sungai Tujoh',
        'Tanjung Kidurong','Tanjung Manis','Tatau',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Selangor
     */
    protected static $townSelangor = array(
        'Ampang','Assam Jawa',
        'Balakong','Bandar Baru Bangi','Bandar Baru Selayang','Bandar Sunway','Bangi','Banting','Batang Kali','Batu Caves','Bestari Jaya','Bukit Lanjan',
        'Cheras','Cyberjaya',
        'Damansara','Dengkil',
        'Ijok',
        'Jenjarom',
        'Kajang','Kelana Jaya','Klang','Kuala Kubu Bharu','Kuala Selangor','Kuang',
        'Lagong',
        'Morib',
        'Pandamaran','Paya Jaras','Petaling Jaya','Port Klang','Puchong',
        'Rasa','Rawang',
        'Salak Tinggi','Sekinchan','Selayang','Semenyih','Sepang','Serendah','Seri Kembangan','Shah Alam','Subang','Subang Jaya','Sungai Buloh',
        'Tanjung Karang','Tanjung Sepat',
        'Ulu Klang','Ulu Yam',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Terengganu
     */
    protected static $townTerengganu = array(
        'Ajil',
        'Bandar Ketengah Jaya','Bandar Permaisuri','Bukit Besi','Bukit Payong',
        'Chukai',
        'Jerteh',
        'Kampung Raja','Kerteh','Kijal','Kuala Besut','Kuala Berang','Kuala Dungun','Kuala Terengganu',
        'Marang','Merchang',
        'Pasir Raja',
        'Rantau Abang',
        'Teluk Kalung',
        'Wakaf Tapai',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur
     */
    protected static $townKL = array(
        'Ampang',
        'Bandar Tasik Selatan','Bandar Tun Razak','Bangsar','Batu','Brickfields','Bukit Bintang','Bukit Jalil','Bukit Tunku',
        'Cheras','Chow Kit',
        'Damansara Town Centre','Dang Wangi','Desa Petaling','Desa Tun Hussein Onn',
        'Jinjang',
        'Kampung Baru','Kampung Kasipillay','Kampung Pandan','Kampung Sungai Penchala','Kepong','KLCC','Kuchai Lama',
        'Lake Gardens','Lembah Pantai',
        'Medan Tuanku','Mid Valley City','Mont Kiara',
        'Pantai Dalam','Pudu',
        'Salak South','Segambut','Semarak','Sentul','Setapak','Setiawangsa','Seputeh','Sri Hartamas','Sri Petaling','Sungai Besi',
        'Taman Desa','Taman Melawati','Taman OUG','Taman Tun Dr Ismail','Taman U-Thant','Taman Wahyu','Titiwangsa','Tun Razak Exchange',
        'Wangsa Maju',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/Template:Labuan
     */
    protected static $townLabuan = array(
        'Batu Manikar',
        'Kiamsam',
        'Layang-Layang',
        'Rancha-Rancha'
    );

    /**
     * @link https://upload.wikimedia.org/wikipedia/commons/a/ab/Putrajaya_City_Precinct.svg
     */
    protected static $townPutrajaya = array(
        'Precinct 1','Precinct 4','Precinct 5',
        'Precinct 6','Precinct 8','Precinct 10',
        'Precinct 11','Precinct 12','Precinct 13',
        'Precinct 16','Precinct 18','Precinct 19',
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/States_and_federal_territories_of_Malaysia
     */
    protected static $stateJohor = array(
        'Johor Darul Ta\'zim',
        'Johor'
    );
    protected static $stateKedah = array(
        'Kedah Darul Aman',
        'Kedah'
    );
    protected static $stateKelantan = array(
        'Kelantan Darul Naim',
        'Kelantan'
    );
    protected static $stateKL = array(
        'KL',
        'Kuala Lumpur',
        'WP Kuala Lumpur'
    );
    protected static $stateLabuan = array(
        'Labuan'
    );
    protected static $stateMelaka = array(
        'Malacca',
        'Melaka'
    );
    protected static $stateNSembilan = array(
        'Negeri Sembilan Darul Khusus',
        'Negeri Sembilan'
    );
    protected static $statePahang = array(
        'Pahang Darul Makmur',
        'Pahang'
    );
    protected static $statePenang = array(
        'Penang',
        'Pulau Pinang'
    );
    protected static $statePerak = array(
        'Perak Darul Ridzuan',
        'Perak'
    );
    protected static $statePerlis = array(
        'Perlis Indera Kayangan',
        'Perlis'
    );
    protected static $statePutrajaya = array(
        'Putrajaya'
    );
    protected static $stateSabah = array(
        'Sabah'
    );
    protected static $stateSarawak = array(
        'Sarawak'
    );
    protected static $stateSelangor = array(
        'Selangor Darul Ehsan',
        'Selangor'
    );
    protected static $stateTerengganu = array(
        'Terengganu Darul Iman',
        'Terengganu'
    );

    /**
     * @link https://ms.wikipedia.org/wiki/Senarai_negara_berdaulat
     */
    protected static $country = array(
        'Abkhazia','Afghanistan','Afrika Selatan','Republik Afrika Tengah','Akrotiri dan Dhekelia','Albania','Algeria','Amerika Syarikat','Andorra','Angola','Antigua dan Barbuda','Arab Saudi','Argentina','Armenia','Australia','Austria','Azerbaijan',
        'Bahamas','Bahrain','Bangladesh','Barbados','Belanda','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bonaire','Bosnia dan Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi',
        'Cameroon','Chad','Chile','Republik Rakyat China','Republik China di Taiwan','Colombia','Comoros','Republik Demokratik Congo','Republik Congo','Kepulauan Cook','Costa Rica','Côte d\'Ivoire (Ivory Coast)','Croatia','Cuba','Curaçao','Cyprus','Republik Turki Cyprus Utara','Republik Czech',
        'Denmark','Djibouti','Dominika','Republik Dominika',
        'Ecuador','El Salvador','Emiriah Arab Bersatu','Eritrea','Estonia',
        'Kepulauan Faroe','Fiji','Filipina','Finland',
        'Gabon','Gambia','Georgia','Ghana','Grenada','Greece (Yunani)','Guatemala','Guinea','Guinea-Bissau','Guinea Khatulistiwa','Guiana Perancis','Guyana',
        'Habsyah (Etiopia)','Haiti','Honduras','Hungary',
        'Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Itali',
        'Jamaika','Jepun','Jerman','Jordan',
        'Kanada','Kazakhstan','Kemboja','Kenya','Kiribati','Korea Selatan','Korea Utara','Kosovo','Kuwait','Kyrgyzstan',
        'Laos','Latvia','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Lubnan','Luxembourg',
        'Macedonia','Madagaskar','Maghribi','Malawi','Malaysia','Maldives','Mali','Malta','Kepulauan Marshall','Mauritania','Mauritius','Mesir','Mexico','Persekutuan Micronesia','Moldova','Monaco','Montenegro','Mongolia','Mozambique','Myanmar',
        'Namibia','Nauru','Nepal','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norway',
        'Oman','Ossetia Selatan',
        'Pakistan','Palau','Palestin','Panama','Papua New Guinea','Paraguay','Perancis','Peru','Poland','Portugal',
        'Qatar',
        'Romania','Russia','Rwanda',
        'Sahara Barat','Saint Kitts dan Nevis','Saint Lucia','Saint Vincent dan Grenadines','Samoa','San Marino','São Tomé dan Príncipe','Scotland','Senegal','Sepanyol','Serbia','Seychelles','Sierra Leone','Singapura','Slovakia','Slovenia','Kepulauan Solomon','Somalia','Somaliland','Sri Lanka','Sudan','Sudan Selatan','Suriname','Swaziland','Sweden','Switzerland','Syria',
        'Tajikistan','Tanjung Verde','Tanzania','Thailand','Timor Leste','Togo','Tonga','Transnistria','Trinidad dan Tobago','Tunisia','Turki','Turkmenistan','Tuvalu',
        'Uganda','Ukraine','United Kingdom','Uruguay','Uzbekistan',
        'Vanuatu','Kota Vatican','Venezuela','Vietnam',
        'Yaman',
        'Zambia','Zimbabwe',
    );

    /**
     * Return a building prefix
     * 
     * @example 'No.'
     * 
     * @return @string
     */
    public static function buildingPrefix()
    {
        return static::randomElement(static::$buildingPrefix);
    }

    /**
     * Return a building number
     * 
     * @example '123'
     * 
     * @return @string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::lexify(static::numerify(static::randomElement(static::$buildingNumber))));
    }

    /**
     * Return a street prefix
     * 
     * @example 'Jalan'
     */
    public function streetPrefix()
    {
        $format = static::randomElement(static::$streetPrefix);

        return $this->generator->parse($format);
    }

    /**
     * Return a complete streename
     * 
     * @example 'Jalan Utama 7'
     * 
     * @return @string
     */
    public function streetName()
    {
        $format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::$streetNameFormats))));

        return $this->generator->parse($format);
    }

    /**
     * Return a randown township
     * 
     * @example Taman Bahagia
     * 
     * @return @string
     */
    public function township()
    {
        $format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::$townshipFormats))));

        return $this->generator->parse($format);
    }

    /**
     * Return a township prefix abbreviation
     * 
     * @example 'USJ'
     * 
     * @return @string
     */
    public function townshipPrefixAbbr()
    {
        return static::randomElement(static::$townshipPrefixAbbr);
    }

    /**
     * Return a township prefix
     * 
     * @example 'Taman'
     * 
     * @return @string
     */
    public function townshipPrefix()
    {
        return static::randomElement(static::$townshipPrefix);
    }

    /**
     * Return a township suffix
     * 
     * @example 'Bahagia'
     */
    public function townshipSuffix()
    {
        return static::randomElement(static::$townshipSuffix);
    }

    /**
     * Return the complete town address with matching postcode and state
     * 
     * @example 55100 Bukit Bintang, Kuala Lumpur
     * 
     * @return @string
     */
    public function townState()
    {
        $format = static::randomElement(static::$townStateFormats);

        return $this->generator->parse($format);
    }

    /**
     * Return a postcode from the Perlis state (01000 - 02800)
     * 
     * @example '01000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @string
     */
    public function postcodePerlis()
    {
        return '0' . mt_rand(1000, 2800);
    }

    /**
     * Return a postcode from the Kedah state (05000 - 09810)
     * 
     * @example '05000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @string
     */
    public function postcodeKedah()
    {
        return '0' . mt_rand(5000, 9810);
    }

    /**
     * Return a postcode from the Penang state (10000 - 14400)
     * 
     * @example '10000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodePenang()
    {
        return mt_rand(10000, 14400);
    }

    /**
     * Return a postcode from the Kelantan state (15000 - 18500)
     * 
     * @example '15000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeKelantan()
    {
        return mt_rand(15000, 18500);
    }

    /**
     * Return a postcode from the Terengganu state (20000 - 24300)
     * 
     * @example '20000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeTerengganu()
    {
        return mt_rand(20000, 24300);
    }

    /**
     * Return a postcode from the Pahang state (25000 - 28800 | 39000 - 39200 | 49000, 69000)
     * 
     * @example '25000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodePahang()
    {
        $formats = array(
            mt_rand(25000, 28800),
            mt_rand(39000, 39200),
            mt_rand(49000, 69000)
        );

        return static::randomElement($formats);
    }

    /**
     * Return a postcode from the Perak state (30000 - 36810)
     * 
     * @example '30000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodePerak()
    {
        return mt_rand(30000, 36810);
    }

    /**
     * Return a postcode from the Selangor state (40000 - 48300 | 63000 - 68100)
     * 
     * @example '40000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeSelangor()
    {
        $formats = array(
            mt_rand(40000, 48300),
            mt_rand(63000, 68100)
        );

        return static::randomElement($formats);
    }

    /**
     * Return a postcode from Kuala Lumpur (50000 - 60000)
     * 
     * @example '50000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#Federal_Territories
     * 
     * @return @integer
     */
    public function postcodeKL()
    {
        return mt_rand(50000, 60000);
    }

    /**
     * Return a postcode from Putrajaya (62000 - 62988)
     * 
     * @example '62000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#Federal_Territories
     * 
     * @return @integer
     */
    public function postcodePutrajaya()
    {
        return mt_rand(62000, 62988);
    }

    /**
     * Return a postcode from the N.Sembilan state (70000 - 73509)
     * 
     * @example '70000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeNSembilan()
    {
        return mt_rand(70000, 73509);
    }

    /**
     * Return a postcode from the Melaka state (75000 - 78309)
     * 
     * @example '75000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeMelaka()
    {
        return mt_rand(75000, 78309);
    }

    /**
     * Return a postcode from the Johor state (79000 - 86900)
     * 
     * @example '79000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeJohor()
    {
        return mt_rand(79000, 86900);
    }

    /**
     * Return a postcode from Labuan (87000 - 87033)
     * 
     * @example '87000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#Federal_Territories
     * 
     * @return @integer
     */
    public function postcodeLabuan()
    {
        return mt_rand(87000, 87033);
    }

    /**
     * Return a postcode from the Sabah state (88000 - 91309)
     * 
     * @example '88000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeSabah()
    {
        return mt_rand(88000, 91309);
    }

    /**
     * Return a postcode from the Sarawak state (93000 - 98859)
     * 
     * @example '93000'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @return @integer
     */
    public function postcodeSarawak()
    {
        return mt_rand(93000, 98859);
    }

    /**
     * Return a random town in Johor
     * 
     * @example 'Johor Bahru'
     * 
     * @return @string
     */
    public function townJohor()
    {
        return static::randomElement(static::$townJohor);
    }

    /**
     * Return a random town in Kedah
     * 
     * @example 'Alor Setar'
     * 
     * @return @string
     */
    public function townKedah()
    {
        return static::randomElement(static::$townKedah);
    }

    /**
     * Return a random town in Kelantan
     * 
     * @example 'Kota Bharu'
     * 
     * @return @string
     */
    public function townKelantan()
    {
        return static::randomElement(static::$townKelantan);
    }

    /**
     * Return a random town in Melaka
     * 
     * @example 'Alor Gajah'
     * 
     * @return @string
     */
    public function townMelaka()
    {
        return static::randomElement(static::$townMelaka);
    }

    /**
     * Return a random town in Negeri Sembilan
     * 
     * @example 'Seremban'
     * 
     * @return @string
     */
    public function townNSembilan()
    {
        return static::randomElement(static::$townNSembilan);
    }

    /**
     * Return a random town in Pahang
     * 
     * @example 'Kuantan'
     * 
     * @return @string
     */
    public function townPahang()
    {
        return static::randomElement(static::$townPahang);
    }

    /**
     * Return a random town in Perak
     * 
     * @example 'Ipoh'
     * 
     * @return @string
     */
    public function townPerak()
    {
        return static::randomElement(static::$townPerak);
    }

    /**
     * Return a random town in Perlis
     * 
     * @example 'Kangar'
     * 
     * @return @string
     */
    public function townPerlis()
    {
        return static::randomElement(static::$townPerlis);
    }

    /**
     * Return a random town in Penang
     * 
     * @example 'Batu Ferringhi'
     * 
     * @return @string
     */
    public function townPenang()
    {
        return static::randomElement(static::$townPenang);
    }

    /**
     * Return a random town in Sabah
     * 
     * @example 'Kota Kinabalu'
     * 
     * @return @string
     */
    public function townSabah()
    {
        return static::randomElement(static::$townSabah);
    }

    /**
     * Return a random town in Sarawak
     * 
     * @example 'Kuching'
     * 
     * @return @string
     */
    public function townSarawak()
    {
        return static::randomElement(static::$townSarawak);
    }

    /**
     * Return a random town in Selangor
     * 
     * @example 'Shah Alam'
     * 
     * @return @string
     */
    public function townSelangor()
    {
        return static::randomElement(static::$townSelangor);
    }

    /**
     * Return a random town in Terengganu
     * 
     * @example 'Kuala Terengganu'
     * 
     * @return @string
     */
    public function townTerengganu()
    {
        return static::randomElement(static::$townTerengganu);
    }

    /**
     * Return a random town in Labuan
     * 
     * @example 'Layang-Layang'
     * 
     * @return @string
     */
    public function townLabuan()
    {
        return static::randomElement(static::$townLabuan);
    }

    /**
     * Return a random town in Kuala Lumpur
     * 
     * @example 'Ampang'
     * 
     * @return @string
     */
    public function townKL()
    {
        return static::randomElement(static::$townKL);
    }

    /**
     * @example 'Precinct 1'
     */
    public function townPutrajaya()
    {
        return static::randomElement(static::$townPutrajaya);
    }
    
    /**
     * Return a random state
     * 
     * @example 'Johor'
     * 
     * @return @string
    */
    public function state()
    {
        return $this->generator->parse(static::randomElement(static::$stateFormats));
    }

    /**
     * Return a random naming style of the Johor state
     * 
     * @example 'Johor'
     * 
     * @return @string
     */
    public function stateJohor()
    {
        return static::randomElement(static::$stateJohor);
    }

    /**
     * Return a random naming style of the Kedah state
     * 
     * @example 'Kedah'
     * 
     * @return @string
     */
    public function stateKedah()
    {
        return static::randomElement(static::$stateKedah);
    }

    /**
     * Return a random naming style of the Kelantan state
     * 
     * @example 'Kelantan'
     * 
     * @return @string
     */
    public function stateKelantan()
    {
        return static::randomElement(static::$stateKelantan);
    }

    /**
     * Return a random naming style of Kuala Lumpur
     * 
     * @example 'Kuala Lumpur'
     * 
     * @return @string
     */
    public function stateKL()
    {
        return static::randomElement(static::$stateKL);
    }

    /**
     * Return a random naming style of Labuan
     * 
     * @example 'Labuan'
     * 
     * @return @string
     */
    public function stateLabuan()
    {
        return static::randomElement(static::$stateLabuan);
    }

    /**
     * Return a random naming style of the Melaka state
     * 
     * @example 'Melaka'
     * 
     * @return @string
     */
    public function stateMelaka()
    {
        return static::randomElement(static::$stateMelaka);
    }

    /**
     * Return a random naming style of the Negeri Sembilan state
     * 
     * @example 'Negeri Sembilan'
     * 
     * @return @string
     */
    public function stateNSembilan()
    {
        return static::randomElement(static::$stateNSembilan);
    }

    /**
     * Return a random naming style of the Pahang state
     * 
     * @example 'Pahang'
     * 
     * @return @string
     */
    public function statePahang()
    {
        return static::randomElement(static::$statePahang);
    }

    /**
     * Return a random naming style of the Penang state
     * 
     * @example 'Penang'
     * 
     * @return @string
     */
    public function statePenang()
    {
        return static::randomElement(static::$statePenang);
    }

    /**
     * Return a random naming style of the Perak state
     * 
     * @example 'Perak'
     * 
     * @return @string
     */
    public function statePerak()
    {
        return static::randomElement(static::$statePerak);
    }

    /**
     * Return a random naming style of the Perlis state
     * 
     * @example 'Perlis'
     * 
     * @return @string
     */
    public function statePerlis()
    {
        return static::randomElement(static::$statePerlis);
    }

    /**
     * Return a random naming style of Putrajaya
     * 
     * @example 'Putrajaya'
     * 
     * @return @string
     */
    public function statePutrajaya()
    {
        return static::randomElement(static::$statePutrajaya);
    }

    /**
     * Return a random naming style of the Sabah state
     * 
     * @example 'Sabah'
     * 
     * @return @string
     */
    public function stateSabah()
    {
        return static::randomElement(static::$stateSabah);
    }

    /**
     * Return a random naming style of the Sarawak state
     * 
     * @example 'Sarawak'
     * 
     * @return @string
     */
    public function stateSarawak()
    {
        return static::randomElement(static::$stateSarawak);
    }

    /**
     * Return a random naming style of the Selangor state
     * 
     * @example 'Selangor'
     * 
     * @return @string
     */
    public function stateSelangor()
    {
        return static::randomElement(static::$stateSelangor);
    }

    /**
     * Return a random naming style of the Terengganu state
     * 
     * @example 'Terengganu'
     * 
     * @return @string
     */
    public function stateTerengganu()
    {
        return static::randomElement(static::$stateTerengganu);
    }
}
