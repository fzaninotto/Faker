<?php

namespace Faker\Provider\hy_AM;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('քաղաք','գյուղ');

    protected static $regionSuffix = array('մարզ');
    protected static $streetPrefix = array('փողոց');

    protected static $buildingNumber = array('##');
    protected static $postcode = array('00##');
    protected static $country = array(
        'Մոնակո','Սինգապուր','Վատիկան','Մալդիվներ',
        'Մալթա','Բահրեյն','Բանգլադեշ','Բարբադոս',
        'Չինաստանի Հանրապետություն','Սան Մարինո',
        'Հարավային Կորեա','Նիդերլանդներ','Լիբանան',
        'Մարշալյան կղզիներ','Հնդկաստան','Կոմորներ',
        'Իսրայել','Բուրունդի','Հաիթի','Բելգիա','Ճապոնիա',
        'Ֆիլիպիններ','Շրի Լանկա','Գրենադա','Սալվադոր',
        'Վիետնամ','Ճամայկա','Անգլիա','Տրինիդադ և Տոբագո',
        'Գերմանիա','Պակիստան','Նեպալ','Դոմինիկանա',
        'Անտիգուա և Բարբուդա','Իտալիա','Լյուքսեմբուրգ',
        'Շվեյցարիա','Անդորրա','Նիգերիա','Գամբիա',
        'Քուվեյթ','Միկրոնեզիա','Ուգանդա','Չինաստան',
        'Թաիլանդ','Մալավի','Չեխիա','Մոլդովա','Դանիա',
        'Ինդոնեզիա','Գվատեմալա','Լեհաստան','Սիրիա',
        'Կիպրոս','Ֆրանսիա','Պորտուգալիա','Տոգո','Սլովակիա',
        'Հունգարիա','Ալբանիա','Կուբա','Գանա','Հայաստան',
        'Թուրքիա','Սլովենիա','Ավստրիա','Ադրբեջան',
        'Սերբիա','Ռումինիա','Իսպանիա','Բոսնիա և Հերցեգովինա',
        'Կոստա Ռիկա','Մալայզիա','Մակեդոնիա','Հունաստան',
        'Եգիպտոս','Կամբոջա','Բենին','Եթովպիա','Խորվաթիա',
        'Բիրմա','Սվազիլենդ','Արևելյան Թիմոր','Ուկրաինա',
        'Սիերա Լեոնե','Մարոկո','Հոնդուրաս','Հորդանան','Քենիա',
        'Բրունեյ','Իրաք','Վրաստան','Թունիս','Բուլղարիա',
        'Սենեգալ','Ուզբեկստան','Բուրկինա Ֆասո','Մեքսիկա',
        'Լիտվա','Տաջիկստան','Էկվադոր','Ֆիջի','Էրիթրեա','Իրան',
        'Բելառուս','Նիկարագուա','Աֆղանստան','Պալաու','Եմեն',
        'Տանզանիա','Պանամա','Գվինեա','Կամերուն',
        'Հարավային Աֆրիկա','Կոլումբիա','Մադագասկար',
        'Լատվիա','Լիբերիա','Կոնգո','Զիմբաբվե','Վենեսուելա',
        'Էստոնիա','Մոզամբիկ','Լաոս','Բրազիլիա','Պերու',
        'Բահամներ','Չիլի','Շվեդիա','Ուրուգվայ','Վանուատու',
        'Բութան','Զամբիա','Սուդան','Սոմալի','Նոր Զելանդիա',
        'Պարագվայ','Ֆինլանդիա','Արգենտինա','Ալժիր','Նորվեգիա',
        'Բելիզ','Հարավային Սուդան','Մալի','Անգոլա',
        'Թուրքմենստան','Օման','Բոլիվիա','Ռուսաստան','Գաբոն',
        'Ղազախստան','Լիբիա','Գայանա','Կանադա','Բոտսվանա',
        'Մավրիտանիա','Իսլանդիա','Սուրինամ','Ավստրալիա',
        'Նամիբիա','Մոնղոլիա',
    );

    protected static $region = array(
        'Արագածոտնի', 'Արարատի', 'Արմավիրի',
        'Գեղարքունիքի', 'Լոռու', 'Կոտայքի', 'Շիրակի',
        'Սյունիքի', 'Վայոց Ձորի', 'Տավուշի',
    );

    protected static $city = array(
        'Աբովյան', 'Ագարակ', 'Ալավերդի', 'Ախթալա', 'Այրում', 'Աշտարակ', 'Ապարան',
        'Արարատ', 'Արթիկ', 'Արմավիր', 'Արտաշատ', 'Բերդ', 'Բյուրեղավան', 'Գավառ',
        'Գյումրի', 'Գորիս', 'Դաստակերտ', 'Դիլիջան', 'Եղեգնաձոր', 'Եղվարդ', 'Երևան',
        'Էջմիածին', 'Թալին', 'Թումանյան', 'Իջևան', 'Ծաղկաձոր', 'Կապան', 'Հրազդան',
        'Ճամբարակ', 'Մասիս', 'Մարալիկ', 'Մարտունի', 'Մեծամոր', 'Մեղրի', 'Նոր',
        'Նոյեմբերյան', 'Շամլուղ', 'Չարենցավան', 'Ջերմուկ', 'Սիսիան', 'Սպիտակ',
        'Ստեփանավան', 'Սևան', 'Վայք', 'Վանաձոր', 'Վարդենիս', 'Վեդի', 'Տաշիր',
        'Քաջարան',
    );

    protected static $street = array(
        'Պուշկին','Տերյան','Աբովյան','Ագաթանգեղոս','Անդրանիկ','Օտյան','Լուկաշին',
        'Տիչինա','Շինարարներ','Լենինգրադյան','Կիևյան',
    );

    protected static $addressFormats = array(
        "{{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{street}} {{buildingNumber}} {{streetPrefix}}, {{postcode}}",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country()
    {
        return static::randomElement(static::$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
