<?php

namespace Faker\Provider\et_EE;

/**
 * Class Person
 * @package Faker\Provider\et_EE
 * @author David Gegelija <code@imdavid.xyz>
 */
class Person extends \Faker\Provider\Person
{
    /**
     * @link https://news.err.ee/114745/most-popular-baby-names-of-2014
     * @link https://www.stat.ee/public/apps/nimed/TOP
     */
    protected static $firstNameMale = array(
        "Andrei", "Aleksei", "Andres", "Alexander", "Aivar", "Aleksander", "Artur", "Andrus", "Ants", "Artjom", "Anatoli", "Anton", "Arvo", "Aare", "Ain", "Aleksandr",
        "Dmitri", "Daniil", "Daniel",
        "Eduard", "Erik", "Enn",
        "Fjodorov",
        "Gennadi",
        "Heino", "Henri", "Hugo",
        "Igor", "Indrek", "Ivan", "Ilja", "Ilves", "Ivanov",
        "Jüri", "Jaan", "Jevgeni", "Jaanus", "Janek", "Jaak", "Jõgi",
        "Kristjan", "Kalev", "Karl", "Kalle", "Kaido", "Kevin", "Konstantin", "Kaspar", "Kirill", "Kristo", "Kalju", "Kaasik", "Kallas", "Kangur", "Karu", "Kask", "Kivi", "Kõiv", "Koppel", "Kristofer", "Kukk", "Kütt", "Kuusik", "Kuusk", "Kuznetsov",
        "Lauri", "Lembit", "Laur", "Lepik", "Lepp", "Leppik", "Liiv", "Lõhmus", "Luik",
        "Martin", "Margus", "Maksim", "Marko", "Mati", "Meelis", "Mihhail", "Marek", "Mihkel", "Mart", "Madis", "Markus", "Mark", "Mägi", "Marten", "Mets", "Mihhailov", "Mölder",
        "Nikolai", "Nikita", "Nikolay",
        "Oleg", "Oliver", "Oja", "Oskar", "Ots",
        "Peeter", "Priit", "Pavel", "Pärn", "Pavlov", "Peterson", "Petrov", "Põder", "Popov",
        "Rein", "Roman", "Raivo", "Rasmus", "Raul", "Robert", "Riho", "Raudsepp", "Rebane", "Robin", "Romet",
        "Sergei", "Sander", "Sergey", "Siim", "Silver", "Saar", "Sebastian", "Semjonov", "Sepp", "Smirnov", "Sokolov", "Stepanov",
        "Toomas", "Tarmo", "Tõnu", "Tiit", "Tanel", "Taavi", "Toivo", "Tõnis", "Tamm", "Teder", "Toom",
        "Urmas", "Ülo",
        "Vladimir", "Viktor", "Valeri", "Vello", "Vadim", "Vitali", "Vladislav", "Vjatšeslav", "Victor", "Vaher", "Vassiljev", "Volkov",
    );

    /**
     * @link https://news.err.ee/114745/most-popular-baby-names-of-2014
     * @link https://www.stat.ee/public/apps/nimed/TOP
     */
    protected static $firstNameFemale = array(
        "Aino", "Aleksandra", "Alisa", "Anastasia", "Anna", "Anne", "Anneli", "Anu", "Arina", "Annika", "Anastassia", "Alla", "Aili", "Alina", "Aime", "Antonina",
        "Darja", "Diana",
        "Elena", "Eliise", "Elisabeth", "Emma", "Ene", "Eve", "Eha", "Evi",
        "Galina",
        "Hanna", "Helen", "Heli", "Helle", "Helgi",
        "Irina", "Inna", "Ingrid",
        "Jekaterina", "Jelena", "Julia", "Jana",
        "Kadri", "Katrin", "Kristi", "Kristiina", "Kristina", "Karin", "Kersti", "Kristel", "Kaja", "Külli", "Kätlin", "Krista",
        "Laura", "Lenna", "Liisa", "Linda", "Lisandra", "Ljubov", "Ljudmila", "Liina", "Ljudmilla", "Larissa", "Liis", "Lea", "Laine", "Liudmila",
        "Maie", "Malle", "Mare", "Maria", "Marina", "Marleen", "Marta", "Merike", "Mia", "Milana", "Mirtel", "Marika", "Merle", "Margit", "Milvi", "Maire", "Margarita", "Mari", "Maarja",
        "Natalia", "Niina", "Nora", "Natalja", "Nadežda", "Nina",
        "Olga", "Oksana",
        "Piret", "Polina", "Pille",
        "Reet", "Riina",
        "Sandra", "Sirje", "Sofia", "Svetlana", "Silvi",
        "Tamara", "Tatiana", "Tiina", "Tiiu", "Triin", "Tatjana", "Tiia",
        "Ülle", "Urve",
        "Valentina", "Viktoria", "Veera", "Veronika", "Vaike",
        "Zinaida",
    );

