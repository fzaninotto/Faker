<?php 

namespace Faker\Provider\ku_IQ;

class Address extends \Faker\Provider\Address
{
    protected static $streetPrefix = array('شه‌قام');

    protected static $cityPrefix = array('باكوور', 'ڕۆژهه‌ڵات', 'ڕۆژئاوا', 'باشوور', 'ناوه‌ند', );

    /**
     * @link 
     */
    protected static $cityName = array(
        "هەولێر","سلێمانی","ئامەد","کرماشان","سنە","بۆکان","سەقز","ماردین","کەرکووک","زاخۆ","بینگۆل","وان","مەهاباد","ورمێ","باتمان","ئاگری","هەڵەبجە","پیرسووس","حەسیچە","قامیشلۆ","عەفرین","ڕەواندز","چەمچەماڵ","بانە","پێنجوێن","کۆیە","کفری","پاوە","خورماتوو","نەغەدە","پیرانشار","دهۆک"
    );

    protected static $buildingNumber = array('#####', '####', '##');

    protected static $postcode = array('#####', '#####-####');

    /**
     * @link http://ar.wikipedia.org/wiki/%D9%85%D9%84%D8%AD%D9%82:%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D8%A7%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A7%D8%AA_%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A%D8%A9_%D8%AD%D8%B3%D8%A8_%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D8%AD%D8%A9
     */
    protected static $state = array(
        'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    );

    protected static $stateAbbr = array(
       'AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY'
    );
    /**
     * @link 
     */
    protected static $country = array(
        'ژاپۆن','تایوان','فلیپین','ئیندۆنیسیا','سەنگافورە','سریلانکا','پاکستان','ئەفغانستان','تورکمانستان','ئۆزباکستان','عەشق ئاباد','تورکیا','ئەستەنبول','ئەنادۆڵ','سوریا','حەلەب','لوبنان','غەزە','ئەریحا','کوەیت','یەمەن','مۆنتینیگرۆ','قوبروس','بۆسنە','لیبیا','پاریس','ئیسپانیا','لەندەن','ھۆڵەندا','کۆبن ھاگن','فللەندا','نەرویژ','ئایسلەندا','گریلاند','نیویۆرک','مانھاتن','واشنتۆن','فیلادیڤیا','لۆس ئانجلۆس','ھندۆراس','کۆڵۆمبیا','ئیکوادۆر','فەنزەوێلا','بەرازیل','ئەمازۆن','کۆستەریکا','جامایکا','ھایتی','گواتیمالا','چیلی','ئەرژەنتین','ئسیوبیا','مالی','زەریای ناوەڕاست','دەریای رەش','دەریای سور','دەریای سپی ناوەراست','سعودییە','ئینگلتەرا','ئەڵمانیا','ھندستان','عێراق','ئێران','چین','مەنگۆلیا','مەقدۆنیا'
    );

    protected static $cityFormats = array(
        '{{cityPrefix}} {{cityName}}',
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}",
    );

    protected static $secondaryAddressFormats = array('ژماره‌ی هۆتێل. ##', 'باڵه‌خانه‌ی ژماره‌ ##');

    /**
     * @example 
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
}
