<?php

namespace Faker\Provider\ar_DZ;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}}',
        '{{firstNameMale}} {{prefix}}{{lastName}}',
        '{{firstNameMale}} {{prefix}}{{firstNameMale}}',
        '{{prefix}}{{lastName}} {{firstNameMale}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{firstNameFemale}} {{prefix}}{{lastName}}',
        '{{firstNameFemale}} {{prefix}}{{firstNameMale}}',
        '{{prefix}}{{lastName}} {{firstNameFemale}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleMale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameMale = array(
        'آدم', 'أحمد', 'أسامة', 'أكرم', 'أمير', 'أمين', 'أنيس', 'أيمن',
        'أيوب', 'إبراهيم', 'إسلام', 'إسماعيل', 'إلياس', 'جمال', 'حسين', 'حكيم',
        'حليم', 'حمزة', 'حميد', 'خالد', 'رابح', 'رشيد', 'ريان', 'زكرياء', 'زكي',
        'زهير', 'سفيان', 'سليم', 'سمير', 'صلاح', 'طه', 'عادل', 'عاشور', 'عباس',
        'عبد الحق', 'عبد القادر', 'عزيز', 'علي', 'عماد', 'عمر', 'عيسى', 'غيلاس',
        'فاتح', 'فارس', 'فاروق', 'فريد', 'فوزي', 'فيصل', 'كريم', 'كمال', 'لطفي',
        'ماسينيسا', 'مالك', 'مجيد', 'محفوظ', 'محمد', 'مراد', 'مصطفى', 'منير', 'مهدي',
        'موسى', 'مولود', 'ناصر', 'نبيل', 'نذير', 'نسيم', 'هشام', 'وسيم', 'وليد',
        'ياسين', 'يوبا', 'يوسف', 'يونس',
    );

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameFemale = array(
        'آية', 'أسماء', 'أمال', 'أميرة', 'أمينة',
        'أنسية', 'إكرام', 'إلهام', 'إمان', 'إناس', 'بتول', 'بشرى',
        'جميلة', 'حياة', 'خديجة', 'دنيا', 'رانيا', 'ريم', 'زكية', 'سارة',
        'سالمة', 'سعاد', 'سميرة', 'شاهيناز', 'شريفة', 'صابرينا', 'صافية',
        'صبرين', 'صوفية', 'فاطمة', 'فتيحة', 'فرح', 'فريال', 'فلة', 'كاميليا',
        'كنزة', 'كهينة', 'لامية', 'ليلى', 'ليليا', 'لينة', 'ليندا', 'ماريا',
        'مريم', 'منال', 'ناريمان', 'ناسيمة', 'نسرين', 'نصيرة', 'نوال', 'نور',
        'نينا', 'هاجر', 'هبة', 'هناء', 'هند', 'وفاء', 'ياسمين', 'ياسمينة', 'يسرى',
    );

    protected static $lastName = array(
        'العقبي', 'برادعي', 'بليدي', 'جلول', 'دربالي', 'ربحي', 'رحماني',
        'زروقي', 'سبخاوي', 'شاوي', 'شرفاوي', 'صحراوي', 'طويري', 'عرباوي',
        'عزوز', 'عمارة', 'قاسمي', 'قبايلي', 'لعموري', 'مبروكي', 'مختاري',
        'مرابط', 'معمر', 'مغراوي', 'نويري', 'يخلف',
    );

    protected static $titleMale = array('السيد', 'الأستاذ', 'الدكتور', 'المهندس');
    protected static $titleFemale = array('السيدة', 'الآنسة', 'الدكتورة', 'المهندسة');
    private static $prefix = array('أ.', 'د.', 'أ.د', 'م.');

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
