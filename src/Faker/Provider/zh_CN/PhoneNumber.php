<?php

namespace Faker\Provider\zh_CN;

/**
 * According to the Telecommunications Network Numbering Plan (2017 Edition)[1] issued by the Ministry of Industry and
 * Information Technology of the People's Republic of China, mobile communication networks are divided into two
 * categories: public mobile communication networks and Internet of Things, with length of 11 and 13 respectively.
 * Not only the number length is different, but the Internet of Things number cannot be used for voice communication.
 * Therefore, the methods and attributes related to the Internet of Things number in this class are extracted separately.
 *
 * Source:
 * [1]: http://www.miit.gov.cn/n1146295/n1652858/n1652930/n3757020/c5623267/content.html
 * [2]: http://www.miit.gov.cn/n1146285/n1146352/n3054355/n3057709/n3057716/c7583426/content.html
 */
class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
        1340, 1341, 1342, 1343, 1344, 1345, 1346, 1347, 1348, 1349, 135, 136, 137, 138, 139, 147, 148, 150, 151, 152, 157, 158, 159, 172, 178, 182, 183, 184, 187, 188, 195, 197, 198, // China Mobile
        130, 131, 132, 145, 146, 155, 156, 166, 175, 176, 185, 186, 196, // China Unicom
        133, 1349, 149, 153, 173, 17400, 17401, 17402, 17403, 17404, 17405, 177, 180, 181, 189, 190, 191, 193, 199, // China Telecom
        192, // China Broadcast Network
        162, 165, 167, 170, 171, // virtual operators
        17406, 17407, 17408, 17409, 17410, 17411, 17412, 1749 // others
    );

    /**
     * @var array
     */
    protected static $operatorsIoT = array(
        140, 141, 142, 143, 144
    );

    protected static $formats = array('###########');

    protected static $formatsIoT = array('#############');

    public function phoneNumber()
    {
        $operator = static::randomElement(static::$operators);
        $format = static::randomElement(static::$formats);

        return $operator . static::numerify(substr($format, 0, strlen($format) - strlen($operator)));
    }

    public function phoneNumberIoT()
    {
        $operator = static::randomElement(static::$operatorsIoT);
        $format = static::randomElement(static::$formatsIoT);

        return $operator . static::numerify(substr($format, 0, strlen($format) - strlen($operator)));
    }
}
