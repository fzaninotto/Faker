<?php

namespace Faker\Provider\hy_AM;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyName}}',                                      // Հոպար
        '{{companyName}} {{companySuffix}}'                     // Հոպար ՍՊԸ
    );

    protected static $urlFormats = array(
        '{{companyName}}',
        '{{companyName}}-{{companySuffix}}',
    );

    protected static $companySuffix = array('ՍՊԸ', 'ԲԲԸ', 'ՓԲԸ', 'Գրուպ');

    protected static $companyName = array(
        'Արմենթել', 'Բիլայն', 'ՎիվաՍել', 'Արմինկո', 'Արմինկոնետ', 'Պլեքսոնիկ',
        'ՍԱՍ', 'Սթար', 'Արմավիա', 'Ֆելո83', 'Տաքսի Մաքսի', 'Վան', 'Սի Քյու Ջի',
        'Օրանժ', 'Եվրոմոթորս', 'Զիգզագ', 'Արայ'
    );

    public function companyUrl()
    {
        $format = static::randomElement(static::$urlFormats);
        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companyName()
    {
        return static::randomElement(static::$companyName);
    }
}
