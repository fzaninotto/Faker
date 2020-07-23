<?php

namespace Faker\Provider\uz_UZ;

class Company extends \Faker\Provider\Company
{
    protected static $companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static $companyPrefixes = array(
        'MCHJ', 'DUK', 'DK', 'XS', 'OK', 'YATT', 'OTT'
    );

    protected static $companyNameSuffixes = array(
        'Banki', 'Plus', 'Lyuks', 'Lizing', 'Soft'
    );

    protected static $companyElements = array(' ');

    protected static $catchPhraseWords = array(
        array(
            'Adaptiv', 'Qo\'shimcha', 'Yaxshilash', 'Avtomatik', 'Biznesga yo\'naltirilgan', 'Markazlashgan', 'Virtual'
        ),
        array(
            '24soat', '24/7', '3-avlov', '4-avlov', '5-avlov', '6-avlov',
        ),
        array(
            'imkoniyatlar', 'ochish', 'adapter', 'algoritm'
        ),
    );

    protected static $jobTitleFormat = array(
	    'Direktor', 'Bosh muhandis', 'Bosh hisobchi', 'Bosh hisobchi o‘rinbosari',
	    '1-toifali iqtisodchi', 'Xodimlar bo‘yicha yetakchi mutaxassis',
	    'Huquqiy maslahatchi', 'Hisobchi-etakchi mutaxassis', 'Saqlash bo‘limi boshlig‘i',
	    'Saqlash bo‘limi boshlig‘i o‘rinbosari', 'Tovarshunos-inspektor',
	    'Saqlash bo‘limi boshlig‘i o‘rinbosari (sovutish sig‘imi)', 'Muhandis-texnolog',
	    'Maxsus qism inspektori', 'Axborot texnologiyalari bo‘yicha mutaxassis',
	    'Transportlarni ta’mirlash mexanigi', 'Fuqaro muhofazasi muhandisi-', 'mutaxassis',
	    'Yuk mashina haydovchisi', 'Ta’mirlovchi chilangar', 'Elektr va gaz payvandlovchisi',
	    'Elektrokara haydovchisi', 'Laboratoriya mudiri', 'Laborant', 'Hamshira', 'Energetik',
	    'Rele himoyasi va avtomatik uskunalarni ta’mirlash bo‘yicha elektr ustasi',
	    'Elektr montajchi chilangar', 'Dizel generatori mashinisti',
	    'Harbiylashtirilgan qo‘riqlash bo‘limi boshlig‘i', 'Qorovullar boshlig‘i',
	    'Qorovullar boshlig‘i', 'Qorovullar boshlig‘i o‘rinbosari', 'Qo‘riqchi',
	    'O‘t o‘chirish mashinasi haydovchisi', 'Yuklash-tushirish ishlari ustasi', 'Yuk tashuvchi',
	    'Qurilish va montaj ishlari ustasi', 'Binolarni ta’mirlash va xizmat ko‘rsatish ishchisi',
	    'Sovutish va kompressor qurilmalari mashinisti', 'Sovutish qurilmalarini ta’mirlash bo‘yicha chilangar',
	    'Sovutish qurilmalari mashinisti', 'Kassir', 'Kotiba-ish yurituvchi', 'Kladovshik', 'Texnik laborant',
	    'Ruxsatnomalar byuro navbatchisi', 'Ta’minot bo‘yicha agent', 'Dispetcherlik xizmati operatori',
	    'Arxivarius', 'Yengil avtomobil haydovchisi', 'Nazoratdan o‘tkazish punkti nazoratchisi', 'Bino farroshi',
    );

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }

    /**
     * @example 'ООО АсбестЦементМонтаж'
     */
    public function company()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::$companyNameSuffixes);
    }

    public static function inn($area_code = "")
    {
        if ($area_code === "" || intval($area_code) == 0) {
            //Simple generation code for areas in Russian without check for valid
            $area_code = static::numberBetween(1, 91);
        } else {
            $area_code = intval($area_code);
        }
        $area_code = str_pad($area_code, 2, '0', STR_PAD_LEFT);
        $inn_base =  $area_code . static::numerify('#######');
        return $inn_base . \Faker\Calculator\Inn::checksum($inn_base);
    }

    public static function kpp($inn = "")
    {
        if ($inn == "" || strlen($inn) < 4) {
            $inn = static::inn();
        }
        return substr($inn, 0, 4) . "01001";
    }
}
