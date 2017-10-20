<?php

namespace Faker\Provider\th_TH;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @var array List of card networks generally accept by payment gateway in Thailand
     */
    protected static $cardVendors = array(
        'Visa', 'MasterCard',
    );
    
    /**
     * @var array List of card brand masks for generating valid credit card numbers; Most Thai payment gateways accept only 16 digits cards
     * @see https://en.wikipedia.org/wiki/Payment_card_number Reference for existing prefixes
     * @see https://www.mastercard.us/en-us/issuers/get-support/2-series-bin-expansion.html MasterCard 2017 2-Series BIN Expansion
     */
    protected static $cardParams = array(
        'Visa' => array(
            "4539###########",
            "4556###########",
            "4916###########",
            "4532###########",
            "4929###########",
            "40240071#######",
            "4485###########",
            "4716###########",
            "4##############"
        ),
        'MasterCard' => array(
            "2221###########",
            "23#############",
            "24#############",
            "25#############",
            "26#############",
            "2720###########",
            "51#############",
            "52#############",
            "53#############",
            "54#############",
            "55#############"
        ),
    );
    
    /**
     * @var array Thai bank names
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%98%E0%B8%99%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static $banks = array(
        'ธนาคารแห่งประเทศไทย',
        'ธนาคารกรุงเทพ',
        'ธนาคารกรุงศรีอยุธยา',
        'ธนาคารกสิกรไทย',
        'ธนาคารเกียรตินาคิน',
        'ธนาคารซีไอเอ็มบีไทย',
        'ธนาคารทหารไทย',
        'ธนาคารทิสโก้',
        'ธนาคารไทยพาณิชย์',
        'ธนาคารไทยเครดิตเพื่อรายย่อย',
        'ธนาคารธนชาต',
        'ธนาคารยูโอบี',
        'ธนาคารแลนด์ แอนด์ เฮาส์',
        'ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)',
        'ธนาคารกรุงไทย',
        'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย',
        'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร',
        'ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย',
        'ธนาคารออมสิน',
        'ธนาคารอาคารสงเคราะห์',
        'ธนาคารอิสลามแห่งประเทศไทย',
        'ธนาคารไอซีบีซี (ไทย)',
    );

    /**
     * @example 'ธนาคารกสิกรไทย'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
