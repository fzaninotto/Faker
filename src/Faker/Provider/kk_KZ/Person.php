<?php

namespace Faker\Provider\kk_KZ;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{lastName}}ұлы {{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{lastName}}қызы {{firstNameFemale}}',
    );

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
