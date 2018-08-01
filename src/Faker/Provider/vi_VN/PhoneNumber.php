<?php

namespace Faker\Provider\vi_VN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $areaCodes = array(
        // Updated new area code on 17/06/2018
        // http://vietnamnet.vn/vn/cong-nghe/vien-thong/danh-sach-ma-vung-dien-thoai-moi-cac-tinh-thanh-355763.html
        296,254, 274, 271, 252, 256,
        291, 209, 204, 222, 275, 206,
        290, 292, 236, 262, 261, 215,
        251, 277, 269, 226, 24, 239,
        221, 220, 225, 293, 28, 258,
        297, 260, 213, 272, 214, 263,
        205, 228, 238, 229, 259, 257,
        232, 235, 255, 203, 233, 299,
        212, 237, 227, 208, 234, 273,
        294, 207, 276, 270, 216,
        
        // Mobile
        86, 96, 97, 98, 162, 163, 164, 165, 166, 167, 168, 169, // Viettel
        91, 94, 123, 124, 125, 127, 129, // Vinaphone
        // Mobifone --> The network has ceased to exist (fewer users are also considered non-existent)
        92, 186, 188, // Vietnamobile
        // Gmobile --> The network has ceased to exist (fewer users are also considered non-existent)
        // Sfone --> The network has ceased to exist (fewer users are also considered non-existent)
        
        // !!! Important note: As of 15/09/2018, all 11 digits in Vietnam have returned 10 digits
        // https://quantrimang.com/danh-sach-dau-so-cac-mang-di-dong-o-viet-nam-133203
    );

    protected static $formats = array(
        '7' => array(
            '0[a] ### ####',
            '(0[a]) ### ####',
            '0[a]-###-####',
            '(0[a])###-####',
            '84-[a]-###-####',
            '(84)([a])###-####',
            '+84-[a]-###-####',
        ),
        '8' => array(
            '0[a] #### ####',
            '(0[a]) #### ####',
            '0[a]-####-####',
            '(0[a])####-####',
            '84-[a]-####-####',
            '(84)([a])####-####',
            '+84-[a]-####-####',
        ),
    );

    public function phoneNumber()
    {
        $areaCode = static::randomElement(static::$areaCodes);
        $areaCodeLength = strlen($areaCode);
        $digits = 7;

        if ($areaCodeLength < 2) {
            $digits = 8;
        }

        return static::numerify(str_replace('[a]', $areaCode, static::randomElement(static::$formats[$digits])));
    }
}
