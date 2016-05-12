<?php

namespace Faker\Provider\pt_BR;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('São', 'Porto', 'Vila', 'Santa');
    protected static $citySuffix = array('do Norte', 'do Leste', 'do Sul', 'd\'Oeste');
    protected static $streetPrefix = array(
        'Av.', 'Avenida', 'R.', 'Rua', 'Travessa', 'Largo'
    );
    protected static $buildingNumber = array('#####', '####', '###', '##', '#');
    protected static $postcode = array('#####-###');
    protected static $state = array(
        'Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará',
        'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão',
        'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba',
        'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro',
        'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima',
        'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
    );
    protected static $stateAbbr = array(
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS',
        'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC',
        'SP', 'SE', 'TO'
    );
    protected static $region = array(
        'Centro-Oeste', 'Nordeste', 'Norte', 'Sudeste', 'Sul'
    );
    protected static $regionAbbr = array(
        'CO', 'N', 'NE', 'SE', 'S'
    );
    protected static $country = array(
        'Afeganistão', 'África do Sul', 'Albânia', 'Alemanha', 'Andorra',
        'Angola', 'Antigua e Barbuda', 'Arabia Saudita', 'Argélia',
        'Argentina', 'Armênia', 'Austrália', 'Áustria', 'Azerbaijão',
        'Bahamas', 'Bangladesh', 'Barbados', 'Barein', 'Belize', 'Benin',
        'Bielorrússia', 'Birmânia', 'Bolívia', 'Bósnia e Herzegovina',
        'Botsuana', 'Brasil', 'Brunei', 'Bulgária', 'Burkina Faso',
        'Burundi', 'Butão', 'Bélgica', 'Cabo Verde', 'Camboja', 'Camarões',
        'Canadá', 'Cazaquistão', 'Chad', 'Chile', 'China', 'Chipre',
        'Colômbia', 'Comoras', 'Congo', 'Coréia do Norte', 'Coréia do Sul',
        'Costa Rica', 'Costa do Marfim', 'Croácia', 'Cuba', 'Dinamarca',
        'Djibouti', 'Domênica', 'Equador', 'Egito', 'El Salvador',
        'Emirados Árabes Unidos', 'Eritrea', 'Eslováquia', 'Eslovênia',
        'Espanha', 'Estados Unidos da América', 'Estônia', 'Etiópia',
        'Filipinas', 'Finlândia', 'Fiji','França', 'Gabão', 'Gâmbia',
        'Georgia', 'Gana', 'Granada', 'Grécia', 'Guatemala',
        'Guiné Equatorial', 'Guiné Bissau', 'Guiana', 'Haiti', 'Honduras',
        'Hungria', 'Índia', 'Indonésia', 'Iraque', 'Irlanda', 'Irã',
        'Islândia', 'Ilhas Marshall', 'Ilhas Maurício', 'Ilhas Salomão',
        'Ilhas Samoa', 'Israel', 'Itália', 'Jamaica', 'Japão', 'Jordânia',
        'Kiribati', 'Kwait', 'Laos', 'Lesoto', 'Letônia', 'Libéria', 'Líbia',
        'Liechtenstein', 'Lituânia', 'Luxemburgo', 'Líbano', 'Macedônia',
        'Madagascar', 'Malásia', 'Malauí', 'Maldivas', 'Mali', 'Malta',
        'Marrocos', 'Mauritânia', 'Micronésia', 'Moldávia', 'Mongólia',
        'Montenegro', 'Moçambique', 'México', 'Mônaco', 'Namíbia', 'Nauru',
        'Nepal', 'Nicarágua', 'Nigéria', 'Noruega', 'Nova Guiné',
        'Nova Zelândia', 'Níger', 'Omã', 'Qatar', 'Quênia','Quirguistão',
        'Paquistão', 'Palaos', 'Panamá', 'Papua Nova Guiné', 'Paraguai',
        'Países Baixos', 'Peru', 'Polônia', 'Portugal', 'Reino Unido',
        'Reino Unido da Grã Bretanha e Irlanda do Norte',
        'República Centroafricana', 'República Checa',
        'República Democrática do Congo', 'República Dominicana', 'Ruanda',
        'Romênia', 'Rússia', 'San Cristõvao e Neves', 'San Marino',
        'São Vicente e as Granadinas', 'Santa Luzia', 'São Tomé e Príncipe',
        'Senegal', 'Sérvia', 'Seychelles', 'Serra Leoa', 'Singapura', 'Síria',
        'Somália', 'Sri Lanka', 'Suazilândia', 'Sudão', 'Suécia', 'Suiça',
        'Suriname', 'Tailândia', 'Tanzânia', 'Tajiquistão', 'Timor Leste',
        'Togo', 'Tonga', 'Trinidad e Tobago', 'Turcomenistão', 'Turquia',
        'Tuvalu', 'Tunísia', 'Ucrânia', 'Uganda', 'Uruguai', 'Uzbequistão',
        'Vaticano', 'Vanuatu', 'Venezuela', 'Vietnã', 'Yemen', 'Zâmbia',
        'Zimbábue'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}',
        '{{streetName}}, {{buildingNumber}}. {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{postcode}}, {{streetAddress}}\n{{city}} - {{stateAbbr}}",
    );
    protected static $secondaryAddressFormats = array(
        'Bloco A', 'Bloco B', 'Bloco C', 'Bc. # Ap. ##', 'Bc. ## Ap. ##',
        '#º Andar', '##º Andar', '###º Andar', 'Apto #', 'Apto ##', 'Apto ###',
        'Apto ####', 'F', 'Fundos', 'Anexo'
    );

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'São'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '6º Andar'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Brasília'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'DF'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
    
    /**
     * @example 'Nordeste'
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }
    
    /**
     * @example 'NE'
     */
    public static function regionAbbr()
    {
        return static::randomElement(static::$regionAbbr);
    }
}
