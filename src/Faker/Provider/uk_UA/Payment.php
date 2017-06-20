<?php

namespace Faker\Provider\uk_Ua;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Ukraine banks (2017-29-03), source: https://uk.wikipedia.org/wiki/%D0%91%D0%B0%D0%BD%D0%BA%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8
     */
    protected static $banks = array(
        'А-Банк',
        'Авангард',
        'Альфа-Банк',
        'Альянс',
        'Апекс-банк',
        'Банк 3/4',
        'БТА Банк',
        'VS Bank',
        'ВТБ',
        'Глобус',
        'Діамантбанк',
        'Deutsche Bank',
        'Ідея Банк',
        'ING',
        'Індустріалбанк',
        'Кредит Європа Банк',
        'Crédit Agricole',
        'Кредобанк',
        'Львів',
        'Мегабанк',
        'МетаБанк',
        'Міжнародний інвестиційний банк',
        'Оксі Банк',
        'OTP Bank',
        'Ощадбанк',
        'Перший Інвестиційний Банк',
        'Південний',
        'Piraeus Bank',
        'Правекс-Банк',
        'ПриватБанк',
        'ПроКредит Банк',
        'Промінвестбанк',
        'ПУМБ',
        'Радабанк',
        'Райффайзен Аваль',
        'Сбербанк',
        'SEB',
        'Сітібанк',
        'Укргазбанк',
        'Укрексімбанк',
        'УкрСиббанк',
        'Укрсоцбанк',
        'Універсал Банк',
        'Фамільний',
        'Forward Bank',
        'Центр',
        'Unex'
    );

    /**
     * @example 'Сітібанк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
