<?php
namespace Faker\Provider\zh_CN;

/**
 * @author 黄小辰
 */
class Lorem extends \Faker\Provider\Lorem
{
    protected static $wordListCn = array(
        '美丽', '自己', '佐德', '战队', '想象', '星空', '底部', '三台', '解红', '塞姑', '戚氏',
        '布布', '脑残', '可爱', '伊布', '火车', '空运', '幸福', '薄媚', '渔父', '望江', '孤鸾',
        '姑娘', '男子', '真理', '等于', '类似', '大雨', '残忍', '西施', '韵令', '侧犯', '西河',
        '竹枝', '导引', '入塞', '品令', '木笪', '河传', '鞋红', '别怨', '寻梅', '催雪', '个侬',
        '踏歌', '兀令', '簇水', '露华', '尾犯', '塞姑', '白雪', '徵招', '天香', '步月', '暗香',
        '国香', '芳草', '大椿', '垂杨', '花犯', '倒犯', '瑶华', '眉妩', '阳春', '索酒', '南浦',
        '薄幸', '疏影', '宣清', '八归', '笛家', '白柠', '六州', '大脯', '六丑', '歌头', '多丽',
        '大有', '无闷', '三台', '哨偏', '连翘', '紫苏', '当归', '茯苓', '白芷', '冬青', '紫菀',
        '渔父引', '闲中好', '纥那曲', '拜新月', '梧桐影', '罗贡曲', '醉妆词', '庆先和', '南歌子',
        '忆少年', '荷叶杯', '回波集', '舞马词', '柘枝词', '晴偏好', '凭栏人', '花非花', '摘得新',
        '归字谣', '唉乃曲', '采莲子', '浪淘沙', '杨柳枝', '八拍蛮', '字字变', '十样花', '天净沙',
        '乾荷叶', '喜春来', '踏歌词', '秋风清', '抛球乐', '一叶秋', '忆王孙', '金字经', '古调笑',
        '诉衷情', '西溪子', '天仙子', '风流子', '归字谣', '饮马歌', '相见欢', '定西番', '江城子',
        '思帝乡', '河满子', '风光好', '误桃园', '望梅花', '醉太平', '上行杯', '感恩多', '长命女',
        '怨回纥', '生查子', '蝴蝶儿', '醉公子', '昭君怨', '玉蝴蝶', '归国谣', '女冠子', '恋情深',
        '醉垂鞭', '中兴乐', '醉花间', '点绛唇', '平湖乐', '雪花飞', '沙塞子', '殿前欢', '水仙子',
        '后庭花', '清商怨', '伤春曲', '卜算子', '一落索', '发时光', '谒金门', '柳含烟', '可围芳',
        '天门谣', '忆闷令', '散余霞', '好女儿', '万里春', '锦围春', '太平年', '清平乐', '忆秦娥',
        '西地锦', '相思引', '落梅风', '江亭怨', '喜迁莺', '乌夜啼', '阮郎归', '贺圣朝', '甘草子',
        '画堂春', '三字令', '山花子', '忆余杭', '喜长新', '献天寿', '秋蕊香', '胡捣练', '撼庭秋',
        '洞庭春', '庆春时', '眼儿媚', '人月圆', '喜团圆', '海棠春', '武陵春', '东坡引', '梅弄影',
        '河渎神', '归去来', '惜春郎', '极相思', '双韵子', '凤孤飞', '柳梢青', '醉乡春', '太常引'
    );

    /**
     * 生成词语
     *
     * @example '惜春郎'
     * @return string
     */
    public static function wordCn()
    {
        return static::randomElement(static::$wordListCn);
    }

    /**
     * 生成随机的词语数组
     *
     * @example array('卜算子', '白柠', '西施')
     * @param   integer      $nb             返回的数组长度
     * @param   bool         $asText         如果为真正，作为一个句子字符串返回
     * @return  array|string
     */
    public static function wordsCn($nb = 3, $asText = false)
    {
        $words = array();
        for ($i=0; $i < $nb; $i++) {
            $words []= static::wordCn();
        }

        return $asText ? implode('', $words) : $words;
    }

