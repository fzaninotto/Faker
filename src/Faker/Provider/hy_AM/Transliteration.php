<?php

namespace Faker\Provider\hy_AM;

/**
 * Armenian to latin transliteration util. Based on ../ua_UA/Transliteration.php
 */
Class Transliteration
{
    /**
     * Translate armenian text to latin
     * Useful for URL ang email generation
     * @param string $string
     * @return string
     */
    public static function transliterate($string = '') {
        $replace=array(
            "'"=>"",
            "`"=>"",
            "ա"=>"a","Ա"=>"a",
            "բ"=>"b","Բ"=>"b",
            "գ"=>"g","Գ"=>"G",
            "դ"=>"d","Դ"=>"D",
            "ե"=>"e","ե"=>"E",
            "զ"=>"z","զ"=>"z",
            "է"=>"e","է"=>"e",
            "ը"=>"y","Ը"=>"Y",
            "թ"=>"t","Թ"=>"T",
            "ժ"=>"zh","Ժ"=>"Zh",
            "ի"=>"i","Ի"=>"I",
            "լ"=>"l","Լ"=>"L",
            "խ"=>"kh","Խ"=>"Kh",
            "ծ"=>"ts","Ծ"=>"Ts",
            "կ"=>"k","Կ"=>"K",
            "հ"=>"h","Հ"=>"H",
            "ձ"=>"dz","Ձ"=>"Dz",
            "ղ"=>"gh","Ղ"=>"Gh",
            "ճ"=>"tch","Ճ"=>"Tch",
            "մ"=>"m","Մ"=>"M",
            "յ"=>"y","Յ"=>"Y",
            "ն"=>"n","Ն"=>"N",
            "շ"=>"sh","Շ"=>"Sh",
            "ո"=>"vo","Ո"=>"Vo",
            "չ"=>"ch","Չ"=>"Ch",
            "պ"=>"p","Պ"=>"P",
            "ջ"=>"j","Ջ"=>"J",
            "ռ"=>"r","Ռ"=>"R",
            "ս"=>"s","Ս"=>"S",
            "վ"=>"v","Վ"=>"V",
            "տ"=>"t","Տ"=>"T",
            "ր"=>"r","Ր"=>"R",
            "ց"=>"ts","Ց"=>"Ts",
            "ու"=>"u","Ու"=>"U",
            "փ"=>"p","Փ"=>"P",
            "ք"=>"q","Ք"=>"Q",
            "և"=>"ev","Եւ"=>"E",
            "օ"=>"o","Օ"=>"O",
            "ֆ"=>"f","Ֆ"=>"F"
        );
        return strtr($string, $replace);
    }
}
