<?php

namespace Faker\Provider\cs_CZ;

class Company extends \Faker\Provider\Company
{
    /**
     * @var array Czech company name formats.
     */
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} a {{lastName}} {{companySuffix}}',
    );

    /**
     * @var array Czech catch phrase formats.
     */
    protected static $catchPhraseFormats = array(
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} a {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}} a {{catchPhraseAttribute}}',
        'Ne{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
    );

    /**
     * @var array Czech nouns (used by the catch phrase format).
     */
    protected static $noun = array(
        'bezpečnost', 'pohodlí', 'seo', 'rychlost', 'testování', 'údržbu', 'odebírání', 'výstavbu',
        'návrh', 'prodej', 'nákup', 'zprostředkování', 'odvoz', 'přepravu', 'pronájem'
    );

    /**
     * @var array Czech verbs (used by the catch phrase format).
     */
    protected static $verb = array(
        'zajišťujeme', 'nabízíme', 'děláme', 'provozujeme', 'realizujeme', 'předstihujeme', 'mobilizujeme',
    );

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static $attribute = array(
        'pro vás', 'pro vaší službu', 'a jsme jednička na trhu', 'pro lepší svět', 'zdarma', 'se zárukou',
        's inovací', 'turbíny', 'mrakodrapů', 'lampiónků a svíček', 'bourací techniky', 'nákupních košíků',
        'vašeho webu', 'pro vaše zákazníky', 'za nízkou cenu', 'jako jediní na trhu', 'webu', 'internetu',
        'vaší rodiny', 'vašich známých', 'vašich stránek', 'čehokoliv na světě', 'za hubičku'
    );

    /**
     * Source - https://www.prace.cz/encyklopedie-profesi/
     */
    protected static $jobTitleFormat = array(
        'Account manager', 'Administrativní pracovník', 'Advokát', 'Advokátní a notářský koncipient', 'Agronom', 'Alergolog', 'Analytik prodeje', 'Anesteziolog', 'Animace 3D', 'Aranžér', 'Archeolog', 'Architekt', 'Architekt HW systémů', 'Archivář', 'Asistent klinických studií', 'Asistent soudce', 'Asistent v médiích, reklamě a PR', 'Asistent v pojišťovnictví', 'Asistentka', 'Astronom', 'Auditor', 'Autoelektrikář', 'Autoklempíř', 'Automechanik', 'Autočalouník',
        'Bankovní poradce', 'Bankovní specialista', 'Barman', 'Biolog', 'Business development manager',
        'CAD/CAM specialista', 'Category manager', 'Celní deklarant', 'Celník', 'Copywriter', 'Cukrář',
        'Číšník/servírka',
        'Chemický inženýr', 'Chemický inženýr', 'Chemik', 'Chemik', 'Chirurg', 'Chirurg',
        'Dabing', 'Databázový specialista', 'Daňový poradce', 'Delegát cestovní kanceláře', 'Dermatolog', 'Designer', 'Developer', 'Diabetolog', 'Direct marketing', 'Dispečer', 'Disponent', 'Domovník', 'DTP operátor', 'Dělník',
        'Editor', 'Ekolog', 'Ekonom', 'Elektrikář', 'Elektroinženýr', 'Elektromechanik', 'Elektromontér', 'Elektrotechnik', 'Energetik', 'Event specialist', 'Exekutor',
        'Fakturantka', 'Farmaceutický reprezentant', 'Filolog', 'Filosof', 'Finanční analytik', 'Finanční kontrolor', 'Finanční poradce', 'Finanční specialista', 'Finanční účetní', 'Finanční ředitel', 'Firemní bankéř', 'Fotograf', 'Fyzik', 'Fyzioterapeut',
        'Garanční technik', 'Generální ředitel', 'Genetik', 'Geodet', 'Geolog', 'Grafik', 'Gynekolog',
        'Hasič', 'Herec', 'Historik', 'Hlavní účetní', 'Hlídání dětí', 'Hodinář', 'Horník', 'Hospodyně', 'Hosteska', 'HR business partner', 'HR generalista', 'HR specialista', 'HR ředitel', 'Hutník', 'Hydrolog',
        'Inspektor', 'Instalatér', 'Internista', 'IT analytik', 'IT konzultant', 'IT security specialist', 'IT ředitel',
        'Jednatel', 'Jeřábník',
        'Kadeřnice', 'Kameraman', 'Kardiolog', 'Karosář', 'Keramik', 'Key account manager', 'Klempíř', 'Knihovník', 'Konstruktér', 'Kontrolor', 'Konzultant', 'Konzultant v médiích, reklamě a PR', 'Korektor', 'Kosmetička', 'Kouč', 'Kovář', 'Kreativec', 'Krejčí', 'Kuchař', 'Kurátor', 'Kurýr', 'Kvalitář',
        'Laborant', 'Lakýrník', 'Leasingový specialista', 'Lektor', 'Lesník', 'Letuška/stevard', 'Likvidátor pojistných událostí', 'Logistik', 'Logoped', 'Lékárenský laborant', 'Lékárník',
        'Makléř', 'Malíř', 'Manažer dopravy', 'Manažer klinických studií', 'Manažer kvality', 'Manažer partnerského prodeje', 'Manažer prodejního týmu', 'Manažer značky', 'Manažer řízení rizika', 'Manikérka', 'Marketingová komunikace', 'Marketingová strategie', 'Marketingový analytik', 'Marketingový výzkum', 'Marketingový ředitel', 'Maskér', 'Masér', 'Matematik', 'Mechanik', 'Media planner', 'Medical advisor', 'Merchandiser', 'Meteorolog', 'Metodik', 'Metrolog', 'Mistr', 'Moderátor', 'Monitor klinických studií', 'Mzdová účetní',
        'Neurolog', 'Notář', 'Novinář', 'Náborář', 'Nákupčí', 'Nákupčí pro prodejní řetězce', 'Námořník', 'Náměstek', 'Nástrojař',
        'Obchodní asistent', 'Obchodní referent', 'Obchodní zástupce', 'Obchodní ředitel', 'Oblastní manažer', 'Obráběč kovů', 'Obsluha stavebních strojů', 'Odborný asistent', 'Odborný asistent ve výzkumu a vývoji', 'Odhadce', 'Office manager', 'Oftalmolog', 'Onkolog', 'Online marketing', 'Operátor', 'Operátor CNC strojů', 'Operátor výroby', 'Optik', 'Ortoped', 'Osobní bankéř', 'Osvětlovač', 'Otorinolaryngolog', 'Ošetřovatel', 'Ošetřovatel zvířat',
        'Patolog', 'Pediatr', 'Pekař', 'Personalista', 'Personalista konzultant', 'Pilot', 'Plynař', 'Plánovač výroby', 'Podlahář', 'Podpora informačních systémů', 'Pojistný matematik', 'Pojistný zprostředkovatel', 'Pojišťovací poradce', 'Pokladní', 'Pokojská', 'Pokrývač', 'Policista', 'Pomocná síla do kuchyně', 'Porodní asistentka', 'Portýr', 'Pracovník audiovize', 'Pracovník back office', 'Pracovník call centra', 'Pracovník charity', 'Pracovník front office', 'Pracovník help desku', 'Pracovník letového provozu', 'Pracovník na přepážce', 'Pracovník na železnici', 'Pracovník ostrahy', 'Pracovník pneuservisu', 'Pracovník pohřební služby', 'Pracovník poštovního provozu', 'Pracovník reklamačního oddělení', 'Pracovník výzkumu a vývoje', 'Pracovník vězeňské služby', 'Procesní inženýr', 'Prodavač', 'Prodejce po telefonu', 'Prodejce vozů', 'Prodejce zájezdů', 'Produktový manažer', 'Produktový specialista', 'Produkční', 'Programátor', 'Project administrator', 'Projektant', 'Projektový manažer', 'Promotér', 'Promítač', 'Provozní ředitel', 'Práce doma', 'Právník', 'Průmyslový designér', 'Průvodce', 'Psychiatr', 'Psycholog', 'Přijímací technik', 'Přípravář', 'Přírodovědec',
        'Radiolog', 'Realitní makléř', 'Recepční', 'Referent', 'Referent životního prostředí', 'Regionální obchodní manažer', 'Regulatory manager', 'Rekvizitář', 'Revizní technik', 'Režisér', 'Risk manager', 'Rozpočtář',
        'Ředitel', 'Ředitel hotelu', 'Ředitel instituce', 'Ředitel kvality', 'Ředitel logistiky', 'Ředitel nákupu', 'Řezník', 'Řidič', 'Řidič vysokozdvižného vozíku',
        'Servisní technik', 'Sexuolog', 'Seřizovač CNC strojů', 'Skladník', 'Sklář', 'Sociolog', 'Sociální pracovník', 'Someliér', 'Soudce', 'Soudní zapisovatel', 'Specialista ERP', 'Specialista HR marketingu', 'Specialista ISO', 'Specialista logistiky', 'Specialista marketingu', 'Specialista mobilních technologií', 'Specialista na fondy EU', 'Specialista pohledávek', 'Specialista PR', 'Specialista pro odměňování a benefity', 'Specialista pro rozvoj a vzdělávání', 'Specialista splátkového prodeje', 'Specialista treasury', 'Specialista vývojového týmu', 'Specialista zabezpečovacích zařízení', 'Speciální pedagog', 'Speditér', 'Spojový manipulant', 'Sportovní lékař', 'Správce aplikačního SW', 'Správce majetku', 'Správce operačních systémů a sítí', 'Správce vozového parku', 'Správní rada', 'Statik', 'Statistik', 'Stavbyvedoucí', 'Stavební dozor', 'Stavěč dekorací', 'Stomatolog', 'Strojní inženýr', 'Strojní zámečník', 'Strojvedoucí', 'Středoškolský učitel', 'Střihač', 'Supervizor výroby', 'Supply chain specialist', 'Svářeč', 'SW architekt', 'Systémový inženýr',
        'Šička', 'Školník', 'Šéfkuchař', 'Šéfredaktor',
        'Tajemník', 'Tanečník', 'Taxikář', 'Technical writer', 'Technický ředitel', 'Technik BOZP', 'Technik dopravy', 'Technik HW', 'Technik potravinářské výroby', 'Technik požární ochrany', 'Technik v chemickém průmyslu', 'Technik v energetice', 'Technik v plynárenství', 'Technik ve stavebnictví', 'Technik ve strojírenství', 'Technik výroby', 'Technolog', 'Technolog potravinářské výroby', 'Technolog v chemickém průmyslu', 'Technolog v energetice', 'Technolog v plynárenství', 'Technolog v telekomunikacích', 'Technolog ve stavebnictví', 'Technolog ve strojírenství', 'Technolog výroby', 'Tesař', 'Tester', 'Tiskař', 'Tiskový mluvčí', 'Tlumočník', 'Topič', 'Trade marketing', 'Trenér - instruktor', 'Trenér - školitel', 'Trenér obchodních dovedností', 'Truhlář',
        'Uklízečka', 'Učitel mateřské školy', 'Učitel základní školy', 'Údržbář', 'Úvěrový specialista', 'Účetní', 'Účetní metodik', 'Úředník',
        'Vedoucí laboratoře', 'Vedoucí lékárny', 'Vedoucí odboru', 'Vedoucí prodejny', 'Vedoucí provozu', 'Vedoucí restaurace', 'Vedoucí servisu', 'Vedoucí skladu', 'Vedoucí týmu', 'Vedoucí výroby', 'Vedoucí vývoje', 'Vedoucí úseku prodejny', 'Veterinární lékař', 'Vkládání dat do počítače', 'Vodohospodář', 'Voják', 'Vrátný', 'Vychovatel', 'Vysokoškolský učitel', 'Výkonný ředitel', 'Výrobní ředitel', 'Vývojový inženýr', 'Vývojový technolog', 'Vědecko-výzkumný pracovník', 'Všeobecný lékař',
        'Webdesigner',
    );

    /**
     * @var array Company suffixes.
     */
    protected static $companySuffix = array('s.r.o.', 's.r.o.', 's.r.o.', 's.r.o.', 'a.s.', 'o.p.s.', 'o.s.');

    /**
     * Returns a random catch phrase noun.
     *
     * @return string
     */
    public function catchPhraseNoun()
    {
        return static::randomElement(static::$noun);
    }

    /**
     * Returns a random catch phrase attribute.
     *
     * @return string
     */
    public function catchPhraseAttribute()
    {
        return static::randomElement(static::$attribute);
    }

    /**
     * Returns a random catch phrase verb.
     *
     * @return string
     */
    public function catchPhraseVerb()
    {
        return static::randomElement(static::$verb);
    }

    /**
     * @return string
     */
    public function catchPhrase()
    {
        $format = static::randomElement(static::$catchPhraseFormats);

        return ucfirst($this->generator->parse($format));
    }

    /**
     * Generates valid czech IČO
     *
     * @see http://phpfashion.com/jak-overit-platne-ic-a-rodne-cislo
     * @return string
     */
    public function ico()
    {
        $ico = static::numerify('#######');
        $split = str_split($ico);
        $prod = 0;
        foreach (array(8, 7, 6, 5, 4, 3, 2) as $i => $p) {
            $prod += $p * $split[$i];
        }
        $mod = $prod % 11;
        if ($mod === 0 || $mod === 10) {
            return "{$ico}1";
        } elseif ($mod === 1) {
            return "{$ico}0";
        }

        return $ico . (11 - $mod);
    }
}