    /**
     * 生成随机句子
     *
     * @example '兀令法驾导引江城子.'
     * @param   integer $nbWords              这个句子应该包含多少个单词
     * @param   boolean $variableNbWords      如果你想要 $nbWords 准确返回值,请设置为假
     *                                      否则 $nbWords 会有 +/-40% 浮动并且最小值为 1
     * @return string
     */
    public static function sentenceCn($nbWords = 6, $variableNbWords = true)
    {
        if ($nbWords <= 0) {
            return '';
        }
        if ($variableNbWords) {
            $nbWords = self::randomizeNbElements($nbWords);
        }

        $words = static::wordsCn($nbWords);

        return implode($words, '') . '。';
    }

    /**
     * 生成随机的词语数组
     *
     * @example array('诉衷情令恋情深踏歌自己谒金门.', '忆秦娥倒犯残忍暗香底部醉垂鞭.')
     * @param   integer      $nb             这个数组应该包含多少个句子
     * @param   bool         $asText         如果为真，句子作为一个字符串返回
     * @return  array|string
     */
    public static function sentencesCn($nb = 3, $asText = false)
    {
        $sentences = array();
        for ($i=0; $i < $nb; $i++) {
            $sentences []= static::sentenceCn();
        }

        return $asText ? implode('', $sentences) : $sentences;
    }

    /**
     * 生成一个段落
     *
     * @example '玉蝴蝶战队黄鹤洞仙天香星空簇。国香星空无愁可解索酒蕙兰芳。'
     * @param   integer $nbSentences              这个段落应该包含多少个句子
     * @param   boolean $variableNbSentences      如果你想要 $nbSentences 准确返回值,请设置为假,
     *                                          否则 $nbSentences 会有 +/-40% 浮动并且最小值为 1
     * @return  string
     */
    public static function paragraphCn($nbSentences = 3, $variableNbSentences = true)
    {
        if ($nbSentences <= 0) {
            return '';
        }
        if ($variableNbSentences) {
            $nbSentences = self::randomizeNbElements($nbSentences);
        }

        return implode(static::sentencesCn($nbSentences), '');
    }

    /**
     * 生成一个数组的段落
     *
     * @example array( 空运幸福喜春来解红归字谣可围芳, 瑶华孤鸾画堂春相思引, 战队花非花喜春来人月圆)
     * @param   integer      $nb     数组中有多少个段落
     * @param   bool         $asText 如果为真，段落作为一个字符串返回, 隔两个换行。
     * @return  array|string
     */
    public static function paragraphsCn($nb = 3, $asText = false)
    {
        $paragraphs = array();
        for ($i=0; $i < $nb; $i++) {
            $paragraphs []= static::paragraphCn();
        }

        return $asText ? implode("\n", $paragraphs) : $paragraphs;
    }

    /**
     * 生成文本正文
     * 根据 $maxNbChars, 返回一个字符串单词、句子或段落。
     *
     * @example '露华长命女大雨导引三台西施。底部入塞纥那曲殿前欢卜算子慢平湖乐脑残万里春望云涯引。天香极相思庆春时望云涯引兀令想象。'
     * @param   整型 $maxNbChars (最小参数 5)
     * @return  string
     */
    public static function textCn($maxNbChars = 200)
    {
        $text = array();
        if ($maxNbChars < 5) {
            throw new \InvalidArgumentException('text() 生成文本至少要5个字符');
        } elseif ($maxNbChars < 25) {
            // 连接词语
            while (empty($text)) {
                $size = 0;
                while ($size < $maxNbChars) {
                    $word = ($size ? '' : '') . static::wordCn();
                    $text []= $word;
                    $size += strlen($word);
                }
                array_pop($text);
            }
            $text[0][0] = static::toUpper($text[0][0]);
            $text[count($text) - 1] .= '.';
        } elseif ($maxNbChars < 100) {
            // 连接句子
            while (empty($text)) {
                $size = 0;
                while ($size < $maxNbChars) {
                    $sentence = ($size ? '' : '') . static::sentenceCn();
                    $text []= $sentence;
                    $size += strlen($sentence);
                }
                array_pop($text);
            }
        } else {
            // 连接段落
            while (empty($text)) {
                $size = 0;
                while ($size < $maxNbChars) {
                    $paragraph = ($size ? "\n" : '') . static::paragraphCn();
                    $text []= $paragraph;
                    $size += strlen($paragraph);
                }
                array_pop($text);
            }
        }
        return implode($text, '');
    }

    protected static function randomizeNbElements($nbElements)
    {
        return (int) ($nbElements * mt_rand(60, 140) / 100) + 1;
    }
}
