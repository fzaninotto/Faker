<?php

namespace Faker\Provider\it_IT;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} e {{lastName}} {{companySuffix}}',
        '{{job}}'
    );

    protected static $catchPhraseWords = array(
        array(
            'Abilità', 'Access', 'Adattatore', 'Algoritmo', 'Alleanza', 'Analizzatore', 'Applicazione', 'Approccio', 'Architettura', 'Archivio', 'Intelligenza artificiale', 'Array', 'Attitudine', 'Benchmark', 'Capacità', 'Sfida', 'Circuito', 'Collaborazione', 'Complessità', 'Concetto', 'Conglomerato', 'Contingenza', 'Core', 'Database', 'Data-warehouse', 'Definizione', 'Emulazione', 'Codifica', 'Criptazione', 'Firmware', 'Flessibilità', 'Previsione', 'Frame', 'framework', 'Funzione', 'Funzionalità', 'Interfaccia grafica', 'Hardware', 'Help-desk', 'Gerarchia', 'Hub', 'Implementazione', 'Infrastruttura', 'Iniziativa', 'Installazione', 'Set di istruzioni', 'Interfaccia', 'Soluzione internet', 'Intranet', 'Conoscenza base', 'Matrici', 'Matrice', 'Metodologia', 'Middleware', 'Migrazione', 'Modello', 'Moderazione', 'Monitoraggio', 'Moratoria', 'Rete', 'Architettura aperta', 'Sistema aperto', 'Orchestrazione', 'Paradigma', 'Parallelismo', 'Policy', 'Portale', 'Struttura di prezzo', 'Prodotto', 'Produttività', 'Progetto', 'Proiezione', 'Protocollo', 'Servizio clienti', 'Software', 'Soluzione', 'Standardizzazione', 'Strategia', 'Struttura', 'Successo', 'Sovrastruttura', 'Supporto', 'Sinergia', 'Task-force', 'Finestra temporale', 'Strumenti', 'Utilizzazione', 'Sito web', 'Forza lavoro'
        ),
        array(
            'adattiva', 'avanzata', 'migliorata', 'assimilata', 'automatizzata', 'bilanciata', 'centralizzata', 'compatibile', 'configurabile', 'cross-platform', 'decentralizzata', 'digitalizzata', 'distribuita', 'piccola', 'ergonomica', 'esclusiva', 'espansa', 'estesa', 'configurabile', 'fondamentale', 'orizzontale', 'implementata', 'innovativa', 'integrata', 'intuitiva', 'inversa', 'gestita', 'obbligatoria', 'monitorata', 'multi-canale', 'multi-laterale', 'open-source', 'operativa', 'ottimizzata', 'organica', 'persistente', 'polarizzata', 'proattiva', 'programmabile', 'progressiva', 'reattiva', 'riallineata', 'ricontestualizzata', 'ridotta', 'robusta', 'sicura', 'condivisibile', 'stand-alone', 'switchabile', 'sincronizzata', 'sinergica', 'totale', 'universale', 'user-friendly', 'versatile', 'virtuale', 'visionaria'
        ),
        array(
            '24 ore', '24/7', 'terza generazione', 'quarta generazione', 'quinta generazione', 'sesta generazione', 'asimmetrica', 'asincrona', 'background', 'bi-direzionale', 'biforcata', 'bottom-line', 'coerente', 'coesiva', 'composita', 'sensibile al contesto', 'basta sul contesto', 'basata sul contenuto', 'dedicata', 'didattica', 'direzionale', 'discreta', 'dinamica', 'eco-centrica', 'esecutiva', 'esplicita', 'full-range', 'globale', 'euristica', 'alto livello', 'olistica', 'omogenea', 'ibrida', 'impattante', 'incrementale', 'intangibile', 'interattiva', 'intermediaria', 'locale', 'logistica', 'massimizzata', 'metodica', 'mission-critical', 'mobile', 'modulare', 'motivazionale', 'multimedia', 'multi-tasking', 'nazionale', 'neutrale', 'nextgeneration', 'non-volatile', 'object-oriented', 'ottima', 'ottimizzante', 'radicale', 'real-time', 'reciproca', 'regionale', 'responsiva', 'scalabile', 'secondaria', 'stabile', 'statica', 'sistematica', 'sistemica', 'tangibile', 'terziaria', 'uniforme', 'valore aggiunto'
        )
    );

    protected static $bsWords = array(
        array(
            'partnerships', 'comunità', 'ROI', 'soluzioni', 'e-services', 'nicchie', 'tecnologie', 'contenuti', 'supply-chains', 'convergenze', 'relazioni', 'architetture', 'interfacce', 'mercati', 'e-commerce', 'sistemi', 'modelli', 'schemi', 'reti', 'applicazioni', 'metriche', 'e-business', 'funzionalità', 'esperienze', 'webservices', 'metodologie'
        ),
        array(
            'implementate', 'utilizzo', 'integrate', 'ottimali', 'evolutive', 'abilitate', 'reinventate', 'aggregate', 'migliorate', 'incentivate', 'monetizzate', 'sinergizzate', 'strategiche', 'deploy', 'marchi', 'accrescitive', 'target', 'sintetizzate', 'spedizioni', 'massimizzate', 'innovazione', 'guida', 'estensioni', 'generate', 'exploit', 'transizionali', 'matrici', 'ricontestualizzate'
        ),
        array(
            'valore aggiunto', 'verticalizzate', 'proattive', 'forti', 'rivoluzionari', 'scalabili', 'innovativi', 'intuitivi', 'strategici', 'e-business', 'mission-critical', '24/7', 'globali', 'B2B', 'B2C', 'granulari', 'virtuali', 'virali', 'dinamiche', 'magnetiche', 'web', 'interattive', 'sexy', 'back-end', 'real-time', 'efficienti', 'front-end', 'distributivi', 'estensibili', 'mondiali', 'open-source', 'cross-platform', 'sinergiche', 'out-of-the-box', 'enterprise', 'integrate', 'di impatto', 'wireless', 'trasparenti', 'next-generation', 'cutting-edge', 'visionari', 'plug-and-play', 'collaborative', 'olistiche', 'ricche'
        )
    );

    protected static $companySuffix = array('S.P.A.', 'e figli', 'Group', 'S.R.L.', 'S.A.S.', 'e fratelli', 'S.N.C.', 'SOC. COOP.', 'F.lli');

    protected static $job = array(
        'Accompagnatore turistico', 'Addestratore di cani', 'Agente di commercio', 'Agente di custodia', 'Agente immobiliare',
        'Agente di Polizia', 'Argicoltore', 'Aiuto commesso', 'Aiuto cuoco', 'Aiuto meccanico', 'Allenatore', 'Allevatore',
        'Allevatore di bestiame', 'Allevatore di pollame', 'Allevatore ittico', 'Amministratore di condominio', 'Amministratore di reti informatiche',
        'Animatore turistico', 'Antennista', 'Antropologo', 'Arbitro', 'Archeologo', 'Architetto', 'Archivista', 'Ascensorista',
        'Assistente alla clientela', 'Assistente di volo', 'Assistente domiciliare', 'Assistente sociale', 'Astronomo', 'Atleta professionista',
        'Attore', 'Attrezzista di scena', 'Attrezzista meccanico', 'Autotrasportatore', 'Avvocato',
        'Babysitter', 'Bagnino', 'Banditore d\'asta', 'Barbiere', 'Barman', 'Benzinaio', 'Bidello', 'Biologo', 'Biotecnologo',
        'Blogger', 'Bracciante agricolo',
        'Calzolaio', 'Cameraman', 'Cameriere', 'Cantante', 'Capostazione', 'Capotreno', 'Carpentiere edile', 'Carrozziere',
        'Cartografo', 'Cassiere di banca', 'Cassiere di negozio', 'Ceramista', 'Collaboratore familiare', 'Commercialista',
        'Commesso di vendita', 'Compositore di musica', 'Conciatore', 'Conduttore TV', 'Consulente del lavoro', 'Contabile',
        'Controllore biglietti', 'Controllore di volo', 'Copritetti', 'Coreografo', 'Correttore di bozze', 'Costumista', 'Critico d\'arte',
        'Croupier', 'Cuoco', 'Chef',
        'Danzatore professionista', 'Dietista', 'Diplomatico', 'Direttore commerciale', 'Direttore d\'albergo', 'Direttore d\'orchestra',
        'Dirigente della Pubblica Amministrazione', 'Docente formazione professionale', 'Docente universitario',
        'Editor', 'Editore', 'Educatore professionale', 'Elettrauto', 'Elettricista', 'Erborista', 'Estetista', 'Etnografo',
        'Fabbro', 'Facchino d\'albergo', 'Falegname', 'Farmacista', 'Fisico', 'Fisioterapista', 'Floricoltore', 'Fornaio',
        'Fotografo', 'Fotoreporter', 'Fresatore', 'Frutticoltore',
        'Gelataio', 'Genetista', 'Geografo', 'Geologo', 'Giardiniere', 'Giornalista', 'Giudice', 'Gommista', 'Grafico',
        'Gruista', 'Guardia giurata', 'Guida alpina', 'Guida naturalistica', 'Guida turistica',
        'Hostess',
        'Idrologo', 'Igienista mentale', 'Imbianchino', 'Impiegato', 'Infermiere', 'Ingegnere gestionale', 'Ingegnere',
        'Insegnante di danza', 'Insegnante di scuola materna', 'Insegnante di scuola primaria superiore', 'Insegnante di scuola secondaria superiore',
        'Interprete', 'Investigatore privato', 'Installatore meccanico', 'Instruttore di volo', 'Istruttore di scuola guida',
        'Lavapiatti', 'Linguista', 'Litografo', 'Logopedista',
        'Macellaio', 'Macchinista ferroviario', 'Magazziniere', 'Maggiordomo', 'Manovale edile', 'Manovale ferroviario',
        'Manutentore informatico', 'Marketing manager', 'Massaggiatore', 'Matematico', 'Meccanico aeronautico', 'Medico',
        'Medico dentista', 'Medico pediatra', 'Metereologo', 'Militare', 'Minatore', 'Modellatore ceramista', 'Modello',
        'Montatore', 'Mosaicista', 'Muratore',
        'Notaio',
        'Odontotecnico', 'Operaio', 'Operatore ecologico', 'Ottico', 'Orafo', 'Orologiaio', 'Ostetrica',
        'Pasticcere', 'Pastore', 'Pellicciaio', 'Pescatore', 'Piastrellista', 'Pilota civile', 'Pilota militare', 'Pizzaiolo',
        'Politologo', 'Polizziotto', 'Ponteggiatore', 'Postino', 'Produttore cinematografico', 'Progettista d\'interni',
        'Progettista software applicativo', 'Programmatore informatico', 'Psicologo', 'Psicoterapeuta', 'Pubblico ministro',
        'Ragioniere', 'Rappresentante farmaceutico', 'Redattore editoriale', 'Regista', 'Responsabile acquisti', 'Responsabile comunicazione',
        'Responsabile del personale', 'Restauratore', 'Revisore contabile', 'Ricercatore industria chimica', 'Rilegatore',
        'Saldatore', 'Sarto', 'Sceneggiatore', 'Scenografo', 'Scultore artistico', 'Segretario di direzione', 'SEO specialist', 'Sociologo',
        'Sommozzatore', 'Spazzacamino', 'Stalliere', 'Stampatore tessile', 'Stantman', 'Statistico', 'Storico', 'Stuccatore',
        'Suggeritore', 'Sviluppatore web',
        'Tappezziere', 'Tecnico del suono', 'Tecnico effetti speciali', 'Tecnico luci', 'Tecnico radio TV', 'Tessitore',
        'Tornitore metallurgico', 'Truccatore',
        'Verniciatore', 'Vetraio', 'Vigile del fuoco', 'Vigile urbano',
        'Webmaster', 'Web developer', 'Web designer',
    );

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = array();
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join($result, ' ');
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = array();
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return join($result, ' ');
    }
}
