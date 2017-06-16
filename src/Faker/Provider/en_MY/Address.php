<?php

namespace Faker\Provider\en_MY;

class Address extends \Faker\Provider\Address
{

    // https://en.wikipedia.org/wiki/Addresses_in_Malaysia
    protected static $streetNumber = array('##', '###', '####');


    // http://www.streetdirectory.com/malaysia/kl/asia_travel/street/
    protected static $streetSuffix = array(
        
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
        'Tebing', 'Temple', 'Tentera', 'Tiara', 'Tun', 'Tan Chen Lock', 'Tikus', 'Tawau',
        'Usahawan', 'Vista', 'Villa', 'Xiwang', 'Youssef', 'Zainia', 'Zaid'
    );

    protected static $streetAddressFormats = array(
        '{{streetPrefix}} {{streetName}}',
    );


    // https://en.wikipedia.org/wiki/Addresses_in_Malaysia
    protected static $addressFormats = array(
        "{{streetNumber}} {{streetAddress}},\n{{postcode}} {{townName}},\n{{country}}",
    );

    protected static $townName = array(
        'Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Perak', 'Perlis',
        'Penang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Kuala Lumpur', 'Labuan', 'Putrajaya',
    );

    protected static $postcode = array('#####');

    protected static $country = array(
        'Malaysia',
    );

    public function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public function streetName()
    {
        return static::randomElement(static::$streetName);
    }

    public function streetNumber()
    {
        return static::numerify(static::randomElement(static::$streetNumber));
    }


    public function townName()
    {
        return static::randomElement(static::$townName);
    }
}
