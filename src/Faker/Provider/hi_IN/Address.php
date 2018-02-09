<?php

namespace Faker\Provider\hi_IN;

class Address extends \Faker\Provider\Address
{

    /**
    * city and state names from :
    * @link https://github.com/joke2k/faker/blob/master/faker/providers/address/hi_IN/__init__.py
    */
    protected static $city = array(
        'आदिलाबाद',
        'अगरतला',
        'अहमदाबाद',
        'अहमदनगर',
        'अजमेर',
        'अम्बाजी',
        'अमरपुर',
        'इलाहाबाद',
        'अकोला',
        'अखनूर',
        'अन्तर्गत',
        'अलांग',
        'अलीगढ',
        'दादरा और नागर हवेली',
        'अमरावती',
        'अमरोहा',
        'अनन्तपुर',
        'करना',
        'जिससेबेलारी',
        'अनंतनाग',
        'भागलपुर',
        'पेपरबोर्डस',
        'त्रिबेनी',
        'टिसूज',
        'भद्रक',
        'बचेली',
        'बहादुरगंज',
        'बहादुरगढ',
        'चिरमिरी',
        'चिराला',
        'चित्रदुर्ग',
        'चित्तूर',
        'चित्रकूट',
        'देवगढ़',
        'दालखोला',
        'देवास',
        'चंडीगढ',
        'फादर',
        'चिन्नफ',
        'चिपलुन',
        'चक्रधरपुर',
        'चंबा',
        'फतहपुर',
        'फतेहपुर',
        'फतेहगढ',
        'फतहपुर',
        'फतहपुर',
        'चित्तूर',
        'चित्रकूट',
        'सभापतिने',
        'देवगढ़',
        'द्वारारस्वीकृति',
        'दालखोला',
        'धर्मापुरी',
        'पाकाला',
        'धारवाड',
        'असम',
        'देहरा',
        'रानीताल',
        'खडगपुर',
        'मोकामा',
        'मोकोकचुंग',
        'जिलोंपर',
        'विस्तारण',
        'मोतिहारी'
    );

    protected static $state = array(
        
        // States
        'अरूणाचल प्रदेश',
        'बिहार',
        'असम',
        'आंध्र प्रदेश',
        'छत्तीसगढ',
        'हरियाणा',
        'गुजरात',
        'हिमाचल प्रदेश',
        'गोवा',
        'मध्य प्रदेश',
        'झारखंड',
        'महाराष्ट्र',
        'कश्मीर',
        'केरल',
        'कर्नाटक',
        'मणिपुर',
        'मिजोरम',
        'मेघालय',
        'सिबक्कम',
        'राजस्थान',
        'पंजाब',
        'उडीसा',
        'उत्तरांचल',
        'उत्तर प्रदेश',
        'तमिलनाडु',
        'त्रिपुरा',
        'पश्चिमी बंगाल',
        'अंडमान और निकोबार',
        'द्वीप समूह',
        'दमन और दीव',
        'दादरा और नागर हवेली',
        'दिल्ली',
        'पांडिचेरी',
        'लक्षद्वीप'
    );

    protected static $stateAbbr = array(
       'AP', 'AR', 'AS', 'BR', 'CG', 'GA', 'JH', 'GJ', 'HR', 'HP', 'JK', 'KA', 'KL', 'MP', 'MH', 'MN', 'ML', 'MZ', 'NL', 'OD', 'PB', 'RJ', 'SK', 'TN', 'TS', 'TR', 'UP', 'UK', 'WB', 'AN', 'CH', 'DN', 'DD', 'DL', 'LD', 'PY'
    );

