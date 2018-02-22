<?php

namespace Faker\Provider\de_DE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('e.G.', 'e.V.', 'GbR', 'GbR', 'OHG mbH', 'GmbH & Co. OHG', 'AG & Co. OHG', 'GmbH', 'GmbH', 'GmbH', 'GmbH', 'AG', 'AG', 'AG', 'AG', 'KG', 'KG', 'KG', 'GmbH & Co. KG', 'GmbH & Co. KG', 'AG & Co. KG', 'Stiftung & Co. KG', 'KGaA', 'GmbH & Co. KGaA', 'AG & Co. KGaA', 'Stiftung & Co. KGaA');

    /**
     * @link https://www.becc.admin.ch/becc/public/bvz/beruf/grundbildungen
     */
    protected static $jobTitleFormat = array(
        'Abdichter', 'Anlagenführer', 'Architekturmodellbauer', 'Augenoptiker', 'Automatiker', 'Automatikmonteur', 'Automobil-Fachmann', 'Automobil-Mechatroniker', 'Bäcker-Konditor-Confiseur', 'Baumaschinenmechaniker',
        'Bauwerktrenner', 'Bekleidungsgestalter', 'Betonwerker', 'Boden-Parkettleger', 'Bootbauer', 'Bootfachwart', 'Buchhändler', 'Büchsenmacher', 'Bühnentänzer', 'Carrosserielackierer',
        'Carrosseriespengler', 'Coiffeur', 'Dachdecker', 'Dentalassistent', 'Detailhandelsfachmann', 'Diätkoch', 'Drogist', 'Drucktechnologe', 'Elektroinstallateur', 'Elektroniker',
        'Elektroplaner', 'Entwässerungstechnologe', 'Fahrradmechaniker', 'Fahrzeugschlosser', 'Fassadenbauer', 'Feinwerkoptiker', 'Fleischfachmann', 'Flexodrucker', 'Florist', 'Formenbauer',
        'Forstwart', 'Fotofachmann', 'Fotograf', 'Gärtner', 'Gebäudereiniger', 'Gebäudetechnikplaner', 'Geflügelfachmann', 'Geigenbauer', 'Gemüsegärtner', 'Geomatiker',
        'Gerüstbauer', 'Gestalter Werbetechnik', 'Gewebegestalter', 'Gipser-Trockenbauer', 'Glasapparatebauer', 'Glaser', 'Glasmaler', 'Gleisbauer', 'Goldschmied', 'Grafiker',
        'Graveur', 'Grundbauer', 'Gussformer', 'Gusstechnologe', 'Heizungsinstallateur', 'Holzbildhauer', 'Holzhandwerker', 'Hörsystemakustiker', 'Hotel-Kommunikationsfachmann', 'Hotelfachmann',
        'Hufschmied', 'ICT-Fachmann', 'Industriekeramiker', 'Industrielackierer', 'Industriepolsterer', 'Informatiker', 'Innendekorateur', 'Isolierspengler', 'Kältesystem-Monteur', 'Kältesystem-Planer',
        'Kaminfeger', 'Kaufmann', 'Keramiker', 'Koch', 'Konstrukteur', 'Kosmetiker', 'Küfer', 'Kunststofftechnologe', 'Laborant', 'Landmaschinenmechaniker',
        'Landwirt', 'Lebensmitteltechnologe', 'Logistiker', 'Lüftungsanlagenbauer', 'Maler', 'Marmorist', 'Matrose', 'Maurer', 'Mediamatiker', 'Medizinproduktetechnologe',
        'Messerschmied', 'Metallbauer', 'Metallbaukonstrukteur', 'Mikromechaniker', 'Mikrozeichner', 'Milchtechnologe', 'Montage-Elektriker', 'Motorgerätemechaniker', 'Motorradmechaniker', 'Müller',
        'Multimediaelektroniker', 'Musikinstrumentenbauer', 'Netzelektriker', 'Oberflächenbeschichter', 'Oberflächenveredler', 'Obstfachmann', 'Ofenbauer', 'Orthopädieschuhmacher', 'Orthopädist', 'Papiertechnologe',
        'Pferdefachmann', 'Pflästerer', 'Pharma-Assistent', 'Physiklaborant', 'Plattenleger', 'Podologe', 'Polygraf', 'Polymechaniker', 'Printmedienverarbeiter', 'Produktionsmechaniker',
        'Recyclist', 'Restaurationsfachmann', 'Säger', 'Sanitärinstallateur', 'Schreiner', 'Schuhmacher', 'Seilbahn-Mechatroniker', 'Spengler', 'Steinbildhauer', 'Steinmetz',
        'Steinwerker', 'Storenmonteur', 'Strassenbauer', 'Strassentransportfachmann', 'Systemgastronomiefachmann', 'Telematiker', 'Textiltechnologe', 'Theatermaler', 'Tierpfleger', 'Uhrmacher',
        'Veranstaltungsfachmann', 'Verpackungstechnologe', 'Weintechnologe', 'Winzer', 'Wohntextilgestalter', 'Zahntechniker', 'Zeichner', 'Zimmermann',
    );
}
