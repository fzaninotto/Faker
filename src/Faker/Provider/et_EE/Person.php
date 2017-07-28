<?php

namespace Faker\Provider\et_EE;

class Person extends \Faker\Provider\Person
{
    protected static $titleMale = array('Härra', 'Hr.');

    protected static $titleFemale = array('Proua', 'Pr.', 'neiu', 'preili');

    /**
     * @link http://www.eki.ee/books/ekk09/index.php?p=6&p1=5&id=548
     **/
    protected static $firstNameMale = array(
        "Ants", "Peeter", "Mihkel", "Veljo", "Tõnn", "Tõelemb", "Aadu", "Aleksander", "Ferdinand",
        'Lembit', 'Toivo', 'Valdo', 'Ülo', 'Vootele', 'Manivald', 'Tõivelemb', 'Kaupo', 'Tõnis', 'Jaan',
        'Juhan', 'Hannes', 'Ants', 'Jaak', 'Jaagup', 'Jakob', 'Kalju', 'Kaljula', 'Arvo', 'Ago', 'Ott',
        'Valev', 'Vambola', 'Vello', 'Veljo', 'UrmasPriit', 'Vidrik', 'Kustas', 'Nigul', 'Nigulas', 'Märt',
        'Peeter', 'Pärtel', 'Siim', 'Toomas', 'Johannes', 'Heinrich', 'Voldemar', 'Harri', 'Konrad',
        'Otto', 'Karl', 'Eduard', 'Alfred', 'Feliks', 'Rudolf', 'Richard', 'Erich', 'Ferdinand', 'Viktor',
        'Vassili', 'Nikolai', 'Reinhold', 'Robert', 'Sven', 'Holger', 'Nils', 'Pekka', 'Anti', 'Eero', 'Imre',
        'Rene', 'Aivar', 'Fred', 'Guido',
    );

    /**
     * @link http://www.eki.ee/books/ekk09/index.php?p=6&p1=5&id=548
     */
    protected static $firstNameFemale = array(
        "Leelo", "Piibe Lotte", "Loona", "Mailis", "Annika", 'Ülle', 'Vilja', 'Kadri', 'Kai', 'Triinu',
        'Katariina', 'Reet', 'Krõõt', 'Maret', 'Mari', 'Ann', 'Mai', 'Mall', 'Leena', 'Leeni', 'Liisa',
        'Liisu', 'Piret', 'Aita', 'Elle', 'Heldi', 'Helle', 'Imbi', 'Kaja', 'Heli', 'Koidu', 'Leelo',
        'Luule', 'Maimu', 'Saale', 'Urve', 'Virve', 'Merike', 'Marie', 'Maria', 'Anna', 'Elisabeth',
        'Christine', 'Emilie', 'Adele', 'Rosalie', 'Amalie', 'Emma', 'Veera', 'Olga', 'Ellen', 'Erika',
        'Ingrid', 'Marika', 'Kathleen', 'Kätlin', 'Harriet', 'Dorrit', 'Ruta', 'Anne', "Kaili",
    );

  
    protected static $lastName = array(
        'Vihalem', 'Ilu', 'Miilet', 'Markus', 'Joonas', 'Laretei', 'Suubi', 'Tarto', 'Tallinn',
        'Nurst', 'Soome', 'Betlem', 'Hamburg', 'London', 'Koit', 'Kõue', 'Vihma', 'Mäger', 'Kotkas',
        'Kass', 'Luts', 'Konnapere', 'Kask', 'Türnpuu', 'Lill', 'Murakas', 'Kivi', 'Paas', 'Känd', 'Mets',
        'Nõmmik', 'Hobustkoppel', 'Kell', 'Kuljus', 'Tool', 'Mõrd', 'Nõel', 'Kaigas', 'Kalamees',
        'Vardja', 'Paadimeister', 'Jääger', 'Mõisnik', 'Otsus', 'Rõõm', 'Õigus', 'Lõbu', 'Kõverjalg',
        'Aus', 'Mõistlik', 'Tarkpea', 'Armolik', 'Kõvamees', 'Tubli', 'Raamat', 'Lapp', 'Kaasik', 'Kibe',
        'Rõõmus', 'Valge', 'Kindlam', 'Auväärt', 'Armväärt', 'Kolmas', 'Ühtegi', 'Tosin', 'Mina', 'Ise',
        'Meil', 'Eitea', 'Läks', 'Kuulmata', 'Ole', 'Püüa', 'Õkva', 'Üksi', 'Edasi', 'Tasa', 'Ligi',
        'Ülemaante', 'Üleoja', 'Mäetaga', 'Müüripeal', 'Kuuseall', 'Mäe', 'Kalda', 'Sepa', 'Pae',
        'Luige', 'Viiralt', 'Maalt',
    );
}
