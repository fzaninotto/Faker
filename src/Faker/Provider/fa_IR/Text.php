<?php

namespace Faker\Provider\fa_IR;

class Text extends \Faker\Provider\Text
{
    /**
     * generates text string in arabic
     *
     * @example 'از تاریخ‌الشعرا را بکوبند روی نبش دیوار کوچه‌شان. تابلوی مدرسه.'
     * @param  integer                   $maxNbChars
     * @param  integer                   $indexSize
     * @return string
     * @throws \InvalidArgumentException
     */
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        if ($maxNbChars < 10) {
            throw new \InvalidArgumentException('maxNbChars must be at least 10');
        }

        if ($indexSize < 1) {
            throw new \InvalidArgumentException('indexSize must be at least 1');
        }

        if ($indexSize > 5) {
            throw new \InvalidArgumentException('indexSize must be at most 5');
        }

        $words = $this->getConsecutiveWords($indexSize);
        $result = array();
        $resultLength = 0;
        // take a random starting point
        $next = static::randomKey($words);
        while ($resultLength < $maxNbChars && isset($words[$next])) {
            // fetch a random word to append
            $word = static::randomElement($words[$next]);

            // calculate next index
            $currentWords = explode(' ', $next);

            $currentWords[] = $word;
            array_shift($currentWords);
            $next = implode(' ', $currentWords);

            if ($resultLength == 0 && !preg_match('/^[\x{0600}-\x{06FF}]/u', $word)) {
                continue;
            }
            // append the element
            $result[] = $word;
            $resultLength += strlen($word) + 1;
        }

        // remove the element that caused the text to overflow
        array_pop($result);

        // build result
        $result = implode(' ', $result);

        return $result.'.';
    }

    /**
     * License: Public Domain
     *
     * Title: نمونه رباعیات
     * Author: مشاهده پروانه
     * Language: Persian
     *
     * @see https://fa.wikiquote.org/wiki/%D8%A7%D8%A8%D9%88%D8%B3%D8%B9%DB%8C%D8%AF_%D8%A7%D8%A8%D9%88%D8%A7%D9%84%D8%AE%DB%8C%D8%B1
     * @var string
     */
    protected static $baseText = <<<'EOT'

    همه جمال تو بینم چو دیده باز کنم	     	همه تنم دل گردد که با تو راز کنم
    حرام دارم با دیگران سخن گفتن	     	کجا حدیث تو آمد سخن دراز کنم

    من بی تو دمی قرار نتوانم کرد	     	احسان ترا شمار نتوانم کرد
    گر برسر من زبان شود هر مویی	     	یک شکر تو از هزار نتوانم کرد

    از واقعه‌ای ترا خبر خواهم کرد	     	و آنرا به دو حرف مختصر خواهم کرد
    با عشق تو در خاک نهان خواهم شد	     	با مهر تو سر ز خاک بر خواهم کرد

    افسوس که ما عاقبت اندیش نه‌ایم	     	داریم لباس فقر و درویش نه‌ایم
    این کبر و منی جمله از آنست که ما	     	قانع به نصیب و قسمت خویش نه‌ایم

    گفتم: چشمم، گفت: به راهش می‌دار	     	گفتم: جگرم، گفت: پر آهش می‌دار
    گفتم که: دلم، گفت: چه داری در دل	     	گفتم: غم تو، گفت: نگاهش می‌دار


    دیشب که دلم ز تاب هجران می‌سوخت	     	اشکم همه در دیدهٔ گریان می‌سوخت
    می‌سوختم آن چنان که غیر از دل تو	     	بر من دل کافر و مسلمان می‌سوخت.


    گفتی که منم ماه نشابور سرا	     	ای ماه نشابور، نشابور ترا
    آن تو ترا و آن ما نیز ترا	     	با ما بنگویی که خصومت ز چرا

    آنرا که قضا ز خیل عشاق نوشت	     	آزاد ز مسجدست و فارغ ز کنشت
    دیوانهٔ عشق را چه هجران چه وصال	     	از خویش گذشته را چه دوزخ چه بهشت

EOT;
}
