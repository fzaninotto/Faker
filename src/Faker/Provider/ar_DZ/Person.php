<?php

namespace Faker\Provider\ar_DZ;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameMale = [
    'محمد',
    'كريم',
    'أمين',
    'ياسين',
    'أحمد',
    'علي',
    'إلياس',
    'مهدي',
    'نسيم',
    'جمال',
    'عمر',
    'كمال',
    'وليد',
    'حكيم',
    'زكي',
    'حمزة',
    'يوسف',
    'رشيد',
    'إبراهيم',
    'سمير',
    'أنيس',
    'ريان',
    'رابح',
    'عبد القادر',
    'وسيم',
    'نذير',
    'هشام',
    'فارس',
    'منير',
    'فاتح',
    'يونس',
    'سليم',
    'مراد',
    'إسلام',
    'حسين',
    'صلاح',
    'مالك',
    'آدم',
    'فريد',
    'ماسينيسا',
    'عزيز',
    'مصطفى',
    'حميد',
    'مولود',
    'إسماعيل',
    'أيمن',
    'أنيس',
    'سفيان',
    'نبيل',
    'زكرياء',
    'فاروق',
    'طه',
    'أكرم',
    'فيصل',
    'غيلاس',
    'حليم',
    'عبد القادر',
    'لطفي',
    'فوزي',
    'عباس',
    'عماد',
    'أمير',
    'محفوظ',
    'يوسف',
    'خالد',
    'عيسى',
    'موسى',
    'إلياس',
    'عادل',
    'هشام',
    'زهير',
    'مجيد',
    'أسامة',
    'ناصر',
    'عاشور',
    'يوبا',
    'عبد الحق',
    'أيوب',

    ];

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameFemale = [
    'ياسمين',
    'أمينة',
    'إمان',
    'سارة',
    'إناس',
    'مريم',
    'منال',
    'لينة',
    'أمال',
    'صوفية',
    'أميرة',
    'صابرينا',
    'آية',
    'كاميليا',
    'نور',
    'ليندا',
    'ماريا',
    'فريال',
    'ريم',
    'شاهيناز',
    'سالمة',
    'إكرام',
    'ليندا',
    'ليليا',
    'هبة',
    'نسرين',
    'رانيا',
    'بشرى',
    'نينا',
    'ناسيمة',
    'نصيرة',
    'خديجة',
    'فلة',
    'صافية',
    'هناء',
    'نوال',
    'ياسمينة',
    'أسماء',
    'فرح',
    'كنزة',
    'هاجر',
    'ناريمان',
    'حياة',
    'ليلى',
    'سعاد',
    'إلهام',
    'لامية',
    'وفاء',
    'صبرين',
    'فتيحة',
    'فاطمة',
    'شريفة',
    'سميرة',
    'ريم',
    'أنسية',
    'جميلة',
    'كهينة',
    'ريم',
    'هند',
    'زكية',
    'دنيا',
    'بتول',
    'يسرى',
    'ليليا',

    ];

    protected static $lastName = [
    'سعداوي',
    'رحماني',
    ];

    protected static $titleMale = ['السيد', 'الأستاذ', 'الدكتور', 'المهندس'];
    protected static $titleFemale = ['السيدة', 'الآنسة', 'الدكتورة', 'المهندسة'];
    private static $prefix = ['أ.', 'د.'];

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