    /**
     * @link https://en.wikipedia.org/wiki/Category:Estonian-language_surnames
     * @link https://www.stat.ee/public/apps/nimed/pere/TOP
     */
    protected static $lastName = array(
        "Aleksejev", "Andrejev", "Allik", "Aas", "Aleksandrov", "Aare", "Aarma", "Aasmäe", "Aav", "Aavik", "Alver", "Andrejeva", "Aleksejeva", "Aleksandrova",
        "Bogdanova", "Bogdanov",
        "Eenpalu", "Eskola",
        "Fjodorov", "Fjodorova",
        "Grigorjev", "Grigorjeva",
        "Hunt", "Hein", "Härma",
        "Ivanov", "Ilves", "Ivanova",
        "Jõgi", "Jakobson", "Jakovlev", "Jürgenson", "Jegorov", "Järv", "Johanson", "Järve", "Jänes", "Järvis", "Jakovleva", "Jegorova",
        "Kuzmina", "Kalda", "Kozlova", "Kruus", "Kask", "Kukk", "Kuznetsov", "Koppel", "Kaasik", "Kuusk", "Karu", "Kütt", "Kallas", "Kivi", "Kangur", "Kuusik", "Kõiv", "Kozlov", "Kull", "Kuzmin", "Kaaleste", "Käbin", "Kaljulaid", "Kaljurand", "Kallaste", "Kangro", "Kapp", "Kärner", "Käsper", "Kass", "Keres", "Keskküla", "Kesküla", "Kikkas", "Kingsepp", "Kirs", "Kirsipuu", "Klavan", "Kokk", "Kontaveit", "Korjus", "Kotkas", "Kreek", "Kross", "Kuznetsova",
        "Luik", "Lepik", "Lepp", "Lõhmus", "Liiv", "Laur", "Leppik", "Lebedev", "Laas", "Laar", "Laht", "Lass", "Laurits", "Lemsalu", "Lepmets", "Levandi", "Lill", "Lindmaa", "Linna", "Lipp", "Lippmaa", "Loo", "Lõoke", "Luts", "Lebedeva",
        "Männik", "Mänd", "Mitt", "Makarova", "Mägi", "Mets", "Mihhailov", "Mölder", "Morozov", "Mõttus", "Makarov", "Mälk", "Margiste", "Mark", "Masing", "Mihhailova", "Must", "Morozova",
        "Nikolajev", "Nõmm", "Nikitin", "Novikov", "Nõmmik", "Nurme", "Nurmsalu", "Nikitina", "Nikolajeva",
        "Orlova", "Orav", "Oja", "Ots", "Orlov", "Olesk", "Öpik",
        "Petrov", "Pärn", "Põder", "Pavlov", "Popov", "Peterson", "Puusepp", "Paju", "Põld", "Pukk", "Paas", "Palm", "Pääsuke", "Padar", "Pavlova", "Peebo", "Peetre", "Petrova", "Pihlak", "Piho", "Piip", "Popova", "Poska", "Puhvel", "Pütsep", "Parts",
        "Romanova", "Rand", "Roos", "Rebane", "Raudsepp", "Raud", "Rätsep", "Raag", "Reek", "Reinsalu", "Rooba", "Roolaid", "Rootare", "Rummo", "Rüütel", "Rüütli",
        "Saar", "Sepp", "Smirnov", "Stepanov", "Semjonov", "Sokolov", "Sild", "Sarapuu", "Saks", "Salumäe", "Sibul", "Siimar", "Simm", "Sirel", "Sisask", "Smirnova", "Sokk", "Soosaar", "Stepanova", "Susi", "Sokolova", "Semjonova",
        "Tamme", "Tomson", "Tamm", "Teder", "Toom", "Talts", "Tarvas", "Toome", "Toots",
        "Uibo",
        "Vassiljev", "Vaher", "Volkov", "Valk", "Vahtra", "Vaino", "Vainola", "Välbe", "Valdma", "Väljas", "Vassiljeva", "Vesik", "Veski", "Viiding", "Vitsut", "Võigemast", "Volkova", "Võsu",
    );
}
