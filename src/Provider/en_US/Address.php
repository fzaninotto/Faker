<?php

namespace Faker\Provider\en_US;

class Address
{
	protected static $cityPrefix = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port');
	protected static $citySuffix = array('town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire');
	protected static $buildingNumber = array('#####', '####', '###');
	protected static $streetSuffix = array(
		'Alley','Avenue','Branch','Bridge','Brook','Brooks','Burg','Burgs','Bypass','Camp','Canyon','Cape','Causeway','Center','Centers','Circle','Circles','Cliff','Cliffs','Club','Common','Corner','Corners','Course','Court','Courts','Cove','Coves','Creek','Crescent','Crest','Crossing','Crossroad','Curve','Dale','Dam','Divide','Drive','Drive','Drives','Estate','Estates','Expressway','Extension','Extensions','Fall','Falls','Ferry','Field','Fields','Flat','Flats','Ford','Fords','Forest','Forge','Forges','Fork','Forks','Fort','Freeway','Garden','Gardens','Gateway','Glen','Glens','Green','Greens','Grove','Groves','Harbor','Harbors','Haven','Heights','Highway','Hill','Hills','Hollow','Inlet','Inlet','Island','Island','Islands','Islands','Isle','Isle','Junction','Junctions','Key','Keys','Knoll','Knolls','Lake','Lakes','Land','Landing','Lane','Light','Lights','Loaf','Lock','Locks','Locks','Lodge','Lodge','Loop','Mall','Manor','Manors','Meadow','Meadows','Mews','Mill','Mills','Mission','Mission','Motorway','Mount','Mountain','Mountain','Mountains','Mountains','Neck','Orchard','Oval','Overpass','Park','Parks','Parkway','Parkways','Pass','Passage','Path','Pike','Pine','Pines','Place','Plain','Plains','Plains','Plaza','Plaza','Point','Points','Port','Port','Ports','Ports','Prairie','Prairie','Radial','Ramp','Ranch','Rapid','Rapids','Rest','Ridge','Ridges','River','Road','Road','Roads','Roads','Route','Row','Rue','Run','Shoal','Shoals','Shore','Shores','Skyway','Spring','Springs','Springs','Spur','Spurs','Square','Square','Squares','Squares','Station','Station','Stravenue','Stravenue','Stream','Stream','Street','Street','Streets','Summit','Summit','Terrace','Throughway','Trace','Track','Trafficway','Trail','Trail','Tunnel','Tunnel','Turnpike','Turnpike','Underpass','Union','Unions','Valley','Valleys','Via','Viaduct','View','Views','Village','Village','Villages','Ville','Vista','Vista','Walk','Walks','Wall','Way','Ways','Well','Wells'
	);
	protected static $secondaryAddress = array('Apt. ###', 'Suite ###');
	protected static $postcode = array('#####', '#####-####');
	protected static $state = array(
		'Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','NewHampshire','NewJersey','NewMexico','NewYork','NorthCarolina','NorthDakota','Ohio','Oklahoma','Oregon','Pennsylvania','RhodeIsland','SouthCarolina','SouthDakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','WestVirginia','Wisconsin','Wyoming'
	);
	protected static $stateAbbr = array(
		'AL','AK','AS','AZ','AR','CA','CO','CT','DE','DC','FM','FL','GA','GU','HI','ID','IL','IN','IA','KS','KY','LA','ME','MH','MD','MA','MI','MN','MS','MO','MT','NE','NV','NH','NJ','NM','NY','NC','ND','MP','OH','OK','OR','PW','PA','PR','RI','SC','SD','TN','TX','UT','VT','VI','VA','WA','WV','WI','WY','AE','AA','AP'
	);
	protected static $country = array(
		'Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antarctica (the territory South of 60 deg S)','Antigua and Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan',
		'Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Bouvet Island (Bouvetoya)','Brazil','British Indian Ocean Territory (Chagos Archipelago)','British Virgin Islands','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi',
		'Cambodia','Cameroon','Canada','Cape Verde','Cayman Islands','Central African Republic','Chad','Chile','China','Christmas Island','Cocos (Keeling) Islands','Colombia','Comoros','Congo','Congo','Cook Islands','Costa Rica','Cote d\'Ivoire','Croatia','Cuba','Cyprus','Czech Republic',
		'Denmark','Djibouti','Dominica','Dominican Republic',
		'Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia',
		'Faroe Islands','Falkland Islands (Malvinas)','Fiji','Finland','France','French Guiana','French Polynesia','French Southern Territories',
		'Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guadeloupe','Guam','Guatemala','Guernsey','Guinea','Guinea-Bissau','Guyana',
		'Haiti','Heard Island and McDonald Islands','Holy See (Vatican City State)','Honduras','Hong Kong','Hungary',
		'Iceland','India','Indonesia','Iran','Iraq','Ireland','Isle of Man','Israel','Italy',
		'Jamaica','Japan','Jersey','Jordan',
		'Kazakhstan','Kenya','Kiribati','Korea','Korea','Kuwait','Kyrgyz Republic',
		'Lao People\'s Democratic Republic','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg',
		'Macao','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Martinique','Mauritania','Mauritius','Mayotte','Mexico','Micronesia','Moldova','Monaco','Mongolia','Montenegro','Montserrat','Morocco','Mozambique','Myanmar',
		'Namibia','Nauru','Nepal','Netherlands Antilles','Netherlands','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norfolk Island','Northern Mariana Islands','Norway',
		'Oman',
		'Pakistan','Palau','Palestinian Territory','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Pitcairn Islands','Poland','Portugal','Puerto Rico',
		'Qatar',
		'Reunion','Romania','Russian Federation','Rwanda',
		'Saint Barthelemy','Saint Helena','Saint Kitts and Nevis','Saint Lucia','Saint Martin','Saint Pierre and Miquelon','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia (Slovak Republic)','Slovenia','Solomon Islands','Somalia','South Africa','South Georgia and the South Sandwich Islands','Spain','Sri Lanka','Sudan','Suriname','Svalbard & Jan Mayen Islands','Swaziland','Sweden','Switzerland','Syrian Arab Republic',
		'Taiwan','Tajikistan','Tanzania','Thailand','Timor-Leste','Togo','Tokelau','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Tuvalu',
		'Uganda','Ukraine','United Arab Emirates','United Kingdom','United States of America','United States Minor Outlying Islands','United States Virgin Islands','Uruguay','Uzbekistan',
		'Vanuatu','Venezuela','Vietnam',
		'Wallis and Futuna','Western Sahara',
		'Yemen',
		'Zambia','Zimbabwe'
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
		'{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
	);
	protected static $addressFormats = array(
		"{{streetAddress}}\n{{city}}, {{stateAbbr}} {{postcode}}",
	);
	
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}

	public static function cityPrefix()
	{
		return self::$cityPrefix[array_rand(self::$cityPrefix)];
	}

	public static function citySuffix()
	{
		return self::$citySuffix[array_rand(self::$citySuffix)];
	}

	public function buildingNumber()
	{
		$format = self::$buildingNumber[array_rand(self::$buildingNumber)];
		return $this->generator->numerify($format);
	}

	public static function streetSuffix()
	{
		return self::$streetSuffix[array_rand(self::$streetSuffix)];
	}

	public function city()
	{
		$format = self::$cityFormats[array_rand(self::$cityFormats)];
		return $this->generator->parse($format);
	}
	
	public function streetName()
	{
		$format = self::$streetNameFormats[array_rand(self::$streetNameFormats)];
		return $this->generator->parse($format);
	}
	
	public function streetAddress()
	{
		$format = self::$streetAddressFormats[array_rand(self::$streetAddressFormats)];
		return $this->generator->numerify($this->generator->parse($format));
	}
	
	public function secondaryAddress()
	{
		$format = self::$secondaryAddress[array_rand(self::$secondaryAddress)];
		return $this->generator->numerify($format);
	}

	public function postcode()
	{
		$format = self::$postcode[array_rand(self::$postcode)];
		return $this->generator->numerify($format);
	}

	public static function state()
	{
		return self::$state[array_rand(self::$state)];
	}
	
	public static function stateAbbr()
	{
		return self::$stateAbbr[array_rand(self::$stateAbbr)];
	}
	
	public function address()
	{
		$format = self::$addressFormats[array_rand(self::$addressFormats)];
		return $this->generator->parse($format);
	}

	public static function country()
	{
		return self::$country[array_rand(self::$country)];
	}
	
}