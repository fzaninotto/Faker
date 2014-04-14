<?php

namespace Faker\Provider\ja_JP;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
         '{{lastName}} {{firstNameFemale}}',
    );

    protected static $firstNameMale = array(
        'みつる', '京助', '健一', '太郎', '晃', '智也', '治', '浩', '淳', '直樹', '聡太郎',
    );

    protected static $firstNameFemale = array(
        'あすか', 'くみ子', '加奈', '明美', '桃子', '直子', '知実', '花子', '裕美子', '里佳', '千代',
    );

    protected static $lastName = array(
        '青田', '井高', '宇野', '江古田', '大垣',
        '加納', '喜嶋', '工藤', '小泉',
        '笹田', '鈴木', '杉山',
        '田辺', '津田',
        '渚', '中津川', '西之園',
        '原田', '浜田', '廣川', '藤本',
        '三宅', '村山',
        '山田', '吉本'
    );

    protected static $kanaFormats = array(
        '{{lastKanaName}} {{firstKanaName}}'
    );

    protected static $firstKanaName = array(
        'アキラ', 'アケミ', 'アスカ', 'オサム',
        'カナ', 'キョウスケ', 'ケンイチ', 'クミコ',
        'ジュン', 'ソウタロウ',
        'タロウ', 'チヨ', 'トモミ', 'トモヤ',
        'ナオキ', 'ナオコ',
        'ハナコ', 'ヒロシ',
        'ミツル', 'モモコ',
        'ユミコ', 'リカ',
    );

    protected static $lastKanaName = array(
        'アオタ', 'イダカ', 'ウノ', 'エコダ', 'オオガキ',
        'カノウ', 'キジマ', 'クドウ', 'コイズミ',
        'ササダ', 'スズキ', 'スギヤマ',
        'タナベ', 'ツダ',
        'ナギサ', 'ナカツガワ', 'ニシノソノ',
        'ハラダ', 'ハマダ', 'ヒロカワ', 'フジモト',
        'ミヤケ', 'ムラヤマ',
        'ヤマダ', 'ヨシモト'
    );

    /**
     * @example 'アオタ アキラ'
     */
    public function kanaName()
    {
        $format = static::randomElement(static::$kanaFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'アオタ'
     */
    public static function firstKanaName()
    {
        return static::randomElement(static::$firstKanaName);
    }

    /**
     * @example 'アキラ'
     */
    public static function lastKanaName()
    {
        return static::randomElement(static::$lastKanaName);
    }
}
