<?php

namespace Faker\Provider\zh_CN;

class Lorem extends \Faker\Provider\Lorem
{
    /**
     * @var array $wordList High-frequency single character of Chinese (simplified)
     */
    protected static $wordList = array(
        '的', '一', '是', '在', '不', '了', '有', '和', '人', '这',
        '中', '大', '为', '上', '个', '国', '我', '以', '要', '他',
        '时', '来', '用', '们', '生', '到', '作', '地', '于', '出',
        '就', '分', '对', '成', '会', '可', '主', '发', '年', '动',
        '同', '工', '也', '能', '下', '过', '子', '说', '产', '种',
        '面', '而', '方', '后', '多', '定', '行', '学', '法', '所',
        '民', '得', '经', '十', '三', '之', '进', '着', '等', '部',
        '度', '家', '电', '力', '里', '如', '水', '化', '高', '自',
        '二', '理', '起', '小', '物', '现', '实', '加', '量', '都',
        '两', '体', '制', '机', '当', '使', '点', '从', '业', '本',
        '去', '把', '性', '好', '应', '开', '它', '合', '还', '因',
        '由', '其', '些', '然', '前', '外', '天', '政', '四', '日',
        '那', '社', '义', '事', '平', '形', '相', '全', '表', '间',
        '样', '与', '关', '各', '重', '新', '线', '内', '数', '正',
        '心', '反', '你', '明', '看', '原', '又', '么', '利', '比',
        '或', '但', '质', '气', '第', '向', '道', '命', '此', '变',
        '条', '只', '没', '结', '解', '问', '意', '建', '月', '公',
        '无', '系', '军', '很', '情', '者', '最', '立', '代', '想',
        '已', '通', '并', '提', '直', '题', '党', '程', '展', '五',
        '果', '料', '象', '员', '革', '位', '入', '常', '文', '总',
        '次', '品', '式', '活', '设', '及', '管', '特', '件', '长',
        '求', '老', '头', '基', '资', '边', '流', '路', '级', '少',
        '图', '山', '统', '接', '知', '较', '将', '组', '见', '计',
        '别', '她', '手', '角', '期', '根', '论', '运', '农', '指',
        '几', '九', '区', '强', '放', '决', '西', '被', '干', '做',
        '必', '战', '先', '回', '则', '任', '取', '据', '处', '队',
        '南', '给', '色', '光', '门', '即', '保', '治', '北', '造',
        '百', '规', '热', '领', '七', '海', '口', '东', '导', '器',
        '压', '志', '世', '金', '增', '争', '济', '阶', '油', '思',
        '术', '极', '交', '受', '联', '什', '认', '六', '共', '权',
        '收', '证', '改', '清', '己', '美', '再', '采', '转', '更',
        '单', '风', '切', '打', '白', '教', '速', '花', '带', '安',
        '场', '身', '车', '例', '真', '务', '具', '万', '每', '目',
        '至', '达', '走', '积', '示', '议', '声', '报', '斗', '完',
        '类', '八', '离', '华', '名', '确', '才', '科', '张', '信',
        '马', '节', '话', '米', '整', '空', '元', '况', '今', '集',
        '温', '传', '土', '许', '步', '群', '广', '石', '记', '需',
        '段', '研', '界', '拉', '林', '律', '叫', '且', '究', '观',
        '越', '织', '装', '影', '算', '低', '持', '音', '众', '书',
        '布', '复', '容', '儿', '须', '际', '商', '非', '验', '连',
        '断', '深', '难', '近', '矿', '千', '周', '委', '素', '技',
        '备', '半', '办', '青', '省', '列', '习', '响', '约', '支',
        '般', '史', '感', '劳', '便', '团', '往', '酸', '历', '市',
        '克', '何', '除', '消', '构', '府', '称', '太', '准', '精',
        '值', '号', '率', '族', '维', '划', '选', '标', '写', '存',
        '候', '毛', '亲', '快', '效', '斯', '院', '查', '江', '型',
        '眼', '王', '按', '格', '养', '易', '置', '派', '层', '片',
        '始', '却', '专', '状', '育', '厂', '京', '识', '适', '属',
        '圆', '包', '火', '住', '调', '满', '县', '局', '照', '参',
        '红', '细', '引', '听', '该', '铁', '价', '严', '龙', '飞',
    );

    protected static $encoding = 'UTF-8';

    /**
     * Generate a random single Chinese character
     * @example '的' '一' '是'
     * @return string
     */
    public static function char()
    {
        return static::randomElement(static::$wordList);
    }

    /**
     * Generate an array of random characters
     *
     * @example array('的', '一', '是')
     * @param  integer      $nb     how many characters to return
     * @param  bool         $asText if true the sentences are returned as one string
     * @return array|string
     */
    public static function chars($nb = 3, $asText = false)
    {
        $chars = static::randomElements(static::$wordList, $nb);
        return $asText ? implode('', $chars) : $chars;
    }

