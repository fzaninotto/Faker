<?php

namespace Faker\Provider\ko_KR;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'com', 'kr', 'me', 'net', 'org',
    );

    protected static $tld = array(
        'biz', 'com', 'info', 'kr', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'gang', 'go', 'gwak', 'gwon', 'kang', 'ko', 'kwak', 'kwon', 'kim', 'nam', 'no', 'ryu', 'moon', 'park', 'bae',
        'baek', 'seo', 'son', 'song', 'shin', 'shim', 'ahn', 'yang', 'oh', 'yu', 'yoon', 'lee', 'lim', 'jang', 'jeon',
        'jung', 'jo', 'choi', 'chang', 'cheon', 'chung', 'cho', 'ha', 'han', 'heo', 'hong', 'hwang',
    );

    protected static $firstNameAscii = array(
        'gunwoo', 'gunho', 'kyungseok', 'kyungsoo', 'kyungchoon', 'kyunghwan', 'kwangsoo', 'kubum', 'kyusan', 'kisoo',
        'namsoo', 'namho', 'daesun', 'daesoo', 'doyoon', 'dohyunn', 'dongyoon', 'dongha', 'donghyun', 'myungshik',
        'myungho', 'moonyong', 'moonchang', 'minseok', 'minsung', 'minsoo', 'minjae', 'minjun', 'mincheol', 'minhwan',
        'byungcheol', 'byungho', 'sangsun', 'sangsoo', 'sangwoo', 'sangwook', 'sangjun', 'sangcheol', 'sanghyun',
        'sangho',  'sanghun', 'seojun', 'seoho', 'sunyup', 'sunggon', 'sungryung', 'sungmin', 'sungsoo', 'sungjin',
        'sunghyun', 'sungho', 'sunghun', 'suwon', 'seungmin', 'seunghyun', 'seungho', 'siwoo', 'younggil', 'youngsoo',
        'youngshik', 'youngil', 'youngjin', 'youngcheol', 'youngha', 'youngho', 'youngwhan', 'yejun', 'youngtae',
        'youngwhan', 'younghun', 'woojin', 'wonjun', 'wonjin', 'wonhee', 'eunsung', 'eunteck', 'ingyu', 'jaeyun',
        'jaecheo', 'jaehyuk', 'jaehyun', 'jaeho', 'jaehun', 'jungnam', 'jungsoo', 'jungshik', 'jungwoong', 'jungho',
        'junghun', 'jongsoo', 'jongju', 'jonghun', 'juwon', 'jughyung', 'jun', 'junbum', 'junseo', 'junyoung',
        'junhyuk', 'junhyung', 'junho', 'jungsoo', 'jihoo', 'jihoon', 'jinsoo', 'jinwoo', 'jinho', 'changyoung',
        'chaehyun', 'taehyun', 'taeho', 'hyuksang', 'hyunkyu', 'hyunwoo', 'hyunjong', 'hyunjun', 'hyungmin',
        'hyungcheol', 'homin', 'hojin', 'hongsun', 'hyoil', 'garam', 'gangeun', 'ganghee', 'geongeun', 'kyungjoo',
        'kiyun', 'naroo', 'naree', 'nayun', 'naeun', 'nahyoung', 'nuree', 'dayoung', 'doyoun', 'donghyun', 'mikyoung',
        'mira', 'miran', 'miyoung', 'mijung', 'minseo', 'mina', 'minji', 'minhyoung', 'minhee', 'banhee', 'boram',
        'bomi', 'bomin', 'bom', 'sangah', 'sangmyoung', 'saemi', 'seoyeon', 'seoyoung', 'seoyun', 'seohyeon',
        'sunyoung', 'sunwoo', 'sunjung', 'sunho', 'sungmi', 'sungmin', 'sungeun', 'sewon', 'somin', 'soyoun', 'soyoung',
        'sojung', 'suran', 'sumin', 'subin', 'suyoun', 'suwon', 'sujung', 'sujin', 'sunhang', 'seulki', 'sieun',
        'sinae', 'areum', 'arin', 'yeojin', 'younsun', 'younhee', 'youngjin', 'younghwa', 'yewon', 'yeon', 'yeji',
        'yejin', 'yuri', 'yujung', 'yujin', 'yunkyoung', 'yunmi', 'yunseo', 'yunyoung', 'eunkyoung', 'eunmi', 'eunsang',
        'eunseo', 'eunae', 'eunyoung', 'eunjung', 'eunju', 'eunji', 'eunjin', 'eunhyoung', 'eunhye', 'eunhee', 'inhwa',
        'jaeyeon', 'jungran', 'jungmin', 'jungeun', 'junghwa', 'jumyoung', 'jumi', 'juyeon', 'juhee', 'jimin', 'jisun',
        'jisuk', 'jia', 'jiyeon', 'jiyoung', 'jiye', 'jiwoo', 'jiwon', 'jieun', 'jihyeon', 'jihye', 'jihee', 'jina',
        'jinhee', 'chaewon', 'taehee', 'hana', 'hayun', 'haeun', 'hanna', 'hyesun', 'hyunyoung', 'hyounjung', 'hyunjoo',
        'hyunji', 'hyena', 'hyerim', 'hyemin', 'hyesuk', 'hyeyoun', 'hyejin', 'hyojin', 'heekyoung', 'heewon'
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'gunwoo.gang'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'kim.kr'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
