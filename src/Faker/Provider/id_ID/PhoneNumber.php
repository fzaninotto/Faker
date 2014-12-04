<?php

namespace Faker\Provider\id_ID;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link http://id.wikipedia.org/wiki/Daftar_kode_telepon_di_Indonesia
     */
    protected static $formats = array(
        '08##########',
        '+628##########',
        '+62 8## ########',
        '+62-8##-########',
        '+62-8##########',
        '+62#########',
        '+62 ## #######',
        '+62 ### #######',
        '(0##) ### ####',
        '(0###) ### ####',
    );
}
