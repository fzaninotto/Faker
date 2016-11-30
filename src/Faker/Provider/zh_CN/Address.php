<?php

namespace Faker\Provider\zh_CN;

class Address extends \Faker\Provider\Address
{

    protected static $stateAbbr = array(
        '京', '皖', '渝', '闽',
        '甘', '粤', '桂', '黔',
        '琼', '冀', '豫', '黑',
        '鄂', '湘', '吉', '苏',
        '赣', '辽', '蒙', '宁',
        '青', '鲁', '晋', '陕'
    );

    protected static $provinces = array(
        '河北省','山西省','江苏省','浙江省','湖北省',
        '辽宁省','吉林省','上海市','湖南省','陕西省',
        '安徽省','福建省','江西省','山东省','河南省',
        '广东省','海南省','重庆市','四川省','贵州省'
    );

    protected static $citys = array(
        '长春市', '沈阳市', '白银市', '郑州市',
        '兰州市', '西宁市', '济南市', '长沙市',
        '西安市', '银川市', '昆明市', '南昌市',
        '太原市', '合肥市', '武汉市', '海口市',
        '南京市', '成都市', '贵阳市', '澳门市',
        '南宁市', '拉萨市', '杭州市', '香港市',
        '广州市', '福州市', '大同市', '宿州市',
        '周口市', '商丘市', '南阳市', '白银市'
    );


    protected static $areas = array(
        '西夏区', '永川区', '秀英区', '高港区',
        '清城区', '兴山区', '锡山区', '清河区',
        '龙潭区', '华龙区', '海陵区', '滨城区',
        '东丽区', '高坪区', '沙湾区', '平山区',
        '城北区', '海港区', '沙市区', '双滦区',
        '长寿区', '山亭区', '南湖区', '浔阳区',
        '南长区', '友好区', '安次区', '翔安区',
        '沈河区', '魏都区', '西峰区', '萧山区',
        '金平区', '沈北区', '孝南区', '上街区',
        '城东区', '牧野区', '大东区', '白云区',
        '花溪区', '吉利区', '新城区', '怀柔区',
        '六枝区', '涪城区', '清浦区', '南溪区',
        '淄川区', '高明区', '金水区', '中原区',
        '高新区', '济新区', '大新区', '未央区'
    );

    protected static $countrys = array(
        '美国', '英国', '法国', '瑞士',
        '中国', '日本', '韩国', '巴林',
        '乍得', '智利', '丹麦', '丹麦',
        '刚果', '刚果', '埃及', '不丹',
        '安道尔', '安哥拉', '新西兰', '加拿大',
        '阿根廷', '阿森松', '奥地利', '比利时',
        '澳大利亚', '阿塞拜疆', '阿塞拜疆', '哥伦比亚'
    );

    protected static $streets = array(
        '吴家山', '走马岭', '新沟', '长青', '慈惠', '径河',
        '金银湖', '将军路', '郑店', '流芳', '澄月', '金湖',
        '洪山嘴', '罗家桥', '酂阳', '新华', '中兴', '开源',
        '罗家湾', '马家寺', '建设', '长安', '紫金', '五一'
    );

    protected static $streetSuffix = array(
        '路', '街'
    );
    protected static $secondaryAddressSuffix = array(
        '号', '栋'
    );

    /**
     * @example '山西省'
     */
    public static function province()
    {
        return static::randomElement(static::$provinces);
    }

    /**
     * @example '大同'
     */
    public function city()
    {
        return static::randomElement(static::$citys);
    }

    /**
     * @example '未央区'
     */
    public static function area()
    {
        return static::randomElement(static::$areas);
    }

    /**
     * @example '闽'
     */
    public function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }

    /**
     * @example '美国'
     */
    public static function country()
    {
         return static::randomElement(static::$countrys);
    }

    /**
     * @example '罗家湾'
     */
    public function streetName()
    {
        return static::randomElement(static::$streets).static::randomElement(static::$streetSuffix);
    }

    /**
     * @example '陕西省西安市未央区罗家湾路'
     */
    public function address()
    {
         return $this->province() . $this->city() . $this->streetName() . static::buildingNumber() . static::randomElement(static::$secondaryAddressSuffix);
    }

    public static function postcode()
    {
        $prefix = str_pad(mt_rand(1, 85), 2, 0, STR_PAD_LEFT);
        $suffix = '00';

        return $prefix . mt_rand(10, 88) . $suffix;
    }
}
