<?php

namespace Faker\Provider\fa_IR;

class Pet extends \Faker\Provider\Pet
{
    protected static $malePetNameFormats = array(
        '{{petNameMale}}',
    );

    protected static $femalePetNameFormats = array(
        '{{petNameFemale}}',
    );

    protected static $catColorFormats = array(
        '{{catColorName}}',
        '{{catColorName}}-{{catColorName}}',
    );

    protected static $petNameMale = [
        'Snoopi','Siamak','Max','Maxi','Rabi','Belfi','Sami','Raika','Adonis','Astro','Atticus',
        'Balto','Benz','Blake','Bourbon','Buzby','Capone','Chaplin','Damian','Daunte','Destry',
        'Einstein','Everest','Expresso','Forbes','Gabriel','Gadi','Goblin','Hermes','Jingo','Kibou',
        'Loopy','Maniac','Merriweather'
    ];

    protected static $petNameFemale = [
        'Rabi','Shika','Lusi','Shila','Alpine','Andromeda','Egypt','Iggy','Hocus','Pocus','JuJu','Kylah',
        'Lucrecia','Macala','Malika','Mercedes','Pixie','Porsha','Savanah','Shasta','Talullah','Tangiers',
        'Tilly','Xena'
    ];

    protected static $catBreeds = [
        'Abyssinian','American Bobtail','American Curl','American Shorthair','American Wirehair',
        'Balinese','Bengal Cats','Birman','Bombay','British Shorthair','Burmese','Burmilla','Chartreux',
        'Chinese Li Hua','Colorpoint Shorthair','Cornish Rex','Cymric','Devon Rex','Egyptian Mau','European Burmese',
        'Exotic','Havana Brown','Himalayan','Japanese Bobtail','Javanese','Korat','LaPerm','Maine Coon','Manx',
        'Nebelung','Norwegian Forest','OcicatOriental','پرشین','Ragamuffin','Ragdoll Cats','Russian Blue',
        'Savannah','Scottish Fold','Selkirk Rex','سیامی','Siberian','Singapura','Snowshoe','Somali',
        'Sphynx','Tonkinese','Turkish Angora','Turkish Van'
    ];

    protected static $catColorNames = [
        'سفید','خاکستری', 'قرمز', 'مشکی', 'قهوه‌ای','حنایی','طلایی','زرد','کرمی',
    ];
}
