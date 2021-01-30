<?php

namespace Faker\Provider\fr_NE;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{prefix}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{firstNameMale}}-{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{prefix}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{firstNameFemale}}-{{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Abouba', 'Aboube', 'Aboubacar', 'Abdoulaye','Abdouldjalil', 'Abdoulmoumouni', 'Abdourachid', 'Abdourahmane',
        'Abdousalam','Adam', 'Adamou', 'Ali', 'Aliou', 'Almou', 'Almoustapha','Amir', 'Aminou', 'Amirou', 'Awal', 'Aziz',
        'Bouba', 'Boubacar', 'Boureima', 'Chamsou', 'Chamsoudine','Djalil', 'Djafar', 'Djamil','Djibo', 'Garba', 'Goumar', 'Habib',
        'Habibou', 'Hama', 'Hamadou', 'Hamidou', 'Hamissou', 'Hassane', 'Himou', 'Housseini', 'Ibrahim','Ismael', 'Issaka',
        'Issoufou', 'Jamilou', 'Kamilou', 'Karim', 'Karimou', 'Lamine', 'Mahamadou', 'Mohamed', 'Moussa', 'Nafiou', 'Nouhou',
        'Nouredine', 'Nourou', 'Omar', 'Oumarou','Ousmane', 'Ousseini', 'Oussou','Rachid','Rafiou', 'Rahim', 'Razak','Samaila',
        'Saminou', 'Soumaila', 'Soumana', 'Tahirou', 'Tassiou', 'Wahab', 'Wahabou', 'Zalkiphily', 'Zourkaleini'
    );

    protected static $firstNameFemale = array(
        'Achafaou','Aïcha','Aïchatou','Aïssa', 'Aïssata', 'Aïssatou','Amara', 'Amina', 'Aminatou', 'Asmaou', 'Balkissa','Bariratou',
        'Barkatou', 'Bassiratou','Biba', 'Binta', 'Bouchira','Chafatou', 'Chamsia', 'Charifa','Charifatou','Djamma', 'Djamila',
        'Djamilatou','Fadi','Fadila', 'Fadima','Faïza', 'Faïzatou', 'Farida', 'Faridatou','Faouzia', 'Faouziatou', 'Fati', 'Fatima',
        'Fatimata', 'Fatimatou', 'Fatiya', 'Fatiyatou', 'Firdaouss', 'Gambi', 'Gambina', 'Hadiza', 'Hadizatou', 'Hamsa', 'Hamsatou',
        'Hari', 'Hariatou', 'Hassana', 'Hassanatou', 'Hindatou', 'Housseina', 'Housseinatou', 'Inaya', 'Inayatou', 'Jamila', 'Jamilatou',
        'Kadi', 'Kadidja', 'Kadidjatou', 'Karimatou','Layla', 'Leyla','Leylatou', 'Limou', 'Maïmouna', 'Mamata', 'Mouniratou', 'Mourdjanatou',
        'Nafissa', 'Nafissatou', 'Noura', 'Oumou', 'Oumoulkhaire','Rachida', 'Rachidataou', 'Raki', 'Rakia', 'Rakiatou', 'Ramlatou',
        'Roumana', 'Roumanatou', 'Rouwaida', 'Rouwaidatou','Safi','Safiyatou', 'Safinatou', 'Sakinatou', 'Sarifatou', 'Saoudatou',
        'Zeina', 'Zeinabou','Zouhouratou', 'Zouwera', 'Zouweratou'
    );

    protected static $lastName = array(
        'Chipkaou', 'Tagaza', 'Chékaraou', 'Bettou', 'Gani', 'Alambouzou', 'Guèro', 'Larabou', 'Sindi', 'Gora', 'Hainikoy', 'Doungouri', 'Alfari', 'Noma', 'Maitourare', 'Namata', 'Narwa', 'Bazi', 'Diallo', 'Maïga', 'Maidawa', 'Bonkaney', 'Bonkano', 'Bouza', 'Poussi', 'Dan Malam', 'Balla', 'Billo', 'Bello', 'Bollo', 'Larwan', 'Labizé', 'Dan kassa', 'Dan Takoussa', 'Labo', 'Tankari', 'Mayaki', 'Mani', 'Wazir', 'Rabiou', 'Mega', 'Begou', 'Labaran', 'Tchiombiano', 'Kourma', 'Madougou', 'Djaouga', 'Keina'
    );

    protected static $titleMale = array('M.', 'Dr.', 'Pr.', 'Me.');

    protected static $titleFemale = array('Mme.', 'Mlle', 'Dr.', 'Pr.', 'Me.');

    protected static $prefix = array('de', 'de la', 'Le', 'du');

    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
