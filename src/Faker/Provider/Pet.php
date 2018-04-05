<?php

namespace Faker\Provider;

class Pet extends Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static $malePetNameFormats = array(
        '{{petNameMale}}',
    );

    protected static $femalePetNameFormats = array(
        '{{petNameFemale}}',
    );

    protected static $catColorFormats = array(
        '{{catColorName}}',
        '{{catColorName}}',
        '{{catColorName}}',
        '{{catColorName}} Point',
        '{{catColorName}}, {{catColorName}}',
        '{{catColorName}}, {{catColorName}}',
        '{{catColorName}}, {{catColorName}}',
        '{{catColorName}}, {{catColorName}}, {{catColorName}}',
    );

    /**
     * @link https://sites.google.com/site/farshidfarhat/boy-names
     */
    protected static $petNameMale = [
        'Snoopi',
    ];

    /**
     * @link https://sites.google.com/site/farshidfarhat/girl-names
     */
    protected static $petNameFemale = [
        'Lusi',
    ];

    protected static $catBreeds = [
        'Abyssinian','American Bobtail','American Curl','American Shorthair','American Wirehair',
        'Balinese','Bengal Cats','Birman','Bombay','British Shorthair','Burmese','Burmilla','Chartreux',
        'Chinese Li Hua','Colorpoint Shorthair','Cornish Rex','Cymric','Devon Rex','Egyptian Mau','European Burmese',
        'Exotic','Havana Brown','Himalayan','Japanese Bobtail','Javanese','Korat','LaPerm','Maine Coon','Manx',
        'Nebelung','Norwegian Forest','OcicatOriental','Persian','Ragamuffin','Ragdoll Cats','Russian Blue',
        'Savannah','Scottish Fold','Selkirk Rex','Siamese Cat','Siberian','Singapura','Snowshoe','Somali',
        'Sphynx','Tonkinese','Turkish Angora','Turkish Van'
    ];

    protected static $catColorNames = [
        'White','Blue', 'Red', 'Gray', 'Brown','Gold','Yellow','Black'
    ];

    public function petName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            $format = static::randomElement(static::$malePetNameFormats);
        } elseif ($gender === static::GENDER_FEMALE) {
            $format = static::randomElement(static::$femalePetNameFormats);
        } else {
            $format = static::randomElement(array_merge(static::$malePetNameFormats, static::$femalePetNameFormats));
        }

        return $this->generator->parse($format);
    }

    protected static $dogBreeds = [
        'Affenpinscher','Afghan Hound','Airedale Terrier','Akita','Alaskan Malamute','American EnglishCoonhound',
        'American Eskimo Dog','American Foxhound','American PitBull Terrier','American Water Spaniel',
        'Anatolian Shepherd Dog','Appenzeller Sennenhunde','Australian Cattle Dog','Australian Shepherd',
        'Australian Terrier','Azawakh','Barbet','Basenji','Basset Hound','Beagle','BeardedCollie','Bedlington Terrier',
        'Belgian Malinois','Belgian Sheepdog','Belgian Tervuren','Berger Picard','Bernese Mountain Dog','Bichon Frise',
        'Black and Tan Coonhound','Black Russian Terrier','Bloodhound','Bluetick Coonhound','Bolognese','Border Collie',
        'Border Terrier','Borzoi','Boston Terrier','Bouvier des Flandres','Boxer','Boykin Spaniel','Bracco Italiano',
        'Briard','Brittany','Brussels Griffon','Bull Terrier','Bulldog','Bullmastiff','Cairn Terrier','Canaan Dog',
        'Cane Corso','Cardigan WelshCorgi','Catahoula Leopard Dog','Cavalier KingCharles Spaniel','Cesky Terrier',
        'ChesapeakeBay Retriever','Chihuahua','Chinese Crested','Chinese Shar-Pei','Chinook','ChowChow',
        'Clumber Spaniel','Cockapoo','Cocker Spaniel','Collie','Coton de Tulear','Curly-Coated Retriever','Dachshund',
        'Dalmatian','Dandie Dinmont Terrier','Doberman Pinscher','Dogue deBordeaux','English Cocker Spaniel',
        'English Foxhound','English Setter','English Springer Spaniel','English Toy Spaniel','Entlebucher Mountain Dog',
        'Field Spaniel','Finnish Lapphund','Finnish Spitz','Flat-Coated Retriever','Fox Terrier','French Bulldog',
        'German Pinscher','German Shepherd Dog','German Shorthaired Pointer','German Wirehaired Pointer',
        'Giant Schnauzer','Glen of Imaal Terrier','Goldador','Golden Retriever','Goldendoodle','Gordon Setter',
        'Great Dane','Great Pyrenees','Greater Swiss Mountain Dog','Greyhound','Harrier','Havanese','Ibizan Hound',
        'Icelandic Sheepdog','Irish Red and White Setter','Irish Setter','Irish Terrier','Irish Water Spaniel',
        'Irish Wolfhound','Italian Greyhound','Jack Russell Terrier','Japanese Chin','Korean Jindo Dog','Keeshond',
        'KerryBlue Terrier','Komondor','Kooikerhondje','Kuvasz','Labradoodle','Labrador Retriever','Lakeland Terrier',
        'Lancashire Heeler','Leonberger','LhasaApso','Lowchen','Maltese','Maltese Shih Tzu','Maltipoo',
        'Manchester Terrier','Mastiff','Miniature Pinscher','Miniature Schnauzer','Mutt','Neapolitan Mastiff',
        'Newfoundland','Norfolk Terrier','NorwegianBuhund','Norwegian Elkhound','Norwegian Lundehund','Norwich Terrier',
        'Nova Scotia Duck Tolling Retriever','Old English Sheepdog','Otterhound','Papillon','Peekapoo','Pekingese',
        'Pembroke Welsh Corgi','Petit Basset Griffon Vendeen','Pharaoh Hound','Plott','PocketBeagle','Pointer',
        'Polish Lowland Sheepdog','Pomeranian','Poodle','Portuguese Water Dog','Pug','Puggle','Puli','Pyrenean Shepherd',
        'Rat Terrier','Redbone Coonhound','Rhodesian Ridgeback','Rottweiler','Saint Bernard','Saluki','Samoyed',
        'Schipperke','Schnoodle','Scottish Deerhound','Scottish Terrier','Sealyham Terrier','Shetland Sheepdog','Shiba Inu',
        'Shih Tzu','Siberian Husky','Silky Terrier','Skye Terrier','Sloughi','Small Munsterlander Pointer',
        'Soft Coated Wheaten Terrier','Stabyhoun','StaffordshireBull Terrier','Standard Schnauzer',
        'Sussex Spaniel','Swedish Vallhund','Tibetan Mastiff','Tibetan Spaniel','Tibetan Terrier',
        'Toy Fox Terrier','Treeing TennesseeBrindle','Treeing Walker Coonhound',
        'Vizsla','Weimaraner','Welsh Springer Spaniel','Welsh Terrier',
        'West Highland White Terrier','Whippet','Wirehaired Pointing Griffon','Xoloitzcuintli',
        'Yorkipoo','Yorkshire Terrier'
    ];

    public static function petNameMale()
    {
        return static::randomElement(static::$petNameMale);
    }

    public static function petNameFemale()
    {
        return static::randomElement(static::$petNameFemale);
    }

    public static function catBreed()
    {
        return static::randomElement(static::$catBreeds);
    }

    public static function catColorName()
    {
        return static::randomElement(static::$catColorNames);
    }

    public function catColor()
    {
        return $this->generator->parse(static::randomElement(static::$catColorFormats));
    }

    public static function dogBreed()
    {
        return static::randomElement(static::$dogBreeds);
    }
}

