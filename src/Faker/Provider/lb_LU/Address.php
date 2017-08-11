<?php

namespace Faker\Provider\lb_LU;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('1##', '##', '#');

    protected static $streetSuffixLong = array(
        'Gaass', 'Plaz', 'Strooss', 'Str.', 'Wee'
    );

    protected static $streetSuffixShort = array(
        'gaass', 'plaz', 'strooss', 'str.', 'wee'
    );

    protected static $postcode = array('####');

    // Source: https://lb.wikipedia.org/wiki/L%C3%ABscht_vun_de_L%C3%ABtzebuerger_Uertschaften,_H%C3%A4ff_a_Lieu-diten
    protected static $cityNames = array(
        'Ärenzdall', 'Bäerdref', 'Bartreng', 'Bauschelt', 'Bech', 'Beefort', 'Beetebuerg', 'Béiwen-Atert', 'Béiwen op der Atert', 'Bettenduerf', 'Betzder', 'Biekerech', 'Bierg', 'Biissen', 'Biwer', 'Buerschent', 'Bus', 'Déifferdeng', 'Diddeleng', 'Dikrech', 'Dippech', 'Duelem', 'Ell', 'Ëlwen', 'Esch-Sauer', 'Esch-Uelzecht', 'Ettelbréck', 'Feelen', 'Fëschbech', 'Fiels', 'Fluessweller', 'Fréiseng', 'Garnech', 'Géisdref', 'Gréiwemaacher', 'Groussbus', 'Habscht', 'Hesper', 'Hiefenech', 'Iechternach', 'Ierpeldeng', 'Jonglënster', 'Käerch', 'Käerjeng', 'Keel', 'Kielen', 'Kiischpelt', 'Klierf', 'Kolmer-Bierg', 'Konsdref', 'Konter', 'Koplescht', 'Leideleng', 'Lenneng', 'Lëntgen', 'Lëtzebuerg', 'Lëtzebuerg (Stad)', 'Luerenzweiler', 'Mäertert', 'Mäerzeg', 'Mamer', 'Manternach', 'Mecher', 'Miedernach', 'Miersch', 'Mompech', 'Monnerech', 'Munneref', 'Nidderaanwen', 'Noumer', 'Parc Housen', 'Péiteng', 'Pëtscht', 'Préizerdaul', 'Rammerech', 'Recken', 'Recken op der Mess', 'Réiden', 'Réimech', 'Reisduerf', 'Réiser', 'Rëmeleng', 'Rouspert', 'Sandweiler', 'Schëffleng', 'Schengen', 'Schëtter', 'Schieren', 'Sëll', 'Simmer', 'Stadbriedemes', 'Steesel', 'Stengefort', 'Stroossen', 'Suessem', 'Tandel', 'Tënten', 'Useldeng', 'Veianen', 'Viichten', 'Wäisswampech', 'Wal', 'Waldbëlleg', 'Waldbriedemes', 'Walfer', 'Wanseler', 'Weiler zum Tuerm', 'Wëntger', 'Wolz', 'Wuermeldeng'
    );

    // Source: https://lb.wikipedia.org/wiki/L%C3%ABscht_vun_de_L%C3%ABtzebuerger_Uertschaften,_H%C3%A4ff_a_Lieu-diten
    // French names are used in the street name generation
    protected static $cityNamesFrench = array(
        'Bascharage', 'Beaufort', 'Bech', 'Beckerich', 'Berdorf', 'Bertrange', 'Bettembourg', 'Bettendorf', 'Betzdorf', 'Bissen', 'Biwer', 'Boevange-sur-Attert', 'Boulaide', 'Bourscheid', 'Clervaux', 'Colmar-Berg', 'Consdorf', 'Contern', 'Diekirch', 'Differdange', 'Dippach', 'Dudelange', 'Echternach', 'Ell', 'Esch-sur-Alzette', 'Esch-sur-Sûre', 'Ettelbruck', 'FALSE', 'Flaxweiler', 'Frisange', 'Garnich', 'Goesdorf', 'Grevenmacher', 'Grosbous', 'Heffingen', 'Hesperange', 'Hobscheid', 'Junglinster', 'Kayl', 'Koerich', 'Kopstal', 'Larochette', 'Leudelange', 'Lintgen', 'Lorentzweiler', 'Luxembourg', 'Mamer', 'Manternach', 'Mecher', 'Mersch', 'Mertert', 'Mertzig', 'Mompach', 'Mondercange', 'Mondorf-les-Bains', 'Niederanven', 'Nommern', 'Pétange', 'Puetscheid', 'Rambrouch', 'Redange', 'Reisdorf', 'Remich', 'Roeser', 'Rosport', 'Rumelange', 'Saeul', 'Sandweiler', 'Sanem', 'Schengen', 'Schieren', 'Schifflange', 'Schuttrange', 'Stadtbredimus', 'Steinfort', 'Steinsel', 'Strassen', 'Tandel', 'Troisvierges', 'Tuntange', 'Useldange', 'Vianden', 'Vichten', 'Wahl', 'Waldbillig', 'Walferdange', 'Weiler-la-Tour', 'Weiswampach', 'Wiltz', 'Wincrange', 'Winseler', 'Wormeldange'
    );

    // Source: https://lb.wikipedia.org/wiki/L%C3%ABscht_vun_de_Staate_vun_der_Welt
    protected static $country = array(
        'Abchasien', 'Afghanistan', 'Albanien', 'Algerien', 'Andorra', 'Angola', 'Antigua a Barbuda', 'Argentinien', 'Armenien', 'Aserbaidschan', 'Australien', 'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belize', 'Belsch', 'Benin', 'Bergkarabach', 'Bhutan', 'Bolivien', 'Bosnien an Herzegowina', 'Botsuana', 'Brasilien', 'Brunei', 'Bulgarien', 'Burkina Faso', 'Burundi', 'Chile', 'Cookinselen', 'Costa Rica', 'Däitschland', 'Dänemark', 'Dominica', 'Dominikanesch Republik', 'Dschibuti', 'Ecuador', 'Egypten', 'Éisträich', 'El Salvador', 'Elfebeeküst', 'Equatorialguinea', 'Eritrea', 'Estland', 'Ethiopien', 'Fidschi', 'Finnland', 'Frankräich', 'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Grenada', 'Griicheland', 'Groussbritannien an Nordirland', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Holland', 'Honduras', 'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Israel', 'Italien', 'Jamaika', 'Japan', 'Jemen', 'Jordanien', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kolumbien', 'Komoren', 'Kongo, Demokratesch Republik', 'Kongo, Republik', 'Korea, Nord', 'Korea, Süd', 'Kosovo', 'Kroatien', 'Kuba', 'Kuwait', 'Laos', 'Lesotho', 'Lettland', 'Lëtzebuerg', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Madagaskar', 'Malawi', 'Malaysia', 'Maldiven', 'Mali', 'Malta', 'Marokko', 'Marshallinselen', 'Mauretanien', 'Mauritius', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Moldawien', 'Monaco', 'Mongolei', 'Montenegro', 'Mosambik', 'Myanmar', 'Namibia', 'Nauru', 'Neiséiland', 'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Nordzypern', 'Norwegen', 'Oman', 'Osttimor', 'Pakistan', 'Palau', 'Palestina', 'Panama', 'Papua-Neiguinea', 'Paraguay', 'Peru', 'Philippinnen', 'Polen', 'Portugal', 'Republik China', 'Ruanda', 'Rumänien', 'Russland', 'Saint Kitts an Nevis', 'Saint Vincent an d\'Grenadinnen', 'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Santa Lucia', 'São Tomé a Príncipe', 'Saudi-Arabien', 'Schwäiz', 'Schweden', 'Senegal', 'Serbien', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Somaliland', 'Spuenien', 'Sri Lanka', 'Südafrika', 'Sudan', 'Südossetien', 'Südsudan', 'Suriname', 'Swasiland', 'Syrien', 'Tadjikistan', 'Tansania', 'Thailand', 'Tierkei', 'Togo', 'Tonga', 'Transnistrien', 'Trinidad an Tobago', 'Tschad', 'Tschechien', 'Tunesien', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukrain', 'Ungarn', 'Uruguay', 'Usbekistan', 'Vanuatu', 'Vatikanstad', 'Venezuela', 'Vereenegt Arabesch Emiraten', 'Vereenegt Staate vun Amerika', 'Vietnam', 'Volleksrepublik China', 'Wäissrussland', 'Westsahara', 'Zentralafrikanesch Republik', 'Zypern'
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        'Rue {{firstName}} {{lastName}}',
        'Route de {{cityNameFrench}}',
        '{{lastName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}}, {{streetName}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::$streetSuffixLong);
    }

    public function cityNameFrench()
    {
        return static::randomElement(static::$cityNamesFrench);
    }
}
