<?php
namespace Faker\Provider\ro_RO;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static $apartmentNumber = array('#', '##');
    protected static $floor = array('#', '##');
    protected static $block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static $blockSegment = array('A', 'B', 'C', 'D');

    protected static $streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Splaiul', 'Calea', 'P-ța'
    );

    protected static $streetPlainName = array(
        'Eroilor', 'Independenței', 'Memorandumului', 'Unirii', '1 Decembrie',
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Vlad Țepeș', 'Traian', 'Decebal', 'Horea', 'Cloșca', 'Crișan',
        'Louis Pasteur', 'Albert Einstein', 'Franklin Delano Rosevelt', 'J.J Rousseau', 'Petrache Poenaru', 'Henri Coandă', 'Constantin Brâncuși', 'Aurel Vlaicu', 'Ion Creangă', 'Mihai Eminescu',
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului',
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        'Jiului', 'Bega', 'Someș', 'Făget', 'Sinaia', 'Herculane', 'Padiș'
    );

    protected static $postcode = array('######');

    protected static $cityNames = array(
        'Abrud', 'Adjud', 'Agnita', 'Aiud', 'Alba Iulia', 'Aleșd', 'Alexandria', 'Amara', 'Anina', 'Aninoasa', 'Arad', 'Ardud', 'Avrig', 'Azuga', 'Babadag', 'Băbeni', 'Bacău', 'Baia de Aramă', 'Baia de Arieș', 'Baia Mare', 'Baia Sprie', 'Băicoi', 'Băile Govora', 'Băile Herculane', 'Băile Olănești', 'Băile Tușnad', 'Băilești', 'Bălan', 'Bălcești', 'Balș', 'Băneasa', 'Baraolt', 'Bârlad', 'Bechet', 'Beclean', 'Beiuș', 'Berbești', 'Berești', 'Bicaz', 'Bistrița', 'Blaj', 'Bocșa', 'Boldești-Scăeni', 'Bolintin-Vale', 'Borșa', 'Borsec', 'Botoșani', 'Brad', 'Bragadiru', 'Brăila', 'Brașov', 'Breaza', 'Brezoi', 'Broșteni', 'Bucecea', 'București', 'Budești', 'Buftea', 'Buhuși', 'Bumbești-Jiu', 'Bușteni', 'Buzău', 'Buziaș', 'Cajvana', 'Calafat', 'Călan', 'Călărași', 'Călimănești', 'Câmpeni', 'Câmpia Turzii', 'Câmpina', 'Câmpulung Moldovenesc', 'Câmpulung', 'Caracal', 'Caransebeș', 'Carei', 'Cavnic', 'Căzănești', 'Cehu Silvaniei', 'Cernavodă', 'Chișineu-Criș', 'Chitila', 'Ciacova', 'Cisnădie', 'Cluj-Napoca', 'Codlea', 'Comănești', 'Comarnic', 'Constanța', 'Copșa Mică', 'Corabia', 'Costești', 'Covasna', 'Craiova', 'Cristuru Secuiesc', 'Cugir', 'Curtea de Argeș', 'Curtici', 'Dăbuleni', 'Darabani', 'Dărmănești', 'Dej', 'Deta', 'Deva', 'Dolhasca', 'Dorohoi', 'Drăgănești-Olt', 'Drăgășani', 'Dragomirești', 'Drobeta-Turnu Severin', 'Dumbrăveni', 'Eforie', 'Făgăraș', 'Făget', 'Fălticeni', 'Făurei', 'Fetești', 'Fieni', 'Fierbinți-Târg', 'Filiași', 'Flămânzi', 'Focșani', 'Frasin', 'Fundulea', 'Găești', 'Galați', 'Gătaia', 'Geoagiu', 'Gheorgheni', 'Gherla', 'Ghimbav', 'Giurgiu', 'Gura Humorului', 'Hârlău', 'Hârșova', 'Hațeg', 'Horezu', 'Huedin', 'Hunedoara', 'Huși', 'Ianca', 'Iași', 'Iernut', 'Ineu', 'Însurăței', 'Întorsura Buzăului', 'Isaccea', 'Jibou', 'Jimbolia', 'Lehliu Gară', 'Lipova', 'Liteni', 'Livada', 'Luduș', 'Lugoj', 'Lupeni', 'Măcin', 'Măgurele', 'Mangalia', 'Mărășești', 'Marghita', 'Medgidia', 'Mediaș', 'Miercurea Ciuc', 'Miercurea Nirajului', 'Miercurea Sibiului', 'Mihăilești', 'Milișăuți', 'Mioveni', 'Mizil', 'Moinești', 'Moldova Nouă', 'Moreni', 'Motru', 'Murfatlar', 'Murgeni', 'Nădlac', 'Năsăud', 'Năvodari', 'Negrești', 'Negrești-Oaș', 'Negru Vodă', 'Nehoiu', 'Novaci', 'Nucet', 'Ocna Mureș', 'Ocna Sibiului', 'Ocnele Mari', 'Odobești', 'Odorheiu Secuiesc', 'Oltenița', 'Onești', 'Oradea', 'Orăștie', 'Oravița', 'Orșova', 'Oțelu Roșu', 'Otopeni', 'Ovidiu', 'Panciu', 'Pâncota', 'Pantelimon', 'Pașcani', 'Pătârlagele', 'Pecica', 'Petrila', 'Petroșani', 'Piatra Neamț', 'Piatra-Olt', 'Pitești', 'Ploiești', 'Plopeni', 'Podu Iloaiei', 'Pogoanele', 'Popești-Leordeni', 'Potcoava', 'Predeal', 'Pucioasa', 'Răcari', 'Rădăuți', 'Râmnicu Sărat', 'Râșnov', 'Recaș', 'Reghin', 'Reșița', 'Roman', 'Roșiorii de Vede', 'Rovinari', 'Roznov', 'Rupea', 'Săcele', 'Săcueni', 'Salcea', 'Săliște', 'Săliștea de Sus', 'Salonta', 'Sângeorgiu de Pădure', 'Sângeorz-Băi', 'Sânnicolau Mare', 'Sântana', 'Sărmașu', 'Satu Mare', 'Săveni', 'Scornicești', 'Sebeș', 'Sebiș', 'Segarcea', 'Seini', 'Sfântu Gheorghe', 'Sibiu', 'Sighetu Marmației', 'Sighișoara', 'Simeria', 'Șimleu Silvaniei', 'Sinaia', 'Siret', 'Slănic', 'Slănic-Moldova', 'Slatina', 'Slobozia', 'Solca', 'Șomcuta Mare', 'Sovata', 'Ștefănești, Argeș', 'Ștefănești, Botoșani', 'Ștei', 'Strehaia', 'Suceava', 'Sulina', 'Tălmaciu', 'Țăndărei', 'Târgoviște', 'Târgu Bujor', 'Târgu Cărbunești', 'Târgu Frumos', 'Târgu Jiu', 'Târgu Lăpuș', 'Târgu Mureș', 'Târgu Neamț', 'Târgu Ocna', 'Târgu Secuiesc', 'Târnăveni', 'Tășnad', 'Tăuții-Măgherăuș', 'Techirghiol', 'Tecuci', 'Teiuș', 'Țicleni', 'Timișoara', 'Tismana', 'Titu', 'Toplița', 'Topoloveni', 'Tulcea', 'Turceni', 'Turda', 'Turnu Măgurele', 'Ulmeni', 'Ungheni', 'Uricani', 'Urlați', 'Urziceni', 'Valea lui Mihai', 'Vălenii de Munte', 'Vânju Mare', 'Vașcău', 'Vaslui', 'Vatra Dornei', 'Vicovu de Sus', 'Victoria', 'Videle', 'Vișeu de Sus', 'Vlăhița', 'Voluntari', 'Vulcan', 'Zalău', 'Zărnești', 'Zimnicea', 'Zlatna'
    );

    protected static $counties = array(
        'Alba', 'Arad', 'Arges', 'Bacău', 'Bihor', 'Bistrița Năsăud', 'Botoșani', 'Brăila', 'Brașov', 'București', 'Buzău', 'Călărași', 'Caraș Severin', 'Cluj', 'Constanța', 'Covasna', 'Dâmbovița', 'Dolj', 'Galați', 'Giurgiu', 'Gorj', 'Harghita', 'Hunedoara', 'Ialomița', 'Iași', 'Ilfov', 'Maramureț', 'Mehedinți', 'Mureș', 'Neamț', 'Olt', 'Prahova', 'Sălaj', 'Satu Mare', 'Sibiu', 'Suceava', 'Teleorman', 'Timiș', 'Tulcea', 'Vâlcea', 'Vaslui', 'Vrancea'
    );

    protected static $cityFormats = array(
        '{{cityName}}',
        'Mun. {{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{streetPlainName}}',
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, et. {{floor}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, sc. {{blockSegment}}, et. {{floor}}, ap. {{apartmentNumber}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}, {{city}}, {{county}}, CP {{postcode}}",
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public static function block()
    {
        return static::numerify(static::randomElement(static::$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::$blockSegment);
    }

    public static function floor()
    {
        return static::numerify(static::randomElement(static::$floor));
    }

    public static function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName()
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Cluj'
     */
    public function county()
    {
        return static::randomElement(static::$counties);
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public function streetAddress()
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }
}
