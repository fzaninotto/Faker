<?php

namespace Faker\Provider\zh_CN;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}}{{companySuffix}}'
    );

    protected static $companyPrefix = array(
        '超艺', '和泰', '九方', '鑫博腾飞', '戴硕电子', '济南亿次元', '海创', '创联世纪', '凌云', '泰麒麟', '彩虹', '兰金电子', '晖来计算机', '天益', '恒聪百汇', '菊风公司', '惠派国际公司', '创汇', '思优', '时空盒数字', '易动力', '飞海科技', '华泰通安', '盟新', '商软冠联', '图龙信息', '易动力', '华远软件', '创亿', '时刻', '开发区世创', '明腾', '良诺', '天开', '毕博诚', '快讯', '凌颖信息', '黄石金承', '恩悌', '雨林木风计算机', '双敏电子', '维旺明', '网新恒天', '数字100', '飞利信', '立信电子', '联通时科', '中建创业', '新格林耐特', '新宇龙信息', '浙大万朋', 'MBP软件', '昂歌信息', '万迅电脑', '方正科技', '联软', '七喜', '南康', '银嘉', '巨奥', '佳禾', '国讯', '信诚致远', '浦华众城', '迪摩', '太极', '群英', '合联电子', '同兴万点', '襄樊地球村', '精芯', '艾提科信', '昊嘉', '鸿睿思博', '四通', '富罳', '商软冠联', '诺依曼软件', '东方峻景', '华成育卓', '趋势', '维涛', '通际名联'
    );

    protected static $companySuffix = array('科技', '网络', '信息', '传媒');

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companySuffix()
    {
        return parent::companySuffix() . '有限公司';
    }
}
