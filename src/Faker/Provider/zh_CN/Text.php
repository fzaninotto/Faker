<?php

namespace Faker\Provider\zh_CN;

class Text extends \Faker\Provider\Text
{
    protected static $separator = '';
    protected static $separatorLen = 0;

    /**
     * All punctuation in $baseText: 、 ， ： ； 。 ？ ！ —— （ ） 《 》 “ ” ‘ ’
     */
    protected static $notEndPunct = array('、', '，', '：', '；', '（', '）', '《', '》', '“', '‘');
    protected static $endPunct = array('。', '？', '！', '—', '》', '”', '’');
    protected static $notBeginPunct = array('、', '，', '：', '；', '。', '？', '！', '（', '）', '《', '》', '”', '’');

    /**
     * Title: 从百草园到三味书屋 From Baicao Garden to Sanwei Study (From Hundred-Grass Garden to Three-Taste Study)
     * Author: 鲁迅 Lu Xun (周树人 Zhou Shuren)
     * Language: Simplified Chinese
     *
     * Notice: Some punctuation has been removed. Some paragraph and quotations have be joined together.
     *
     * @see https://zh.wikisource.org/zh-hans/%E4%B8%89%E5%9C%8B%E6%BC%94%E7%BE%A9/%E7%AC%AC001%E5%9B%9E
     * @var string
     */
    protected static $baseText = <<<'EOT'
我家的后面有一个很大的园，相传叫作百草园。现在是早已并屋子一起卖给朱文公的子孙了，连那最末次的相见也已经隔了七八年，其中似乎确凿只有一些野草；但那时却是我的乐园。

不必说碧绿的菜畦，光滑的石井栏，高大的皂荚树，紫红的桑椹；也不必说鸣蝉在树叶里长吟，肥胖的黄蜂伏在菜花上，轻捷的叫天子（云雀）忽然从草间直窜向云霄里去了。单是周围的短短的泥墙根一带，就有无限趣味。油蛉在这里低唱，蟋蟀们在这里弹琴。翻开断砖来，有时会遇见蜈蚣；还有斑蝥，倘若用手指按住它的脊梁，便会拍的一声，从后窍喷出一阵烟雾。何首乌藤和木莲藤缠络著，木莲有莲房一般的果实，何首乌有拥肿的根。有人说，何首乌根是有像人形的，吃了便可以成仙，我于是常常拔它起来，牵连不断地拔起来，也曾因此弄坏了泥墙，却从来没有见过有一块根像人样。如果不怕刺，还可以摘到覆盆子，像小珊瑚珠攒成的小球，又酸又甜，色味都比桑椹要好得远。

长的草里是不去的，因为相传这园里有一条很大的赤练蛇。

长妈妈曾经讲给我一个故事听：先前，有一个读书人住在古庙里用功，晚间，在院子里纳凉的时候，突然听到有人在叫他。答应着，四面看时，却见一个美女的脸露在墙头上，向他一笑，隐去了。他很高兴；但竟给那走来夜谈的老和尚识破了机关。说他脸上有些妖气，一定遇见“美女蛇”了；这是人首蛇身的怪物，能唤人名，倘一答应，夜间便要来吃这人的肉的。他自然吓得要死，而那老和尚却道无妨，给他一个小盒子，说只要放在枕边，便可高枕而卧。他虽然照样办，却总是睡不着，——当然睡不着的。到半夜，果然来了，沙沙沙！门外像是风雨声。他正抖作一团时，却听得豁的一声，一道金光从枕边飞出，外面便什么声音也没有了，那金光也就飞回来，敛在盒子里。后来呢？后来，老和尚说，这是飞蜈蚣，它能吸蛇的脑髓，美女蛇就被它治死了。

结末的教训是：所以倘有陌生的声音叫你的名字，你万不可答应他。

这故事很使我觉得做人之险，夏夜乘凉，往往有些担心，不敢去看墙上，而且极想得到一盒老和尚那样的飞蜈蚣。走到百草园的草丛旁边时，也常常这样想。但直到现在，总还没有得到，但也没有遇见过赤练蛇和美女蛇。叫我名字的陌生声音自然是常有的，然而都不是美女蛇。

冬天的百草园比较的无味；雪一下，可就两样了。拍雪人（将自己的全形印在雪上）和塑雪罗汉需要人们鉴赏，这是荒园，人迹罕至，所以不相宜，只好来捕鸟。薄薄的雪，是不行的；总须积雪盖了地面一两天，鸟雀们久已无处觅食的时候才好。扫开一块雪，露出地面，用一支短棒支起一面大的竹筛来，下面撒些秕谷，棒上系一条长绳，人远远地牵着，看鸟雀下来啄食，走到竹筛底下的时候，将绳子一拉，便罩住了。但所得的是麻雀居多，也有白颊的“张飞鸟”，性子很躁，养不过夜的。

这是闰土的父亲所传授的方法，我却不大能用。明明见它们进去了，拉了绳，跑去一看，却什么都没有，费了半天力，捉住的不过三四只。闰土的父亲是小半天便能捕获几十只，装在叉袋里叫着撞著的。我曾经问他得失的缘由，他只静静地笑道：你太性急，来不及等它走到中间去。

我不知道为什么家里的人要将我送进书塾里去了，而且还是全城中称为最严厉的书塾。也许是因为拔何首乌毁了泥墙罢，也许是因为将砖头抛到间壁的梁家去了罢，也许是因为站在石井栏上跳了下来罢，都无从知道。总而言之：我将不能常到百草园了。Ade，我的蟋蟀们！Ade，我的覆盆子们和木莲们！

出门向东，不上半里，走过一道石桥，便是我的先生的家了。从一扇黑油的竹门进去，第三间是书房。中间挂著一块扁道：三味书屋；扁下面是一幅画，画著一只很肥大的梅花鹿伏在古树下。没有孔子牌位，我们便对着那扁和鹿行礼。第一次算是拜孔子，第二次算是拜先生。

第二次行礼时，先生便和蔼地在一旁答礼。他是一个高而瘦的老人，须发都花白了，还戴着大眼镜。我对他很恭敬，因为我早听到，他是本城中极方正，质朴，博学的人。

不知从那里听来的，东方朔也很渊博，他认识一种虫，名曰“怪哉”，冤气所化，用酒一浇，就消释了。我很想详细地知道这故事，但阿长是不知道的，因为她毕竟不渊博。现在得到机会了，可以问先生。

“先生，‘怪哉’这虫，是怎么一回事？”我上了生书，将要退下来的时候，赶忙问。

“不知道！”他似乎很不高兴，脸上还有怒色了。

我才知道做学生是不应该问这些事的，只要读书，因为他是渊博的宿儒，决不至于不知道，所谓不知道者，乃是不愿意说。年纪比我大的人，往往如此，我遇见过好几回了。

我就只读书，正午习字，晚上对课。先生最初这几天对我很严厉，后来却好起来了，不过给我读的书渐渐加多，对课也渐渐地加上字去，从三言到五言，终于到七言。

三味书屋后面也有一个园，虽然小，但在那里也可以爬上花坛去折蜡梅花，在地上或桂花树上寻蝉蜕。最好的工作是捉了苍蝇喂蚂蚁，静悄悄地没有声音。然而同窗们到园里的太多，太久，可就不行了，先生在书房里便大叫起来：“人都到那里去了？！”

人们便一个一个陆续走回去；一同回去，也不行的。他有一条戒尺，但是不常用，也有罚跪的规则，但也不常用，普通总不过瞪几眼，大声道：“读书！”

于是大家放开喉咙读一阵书，真是人声鼎沸。有念“仁远乎哉我欲仁斯仁至矣”的，有念“笑人齿缺曰狗窦大开”的，有念“上九潜龙勿用”的，有念“厥土下上上错厥贡苞茅橘柚”的。先生自己也念书。后来，我们的声音便低下去，静下去了，只有他还大声朗读著：“铁如意，指挥倜傥，一座皆惊呢；金叵罗，颠倒淋漓噫，千杯未醉嗬。”

我疑心这是极好的文章，因为读到这里，他总是微笑起来，而且将头仰起，摇著，向后面拗过去，拗过去。

先生读书入神的时候，于我们是很相宜的。有几个便用纸糊的盔甲套在指甲上做戏。我是画画儿，用一种叫作“荆川纸”的，蒙在小说的绣像上一个个描下来，像习字时候的影写一样。读的书多起来，画的画也多起来；书没有读成，画的成绩却不少了，最成片断的是《荡寇志》和《西游记》的绣像，都有一大本。后来，因为要钱用，卖给一个有钱的同窗了。他的父亲是开锡箔店的；听说现在自己已经做了店主，而且快要升到绅士的地位了。这东西早已没有了罢。

九月十八日。
EOT;

