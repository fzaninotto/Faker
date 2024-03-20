<?php

namespace Faker\Provider\hy_AM;

class Address extends \Faker\Provider\Address
{
    protected static array $cityPrefix = ['քաղաք', 'գյուղ'];

    protected static array $regionSuffix = ['մարզ'];
    protected static array $streetPrefix = ['փողոց'];

    protected static array $buildingNumber = ['##'];
    protected static array $postcode = ['00##'];
    protected static array $country = [
        'Մոնակո',
        'Սինգապուր',
        'Վատիկան',
        'Մալդիվներ',
        'Մալթա',
        'Բահրեյն',
        'Բանգլադեշ',
        'Բարբադոս',
        'Չինաստանի Հանրապետություն',
        'Սան Մարինո',
        'Հարավային Կորեա',
        'Նիդերլանդներ',
        'Լիբանան',
        'Մարշալյան կղզիներ',
        'Հնդկաստան',
        'Կոմորներ',
        'Իսրայել',
        'Բուրունդի',
        'Հաիթի',
        'Բելգիա',
        'Ճապոնիա',
        'Ֆիլիպիններ',
        'Շրի Լանկա',
        'Գրենադա',
        'Սալվադոր',
        'Վիետնամ',
        'Ճամայկա',
        'Անգլիա',
        'Տրինիդադ և Տոբագո',
        'Գերմանիա',
        'Պակիստան',
        'Նեպալ',
        'Դոմինիկանա',
        'Անտիգուա և Բարբուդա',
        'Իտալիա',
        'Լյուքսեմբուրգ',
        'Շվեյցարիա',
        'Անդորրա',
        'Նիգերիա',
        'Գամբիա',
        'Քուվեյթ',
        'Միկրոնեզիա',
        'Ուգանդա',
        'Չինաստան',
        'Թաիլանդ',
        'Մալավի',
        'Չեխիա',
        'Մոլդովա',
        'Դանիա',
        'Ինդոնեզիա',
        'Գվատեմալա',
        'Լեհաստան',
        'Սիրիա',
        'Կիպրոս',
        'Ֆրանսիա',
        'Պորտուգալիա',
        'Տոգո',
        'Սլովակիա',
        'Հունգարիա',
        'Ալբանիա',
        'Կուբա',
        'Գանա',
        'Հայաստան',
        'Թուրքիա',
        'Սլովենիա',
        'Ավստրիա',
        'Ադրբեջան',
        'Սերբիա',
        'Ռումինիա',
        'Իսպանիա',
        'Բոսնիա և Հերցեգովինա',
        'Կոստա Ռիկա',
        'Մալայզիա',
        'Մակեդոնիա',
        'Հունաստան',
        'Եգիպտոս',
        'Կամբոջա',
        'Բենին',
        'Եթովպիա',
        'Խորվաթիա',
        'Բիրմա',
        'Սվազիլենդ',
        'Արևելյան Թիմոր',
        'Ուկրաինա',
        'Սիերա Լեոնե',
        'Մարոկո',
        'Հոնդուրաս',
        'Հորդանան',
        'Քենիա',
        'Բրունեյ',
        'Իրաք',
        'Վրաստան',
        'Թունիս',
        'Բուլղարիա',
        'Սենեգալ',
        'Ուզբեկստան',
        'Բուրկինա Ֆասո',
        'Մեքսիկա',
        'Լիտվա',
        'Տաջիկստան',
        'Էկվադոր',
        'Ֆիջի',
        'Էրիթրեա',
        'Իրան',
        'Բելառուս',
        'Նիկարագուա',
        'Աֆղանստան',
        'Պալաու',
        'Եմեն',
        'Տանզանիա',
        'Պանամա',
        'Գվինեա',
        'Կամերուն',
        'Հարավային Աֆրիկա',
        'Կոլումբիա',
        'Մադագասկար',
        'Լատվիա',
        'Լիբերիա',
        'Կոնգո',
        'Զիմբաբվե',
        'Վենեսուելա',
        'Էստոնիա',
        'Մոզամբիկ',
        'Լաոս',
        'Բրազիլիա',
        'Պերու',
        'Բահամներ',
        'Չիլի',
        'Շվեդիա',
        'Ուրուգվայ',
        'Վանուատու',
        'Բութան',
        'Զամբիա',
        'Սուդան',
        'Սոմալի',
        'Նոր Զելանդիա',
        'Պարագվայ',
        'Ֆինլանդիա',
        'Արգենտինա',
        'Ալժիր',
        'Նորվեգիա',
        'Բելիզ',
        'Հարավային Սուդան',
        'Մալի',
        'Անգոլա',
        'Թուրքմենստան',
        'Օման',
        'Բոլիվիա',
        'Ռուսաստան',
        'Գաբոն',
        'Ղազախստան',
        'Լիբիա',
        'Գայանա',
        'Կանադա',
        'Բոտսվանա',
        'Մավրիտանիա',
        'Իսլանդիա',
        'Սուրինամ',
        'Ավստրալիա',
        'Նամիբիա',
        'Մոնղոլիա',
    ];

    protected static array $region = [
        'Արագածոտնի',
        'Արարատի',
        'Արմավիրի',
        'Գեղարքունիքի',
        'Լոռու',
        'Կոտայքի',
        'Շիրակի',
        'Սյունիքի',
        'Վայոց Ձորի',
        'Տավուշի',
    ];

    protected static array $city = [
        'Աբովյան',
        'Ագարակ',
        'Ալավերդի',
        'Ախթալա',
        'Այրում',
        'Աշտարակ',
        'Ապարան',
        'Արարատ',
        'Արթիկ',
        'Արմավիր',
        'Արտաշատ',
        'Բերդ',
        'Բյուրեղավան',
        'Գավառ',
        'Գյումրի',
        'Գորիս',
        'Դաստակերտ',
        'Դիլիջան',
        'Եղեգնաձոր',
        'Եղվարդ',
        'Երևան',
        'Էջմիածին',
        'Թալին',
        'Թումանյան',
        'Իջևան',
        'Ծաղկաձոր',
        'Կապան',
        'Հրազդան',
        'Ճամբարակ',
        'Մասիս',
        'Մարալիկ',
        'Մարտունի',
        'Մեծամոր',
        'Մեղրի',
        'Նոր',
        'Նոյեմբերյան',
        'Շամլուղ',
        'Չարենցավան',
        'Ջերմուկ',
        'Սիսիան',
        'Սպիտակ',
        'Ստեփանավան',
        'Սևան',
        'Վայք',
        'Վանաձոր',
        'Վարդենիս',
        'Վեդի',
        'Տաշիր',
        'Քաջարան',
    ];

    protected static array $street = [
        'Պուշկին',
        'Տերյան',
        'Աբովյան',
        'Ագաթանգեղոս',
        'Անդրանիկ',
        'Օտյան',
        'Լուկաշին',
        'Տիչինա',
        'Շինարարներ',
        'Լենինգրադյան',
        'Կիևյան',
    ];

    protected static array $addressFormats = [
        '{{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{street}} {{buildingNumber}} {{streetPrefix}}, {{postcode}}',
    ];

    public static function buildingNumber(): string
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address(): string
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country(): string
    {
        return static::randomElement(static::$country);
    }

    public static function postcode(): string
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function regionSuffix(): string
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region(): string
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix(): string
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city(): string
    {
        return static::randomElement(static::$city);
    }

    public function streetPrefix(): string
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street(): string
    {
        return static::randomElement(static::$street);
    }
}
