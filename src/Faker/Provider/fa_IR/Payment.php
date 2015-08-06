<?php

namespace Faker\Provider\fa_IR;

class Payment extends \Faker\Provider\Payment
{
    protected static $cardVendors = array(
        'اقتصاد نوین', 'انصار', 'ایران زمین', 'پارسیان', 'پاسارگاد', 'پست بانک', 'تجارت', 'توسعه تعاون', 'توسعه صادرات', 'دی', 'رفاه کارگران', 'سامان', 'سپه', 'سرمایه', 'سینا', 'شهر', 'صادرات', 'صنعت و معدن', 'کار آفرین', 'کشاورزی', 'گردشگری', 'مسکن', 'ملت', 'ملی', 'مهر ایران',
    );

    /**
     * @link http://www.bnmi.ir/index.php?option=com_content&view=article&id=789:1391-08-12-17-51-24&catid=46:edu&Itemid=88
     */
    protected static $cardParams = array(
        'اقتصاد نوین' => array('627412##########'),
        'انصار' => array('627381##########'),
        'ایران زمین' => array('505785##########'),
        'پارسیان' => array('622106##########'),
        'پاسارگاد' => array('639347##########'),
        'پست بانک' => array('627760##########'),
        'تجارت' => array('627353##########'),
        'توسعه تعاون' => array('502908##########'),
        'توسعه صادرات' => array('627648##########'),
        'دی' => array('502938##########'),
        'رفاه کارگران' => array('589463##########'),
        'سامان' => array('621986##########'),
        'سپه' => array('589210##########'),
        'سرمایه' => array('639607##########'),
        'سینا' => array('639346##########'),
        'شهر' => array('502806##########'),
        'صادرات' => array('603769##########'),
        'صنعت و معدن' => array('627961##########'),
        'کار آفرین' => array('627488##########'),
        'کشاورزی' => array('603770##########'),
        'گردشگری' => array('505426##########'),
        'مسکن' => array('628023##########'),
        'ملت' => array('610433##########'),
        'ملی' => array('603799##########'),
        'مهر ایران' => array('606373##########'),
    );

    /**
     * @param  boolean $valid        True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param  boolean $convertChars False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @return array
     */
    public function creditCardDetails($valid = true, $convertChars = false)
    {
        $type = static::creditCardType();

        return array(
            'type'   => $type,
            'number' => static::creditCardNumber($type),
            'name'   => $this->generator->name(),
            'expirationDate' => $this->creditCardExpirationDateString($valid, null, $convertChars)
        );
    }

    /**
     * @param boolean $valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  $expirationDateFormat
     * @param  boolean $convertChars        False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @return string
     * @example '۰۷/۹۴'
     */
    public function creditCardExpirationDateString($valid = true, $expirationDateFormat = null, $convertChars = false)
    {
        $datetime = $this->creditCardExpirationDate($valid);

        $expirationDateFormat = is_null($expirationDateFormat) ? static::$expirationDateFormat : $expirationDateFormat;

        return jDateTime::date($expirationDateFormat, $datetime->getTimestamp(), $convertChars);
    }
}
