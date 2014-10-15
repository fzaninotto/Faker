<?php

namespace Faker\Provider\zh_TW;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}}{{companySuffix}}'
    );

    protected static $companyPrefix = array(
        '松川精密','聯華','財進','亞力克','龍漢','亞克','久代','群光','偉福',
        '汎宸','普泰','連結精密','大詳','信強','欣融','勤正','南都','上正',
        '今盛','元成','新苗','長源','和碩','宏全','全景','奧立','上奇'
    );

    protected static $companySuffix = array('', '科技', '電子', '網路', '設計',
        '傳播', '資訊', '軟體', '電器', '塑膠工業', '自動控制','國際飲食',
        '實業','機械', '工程', '育樂事業', '自動控制', '汽車'
    );

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companySuffix()
    {
        return parent::companySuffix() . '有限公司';
    }
}
