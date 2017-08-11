<?php

namespace Faker\Provider\bs_BA;

class Person extends \Faker\Provider\Person
{
    /**
     * @link http://www.just-think-it.com/sbn/bosnianm.htm
     */
    protected static $firstNameMale = array(
        "Abdulah", "Abdurahman", "Abid", "Adam", "Adel", "Adem", "Ademir", "Adi", "Adil", "Adis", "Admir", "Adnan",
        "Adrijan", "Afan", "Ahmed", "Ahmet", "Aldin", "Aleksandar", "Alen", "Alija", "Almir", "Amar", "Amel", "Amer",
        "Amir", "Ammar", "Andrija", "Anel", "Anes", "Anto", "Antun", "Arijan", "Armin", "Asim", "Asmir", "Avdija",
        "Benjamin", "Berin", "Beriz", "Besim", "Bilal", "Bojan", "Boris", "Božidar", "Branimir", "Branislav", "Branko",
        "Damir", "Danis", "Danko", "Dario", "Darko", "David", "Davor", "Davud", "Dejan", "Denis", "Dino", "Dragan",
        "Džanan", "Dželaludin", "Džemal", "Dženan", "Dževad", "Edhem", "Edib", "Edin", "Ejub", "Ekrem", "Eldar", "Eldin",
        "Elmedin", "Elvedin", "Elvir", "Emin", "Emir", "Enes", "Enid", "Enis", "Ensar", "Enver", "Ernad", "Ervin", "Esad",
        "Fadil", "Fahrudin", "Faris", "Faruk", "Fatih", "Ferid", "Goran", "Hajdar", "Hajrudin", "Hajrullah", "Halid",
        "Halil", "Hamza", "Hamzalija", "Haris", "Harun", "Hasan", "Hasib", "Hašim", "Hazim", "Hidajet", "Hikmet", "Husein",
        "Ibrahim", "Imad", "Imran", "Irfan", "Isa", "Ismail", "Ismar", "Ismet", "Ivan", "Ivanko", "Ivo", "Izet", "Jahja",
        "Jakob", "Jakov", "Jakub", "Jasenko", "Jasmin", "Jasminko", "Josip", "Jovan", "Jozo", "Junus", "Jure", "Jusuf",
        "Kasim", "Kemal", "Kenan", "Kerim", "Krešimir", "Kristijan", "Latif", "Luka", "Madzid", "Mahir", "Mahmut", "Maid",
        "Mario", "Marko", "Matej", "Mehmed", "Meho", "Mensur", "Mesud", "Mihajlo", "Milan", "Milorad", "Milutin", "Miralem",
        "Mirhat", "Mirko", "Mirnes", "Miroslav", "Mirsad", "Mirza", "Mladen", "Muaz", "Muhamed", "Mujo", "Munib", "Murat",
        "Muris", "Mustafa", "Nadir", "Nebojša", "Nedim", "Nedzad", "Nenad", "Nermin", "Neven", "Nevzet", "Nezir", "Nihad",
        "Nijaz", "Nikola", "Omar", "Omer", "Orhan", "Osman", "Petar", "Radovan", "Raif", "Ramiz", "Ramo", "Refik", "Rešad",
        "Resul", "Reuf", "Rifat", "Rijad", "Robert", "Rusmir", "Šemsudin", "Šerif", "Sabahudin", "Sadik", "Safet", "Said",
        "Salih", "Salim", "Samed", "Samir", "Sanjin", "Saša", "Sead", "Šefik", "Selim", "Semir", "Senad", "Sinan", "Siniša",
        "Slaven", "Slaviša", "Slobodan", "Stjepan", "Stojan", "Suad", "Sulejman", "Tarik", "Tihomir", "Timur", "Tomislav",
        "Tomo", "Vahid", "Valentin", "Vanja", "Vedad", "Vladimir", "Zdravko", "Zijad", "Zijah", "Zlatan", "Zlatko", "Zoran",
        "Zuhdija", "Zulfikar", "Zulfo"
    );

