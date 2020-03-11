<?php

namespace Faker\Provider\fa_IR;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    );

    protected static $jobTitleFormat = array(
    
            'طراح وب','وبمستر','کارشناس پایگاه داده ','تحلیل گر و طراح نرم افزار',
            'برنامه نویس وب','برنامه نویس سی شارپ','برنامه نویس php ','برنامه نویس پایتون',
            'متخصص امنیت اطلاعات','مهندس سخت افزار','انیماتور','مدیر مالی',
            'حسابدار','مدیر فروش','مدیر محصول','مدیر روابط عمومی',
            'مهندس برق','مکانیک','مهندس عمران','مهندس صنایع',
            'مهندس راه آهن','مهندس معدن','مهندس مواد','مهندس نساجی',
            'نویسنده','مترجم','کتابدار','داروساز',
            'کارشناس فروش تلفنی','مشاور تحصیلی','کارشناس فروش اینترنتی','کارشناس شبکه',
            'کارمند فروش','منشی','گرافیست','کمک انباردار',
            'مدیر تامین','کارشناس برنامه ریزی تولید','وکیل','راننده',
            
    );
    
    protected static $companyPrefix = array(
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    );

    protected static $companyField = array(
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد',
       'حقوقی'
    );

    protected static $contract = array(
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی', 'دورکاری',
    );

    /**
     * @example 'شرکت'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::$companyField);
    }

    /**
    * @example 'تمام وقت'
    * @return string
    */
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
