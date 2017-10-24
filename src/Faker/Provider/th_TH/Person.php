<?php

namespace Faker\Provider\th_TH;

class Person extends \Faker\Provider\Person
{
    /**
     * @var array Thai male first name
     * @link http://www.amarinbabyandkids.com/app/childname/
     */
    protected static $firstNameMale = array(
        'กชฐณณ', 'กชนนท์', 'กชมนณัฐ', 'กนกภพ', 'กมลวร', 'กรณ์วรรธน์', 'กรภณ', 'กรภัทร', 'กรฤต', 'กรวรรธ', 'กช', 'กฤตพรต',
        'ปฐมภพ', 'ปณต', 'ปรม', 'ประวรรตน์ภณ', 'ปิฎก', 'ปพน', 'ปองธรรม',
    );

    /**
     * @var array Thai female first name
     * @link http://www.amarinbabyandkids.com/app/childname/
     */
    protected static $firstNameFemale = array(
        'กชพร', 'กมลชลัท', 'กมลธพัชร', 'กมลพร', 'กมลสรวง', 'กรพัชรพร', 'กรภัสสร์', 'กฤตพร', 'กฤศมน',
        'พจนธมน', 'พจนพร', 'พรรธน์ชญมน', 'พรรธน์ภร', 'พรรธนวัลย์', 'พรหมพร', 'พัชรมน',
    );

    /**
     * @var array Thai last name
     * @link https://th.wikipedia.org/wiki/%E0%B8%AB%E0%B8%A1%E0%B8%A7%E0%B8%94%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%88:%E0%B8%95%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B9%E0%B8%A5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static $lastName = array(
        'กลิ่นประทุม‎', 'คำประกอบ‎', 'คุณปลื้ม‎', 'ฉายแสง‎', 'ไชยนันทน์‎', 'ชินวัตร‎', 'ชุณหะวัณ‎', 'เตชะไพบูลย์‎', 'ตันเจริญ‎',
        'เทียนทอง‎', 'เทือกสุบรรณ‎', 'บูรณุปกรณ์‎', 'ปริศนานันทกุล‎', 'ปุณณกันต์‎', 'พร้อมพันธุ์‎', 'มาศดิตถ์‎', 'โล่ห์สุนทร‎', 'วงศ์สวัสดิ์‎',
        'เวชชาชีวะ‎', 'ศิลปอาชา‎', 'ณ เชียงใหม่‎', 'พงษ์พานิช‎', 'สุนทรเวช‎', 'สารสิน‎', 'สุวรรณคีรี‎', 'โอสถานุเคราะห์‎', 'อังกินันทน์‎',
        'อัตถากร‎', 'อับดุลบุตร‎',
    );

    protected static $titleMale = array('นาย');

    protected static $titleFemale = array('นาง', 'นางสาว');
}
