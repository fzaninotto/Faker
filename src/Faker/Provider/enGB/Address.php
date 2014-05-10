<?php

namespace Faker\Provider\en_GB;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port');
    protected static $citySuffix = array('town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire');
    protected static $buildingNumber = array('###', '##', '#');
    protected static $streetSuffix = array(
        'Alley', 'Avenue', 'Branch', 'Bridge', 'Brook', 'Brooks', 'Burg', 'Burgs', 'Bypass', 'Camp', 'Canyon', 'Cape', 'Causeway', 'Center', 'Centers', 'Circle', 'Circles', 'Cliff', 'Cliffs', 'Club', 'Common', 'Corner', 'Corners', 'Course', 'Court', 'Courts', 'Cove', 'Coves', 'Creek', 'Crescent', 'Crest', 'Crossing', 'Crossroad', 'Curve', 'Dale', 'Dam', 'Divide', 'Drive', 'Drive', 'Drives', 'Estate', 'Estates', 'Expressway', 'Extension', 'Extensions', 'Fall', 'Falls', 'Ferry', 'Field', 'Fields', 'Flat', 'Flats', 'Ford', 'Fords', 'Forest', 'Forge', 'Forges', 'Fork', 'Forks', 'Fort', 'Garden', 'Gardens', 'Gateway', 'Glen', 'Glens', 'Green', 'Greens', 'Grove', 'Groves', 'Harbour', 'Harbours', 'Haven', 'Heights', 'Highway', 'Hill', 'Hills', 'Hollow', 'Inlet', 'Island', 'Islands', 'Isle', 'Junction', 'Junctions', 'Key', 'Keys', 'Knoll', 'Knolls', 'Lake', 'Lakes', 'Land', 'Landing', 'Lane', 'Light', 'Lights', 'Loaf', 'Lock', 'Locks', 'Locks', 'Lodge', 'Lodge', 'Loop', 'Manor', 'Manors', 'Meadow', 'Meadows', 'Mews', 'Mill', 'Mills', 'Motorway', 'Mount', 'Mountain', 'Mountains', 'Neck', 'Orchard', 'Oval', 'Overpass', 'Park', 'Parks', 'Parkway', 'Parkways', 'Pass', 'Passage', 'Path', 'Pike', 'Pine', 'Pines', 'Place', 'Plain', 'Plains', 'Plaza', 'Point', 'Points', 'Port', 'Ports', 'Radial', 'Ramp', 'Ranch', 'Rapid', 'Rapids', 'Rest', 'Ridge', 'Ridges', 'River', 'Road', 'Road', 'Roads', 'Roads', 'Route', 'Row', 'Rue', 'Run', 'Shoal', 'Shoals', 'Shore', 'Shores', 'Spring', 'Springs', 'Springs', 'Spur', 'Spurs', 'Square', 'Square', 'Squares', 'Squares', 'Station', 'Station', 'Stream', 'Stream', 'Street', 'Streets', 'Summit', 'Terrace', 'Throughway', 'Trace', 'Track', 'Trafficway', 'Trail', 'Tunnel', 'Turnpike', 'Underpass', 'Union', 'Unions', 'Valley', 'Valleys', 'Via', 'Viaduct', 'View', 'Views', 'Village', 'Villages', 'Ville', 'Vista', 'Vista', 'Walk', 'Walks', 'Wall', 'Way', 'Ways', 'Well', 'Wells'
    );
    protected static $postcode = array('?# #??', '?## #??', '??# #??', '??## #??', '?#? #??', '??#? #??');

    protected static $county = array(
        'Aberdeenshire', 'Anglesey', 'Angus', 'Argyll', 'Ayrshire', 'Banffshire', 'Bedfordshire', 'Berwickshire', 'Breconshire', 'Buckinghamshire', 'Bute', 'Caernarvonshire', 'Caithness', 'Cambridgeshire', 'Cardiganshire', 'Carmarthenshire', 'Cheshire', 'Clackmannanshire', 'Cornwall', 'Isles of Scilly', 'Cumbria', 'Denbighshire', 'Derbyshire', 'Devon', 'Dorset', 'Dumbartonshire', 'Dumfriesshire', 'Durham', 'East Lothian', 'East Sussex', 'Essex', 'Fife', 'Flintshire', 'Glamorgan', 'Gloucestershire', 'Greater London', 'Greater Manchester', 'Hampshire', 'Hertfordshire', 'Inverness', 'Kent', 'Kincardineshire', 'Kinross-shire', 'Kirkcudbrightshire', 'Lanarkshire', 'Lancashire', 'Leicestershire', 'Lincolnshire', 'London', 'Merionethshire', 'Merseyside', 'Midlothian', 'Monmouthshire', 'Montgomeryshire', 'Moray', 'Nairnshire', 'Norfolk', 'North Yorkshire', 'Northamptonshire', 'Northumberland', 'Nottinghamshire', 'Orkney', 'Oxfordshire', 'Peebleshire', 'Pembrokeshire', 'Perthshire', 'Radnorshire', 'Renfrewshire', 'Ross & Cromarty', 'Roxburghshire', 'Selkirkshire', 'Shetland', 'Shropshire', 'Somerset', 'South Yorkshire', 'Staffordshire', 'Stirlingshire', 'Suffolk', 'Surrey', 'Sutherland', 'Tyne and Wear', 'Warwickshire', 'West Lothian', 'West Midlands', 'West Sussex', 'West Yorkshire', 'Wigtownshire', 'Wiltshire', 'Worcestershire'
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
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}}',
        "{{secondaryAddress}}\n{{streetName}}",
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}\n{{postcode}}",
    );
    protected static $secondaryAddressFormats = array('Flat ##', 'Flat ##?', 'Studio ##', 'Studio ##?');

    /**
     * @example 'East'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Flat 350'
     */
    public static function secondaryAddress()
    {
        return static::bothify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Hampshire'
     */
    public static function county()
    {
        return static::randomElement(static::$county);
    }
}
