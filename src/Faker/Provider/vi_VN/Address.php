<?php

namespace Faker\Provider\vi_VN;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('####', '###', '##', '#');
    protected static $postcode = array('#####', '######', '#####-####');
    protected static $province = array(
        'An Giang', 'Bà Rịa - Vũng Tàu',
        'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu',
        'Bắc Ninh', 'Bến Tre', 'Bình Định',
        'Bình Dương', 'Bình Phước', 'Bình Thuận',
        'Cà Mau', 'Cao Bằng', 'Đắk Lắk',
        'Đắk Nông', 'Điện Biên', 'Đồng Nai',
        'Đồng Tháp', 'Gia Lai', 'Hà Giang',
        'Hà Nam', 'Hà Tĩnh', 'Hải Dương',
        'Hậu Giang', 'Hòa Bình', 'Hưng Yên',
        'Khánh Hòa', 'Kiên Giang', 'Kon Tum',
        'Lai Châu', 'Lâm Đồng', 'Lạng Sơn',
        'Lào Cai', 'Long An', 'Nam Định',
        'Nghệ An', 'Ninh Bình', 'Ninh Thuận',
        'Phú Thọ', 'Quảng Bình', 'Quảng Nam',
        'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị',
        'Sóc Trăng', 'Sơn La', 'Tây Ninh',
        'Thái Bình', 'Thái Nguyên', 'Thanh Hóa',
        'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh',
        'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc',
        'Yên Bái', 'Phú Yên',
    );
    protected static $city = array(
        'Cần Thơ', 'Đà Nẵng', 'Hải Phòng', 'Hà Nội', 'Hồ Chí Minh',
    );
    protected static $streetNameFormats = array(
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{firstName}}',
        'Phố {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
    );
    protected static $hamletNameFormats = array(
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{firstName}}',
        '{{hamletPrefix}} {{firstName}} {{lastName}}',
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}}',
        '{{hamletPrefix}} ##',
        '{{hamletPrefix}} #',
    );
    protected static $hamletPrefix = array(
        'Thôn', 'Ấp',
    );
    protected static $wardNameFormats = array(
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{firstName}}',
        '{{wardPrefix}} {{firstName}} {{lastName}}',
        '{{wardPrefix}} {{middleName}} {{firstName}}',
        '{{wardPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{wardPrefix}} {{firstName}}',
        '{{wardPrefix}} {{lastName}}',
        '{{wardPrefix}} ##',
        '{{wardPrefix}} #',
    );
    protected static $wardPrefix = array(
        'Phường', 'Xã',
    );
    protected static $districtNameFormats = array(
        '{{districtPrefix}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{lastName}} {{firstName}}',
        '{{districtPrefix}} {{firstName}} {{lastName}}',
        '{{districtPrefix}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{firstName}}',
        '{{districtPrefix}} {{lastName}}',
        '{{districtPrefix}} ##',
        '{{districtPrefix}} #',
    );
    protected static $districtPrefix = array(
        'Quận', 'Huyện',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{wardName}}, {{districtName}}\n{{city}}",
        "{{streetAddress}}, {{wardName}}, {{districtName}}\n{{province}}",
        "{{buildingNumber}}, {{hamletName}}, {{wardName}}, {{districtName}}\n{{province}}",
    );

    public function hamletName()
    {
        $format = static::randomElement(static::$hamletNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    public function hamletPrefix()
    {
        return static::randomElement(static::$hamletPrefix);
    }

    public function wardName()
    {
        $format = static::randomElement(static::$wardNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    public function wardPrefix()
    {
        return static::randomElement(static::$wardPrefix);
    }

    public function districtName()
    {
        $format = static::randomElement(static::$districtNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    public function districtPrefix()
    {
        return static::randomElement(static::$districtPrefix);
    }

    /**
     * @example 'Hà Nội'
     */
    public function city()
    {
        return static::randomElement(static::$city);
    }

    /**
     * @example 'Bắc Giang'
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }
}
