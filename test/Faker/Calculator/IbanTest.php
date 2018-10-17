<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Iban;
use PHPUnit\Framework\TestCase;

class IbanTest extends TestCase
{

    public function checksumProvider()
    {
        return array(
            array('AL47212110090000000235698741',           '47'),
            array('AD1200012030200359100100',               '12'),
            array('AT611904300234573201',                   '61'),
            array('AZ21NABZ00000000137010001944',           '21'),
            array('BH67BMAG00001299123456',                 '67'),
            array('BE68539007547034',                       '68'),
            array('BA391290079401028494',                   '39'),
            array('BR7724891749412660603618210F3',          '77'),
            array('BG80BNBG96611020345678',                 '80'),
            array('CR0515202001026284066',                  '05'),
            array('HR1210010051863000160',                  '12'),
            array('CY17002001280000001200527600',           '17'),
            array('CZ6508000000192000145399',               '65'),
            array('DK5000400440116243',                     '50'),
            array('DO28BAGR00000001212453611324',           '28'),
            array('EE382200221020145685',                   '38'),
            array('FO6264600001631634',                     '62'),
            array('FI2112345600000785',                     '21'),
            array('FR1420041010050500013M02606',            '14'),
            array('GE29NB0000000101904917',                 '29'),
            array('DE89370400440532013000',                 '89'),
            array('GI75NWBK000000007099453',                '75'),
            array('GR1601101250000000012300695',            '16'),
            array('GL8964710001000206',                     '89'),
            array('GT82TRAJ01020000001210029690',           '82'),
            array('HU42117730161111101800000000',           '42'),
            array('IS140159260076545510730339',             '14'),
            array('IE29AIBK93115212345678',                 '29'),
            array('IL620108000000099999999',                '62'),
            array('IT60X0542811101000000123456',            '60'),
            array('KZ86125KZT5004100100',                   '86'),
            array('KW81CBKU0000000000001234560101',         '81'),
            array('LV80BANK0000435195001',                  '80'),
            array('LB62099900000001001901229114',           '62'),
            array('LI21088100002324013AA',                  '21'),
            array('LT121000011101001000',                   '12'),
            array('LU280019400644750000',                   '28'),
            array('MK07250120000058984',                    '07'),
            array('MT84MALT011000012345MTLCAST001S',        '84'),
            array('MR1300020001010000123456753',            '13'),
            array('MU17BOMM0101101030300200000MUR',         '17'),
            array('MD24AG000225100013104168',               '24'),
            array('MC5811222000010123456789030',            '58'),
            array('ME25505000012345678951',                 '25'),
            array('NL91ABNA0417164300',                     '91'),
            array('NO9386011117947',                        '93'),
            array('PK36SCBL0000001123456702',               '36'),
            array('PL61109010140000071219812874',           '61'),
            array('PS92PALS000000000400123456702',          '92'),
            array('PT50000201231234567890154',              '50'),
            array('QA58DOHB00001234567890ABCDEFG',          '58'),
            array('RO49AAAA1B31007593840000',               '49'),
            array('SM86U0322509800000000270100',            '86'),
            array('SA0380000000608010167519',               '03'),
            array('RS35260005601001611379',                 '35'),
            array('SK3112000000198742637541',               '31'),
            array('SI56263300012039086',                    '56'),
            array('ES9121000418450200051332',               '91'),
            array('SE4550000000058398257466',               '45'),
            array('CH9300762011623852957',                  '93'),
            array('TN5910006035183598478831',               '59'),
            array('TR330006100519786457841326',             '33'),
            array('AE070331234567890123456',                '07'),
            array('GB29NWBK60161331926819',                 '29'),
            array('VG96VPVG0000012345678901',               '96'),
            array('YY24KIHB12476423125915947930915268',     '24'),
            array('ZZ25VLQT382332233206588011313776421',    '25'),
        );
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum($iban, $checksum)
    {
        $this->assertEquals($checksum, Iban::checksum($iban), $iban);
    }

    public function validatorProvider()
    {
        return array(
            array('AL47212110090000000235698741',           true),
            array('AD1200012030200359100100',               true),
            array('AT611904300234573201',                   true),
            array('AZ21NABZ00000000137010001944',           true),
            array('BH67BMAG00001299123456',                 true),
            array('BE68539007547034',                       true),
            array('BA391290079401028494',                   true),
            array('BR7724891749412660603618210F3',          true),
            array('BG80BNBG96611020345678',                 true),
            array('CR0515202001026284066',                  true),
            array('HR1210010051863000160',                  true),
            array('CY17002001280000001200527600',           true),
            array('CZ6508000000192000145399',               true),
            array('DK5000400440116243',                     true),
            array('DO28BAGR00000001212453611324',           true),
            array('EE382200221020145685',                   true),
            array('FO6264600001631634',                     true),
            array('FI2112345600000785',                     true),
            array('FR1420041010050500013M02606',            true),
            array('GE29NB0000000101904917',                 true),
            array('DE89370400440532013000',                 true),
            array('GI75NWBK000000007099453',                true),
            array('GR1601101250000000012300695',            true),
            array('GL8964710001000206',                     true),
            array('GT82TRAJ01020000001210029690',           true),
            array('HU42117730161111101800000000',           true),
            array('IS140159260076545510730339',             true),
            array('IE29AIBK93115212345678',                 true),
            array('IL620108000000099999999',                true),
            array('IT60X0542811101000000123456',            true),
            array('KZ86125KZT5004100100',                   true),
            array('KW81CBKU0000000000001234560101',         true),
            array('LV80BANK0000435195001',                  true),
            array('LB62099900000001001901229114',           true),
            array('LI21088100002324013AA',                  true),
            array('LT121000011101001000',                   true),
            array('LU280019400644750000',                   true),
            array('MK07250120000058984',                    true),
            array('MT84MALT011000012345MTLCAST001S',        true),
            array('MR1300020001010000123456753',            true),
            array('MU17BOMM0101101030300200000MUR',         true),
            array('MD24AG000225100013104168',               true),
            array('MC5811222000010123456789030',            true),
            array('ME25505000012345678951',                 true),
            array('NL91ABNA0417164300',                     true),
            array('NO9386011117947',                        true),
            array('PK36SCBL0000001123456702',               true),
            array('PL61109010140000071219812874',           true),
            array('PS92PALS000000000400123456702',          true),
            array('PT50000201231234567890154',              true),
            array('QA58DOHB00001234567890ABCDEFG',          true),
            array('RO49AAAA1B31007593840000',               true),
            array('SM86U0322509800000000270100',            true),
            array('SA0380000000608010167519',               true),
            array('RS35260005601001611379',                 true),
            array('SK3112000000198742637541',               true),
            array('SI56263300012039086',                    true),
            array('ES9121000418450200051332',               true),
            array('SE4550000000058398257466',               true),
            array('CH9300762011623852957',                  true),
            array('TN5910006035183598478831',               true),
            array('TR330006100519786457841326',             true),
            array('AE070331234567890123456',                true),
            array('GB29NWBK60161331926819',                 true),
            array('VG96VPVG0000012345678901',               true),
            array('YY24KIHB12476423125915947930915268',     true),
            array('ZZ25VLQT382332233206588011313776421',    true),


            array('AL4721211009000000023569874',           false),
            array('AD120001203020035910010',               false),
            array('AT61190430023457320',                   false),
            array('AZ21NABZ0000000013701000194',           false),
            array('BH67BMAG0000129912345',                 false),
            array('BE6853900754703',                       false),
            array('BA39129007940102849',                   false),
            array('BR7724891749412660603618210F',          false),
            array('BG80BNBG9661102034567',                 false),
            array('CR051520200102628406',                  false),
            array('HR121001005186300016',                  false),
            array('CY1700200128000000120052760',           false),
            array('CZ650800000019200014539',               false),
            array('DK500040044011624',                     false),
            array('DO28BAGR0000000121245361132',           false),
            array('EE38220022102014568',                   false),
            array('FO626460000163163',                     false),
            array('FI2112345600000780',                    false),
            array('FR1420041010050500013M0260',            false),
            array('GE29NB000000010190491',                 false),
            array('DE8937040044053201300',                 false),
            array('GI75NWBK00000000709945',                false),
            array('GR160110125000000001230069',            false),
            array('GL896471000100020',                     false),
            array('GT82TRAJ0102000000121002969',           false),
            array('HU4211773016111110180000000',           false),
            array('IS14015926007654551073033',             false),
            array('IE29AIBK9311521234567',                 false),
            array('IL62010800000009999999',                false),
            array('IT60X054281110100000012345',            false),
            array('KZ86125KZT500410010',                   false),
            array('KW81CBKU000000000000123456010',         false),
            array('LV80BANK000043519500',                  false),
            array('LB6209990000000100190122911',           false),
            array('LI21088100002324013A',                  false),
            array('LT12100001110100100',                   false),
            array('LU28001940064475000',                   false),
            array('MK0725012000005898',                    false),
            array('MT84MALT011000012345MTLCAST001',        false),
            array('MR130002000101000012345675',            false),
            array('MU17BOMM0101101030300200000MU',         false),
            array('MD24AG00022510001310416',               false),
            array('MC58112220000101234567890',             false),
            array('ME2550500001234567895',                 false),
            array('NL91ABNA041716430',                     false),
            array('NO938601111794',                        false),
            array('PK36SCBL000000112345670',               false),
            array('PL6110901014000007121981287',           false),
            array('PS92PALS00000000040012345670',          false),
            array('PT5000020123123456789015',              false),
            array('QA58DOHB00001234567890ABCDEF',          false),
            array('RO49AAAA1B3100759384000',               false),
            array('SM86U032250980000000027010',            false),
            array('SA038000000060801016751',               false),
            array('RS3526000560100161137',                 false),
            array('SK311200000019874263754',               false),
            array('SI5626330001203908',                    false),
            array('ES912100041845020005133',               false),
            array('SE455000000005839825746',               false),
            array('CH930076201162385295',                  false),
            array('TN591000603518359847883',               false),
            array('TR33000610051978645784132',             false),
            array('AE07033123456789012345',                false),
            array('GB29NWBK6016133192681',                 false),
            array('VG96VPVG000001234567890',               false),
            array('YY24KIHB1247642312591594793091526',     false),
            array('ZZ25VLQT38233223320658801131377642',    false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid($iban, $isValid)
    {
        $this->assertEquals($isValid, Iban::isValid($iban), $iban);
    }

    public function alphaToNumberProvider()
    {
        return array(
            array('A', 10),
            array('B', 11),
            array('C', 12),
            array('D', 13),
            array('E', 14),
            array('F', 15),
            array('G', 16),
            array('H', 17),
            array('I', 18),
            array('J', 19),
            array('K', 20),
            array('L', 21),
            array('M', 22),
            array('N', 23),
            array('O', 24),
            array('P', 25),
            array('Q', 26),
            array('R', 27),
            array('S', 28),
            array('T', 29),
            array('U', 30),
            array('V', 31),
            array('W', 32),
            array('X', 33),
            array('Y', 34),
            array('Z', 35),
        );
    }

    /**
     * @dataProvider alphaToNumberProvider
     */
    public function testAlphaToNumber($letter, $number)
    {
        $this->assertEquals($number, Iban::alphaToNumber($letter), $letter);
    }

    public function mod97Provider()
    {
        // Large numbers
        $return = array(
            array('123456789123456789', 7),
            array('111222333444555666', 73),
            array('4242424242424242424242', 19),
            array('271828182845904523536028', 68),
        );

        // 0-200
        for ($i = 0; $i < 200; $i++) {
            $return[] = array((string)$i, $i % 97);
        }

        return $return;
    }
    /**
     * @dataProvider mod97Provider
     */
    public function testMod97($number, $result)
    {
        $this->assertEquals($result, Iban::mod97($number), $number);
    }
}
