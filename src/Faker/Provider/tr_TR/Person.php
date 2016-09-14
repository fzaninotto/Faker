<?php

namespace Faker\Provider\tr_TR;

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
        'Abay','Abbas','Abdullah','Abdurrahman','Acun','Ada',
        'Adem','Adnan','Ahmet','Akın','Akif','Aksel',
        'Ali','Alp','Alper','Alperen','Altan','Anıl','Aral','Aras','Arat',
        'Araz','Arda','Arif','Armağan','Arman','Asaf','Aşkın','Ata','Atakan','Atilla','Ayaz',
        'Aybar','Aybars','Ayberk','Aydın','Ayhan','Aykan','Aykut',
        'Aysun','Baha','Bahat','Bahattin','Baran','Barış',
        'Barkın','Barlas','Batu','Batuhan','Bedir','Bedirhan',
        'Behlül','Bekir','Berkan','Berkant','Berkay','Berke',
        'Berkin','Bertan','Beyda','Beyhan','Beytullah','Beyzade','Bilâl',
        'Bilge','Bora','Boran','Buğra','Burak','Burhan','Burkay','Bülent','Canberk','Caner','Canip',
        'Cem','Cemal','Cemil','Cemre','Cengiz','Cihan','Çağan','Çağatay','Çınar','Dağhan',
        'Demir','Deniz','Doğa','Doğukan','Dora','Doruk','Duran','Ecvet','Eda',
        'Ediz','Efe','Efekan','Ege','Ekin','Ekrem','Emir','Emirhan','Emrah',
        'Emre','Emrullah','Ender','Enes','Enis','Ensar','Erba','Ercan','Erdal',
        'Erdem','Erdi','Eren','Erhan','Erkan','Erman','Erol','Ersin','Ersoy','Esat','Esen',
        'Ethem','Evran','Evren','Evrim','Eylül','Eymen','Ezel','Fahri','Faruk','Fatih','Fehim','Fehmi',
        'Feray','Ferhan','Ferhat','Ferid','Fevzi','Feyzan','Fikret','Fuat',
        'Furkan','Gökhan','Göktuğ','Göktürk','Görkem','Güney','Hakan',
        'Halil','Halit','Hami','Hamit','Hamza','Han','Hanzade','Harun','Hasan','Hayrettin',
        'Hazar','Hezarfen','Hikmet','Hüseyin','Ilgaz','Ilge','Ilhan','Irem','Kaan','Kader','Kadir',
        'Kağan','Kayra','Kemal','Kenan','Kerem','Kerim','Koray','Korhan','Kubilay','Kutay',
        'Kürşat','Levent','Mahir','Mahmut','Mahsun','Maksut','Malik','Mehmet','Melih','Melik','Meriç',
        'Mert','Mesut','Mete','Metehan','Metin','Mikail','Minel','Miraç',
        'Miralp','Miray','Mirhan','Mirkan','Mirza','Muammer','Muhammed','Muhammet',
        'Muhittin','Muhsin','Murat','Musa','Mustafa','Nahit','Nail',
        'Naim','Necat','Nesim','Nevzat','Nida','Nihat','Niyazi','Numan','Nurettin','Nuri','Nursel',
        'Ogün','Oğuz','Oğuzhan','Okan','Oktay','Okyanus','Olcay',
        'Olgay','Onur','Orcun','Orhan','Orkun','Osman','Ozan','Ömer','Polat',
        'Raif','Ramazan','Ramiz','Recep','Rüzgar','Sabutay','Sadi','Saim','Sait','Salih','Samet','Sami','Samir',
        'Sarp','Sedat','Selami','Selçuk','Selim','Selvi','Semih','Sercan','Serdar','Serhan',
        'Serhat','Serkan','Seymen','Sezen','Sezer','Sinan','Soner','Süleyman','Taha','Tahsin',
        'Talha','Tamer','Taner','Tayfun','Taygun','Taylan','Teoman','Timur','Tolga','Toprak','Toygar',
        'Tugay','Tuğra','Tuhan','Tuna','Tuncay','Tuncer','Tunç','Tural','Turan','Turgay',
        'Türker','Ubeyt','Uğur','Ulaş','Umay','Uras','Uraz','Utkan',
        'Utku','Ünal','Vahap','Vakkas','Vedat','Veysel','Veysi','Volkan','Yağız','Yakup','Yaren','Yasin',
        'Yaşar','Yavuz','Yiğit','Yunus','Yusuf','Zekeriya','Zeynel',
    );

    /**
     * @link http://www.guzelisimler.com/en_cok_aranan_kiz_isimleri.php
     *
     * @var array Turkish first names.
     */
    protected static $firstNameFemale = array(
        'Abiye','Açalya','Açelya','Ada','Alanur','Alin','Alisa','Alise','Aliye','Amira',
        'Arin','Arya','Arzu','Asena','Asiye','Aslı','Asude','Aybala','Aybike','Aybüke',
        'Ayça','Ayda','Ayfer','Ayla','Aylin','Aynisa','Aynur','Ayse','Aysel','Ayser',
        'Aysim','Aysima','Aysuna','Ayşe','Ayşegül','Ayten','Azelya','Azime','Azra','Bade','Bahar','Banu',
        'Barika','Bedia','Bedriye','Begüm','Behice','Belgin','Belin','Beliz','Belma','Benan',
        'Benay','Bennu','Bensu','Berat','Berceste','Berfu','Beria','Berra',
        'Berrak','Berrin','Besime','Betül','Beyza','Bihter','Buket','Burcu','Burcu',
        'Buse','Büke','Büşra','Can','Canan','Cansu','Cemile','Ceren','Ceyda','Ceyhun',
        'Ceylan','Cin','Cisil','Çağla','Çiğdem','Damla','Daye','Defne','Derin','Devin',
        'Devrim','Diba','Didar','Didem','Dilâ','Dilan','Dilara','Dilay','Dilda','Dilek',
        'Dilem','Dilfiruz','Dilge','Dilrüba','Dudu','Duru','Duygu','Ebru','Ebru','Ece',
        'Ecenur','Ecmel','Edanur','Efe','Efla','Efsu','Efsun','Efza','Ege','Egemen','Elanur',
        'Elçin','Elena','Elenay','Elgin','Elif','Elin','Elis','Elvan','Elvin','Elvina',
        'Elya','Emel','Emel','Emine','Enise','Ennur','Era','Eray','Erem','Ervin','Esin','Esma','Esma',
        'Esra','Esrin','Evin','Eylem','Ezgi','Fadime','Faize','Fatma','Feraye',
        'Feride','Feriha','Fermude','Fethiye','Feyza','Figen','Fikriye','Filiz','Firdevs',
        'Fulya','Funda','Gamze','Ganime','Gaye','Gizem','Gök','Gökçe','Görkem','Gözde',
        'Gül','Gülay','Gülce','Gülru','Gülsüm','Güntülü','Hacer','Hadra','Hafize',
        'Halide','Halime','Halise','Hamdiye','Hamide','Hamra','Handan','Hande','Hanife',
        'Hasibe','Hatice','Havva','Hayriye','Hazal','Hazel','Hicran','Hilal','Hira',
        'Huban','Hulya','Hülya','Hümeyra','Idil','Ilay','Ilayda','Ilda','Ilgın','Ilgın','Ilsu','Ipek','Irem',
        'Kadriye','Kamile','Kaniye','Kardelen','Karya','Kay','Kebire','Kevser',
        'Kezban','Kübra','Lamia','Lara','Lena','Leya','Leyan','Leyla','Leyli',
        'Marziye','Mavi','Maya','Mebruke','Mebrure','Mediha','Medine','Mehlika','Mehtap',
        'Melda','Melek','Meliha','Melike','Melis','Melisa','Melissa',
        'Meltem','Memduha','Mensure','Meray','Mercan','Merve','Meryem','Merzuka','Mesude','Meyra','Mihriban',
        'Mina','Mine','Mira','Miran','Miya','Miyase','Muazzez','Munise','Müge',
        'Naciye','Nafiye','Nagehan','Nahide','Naile','Naime','Narin','Naz','Nazan','Nazen',
        'Nazenin','Nazife','Nazire','Nazmiye','Nebahat','Nebile','Necibe','Necla','Nehir',
        'Nejla','Nergis','Neriman','Nermin','Nesibe','Nesli','Neslihan','Nesrin','Nesteren',
        'Neval','Nevin','Nevriye','Neyra','Neyran','Nigar','Nihal',
        'Nihan','Nil','Nila','Nilay','Nilsu','Niran','Nisa','Nisan','Nur','Nurbanu',
        'Nuriye','Nursima','Nurten','Oya','Özlem','Pakize','Pamir','Pelin','Peri','Perihan',
        'Perin','Perizat','Pervin','Peyker','Peyman','Piraye','Rabia','Rahil','Rahime','Raife',
        'Raziye','Refia','Refika','Refiye','Remziye','Rengin','Reyhan','Reyya',
        'Ruhsar','Rukiye','Ruziye','Rüveyda','Rüya','Sabriye','Sadberk','Sadiye','Safa',
        'Safiye','Sahra','Sakine','Saliha','Sanem','Sar','Sara','Sare','Seba','Sebahat',
        'Sebile','Seda','Sedef','Seden','Sefa','Seher','Selay','Selcan','Selda','Selen',
        'Selime','Selin','Selma','Selmin','Selva','Selvet','Sema','Semanur','Semira','Semiye',
        'Semra','Sena','Senem','Seniha','Sera','Serap','Seray','Seren','Serfiraz','Sermin',
        'Serpil','Serra','Seval','Sevgi','Sevil','Sevilay','Sevim','Seyra','Sezin','Sibel',
        'Sima','Simay','Simru','Sinem','Sinem','Songül','Suat','Sude',
        'Sudiye','Sulbiye','Sultan','Sumru','Suna','Sunay','Suzan','Süeda','Sümeyra','Şah',
        'Şahnur','Şerife','Şevval','Şeyda','Şeyma','Şule','Tanju','Tansel','Tansu',
        'Tanzer','Tomris','Toprak','Tuba','Tuğçe','Tulca','Tulu',
        'Tun','Tutku','Tuvana','Umut','Utku','Utkun','Ümran','Verda','Vildan','Vuslat','Yağmur',
        'Yasemin','Yekta','Yelda','Yeliz','Yosma','Zade','Zahide','Zehra','Zeliha','Zerrin',
        'Zeynep','Zuhal','Zülal','Züleyha','Zümra',
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
        'Beşerler', 'Beşok', 'Biçer', 'Bolatlı', 'Dalkıran', 'Dağdaş', 'Dağlaroğlu', 'Demirbaş', 'Demirel',
        'Denkel', 'Dizdar', 'Doğan', 'Durak', 'Durmaz', 'Duygulu', 'Düşenkalkar', 'Egeli', 'Ekici', 'Ekşioğlu',
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
        'Yıldızoğlu', 'Yılmazer', 'Yorulmaz', 'Çamdalı', 'Çapanoğlu', 'Çatalbaş', 'Çağıran', 'Çetin', 'Çetiner',
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
}
