<?php

namespace Faker\Provider\tr_TR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com','hotmail.com','mail.com.tr','mynet.com','outlook.com.tr','superposta.com',
        'turk.net','yahoo.com','yandex.com.tr',
    );

    /**
     * @link https://www.nic.tr
     */
    protected static $tld = array(
        'av.tr','bbs.tr','biz.tr','com','com','com','com','com.tr','com.tr','dr.tr','edu',
        'edu.tr','edu.tr','info','info.tr','k12.tr','name.tr','net','net.tr','org','org.tr',
        'tel.tr','tv.tr','web.tr',
    );
}
