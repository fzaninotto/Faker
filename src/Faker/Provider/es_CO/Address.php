<?php

namespace Faker\Provider\es_CO;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $buildingNumber = array('###', '##', '#');
    protected static $streetPrefix = array(
        'Calle', 'Avenida', 'Av.', 'Cl.', 'Carretera', 'Callejón', 'Vereda'
    );
    protected static $streetSuffix = array('Norte', 'Este', ' Sur', ' Oeste');

    protected static $postcode = array('%#####');

    /**
     * @link https://en.wikipedia.org/wiki/Departments_of_Colombia
     */
    protected static $state = array(
        'Capital District', 'Amazonas', 'Antioquia', 'Arauca', 'Atlántico', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 'Casanare', 'Cauca',
        'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca', 'Guainía', 'Guaviare', 'Huila', 'La Guajira', 'Magdalena', 'Meta', 'Nariño',
        'Norte de Santander', 'Putumayo', 'Quindío', 'Risaralda', 'San Andrés y Providencia', 'Santander', 'Sucre', 'Tolima',
        'Valle del Cauca', 'Vaupés', 'Vichada');

    /**
     * The list is not final
     * @link https://en.wikipedia.org/wiki/Amazonas_Department
     * @link https://en.wikipedia.org/wiki/Arauca_Department#Municipalities
     * @link https://en.wikipedia.org/wiki/Atl%C3%A1ntico_Department
     * @link https://en.wikipedia.org/wiki/Cesar_Department
     */
    protected static $community = array(
        'Arauca', 'Arauquita', 'Cravo Norte', 'Fortul', 'Puerto Rondón', 'Saravena', 'Tame', 'El Encanto', 'La Chorrera', 'La Pedrera',
        'La Victoria', 'Leticia', 'Mirití-Paraná', 'Puerto Alegría', 'Puerto Arica', 'Puerto Nariño', 'Puerto Santander', 'Tarapacá',
        'Baranoa', 'Barranquilla', 'Campo de la Cruz', 'Candelaria', 'Galapa', 'Juan de Acosta', 'Luruaco', 'Malambo', 'Manatí',
        'Palmar de Varela', 'Piojó', 'Polonuevo', 'Ponedera', 'Puerto Colombia', 'Repelón', 'Sabanagrande', 'Sabanalarga', 'Santa Lucía',
        'Santo Tomás', 'Soledad', 'Suán', 'Tubará', 'Usiacurí'
    );
        
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
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
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}}, {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{city}} Edo. {{state}}",
        "{{streetAddress}}, {{city}} Edo. {{state}}, {{postcode}}"
    );
}