    /**
     * @link http://www.just-think-it.com/sbn/bosnianf.htm
     */
    protected static $firstNameFemale = array(
        "Abida", "Adela", "Adele", "Ademira", "Adila", "Adina", "Adisa", "Admira", "Adna", "Adrijana", "Advija", "Aida",
        "Aiša", "Ajla", "Ajna", "Aldijana", "Aldina", "Aleksandra", "Alisa", "Alma", "Almasa", "Almedina", "Almira",
        "Amela", "Amila", "Amina", "Amira", "Amna", "Amra", "Ana", "Andjelka", "Andrea", "Anesa", "Anita", "Antonija",
        "Arijana", "Arnela", "Asima", "Asja", "Azema", "Azemina", "Azra", "Badema", "Bahira", "Belma", "Belmina", "Berina",
        "Besima", "Biljana", "Branka", "Dajana", "Dalila", "Danica", "Dejana", "Dijana", "Dina", "Dinka", "Dragana",
        "Dragica", "Džana", "Dženana", "Dženeta", "Dženita", "Edina", "Edita", "Ehlimana", "Ela", "Eldina", "Elvira", "Ema",
        "Emela", "Emina", "Emira", "Emma", "Enesa", "Enida", "Enisa", "Erna", "Esma", "Fadila", "Fahira", "Fahreta", "Farah",
        "Fatima", "Fehima", "Ferida", "Gorana", "Hadžera", "Halima", "Hana", "Hanifa", "Hatidža", "Hava", "Ifeta", "Ilda",
        "Ilhana", "Ilma", "Iman", "Indira", "Ines", "Iris", "Irma", "Ismeta", "Iva", "Ivana", "Ivanka", "Ivona", "Izeta",
        "Jadranka", "Jana", "Jasenka", "Jasmina", "Jasna", "Jovanka", "Kanita", "Katarina", "Lamija", "Lana", "Lara",
        "Larisa", "Latifa", "Lejla", "Lina", "Ljiljana", "Lorena", "Lutvija", "Maida", "Maja", "Majda", "Marija", "Marijana",
        "Marisa", "Matea", "Medina", "Medžida", "Meliha", "Melisa", "Merima", "Merjem", "Mersiha", "Mia", "Mila", "Minela",
        "Mirjana", "Mirna", "Mirnesa", "Mirsada", "Mubina", "Naida", "Natasa", "Nejra", "Nevena", "Nevzeta", "Nezira",
        "Nihada", "Nikolina", "Nina", "Nives", "Nudžejma", "Petra", "Rahima", "Ranka", "Rejhana", "Rifeta", "Šejla", "Šemsa",
        "Sabina", "Sadika", "Sajra", "Saliha", "Samija", "Samira", "Samra", "Sandra", "Sanela", "Sanija", "Sara", "Sarah",
        "Selma", "Selmira", "Semija", "Semira", "Senada", "Senija", "Senka", "Sinolicka", "Sladjana", "Sonja", "Spomenka",
        "Stojanka", "Suada", "Sumeja", "Suvada", "Taiba", "Tajra", "Tamara", "Tanja", "Tatjana", "Tihana", "Tijana", "Una",
        "Valentina", "Vanja", "Vasvija", "Vesna", "Vildana", "Zana", "Željka", "Zana", "Zara", "Zdenka", "Zejneba",
        "Zerina", "Zijada", "Zlata", "Zlatka", "Zorana", "Zorica", "Zuhra", "Zulejha", "Zumreta"
     );

