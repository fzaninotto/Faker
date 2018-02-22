<?php

namespace Faker\Provider\fa_IR;

/**
 * @author Saeid-Khaleghi
 */
class Color extends \Faker\Provider\Color
{   
    protected static $safeColorNames = array(
		'سیاه', 'آلبالویی', 'سبز', 'لاجوردی', 'زیتونی',
        'بنفش', 'سبز دودی', 'لیمویی', 'آبی', 'نقره‌ای',
        'خاکستری', 'زرد', 'سرخابی', 'فیروزه‌ای', 'سفید'
    );

    /**
    * @link http://www.booloor.com/psychology/colors-psychology/%D9%84%DB%8C%D8%B3%D8%AA-%D8%A7%D8%B3%D8%A7%D9%85%DB%8C-%D8%B1%D9%86%DA%AF-%D9%87%D8%A7-%D8%8C%D8%AC%D8%AF%D9%88%D9%84-%D9%86%D8%A7%D9%85-%D8%B1%D9%86%DA%AF%D9%87%D8%A7.html
    */
    protected static $allColorNames = array(
        'جگری','بژ تیره','حناییِ روشن','قهوه‌ایِ حنایی','کرم نارنجی','قرمز','زرشکی','شرابی','عنابی تند','صورتی',
        'صورتی پر رنگ','شرابی روشن','سرخابی','شفقی','ارغوانی','نارنجی کرم','نارنجی','نارنجی سیر','نارنجی پررنگ',
        'قرمز گوجه‌ای','قرمز-نارنجی','شیری','شیرشکری','لیمویی روشن','هلویی روشن','هلویی','هلویی پررنگ','نخودی',
        'خاکی','زرد','کهربایی باز','ماشی','مغز پسته‌ای','سبز روشن','مغز پسته‌ای پررنگ','مغز پسته‌ای','سبز کمرنگ','سبز کدر',
        'یشمی سیر','یشمی کمرنگ','سبز لجنی','سبز چمنی','خزه‌ای','خزه‌ای پررنگ','شویدی','سبز','سبز ارتشی','زیتونی','زیتونی سیر',
        'سبز آووکادو','سبز دریایی','سبز دریایی تیره','سبز کبریتی روشن','سبز کبریتی تیره','سبز دودی','فیروزه‌ای','آبی آسمانی',
        'فیروزه‌ای کدر','آبی دریایی','یشمی','سبز دریایی روشن','فیروزه‌ای تیره','فیروزه‌ای سیر','آبی کبریتی روشن','بنفش مایل به آبی',
        'آبی کبریتی','آبی آسمانی سیر','آبی روشن','آبی کمرنگ','آبی کدر','نیلی متالیک','آبی لجنی','آبی متالیک روشن','نیلی','فیروزه‌ای فسفری',
        'آبی','آبی سیر','سرمه‌ای','لاجوردی','آبی نفتی','نیلی کمرنگ','بادمجانی روشن','بنفش کدر','بنفش روشن','سرخابی','سرخابی روشن','ارکیده',
        'ارکیده سیر','آبی بنفش','آبی فولادی','آبی-بنفش سیر','بنفش باز','ارکیده بنفش','مخملی','بنفش','آبی دودی','نیلی سیر','کاهی','کاهگلی',
        'کرم','کرم سیر','گندمی','خاکی','برنزه کدر','بادمجانی','هلویی سیر','خردلی','ماشی سیر','بادامی سیر','عسلی پررنگ','کاکائویی','قهوه‌ای متوسط',
        'قهوه‌ای','آلبالویی','سفید','صورتی محو','یشمی محو','سفید نعنائی','آبی محو','نیلی محو','سفید بنفشه','خاکستری محو','بژ باز','هِلی',
        'بژ روشن','پوست پیازی','استخوانی','بژ تیره','کتانی','صورتی مات','بژ','خاکستری مات','نقره‌ای','توسی','خاکستری سیر','خاکستری',
        'دودی','سربی','سربی تیره','لجنی تیره','سیاه'
    );
	
	/**
     * @example '#fa3cc2'
     */
    public static function hexColor()
    {
        return '#' . str_pad(dechex(mt_rand(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public static function safeHexColor()
    {
        $color = str_pad(dechex(mt_rand(0, 255)), 3, '0', STR_PAD_LEFT);

        return '#' . $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2];
    }

    /**
     * @example 'array(0,255,122)'
     */
    public static function rgbColorAsArray()
    {
        $color = static::hexColor();

        return array(
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2))
        );
    }

    /**
     * @example '0,255,122'
     */
    public static function rgbColor()
    {
        return implode(',', static::rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public static function rgbCssColor()
    {
        return 'rgb(' . static::rgbColor() . ')';
    }

    /**
     * @example 'rgba(0,255,122,0.8)'
     */
    public static function rgbaCssColor()
    {
        return 'rgba(' . static::rgbColor() . ',' . static::randomFloat(1, 0, 1) . ')';
    }

    /**
     * @example 'blue'
     */
    public static function safeColorName()
    {
        return static::randomElement(static::$safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public static function colorName()
    {
        return static::randomElement(static::$allColorNames);
    }
}
