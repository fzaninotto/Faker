<?php

namespace Faker\Provider\en_UG;

class Address extends \Faker\Provider\Address
{
    protected static $cityFormats = array(
        '{{cityName}}'
    );
    
    /**
     * @link http://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Uganda
     */
    protected static $cityName = array(
        'Alebtong','Abim','Adjumani','Amolatar','Amuria','Amuru','Apac','Arua',
        'Bombo','Budaka','Bugembe','Bugiri','Bukedea','Bulisa','Buikwe','Bundibugyo',
        'Busembatya','Bushenyi','Busia','Busolwe','Butaleja','Buwenge',
        'Dokolo',
        'Entebbe',
        'Fort Portal',
        'Gulu',
        'Hima','Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kaberamaido','Kabwohe','Kagadi','Kakinga','Kakiri','Kalangala','Kaliro',
        'Kalisizo','Kalongo','Kalungu','Kampala','Kamuli','Kanoni','Kamwenge','Kanungu','Kapchorwa',
        'Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kihiihi','Kiira','Kiruhura','Kiryandongo',
        'Kisoro','Kitgum','Koboko','Kotido','Kumi','Kyenjojo','Kyotera',
        'Lira','Lugazi','Lukaya','Luwero','Lwakhakha','Lwengo','Lyantonde',
        'Malaba','Manafwa','Masaka','Masindi','Masindi Port','Matugga','Mayuge','Mbale','Mbarara',
        'Mitooma','Mityana','Mpigi','Mpondwe','Moroto','Moyo','Mubende','Mukono','Mutukula',
        'Nagongera','Nakaseke','Nakasongola','Nakapiripirit','Namutumba','Nansana','Nebbi','Ngora',
        'Njeru','Nkokonjeru','Ntungamo',
        'Oyam',
        'Pader','Paidha','Pakwach','Pallisa',
        'Rakai','Rukungiri',
        'Sembabule','Sironko','Soroti',
        'Tororo',
        'Wakiso','Wobulenzi',
        'Yumbe'
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territory', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Districts_of_Uganda
     */
    protected static $district = array(
        'Abim','Adjumani','Agago','Alebtong','Amolatar','Amudat','Amuria','Amuru','Apac','Arua',
        'Budaka','Bududa','Bugiri','Buhweju','Buikwe','Bukedea','Bukomansimbi','Bukwo','Bulambuli',
        'Buliisa','Bundibugyo','Bushenyi','Busia','Butaleja','Butambala','Buvuma','Buyende',
        'Dokolo',
        'Gomba','Gulu',
        'Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kabarole','Kaberamaido','Kalangala','Kaliro','Kalungu','Kampala','Kamuli',
        'Kamwenge','Kanungu','Kapchorwa','Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kibuku',
        'Kigezi','Kiruhura','Kiryandongo','Kisoro','Kitgum','Koboko','Kole','Kotido','Kumi','Kween',
        'Kyankwanzi','Kyegegwa','Kyenjojo',
        'Lamwo','Lira','Luuka','Luweero','Lwengo','Lyantonde',
        'Manafwa','Maracha','Maracha-Terego','Masaka','Masindi','Mayuge','Mbale','Mbarara','Mitooma',
        'Mityana','Moroto','Moyo','Mpigi','Mubende','Mukono',
        'Nakapiripirit','Nakaseke','Nakasongola','Namayingo','Namutumba','Napak','Nebbi','Ngora',
        'Ntoroko','Ntungamo','Nwoya',
        'Otuke','Oyam',
        'Pader','Pallisa',
        'Rakai','Rubirizi','Rukungiri',
        'Sembabule','Serere','Sheema','Sironko','Soroti',
        'Tororo',
        'Wakiso',
        'Yumbe',
        'Zombo'
    );

    protected static $postcode = array( '#', "##", "###", "####", "#####" );

    protected static $region = array( 'Central', 'East', 'North', 'West' );

    /**
     * @example 'Fort Portal'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'Kampala'
     */
    public static function district()
    {
        return static::randomElement(static::$district);
    }

    /**
     * @example 'East'
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }
}
