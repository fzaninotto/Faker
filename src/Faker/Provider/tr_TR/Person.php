<?php

namespace Faker\Provider\tr_TR;

use Faker\Calculator\TCNo;

class Person extends \Faker\Provider\Person
{
    /**
     * @var array Turkish person name formats.
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @link http://www.guzelisimler.com/en_cok_aranan_erkek_isimleri.php
     *
     * @var array Turkish first names.
     */
    protected static $firstNameMale = array(
        'Acun', 'Ahmet', 'Akdemir', 'Akın', 'Aksel', 'Ali', 'Alp', 'Alper', 'Altay', 'Anıl', 'Armağan', 'Armağan',
        'Arslan', 'Ata', 'Atahan', 'Atakan', 'Aşkın', 'Aybars', 'Ayberk', 'Ayhan', 'Baran', 'Bartu', 'Berk', 'Berkay',
        'Berke', 'Bora', 'Burak', 'Canberk','Cem', 'Cihan', 'Cihangir', 'Cüneyt', 'Çağan', 'Çağrı', 'Çınar', 'Deniz', 'Devrim',
        'Dinç', 'Dikmen', 'Doğu', 'Dilaver', 'Doğan', 'Ediz', 'Efe', 'Ege', 'Emir', 'Emirhan', 'Emre', 'Engin', 'Erdem', 'Erdinç',
        'Ergin', 'Erol','Ersin', 'Ertan', 'Evren', 'Evrim', 'Fatih', 'Feridun', 'Ferid', 'Fettah', 'Furkan', 'Göktürk', 'Görkem', 'Günay',
        'Güney','Gürbüz', 'Hakan', 'Halil', 'Hasan', 'Ilgaz', 'İlker', 'İnal', 'Kağan', 'Kaya', 'Kayra', 'Kerem', 'Kıraç', 'Koray', 'Kutay',
        'Levent', 'Mert', 'Mahmut', 'Mert', 'Metin', 'Mustafa', 'Mutlu', 'Mümtaz', 'Necati', 'Necdet', 'Nevzat','Neşet', 'Nizam',
        'Ogün', 'Oğuz', 'Oğuzhan', 'Onur', 'Osman', 'Ozan', 'Önal', 'Özer', 'Özgün', 'Polat', 'Recep', 'Rıza', 'Rüzgar', 'Sarp',
        'Seçkin' 'Serhan', 'Toprak', 'Tuna','Türker', 'Utku', 'Yağız', 'Yiğit', 'Çınar', 'Derin', 'Meriç', 'Barlas', 'Dağhan', 'Doruk', 'Çağan'
    );

    /**
     * @link http://www.guzelisimler.com/en_cok_aranan_kiz_isimleri.php
     *
     * @var array Turkish first names.
     */
    protected static $firstNameFemale = array(
      'Açelya', 'Ahsen', 'Ahu', 'Akasya', 'Aleyna', 'Alara', 'Amine', 'Arzu', 'Asena', 'Asya', 'Aslı', 'Ayşe',
      'Ada', 'Bade', 'Başak', 'Begüm', 'Belgin', 'Banu', 'Beren', 'Berfu', 'Beril', 'Berrak', 'Beyza', 'Bilge', 'Birgül',
      'Bilge', 'Buket', 'Burcu', 'Burçak', 'Burçin', 'Buse', 'Buse', 'Büge', 'Canan', 'Candan', 'Cansel', 'Cansın', 'Cansu', 'Cemre',
      'Ceyda', 'Ceylan', 'Çağla', 'Çiğdem', 'Çisil', 'Damla', 'Defne', 'Demet', 'Deren', 'Derin', 'Derya', 'Dicle', 'Didem',
      'Dilan', 'Dilara', 'Dilan', 'Dilek', 'Dilşah', 'Dolunay', 'Duru', 'Duygu', 'Ece', 'Ela', 'Erva', 'Ezgi',
      'Esma', 'Emel', 'Ebru', 'Fatma', 'Feray', 'Ferhunde', 'Feride', 'Feyza', 'Figen', 'Firdevs', 'Fulya', 'Gaye', 'Gönül', 'Gülbin',
      'Gülnur', 'Hacer', 'Hatice', 'Hale', 'Hande', 'Hayal', 'Hayat', 'Hazal', 'Helin', 'Hicran', 'Hilal', 'Itır', 'İclal', 'İlayda' ,
      'İrem', 'Jale', 'Kader', 'Kardelen', 'Kübra', 'Lerzan', 'Leman', 'Leyla', 'Mehtap', 'Melis', 'Merve', 'Meryem', 'Miray',
      'Müjde', 'Münevver', 'Nazlı', 'Nehir', 'Necla', 'Neslihan', 'Nihal', 'Nisa', 'Nisan', 'Özge', 'Özlem', 'Rana', 'Reyhan',
      'Rümeysa', 'Rüya', 'Saadet', 'Sare', 'Seda', 'Selma', 'Sena', 'Sibel', 'Sinem', 'Suna', 'Sümeyye', 'Şahika', 'Şahnur', 'Şebnem', 'Şermin', 'Şevval',
      'Şule', 'Talia', 'Tuba', 'Ümran', 'Vildan', 'Vuslat', 'Yeşim', 'Zehra', 'Züleyha', 'Zümrüt'

    );

