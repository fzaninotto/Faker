<?php

namespace Faker\Provider\fi_FI;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}}, {{lastName}} and {{lastName}}'
    );

    protected static $catchPhraseWords = array(
        array(
            'Ainoa', 'Adaptiivinen', 'Automatisoitu', 'Avoin', 'Avoimen lähdekoodin', 'Digitalisoitu', 'Dynaaminen', 'Erikoistunut', 'Ennakoiva', 'Ergonominen', 'Hallittu', 'Hajautettu', 'Horisontaalinen', 'Integroitu', 'Innovatiivinen', 'Jaettava', 'Keskittynyt', 'Käyttäjäystävällinen', 'Laajenettu', 'Laajennettava', 'Lievittävä', 'Maailmanlaajuinen', 'Muokattava', 'Monitoroitu', 'Monikerroksinen', 'Ohjelmoitava', 'Optimoitu', 'Organisoitu', 'Orgaaninen', 'Rinnastettava', 'Räätälöitävä', 'Saumaton', 'Tasapainotettava', 'Täysin yhteensopiva', 'Yhteensopiva', 'Yksinomainen', 'Vaiheittainen', 'Virtuaalinen', 'Visionäärinen', 'Valinnainen', 'Verkostoitunut'
        ),
        array(
            '24/7', '3. sukupolven', '4. sukupolven', '5. sukupolven', '6. sukupolven', 'alueellinen', 'analysoiva', 'assymmetrinen', 'asynkroninen', 'asiakaslähtöinen', 'dynaaminen', 'globaali', 'heuristinen', 'hybridi', 'inkrementaalinen', 'interaktiivinen', 'kahtiajakautuva', 'kaksisuuntainen', 'konkreettinen', 'korkean tason', 'logistinen', 'johdonmukainen', 'maksimaalinen', 'moniajettava', 'multimedia', 'optimaalinen', 'optimoiva', 'omistautunut', 'paikallinen', 'reaaliaikainen', 'seuraavan sukupolven', 'skaalautuva', 'systeeminen'
        ),
        array(
            'algoritmi', 'yhteisö', 'analysaattori', 'sovellus', 'lähestymistapa', 'arkkitehtuuri', 'arkisto', 'ryhmä', 'sovitin', 'benchmark', 'kapasiteetti', 'tietokanta', 'piiri', 'emulaatio', 'konsepti', 'firmware', 'rakenne', 'funktio', 'rauta', 'help-desk', 'hierarkia', 'hubi', 'implementaatio', 'intranet', 'malli', 'ohjelmisto', 'ratkaisu', 'strategia', 'menestys', 'projekti', 'tuote', 'tuki', 'www-sivusto', 'synergia', 'protokolla', 'koodaus', 'ennuste', 'joustavuus', 'extranet', 'salaus', 'kompleksisuus', 'ydin', 'asenne', 'liitto', 'internetratkaisu', 'asennus', 'monitorointi', 'infrastruktuuri'
        )
    );

    protected static $bsWords = array(
        array(
            'implementoi', 'käyttää', 'integroi', 'optimoi', 'kehittää', 'muuntaa', 'omaksuu', 'mahdollistaa', 'orkestoi', 'uudelleenkeksii', 'kerää', 'kokoaa', 'kasvattaa', 'parantaa', 'helpottaa', 'toimittaa', 'antaa', 'täyttää', 'vapauttaa', 'ajaa', 'jatkaa', 'mullistaa', 'iteroi', 'generoi', 'hyödyntää', 'brandaa', 'muokkaa', 'kasvattaa', 'kytkee', 'innovoi', 'viljelee', 'visualisoi'
        ),
        array(
            'maailmanluokan', '24/7', 'maailmanlaajuisia', 'interaktiivisia', 'seksikkäitä', 'rikkaita', 'visionäärisiä', 'parhaita', 'viraaleja', 'dynaamisia', 'strategisia', 'vallankumouksellisia', '24/365', 'e-bisnes', 'virtuaalisia', 'intuitiivisia', 'ennakoivia', 'kitkattomia', 'jaettuja', 'reaaliaikaisia', 'huippuluokan', 'tehokkaita', 'suorituskykyisiä', 'pystyviä', 'laajennettavissa olevia', 'venyviä', 'yhteisvaikutteisia', 'seuraavan sukupolven', 'plug-and-play', 'yhteistyökykyisiä', 'kustomoituja', 'langattomia', 'selkeitä', 'avoimen lähdekoodin'
        ),
        array(
            'kanavia', 'silmämunia', 'ratkaisuja', 'e-palveluja', 'portaaleja', 'teknologioita', 'käyttäjiä', 'verkkoja', 'palveluita', 'ohjelmia', 'web-ohjelmistoja', 'kokemuksia', 'systeemejä', 'rajapintoja', 'yhteisöjä', 'markkinarakoja', 'skeemoja', 'arkkitehtuureja', 'malleja', 'sisältöä', 'mainoksia'
        )
    );

    protected static $companySuffix = array('OY', 'AB', 'OY AB', 'RY', 'OYj', 'Tmi.', 'Inc.', 'Ltd');

    /**
     * @example 'Ainoa 3.sukupolven ohjelmisto'
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }

    /**
     * @example 'hyödyntää maailmanlaajuisia yhteisöjä'
     */
    public function bs()
    {
        $result = array();
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join(' ', $result);
    }
}
