<?php

namespace Faker\Provider\es_CL;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('San', 'Santo', 'Santa','Punta','Puerto', 'Villa', 'El', 'Los', 'La', 'Las');
    protected static $citySuffix = array('del Puerto', 'de las Torres', 'Alta', 'Bajo', 'Medio','Este','Norte','Oeste','Sur');
    protected static $buildingNumber = array('####','###', '##', '#');
    protected static $streetPrefix = array(
        'Calle', 'Avenida', 'Plaza', 'Paseo', 'Rotonda', 'Camino','Autopista'
    );
    protected static $postcode = array('#######');
    protected static $state = array(
        'Arica y Parinacota','Tarapacá','Antofagasta','Atacama','Coquimbo','Valparaíso','Metropolitana','O`Higgins','Maule','Biobío','La Araucanía','Los Ríos','Los Lagos','Aysén','Magallanes'
    );
    protected static $district = array('Algarrobo', 'Alhue', 'Alto Biobio', 'Alto Del Carmen', 'Alto Hospicio', 'Ancud', 'Andacollo', 'Angol', 'Antofagasta', 'Antuco', 'Arauco', 'Arica', 'Aysen', 'Buin', 'Bulnes', 'Cabildo', 'Cabo De Hornos', 'Cabrero', 'Calama', 'Calbuco', 'Caldera', 'Calera De Tango', 'Calle Larga', 'Camarones', 'Camina', 'Canela', 'Canete', 'Carahue', 'Cartagena', 'Casablanca', 'Castro', 'Catemu', 'Cauquenes', 'Cerrillos', 'Cerro Navia', 'Chaiten', 'Chanaral', 'Chanco', 'Chepica', 'Chiguayante', 'Chile Chico', 'Chillan', 'Chillan Viejo', 'Chimbarongo', 'Cholchol', 'Chonchi', 'Cisnes', 'Cobquecura', 'Cochamo', 'Cochrane', 'Codegua', 'Coelemu', 'Coihueco', 'Coinco', 'Colbun', 'Colchane', 'Colina', 'Collipulli', 'Coltauco', 'Combarbala', 'Concepcion', 'Conchali', 'Concon', 'Constitucion', 'Contulmo', 'Copiapo', 'Coquimbo', 'Coronel', 'Corral', 'Coyhaique', 'Cunco', 'Curacautin', 'Curacavi', 'Curaco De Velez', 'Curanilahue', 'Curarrehue', 'Curepto', 'Curico', 'Dalcahue', 'Diego De Almagro', 'Donihue', 'El Bosque', 'El Carmen', 'El Monte', 'El Quisco', 'El Tabo', 'Empedrado', 'Ercilla', 'Estacion Central', 'Florida', 'Freire', 'Freirina', 'Fresia', 'Frutillar', 'Futaleufu', 'Futrono', 'Galvarino', 'General Lagos', 'Gorbea', 'Graneros', 'Guaitecas', 'Hijuelas', 'Hualaihue', 'Hualane', 'Hualpen', 'Hualqui', 'Huara', 'Huasco', 'Huechuraba', 'Illapel', 'Independencia', 'Iquique', 'Isla De Maipo', 'Isla De Pascua', 'Juan Fernandez', 'La Calera', 'La Cisterna', 'La Cruz', 'La Estrella', 'La Florida', 'La Granja', 'La Higuera', 'La Ligua', 'La Pintana', 'La Reina', 'La Serena', 'La Union', 'Lago Ranco', 'Lago Verde', 'Laguna Blanca', 'Laja', 'Lampa', 'Lanco', 'Las Cabras', 'Las Condes', 'Lautaro', 'Lebu', 'Licanten', 'Limache', 'Linares', 'Litueche', 'Llanquihue', 'Llay-Llay', 'Lo Barnechea', 'Lo Espejo', 'Lo Prado', 'Lolol', 'Loncoche', 'Longavi', 'Lonquimay', 'Los Alamos', 'Los Andes', 'Los Angeles', 'Los Lagos', 'Los Muermos', 'Los Sauces', 'Los Vilos', 'Lota', 'Lumaco', 'Machali', 'Macul', 'Mafil', 'Maipu', 'Malloa', 'Marchigue', 'Maria Elena', 'Maria Pinto', 'Mariquina', 'Maule', 'Maullin', 'Mejillones', 'Melipeuco', 'Melipilla', 'Molina', 'Monte Patria', 'Mulchen', 'Nacimiento', 'Nancagua', 'Natales', 'Navidad', 'Negrete', 'Ninhue', 'Niquen', 'Nogales', 'Nueva Imperial', 'Nunoa', 'Ohiggins', 'Olivar', 'Ollague', 'Olmue', 'Osorno', 'Ovalle', 'Padre Hurtado', 'Padre Las Casas', 'Paihuano', 'Paillaco', 'Paine', 'Palena', 'Palmilla', 'Panguipulli', 'Panquehue', 'Papudo', 'Paredones', 'Parral', 'Pedro Aguirre Cerda', 'Pelarco', 'Pelluhue', 'Pemuco', 'Penaflor', 'Penalolen', 'Pencahue', 'Penco', 'Peralillo', 'Perquenco', 'Petorca', 'Peumo', 'Pica', 'Pichidegua', 'Pichilemu', 'Pinto', 'Pirque', 'Pitrufquen', 'Placilla', 'Portezuelo', 'Porvenir', 'Pozo Almonte', 'Primavera', 'Providencia', 'Puchuncavi', 'Pucon', 'Pudahuel', 'Puente Alto', 'Puerto Montt', 'Puerto Octay', 'Puerto Varas', 'Pumanque', 'Punitaqui', 'Punta Arenas', 'Puqueldon', 'Puren', 'Purranque', 'Putaendo', 'Putre', 'Puyehue', 'Queilen', 'Quellon', 'Quemchi', 'Quilaco', 'Quilicura', 'Quilleco', 'Quillon', 'Quillota', 'Quilpue', 'Quinchao', 'Quinta De Tilcoco', 'Quinta Normal', 'Quintero', 'Quirihue', 'Rancagua', 'Ranquil', 'Rauco', 'Recoleta', 'Renaico', 'Renca', 'Rengo', 'Requinoa', 'Retiro', 'Rinconada', 'Rio Bueno', 'Rio Claro', 'Rio Hurtado', 'Rio Ibanez', 'Rio Negro', 'Rio Verde', 'Romeral', 'Saavedra', 'Sagrada Familia', 'Salamanca', 'San Antonio', 'San Bernardo', 'San Carlos', 'San Clemente', 'San Esteban', 'San Fabian', 'San Felipe', 'San Fernando', 'San Francisco De Mostazal', 'San Gregorio', 'San Ignacio', 'San Javier', 'San Joaquin', 'San Jose De Maipo', 'San Juan De La Costa', 'San Miguel', 'San Nicolas', 'San Pablo', 'San Pedro', 'San Pedro De Atacama', 'San Pedro De La Paz', 'San Rafael', 'San Ramon', 'San Rosendo', 'San Vicente', 'Santa Barbara', 'Santa Cruz', 'Santa Juana', 'Santa Maria', 'Santiago', 'Santiago Oeste', 'Santiago Sur', 'Santo Domingo', 'Sierra Gorda', 'Talagante', 'Talca', 'Talcahuano', 'Taltal', 'Temuco', 'Teno', 'Teodoro Schmidt', 'Tierra Amarilla', 'Til-Til', 'Timaukel', 'Tirua', 'Tocopilla', 'Tolten', 'Tome', 'Torres Del Paine', 'Tortel', 'Traiguen', 'Trehuaco', 'Tucapel', 'Valdivia', 'Vallenar', 'Valparaiso', 'Vichuquen', 'Victoria', 'Vicuna', 'Vilcun', 'Villa Alegre', 'Villa Alemana', 'Villarrica', 'Vina Del Mar', 'Vitacura', 'Yerbas Buenas', 'Yumbel', 'Yungay', 'Zapallar');
    protected static $country = array(
        'Afganistán','Albania','Alemania','Andorra','Angola','Antigua y Barbuda','Arabia Saudí','Argelia','Argentina','Armenia','Australia','Austria','Azerbaiyán',
        'Bahamas','Bangladés','Barbados','Baréin','Belice','Benín','Bielorrusia','Birmania','Bolivia','Bosnia-Herzegovina','Botsuana','Brasil','Brunéi Darusalam','Bulgaria','Burkina Faso','Burundi','Bután','Bélgica',
        'Cabo Verde','Camboya','Camerún','Canadá','Catar','Chad','Chile','China','Chipre','Ciudad del Vaticano','Colombia','Comoras','Congo','Corea del Norte','Corea del Sur','Costa Rica','Costa de Marfil','Croacia','Cuba',
        'Dinamarca','Dominica',
        'Ecuador','Egipto','El Salvador','Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia','España','Estados Unidos de América','Estonia','Etiopía',
        'Filipinas','Finlandia','Fiyi','Francia',
        'Gabón','Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guinea','Guinea Ecuatorial','Guinea-Bisáu','Guyana',
        'Haití','Honduras','Hungría',
        'India','Indonesia','Irak','Irlanda','Irán','Islandia','Islas Marshall','Islas Salomón','Israel','Italia',
        'Jamaica','Japón','Jordania',
        'Kazajistán','Kenia','Kirguistán','Kiribati','Kuwait',
        'Laos','Lesoto','Letonia','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Líbano',
        'Macedonia','Madagascar','Malasia','Malaui','Maldivas','Mali','Malta','Marruecos','Mauricio','Mauritania','Micronesia','Moldavia','Mongolia','Montenegro','Mozambique','México','Mónaco',
        'Namibia','Nauru','Nepal','Nicaragua','Nigeria','Noruega','Nueva Zelanda','Níger',
        'Omán',
        'Pakistán','Palaos','Panamá','Papúa Nueva Guinea','Paraguay','Países Bajos','Perú','Polonia','Portugal',
        'Reino Unido','Reino Unido de Gran Bretaña e Irlanda del Norte','República Centroafricana','República Checa','República Democrática del Congo','República Dominicana','Ruanda','Rumanía','Rusia',
        'Samoa','San Cristóbal y Nieves','San Marino','San Vicente y las Granadinas','Santa Lucía','Santo Tomé y Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Siria','Somalia','Sri Lanka','Suazilandia','Sudáfrica','Sudán','Suecia','Suiza','Surinam',
        'Tailandia','Tanzania','Tayikistán','Timor Oriental','Togo','Tonga','Trinidad y Tobago','Turkmenistán','Turquía','Tuvalu','Túnez',
        'Ucrania','Uganda','Uruguay','Uzbekistán',
        'Vanuatu','Venezuela','Vietnam',
        'Yemen','Yibuti',
        'Zambia','Zimbabue'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{lastName}} {{citySuffix}}',
        '{{cityPrefix}} {{lastName}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} #{{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} #{{buildingNumber}}, {{secondaryAddress}}',

    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{district}}",
        "{{streetAddress}}, {{district}}, {{state}}",
    );
    protected static $secondaryAddressFormats = array('Dpto. ###', 'Torre #','Block #','Hab. ###', 'Piso #', 'Piso ##');

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Barcelona'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'Barcelona'
     */
    public static function district()
    {
        return static::randomElement(static::$district);
    }
}