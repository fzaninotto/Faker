<?php

namespace Faker\Provider\id_ID;

/**
 * @author lsv
 */
class Color extends \Faker\Provider\Color
{
    /**
     * @link https://id.wikipedia.org/wiki/Daftar_warna
     */
    protected static $safeColorNames = array(
        'abu-abu', 'biru', 'biru donker', 'biru laut', 'coklat', 'emas', 'hijau',
        'hitam', 'kuning', 'magenta', 'mawar', 'merah', 'merah marun', 'merah jambu',
        'nila', 'oranye', 'perak', 'putih', 'ungu', 'violet', 'zaitun'
    );

    protected static $allColorNames = array(
        'Merah Indian', 'Koral Terang', 'Salmon', 'Salmon Gelap', 'Salmon Terang', 
        'Krimson', 'Merah', 'Batu Bata', 'Merah Tua', 'Merah Muda', 'Merah Muda Terang', 
        'Merah Muda Panas', 'Merah Muda Dalam', 'Merah Ungu Medium', 'Merah Ungu Pucat', 
        'Koral', 'Tomat', 'Merah Oranye', 'Oranye Tua', 'Oranye', 'Emas', 'Kuning', 
        'Kuning Terang', 'Lemon Sifon', 'Kuning Emas Terang', 'Kuning Pepaya', 'Mokasin', 
        'Kuning Kesemek', 'Emas Pucat', 'Khaki', 'Khaki Gelap', 'Lavender', 'Thistle', 'Plum', 
        'Violet', 'Anggrek', 'Fuchsia', 'Magenta', 'Anggrek Medium', 'Ungu Medium', 'Biru Ungu', 
        'Violet Gelap', 'Anggrek Gelap', 'Magenta Gelap', 'Ungu', 'Indigo', 'Biru Datar', 
        'Biru Datar Gelap', 'Hijau Kuning', 'Chartreuse', 'Hijau Rumput', 'Kapur', 
        'Hijau Kapur', 'Hijau Pucat', 'Hijau Terang', 'Hijau Semi Medium', 'Hijau Semi', 
        'Hijau Laut Medium', 'Hijau Laut', 'Hijau Hutan', 'Hijau', 'Hijau Gelap', 
        'Kuning Hijau', 'Zaitun Jenuh', 'Zaitun', 'Zaitun Hiaju Gelap', 
        'Biru Laut Medium', 'Hijau Laut Gelap', 'Hijau Laut Terang', 'Cyan Gelap', 'Teal', 
        'Aqua', 'Cyan', 'Cyan Terang', 'Pirus Pucat', 'Biru Laut', 'Pirus', 
        'Pirus Medium', 'Pirus Gelap', 'Biru Kadet', 'Biru Besi', 'Biru Besi Terang', 
        'Biru Bubuk', 'Biru Terang', 'Biru Langit', 'Biru Langit Terang', 'Biru Langit Dalam', 
        'Biru Elak', 'Biru Bunga Jagung', 'Biru Datar Medium', 'Biru Royal', 'Biru', 
        'Biru Medium', 'Biru Gelap', 'Navy', 'Biru Malam', 'Sutra Jagung', 'Almon Pucat', 
        'Bisque', 'Putih Navajo', 'Gandum', 'Kayu Kekar', 'Tan', 'Coklat Mawar', 'Coklat Pasir', 
        'Emas Batang', 'Emas Batang Gelap', 'Peru', 'Coklat', 'Coklat Pelana', 'Sienna', 
        'Coklat', 'Marun', 'Putih', 'Salju', 'Melon', 'Krim Mint', 'Biru Langit Azur', 
        'Biru Alice', 'Putih Hantu', 'Putih Asap', 'Putih Kerang', 'Krem', 'Renda Tua', 
        'Putih Bunga', 'Gading', 'Putih Antik', 'Linen', 'Lavender Kemerahan', 'Kabut Mawar', 
        'Gainsboro', 'Abu-Abu Terang', 'Perak', 'Abu-Abu Gelap', 'Abu-Abu', 'Abu-Abu Redup', 
        'Abu-Abu Datar Terang', 'Abu-Abu Datar', 'Abu-Abu Datar Gelap', 'Hitam'
    );

    /**
     * @example '#fa3cc2'
     */
    public static function hexColor()
    {
        return '#' . str_pad(dechex(mt_rand(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public static function safeHexColor()
    {
        $color = str_pad(dechex(mt_rand(0, 255)), 3, '0', STR_PAD_LEFT);

        return '#' . $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2];
    }

    /**
     * @example 'array(0,255,122)'
     */
    public static function rgbColorAsArray()
    {
        $color = static::hexColor();

        return array(
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2))
        );
    }

    /**
     * @example '0,255,122'
     */
    public static function rgbColor()
    {
        return implode(',', static::rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public static function rgbCssColor()
    {
        return 'rgb(' . static::rgbColor() . ')';
    }

    /**
     * @example 'blue'
     */
    public static function safeColorName()
    {
        return static::randomElement(static::$safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public static function colorName()
    {
        return static::randomElement(static::$allColorNames);
    }
}
