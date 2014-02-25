<?php

namespace Faker\Provider;

class Ecommerce extends Base
{
    protected static $currency = array(
        'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN', 'BAM', 'BBD', 'BDT', 'BGN',
        'BHD', 'BIF', 'BMD', 'BND', 'BOB', 'BRL', 'BSD', 'BTN', 'BWP', 'BYR', 'BZD', 'CAD', 'CDF', 'CHF',
        'CLP', 'CNY', 'COP', 'CRC', 'CUC', 'CUP', 'CVE', 'CZK', 'DJF', 'DKK', 'DOP', 'DZD', 'EGP', 'ERN',
        'ETB', 'EUR', 'FJD', 'FKP', 'GBP', 'GEL', 'GGP', 'GHS', 'GIP', 'GMD', 'GNF', 'GTQ', 'GYD', 'HKD',
        'HNL', 'HRK', 'HTG', 'HUF', 'IDR', 'ILS', 'IMP', 'INR', 'IQD', 'IRR', 'ISK', 'JEP', 'JMD', 'JOD',
        'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KPW', 'KRW', 'KWD', 'KYD', 'KZT', 'LAK', 'LBP', 'LKR', 'LRD',
        'LSL', 'LTL', 'LVL', 'LYD', 'MAD', 'MDL', 'MGA', 'MKD', 'MMK', 'MNT', 'MOP', 'MRO', 'MUR', 'MVR',
        'MWK', 'MXN', 'MYR', 'MZN', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PAB', 'PEN', 'PGK',
        'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'RUB', 'RWF', 'SAR', 'SBD', 'SCR', 'SDG', 'SEK',
        'SGD', 'SHP', 'SLL', 'SOS', 'SPL', 'SRD', 'STD', 'SVC', 'SYP', 'SZL', 'THB', 'TJS', 'TMT', 'TND',
        'TOP', 'TRY', 'TTD', 'TVD', 'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'UYU', 'UZS', 'VEF', 'VND', 'VUV',
        'WST', 'XAF', 'XCD', 'XDR', 'XOF', 'XPF', 'YER', 'ZAR', 'ZMW', 'ZWD'
    );

    protected static $manufacturer = array(
        '3COM', '3DX', '3M', 'A-Data', 'A4-Tech', 'Abit', 'ABM', 'Acer', 'Acme', 'Adobe', 'AEG', 'Aerocool',
        'Agama', 'Agfa', 'Ahead', 'AKG', 'Akira', 'AKYGA', 'Alcatel', 'Alcor', 'Amazon', 'AMD', 'AOC',
        'Apacer', 'APC', 'Apollo', 'Apple', 'Archos', 'ARCTIC-COOLING', 'Arnova', 'Aspire', 'AsRock', 'Asus',
        'AutoDesk', 'AverMedia', 'Aviosys', 'Axis', 'Be quiet!', 'BeastVision', 'Belkin', 'Benq', 'Best Buy',
        'BestConnection', 'Biostar', 'Bitfenix', 'Brother', 'C-Media', 'Canon', 'Canyon', 'Case Logic',
        'Chieftec', 'Cisco', 'Codegen', 'COLOROVO', 'Compaq', 'Conceptronic', 'ConCorde', 'CoolerMaster',
        'Coolink', 'Corel', 'Corsair', 'Creative', 'Crucial', 'D-Link', 'Emtec', 'Epson', 'Equip',
        'ESET', 'Evolve', 'Foxconn', 'Fractal Design', 'FSP', 'Fuji', 'Fujifilm', 'Fujitsu', 'G Data',
        'Garmin', 'Geil', 'Gembird', 'Genius', 'Geovision', 'Gigabyte', 'GMC', 'Google', 'GP',
        'Grundig', 'Haier', 'Hama', 'Hanns-G', 'Hitachi', 'HKC', 'Homedics', 'Horizon', 'HP', 'HPQ', 'HTC',
        'Huawei', 'IBM', 'Inno3D', 'Intel', 'iRiver', 'Jabra', 'JBL', 'Kaspersky', 'Kingmax', 'Kingston',
        'Kodak', 'Kolink', 'Konica Minolta', 'Koobe', 'Kraun', 'Kyocera', 'LC Power', 'Legrand', 'Lenovo',
        'LENSPEN', 'LevelOne', 'Lexar', 'Lexmark', 'LG', 'Lian Li', 'Linksys', 'Logilink', 'Logitech',
        'Maxell', 'Memorex', 'Mercury', 'Microsoft', 'Minolta', 'Modecom', 'MSI', 'Navigon', 'NAVON',
        'Netgear', 'NextBook', 'Nikon', 'Nintendo', 'Nokia', 'nVidia', 'OCZ', 'OKI', 'Olympus', 'Orink',
        'Packard Bell', 'Panasonic', 'Pentax', 'Philips', 'Pinnacle', 'Pioneer', 'Prestigio', 'ProColor',
        'QNAP', 'Revoltec', 'Rovio', 'Sagem', 'Sagemcom', 'Saitek', 'Samsonite', 'Samsung', 'Sandisk',
        'Sapphire', 'Seagate', 'Seagate-Maxtor', 'Sennheiser', 'Sharkoon', 'Sharp', 'Siemens', 'Silicon Power',
        'Sony', 'Sygic', 'Symantec', 'Synology', 'Tamron', 'Tangra', 'Targus', 'TDK', 'Tenda',
        'Texas Instruments', 'Thermaltake', 'Thomson', 'TomTom', 'Toshiba', 'TP-Link', 'Transcend', 'Trust',
        'ZTE', 'Zyxel'
    );

    protected static $productFormats = array(
        '{{colorName}} {{category}}'
    );

    /**
     * @example 'USD'
     */
    public static function currency()
    {
        return static::randomElement(static::$currency);
    }

    /**
     * @example '$1234,00'
     */
    public static function price()
    {
        return static::numerify(static::$priceFormat);
    }

    /**
     * @example 'Samsung'
     */
    public static function manufacturer()
    {
        return static::randomElement(static::$manufacturer);
    }

    /**
     * @example 'Tablet'
     */
    public static function category()
    {
        return static::randomElement(static::$category);
    }

    /**
     * @example 'White Tablet'
     */
    public function product()
    {
        $format = static::randomElement(static::$productFormats);

        return $this->generator->parse($format);
    }
}
