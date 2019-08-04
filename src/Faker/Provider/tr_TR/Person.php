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
     * @link https://www.sabah.com.tr/galeri/yasam/erkek-bebek-isimleri/50
     *
     * @var array Turkish first names.
     */
    protected static $firstNameMale = array(
        'Alper', 'Alperen', 'Altemur', 'Âmir', 'Ammâr', 'Arda', 'Aşkın', 'Ata', 'Atalay', 'Atâullah', 'Avşar', 'Aykan', 'Aykut', 'Aytekin', 'Ayvaz', 'Babacan', 'Baha', 'Bahadır', 'Barın', 'Battal', 'Batu', 'Bedir', 'Behcet', 'Behlül', 'Behnan', 'Behram', 'Behzat', 'Bekir', 'Bektaş', 'Bera', 'Berkan', 'Berkin', 'Beşer', 'Beşir', 'Bilal', 'Bilgehan', 'Bişr', 'Buğra', 'Burak', 'Burhan', 'Bülent', 'Cafer', 'Câbir', 'Can', 'Candar', 'Caner', 'Canib', 'Cantekin', 'Cârullah', 'Celâl', 'Çelebi', 'Habbab', 'Habil', 'Hacib', 'Hafi', 'Hafid', 'Hakan', 'Hakem', 'Haki', 'Hakkı', 'Haldun', 'Halife', 'Halil', 'Haluk', 'Hamdullah', 'Hammâd', 'Hamza', 'Han', 'Hanefi', 'Hani', 'Hasan', 'Haseki', 'Hasibi', 'Hasin', 'Hâtem', 'Hattâb', 'Hatip', 'Hayali', 'Haydar', 'Hayrani', 'Hayreddin', 'Haşim', 'Haşmet', 'Hazım', 'Hızır', 'Hicabi', 'Hilmi', 'Himmet', 'Hişam', 'Hud', 'Hulusi', 'Hurşid', 'Huzeyfe', 'Hüccet', 'Hüdâvendigâr', 'Hüdayi', 'Hümayun', 'Hüsameddin', 'Hüseyin', 'Hüsrev', 'Cezmi', 'Cihad', 'Cihangir', 'Civan', 'Cihanşah', 'Cübeyr', 'Cüneyt', 'Dâhi', 'Dâi', 'Dânâ', 'Daniş', 'Danişmend', 'Dâver', 'Derviş', 'Dilhan', 'Dilaver', 'Doğan', 'Dülger', 'Ecehan', 'Ecmel', 'Ecvet', 'Ede', 'Edhem', 'Efe', 'Efken', 'Eflah', 'Ekmel', 'Ekrem', 'Elvan', 'Emced', 'Emir', 'Emre', 'Enes', 'Engin', 'Enver', 'Ercümend', 'Erdem', 'Ergün', 'Erhan', 'Erkam', 'Erkan', 'Erkin', 'Erman', 'Erol', 'Ertuğrul', 'Esat', 'Esed', 'Esved', 'Eşref', 'Etem', 'Evran', 'Eymen', 'Eyüp', 'Ezrak', 'Fazlı', 'Fahreddin', 'Fâlih', 'Faris', 'Faruk', 'Fasih', 'Fatih', 'Fatin', 'Faysal', 'Fazlullah', 'Feda', 'Fedai', 'Feramuz', 'Feramuş', 'Ferhan', 'Ferhat', 'Feridüddin', 'Feridun', 'Ferman', 'Ferruh', 'Fettah', 'Feyyâz', 'Feyzullah', 'Fuat', 'Furkan', 'Fuzuli', 'Gazanfer', 'Gazi', 'Gevheri', 'Gıyas', 'Giray', 'Gürbüz', 'Kaan', 'Kabil', 'Kadem', 'Kâdir', 'Kadîr', 'Kadı', 'Kalender', 'Kamran', 'Kasım', 'Kâzım', 'Keleş', 'Kemal', 'Keramet', 'Kerami', 'Kerem', 'Keremşah', 'Key', 'Keşşaf', 'Kılıç', 'Kıymet', 'Kiram', 'Korkut', 'Kuddusi', 'Levent', 'Levni', 'Mahdum', 'Mahmud', 'Mahmur', 'Murat', 'Mazhar', 'Memun', 'Mecdeddin', 'Mecnun', 'Medeni', 'Mert', 'Mestan', 'Metin', 'Mir', 'Miraç', 'Mirkelam', 'Mirza', 'Misbah', 'Mithat', 'Muammer', 'Muaz', 'Muhammed', 'Muharrem', 'Muhtar', 'Muhterem', 'Muhteşem', 'Muhyiddin', 'Muktedi', 'Muktedir', 'Muktefi', 'Muslih', 'Mustafa', 'Mutahhar', 'Mutasım', 'Muteber', 'Mutemed', 'Mutlu', 'Muttalib', 'Mübarek', 'Mübeşşir', 'Müjdat', 'Mükerrem', 'Mülayim', 'Mümtaz', 'Müren', 'Mürsel', 'Müşir', 'Müzdad', 'Nabi', 'Namdar', 'Nasreddin', 'Nebi', 'Necat', 'Necati', 'Neccar', 'Necdet', 'Necih', 'Necmi', 'Nefi', 'Nejat', 'Nesimi', 'Nevzat', 'Neşat', 'Nihat', 'Nijad', 'Niyazi', 'Nizam', 'Numan', 'Nuaym', 'Nusret', 'Nüzhet', 'Oğuz', 'Oğuzhan', 'Okan', 'Oktay', 'Orhan', 'Ozan', 'Öktem', 'Ömer', 'Önder', 'Peyami', 'Raci', 'Racih', 'Rafet', 'Ramazan', 'Ramiz', 'Rauf', 'Recai', 'Recep', 'Refah', 'Re'fet', 'Reha', 'Reis', 'Resül', 'Reşat', 'Reşid', 'Rıfat', 'Rüçhan', 'Rıdvan', 'Rıza', 'Sadeddin', 'Sadullah', 'Sadun', 'Safa', 'Saffet', 'Saffan', 'Salahaddin', 'Sâman', 'Sedat', 'Selami', 'Selçuk', 'Selman', 'Serdar', 'Serhat', 'Sertaç', 'Server', 'Sevban', 'Seyfi', 'Seyfullah', 'Seymen', 'Seyyid', 'Sezgin', 'Sinan', 'Sirac', 'Siraceddin', 'Siyami', 'Soner', 'Sunullah', 'Şaban', 'Şabi', 'Şadan', 'Şahap', 'Şahinalp', 'Şahsüvar', 'Şâfi', 'Şarani', 'Şecaeddin', 'Şehlevent', 'Şemseddin', 'Şemsi', 'Şerafeddin', 'Şeref', 'Şevket', 'Şevki', 'Şeyban', 'Şihab', 'Şihabeddin', 'Şinasi', 'Şir', 'Taceddin', 'Taci', 'Tahsin', 'Taki', 'Talat', 'Talha', 'Tamer', 'Taner', 'Tanju', 'Tarık', 'Ubeydullah', 'Üsame', 'Vakkas', 'Vakur', 'Vakıf', 'Vâlâ', 'Vecdi', 'Vecit', 'Vecihi', 'Vedat', 'Vefa', 'Veli', 'Yahya', 'Yaver', 'Yavuz', 'Yekta', 'Zafer', 'Zâfir', 'Zamir', 'Zekai', 'Zekeriyya', 'Zeyd', 'Zeynel', 'Ziver', 'Ziya', 'Ziyad', 'Zübeyr'
    );

    /**
     * @link http://www.yasemin.com/yasam/haber/2402617-hem-modern-hem-klasik-2018-en-guzel-kiz-bebek-isimleri-ve-anlamlari
     *
     * @var array Turkish first names.
     */
    protected static $firstNameFemale = array(
        'Açelya', 'Adalet', 'Adniye', 'Afitab', 'Ahenk', 'Ahsen', 'Ahu', 'Akasya', 'Akgün', 'Akşın', 'Ala', 'Aleda', 'Aleyna', 'Alara', 'Alçin', 'Algın', 'Alım', 'Amine', 'Andaç', 'Anıl', 'Arzu', 'Arya', 'Asena', 'Asiye', 'Asya', 'Aslı', 'Aslıhan', 'Asu', 'Asuman', 'Atiye', 'Atıfet', 'Ayben', 'Aybike', 'Aycan', 'Ayça', 'Ayda', 'Aydan', 'Ayfer', 'Aygün', 'Aykal', 'Ayla', 'Aylin', 'Aynur', 'Ayperi', 'Aysar', 'Ayşe', 'Ayşegül', 'Ayşen', 'Ayşıl', 'Ayşin, Ayşim', 'Ayten', 'Azimet', 'Azra', 'Bade', 'Bahar', 'Balın', 'Banu', 'Başak', 'Begüm', 'Behin', 'Belgi', 'Belgin', 'Belkıs', 'Belma', 'Belur', 'Benan', 'Bennur', 'Bengi', 'Bengisu', 'Berat', 'Beren', 'Berfu', 'Beria', 'Bergüzar', 'Beril', 'Belen', 'Beliz', 'Berin', 'Berna', 'Berrak', 'Berire', 'Besamet', 'Beste', 'Betigül', 'Betül', 'Beyhatun', 'Beylem', 'Beyza', 'Bige', 'Bihter', 'Bilge', 'Bilgehatun', 'Billur', 'Biray', 'Birgül', 'Biricik', 'Bingül', 'Buket', 'Burçak', 'Burçin', 'Burcu', 'Buse', 'Büge', 'Büşrâ', 'Canan', 'Canay', 'Candan', 'Candaş', 'Caneda', 'Cangül', 'Cansel', 'Cansın', 'Cansu', 'Cavidan', 'Cemre', 'Ceren', 'Cevza', 'Ceyda', 'Ceylan', 'Cihanfer', 'Çağ', 'Çağla', 'Çiğdem', 'Çilen', 'Çiler', 'Çiselen', 'Çisil', 'Damla', 'Defne', 'Demet', 'Deren', 'Derin', 'Derya', 'Deste', 'Destegül', 'Devin', 'Dicle', 'Didar', 'Dide', 'Didem', 'Dila', 'Dilan', 'Dilara', 'Dilay', 'Dilber', 'Dilbeste', 'Dildade', 'Dildar', 'Dilde', 'Dilek', 'Dilhan', 'Dilrüba', 'Dilsafa', 'Dilşad', 'Dilşah', 'Dilşikâr', 'Dora', 'Doğay', 'Doğu', 'Dolunay', 'Duru', 'Duygu', 'Duygun', 'Dürre', 'Ebru', 'Ece', 'Ecmel', 'Eda', 'Efil', 'Efser', 'Efsun', 'Ege', 'Ela', 'Elif', 'Eliz', 'Elvan', 'Emel', 'Erem', 'Erçil', 'Erda', 'Erna', 'Erva', 'Esen', 'Esim', 'Esma', 'Esra', 'Eva', 'Evin', 'Eylül', 'Ezgi', 'Fatma (Fatıma)', 'Fazilet', 'Ferah', 'Ferda', 'Ferdiye', 'Feray', 'Ferhan', 'Ferhunde', 'Feri', 'Feride', 'Feriha', 'Ferihan', 'Ferişte', 'Ferzane', 'Feza', 'Feris', 'Ferzin', 'Feyza', 'Fidan', 'Figen', 'Fitnat', 'Firdevs', 'Firuze', 'Fulya', 'Füruzan', 'Füsun', 'Füsünkâr', 'Gaye', 'Gazal', 'Gazel', 'Gece', 'Gerçek', 'Gönül', 'Gökben', 'Gözde', 'Gözen', 'Güher', 'Gülbanu', 'Gülberk', 'Gülbin', 'Gülbiz', 'Gülçehre', 'Gülcemal', 'Gülçiçek', 'Gülçin', 'Güldemet', 'Gülfam', 'Gülfem', 'Gülfer', 'Gülfeşan', 'Gülfidan', 'Gülhiz', 'Gülistan', 'Gülnar', 'Gülnaz', 'Gülsima', 'Gülsüm', 'Gülter', 'Gülşen', 'Güneş', 'Güney', 'Güz', 'Güzay', 'Güzide', 'Güzin', 'Hacer', 'Handan', 'Hande', 'Hatice', 'Hale', 'Halenur', 'Hamiyet', 'Harika', 'Hayal', 'Hayat', 'Hazal', 'Hazan', 'Hazar', 'Helin', 'Henna', 'Hesna', 'Hera', 'Hevin', 'Haver', 'Havva', 'Hayrunnisa', 'Hicran', 'Hicret', 'Hilâl', 'Hilde', 'Huban', 'Huri', 'Huriye', 'Hülya', 'Hüma', 'Hümeyra', 'Hürrem', 'Hüsnâ', 'Hüsnügül', 'Hüveyda', 'Iğıl', 'Ilgın', 'Ilgım', 'Ilım', 'Itır', 'İclal', 'İdil', 'İffet', 'İkbal', 'İlayda', 'İlgin', 'İlkin', 'İlma', 'İmer', 'İpar', 'İrem', 'İren', 'İris', 'İyem', 'İzem', 'İzgi', 'Jale', 'Janset', 'Jeyan', 'Jülide', 'Kader', 'Kamelya', 'Kardelen', 'Kayra', 'Kevser', 'Kıvılcım', 'Kübra', 'Kündem', 'Lal', 'Lalezar', 'Lamia', 'Lema', 'Leman', 'Lemis', 'Letafet', 'Leyan', 'Leyla', 'Lila', 'Linet', 'Mahinev', 'Mahiye', 'Mahpeyker', 'Mahru', 'Maide', 'Makbule', 'Maral', 'Mayda', 'Mayıs', 'Mebşure', 'Mehir', 'Mehlika', 'Mehpare', 'Mehtap', 'Mehveş', 'Melahat', 'Melda', 'Melek', 'Melis', 'Meriç', 'Merve', 'Merze', 'Meryem', 'Mestinaz', 'Mevhibe', 'Meysere', 'Mısra', 'Mihman', 'Mihriban', 'Mihrimah', 'Mihrinaz', 'Mina', 'Mimoza', 'Miray', 'Mualla', 'Muattar', 'Muhabbet', 'Muhaddere', 'Müberra', 'Mübeşşer', 'Mübeyyen', 'Müjde', 'Müjgan', 'Müjgen', 'Münevver', 'Münteha', 'Mürüvvet', 'Nakşıdil', 'Nalan', 'Narin', 'Nazan', 'Nazende', 'Nazenin', 'Nazik', 'Nazlı', 'Necla', 'Nedret', 'Nehar', 'Nehir', 'Nemika', 'Neriman', 'Nermin', 'Neslihan', 'Neslişah', 'Nesrin', 'Neşe', 'Neşide', 'Neval', 'Nevbahar', 'Nevbaht', 'Nevber', 'Nevcivan', 'Neveda', 'Nevin', 'Nevinbal', 'Nevinur', 'Nevra', 'Nevres', 'Nezafet', 'Nezahet', 'Nezaket', 'Nida', 'Nigahban', 'Nigar', 'Nihal', 'Nihan', 'Nilgün', 'Nilüfer', 'Niran', 'Nisa', 'Nisan', 'Nur', 'Nuran', 'Nuray', 'Nurbanu', 'Nurcihan', 'Nurçin', 'Nurhan', 'Nurhayat', 'Nurperi', 'Nurşen', 'Nurşin', 'Nükhet', 'Ödül', 'Özge', 'Özlem', 'Özün', 'Pamira', 'Parla', 'Peren', 'Peri', 'Peride', 'Perihan', 'Rana', 'Ravza', 'Rayiha', 'Refhan', 'Remide', 'Rengin', 'Reside', 'Reyhan', 'Rikkat', 'Rima', 'Rosa', 'Rugeş', 'Ruhan', 'Ruken', 'Rukiye', 'Rumeysa', 'Ruşen', 'Ruzenin', 'Rüveyda', 'Rüveyha', 'Saadet', 'Sabahat', 'Sabia', 'Saniye', 'Sara', 'Sare', 'Saye', 'Satıa', 'Sebla', 'Seda', 'Seha', 'Sehavet', 'Seher', 'Selamet', 'Selis', 'Selma', 'Semen', 'Semin', 'Semra', 'Sena', 'Serap', 'Sevde', 'Seyyal', 'Sibel', 'Soneda', 'Suna', 'Suzan', 'Süeda', 'Sülün', 'Sümeyye', 'Süveyda', 'Şahdane', 'Şahika', 'Şahmelek', 'Şebnem', 'Şermende', 'Şermin', 'Şermize', 'Şevval', 'Şeybe', 'Şeyda', 'Şeyma', 'Şirin', 'Şule', 'Şükran', 'Talia', 'Tamay', 'Tuba', 'Tülin', 'Türkan', 'Ulya', 'Ülfet', 'Ümeyme', 'Ümmühan', 'Vedia', 'Vedide', 'Vesamet', 'Vesile', 'Vildan', 'Vira', 'Vuslat', 'Yâdigar', 'Yârıdil', 'Yelda', 'Yeldem', 'Yeşim', 'Zehra', 'Zehre', 'Zerengül', 'Zerişte', 'Zerrin', 'Zeynep', 'Ziba', 'Zinnur', 'Zişan', 'Zübeyde', 'Zülal', 'Züleyha', 'Zülfibar', 'Zülfiyar', 'Zümra', 'Zümrüt'
    );

    /**
     * @link http://www.turkcewiki.org/w/index.php?title=Kategori:T%C3%BCrk%C3%A7e_soyadlar%C4%B1
     *
     * @var array Turkish last names.
     */
    protected static $lastName = array(
        'Abalıoğlu', 'Acar', 'Açıkgöz', 'Adal', 'Adan', 'Âdem', 'Adıvar', 'Ağaoğlu', 'Akal', 'Akan', 'Akar', 'Akarsu', 'Akay', 'Akaydın', 'Akbaşlı', 'Akbay', 'Akbulut', 'Akçal', 'Akçalı', 'Akçay', 'Akdağ', 'Akgül', 'Akışık', 'Akkaş', 'Akkor', 'Akkurt', 'Akman', 'Akpınar', 'Aksoy', 'Akşit', 'Aktan', 'Aktay', 'Akyıldız', 'Akyürek', 'Akyüz', 'Alev', 'Alnıaçık', 'Alpuğan', 'Altan', 'Altınay', 'Altınbaş', 'Altınel', 'Altınışık', 'Altınok', 'Altıntaş', 'Altıok', 'Altun', 'Altuntaş', 'Alyanak', 'Aras', 'Arıcan', 'Arığ', 'Arık', 'Arıkan', 'Arslanoğlu', 'Arzu', 'Asil', 'Aşçı', 'Aşıkoğlu', 'Aşkın', 'Atakol', 'Atan', 'Atasever', 'Atıcı', 'Atılgan', 'Atik', 'Atlı', 'Avan', 'Avcı', 'Avni', 'Ayaydın', 'Ayaz', 'Aybar', 'Aydan', 'Aydemir', 'Aydoğdu', 'Aygün', 'Aykaç', 'Aykan', 'Aykurt', 'Aytaç', 'Aytek', 'Aytekin', 'Ayverdi', 'Ayyıldız', 'Babacan', 'Babalı', 'Babaoğlu', 'Bademci', 'Bakan', 'Bakırcı', 'Bakırcıoğlu', 'Balaban', 'Ballı', 'Baran', 'Barbarosoğlu', 'Basmacı', 'Başaran', 'Başoğlu', 'Baturalp', 'Baykam', 'Bayraktutan', 'Bekçi', 'Bektaş', 'Berberoğlu', 'Berk', 'Berkin', 'Beşerler', 'Beşok', 'Bıçakçı', 'Biçer', 'Bildik', 'Bilgiç', 'Bilgin', 'Birdal', 'Birgül', 'Birlik', 'Boduroğlu', 'Bolat', 'Bolatlı', 'Bozoğlu', 'Bölükbaş', 'Bölükbaşı', 'Bulak', 'Burak', 'Can', 'Canberk', 'Candan', 'Cankardeş', 'Cansel', 'Caymaz', 'Cebe', 'Ceyhan', 'Ceyhun', 'Civelek', 'Coşkun', 'Ç', 'Çağıran', 'Çakar', 'Çakmakçı', 'Çam', 'Çamdalı', 'Çapanoğlu', 'Çatalbaş', 'Çavdar', 'Çavuş', 'Çebi', 'Çeki', 'Çekmez', 'Çelikbaş', 'Çelikkol', 'Çetin', 'Çetiner', 'Çevik', 'Çıtak', 'Çiftçi', 'Çiftlioğlu', 'Çilingir', 'Çilingiroğlu', 'Çiloğlu', 'Çimen', 'Çolak', 'Çolakoğlu', 'Çörekçi', 'Dağdaş', 'Dağdelen', 'Dağlaroğlu', 'Dağlı', 'Dalkıran', 'Değirmenci', 'Demirayak', 'Demirbaş', 'Demirel', 'Demirkan', 'Demirkol', 'Denkel', 'Derebaşı', 'Dereli', 'Diker', 'Dilmen', 'Dinç', 'Dinçer', 'Dinçmen', 'Dinçsoy', 'Dizdar', 'Doğan', 'Doğruer', 'Dönmez', 'Duman', 'Durak', 'Durmaz', 'Durmuş', 'Duygulu', 'Düşenkalkar', 'Düvenci', 'Egeli', 'Eğilmez', 'Eğilmezbaş', 'Ekici', 'Ekim', 'Ekin', 'Ekinci', 'Ekler', 'Ekşi', 'Ekşioğlu', 'Elçi', 'Elçiboğa', 'Eldem', 'Eliçin', 'Elmastaşoğlu', 'Emiroğlu', 'Erbay', 'Erberk', 'Erbulak', 'Ercan', 'Erçetin', 'Erçin', 'Erdem', 'Erdinç', 'Erdoğan', 'Erel', 'Erez', 'Erginsoy', 'Ergül', 'Erkekli', 'Eronat', 'Ersan', 'Ersin', 'Ersöz', 'Ertepınar', 'Ertürk', 'Evliyaoğlu', 'Fahri', 'Fazlıoğlu', 'Genç', 'Gençer', 'Gençerler', 'Germen', 'Gezer', 'Gider', 'Gök', 'Gökalp', 'Gökçen', 'Gökgöz', 'Gökhan', 'Gökmen', 'Göksel', 'Göktaş', 'Gönül', 'Gönültaş', 'Gör', 'Gören', 'Görmez', 'Güçlü', 'Güleç', 'Gülen', 'Güler', 'Gülerce', 'Gülhan', 'Gümüşay', 'Gümüşdağ', 'Gümüşpala', 'Günday', 'Güngör', 'Gürbüz', 'Gürlek', 'Gürler', 'Gürmen', 'Gürsel', 'Gürsu', 'Gürüz', 'Güven', 'Güvener', 'Güzelses', 'Hakverdi', 'Hakyemez', 'Haliloğlu', 'Hamzaoğlu', 'Ilıcalı', 'Ilıman', 'İ', 'İbrahimoğlu', 'İlter', 'İnce', 'İncekara', 'İnceoğlu', 'İnler', 'İpekçi', 'İpekkaya', 'İrem', 'İslimyeli', 'İzbırak', 'İzgi', 'Kaftancıoğlu', 'Kahveci', 'Kalkan', 'Kalyoncu', 'Kaner', 'Kantarcı', 'Kaplangı', 'Karaböcek', 'Karabulut', 'Karadaş', 'Karadeniz', 'Karaduman', 'Karaer', 'Karagülle', 'Karakaş', 'Karakuş', 'Karapınar', 'Karatepe', 'Kasapoğlu', 'Kaşıkçı', 'Kavaklıoğlu', 'Kavlak', 'Kaya', 'Kaymak', 'Kaymakçı', 'Keçeci', 'Kekilli', 'Keleş', 'Keseroğlu', 'Kılıç', 'Kılıççı', 'Kılıçlar', 'Kıpçak', 'Kıraç', 'Kilimci', 'Koca', 'Kocabıyık', 'Koç', 'Koçaş', 'Koçoğlu', 'Koçyiğit', 'Korkmaz', 'Korol', 'Koşar', 'Kök', 'Köksal', 'Köprücü', 'Körmükçü', 'Köroğlu', 'Körpe', 'Köseoğlu', 'Köybaşı', 'Kubat', 'Kuday', 'Kulaksızoğlu', 'Kumcuoğlu', 'Kunt', 'Kunter', 'Kurutluoğlu', 'Kuş', 'Kutlar', 'Kutlay', 'Küçük', 'Küçükler', 'Kütükçü', 'Limoncuoğlu', 'Manço', 'Maraşlı', 'Mataracı', 'Mayhoş', 'Memiş', 'Menekşe', 'Menemencioğlu', 'Menteşoğlu', 'Mert', 'Mertoğlu', 'Mıhçıoğlu', 'Mumcu', 'Mutlu', 'Müldür', 'Nadir', 'Naki', 'Nalbantoğlu', 'Namoğlu', 'Numanoğlu', 'Odabaşı', 'Oduncu', 'Oğuz', 'Oktay', 'Okumuş', 'Okur', 'Olcay', 'Onay', 'Onbaşı', 'Onur', 'Oraloğlu', 'Orbay', 'Oruçoğlu', 'Ozansoy', 'Ö', 'Öksüz', 'Ölmez', 'Ömür', 'Öngören', 'Önür', 'Örge', 'Öymen', 'Özarslan', 'Özbek', 'Özberk', 'Özbey', 'Özbir', 'Özçelik', 'Özdağ', 'Özden', 'Özdenak', 'Özdil', 'Özdoğan', 'Özel', 'Özgörkey', 'Özgül', 'Özgür', 'Özışık', 'Özkara', 'Özkaya', 'Özkök', 'Özkul', 'Özlü', 'Özmert', 'Özoğuz', 'Özşener', 'Öztaş', 'Öztek', 'Öztekin', 'Öztonga', 'Öztuna', 'Öztürk', 'Özüdoğru', 'Özyılmazel', 'Özyiğit', 'Özyol', 'Özyürek', 'Paksüt', 'Peker', 'Pekkan', 'Poçan', 'Polat', 'Poyrazoğlu', 'Pulat', 'Sabuncu', 'Sadıklar', 'Sadıkoğlu', 'Sağlam', 'Sağyaşar', 'Sakallı', 'Salihoğlu', 'Samancı', 'Sandalcı', 'Sapmaz', 'Saraç', 'Sarıgül', 'Sarıoğlu', 'Sarper', 'Sayar', 'Saygıner', 'Sayman', 'Selvi', 'Sepetçi', 'Sesigüzel', 'Seven', 'Sever', 'Sevgi', 'Sevinç', 'Sezek', 'Sezgin', 'Sinanoğlu', 'Sinirlioğlu', 'Sipahioğlu', 'Solak', 'Solmaz', 'Soner', 'Soyak', 'Soylu', 'Sönmez', 'Söyler', 'Sözeri', 'Sucu', 'Süer', 'Süleymanoğlu', 'Ş', 'Şamlıoğlu', 'Şan', 'Şen', 'Şendağ', 'Şengül', 'Şengün', 'Şentürk', 'Şimşek', 'Şit', 'Şoray', 'Tahincioğlu', 'Tamer', 'Taner', 'Tanış', 'Tanrıkulu', 'Taşbulak', 'Taşçı', 'Taşdelen', 'Taşkıran', 'Taşlı', 'Taşyürek', 'Tatlı', 'Tatlıses', 'Tazegül', 'Tekand', 'Tekelioğlu', 'Telli', 'Temel', 'Terzi', 'Terzioğlu', 'Tevfik', 'Tezel', 'Tınaz', 'Timuçin', 'Tok', 'Tokatlıoğlu', 'Tokgöz', 'Topaloğlu', 'Topçu', 'Topçuoğlu', 'Toprak', 'Topsakal', 'Tosun', 'Tuğlu', 'Tuğluk', 'Tunaboylu', 'Tunahan', 'Tuncay', 'Tunç', 'Tunçay', 'Tunçeri', 'Turan', 'Türkdoğan', 'Türker', 'Türkeri', 'Türkyılmaz', 'Tütüncü', 'Tüzün', 'Uca', 'Uçar', 'Uluç', 'Ulukan', 'Ulukaya', 'Ulutaş', 'Uraz', 'Usta', 'Ustalar', 'Uzun', 'Uzunoğlu', 'Ü', 'Üçtaş', 'Ülkü', 'Ümit', 'Ünal', 'Ünaldı', 'Üner', 'Ünlütürk', 'Ünsal', 'Üstün', 'Üstünel', 'Üzümcü', 'Varlı', 'Velioğlu', 'Vural', 'Yakan', 'Yakupoğlu', 'Yalçın', 'Yalım', 'Yanar', 'Yanardağ', 'Yapıcı', 'Yardım', 'Yaşar', 'Yaşaroğlu', 'Yazıcı', 'Yazıcıoğlu', 'Yener', 'Yenigün', 'Yerli', 'Yeşilkaya', 'Yetiş', 'Yetkiner', 'Yıldırım', 'Yıldızoğlu', 'Yılmazer', 'Yiğit', 'Yorulmaz', 'Yörük', 'Yurdakul', 'Yücel', 'Zafer', 'Zileli', 'Zorlu'
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
