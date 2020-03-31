<?php

namespace Faker\Provider\fr_CD;

class Person extends \Faker\Provider\fr_FR\Person
{
    protected static $prefix = array('wa', 'a', 'y', 'ne');

    protected static $lastName = array(
        'Kasongo', 'Mbayo', 'Manang', 'Kafutshi', 'Bigomokero', 'Tubongye', 'Kasinde', 'Mulombole', 'Yuma', 'Nkulu',
        'Ngombe', 'Wabubindja', 'Ampire', 'Makashyeni', 'Mutombo', 'Kabongo', 'Kanam', 'Fatuma', 'Mukoj', 'Kadiat',
        'Matshik', 'Fam', 'Mwang', 'Mureng', ' Kazang', 'Muteb', 'Mwange', 'Bahindwa', 'Kung', 'Alew', 'Ngela', 'Ngeleka',
        'Nshidi', 'Mushid', 'Mujing', 'Mujinga', 'kon', 'Mukeng', 'Mukenga', 'Mazang', 'Botoko', 'Bosemwa', 'Yombo', 'Muteb',
        'Muteba', 'Lusinga', 'Mayani', 'Mayaola', 'Abakuk', 'Mwikew', 'King', 'Tshong', 'Okito', 'Katumbi', 'Mwanke', 'Kitumbi',
        'Kape', 'Kitungwa', 'Mudekereza', 'Kisimba', 'Kalubi', 'Biganiro', 'Katoherio', 'Kambale', 'Paluku', 'Nzanzu', 'Muhongya',
        'Kavira', 'Masika', 'Syahuswa', 'Lukogho', 'Maliro', 'Kavunga', 'Mulonda', 'Musonda', 'Mwila', 'Mwepu', 'Kabila', 'Kitenge',
        'kapend', 'Mutash', 'Mbolela', 'Kasiy', 'Mafuta', 'Nkosi', 'Tshimbumb', 'Lumpung', 'Yav', 'Ngoie', 'Bakenda', 'Kayombo',
        'Biyombo', 'Hassan', 'Tshimpela', 'Mukuna', 'Kafuta', 'Ngoy', 'Badye', 'Busangu', 'Tshibangu', 'Mwika', 'Lwamba', 'Mwelwa',
        'Mutonkole', 'Bonioma', 'Lofaka', 'Amundala', 'Kabambi', 'Ilunga', 'Kabange', 'Kalonga', 'Kabengele', 'Murhunzi', 'Cirezi',
        'Cirimwami', 'Useni', 'Lenge', 'Kazembe', 'Meki', 'Kabamba', 'Mukalay', 'Avul', 'Kayoa', 'Kayumba', 'Yumba', 'Kisebwe', 'Mpiana'
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{prefix}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{firstNameMale}}-{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}}-{{firstNameMale}} {{lastName}}  {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}  {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{prefix}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{firstNameFemale}}-{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}}-{{firstNameFemale}} {{lastName}}  {{lastName}}',
    );
}