    /**
     * Generate a random word
     * A chinese word usually contains 1 - 4 single character.
     *
     * Character numbers : Frequency
     * 1 : 10%
     * 2 : 60%
     * 3 : 10%
     * 4 : 20%
     * The generated words may be unreadable by people.
     *
     * Usage:
     *     Lorem::word();
     *     Lorem::word(2); // generate word contains exact 2 chars
     *
     * @param  integer  $nb  (optional) how many characters the word contains
     * @example '的' '的一' '的一是' '的一是在'
     * @return string
     */
    public static function word()
    {
        $num_args = func_num_args();
        if ($num_args >= 1) {
            $nb = func_get_arg(0);
            if ($nb > 7)
            {
                throw new \InvalidArgumentException('Chinese word must contain no more than 7 characters');
            }
        } else {
            $nb = static::randomizeCharacterNumber();
        }
        return static::chars($nb, true);
    }

    /**
     * Generate an array of random words
     *
     * @example array('的一', '的一是', '的一是在')
     * @param  integer      $nb     how many words to return
     * @param  bool         $asText if true the sentences are returned as one string
     * @return array|string
     */
    public static function words($nb = 3, $asText = false)
    {
        $words = array();
        for ($i=0; $i < $nb; $i++) {
            $words[] = static::word();
        }

        // No space between Chinese words in sentences
        return $asText ? implode('', $words) : $words;
    }

    /**
     * Generate a random sentence
     *
     * @example '的一是在不了有。'
     * @param integer $nbWords         around how many words the sentence should contain
     * @param boolean $variableNbWords set to false if you want exactly $nbWords returned,
     *                                  otherwise $nbWords may vary by +/-40% with a minimum of 1
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

        $sentence = static::words($nbWords, true);
        // Chinese characters do not need ucfirst

        return $sentence . '。';
    }

    /**
     * Generate an array of sentences
     *
     * @example array('的一是在不了有。', '和人这中大。')
     * @param  integer      $nb     how many sentences to return
     * @param  bool         $asText if true the sentences are returned as one string
     * @return array|string
     */
    public static function sentences($nb = 3, $asText = false)
    {
        $sentences = array();
        for ($i=0; $i < $nb; $i++) {
            $sentences[] = static::sentence();
        }

        // No space between sentence in Chinese
        return $asText ? implode('', $sentences) : $sentences;
    }

    /**
     * Generate a single paragraph
     *
     * @example '的一是在不了有。和人这中大。为上个国我以。'
     * @param integer $nbSentences         around how many sentences the paragraph should contain
     * @param boolean $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                      otherwise $nbSentences may vary by +/-40% with a minimum of 1
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

        return static::sentences($nbSentences, true);
    }

    /**
     * Generate an array of paragraphs
     *
     * @example array($paragraph1, $paragraph2, $paragraph3)
     * @param  integer      $nb     how many paragraphs to return
     * @param  bool         $asText if true the paragraphs are returned as one string, separated by two newlines
     * @return array|string
     */
    public static function paragraphs($nb = 3, $asText = false)
    {
        $paragraphs = array();
        for ($i=0; $i < $nb; $i++) {
            $paragraphs []= static::paragraph();
        }

        return $asText ? implode("\n\n", $paragraphs) : $paragraphs;
    }

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @example '的一是。' '的一是在不了有。' '的一是在不了有。和人这中大。为上个国我以。'
     *
     * @param  integer $maxNbChars Maximum number of characters the text should contain (minimum 2).
     *                             CAUTION: 1 Chinese character == 3 bytes (UTF-8),
     *                             the parameter is maximum number of CHARACTERS, not number of BYTES.
     *
     * @return string
     */
    public static function text($maxNbChars = 200)
    {
        if ($maxNbChars < 2) {
            throw new \InvalidArgumentException('text() can only generate text of at least 2 characters');
        }

        $type = ($maxNbChars < 15) ? 'word' : (($maxNbChars < 100) ? 'sentence' : 'paragraph');

        $text = array();
        while (empty($text)) {
            $size = 0;

            // until $maxNbChars is reached
            while ($size < $maxNbChars) {
                $word   = static::$type();
                $text[] = $word;

                $size += static::strlen($word);
            }

            array_pop($text);
        }

        if ($type === 'word') {
            // end sentence with full stop
            $text[count($text) - 1] .= '。';
        }

        return implode('', $text);
    }

    /**
     * Character numbers : Frequency
     * 1 : 10%
     * 2 : 60%
     * 3 : 10%
     * 4 : 20%
     * @return int
     */
    protected static function randomizeCharacterNumber()
    {
        static $characterNumber = array(
            1,
            2, 2, 2, 2, 2, 2,
            3,
            4, 4,
        );
        return $characterNumber[static::numberBetween(0, count($characterNumber) - 1)];
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
            return (int)(self::strlen($str) / 3);
        }
    }
}
