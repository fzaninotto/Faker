<?php

namespace Faker\Provider\de_DE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} {{companyPartner}} {{companySuffix}}',
        '{{lastName}} {{companyPartner}}',
        '{{branchePrefix}}{{lastName}}',
        '{{lastName}} {{brancheSuffix}}',
        '{{branchePrefix}}{{lastName}} {{companySuffix}}',
        '{{lastName}} {{brancheSuffix}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('e.G.', 'e.V.', 'GbR', 'GbR', 'OHG mbH', 'GmbH & Co. OHG', 'AG & Co. OHG', 'GmbH', 'GmbH', 'GmbH', 'GmbH', 'AG', 'AG', 'AG', 'AG', 'KG', 'KG', 'KG', 'GmbH & Co. KG', 'GmbH & Co. KG', 'AG & Co. KG', 'Stiftung & Co. KG', 'KGaA', 'GmbH & Co. KGaA', 'AG & Co. KGaA', 'Stiftung & Co. KGaA');

    protected static $partner = array('und Partner', 'und Söhne', '& Partner', '& Söhne');

    protected static $branchePrefix = array('Autohaus ', 'Automobile ', 'Auto-', 'Auto',
                                            'IT ', 'IT-Service ', 'EDV ', 'Tierklinik ', 'Tierarztpraxis ', 'Tierärztliche Praxis Dr. {{firstName}} ', 'Dr. med. vet. ',
                                            'Bestattungsunternehmen ', 'Bestattungshaus ', 'Bestattungsdienst ',
                                            'Frisör ', 'Friseursalon ', 'Foto ', 'Mediengestalter ', 'Grafikstudio ',
                                            'Reiseagentur ', 'Reisebüro ', 'Sprachschule ', 'Personal Training ', 'Fitness ',
                                            'Elektro ', 'Reinigung ', 'Reinigungsfirma ', 'Werbeagentur ', 'Kosmetik ', 'Agentur ', 'Restaurant ',
                                            'Döner ', 'Konditorei ', 'Bäckerei ', 'Gasthaus ', 'Lebensmittel ', 'Verlag ',
                                            'Gemeinschaftspraxis Dr. ', 'Praxis Dr. med {{firstName}} ', 'Ingenieurbüro ');

    protected static $brancheSuffix = array('Reifen', 'IT', 'IT-Solutions', 'Bestattungen', 'Energie', 'Solar', 'Energy', 'Gebäudereinigung',
                                            'Dienstleistungen', 'Service', 'Werbeagentur', 'Holding', 'Experts', 'Personalmanagement',
                                            'Manufaktur', 'Bau', 'Holzbau', 'Rohbau', 'Vertrieb', 'Bauunternehmen', 'Bauherren', 'Engineering', 'Institut',
                                            'Photography', 'Fotografie', 'Hochzeitsfotografie', 'Media', 'Medienagentur', 'Medienwerkstatt', 'Verlag', 'Schule', 'Tours', 'Touristik', 'Reisen', 'Personal Coach');
}
