<?php

namespace Faker\Provider\en_AU;

/**
 * Class Address
 * @see http://www.ipaustralia.gov.au/about-us/corporate/address-standards/
 * @package Faker\Provider\en_AU
 */
class Address extends \Faker\Provider\en_US\Address
{
    protected static $cityPrefix = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port', 'St.');

    protected static $buildingNumber = array('###', '##', '#');

    protected static $buildingLetters = array('A','B','C','D');

    protected static $streetSuffix = array(
        'Access', 'Alley', 'Alleyway', 'Amble', 'Anchorage', 'Approach', 'Arcade', 'Artery', 'Avenue', 'Basin', 'Beach', 'Bend', 'Block', 'Boulevard', 'Brace', 'Brae', 'Break', 'Bridge', 'Broadway', 'Brow', 'Bypass', 'Byway', 'Causeway', 'Centre', 'Centreway', 'Chase', 'Circle', 'Circlet', 'Circuit', 'Circus', 'Close', 'Colonnade', 'Common', 'Concourse', 'Copse', 'Corner', 'Corso', 'Court', 'Courtyard', 'Cove', 'Crescent', 'Crest', 'Cross', 'Crossing', 'Crossroad', 'Crossway', 'Cruiseway', 'Cul-de-sac', 'Cutting', 'Dale', 'Dell', 'Deviation', 'Dip', 'Distributor', 'Drive', 'Driveway', 'Edge', 'Elbow', 'End', 'Entrance', 'Esplanade', 'Estate', 'Expressway', 'Extension', 'Fairway', 'Fire Track', 'Firetrail', 'Flat', 'Follow', 'Footway', 'Foreshore', 'Formation', 'Freeway', 'Front', 'Frontage', 'Gap', 'Garden', 'Gardens', 'Gate', 'Gates', 'Glade', 'Glen', 'Grange', 'Green', 'Ground', 'Grove', 'Gully', 'Heights', 'Highroad', 'Highway', 'Hill', 'Interchange', 'Intersection', 'Junction', 'Key', 'Landing', 'Lane', 'Laneway', 'Lees', 'Line', 'Link', 'Little', 'Lookout', 'Loop', 'Lower', 'Mall', 'Meander', 'Mew', 'Mews', 'Motorway', 'Mount', 'Nook', 'Outlook', 'Parade', 'Park', 'Parklands', 'Parkway', 'Part', 'Pass', 'Path', 'Pathway', 'Piazza', 'Place', 'Plateau', 'Plaza', 'Pocket', 'Point', 'Port', 'Promenade', 'Quad', 'Quadrangle', 'Quadrant', 'Quay', 'Quays', 'Ramble', 'Ramp', 'Range', 'Reach', 'Reserve', 'Rest', 'Retreat', 'Ride', 'Ridge', 'Ridgeway', 'Right Of Way', 'Ring', 'Rise', 'River', 'Riverway', 'Riviera', 'Road', 'Roads', 'Roadside', 'Roadway', 'Ronde', 'Rosebowl', 'Rotary', 'Round', 'Route', 'Row', 'Rue', 'Run', 'Service Way', 'Siding', 'Slope', 'Sound', 'Spur', 'Square', 'Stairs', 'State Highway', 'Steps', 'Strand', 'Street', 'Strip', 'Subway', 'Tarn', 'Terrace', 'Thoroughfare', 'Tollway', 'Top', 'Tor', 'Towers', 'Track', 'Trail', 'Trailer', 'Triangle', 'Trunkway', 'Turn', 'Underpass', 'Upper', 'Vale', 'Viaduct', 'View', 'Villas', 'Vista', 'Wade', 'Walk', 'Walkway', 'Way', 'Wynd'
    );

    protected static $postcode = array('####');

    protected static $state = array(
        'Australian Capital Territory', 'New South Wales', 'Northern Territory', 'Queensland', 'South Australia', 'Tasmania', 'Victoria', 'Western Australia'
    );

    protected static $stateAbbr = array(
        'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC', 'WA'
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}}{{buildingLetter}} {{streetName}}',
        '{{secondaryAddress}} {{buildingNumber}} {{streetName}}',
    );

    protected static $secondaryAddressFormats = array(
        'Apt. ###',
        'Flat ##',
        'Suite ###',
        'Unit ##',
        'Level #',
        '### /',
        '## /',
        '# /',
    );

    /**
     * Returns a sane building letter
     * @example B
     */
    public static function buildingLetter()
    {
        return static::toUpper(static::randomElement(static::$buildingLetters));
    }
}