    /**
     * @link http://surnames.behindthename.com/submit/names/usage/bosnian
     */
    protected static $lastName = array(
        "Abdagić", "Abdić", "Ademović", "Adilović", "Aganspahić", "Ahmetović", "Ahmić", "Alaim", "Alajbegović", "Alikadić",
        "Alispahić", "Arifović", "Arslanagić", "Arslanović", "Avdić", "Azabagić", "Bajraktarević", "Bajramović", "Bajrović",
        "Baljić", "Bašagić", "Bašeskija", "Baždarević", "Bećirović", "Bećirspahić", "Beganović", "Begić", "Begović", "Behmen",
        "Bekić", "Berberić", "Berberović", "Beširević", "Bešlagić", "Biogradlić", "Bučan", "Buljubašić", "Burić", "Čardžić",
        "Čataković", "Čaušević", "Čejvan", "Čeliković", "Čemalović", "Čengić", "Cerić", "Čomor", "Čoralić", "Čorbadžić",
        "Custovic", "Ćutahija", "Čuvidina", "Dautbegović", "Dedić", "Đedović", "Delalić", "Delemović", "Delić", "Demirdžić",
        "Demirović", "Deović", "Dervišević", "Dervišhalidović", "Đezić", "Dilberović", "Dizdar", "Dizdarević", "Dudić",
        "Dugalić", "Dugonja", "Đuherić", "Duljević", "Duro", "Džabić", "Džafić", "Džakmić", "Džanić", "Džeko", "Džidić",
        "Džihanović", "Džinović", "Džumhur", "Ekmečić", "Fatić", "Fazlagić", "Fazlija", "Fejzić", "Ferhatović", "Gluhačević",
        "Granov", "Gušo", "Hadžiahmetović", "Hadžialagić", "Hadžibegić", "Hadžić", "Hadžiefendić", "Hadžifejzović",
        "Hadžihafizbegović", "Hadžihalilović", "Hadžihasanović", "Hadžijamaković", "Hadžikić", "Hadžimuratović", "Hadžimusić",
        "Hadžiomerović", "Hadžipašić", "Hadžiselimović", "Hairlahović", "Hajdarević", "Hajdarhodžić", "Hajradinović",
        "Hajrović", "Hajrulahović", "Halilhodžić", "Halilović", "Halimović", "Halitović", "Hamzagić", "Hamzić", "Handžić",
        "Hasagić", "Hasanbegović", "Hasančić", "Hasanefendić", "Hasanović", "Hasečić", "Haskić", "Hasković", "Haurdić",
        "Hebibović", "Herco", "Hodžić", "Hošić", "Hrustanbegović", "Hurtić", "Husedžinović", "Huseinbašić", "Huseinbegović",
        "Husejinović", "Husejnagić", "Husić", "Ibišević", "Ibrahimović", "Ibričić", "Ibrišimović", "Idrizović", "Ihtijarević",
        "Imamović", "Islamović", "Isović", "Izetbegović", "Jahić", "Jahović", "Janjoš", "Jelavić", "Jesenković", "Jusufbegović",
        "Kahvedžić", "Kajtazović", "Kapetanović", "Karabegović", "Karahasan", "Karahasanović", "Karamehmedović", "Kavazović",
        "Kikanović", "Kolaković", "Kolašinac", "Konjević", "Konjhodžić", "Korić", "Kremic", "Kreševljaković", "Krličević",
        "Krpić", "Krupinac", "Kuduzović", "Kulenović", "Kupusović", "Kurjak", "Kurspahić", "Lagumdžija", "Lipovača",
        "Ljubijankić", "Maglajlić", "Maglajlija", "Mahmutović", "Maksumić", "Marić", "Medenčević", "Mehmedbašić", "Mehmedinović",
        "Mehmedović", "Mehuljić", "Mekić", "Melunović", "Memić", "Merdanović", "Mešanović", "Mešić", "Milak", "Mirvić",
        "Muftić", "Muharemović", "Muhasilović", "Muhić", "Mujagić", "Mujdža", "Mujezinović", "Mulabdić", "Mulahalilović",
        "Mulahasanović", "Mulahmetović", "Mulavdić", "Muradbegović", "Muratović", "Musemić", "Musić", "Muslimović", "Mušović",
        "Mustafić", "Mustajbegović", "Mustedanagić", "Mutapčić", "Muzaferija", "Muzurović", "Nadarević", "Nuhanović", "Numankadić",
        "Obuća", "Okić", "Omanović", "Omerbašić", "Omerbegović", "Omerović", "Oruč", "Osmanagić", "Osmanhodžić", "Osmanković",
        "Osmanović", "Osmić", "Oštraković", "Pehlić", "Pintol", "Plakalo", "Preldžić", "Princip", "Prljača", "Radeljaš",
        "Rahić", "Rahimić", "Redžić", "Rizvić", "Sadiković", "Šahinović", "Salihamidžić", "Salihović", "Samardžić", "Sarajlić",
        "Sarihodžić", "Šehanović", "Šehić", "Šehovićsejdić", "Selimović", "Selmanović", "Sidran", "Sijerčić", "Silajdžić",
        "Sinanović", "Sirotanović", "Škaljić", "Smječanin", "Sokolović", "Šoljanin", "Spahić", "Spaho", "Sulejmanović",
        "Suljagić", "Suljaković", "Suljić", "Tahirović", "Tanović", "Teletović", "Terzić", "Tihić", "Turković", "Uščuplić",
        "Varešanović", "Vehabović", "Veladžić", "Vlainić", "Vrhovac", "Vršajević", "Zahirović", "Žbanić", "Zec", "Zeljković",
        "Zukić", "Zulfikarpašić"
        );
}
