<?php

namespace Faker\Provider\en_MY;

class Address extends \Faker\Provider\Address
{

    // https://en.wikipedia.org/wiki/Addresses_in_Malaysia
    protected static $streetNumber = array('##', '###');

    // https://en.wikipedia.org/wiki/Addresses_in_Malaysia
    protected static $blockNumber = array(
        'Blk ##',
        'Blk ###',
        'Blk ###A',
        'Blk ###B',
        'Blk ###C',
        'Blk ###D',
        'Blk ###E',
        'Blk ###F',
        'Blk ###G',
        'Blk ###H',
    );

    // http://www.streetdirectory.com/malaysia/kl/asia_travel/street/
    protected static $streetSuffix = array(
        'Avenue',
        'Bridge',
        'Highway', 'Hill', 'Height',
        'Park',
    );

    // http://www.streetdirectory.com/malaysia/kl/asia_travel/street/
    protected static $streetPrefix = array(
        'Jalan', 'Lorong',
    );

    // http://www.streetdirectory.com/malaysia/kl/asia_travel/street/
    protected static $streetName = array(
        'Ampang', 'Airport', 'Askar', 'Aljunied', 'Alor', 'Ann Siang', 'Anjung', 'Anson', 'Ara',
        'Bagus', 'Bahagia', 'Batu', 'Baik', 'Balong',
        'Cheras', 'Cempaka', 'Church', 'Canselor', 'Chai Houng', 'Chulia', 'Cheang Hong Lim', 'Chin Swee', 'Cenderai',
        'Duta', 'Dato', 'Damansara', 'Dunplo', 'Damai',
        'Eksekutif', 'Emas', 'Edgware', 'Eunos',
        'Fit', 'Fatmawati', 'Fatimah', 'Fathin',
        'Gading', 'Gembira', 'Gemok', 'Gasing',
        'Hang', 'Hitam', 'Hijau', 'Helmi',
        'Imbi', 'Ipoh', 'Ismail',
        'Jejari', 'Jinjang', 'Jiran',
        'Kepong', 'Kelapa', 'Kastunis', 'Kuching', 'Kiara',
        'Lang', 'Lanjang', 'Lengkok Bahru', 'Lim Kim Huat',
        'Malay', 'Market', 'Masjid', 'Metro', 'Megah', 'Mohammed Sultan', 'Maluri',
        'Negeri', 'Nathan', 'Najib',
        'Orange', 'Orang Asli', 'Orchard', 'Ong',
        'Penang', 'PJU', 'PJS', 'Perpustakawan', 'Pelukis', 'Pudu', 'Petaling', 'Pantai',
        'Queen', 'Qinzhou',
        'Rektor', 'Ramsey', 'Ramli', 'Rambai', 'Rindu',
        'SS 2', 'SS 7', 'Stanley', 'Saintis', 'Shenton', 'Sultan', 'Sunway', 'Selayang', 
        'Tebing', 'Temple', 'Tentera', 'Tiara', 'Tun', 'Tan Chen Lock', 'Tikus', 'Tawau'
        'Usahawan', 'Vista', 'Villa', 'Xiwang', 'Youssef', 'Zainia', 'Zaid'
    );

    protected static $streetAddressFormats = array(
        '{{streetPrefix}} {{streetName}}',
        '{{streetName}} {{streetSuffix}}',
    );

    protected static $floorNumber = array(
        '##', '0#',
    );

    protected static $apartmentNumber = array(
        '##', '###',
    );

    // https://en.wikipedia.org/wiki/Addresses_in_Malaysia
    protected static $addressFormats = array(
        "{{streetNumber}} {{streetAddress}}\n{{townName}} {{postcode}}",
        "{{blockNumber}} {{streetAddress}}\n{{floorNumber}} {{apartmentNumber}}\n{{postcode}} {{townName}}",
    );

    protected static $townName = array(
        'Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Perak', 'Perlis',
        'Penang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Kuala Lumpur', 'Labuan', 'Putrajaya',
    );

    protected static $postcode = array('#####');

    protected static $country = array(
        'MALAYSIA',
    );

    public function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public function streetNumber()
    {
        return static::numerify(static::randomElement(static::$streetNumber));
    }

    public function blockNumber()
    {
        return static::numerify(static::randomElement(static::$blockNumber));
    }

    public function floorNumber()
    {
        return static::randomElement(static::$floorNumber);
    }

    public function apartmentNumber()
    {
        return static::randomElement(static::$apartmentNumber);
    }

    public function townName()
    {
        return static::randomElement(static::$townName);
    }
}
