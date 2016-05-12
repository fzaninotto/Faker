<?php

namespace Faker\Provider\en_IN;

class Address extends \Faker\Provider\Address
{

    protected static $city = array(
        'Agra','Ahmedabad','Ajmer','Alwar',
        'Bengaluru','Bhubhaneshwar','Bhopal','Bikaner',
        'Chennai','Chandigarh',
        'Darjeeling','Dehra Dun','Delhi',
        'Faridabad',
        'Gandhinagar','Guwahati','Gangtok','Gurgaon',
        'Hyderabad','Hisar',
        'Indore',
        'Jaipur','Jodhpur','Jammu','Jamnagar','Jabalpur',
        'Kolkata','Kanpur','Kota','Kochi',
        'Ludhiana','Lucknow',
        'Mumbai','Meerut','Mysore',
        'Nagpur','Nashik','Noida','New Delhi',
        'Pune','Patna','Panaji','Pilani','Pondicherry',
        'Ratlam','Raipur','Ranchi','Rajkot',
        'Surat','Simla','Srinagar',
        'Thiruvananthapuram','Trichy',
        'Udaipur',
        'Vishakhapattanam','Vadodara',
        'Warangal',
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
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
    protected static $localityName = array(
        'Aundh','Andheri',
        'Borivali','Bandra',
        'Chinchwad','Chandpole','Churchgate','Cyber City',
        'Dadar','Deccan Gymkhana',
        'Goregaon',
        'Hadapsar','Harmada','Hinjewadi',
        'Kormangala','Kharadi',
        'Marathahalli','Model Town','Mansarovar','Malad',
        'Sodala',
        'Virar','Vikhroli',
        'Yerwada','Yeshwanthpura',
    );
    protected static $areaSuffix = array(
        ' Nagar','Pur','Garh','Gunj',' Chowk',
    );
    protected static $postcode = array(
        '1#####','2#####','3#####','4#####','5#####',
    );
    protected static $localityFormats = array (
        '{{firstName}}{{areaSuffix}}',
        '{{localityName}}'
    );
    protected static $addressFormats = array(
        '{{streetAddress}} {{city}} - {{postcode}}',
    );
    protected static $societySuffix = array(
        'Society','Apartments','Heights','Villas',
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
}