    /**
     * @link http://tr.wikipedia.org/wiki/Kategori:T%C3%BCrk%C3%A7e_soyadlar%C4%B1
     *
     * @var array Turkish last names.
     */
    protected static $lastName = array(
        'Abacı', 'Abadan', 'Aclan', 'Adal', 'Adan', 'Adıvar', 'Akal', 'Akan', 'Akar', 'Akay',
        'Akaydın', 'Akbulut', 'Akgül', 'Akışık', 'Akman', 'Akyürek', 'Akyüz', 'Akşit', 'Alnıaçık',
        'Alpuğan', 'Alyanak', 'Arıcan', 'Arslanoğlu', 'Atakol', 'Atan', 'Avan', 'Ayaydın', 'Aybar',
        'Aydan', 'Aykaç', 'Ayverdi', 'Ağaoğlu', 'Aşıkoğlu', 'Babacan', 'Babaoğlu', 'Bademci',
        'Bakırcıoğlu', 'Balaban', 'Balcı', 'Barbarosoğlu', 'Baturalp', 'Baykam', 'Başoğlu', 'Berberoğlu',
        'Beşerler', 'Beşok', 'Biçer', 'Bolatlı', 'Dalkıran', 'Dağdaş', 'Dağlaroğlu', 'Demirbaş', 'Demirel','Çiçek',
        'Denkel','Dinler', 'Dizdar', 'Doğan', 'Durak', 'Durmaz', 'Duygulu', 'Düşenkalkar', 'Egeli', 'Ekici', 'Ekşioğlu',
        'Eliçin', 'Elmastaşoğlu', 'Elçiboğa', 'Erbay', 'Erberk', 'Erbulak', 'Erdoğan', 'Erez', 'Erginsoy',
        'Erkekli', 'Eronat', 'Ertepınar', 'Ertürk', 'Erçetin', 'Evliyaoğlu', 'Fahri', 'Gönültaş', 'Gümüşpala',
        'Günday', 'Gürmen', 'Ilıcalı', 'Kahveci', 'Kaplangı', 'Karabulut', 'Karaböcek', 'Karadaş', 'Karaduman',
        'Karaer', 'Kasapoğlu', 'Kavaklıoğlu', 'Kaya', 'Keseroğlu', 'Keçeci', 'Kılıççı', 'Kıraç', 'Kocabıyık',
        'Korol', 'Koyuncu', 'Koç', 'Koçoğlu', 'Koçyiğit', 'Kuday', 'Kulaksızoğlu', 'Kumcuoğlu', 'Kunt',
        'Kunter', 'Kurutluoğlu', 'Kutlay', 'Kuzucu', 'Körmükçü', 'Köybaşı', 'Köylüoğlu', 'Küçükler', 'Limoncuoğlu',
        'Mayhoş', 'Menemencioğlu', 'Mertoğlu', 'Nalbantoğlu', 'Nebioğlu', 'Numanoğlu', 'Okumuş', 'Okur', 'Oraloğlu',
        'Orbay', 'Ozansoy', 'Paksüt', 'Pekkan', 'Pektemek', 'Polat', 'Poyrazoğlu', 'Poçan', 'Sadıklar', 'Samancı',
        'Sandalcı', 'Sarıoğlu', 'Saygıner', 'Sepetçi', 'Sezek', 'Sinanoğlu', 'Solmaz', 'Sözeri', 'Süleymanoğlu',
        'Tahincioğlu', 'Tanrıkulu', 'Tazegül', 'Taşlı', 'Taşçı', 'Tekand', 'Tekelioğlu', 'Tokatlıoğlu', 'Tokgöz',
        'Topaloğlu', 'Topçuoğlu', 'Toraman', 'Tunaboylu', 'Tunçeri', 'Tuğlu', 'Tuğluk', 'Türkdoğan', 'Türkyılmaz',
        'Tütüncü', 'Tüzün', 'Uca', 'Uluhan', 'Velioğlu', 'Yalçın', 'Yazıcı', 'Yetkiner', 'Yeşilkaya', 'Yıldırım',
        'Yıldızoğlu','Yılmaz', 'Yılmazer', 'Yorulmaz', 'Çamdalı', 'Çapanoğlu', 'Çatalbaş', 'Çağıran', 'Çetin', 'Çetiner',
        'Çevik', 'Çörekçi', 'Önür', 'Örge', 'Öymen', 'Özberk', 'Özbey', 'Özbir', 'Özdenak', 'Özdoğan', 'Özgörkey',
        'Özkara', 'Özkök', 'Öztonga', 'Öztuna'
    );

    protected static $title = array('Doç. Dr.', 'Dr.', 'Prof. Dr.');

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * National Personal Identity number (tc kimlik no)
     * @link https://en.wikipedia.org/wiki/Turkish_Identification_Number
     * @return string on format XXXXXXXXXXX
     */
    public function tcNo()
    {
        $randomDigits = static::numerify('#########');
        $checksum = TCNo::checksum($randomDigits);

        return $randomDigits . $checksum;
    }
}
