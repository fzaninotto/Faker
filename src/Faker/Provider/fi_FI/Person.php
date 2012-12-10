<?php

namespace Faker\Provider\fi_FI;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}'
    );

    protected static $firstName = array(
        'Aada', 'Aamu', 'Ada', 'Aina', 'Aino', 'Aliina', 'Aliisa', 'Amanda', 'Amalia', 'Amelia', 'Amira', 'Anissa', 'Anna', 'Anne', 'Anni', 'Anniina', 'Annilotta', 'Annu', 'Aune', 'Asta', 'Aura', 'Aurora', 'Aake', 'Aapeli', 'Aapo', 'Aappo', 'Aarni', 'Aaro', 'Aatto', 'Aatu', 'Aki', 'Akseli', 'Aku', 'Aleksi', 'Anssi', 'Antti', 'Antton', 'Ari', 'Arttu', 'Artturi', 'Atte', 'Anita', 'Anu', 'Antero', 'Atte',
        'Beeda', 'Briitta', 'Bella',
        'Cara', 'Celina', 'Christa', 'Clara', 'Christel', 'Cornelia',
        'Daniel', 'Dani',
        'Eeli', 'Eelis', 'Eemeli', 'Eero', 'Eetu', 'Ekku', 'Elias', 'Eljas', 'Esa', 'Elmo', 'Emil', 'Eerika', 'Eeva', 'Eevi', 'Elea', 'Eliina', 'Elina', 'Elisa', 'Elise', 'Ella', 'Ellen', 'Elviira', 'Emma', 'Emmaliina', 'Emmi', 'Emilia', 'Enna', 'Enni', 'Ennika', 'Eveliina', 'Eva', 'Eija', 'Elma', 'Erja', 'Essi', 'Erkki', 'Erkko',
        'Fanni', 'Fiona',
        'Hampus', 'Hannu', 'Harri', 'Heikki', 'Henri', 'Hermanni', 'Hanna', 'Helinä', 'Helmi', 'Helmiina', 'Henna', 'Henniina', 'Hertta', 'Hilda', 'Hilja', 'Hilla', 'Hilma', 'Hilppa', 'Heli', 'Heidi',
        'Iia', 'Iida', 'Iina', 'Iiris', 'Iita', 'Ilona', 'Inka', 'Inkeri', 'Inna', 'Isabella', 'Iiro', 'Ilja', 'Ilmari', 'Isto',
        'Jaakko', 'Jake', 'Jami', 'Jani', 'Janne', 'Jarno', 'Jere', 'Jermia', 'Jeremy', 'Jesper', 'Jesse', 'Jimi', 'Jirko', 'Joel', 'Joakim', 'Joni', 'Jooa', 'Joona', 'Joonas', 'Joonatan', 'Juho', 'Jore', 'Juha', 'Jukka', 'Julius', 'Junnu', 'Justus', 'Jusu', 'Juuso', 'Jade', 'Jadessa', 'Janette', 'Janika', 'Janina', 'Janita', 'Janna', 'Janni', 'Jasmiina', 'Jemina', 'Jenna', 'Jenika', 'Jenni', 'Jessica', 'Johanna', 'Jonna', 'Julia', 'Juttamari', 'Juulia', 'Jari', 'Jussi',
        'Kaisla', 'Karla', 'Kaste', 'Katri', 'Kati', 'Kia', 'Kalle', 'Karri', 'Kasperi', 'Kauto', 'Kimi', 'Konsta', 'Kristian', 'Kaija', 'Kaisu', 'Katja', 'Kirsi', 'Krista',
        'Lari', 'Lassi', 'Lauri', 'Leevi', 'Leo', 'Levin', 'Luca', 'Lukas', 'Luukas', 'Laura', 'Lila', 'Linnea', 'Lotta', 'Loviisa', 'Lumina', 'Lea',
        'Maia', 'Maija', 'Maiju', 'Maisa', 'Malla', 'Mari', 'Maria', 'Martta', 'Matleena', 'Meeri', 'Meri', 'Mette', 'Mia', 'Minna', 'Miina', 'Milla', 'Mimi', 'Mimmu', 'Mimosa', 'Minea', 'Minttu', 'Mira', 'Mirella', 'Magnus', 'Markus', 'Matias', 'Matti', 'Miika', 'Mika', 'Mikael', 'Miska', 'Maarit', 'Mirva', 'Marko', 'Mikko',
        'Neo', 'Niklas', 'Niko', 'Nico', 'Nuutti', 'Nea', 'Neea', 'Nella', 'Nelli', 'Nia', 'Niina', 'Ninni', 'Noora', 'Nadja', 'Natalia',
        'Oliivia', 'Olivia', 'Oona', 'Oliver', 'Onni', 'Oskari', 'Ossi', 'Otto', 'Olga', 'Outi', 'Osmo',
        'Paavo', 'Patrik', 'Paulus', 'Peetu', 'Pekko', 'Pyry', 'Pauliina', 'Peppi', 'Petra', 'Pihla', 'Piia', 'Pinja', 'Pirkko', 'Paula', 'Pia', 'Päivi', 'Pasi', 'Pekka', 'Petteri', 'Petri', 'Pertti',
        'Riia', 'Riikka', 'Riina', 'Ronja', 'Roosa', 'Rami', 'Rasmus', 'Riku', 'Roni', 'Roope', 'Reetta', 'Reeta', 'Ritva', 'Risto',
        'Saku', 'Sami', 'Sampo', 'Samu', 'Samuel', 'Samuli', 'Santeri', 'Santtu', 'Simo,', 'Sisu', 'Sanna', 'Sari', 'Satu', 'Sirpa', 'Susanna', 'Seija', 'Siru', 'Sauli',
        'Taneli', 'Teemu', 'Teppo', 'Tero', 'Tommi', 'Tomi', 'Topi', 'Tuomas', 'Tuomo', 'Touko', 'Tuukka', 'Taika', 'Taru', 'Tara', 'Tiia', 'Tiiu', 'Tinja', 'Tanja', 'Terhi', 'Tiina', 'Tea', 'Tatu', 'Teijo', 'Timo', 'Tuukka',
        'Unto', 'Urho',
        'Veera', 'Venla', 'Viivi', 'Vilja', 'Vilma', 'Valtteri', 'Veeti', 'Veikko', 'Veli', 'Vilho', 'Vili', 'Viljo', 'Ville',
        'Wiljami', 'Werneri', 'Wilma'
    );

    protected static $lastName = array(
        'Aakula', 'Aalto', 'Aaltonen', 'Aarnio', 'Aaronen', 'Aavikkola', 'Ahmala', 'Aho', 'Ahokas', 'Ahola', 'Ahomaa', 'Ahonen', 'Ahoniemi', 'Ahopelto', 'Ahovaara', 'Ahtila', 'Ahtiluoto', 'Ahtio', 'Ahtisaari', 'Ahto', 'Ahtola', 'Ahtonen', 'Ahtorinne', 'Aija', 'Aijala', 'Ainola', 'Aitio', 'Aitolahti', 'Aitomaa', 'Aittasalmi', 'Akkala', 'Akkanen', 'Alahuhta', 'Alajoki', 'Alajärvi', 'Alanen', 'Alatalo', 'Alasalmi', 'Alapuro', 'Alhola', 'Alijoki', 'Ankkala', 'Ankkuri', 'Annala', 'Annunen', 'Anttila', 'Anttinen', 'Anttonen', 'Ara', 'Arhila', 'Arhinmäki', 'Arhosuo,', 'Arinen', 'Arjamaa', 'Arjanen', 'Arkkila', 'Armio', 'Arnio', 'Aronen', 'Arosuo', 'Arponen', 'Arvola', 'Asikainen', 'Astala', 'Attila', 'Aunela', 'Aura', 'Auramies', 'Auranen', 'Autio', 'Auvinen', 'Auvola', 'Avonius', 'Avotie',
        'Bräysy',
        'Davidsainen', 'Dufva',
        'Eerikäinen', 'Eerola', 'Einel', 'Eino', 'Einola', 'Einonen', 'Ekman', 'Ekola', 'Ellilä', 'Ellinen', 'Elomaa', 'Eloharju', 'Eloranta', 'Eno', 'Enola', 'Enäjärvi', 'Erkinjuntti', 'Erkkilä', 'Erkkinen', 'Erkko', 'Erkkola', 'Ernamo', 'Erola', 'Eronen', 'Ervola', 'Eräharju', 'Erämaja', 'Eränen', 'Eskelinen', 'Eskelä', 'Eskola', 'Evelä', 'Evilä',
        'Filppula', 'Finni', 'Frändilä', 'Fränti',
        'Haahka', 'Haahkola', 'Haanpää', 'Haapakorpi', 'Haapala', 'Haapanen', 'Haaparanta', 'Haapasalmi', 'Haapasalo', 'Haapkylä', 'Haapoja', 'Haataja', 'Haavisto', 'Haikala', 'Haikara', 'Hakala', 'Hakkarainen', 'Hakki', 'Hakula', 'Halinen', 'Halkola', 'Halkonen', 'Halla', 'Hallaper', 'Hallapuro', 'Hallikainen', 'Hallila', 'Hallonen', 'Halme', 'Halmela', 'Halmelahti', 'Halonen', 'Halttunen', 'Hammas', 'Hanhela', 'Hanhinen', 'Hannula', 'Hannunen', 'Hapola', 'Harjamäki', 'Harju', 'Harjula', 'Harjunpää', 'Harkimo', 'Hautakangas', 'Hautakoski', 'Hautala', 'Hautamäki', 'Haverinen', 'Havukoski', 'Heikkilä', 'Heikkinen', 'Heimola', 'Heinälä', 'Heiskanen', 'Heiskari', 'Helenius', 'Helinen', 'Helismaa', 'Helmel', 'Helovirta', 'Helppolainen', 'Helstel', 'Hellgren', 'Hentinen', 'Hento', 'Hepomäki', 'Heponen', 'Herranen', 'Hervanta', 'Hervanto', 'Hekkaharju', 'Hiesu', 'Hietala', 'Hietanen', 'Hiltunen', 'Heintikainen', 'Hirvelä', 'Hirvi', 'Hirvikangas', 'Hirvonen', 'Hoikkala', 'Hoikkanen', 'Holappa', 'Holkeri', 'Hongisto', 'Honkanen', 'Hovi', 'Huhta', 'Huhtala', 'Hukkala', 'Huopainen', 'Huotari', 'Huovinen', 'Huttunen', 'Huuhka', 'Huurinainen', 'Huusko', 'Huvinen', 'Hyppölä', 'Hyppönen', 'Hytölä', 'Hyypiä', 'Hyyppä', 'Häkkinen', 'Häkämies', 'Hämäläinen', 'Hänninen', 'Härkönen',
        'Ihalainen', 'Ikola', 'Ikonen', 'Ilmarinen', 'Ilomäki', 'Iloniemi', 'Ilvesniemi', 'Immonen', 'Inkeri', 'Inkinen', 'Isoluoma', 'Isomäki', 'Isotalo', 'Itkonen', 'Itävaara', 'Itävuori',
        'Jaakkola', 'Jaakkonen', 'Jaakonmaa', 'Jaatinen', 'Jakkila', 'Jalonen', 'Jauhiainen', 'Jauho', 'Joenhaara', 'Johto', 'Jokelainen', 'Jokihaara', 'Jokimies', 'Jokinen', 'Jortikka', 'Joru', 'Junkkari', 'Juntti', 'Juppi', 'Jurva', 'Jurvala', 'Jurvanen', 'Jussila', 'Juustinen', 'Juuti', 'Juvanen', 'Juvonen', 'Jylhä', 'Jänis', 'Jäppinen', 'Järvelä', 'Jääskeläinen',
        'Kaakko', 'Kaikkonen', 'Kainulainen', 'Kaista', 'Kaivola', 'Kakkola', 'Kakkonen', 'Kalinainen', 'Kalkkinen', 'Kalliala', 'Kallio', 'Kaillomäki', 'Kalmo', 'Kalvo', 'Kamari', 'Kamppinen', 'Kanala', 'Kangaskorte', 'Kangassalo', 'Kannelmaa', 'Kannelmäki', 'Kantele', 'Kantola', 'Kapanen', 'Karalahti', 'Karhu', 'Karjalainen', 'Karpela', 'Karppinen', 'Karukoski', 'Karvonen', 'Katainen', 'Kataja', 'Kauhala', 'Kaukovaara', 'Kauppala', 'Kauppinen', 'Kaurismäki', 'Kekkonen', 'Kerava', 'Kerttula', 'Keskinen', 'Keskioja', 'Ketola', 'Ketonen', 'Kettula', 'Kieli', 'Kiianen', 'Kiille', 'Kimalainen', 'Kiiski', 'Kinnula', 'Kinnunen', 'Kiskonen', 'Kissala', 'Kivi', 'Kiviniemi', 'Kivistö', 'Koirala', 'Koivisto', 'Koivula', 'Koivulehto', 'Koivuniemi', 'Kokkonen', 'Kolehmainen', 'Komulainen', 'Konttinen', 'Kontunen', 'Korhonen', 'Koriseva', 'Kortesjärvi', 'Koskela', 'Koskelainen', 'Kosonen', 'Kotanen', 'Koukkula', 'Kouvonen', 'Kovalainen', 'Krapu', 'Krekelä', 'Kujala', 'Kujanpää', 'Kukkala', 'Kukkamäki', 'Kukkonen', 'Kultala', 'Kumpula', 'Kumpulainen', 'Kunnas', 'Kuoppala', 'Kuosmanen', 'Kurkela', 'Kurki', 'Kuusijärvi', 'Kyllönen', 'Kynsijärvi', 'Kynsilehto', 'Kärki', 'Kärkkäinen',
        'Laakkola', 'Laakkonen', 'Laakso', 'Laaksonen', 'Laatikainen', 'Lahdenpää', 'Laine', 'Lainela', 'Lakka', 'Lampinen', 'Lappalainen', 'Lassinen', 'Laurila', 'Lauronen', 'Lavola', 'Lehmälä', 'Lehtimäki', 'Lehtinen', 'Lehtisalo', 'Lehto', 'Lehtonen', 'Leino', 'Lepistö', 'Lepomäki', 'Leppilampi', 'Leppäkorpi', 'Leppälä', 'Leppävirta', 'Leskinen', 'Liimatainen', 'Lind', 'Linnala', 'Linnamäki', 'Lippo', 'Litmanen', 'Litvala', 'Liukkonen', 'Loiri', 'Lukkari', 'Lumme', 'Luoma', 'Luukkonen', 'Lyly', 'Lyytikäinen', 'Lähteenmäki', 'Lämsä',
        'Maahinen', 'Made', 'Maijala', 'Makkonen', 'Malmi', 'Malmivaara', 'Mannila', 'Manninen', 'Mannonen', 'Mansikka-aho', 'Mansikkaoja', 'Marila', 'Marjala', 'Marjamäki', 'Marjola', 'Marjomaa', 'Marjonen', 'Markkanen', 'Markkula', 'Markuksela', 'Markus', 'Martikainen', 'Marttinen', 'Masala', 'Masanen', 'Matomäki', 'Mattila', 'Maunula', 'Maunola', 'Melasniemi', 'Merelä', 'Merilä', 'Meriläinen', 'Merimaa', 'Metsoja', 'Metsälampi', 'Metsäoja', 'Mielonen', 'Miettinen', 'Mikkola', 'Mikkonen', 'Muhonen', 'Mujunen', 'Murola', 'Mustapää', 'Mustonen', 'Muurinen', 'Myllymäki', 'Myllypuro', 'Myllys', 'Mylläri', 'Mäenpää', 'Mäkelä', 'Mäki', 'Mäkinen', 'Mäntylä', 'Määttä', 'Möttönen',
        'Naula', 'Naulapää', 'Neuvonen', 'Nevala', 'Niemelä', 'Niemi', 'Nieminen', 'Niemistö', 'Niinimaa', 'Niinistö', 'Niiranen', 'Nikkanen', 'Nikkilä', 'Nikula', 'Nikulainen', 'Niskala', 'Nisukangas', 'Niukkanen', 'Nokelainen', 'Nokkonen', 'Notkonen', 'Nousiainen', 'Nukka', 'Nummelin', 'Nuotio', 'Nurkkala', 'Nurmela', 'Nurmi', 'Nurminiemi', 'Nurminen', 'Nuutti', 'Nykänen', 'Nyman', 'Närvälä', 'Näätänen',
        'Oikkonen', 'Oikonen', 'Oinonen', 'Oja', 'Ojala', 'Ojamäki', 'Ojanen', 'Ojaniemi', 'Oksala', 'Oksanen', 'Ollikainen', 'Ollila', 'Ollinen', 'Oravainen', 'Oravala', 'Otsamo', 'Outinen', 'Ovaska',
        'Paajanen', 'Paakkanen', 'Paananen', 'Paasikivi', 'Paasilinna', 'Paasonen', 'Paavola', 'Pahajoki', 'Pahkasalo', 'Pajumäki', 'Pajunen', 'Pakarinen', 'Pakkala', 'Pakola', 'Pallas', 'Paloheimo', 'Palola', 'Palomäki', 'Parkkonen', 'Pekkala', 'Pekkarinen', 'Pelkonen', 'Peltomaa', 'Pennanen', 'Pennilä', 'Pentikäinen', 'Penttilä', 'Perniö', 'Pesola', 'Pesonen', 'Peuranen', 'Peuraniemi', 'Pietilä', 'Piippola', 'Piirainen', 'Pikkarainen', 'Pirttijärvi', 'Pirttikangas', 'Pitkämäki', 'Pohtamo', 'Porkkala', 'Poronen', 'Poropudas', 'Puhakainenä', 'Puhakka', 'Pukkila', 'Pulli', 'Puolakka', 'Puuperä', 'Pyykkö', 'Pyykkönen', 'Päivälä', 'Päivärinta', 'Pääkkönen', 'Pöllönen', 'Pöntinen', 'Pöysti',
        'Raappana', 'Raatikainen', 'Raatila', 'Rahka', 'Rahkala', 'Raiskio', 'Raitanen', 'Raittila', 'Rajamäki', 'Ramu', 'Ranta', 'Rantamaa', 'Rapala', 'Rasila', 'Rasmus', 'Rauhala', 'Rauhanen', 'Rautaporras', 'Rautavirta', 'Rautio', 'Rehu', 'Reinikainen', 'Reinikka', 'Rekomaa', 'Repo', 'Repola', 'Riihimäki', 'Riikonen', 'Rimmanen', 'Rinne', 'Rinta', 'Rintamäki', 'Ristilä', 'Ritari', 'Rokko', 'Ronkainen', 'Roponen', 'Ruhanen', 'Rumpunen', 'Runtti', 'Ruohoniemi', 'Ruonala', 'Ruonansuu', 'Ruotsalainen', 'Ruuhonen', 'Ruuskari', 'Ruusula', 'Ruutti', 'Ryhänen', 'Ryti', 'Ryysyläinen', 'Räikkönen', 'Räisänen', 'Räsänen',
        'Saanila', 'Saarela', 'Saarenheimo', 'Saari', 'Saarikivi', 'Saarnio', 'Saarnivaara', 'Saastamoinen', 'Saikkonen', 'Saksala', 'Salenius', 'Salmela', 'Salmelainen', 'Salo', 'Salolainen', 'Salonen', 'Saloranta', 'Samulin', 'Sannala', 'Santanen', 'Saraste', 'Sarasvuo', 'Saukko', 'Savioja', 'Savolainen', 'Selänne', 'Seppelin', 'Seppänen', 'Seppälä', 'Servo', 'Setänen', 'Siekkinen', 'Sievinen', 'Sihvonen', 'Siira', 'Siltonen', 'Sikala', 'Silakka', 'Sillanpää', 'Siltala', 'Silvennoinen', 'Simo', 'Simonen', 'Sinnemäki', 'Sipilä', 'Sipola', 'Sirkesalo', 'Sirviö', 'Raiski', 'Soikkeli', 'Soini', 'Sonninen', 'Soppela', 'Sorajoki', 'Sormunen', 'Sorsa', 'Suhonen', 'Suikkala', 'Summanen', 'Suomela', 'Suominen', 'Suosalo', 'Susiluoto', 'Sutinen', 'Suuronen', 'Suutarinen', 'Suvela', 'Sydänmäki', 'Syrjä', 'Syrjälä', 'Säkkinen', 'Särkkä',
        'Taavettila', 'Taavila', 'Taavitsainen', 'Taipale', 'Takkala', 'Takkula', 'Tamminen', 'Tammisto', 'Tanskanen', 'Tapio', 'Tapola', 'Tarvainen', 'Taskinen', 'Tastula', 'Tauriainen', 'Tenkanen', 'Teppo', 'Tervo', 'Tervonen', 'Teräsniska', 'Tiainen', 'Tiilikainen', 'Timonen', 'Toijala', 'Toikkanen', 'Toivanen', 'Tokkola', 'Tolonen', 'Torkkeli', 'Tuisku', 'Tukiainen', 'Tulkki', 'Tuomela', 'Tuominen', 'Tuomisto', 'Tuppurainen', 'Turpeinen', 'Turunen', 'Tuutti', 'Tynkkynen', 'Typpö', 'Tyrninen', 'Törrö', 'Törrönen',
        'Ukkola', 'Ulvila', 'Unhola', 'Uosukainen', 'Urhonen', 'Uronen', 'Urpalainen', 'Urpilainen', 'Utriainen', 'Uusikari', 'Uusikylä', 'Uusisalmi', 'Uusitalo',
        'Vaara', 'Vahala', 'Vahanen', 'Vahvanen', 'Vainio', 'Valjakka', 'Valo', 'Valtanen', 'Vanhanen', 'Vanhoja', 'Varjus', 'Vartiainen', 'Vasala', 'Vauhkonen', 'Veijonen', 'Veini', 'Vennala', 'Vennamo', 'Vepsäläinen', 'Vesa', 'Vesuri', 'Veteläinen', 'Vierikko', 'Vihtanen', 'Viikate', 'Viinanen', 'Viinikka', 'Vilhola', 'Viljanen', 'Vilkkula', 'Vilpas', 'Virkkula', 'Virkkunen', 'Virolainen', 'Virtala', 'Voutilainen', 'Vuokko', 'Vuorenpää', 'Vuorikoski', 'Vuorinen', 'Vähälä', 'Väisälä', 'Väisänen', 'Välimaa', 'Välioja', 'Väyrynen', 'Väätänen',
        'Wettenranta', 'Wiitanen', 'Wirtanen', 'Wiskari',
        'Ylijälä', 'Yliannala', 'Ylijoki', 'Ylikangas', 'Ylioja', 'Ylitalo', 'Ylppö', 'Yläjoki', 'Yrjänen', 'Yrjänä', 'Yrjölä', 'Yrttiaho', 'Yömaa',
        'Äijälä', 'Ämmälä', 'Änäkkälä', 'Äyräs', 'Äärynen',
        'Översti', 'Öysti', 'Öörni'
    );

    private static $prefix = array('Hra.', 'Rva.', 'Nti.', 'Tri.');

    /**
     * @example 'Hra.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
