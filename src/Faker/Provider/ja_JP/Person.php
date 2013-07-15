<?php

namespace Faker\Provider\ja_JP;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{lastName}} {{firstName}}'
    );

    protected static $firstName = array(
        '晃', '明美', 'あすか', '治',
        '加奈', '京助', '健一', 'くみ子',
        '淳', '聡太郎',
        '太郎', '千代', '知実', '智也',
        '直樹', '直子',
        '花子', '浩',
        'みつる', '桃子',
        '裕美子', '里佳',
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
}
