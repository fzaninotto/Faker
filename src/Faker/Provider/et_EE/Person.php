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
    protected static $firstNameMale = [
        "Aleksandr", "Artjom", "Artur",
        "Daniel", "Daniil",
        "Fjodorov",
        "Henri", "Hugo",
        "Ilves", "Ivanov",
        "Jõgi",
        "Kaasik", "Kallas", "Kangur", "Karl", "Karu", "Kask", "Kevin", "Kirill", "Kivi", "Kõiv", "Koppel", "Kristofer", "Kukk", "Kütt", "Kuusik", "Kuusk", "Kuznetsov",
        "Laur", "Lepik", "Lepp", "Leppik", "Liiv", "Lõhmus", "Luik",
        "Mägi", "Maksim", "Mark", "Markus", "Marten", "Martin", "Mets", "Mihhailov", "Mölder",
        "Nikita",
        "Oja", "Oliver", "Oskar", "Ots",
        "Pärn", "Pavlov", "Peterson", "Petrov", "Põder", "Popov",
        "Rasmus", "Raudsepp", "Rebane", "Robert", "Robin", "Romet",
        "Saar", "Sander", "Sebastian", "Semjonov", "Sepp", "Smirnov", "Sokolov", "Stepanov",
        "Tamm", "Teder", "Toom",
        "Vaher", "Vassiljev", "Volkov",
    ];

    /**
     * @link https://news.err.ee/114745/most-popular-baby-names-of-2014
     * @link https://www.stat.ee/public/apps/nimed/TOP
     */
    protected static $firstNameFemale = [
        "Aino", "Aleksandra", "Alisa", "Anastasia", "Anna", "Anne", "Anneli", "Anu", "Arina",
        "Darja", "Diana",
        "Elena", "Eliise", "Elisabeth", "Emma", "Ene", "Eve",
        "Galina",
        "Hanna",
        "Irina",
        "Jekaterina", "Jelena", "Julia",
        "Kadri", "Katrin", "Kristi", "Kristiina", "Kristina",
        "Laura", "Lenna", "Liisa", "Linda", "Lisandra", "Ljubov", "Ljudmila",
        "Maie", "Malle", "Mare", "Maria", "Marina", "Marleen", "Marta", "Merike", "Mia", "Milana", "Mirtel",
        "Natalia", "Niina", "Nora",
        "Olga",
        "Piret", "Polina",
        "Reet", "Riina",
        "Sandra", "Sirje", "Sofia", "Svetlana",
        "Tamara", "Tatiana", "Tiina", "Tiiu", "Triin",
        "Ülle",
        "Valentina", "Viktoria",
    ];

    /**
     * @link https://en.wikipedia.org/wiki/Category:Estonian-language_surnames
     * @link https://www.stat.ee/public/apps/nimed/pere/TOP
     */
    protected static $lastName = [
        "Aare", "Aarma", "Aas", "Aasmäe", "Aav", "Aavik", "Allik", "Alver",
        "Eenpalu", "Eskola",
        "Fjodorov", "Fjodorova",
        "Härma",
        "Ilves", "Ivanov", "Ivanova",
        "Jakobson", "Jänes", "Järve", "Järvis",
        "Jõgi",
        "Kaaleste",
        "Kaasik", "Käbin", "Kalda", "Kaljulaid", "Kaljurand", "Kallas", "Kallaste", "Kangro", "Kangur", "Kapp", "Kärner", "Karu", "Kask", "Käsper", "Kass", "Keres", "Keskküla", "Kesküla", "Kikkas", "Kingsepp", "Kirs", "Kirsipuu", "Kivi", "Klavan", "Kõiv", "Kokk", "Kontaveit", "Koppel", "Korjus", "Kotkas", "Kreek", "Kross", "Kruus", "Kukk", "Kull", "Kütt", "Kuusik", "Kuusk", "Kuznetsov", "Kuznetsova",
        "Laar", "Laht", "Lass", "Laur", "Laurits", "Lemsalu", "Lepik", "Lepmets", "Lepp", "Leppik", "Levandi", "Liiv", "Lill", "Lindmaa", "Linna", "Lipp", "Lippmaa", "Lõhmus", "Loo", "Lõoke", "Luik", "Luts",
        "Mägi", "Mälk", "Mänd", "Männik", "Margiste", "Mark", "Masing", "Mets", "Mihhailov", "Mihhailova",
        "Mölder", "Must",
        "Nõmmik", "Nurme", "Nurmsalu",
        "Oja", "Olesk", "Öpik", "Orav", "Ots",
        "Pääsuke", "Padar", "Pärn", "Pavlov", "Pavlova", "Peebo", "Peetre", "Peterson", "Petrov", "Petrova", "Pihlak", "Piho", "Piip", "Põder", "Põld", "Popov", "Popova", "Poska", "Puhvel", "Pütsep", "Puusepp", 
        "Raag", "Raud", "Raudsepp", "Rebane", "Reek", "Reinsalu", "Rooba", "Roolaid", "Rootare", "Rummo", "Rüütel", "Rüütli",
        "Saar", "Salumäe", "Semjonov", "Sepp", "Sibul", "Siimar", "Simm", "Sirel", "Sisask", "Smirnov", "Smirnova", "Sokk", "Sokolov", "Soosaar", "Stepanov", "Stepanova", "Susi",
        "Talts", "Tamm", "Tamme", "Tarvas", "Teder", "Toom", "Toome", "Toots", "Vaher", "Vahtra", "Vaino", "Vainola", "Välbe", "Valdma", "Väljas", "Valk", "Vassiljev", "Vassiljeva", "Vesik", "Veski", "Viiding", "Vitsut", "Võigemast", "Volkov", "Volkova", "Võsu",
    ];
}
