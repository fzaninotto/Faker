<?php

namespace Faker\Provider\kk_KZ;

class Person extends \Faker\Provider\Person
{

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static $maleNameFormats = array(
        '{{lastName}}ұлы {{firstNameMale}}',
    );

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static $femaleNameFormats = array(
        '{{lastName}}қызы {{firstNameFemale}}',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static $firstNameMale = array(
        'Аылғазы',
        'Әбдіқадыр',
        'Бабағожа',
        'Ғайса',
        'Дәмен',
        'Егізбек',
        'Жазылбек',
        'Зұлпықар',
        'Игісін',
        'Кәдіржан',
        'Қадырқан',
        'Латиф',
        'Мағаз',
        'Нармағамбет',
        'Оңалбай',
        'Өндіріс',
        'Пердебек',
        'Рақат',
        'Сағындық',
        'Танабай',
        'Уайыс',
        'Ұйықбай',
        'Үрімбай',
        'Файзрахман',
        'Хангелді',
        'Шаттық',
        'Ыстамбақы',
        'Ібни',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static $firstNameFemale = array(
        'Асылтас',
        'Әужа',
        'Бүлдіршін',
        'Гүлшаш',
        'Ғафура',
        'Ділдә',
        'Еркежан',
        'Жібек',
        'Зылиқа',
        'Ирада',
        'Күнсұлу',
        'Қырмызы',
        'Ләтипа',
        'Мүштәри',
        'Нұршара',
        'Орынша',
        'Өрзия',
        'Перизат',
        'Рухия',
        'Сындыбала',
        'Тұрсынай',
        'Уәсима',
        'Ұрқия',
        'Үрия',
        'Фируза',
        'Хафиза',
        'Шырынгүл',
        'Ырысты',
        'Іңкәр',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static $lastName = array(
        'Адырбай',
        'Әжібай',
        'Байбөрі',
        'Ғизат',
        'Ділдабек',
        'Ешмұхамбет',
        'Жігер',
        'Зікірия',
        'Иса',
        'Кунту',
        'Қыдыр',
        'Лұқпан',
        'Мышырбай',
        'Нысынбай',
        'Ошақбай',
        'Өтетілеу',
        'Пірәлі',
        'Рүстем',
        'Сырмұхамбет',
        'Тілеміс',
        'Уәлі',
        'Ұлықбек',
        'Үстем',
        'Фахир',
        'Хұсайын',
        'Шілдебай',
        'Ыстамбақы',
        'Ісмет',
    );

    /**
     * National Individual Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/!utWCM/p/b1/04_Sj9S1tDAwMzY1NjLTj9CPykssy0xPLMnMz0vMAfGjzOKDvDxNnJwMHQ0sTMOMDBxNPJ2dggNCg13MDIEKIpEVGFiGOIMUuIcFOJkZGxgYE6ffAAdwNCCkP1w_ClUJFheAFeCxws8jPzdVPzcqx83SU9cRADxWbyg!/dl4/d5/L0lDUmlTUSEhL3dHa0FKRnNBLzRKVXFDQSEhL2Vu/
     * @param  \DateTime $birthDate
     * @return string 12 digits, like 780322300455
     */
    public static function individualIdentificationNumber(\DateTime $birthDate = null)
    {
        if (!$birthDate) {
            $birthDate = \Faker\Provider\DateTime::dateTimeBetween();
        }

        $dateAsString       = $birthDate->format('ymd');
        $genderAndCenturyId = (string) static::numberBetween(1, 6);
        $randomDigits       = (string) static::numerify('#####');

        return $dateAsString . $genderAndCenturyId . $randomDigits;
    }
}
