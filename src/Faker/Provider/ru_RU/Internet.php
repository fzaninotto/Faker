<?php

namespace Faker\Provider\ru_RU;

class Internet extends \Faker\Provider\Internet
{
    /**
     * These doubles are made to make data more reallistic - i.e. to reflect the most popular mail-providers in Russia.
     * When generating the data yandex.ru/mail.ru should have much greater frequency than others.
     */
    protected static $freeEmailDomain = array(
        'yandex.ru', 'yandex.ru', 'yandex.ru', 'yandex.ru', 'yandex.ru', 'yandex.ru',
        'mail.ru', 'mail.ru', 'mail.ru', 'mail.ru', 'mail.ru',
        'gmail.com', 'gmail.com',
        'ya.ru', 'ya.ru',
        'list.ru', 'list.ru',
        'bk.ru', 'bk.ru',
        'inbox.ru', 'rambler.ru', 'hotmail.com', 'newmail.ru', 'freemail.ru', 'mail2000.ru', 'smtp.ru', 'youmail.ru',
        'zmail.ru', 'id.ru', 'go.ru', 'ok.ru', 'az.ru', 'uk.ru', 'cf.ru', 'ps.ru', 'om.ru', 'nsk.ru', 'yandex.com',
    );

    protected static $tld = array('com', 'com', 'net', 'org', 'ru', 'ru', 'ru', 'ru', 'su');
}
