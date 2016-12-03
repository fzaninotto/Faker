<?php
namespace Faker\Provider\zh_CN;

/**
 * @author 黄小辰
 */
class Text extends \Faker\Provider\Text
{
    protected static $separator = '';
    protected static $separatorLen = 0;

    /**
     * All punctuation in $baseText: 、 。 「 」 『 』 ！ ？ ー ， ： ；
     */
    protected static $notEndPunct = array('、', '「', '『', 'ー', '，', '：', '；');
    protected static $endPunct = array('。', '」', '』', '！', '？');
    protected static $notBeginPunct = array('、', '。', '」', '』', '！', '？', 'ー', '，', '：', '；');

    protected static $baseText = <<<'EOT'
        思念似酒，或轻或柔，漂浮人海，拂过一颗孤独的心，如果遇到，请你浅尝，那醇香浓厚，却难替代的温柔，它亲吻，身体每一寸的肌肤，
        它跃然，身体每一个角落，温暖孤独、寂寥的心。如果，我说如果，思念深埋，请不要压抑，让它自然释放，在黑的夜，繁星映衬的星空，
        还有月儿轻拢的纱，深饮浅唱，书写篇章思念如茶，似苦似甜，藏在人海，默默关注羁旅逃避的灵魂，如果遇到，请你拥抱，那味香涩苦，
        却难相遇的尘缘，它流淌，血液里每一个细胞，它抚摸，身体每一块冰冷肌肤，暖和麻木、微寒的身躯。如果，我说如果，思念哭泣，请
        不要擦拭，让它尽情滴落，在下雨天，乌云遮蔽的天空，还有飘零的叶，细细感受，笔墨诗行或许，夕阳落下的醉美，是思念的记忆，藏
        在灵魂深处，或许，炊烟升起的云雾，是思念的思念，藏在风里、云里，又或许，庭院深深的饭桌，是思念的念想，藏在脑海，跳动的心
        看，黎明第一缕光线，折射宇宙深处，那黑洞漩涡，深深吸引，深深呼唤，每一寸光彩夺目的星光，告诉它们，思念在旋转，思念在等待，
        思念在追寻。后来，不明白的终于明白，原来，思念是内心最真实的自己，是七情六欲的贪念，是灵魂深处的最难压抑的伤怀，是生命最
        不可缺失的色彩或许，当一切都化为虚无，当一切沦为尘埃，思念还是不停辗转往复，随着四季来回，时间流走，一直一直的埋在宇宙深处，
        静静等待，静静呼唤。
        早晨起来洗漱完毕，走出教师宿舍楼，来到充满阳光的校园里，感觉是那么的清新与温和。在阳光下行走，感受冬天里阳光的温暖，耳边回
        荡一阵阵清脆的鸟鸣声。这样的早晨不会感到孤单，你无论走到哪里？有阳光会陪在你的身边，帮你驱赶内心的烦恼，心情也会觉得开朗。
        金色的阳光扫射着校园里的黄叶，把金色给了校园里的白杨树。蛋黄色的云层在阳光的映射下，似乎把天空装饰成了一片金色。喜欢阳光下
        的青草和树木，没有清露下的冰冷，也没有夜幕下的暗淡和沉寂，更不会柔弱谦卑到无筋无骨。阳光下的青草和树木，是葱茏的，是昂扬向
        上的；喜欢阳光下翩翩飞舞的蝴蝶，绚丽的外衣包裹着一颗自由和快活的心，有足够的资本去展现自己，吸引心仪的花朵。它知道外表的美
        不是完美的美，它更知道心灵的美才是真正的美。所以很多时候，它把自己隐遁在一朵花上，用心灵去靠近，去触摸。
        行走在阳光下，心事显得随意而透明，如同树荫下斑驳的光点。在微风里欢欣而不显张扬，明媚而不是雕琢。喜欢这样的日子，一个人静静
        的，随意的，走着，看着。慨叹时光里的苍老，回首岁月里的青葱，有点小忧伤，却是淡淡的，不着痕迹的。记得曾经问过一个朋友，你为
        什么喜欢阳光？她说“因为阳光能给人们带来希望”。这句话说的多么贴切，阳光不仅给人带来希望，还有温暖。我想每一个心里拥有阳光的
        人，会是一个快乐的人，因为她对生活充满希望。
        在阳光下行走，漫无目的，任意随性，没有烦恼，轻松而惬意。沧桑岁月中流失的年华，早已掠夺了那本该有的喜笑哀乐。那些在人生里彰
        显的个性，都已随着时间的流失，被磨裂的毫无棱角。红尘中属于自己的佳妙年华已经远去，虽然自己还是过去的那个自己，像火一样的热
        情被抹上了岁月的尘埃。蓦然间，才觉得人生是那么荒唐，觉得将年华浪费在毫无用处的叹息中，以此来安慰自己的懦弱，白白丢掉原本属
        于自己的那一份宁静和快乐。阳光会让人如此依恋，有点让人不敢相信这是冬天，活脱脱地好像一个春天。阳光真的很美，美得让人不舍，
        让人只想；似乎沉醉在梦中不愿起来。原来，这就是阳光。
        行走在阳光下，心灵是平实而富足的，捡拾一枚早凋的落叶，轻嗅几瓣嫣红里流溢的芬芳；聆听几声清幽的鸟鸣，所有的一切，在无声的传
        递着一个相同的信息；生命是美好的，阳光是可爱的。大自然赋予我们的一切，是经过了细心的筛选，是上帝的宠儿。喜欢这么一句话："要
        么读书，要么行走。"读书，沉淀的是灵魂的底蕴；行走，拓展的是思维的宽度。无论读书还是行走，都是一种美好。行走在阳光下，有多一
        层明媚与温暖的感觉，用一双眼看世界，到处是风和日丽，花好月圆。
        行走在阳光下，用心感触大自然的每一个音符，能聆听到花朵柔情的耳语，连空气似乎也有着淡淡的清香。嗅着阳光的味道，眼睛里满是清澈
        与明净，心底里开出了一些花，细碎而芬芳。纤指轻扬，画出一个优美的弧度，那是快乐的角度。静静的闭上眼，让灵魂随着清风，欢快的飘
        扬吧！年华似锦，青春与梦想，在阳光的映照下显得五彩斑斓。生活与快乐，原本是生命中最质朴的祈望。就把自己的一颗心放在阳光下吧！
        在阳光里仰望世界，邂逅美丽的风景。一个眼神，一抹微笑，心领神会的默然；一切将会变得唯美，静静的享受那份阳光下灵魂深处的静谧。
        在阳光下做简单真实的自己，静守一份默然，不为浮名所累，亦不甘消沉，我有我的梦想，也有我的追求。如果是一片树叶，那么就做一片不
        求名的陌生梧桐叶吧！开也自在，谢也随意。在阳光下做一朵自由行走的叶子，不为谁停留，也不为谁凋谢。有风吹来的时候，那是我在枝头
        张望，张望属于我的骄傲，我的风景。当阳光轻轻抛洒在我的身上，你便可听到我的灵魂在歌唱。
EOT;

    protected static $encoding = 'UTF-8';

    protected static function explode($text)
    {
        $chars = array();

        foreach (preg_split('//u', str_replace(PHP_EOL, '', $text)) as $char) {
            if (! empty($char)) {
                $chars[] = $char;
            }
        }

        return $chars;
    }

    protected static function strlen($text)
    {
        return function_exists('mb_strlen')
            ? mb_strlen($text, static::$encoding)
            : count(static::explode($text));
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
