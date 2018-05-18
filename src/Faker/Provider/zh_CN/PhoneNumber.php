<?php

namespace Faker\Provider\zh_CN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
        134, 135, 136, 137, 138, 139, 150, 151, 152, 157, 158, 159, 1705, 178, 182, 183, 184, 187, 188, 198, // China Mobile
        130, 131, 132, 155, 156, 166, 1707, 1708, 1709, 1718, 1719, 176, 185, 186, // China Unicom
        133, 153, 1700, 1701, 173, 1740, 1741, 177, 180, 181, 189, 199, // China Telecom
        170, 171, // virtual operators
        // 141, 144, 145, 146, 147, 148, 149 are used as special number sections of the Internet of Things. All numbers in these sections have a 13 digits. Therefore, They don't apply to the following rule.
    );

    protected static $formats = array('###########');

    public function phoneNumber()
    {
        $operator = static::randomElement(static::$operators);
        $format = static::randomElement(static::$formats);

        return $operator . static::numerify(substr($format, 0, strlen($format) - strlen($operator)));
    }
}
