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
        'Ahmet', 'Ali', 'Alp', 'Armağan', 'Atakan', 'Aşkın', 'Baran', 'Bartu', 'Berk', 'Berkay', 'Berke', 'Bora', 'Burak', 'Canberk',
        'Cem', 'Cihan', 'Deniz', 'Efe', 'Ege', 'Ege', 'Emir', 'Emirhan', 'Emre', 'Ferid', 'Göktürk', 'Görkem', 'Güney',
        'Kağan', 'Kerem', 'Koray', 'Kutay', 'Mert', 'Onur', 'Ogün', 'Polat', 'Rüzgar', 'Sarp', 'Serhan', 'Toprak', 'Tuna',
        'Türker', 'Utku', 'Yağız', 'Yiğit', 'Çınar', 'Derin', 'Meriç', 'Barlas', 'Dağhan', 'Doruk', 'Çağan'
    );

    /**
     * @link http://www.guzelisimler.com/en_cok_aranan_kiz_isimleri.php
     *
     * @var array Turkish first names.
     */
    protected static $firstNameFemale = array(
        'Ada', 'Aycan', 'Ayça', 'Aysun', 'Azra', 'Burcu', 'Büşra', 'Canan', 'Cansu', 'Ceyda', 'Ceren', 'Çağla', 'Damla',
        'Defne', 'Derya', 'Deniz', 'Dilek', 'Doğa', 'Duru', 'Duygu', 'Ece', 'Ebrar', 'Ebru', 'Elif', 'Emel', 'Eser',
        'Esma', 'Esra', 'Gökçe', 'Göksu', 'Gözde', 'İrem', 'Merve', 'Melis', 'Miraç', 'Miray', 'Müge', 'Nur', 'Nisanur',
        'Nisan', 'Nisa', 'Rüya', 'Sabah', 'Selen', 'Serap', 'Seren', 'Serpil', 'Serra', 'Sevim', 'Sevtap', 'Sibel',
        'Sinem', 'Şahnur', 'Tuğba', 'Tuğçe', 'Ümran', 'Yağmur', 'Yaren', 'Zehra', 'Zeynep', 'Zeliha',
    );

    /**
     * @link http://tr.wikipedia.org/wiki/Kategori:T%C3%BCrk%C3%A7e_soyadlar%C4%B1
     * @link https://gist.github.com/emrekgn/493304c6445de15657b2
     *
     * @var array Turkish last names.
     */
    protected static $lastName = array(
        'Abacı', 'Abadan', 'Aclan', 'Adal', 'Adan', 'Adıvar', 'Akal', 'Akan', 'Akar', 'Akay', 'Akaydın', 'Akbulut',
        'Akgül', 'Akışık', 'Akman', 'Akyürek', 'Akyüz', 'Akşit', 'Alnıaçık', 'Alpuğan', 'Alyanak', 'Arıcan',
        'Arslanoğlu', 'Atakol', 'Atan', 'Avan', 'Ayaydın', 'Aybar', 'Aydan', 'Aykaç', 'Ayverdi', 'Ağaoğlu', 'Aşıkoğlu',
        'Babacan', 'Babaoğlu', 'Bademci', 'Bakırcıoğlu', 'Balaban', 'Balcı', 'Barbarosoğlu', 'Baturalp', 'Baykam',
        'Başoğlu', 'Berberoğlu', 'Beşerler', 'Beşok', 'Biçer', 'Bolatlı', 'Dalkıran', 'Dağdaş', 'Dağlaroğlu',
        'Demirbaş', 'Demirel', 'Denkel', 'Dizdar', 'Doğan', 'Durak', 'Durmaz', 'Duygulu', 'Düşenkalkar', 'Egeli',
        'Ekici', 'Ekşioğlu', 'Eliçin', 'Elmastaşoğlu', 'Elçiboğa', 'Erbay', 'Erberk', 'Erbulak', 'Erdoğan', 'Erez',
        'Erginsoy', 'Erkekli', 'Eronat', 'Ertepınar', 'Ertürk', 'Erçetin', 'Evliyaoğlu', 'Fahri', 'Gönültaş',
        'Gümüşpala', 'Günday', 'Gürmen', 'Ilıcalı', 'Kahveci', 'Kaplangı', 'Karabulut', 'Karaböcek', 'Karadaş',
        'Karaduman', 'Karaer', 'Kasapoğlu', 'Kavaklıoğlu', 'Kaya', 'Keseroğlu', 'Keçeci', 'Kılıççı', 'Kıraç',
        'Kocabıyık', 'Korol', 'Koyuncu', 'Koç', 'Koçoğlu', 'Koçyiğit', 'Kuday', 'Kulaksızoğlu', 'Kumcuoğlu', 'Kunt',
        'Kunter', 'Kurutluoğlu', 'Kutlay', 'Kuzucu', 'Körmükçü', 'Köybaşı', 'Köylüoğlu', 'Küçükler', 'Limoncuoğlu',
        'Mayhoş', 'Menemencioğlu', 'Mertoğlu', 'Nalbantoğlu', 'Nebioğlu', 'Numanoğlu', 'Okumuş', 'Okur', 'Oraloğlu',
        'Orbay', 'Ozansoy', 'Paksüt', 'Pekkan', 'Pektemek', 'Polat', 'Poyrazoğlu', 'Poçan', 'Sadıklar', 'Samancı',
        'Sandalcı', 'Sarıoğlu', 'Saygıner', 'Sepetçi', 'Sezek', 'Sinanoğlu', 'Solmaz', 'Sözeri', 'Süleymanoğlu',
        'Tahincioğlu', 'Tanrıkulu', 'Tazegül', 'Taşlı', 'Taşçı', 'Tekand', 'Tekelioğlu', 'Tokatlıoğlu', 'Tokgöz',
        'Topaloğlu', 'Topçuoğlu', 'Toraman', 'Tunaboylu', 'Tunçeri', 'Tuğlu', 'Tuğluk', 'Türkdoğan', 'Türkyılmaz',
        'Tütüncü', 'Tüzün', 'Uca', 'Uluhan', 'Velioğlu', 'Yalçın', 'Yazıcı', 'Yetkiner', 'Yeşilkaya', 'Yıldırım',
        'Yıldızoğlu', 'Yılmazer', 'Yorulmaz', 'Çamdalı', 'Çapanoğlu', 'Çatalbaş', 'Çağıran', 'Çetin', 'Çetiner',
        'Çevik', 'Çörekçi', 'Önür', 'Örge', 'Öymen', 'Özberk', 'Özbey', 'Özbir', 'Özdenak', 'Özdoğan', 'Özgörkey',
        'Özkara', 'Özkök', 'Öztonga', 'Öztuna', 'Şen', 'Kandemir', 'Erkuran', 'Tüten', 'Öztürk', 'Yüzbaşıoğlu',
        'Vural', 'Yücel', 'Sönmez', 'Ertekin', 'Dede', 'Uyanık', 'Aslan', 'Orhon', 'Uz', 'Yavuz', 'Erdem', 'Kulaç',
        'Selvi', 'Akpınar', 'Abacıoğlu', 'Çay', 'Işık', 'Özer', 'Özdemir', 'Tahtacı', 'Büyükcam', 'Kulaksız', 'Aksel',
        'Eroğlu', 'Karakum', 'Dal', 'Öcal', 'Ayhan', 'Yiğit', 'Yarbil', 'Canacankatan', 'Gümüşay', 'Murt', 'Halhallı',
        'Uluöz', 'Şeyhanlı', 'Çalışkantürk', 'Yılmaz', 'Saraçoğlu', 'Sezer', 'Demir', 'Kayayurt', 'Sürüm', 'Yavaşi',
        'Turgut', 'Barbaros', 'Aldinç', 'Tekin', 'Gülşan', 'Küfeciler', 'Almacıoğlu', 'Çildir', 'Öner', 'Şeliman',
        'Yaman', 'Atik', 'Giray', 'Yalçınkaya', 'Kılıç', 'Şentürk', 'Karabağ', 'Değirmenci', 'Boduroğlu', 'Yıldız',
        'Güler', 'Eraslan', 'Üzer', 'Pişirgen', 'Adanır', 'Korkmaz', 'Yenidoğan', 'Aydoğan', 'Acarbulut', 'Erge',
        'Öğüt', 'Aydın', 'Kuşku', 'Kucur', 'Tülübaş', 'Pektaş', 'Kayacan', 'Gülen', 'Badıllıoğlu', 'Akküçük', 'Candan',
        'Temel', 'Yenigün', 'Beder', 'Akıncı', 'Onuk', 'Akcan', 'Atasoy', 'Çekiç', 'Cömert', 'Topal', 'Karahan',
        'Şahin', 'İnal', 'Aytaç', 'Altun', 'Kişi', 'Gündüz', 'Özkurt', 'Pürcü', 'Ak', 'Urfalı', 'Karaman', 'Memetoğlu',
        'Kazbek', 'Kireççi', 'Akın', 'Yadigaroğlu', 'Yüksel', 'Özçelik', 'Oral', 'Babuş', 'Kaplan', 'Aköz', 'Kartal',
        'Bilgiç', 'Erden', 'Tuğcugil', 'Kumral', 'Erbaş', 'Kılaç', 'Cengiz', 'Kutlucan', 'Bağcı', 'Tüfekçi', 'Atay',
        'Yarar', 'Sever', 'Arslan', 'Kaşdoğan', 'Arkan', 'Tutaş', 'Havas', 'Seçir', 'Soykamer', 'Bektaş', 'Berk', 'Gül',
        'Gedik', 'Çolak', 'Bulut', 'Sarı', 'Akyol', 'Bağcık', 'Kutluyurdu', 'Demirgan', 'Kuplay', 'Gerilmez',
        'Düzkalır', 'Köksoy', 'Gülşen', 'Tönge', 'Yasa', 'Önvermez', 'Karademir', 'Alımlı', 'Hancıoğlu', 'Batçık',
        'Olpak', 'Bolat', 'Siğa', 'Mercan', 'Bozkurter', 'Erginel', 'Kadak', 'Güney', 'Kocabaş', 'Gayretli', 'Hepkaya',
        'Bayram', 'Kanık', 'Yüksek', 'Kulak', 'Paksoy', 'Eser', 'Gider', 'Kurt', 'Ellialtı', 'Demirtaş', 'Arga',
        'Başkan', 'Vuralkan', 'Aluçlu', 'Mutlu', 'Şatır', 'Ertem', 'Engiz', 'Çipe', 'Uysal', 'Başer', 'Gözkaya',
        'Ulutaş', 'Pirim', 'Üstün', 'Kızmazoğlu', 'Uluba', 'Karaoğlu', 'Özsoy', 'Saf', 'Gençpınar', 'Akaslan', 'Uyğun',
        'Önder', 'Siviş', 'Baymak', 'Güvenç', 'Akca', 'Çağlar', 'Özcan', 'Başman', 'Yanni', 'Ünal', 'Gündoğdu', 'Çelik',
        'Usta', 'Güç', 'Tanrıverdi', 'Taşkın', 'Çiftdoğan', 'Gazeteci', 'Sari', 'Karakoyun', 'Karakuş', 'Epçaçan',
        'Aydıner', 'Aktaş', 'Belgemen', 'Oflaz', 'Buğrul', 'Baysoy', 'Bükülmez', 'Bıçakçı', 'Kara', 'Timurtaş',
        'Dayar', 'Ateş', 'Binboğa', 'Kızıltepe', 'Abseyi', 'Amirova', 'Uçan', 'Taş', 'Ceylan', 'Erol', 'Tayfun',
        'Karakurt', 'Budunoğlu', 'Saygın', 'Eryavuz', 'Çiçek', 'Ünsal', 'Alpınar', 'Cindemir', 'Akduman', 'Uyar',
        'Tülpar', 'Azak', 'Eren', 'Gözcü', 'Baysal', 'Tuncel', 'Çetemen', 'Giniş', 'Uzun', 'Nasıroğlu', 'Sezgin',
        'Bulur', 'Duysak', 'Yenin', 'Sak', 'Saraç', 'Alkurt', 'Kayıkçı', 'Yurt', 'İlkay', 'Tavşan', 'Alay', 'Özel',
        'Genç', 'Uğuz', 'Evik', 'Talas', 'Eker', 'Çimen', 'Çırakoğlu', 'Göçmen', 'Alpaycı', 'Ercan', 'Sarp', 'Söker',
        'Köse', 'Barçak', 'Özekli', 'Mısırlıoğlu', 'Bolaç', 'Aslanalp', 'Örnek', 'Akdoğan', 'Ertürkler', 'Saral',
        'Özkan', 'Demirhan', 'Aslankara', 'Emlakçıoğlu', 'Öden', 'Demiray', 'Yağcı', 'Avcı', 'Baygeldi', 'Büküm',
        'Dincer', 'Ekiz', 'Şahiner', 'Şengül', 'İlgün', 'Aşık', 'Şirzai', 'Öcalan', 'Kaba', 'Tülüce', 'Aytekin',
        'Düger', 'Metineren', 'Duyar', 'Bölük', 'Gözaçan', 'Bozkurt', 'Öney', 'Kurnaz', 'Ay', 'Köylü', 'Özmen',
        'Süner', 'Talan', 'Dumlu', 'Zorlu', 'Karayiğit', 'Köycü', 'Uygur', 'Kabacaoğlu', 'Ayık', 'Karamanlı',
        'Sadi', 'Aykan', 'Oktay', 'Yurtlu', 'Salman', 'Cirit', 'Koçer', 'Sorgun', 'Evcili', 'Nurçin', 'Kazancı',
        'Kıyak', 'Mete', 'Sağdık', 'Arıkan', 'Yorgun', 'Kesim', 'Karagöz', 'Pekel', 'Yakar', 'Tarlan', 'Çatak',
        'Çetinkor', 'Sayın', 'Gümüş', 'Kocakaya', 'Altundal', 'Günay', 'Düz', 'Dilek', 'Kurtuluş', 'Karpuzoğlu',
        'Ergintürk', 'Acar', 'Beyoğlu', 'Sulhan', 'Nuhveren', 'Avcıoğlu', 'Ahıskalı', 'Asena', 'Karacan', 'Erşekerci',
        'Gölemez', 'Tohumoğlu', 'Bozarslan', 'Köşker', 'Sül', 'Tarkan', 'Duman', 'Hodjaoglu', 'Ballı', 'Şatıroğlu',
        'Önde', 'Lağarlı', 'Özçay', 'Akdemir', 'İçbay', 'Demiröz', 'Kuyucu', 'Selçuk', 'İnce', 'Ergülü', 'Eşmen',
        'Gökalp', 'Ülger', 'Ayvaz', 'Elverdi', 'Cimbek', 'Fırat', 'Bahçebaşı', 'Dam', 'Köroğlu', 'Karaca', 'Seven',
        'Büyüktaş', 'Sertkaya', 'Öven', 'Ustaalioğlu', 'Yalnız', 'Savaş', 'Bereket', 'Pekgöz', 'Olmaz', 'Sevinç',
        'Merhametsiz', 'Çobanoğlu', 'Şimşek', 'Binnetoğlu', 'Öğütmen', 'Çınkır', 'Camcı', 'Yazak', 'Nizam', 'Türkoğlu',
        'Demirkol', 'Aksakal', 'Bozoğlan', 'Ayman', 'Saçlı', 'Karakılıç', 'Bakanay', 'Karaköse', 'Güven', 'Meşe',
        'Yeşilova', 'Eşkazan', 'Gerdan', 'Mumcuoğlu', 'Vatansever', 'Paköz', 'Atmış', 'Akçalı', 'Fakıoğlu', 'Yenidünya',
        'Anık', 'Köseoğlu', 'Sonay', 'Çeliker', 'Özdemirkıran', 'Durç', 'İner', 'Köksal', 'Berekatoğlu', 'Dilli',
        'Elbüken', 'Bahçeci', 'Bülbül', 'Kadı', 'Yücetürk', 'Öziş', 'Ulubaşoğlu', 'Akşahin', 'Karpuz', 'Yabul',
        'Göksoy', 'Tekiş', 'Aksoy', 'Başyurt', 'Yurdseven', 'Merden', 'Kısa', 'Karakaya', 'Sanhal', 'Bilgi', 'Kayabaş',
        'Gürbostan', 'Kabil', 'Tayyar', 'Şahbaz', 'Yancar', 'Olgaç', 'Malçok', 'Karasu', 'Karadağ', 'Toprak', 'Sağlam',
        'Kebapcılar', 'Tatar', 'Yüce', 'Tola', 'Güngör', 'Altınboğa', 'Yeniçeri', 'Işıkalan', 'Gürbüz', 'Kuru', 'Yurdam',
        'Başaran', 'Üreyen', 'Mesci', 'Haftacı', 'Orhan', 'Balsak', 'Çift', 'Bayramoğlu', 'Gençdal', 'Destegül', 'Karçin',
        'Baz', 'Altuntaş', 'Kırbaş', 'Kayman', 'Yeşildağer', 'Kayaoğlu', 'Celtemen', 'Şanlıkan', 'Tantekin', 'Karaalp',
        'Tuncer', 'Gök', 'Onar', 'Şekerci', 'Asoğlu', 'Khalil', 'Yurdakök', 'Keskin', 'Koçarslan', 'Tunçay', 'Sürmen',
        'Sevingil', 'Akkaya', 'Kuserli', 'Çeviker', 'Kaynak', 'Bayraktar', 'Çetintaş', 'Cantürk', 'Karadeniz', 'Alan',
        'Bakırcı', 'Nar', 'Ulusoy', 'Celiloğlu', 'Akdeniz', 'Yeral', 'Gürdal', 'Kütük', 'Kanyılmaz', 'Özbek', 'Albayrak',
        'Müezzinoğlu', 'Tüfenk', 'Kırış', 'Kıraslan', 'Saltürk', 'Açıkgöz', 'Sevük', 'Baytan', 'Aktuğ', 'Serin', 'Tuncay',
        'Günbey', 'Taşar', 'Avseren', 'Bal', 'Batmaz', 'Veziroğlu', 'Birdane', 'Araz', 'Server', 'Dalyan', 'Cilo',
        'Geçgel', 'Baştürk', 'Ersoy', 'Tay', 'Eryılmaz', 'Ocak', 'Öztürkeri', 'Eken', 'Sarıca', 'Darol', 'Cansever',
        'Güzel', 'Çakır', 'Aksun', 'Balal', 'Bayam', 'Şair', 'Ünlü', 'Yumurtaş', 'Alpsan', 'Gökmen', 'Canatan',
        'Taşkıran', 'Hatipoğlu', 'Sucak', 'Göksel', 'Karslı', 'Özgürol', 'Kalem', 'Dökmeci', 'Görmeli', 'Özateş',
        'Servet', 'Sarıkaya', 'Suluova', 'Serbest', 'Efe', 'Topak', 'Atbinici', 'Öz', 'Tepe', 'Özüak', 'Öncel',
        'Canbaz', 'Al', 'Gürer', 'Göncü', 'Özdamar', 'Karatoprak', 'Çavdar', 'Sözen', 'Gökçek', 'Çepni', 'Kır',
        'Özalp', 'Evrenos', 'Bayraktaroğlu', 'Uslusoy', 'Atalay', 'Topkara', 'Tenekeci', 'Çağıl', 'Mertol',
        'Hıdıroğlu', 'Gökçeimam', 'Önal', 'Musalar', 'Yacı', 'Işıklı', 'Ülgen', 'Küçükgöncü', 'Su', 'Koçar',
        'Baloğlu', 'Sarıcanbaz', 'Sert', 'Gelebek', 'Özan', 'Akyılmaz', 'Bakan', 'Karakan', 'Görkem', 'Cılız',
        'Basheer', 'Ten', 'Atlanoğlu', 'Soydan', 'Türkay', 'Menteş', 'Pınarbaşılı', 'Onay', 'Cerit', 'İmamoğlu',
        'Akdur', 'Yanmaz', 'Büber', 'Taşmalı', 'Bulakçı', 'Gerger', 'Dönmez', 'Yılmabaşar', 'Dikici', 'Arifoğlu',
        'Fidan', 'Sakarya', 'Özen', 'Onan', 'Akhun', 'Dur', 'Gürdemir', 'Altınsoy', 'Kalyoncu', 'Uçar', 'Şaşmaz',
        'Gülcan', 'Altuna', 'Gürel', 'Özkırış', 'İnci', 'Kenar', 'Akbaş', 'Bican', 'Kavzoğlu', 'Budak', 'Sargın',
        'Akkoyunlu', 'Kayhan', 'Tezer', '', 'Gürakan', 'Dokumacıoğlu', 'Kırhan', 'Esen', 'Özavcı', 'Aygün', 'Savran',
        'Gökmeydan', 'Emre', 'Kütükcü', 'Dikoğlu', 'Görenekli', 'Koca', 'Kılınç', 'Batgi', 'Azarkan', 'Türkmen',
        'Okulu', 'Kirişci', 'Kızmaz', 'Argon', 'Alıcı', 'Fındık', 'Güvendi', 'Üçer', 'Ergöz', 'Filiz', 'Alabalık',
        'Kızanoğlu', 'Yaşar', 'Çelen', 'Demirelli', 'Danışoğlu', 'Gürsoy', 'Şener', 'Abat', 'Ergün', 'Çiçekbilek',
        'Ünüş', 'Oğuz', 'Kol', 'Toker', 'Keleş', 'Seyrek', 'Asil', 'Toktaş', 'Ardıç', 'Çobanyıldızı', 'Müftüoğlu',
        'Yegen', 'Karaoğlanoğlu', 'Ayas', 'Karkın', 'Bilici', 'Albaş', 'Turan', 'Bayrakçı', 'Aşkın', 'Barışan',
        'Arda', 'Bardakçı', 'Ulu', 'Kıvrak', 'Kılavuz', 'Tan', 'Eşfer', 'Karakulak', 'Babayiğit', 'Baran', 'Özyörük',
        'Deniz', 'Özden', 'Karapıçak', 'Saka', 'Nasuhbeyoğlu', 'İplikçi', 'Özek', 'Ayyıldız', 'Çelikten', 'Sertoğlu',
        'Saraylı', 'Kılıçoğlu', 'Sezen', 'Atılgan', 'Daraman', 'Altaş', 'Gökgül', 'Kahraman', 'Güngörmez', 'Taşdelen',
        'Emeli', 'Sınıcı', 'Göktaş', 'Başar', 'Türksoy', 'Bayrak', 'Çoker', 'Kumbul', 'Özata', 'Seyrekoğlu', 'Bolattürk',
        'Dirican', 'Türemenoğulları', 'Aydemir', 'Apaydın', 'Sağcan', 'Evmez', 'Tikici', 'Tombul', 'Çiftci', 'Kelercioğlu',
        'Büyükkal', 'Açar', 'Karadavut', 'Dumludağ', 'Ağca', 'Bekler', 'Genez', 'Görmüş', 'Özlü', 'Pulat', 'Sobay',
        'Coşkuner', 'Peynirci', 'Can', 'İnceoğlu', 'Sümer', 'Duyan', 'Karameşe', 'Kapar', 'Kalıpcı', 'Düzce', 'Öztaş',
        'Gülbahar', 'Düzgün', 'Şencan', 'Aktemur', 'Toy', 'Karadurak', 'Aktürk', 'Özkaynar', 'Güneysu', 'Fişekci',
        'Eskimez', 'Şanlıer', 'Selvan', 'Yürek', 'Erel', 'Utlu', 'Ördek', 'Coşkun', 'Filizay', 'Hassan', 'Göçen',
        'Gözügül', 'Sönmezer', 'Günebakan', 'Biri', 'Güzelküçük', 'Atbaş', 'Seyhan', 'Akkaş', 'Dil', 'Baltacı',
        'Postallı', 'Armağan', 'Soluk', 'Corut', 'Ünüvar', 'Akova', 'Topalkara', 'Bozpolat', 'Gedikli', 'Şahan',
        'Kuşakçı', 'Manav', 'Canbolat', 'Baba', 'Sertkayaoğlu', 'Zeyli', 'Yenilmez', 'Örenç', 'Özgür', 'Çinpolat',
        'Kuş', 'Dursun', 'Yaradılmış', 'Gelegen', 'Ölker', 'Öztoprak', 'Özmuk', 'Kavukoğlu', 'Kındır', 'Kemik',
        'Sökmen', 'Kayra', 'İpek', 'Kevkir', 'Hamdemirci', 'Erat', 'Tanin', 'Yel', 'Taştekin', 'Atilla', 'Ozan',
        'Tazeoğlu', 'Durmuş', 'Azrak', 'Erzurum', 'Melekoğlu', 'Halis', 'Candaner', 'Altunöz', 'Gazi', 'İnselöz',
        'Deveci', 'Sil', 'Üngür', 'Kütükoğlu', 'Tunç', 'Gümürdü', 'Kaskalan', 'Olcar', 'Çakmak', 'Albay', 'Alben',
        'Temurtaş', 'Üçgül', 'Ekinci', 'Erdoğmuş', 'Kaçıra', 'Kankılıç', 'Oynak', 'Yakut', 'Berent', 'Suzan', 'Kardaş',
        'Üzen', 'Güllü', 'Demirer', 'Tel', 'Akbudak', 'Kapçak', 'Özsayım', 'Dilmen', 'Başak', 'Issı', 'Turğut', 'Çoban',
        'Suvari', 'Yeşil', 'Hoşer', 'Tayfur', 'Sabaz', 'Avcu', 'Subari', 'Yükselmiş', 'Bakay', 'Hüseyni', 'İzgi',
        'Aktan', 'Düzel', 'Tokar', 'Çeçen', 'Burulday', 'Çetinkaya', 'Zengin', 'Kayaalp', 'Sözer', 'Kuralay', 'Aracı',
        'Alp', 'Alım', 'Yörük', 'Levent', 'Karakaş', 'Dadalı', 'Arıkboğa', 'Gencan', 'Kıtay', 'Korkut', 'İvacık', 'Çatuk',
        'Karakoyunlu', 'Cinbiz', 'Camgöz', 'Başdaş', 'Hakyol', 'Varol', 'Sağ', 'Ürün', 'Berber', 'Akmeşe', 'Gökce',
        'Heybet', 'Babadağı', 'Altın', 'Parlak', 'Cebeci', 'Bayana', 'Bekar', 'Vurgan', 'Kurtpınar', 'Sarıçiçek', 'Tıraş',
        'Çitil', 'Baratalı', 'Yorgancı', 'Orak', 'Yerlikaya', 'Emirlioğlu', 'Gökçe', 'Usul', 'Turaç', 'Arık', 'Gültekin',
        'Kanneci', 'Teoman', 'Baklacı', 'Sevimli', 'Söyler', 'Konuralp', 'Dönertaş', 'Gökçen', 'Karataş', 'Başargan',
        'Tokat', 'Çavlı', 'Atak', 'Böcü', 'Ören', 'Şengüleroğlu', 'İlhan', 'Yayıkçı', 'Kor', 'Şirin', 'Duruk', 'Avşar',
        'Özaslan', 'Hüseyinoğlu', 'Küçükyıldız', 'Menekşe', 'Türe', 'Oflazoğlu', 'Azap', 'Zaim', 'Duran', 'Ayduğan',
        'Kottaş', 'Bacak', 'Aycan', '1', 'Topçu', 'Karlı', 'Gürpınar', 'Kaçer', 'Onrat', 'Elçiçek', 'Adıgüzel', 'Tehli',
        'Osmanca', 'Uslubaş', 'Görünmez', 'Dağ', 'Olgen', 'Üzüm', 'Özcanlı', 'Şekerler', 'Çınkıt', 'Başcı', 'Kesgin',
        'Göde', 'Şarlak', 'Kerimoğlu', 'Selim', 'Buluç', 'Kocubeyoğlu', 'Karalar', 'Çopur', 'Eyisoy', 'Üstündağ',
        'Öktem', 'Yaşan', 'Uslu', 'Bozoğlu', 'Kocasaraç', 'Alğan', 'Erdal', 'Kayka', 'Bacaksız', 'Ünalan', 'Boran',
        'Zeybek', 'Temiz', 'Etleç', 'Pehlivan', 'Coşar', 'Kahya', 'Ufacık', 'Turmuş', 'Çilesiz', 'Canpolat', 'Korucu',
        'Demirdağ', 'Bozan', 'İnanmaz', 'Aksöz', 'Yaşit', 'Gümüşçü', 'Gökkoca', 'Demirkapı', 'Çevirgen', 'Dündar',
        'Elçi', 'Atila', 'Alboğa', 'Asıg', 'Akkan', 'Atabay', 'Balta', 'Börta', 'Boğan', 'Bayar', 'Çörekli', 'Halıcı',
        'Göktepe', 'Koluş', 'İnanç', 'Orman', 'Nacar', 'Sadıç', 'Özkanlı', 'Saldıray', 'Sultanoğlu', 'Somay', 'Uruç',
        'Tolu', 'Süveran', 'Yetkinşekerci', 'Soytaş', 'Bolsoy', 'Arpat', 'Alışık', 'Onat', 'Karaarslan', 'Gökten',
        'Evran', 'Ararat', 'Akansel', 'Develi', 'Demircan', 'Büyükdoğan', 'Güleç', 'Emet', 'İleri', 'İlbay', 'Güneş',
        'Gülenay', 'Nadastepe', 'Ülkevan', 'Seğmen', 'Özdil', 'Mert', 'Mersin', 'Kırlangıç', 'Kendirli', 'Karnas',
        'Karcıoğlu', 'Karaismailoğlu', 'Kan', 'Yanık', 'Yağcızeybek', 'Toşur', 'Soyer', 'Sandal', 'Ordulu', 'Omay',
        'Kırcalı', 'Karaağaç', 'Kabakuş', 'İlgen', 'Gördük', 'Evren', 'Ertaş', 'Eldem', 'Demirtürk', 'Baş', 'Barça',
        'Aydos', 'Bobuşoğlu', 'Kırlı', 'Böyük', 'Yurtdaş', 'Yegin', 'Yakkan', 'Ulaş', 'Toper', 'Sayiner', 'Sarıgül',
        'Özsaygılı', 'Kolsuz', 'Keşkek', 'Keklikçioğlu', 'Kaykı', 'Karakök', 'Kacemer', 'İşgören', 'Ilgın', 'Hiçdurmaz',
        'Güvercin', 'Esmeray', 'Erkan', 'Emlek', 'Daylak', 'Çomut', 'Bostankolu', 'Bağ', 'Alparslan', 'Aladağ', 'Akçayır',
        'Akçay', 'Zubaroğlu', 'Yeter', 'Yardımcı', 'Ünver', 'Tutar', 'Taşcı', 'Susam', 'Sipahi', 'Pota', 'Okçu', 'Nurlu',
        'Kamacı', 'İnan', 'Günaydın', 'Ezer', 'Eşme', 'Elmaağaç', 'Dadlı', 'Çerik', 'Büyükpastırmacı', 'Bürkük', 'Bolkan',
        'Bayhan', 'Bahadır', 'Aykol', 'Akkoyun', 'Kiraz', 'Büyükbulut', 'Tanriverdi', 'Bertan', 'Bak', 'Özaydın',
        'Selvioğlu', 'Baziki', 'Küçüközkan', 'Sürücü', 'Uykur', 'Suman', 'Tacir', 'Özgüner', 'Kula', 'Gezici', 'Nart',
        'Baklalı', 'Mağatur', 'Dinler', 'Gençer', 'Varıcı', 'Kınık', 'Kalkan', 'Dayangaç', 'Kazan', 'Kozanoğlu',
        'Zileligil', 'Sağır', 'Başkak', 'Toptaş', 'Kızıldağ', 'Elik', 'Yalçin', 'Çeter', 'Nacaroğlu', 'Kavmaz',
        'Başyiğit', 'Bilal', 'Sungar', 'Kocaman', 'Kutlar', 'Candemir', 'Aykuş', 'Çelebi', 'Yağlı', 'Badem', 'Berkay',
        'Sakallı', 'Tevdik', 'Durman', 'Haşimoğlu', 'Kalyenci', 'Turanoğlu', 'Keser', 'Yüzer', 'Özcanoğlu', 'Dere',
        'Yetiz', 'Adısanlı', 'Akel', 'Mart', 'Korkmazoğlu', 'Nimetigil', 'Çınar', 'Tatlı', 'Atcı', 'Çiftçi', 'Özüdoğru',
        'Ökmen', 'Koptur', 'Dedemoğlu', 'Özbeyler', 'Bağlı', 'Mendeş', 'Uzunoğlu', 'Hiçyılmaz', 'Aras', 'Yeşilfidan',
        'Güveren', 'Erdağ', 'Saatçıoğlu', 'Gençtürk', 'Aksu', 'Dağlı', 'Mönür', 'Kesik', 'Azar', 'Artuç', 'Bakar',
        'Dinçer', 'Doruk', 'Dağlıoğlu', 'Kaan', 'Mavi', 'Tezel', 'Genel', 'Seçkin', 'Kaylan', 'Aslaner', 'Evci',
        'Coşgun', 'Sertel', 'Burak', 'Baglars', 'Para', 'Caf', 'Cantay', 'İmalı', 'Geçmen', 'Şenöz', 'Atar', 'Çalık',
        'Kanat', 'Göktürk', 'Baştemir', 'Almoftı', 'Gedük', 'Topcuoğlu', 'Peker', 'Yamak', 'Çolakerol', 'Avlanır',
        'Dedeoğlu', 'Tekir', 'Tokmak', 'Arı', 'Aksaç', 'Arıcı', 'Afşar', 'Bölükbaş', 'Çöl', 'Eylen', 'Kılbacak',
        'Memiş', 'Çamur', 'Canik', 'Tozlu', 'Bilgin', 'Sancar', 'İris', 'Sivri', 'Bilge', 'Büyükceran', 'Orta',
        'Parasız', 'Yılanlı', 'Kavurgacı', 'Teğin', 'Karan', 'Kaykısız', 'Divarcı', 'Pırtı', 'Mirza', 'Kısaoğlu',
        'Yeniay', 'Kunak', 'Güldamla', 'Çınarlık', 'Erken', 'Sakallıoğlu', 'Semerci', 'Kocayiğit', 'Atçeken', 'Pazır',
        'Ayrancı', 'Çölbe', 'Topuz', 'Kala', 'Adalı', 'Altunyaprak', 'Kaşıkçı', 'Sekin', 'Yönet', 'Küçükceran', 'Taniş',
        'Uğurlu', 'Bolatkale', 'Geyik', 'Alaybeyoğlu', 'Sayyiğit', 'Ceran', 'İzci', 'Höke', 'Uzunca', 'Uzuncan',
        'Pekdoğan', 'Ersöz', 'Alkış', 'Yildiz', 'Büyükkalaycı', 'Moran', 'Çaylı', 'Çangal', 'Kubat', 'Katran',
        'Leymunçiçeği', 'Piri', 'Bozkuş', 'Kınalıoğlu', 'Tarakcı', 'Ürkmez', 'Elgörmüş', 'Özkaya', 'Yanardağ', 'Özhan',
        'Kaplankıran', 'Tilbe', 'Küçük', 'Molla', 'Çankaya', 'Kasap', 'Yumak', 'Kutan', 'Özdenoğlu', 'Konuk', 'Akış',
        'Kızılmeşe', 'Çantay', 'Derhem', 'Ahçı', 'Kıran', 'Kızıltoprak', 'Kayıhan', 'Günyel', 'Özanlağan', 'Şerbetçi',
        'Senemtaşı', 'Güçlü', 'Nozoğlu', 'Yaprak', 'İştar', 'Okudan', 'Barut', 'Kılıçcıoğlu', 'Ertan', 'İstek', 'Temli',
        'Arslankeçecioğlu', 'Dağdelen', 'Çete', 'İsen', 'Karamahmutoğlu', 'Duyu', 'İlker', 'Gülsoy', 'Akgün', 'Toyran',
        'İbişoğlu', 'Tekinsoy', 'Yapar', 'Söylemez', 'Savğa', 'İlik', 'Oğuzsoy', 'Aşan', 'Teker', 'Yıldırımçakar',
        'Yalınkılıç', 'Ayaz', 'Sadunoğlu', 'Ural', 'Kansu', 'Yağan', 'Büdün', 'Öter', 'Kopan', 'Karaaslan', 'Kahreman',
        'Kurul', 'Büyük', 'Sansarcı', 'Pirdoğan', 'Rençber', 'Sülük', 'Mutluer', 'Eyüp', 'Yakışan', 'Nalbant', 'Erşen',
        'Sarıekiz', 'Alkaç', 'Güleşen', 'Doğangüzel', 'Feyzullahoğlu',
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