    protected static $country = array(
        'आर्मेनिया',
        'यू.के.',
        'फ्रांस',
        'अजेपटीना',
        'ब्राजील',
        'ईरान',
        'यूनान',
        'स्पेन',
        'हमारे',
        'जॉजिऩया',
        'लेबनान',
        'सायप्रस',
        'सीरिया',
        'कनाडा',
        'रूस',
        'संयुक्त राज्य अमरीका',
        'नेदर्लान्ड',
        'फ्रांस',
        'ऑस्ट्रेलिया',
        'एंटीगुआ',
        'बार्बुडा',
        'अर्जेंटीना',
        'आर्मेनिया',
        'ऑस्ट्रिया',
        'अज़रबाइजान',
        'बारबाडोस',
        'बेलारूस',
        'बेल्जियम',
        'बेलीज़',
        'बेनिन',
        'बहामास',
        'बहरीन',
        'बांग्लादेश',
        'भूटान',
        'बोलिविया',
        'बोस्निया',
        'हर्जेगोविना',
        'बोत्सवाना',
        'ब्राजील',
        'ब्रुनेई',
        'बुल्गारिया',
        'बुर्किना',
        'फ़ासो',
        'बर्मा',
        'बुरूंडी',
        'डोमिनिकन रिपब्लिक',
        'गिनिया',
        'टीमोर',
        'फ़िनलैंड',
        'गेबोन',
        'गाम्बिया',
        'जर्मनी',
        'जार्जिया ग्रेनेडा',
        'घाना',
        'यूनान',
        'ग्रेट ब्रिटेन',
        'हंगरी',
        'भारत',
        'इराक',
        'आयरलैंड',
        'इंडोनेशिया',
        'इसराइल',
        'आइलैंड',
        'ईरान',
        'इटली',
        'जमैका',
        'जॉर्डन',
        'जापान',
        'क़जाख़स्तान',
        'केन्या',
        'किरिबाती',
        'दक्षिण कोरिया',
        'लातविया',
        'लाओस',
        'उत्तर कोरिया',
        'दक्षिण कोसोवो',
        'कुवैत',
        'लेबनान',
        'लिचटीनस्टीन',
        'लिथुआनिया',
        'लक्समबर्ग',
        'लीबिया',
        'लाइबेरिया',
        'लेसोथो',
        'नेपाल',
        'न्यूजीलैंड',
        'निकारागुआ',
        'नाइजर',
        'नाउरू',
        'लुसिया',
        'रूस',
        'रोमानिया',
        'अरब',
        'अमीरात',
        'यूएई',
        'युगांडा',
        'यूक्रेन',
        'उरूग्वे',
        'उज़बेकिस्तान',
        'यूनाइटेड किंगडम',
        'वानुआतू',
        'वेटिकन सिटी',
        'वेनेजुएला',
        'पश्चिमी सहारा',
        'वियतनाम',
        'यमन',
        'ज़ायर',
        'जाबम्बया',
        'जिम्बाब्वे',
    );
    protected static $localityName = array(
        'औंध', 'अंधेरी', 'बोरिवली', 'बांद्रा', 'चिंचवड', 'चांदपोल', 'चर्चगेट', 'साइबर सिटी', 'दादर', 'दक्कन जिमखाना', 'गोरेगांव', 'हडपसर', 'हर्मदा', 'हिंजवाडी', 'कोरमंगाला', 'खराडी', 'मराठहल्ली', 'मॉडल टाउन', 'मानसरोवर', 'मालाद', 'अशोक नगर', 'रांची', 'कंके', 'डोरांड', 'किशोर गंज', 'रतू', 'विरार', 'विक्रोळी', 'हिन्नू', 'पालमपुर', 'मक्लूस्कीगंज', 'कौवाती', 'कोहिमा', 'टनको', 'कंचना', 'अंजना', 'पुंडग', 'पोक्ला', 'खेल गॉन', 'यरवदा', 'यशवंथपुरा',
    );
    protected static $areaSuffix = array(
        ' नगर','पुर','ग्रह','गूंज',' चौक',
    );
    protected static $postcode = array(
        '1#####','2#####','3#####','4#####','5#####','8#####', '834001'
    );
    protected static $localityFormats = array(
        '{{firstName}}{{areaSuffix}}',
        '{{localityName}}'
    );
    protected static $addressFormats = array(
        '{{streetAddress}} {{city}} - {{postcode}}',
    );
    protected static $societySuffix = array(
        'समाज', 'अपार्टमेंट', 'हाइट्स', 'विला',
    );
    protected static $societyNameFormat = array(
        '{{firstName}} {{societySuffix}}'
    );
    protected static $streetAddressFormats = array(
        
        '{{buildingNumber}}, {{locality}},',
        '{{buildingNumber}}, {{societyName}}, {{locality}}',
    );
    public function societySuffix()
    {
        return static::randomElement(static::$societySuffix);
    }
    /**
     * @example Shanti Apartments
     */
    public function societyName()
    {
        return $this->generator->parse(static::randomElement(static::$societyNameFormat));
    }
    /**
     * @example Mumbai
     */
    public function city()
    {
        return static::randomElement(static::$city);
    }
    /**
     * @example Vaishali Nagar
     */
    public function locality()
    {
        return $this->generator->parse(static::randomElement(static::$localityFormats));
    }
    /*
     * @example Kharadi
     */
    public function localityName()
    {
        return $this->generator->parse(static::randomElement(static::$localityName));
    }
    /**
     * @example Nagar
     */
    public function areaSuffix()
    {
        return static::randomElement(static::$areaSuffix);
    }

    /**
     * @example 'Delhi'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'DL'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
}