    protected static $encoding = 'UTF-8';

    protected static function explode($text)
    {
        $chars = array();

        foreach (preg_split('//u', preg_replace('/\\s/u', '', $text)) as $char) {
            if (!empty($char)) {
                $chars[] = $char;
            }
        }

        return $chars;
    }

    protected static function strlen($str)
    {
        if (function_exists('mb_strlen')) {
            return mb_strlen($str, static::$encoding);
        } elseif (function_exists('preg_match_all')) {
            /** @link http://php.net/manual/en/function.mb-strlen.php#87114 */
            return preg_match_all("/.{1}/us", $str, $dummy);
        } else {
            // CAUTION: Only for Chinese UTF-8 characters.
            return self::strlen($str) / 3;
        }
    }

    protected static function validStart($word)
    {
        return ! in_array($word, static::$notBeginPunct);
    }

    protected static function appendEnd($text)
    {
        $mbAvailable = extension_loaded('mbstring');

        // extract the last char of $text
        if ($mbAvailable) {
            // in order to support php 5.3, third param use 1 instead of null
            // https://secure.php.net/manual/en/function.mb-substr.php#refsect1-function.mb-substr-changelog
            $last = mb_substr($text, mb_strlen($text, static::$encoding) - 1, 1, static::$encoding);
        } else {
            $chars = static::utf8Encoding($text);
            $last = $chars[count($chars) - 1];
        }

        // if the last char is a not-valid-end punctuation, remove it
        if (in_array($last, static::$notEndPunct)) {
            if ($mbAvailable) {
                $text = mb_substr($text, 0, mb_strlen($text, static::$encoding) - 1, static::$encoding);
            } else {
                array_pop($chars);
                $text = implode('', $chars);
            }
        }

        // if the last char is not a valid punctuation, append a default one.
        return in_array($last, static::$endPunct) ? $text : $text . '。';
    }

    /**
     * Convert original string to utf-8 encoding.
     *
     * @param string $text
     * @return array
     */
    protected static function utf8Encoding($text)
    {
        $encoding = array();

        $chars = str_split($text);

        $countChars = count($chars);

        for ($i = 0; $i < $countChars; ++$i) {
            $temp = $chars[$i];

            $ord = ord($chars[$i]);

            switch (true) {
                case $ord > 251:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 247:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 239:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 223:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 191:
                    $temp .= $chars[++$i];
                    // no break
            }

            $encoding[] = $temp;
        }

        return $encoding;
    }
}
