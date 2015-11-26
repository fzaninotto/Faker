<?php

namespace Faker\Provider\ne_NP;

class Address extends \Faker\Provider\Address
{
    protected static $wardNumber = array('##', '#');
    protected static $streetSuffix = array(
        'bagh', 'bazaar', 'besi', 'chowk', 'gaun', 'kot', 'mandir', 'marg', 'nagar', 'sahar', 'sthan', 'tar'
    );

    protected static $postcode = array('#####');

    /**
     * @link http://en.wikipedia.org/wiki/List_of_districts_of_Nepal
     */
    protected static $district = array(
        'Achham', 'Arghakhanchi',
        'Baglung', 'Baitadi', 'Bajhang', 'Bajura', 'Banke', 'Bara', 'Bardiya', 'Bhaktapur', 'Bhojpur',
        'Chitwan',
        'Dadeldhura', 'Dailekh', 'Dang Deukhuri', 'Darchula', 'Dhading', 'Dhankuta', 'Dhanusa', 'Dolakha', 'Dolpa', 'Doti',
        'Gorkha', 'Gulmi',
        'Humla',
        'Ilam',
        'Jajarkot', 'Jhapa', 'Jumla',
        'Kailali', 'Kalikot', 'Kanchanpur', 'Kapilvastu', 'Kaski', 'Kathmandu', 'Kavrepalanchok', 'Khotang',
        'Lalitpur', 'Lamjung',
        'Mahottari', 'Makwanpur', 'Manang', 'Morang', 'Mugu', 'Mustang', 'Myagdi',
        'Nawalparasi', 'Nuwakot',
        'Okhaldhunga',
        'Palpa', 'Panchthar', 'Parbat', 'Parsa', 'Pyuthan',
        'Ramechhap', 'Rasuwa', 'Rautahat', 'Rolpa', 'Rukum', 'Rupandehi',
        'Salyan', 'Sankhuwasabha', 'Saptari', 'Sarlahi', 'Sindhuli', 'Sindhupalchok', 'Siraha', 'Solukhumbu', 'Sunsari', 'Surkhet', 'Syangja',
        'Tanahu', 'Taplejung', 'Terhathum',
        'Udayapur'
    );

