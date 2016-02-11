<?php

namespace Faker\Provider\th_TH;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        'บริษัท {{lastName}} จำกัด',
        'บริษัท {{firstName}} จำกัด',
        'บริษัท {{femaleNickname}}และ{{maleNickname}} จำกัด',
        'บริษัท {{firstName}} จำกัด (มหาชน)',
        'บริษัท {{lastName}} จำกัด (มหาชน)',
        'ห้างหุ้นส่วนจำกัด {{firstName}}และเพื่อน',
        'ห้างหุ้นส่วนจำกัด {{lastName}}',
    );

    protected static $slogans = array(
        array(
            'เชื่อมต่อ', 'สรรสร้าง', 'เชื่อมโยง', 'ส่งเสริม', 'เปลี่ยน', 'ประสาน', 'พัฒนา',
        ),
        array(
            'ตลาด', 'อุตสาหกรรม', 'โครงสร้าง', 'เทคโนโลยี', 'เนื้อหา', 'สถาปัตยกรรม', 'ระบบ', 'ความคิด', 'ผู้ใช้', 'เครือข่าย', 'ประสบการณ์',
        ),
        array(
            'ที่แข็งแกร่ง', 'ที่มีคุณค่า', 'ที่สร้างสรรค์', '24 ชั่วโมง', 'อย่างสากล', 'สู่ผู้บริโภค', 'ที่น่าดึงดูด', 'อย่างมีประสิทธิภาพ', 'อย่างไร้รอยต่อ', 'อย่างไร้ที่ติ', 'ที่ปรับตัวได้', 'คุณภาพสากล', 'พร้อมใช้งาน', 'ที่มีความหมาย', 'ที่โปร่งใส', 'เพื่อการเปลี่ยนแปลง', 'สมัยใหม่', 'รูปแบบใหม่',
        ),
    );

    /**
     * @example 'เชื่อมต่อตลาดที่แข็งแกร่ง'
     */
    public function slogan()
    {
        $result = array();

        foreach (static::$slogans as &$slogan) {
            $result[] = static::randomElement($slogan);
        }

        return implode($result);
    }
}
