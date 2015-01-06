<?php

namespace Faker\Provider\en_IE;

class Address extends \Faker\Provider\Address
{
    protected static $townland = array(
    );

    protected static $town = array(
    );

    protected static $county = array(
        'Antrim', 'Armagh', 'Carlow', 'Cavan', 'Clare', 'Cork', 'Derry',
        'Donegal', 'Down', 'Dublin', 'Fermanagh', 'Galway', 'Kerry', 'Kildare',
        'Kilkenny', 'Laois', 'Leitrim', 'Limerick', 'Longford', 'Louth',
        'Mayo', 'Meath', 'Monaghan', 'Offaly', 'Roscommon', 'Sligo',
        'Tipperary', 'Tyrone', 'Waterford', 'Westmeath', 'Wexford', 'Wicklow'
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra',
        'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)',
        'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia',
        'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh',
        'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda',
        'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet
        Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos
        Archipelago)', 'British Virgin Islands', 'Brunei Darussalam',
        'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon',
        'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic',
        'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling)
        Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica',
        'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador',
        'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia',
        'Ethiopia', 'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji',
        'Finland', 'France', 'French Guiana', 'French Polynesia', 'French
        Southern Territories', 'Gabon', 'Gambia', 'Georgia', 'Germany',
        'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe',
        'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City
        State)', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India',
        'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel',
        'Italy', 'Jamaica', 'Japan', 'Jersey', 'Jordan', 'Kazakhstan', 'Kenya',
        'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic', 'Lao
        People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho',
        'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania',
        'Luxembourg', 'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia',
        'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique',
        'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia',
        'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco',
        'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands
        Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua',
        'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana
        Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestinian
        Territory', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru',
        'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint
        Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia',
        'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the
        Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi
        Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone',
        'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon
        Islands', 'Somalia', 'South Africa', 'South Georgia and the South
        Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard
        & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian
        Arab Republic', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand',
        'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago',
        'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands',
        'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United
        Kingdom', 'United States of America', 'United States Minor Outlying
        Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam', 'Wallis and Futuna', 'Western
        Sahara', 'Yemen', 'Zambia', 'Zimbabwe'
    );

    /**
     * House numbers should not start with 0, so use % instead of #
     */
    protected static $dublinHouseNumber = array('%', '%#');
    protected static $dublinStreet = array('Grafton', 'O\'Connell', 'Brookhaven', 'Hazelwood');
    protected static $dublinStreetSuffix = array('Street', 'Avenue', 'Row', 'Lane', 'View', 'Rise', 'Grove');
    protected static $dublinPostcode = array(
        '1', '2', '3', '4', '5', '6', '6W', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '20', '22', '24'
    );

    protected static $dublinStreetFormats = array(
        '{{dublinStreet}} {{dublinStreetSuffix}}'
    );
    protected static $addressFormats = array(
        '{{townland}}, {{town}}, Co. {{county}}',
        '{{town}}, Co. {{county}}',
        '{{dublinHouseNumber}} {{dublinStreet}}, Dublin {{dublinPostcode}}'
    );

    /**
     * @example 'Garrane'
     */
    public function townland()
    {
        return static::randomElement(static::$townland);
    }

    /**
     * @example 'Drumshanbo'
     */
    public function town()
    {
        return static::randomElement(static::$town);
    }

    /**
     * @example 'Leitrim'
     */
    public function county()
    {
        return static::randomElement(static::$county);
    }

    /**
     * @example '79'
     */
    public static function dublinHouseNumber()
    {
        return static::numerify(static::randomElement(static::$dublinHouseNumber));
    }

    /**
     * @example 'Street'
     */
    public static function dublinStreetSuffix()
    {
        return static::randomElement(static::$dublinStreetSuffix);
    }

    /**
     * @example 'Fitzgibbon Street'
     */
    public function dublinStreet()
    {
        $format = static::randomElement(static::$dublinStreetFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example '6W'
     */
    public function dublinPostcode()
    {
        return static::randomElement(static::$dublinPostcode);
    }

    /**
     * @example 'Drumshanbo, Co. Leitrim'
     */
    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }
}