    /**
     * @link http://www.fallingrain.com/world/NP/
     */
    protected static $cityName = array(
        'Achham', 'Aiselukharka', 'Amardaha', 'Amariya', 'Amlekhganj', 'Amraia', 'Andia', 'Andruli', 'Angbung',  'Arghkot', 'Arughatbazaar', 'Asaina', 'Ataria', 'Atrauli', 'Aulgurta',
        'Bachhuwa', 'Badirpatti', 'Bagar', 'Bagarchhap', 'Baglungbazaar', 'Bahadurganj', 'Bahrabise', 'Bahsi', 'Baijnathpurwa', 'Baindoli', 'Bairia', 'Baitadi', 'Bajhang', 'Bajura', 'Bakarkot', 'Balapur', 'Baldenggarhi', 'Balkot', 'Balma', 'Bandipur', 'Banepa', 'Banepabazaar', 'Baneshore', 'Banghi', 'Banke', 'Bansangu', 'Barbatta', 'Bardiya', 'Barhamjia', 'Basbeti', 'Batarbazaar', 'Bathala', 'Battar', 'Baudha', 'Baudhatinchule', 'Baugachia', 'Beding', 'Belahia', 'Belgaon', 'Belwa', 'Beni', 'Benighat', 'Berhampuri', 'Besisahar', 'Beteni', 'Bethari', 'Betrwati', 'Bhadgaon', 'Bhadrapur', 'Bhagaura', 'Bhagwanpur', 'Bhainsah', 'Bhainse', 'Bhainsedobhn', 'Bhairahawa', 'Bhajni', 'Bhaktapur', 'Bhandar', 'Bharatpur', 'Bhartbs', 'Bhata', 'Bhataulia', 'Bhawanipur', 'Bhikhnatdjori', 'Bhiknathor', 'Bhimkothi', 'Bhimphedi', 'Bhingrigaon', 'Bhitania', 'Bhojpur', 'Bholi', 'Bhopatpur', 'Bhowa', 'Bhujauli', 'Bhurchaur', 'Bhurkia', 'Bijulpura', 'Bilauri', 'Binayakgaon', 'Biprat', 'Biratnagar', 'Birendranagar', 'Birgunj', 'Birkot', 'Birta', 'Bishunpura', 'Bithara', 'Bogri', 'Boradandi', 'Bramhadeumandi', 'Budanilkantha', 'Budhabare', 'Bungmati', 'Burili', 'Burthum', 'Burtibang', 'Butwal',
        'Captainganj', 'Chainpur', 'Chaitya', 'Champapur', 'Chandragadhi', 'Changrang', 'Chapagaun', 'Charikot', 'Chaturale', 'Chaubisho', 'Chaukle', 'Chaukun', 'Chaunrikharka', 'Chautara', 'Chautha', 'Chepang', 'Chepti', 'Chepuwa', 'Chhapia', 'Chhapre', 'Chharkabhot', 'Chhibro', 'Chhintapu', 'Chhokang', 'Chhrkbhotgaon', 'Chhukgaon', 'Chhule', 'Chilankha', 'Chilha', 'Chilkhaya', 'Chisapani', 'Chisapanigadhi', 'Chiybri', 'Chobhar', 'Cholpa', 'Chong', 'Choutar', 'Chuchekanda', 'Chukhung', 'Chumikgyatsa', 'Chunemari', 'Chyabari', 'Chyamtang', 'Chyangthapu', 'Colonelbari',
        'Daban', 'Dabhung', 'Dadeldhura', 'Dahawa', 'Dailekh', 'Dakhakot', 'Dakshnkli', 'Daliwa', 'Dall', 'Dalphu', 'Daman', 'Damdwali', 'Dandakharka', 'Dang', 'Dangarmarwa', 'Daregaunra', 'Daura', 'Debichaur', 'Debikot', 'Dekhatbhuli', 'Deomoro', 'Deoraha', 'Deurali', 'Dhabi', 'Dhadinbesi', 'Dhakela', 'Dhalkebar', 'Dhamaura', 'Dhangadhi', 'Dhankuta', 'Dhankutabazaar', 'Dharamnagar', 'Dharampur', 'Dharan', 'Dharnbzr', 'Dharot', 'Dharsing', 'Dhita', 'Dhuli', 'Dhulikhel', 'Dhunche', 'Dhungrebas', 'Dhurjanna', 'Dhurkot', 'Diktel', 'Diktelbazaar', 'Dillikot', 'Dingboche', 'Dingla', 'Dipayal', 'Doglng', 'Dolakha', 'Dolalghat', 'Dorpattan', 'Doti', 'Dugtha', 'Dullu', 'Dumja', 'Dumn', 'Dumrchaur', 'Dumuhn', 'Dunai', 'Dunglang', 'Durgaon', 'Durgoli',
        'Fatehpur',
        'Gadhi', 'Gadriya', 'Gaighat', 'Gaindaknda', 'Gairagaon', 'Gairigaun', 'Galba', 'Galwa', 'Galwagaun', 'Gamgadhi', 'Gamphathang', 'Garenkhuti', 'Gaur', 'Geta', 'Ghachak', 'Ghanpokhara', 'Ghilinggaon', 'Ghoghda', 'Ghorahi', 'Ghra', 'Ghunsa', 'Ghunthang', 'Giri', 'Girma', 'Godavari', 'Gogangaon', 'Gogn', 'Golagowar', 'Golapala', 'Golgaur', 'Gongrali', 'Goplpur', 'Gorkha', 'Gosainkunda', 'Gotam', 'Gotamsiyala', 'Gothi', 'Gour', 'Guani', 'Gudel', 'Guleriya', 'Gulmikot', 'Gumbung', 'Gumsha', 'Gunhna', 'Gurja', 'Gurjakhana', 'Guthi',
        'Hajminia', 'Halji', 'Handrung', 'Hangsari', 'Hanumannagar', 'Haraincha', 'Hardiachauki', 'Haria', 'Hariharpurgadhi', 'Haripur', 'Harrebarre', 'Hasta', 'Hatia', 'Hatranga', 'Helambu', 'Hetauda', 'Hetaudabazaar', 'Hilajug',
        'Ilam', 'Inarwa', 'Ismakot', 'Itahari',
        'Jagat', 'Jain', 'Jajarkot', 'Jaleswar', 'Jalkundi', 'Jalthal', 'Jamuna', 'Janakpur', 'Jantrakhani', 'Jawalakhel', 'Jhapa', 'Jhikabasti', 'Jhunga', 'Jhuwani', 'Jibu', 'Jiri', 'Jiwadanda', 'Jogkuti', 'Jomsom', 'Joriapani', 'Joshpur', 'Jumla', 'Junbesi', 'Juribela',
        'Kagbeni', 'Kailali', 'Kakani', 'Kalaiya', 'Kalikot', 'Kalimati', 'Kampughat', 'Kamsin', 'Kanchanpur', 'Kanouli', 'Kantipur', 'Kapilvastu', 'Kapurkot', 'Karelung', 'Kasba', 'Kaski', 'Kaspa', 'Kathmandu', 'Katle', 'Katti', 'Katunje', 'Kehami', 'Kermi', 'Khadkagaun', 'Khadreha', 'Khaireni', 'Khalte', 'Khanchikot', 'Khandbari', 'Khangsar', 'Khanjpur', 'Kharang', 'Kharchyun', 'Khargauli', 'Kharka', 'Khinchit', 'Khmchn', 'Khngra', 'Khnskot', 'Khokna', 'Khotng', 'Khrp', 'Khumaltar', 'Khumjung', 'Khunza', 'Khurpa', 'Kiratichhap', 'Kodari', 'Kodudhunga', 'Kohalpur', 'Koilbas', 'Koropani', 'Kothari', 'Kritipur', 'Kuiyahi', 'Kulekhani', 'Kumargaon', 'Kumbher', 'Kunchha', 'Kuseri', 'Kusma', 'Kuthanawa', 'Kutharpekot',
        'Labsibot', 'Lahan', 'Lakarpata', 'Lakkar', 'Lalitpur', 'Lamabagar', 'Lamji', 'Lamjung', 'Lammela', 'Lamobagargola', 'Lamodihi', 'Lampakha', 'Lamri', 'Langtang', 'Larkaiya', 'Lekhparajuli', 'Lete', 'Lahonak', 'Lildanda', 'Lilbhitti', 'Lilikot', 'Limbudin', 'Limbuwan', 'Lindandavillage', 'Liping', 'Liwang', 'Liwangaon', 'Lobuche', 'Lokondo', 'Lomanthang', 'Lubhu', 'Lukla', 'Lumbini', 'Lumbinibagh', 'Lumsal', 'Lumsum', 'Lumsumkhani', 'Lunak', 'Lungthung', 'Lunishera', 'Lurigaon',
        'Mahakali', 'Mahankal', 'Maharajaganj', 'Mahdevtar', 'Mahendranagar', 'Majari', 'Majhgaon', 'Makaising', 'Makwanpurgadhi', 'Malangwa', 'Malimchigaon', 'Manakot', 'Manang', 'Manangbhot', 'Manebhaniyang', 'Mangalpur', 'Mangle', 'Mangri', 'Manhari', 'Manikpur', 'Maniramkanda', 'Mankali', 'Manmaiju', 'Martadi', 'Meghauli', 'Melekheti', 'Melung', 'Mingbo', 'Mohami', 'Motipur', 'Mughla', 'Muglaha', 'Muglin', 'Mugu', 'Muktinath', 'Munchi', 'Munge', 'Munigaun', 'Musikot', 'Mustang',
        'Nagaa', 'Nagarjun', 'Nagarkot', 'Namai', 'Namchebazaar', 'Namdegoan', 'Namrek', 'Nandpur', 'Nangraon', 'Naraingarh', 'Narayangadh', 'Narayanghat', 'Narcheng', 'Nargaon', 'Naubise', 'Nauche', 'Nauranga', 'Nayagaon', 'Nepalgunj', 'Nepaltar', 'Nijgadh', 'Nuwakot',
        'Odarapur', 'Okhaldhunga', 'Okhaldhungabazaar', 'Olangchukgola', 'Oligaon',
        'Pachgachhiya', 'Pachi', 'Pachkaria', 'Pachuwarghat', 'Padmi', 'Pahritol', 'Paklihawa', 'Pali', 'Palung', 'Palungsikarkot', 'Panauti', 'Panautivillage', 'Panbari', 'Panchkhal', 'Pangboche', 'Pangthok', 'Panighat', 'Para', 'Parabice', 'Parasi', 'Partpur', 'Pasauli', 'Pashupatinth', 'Pasupati', 'Patan', 'Patansundhara', 'Pathalaiya', 'Patharkot', 'Patia', 'Patibhamyang', 'Patlahara', 'Phalamesangu', 'Phaplu', 'Pharping', 'Phembu', 'Phidim', 'Phijorgaon', 'Phopagaon', 'Phorcha', 'Phorse', 'Phugaon', 'Phugru', 'Phulbari', 'Phulwri', 'Phung', 'Phungnangtar', 'Pipalkot', 'Pipra', 'Pokhara', 'Pratappur', 'Pudamigaon', 'Pulanto', 'Purtighat', 'Putalikhet', 'Pyuthan',
        'Rajapur', 'Rajbiraj', 'Ramdighat', 'Ramdikbana', 'Ramechhap', 'Ramgarh', 'Ramnagar', 'Rampur', 'Ranbirta', 'Rangeli', 'Ranipauwa', 'Rara', 'Rasi', 'Raskot', 'Rasnadu', 'Rasnaduvillage', 'Rasuwa', 'Rasuwagadhi', 'Rear', 'Rehara', 'Rekcha', 'Ridi', 'Rimi', 'Riribazaar', 'Ririkot', 'Romandey', 'Rukumkot', 'Rumalgaon', 'Rumjatar', 'Rupandehi',
        'Saipal', 'Sakha', 'Salleri', 'Salyan', 'Salyangaon', 'Samargaon', 'Samde', 'Sanam', 'Sangdah', 'Sangu', 'Sangutar', 'Sankhu', 'Sarswati', 'Sasaiya', 'Saukatia', 'Semri', 'Setibesi', 'Shibganj', 'Shibkhola', 'Shimi', 'Shivanagar', 'Shringa', 'Siddharthanagar', 'Sidhniaghat', 'Sikha', 'Sikpasorkhani', 'Siktaghat', 'Silgadhi', 'Silgadhidoti', 'Siliguri', 'Silkot', 'Simengaon', 'Simikot', 'Simra', 'Sindhuli', 'Sindhuligadhi', 'Siraha', 'Sirsia', 'Sisaghatbazaar', 'Sisaria', 'Sisbani', 'Sisghat', 'Sitalpati', 'Sitapur', 'Siurigaon', 'Sorukot', 'Sorung', 'Sripur', 'Subkone', 'Sugarkhal', 'Sukadhik', 'Sukhar', 'Sukhchauri', 'Sunauli', 'Sundarijal', 'Sundarpur', 'Sunwal', 'Surkhet', 'Swargadwari', 'Syabru', 'Syabrubesi', 'Syangja',
        'Tamghas', 'Tamsipur', 'Tanahun', 'Tandi', 'Tange', 'Tanje', 'Tansen', 'Taplejung', 'Tarakot', 'Tarenggaon', 'Tatopani', 'Taulia', 'Taulihawa', 'Teghari', 'Tehrathum', 'Telok', 'Telpani', 'Tempthng', 'Thabng', 'Thakle', 'Thalara', 'Thami', 'Thammu', 'Thankot', 'Thapagaon', 'Thargumtha', 'Thimi', 'Thonje', 'Thothung', 'Thukla', 'Thulobeshi', 'Thuloptl', 'Thumshe', 'Thyangboche', 'Tibrikot', 'Tigri', 'Tikabhairab', 'Tikapur', 'Tikoli', 'Tilaurkot', 'Tiling', 'Tilkot', 'Tingjegaon', 'Tinkar', 'Titahari', 'Tokha', 'Tokna', 'Toli', 'Topkegola', 'Topla', 'Tribeni', 'Tribenighat', 'Trislibzr', 'Trisuli', 'Tsarang', 'Tukotigaon', 'Tukucha', 'Tulsi', 'Tulsipur', 'Tumlingtar',
        'Udaypur', 'Udaypurgadhi', 'Umari', 'Uppardangadhi', 'Uwagaon',
        'Waling', 'Walungchunggola', 'Wapsakhani',
        'Yala', 'Yalbang', 'Yamphodin', 'Yrsa',
    );

    protected static $country = ['Nepal'];
    protected static $cityFormats = array(
        '{{cityName}}'
    );
    protected static $streetNameFormats = array(
        '{{firstName}}{{streetSuffix}}',
        '{{lastName}}{{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}',
    );
    protected static $addressFormats = array(
        "{{city}}-{{wardNumber}}, {{streetAddress}}, {{district}} {{postcode}}",
    );

    /**
     * @example 'Kalaiya'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example '5'
     */
    public static function wardNumber()
    {
        return static::numerify(static::randomElement(static::$wardNumber));
    }

    /**
     * @example 'Bara'
     */
    public static function district()
    {
        return static::randomElement(static::$district);
    }
}
