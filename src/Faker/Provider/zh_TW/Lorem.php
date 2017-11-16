<?php

namespace Faker\Provider\zh_TW;

use Faker\Provider\Base;

class Lorem extends Base
{
    /**
     * Word list from I Ching.
     *
     * Language: Traditional Chinese
     *
     * @see https://wikipedia.org/wiki/I_Ching
     * @see http://www.chineseclassic.com/content/125
     *
     * @var  array
     */
    protected static $wordList = array(
        '乾為天', '澤天夬', '火天大有', '雷天大壯', '風天小畜', '水天需', '山天大畜', '地天泰', '天澤履', '兌為澤',
        '火澤睽', '雷澤歸妹', '風澤中孚', '水澤節', '山澤損', '地澤臨', '天火同人', '澤火革', '離為火', '雷火豐',
        '風火家人', '水火既濟', '山火賁', '地火明夷', '天雷無妄', '澤雷隨', '火雷噬嗑', '震為雷', '風雷益', '水雷屯',
        '山雷頤', '地雷復', '天風姤', '澤風大過', '火風鼎', '雷風恆', '巽為風', '水風井', '山風蠱', '地風升', '天水訟',
        '澤水困', '火水未濟', '雷水解', '風水渙', '坎為水', '山水蒙', '地水師', '天山遯', '澤山咸', '火山旅', '雷山小過',
        '風山漸', '水山蹇', '艮為山', '地山謙', '天地否', '澤地萃', '火地晉', '雷地豫', '風地觀', '水地比', '山地剝', '坤為地',
        '元亨利貞', '潛龍勿用', '見龍在田', '利見大人', '飛龍在天', '亢龍有悔', '大哉乾元', '萬物資始', '乃統天', '雲行雨施',
        '品物流形', '大明終始', '六位時成', '乘六龍以御天', '乾道變化', '首出庶物', '萬國咸寧', '天行健', '自強不息', '陽在下也',
        '同聲相應', '同氣相求', '水流濕', '火就燥', '雲從龍', '風從虎', '聖人作', '萬物覩', '貴而無位', '高而無民', '賢人在下',
        '陽氣潛藏', '天下文明', '與時偕行', '或躍在淵', '乾道乃革', '成德為行', '天地合其德', '日月合其明，', '四時合其序',
        '鬼神合其吉凶', '先天而天弗違', '後天而奉天時', '亢之為言', '地勢坤', '厚德載物', '履霜', '堅冰至', '履霜堅冰',
        '陰始凝也', '馴致其道', '直方大', '六二之動', '含章可貞', '或從王事', '無成有終', '無咎無譽', '黃裳元吉', '龍戰於野',
        '其血玄黃', '其道窮也', '利永貞', '坤至柔', '動也剛', '至靜而德方', '後得主而有常', '含萬物而化光', '坤道其順乎',
        '承天而時行', '積善之家', '必有餘慶', '義以方外', '天地變化', '草木蕃', '天地閉', '賢人隱', '無咎無譽'
    );

    /**
     * @example 'Lorem'
     * @return string
     */
    public static function word()
    {
        return static::randomElement(static::$wordList);
    }

    /**
     * Generate an array of random words
     *
     * @example array('Lorem', 'ipsum', 'dolor')
     *
     * @param  integer $nb     how many words to return
     * @param  bool    $asText if true the sentences are returned as one string
     *
     * @return array|string
     */
    public static function words($nb = 3, $asText = false)
    {
        $words = array();
        for ($i = 0; $i < $nb; $i++) {
            $words [] = static::word();
        }

        return $asText ? implode('', $words) : $words;
    }

    /**
     * Generate a random sentence
     *
     * @example 'Lorem ipsum dolor sit amet.'
     *
     * @param integer $nbWords          around how many words the sentence should contain
     * @param boolean $variableNbWords  set to false if you want exactly $nbWords returned,
     *                                  otherwise $nbWords may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public static function sentence($nbWords = 6, $variableNbWords = true)
    {
        if ($nbWords <= 0) {
            return '';
        }
        if ($variableNbWords) {
            $nbWords = self::randomizeNbElements($nbWords);
        }

        $words = static::words($nbWords);

        return implode($words, '，');
    }

    /**
     * Generate an array of sentences
     *
     * @example array('Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.')
     *
     * @param  integer $nb     how many sentences to return
     * @param  bool    $asText if true the sentences are returned as one string
     *
     * @return array|string
     */
    public static function sentences($nb = 3, $asText = false)
    {
        $sentences = array();
        for ($i = 0; $i < $nb; $i++) {
            $sentences [] = static::sentence();
        }

        return $asText ? implode('。', $sentences) . '。' : $sentences;
    }

    /**
     * Generate a single paragraph
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param integer $nbSentences          around how many sentences the paragraph should contain
     * @param boolean $variableNbSentences  set to false if you want exactly $nbSentences returned,
     *                                      otherwise $nbSentences may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public static function paragraph($nbSentences = 3, $variableNbSentences = true)
    {
        if ($nbSentences <= 0) {
            return '';
        }
        if ($variableNbSentences) {
            $nbSentences = self::randomizeNbElements($nbSentences);
        }

        return implode(static::sentences($nbSentences), '');
    }

    /**
     * Generate an array of paragraphs
     *
     * @example array($paragraph1, $paragraph2, $paragraph3)
     *
     * @param  integer $nb     how many paragraphs to return
     * @param  bool    $asText if true the paragraphs are returned as one string, separated by two newlines
     *
     * @return array|string
     */
    public static function paragraphs($nb = 3, $asText = false)
    {
        $paragraphs = array();
        for ($i = 0; $i < $nb; $i++) {
            $paragraphs [] = static::paragraph();
        }

        return $asText ? implode("\n\n", $paragraphs) : $paragraphs;
    }

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param  integer $maxNbChars Maximum number of characters the text should contain (minimum 5)
     *
     * @return string
     */
    public static function text($maxNbChars = 200)
    {
        if ($maxNbChars < 5) {
            throw new \InvalidArgumentException('text() can only generate text of at least 5 characters');
        }

        $type = ($maxNbChars < 25) ? 'word' : (($maxNbChars < 100) ? 'sentence' : 'paragraph');

        $text = array();
        while (empty($text)) {
            $size = 0;

            // until $maxNbChars is reached
            while ($size < $maxNbChars) {
                $word   = ($size ? ' ' : '') . static::$type();
                $text[] = $word;

                $size += mb_strlen($word);
            }

            array_pop($text);
        }

        if ($type === 'word') {
            // end sentence with full stop
            $text[count($text) - 1] .= '。';
        }

        return implode($text, '');
    }

    protected static function randomizeNbElements($nbElements)
    {
        return (int)($nbElements * mt_rand(60, 140) / 100) + 1;
    }
}
