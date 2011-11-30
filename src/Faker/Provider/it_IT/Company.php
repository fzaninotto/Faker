<?php

namespace Faker\Provider\it_IT;

require_once __DIR__ . '/../Company.php';

class Company extends \Faker\Provider\Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
		'{{lastName}}-{{lastName}} {{companySuffix}}',
		'{{lastName}}, {{lastName}} e {{lastName}} {{companySuffix}}'
	);

    protected static $catchPhraseWords = array(
        array(
            'Abilità','Access','Adattatore','Algoritmo','Alleanza','Analizzatore','Applicazione','Approccio','Architettura','Archivio','Intelligenza artificiale','Array','Attitudine','Benchmark','Capacità','Sfida','Circuito','Collaborazione','Complessità','Concetto','Conglomerato','Contingenza','Core','Database','Data-warehouse','Definizione','Emulazione','Codifica','Criptazione','Firmware','Flessibilità','Previsione','Frame','framework','Funzione','Funzionalità','Interfaccia grafica','Hardware','Help-desk','Gerarchia','Hub','Implementazione','Infrastruttura','Iniziativa','Installazione','Set di istruzioni','Interfaccia','Soluzione internet','Intranet','Conoscenza base','Matrici','Matrice','Metodologia','Middleware','Migrazione','Modello','Moderazione','Monitoraggio','Moratoria','Rete','Architettura aperta','Sistema aperto','Orchestrazione','Paradigma','Parallelismo','Policy','Portale','Struttura di prezzo','Prodotto','Produttività','Progetto','Proiezione','Protocollo','Servizio clienti','Software','Soluzione','Standardizzazione','Strategia','Struttura','Successo','Sovrastruttura','Supporto','Sinergia','Task-force','Finestra temporale','Strumenti','Utilizzazione','Sito web','Forza lavoro'
        ),
        array(
            'adattiva','avanzata','migliorata','assimilata','automatizzata','bilanciata','centralizzata','compatibile','configurabile','cross-platform','decentralizzata','digitalizzata','distribuita','piccola','ergonomica','esclusiva','espansa','estesa','configurabile','fondamentale','orizzontale','implementata','innovativa','integrata','intuitiva','inversa','gestita','obbligatoria','monitorata','multi-canale','multi-laterale','open-source','operativa','ottimizzata','organica','persistente','polarizzata','proattiva','programmabile','progressiva','reattiva','riallineata','ricontestualizzata','ridotta','robusta','sicura','condivisibile','stand-alone','switchabile','sincronizzata','sinergica','totale','universale','user-friendly','versatile','virtuale','visionaria'
        ),
        array(
            '24 ore','24/7','terza generazione','quarta generazione','quinta generazione','sesta generazione','asimmetrica','asincrona','background','bi-direzionale','biforcata','bottom-line','coerente','coesiva','composita','sensibile al contesto','basta sul contesto','basata sul contenuto','dedicata','didattica','direzionale','discreta','dinamica','eco-centrica','esecutiva','esplicita','full-range','globale','euristica','alto livello','olistica','omogenea','ibrida','impattante','incrementale','intangibile','interattiva','intermediaria','locale','logistica','massimizzata','metodica','mission-critical','mobile','modulare','motivazionale','multimedia','multi-tasking','nazionale','neutrale','nextgeneration','non-volatile','object-oriented','ottima','ottimizzante','radicale','real-time','reciproca','regionale','responsiva','scalabile','secondaria','stabile','statica','sistematica','sistemica','tangibile','terziaria','uniforme','valore aggiunto'
        )
    );
	
	protected static $bsWords = array(
        array(
            'synergies','web-readiness','paradigms','markets','partnerships','infrastructures','platforms','initiatives','channels','eyeballs','communities','ROI','solutions','e-tailers','e-services','action-items','portals','niches','technologies','content','vortals','supply-chains','convergence','relationships','architectures','interfaces','e-markets','e-commerce','systems','bandwidth','infomediaries','models','mindshare','deliverables','users','schemas','networks','applications','metrics','e-business','functionalities','experiences','webservices','methodologies'
        ),
		array(
			'implement','utilize','integrate','streamline','optimize','evolve','transform','embrace','enable','orchestrate','leverage','reinvent','aggregate','architect','enhance','incentivize','morph','empower','envisioneer','monetize','harness','facilitate','seize','disintermediate','synergize','strategize','deploy','brand','grow','target','syndicate','synthesize','deliver','mesh','incubate','engage','maximize','benchmark','expedite','reintermediate','whiteboard','visualize','repurpose','innovate','scale','unleash','drive','extend','engineer','revolutionize','generate','exploit','transition','e-enable','iterate','cultivate','matrix','productize','redefine','recontextualize'
		),
		array(
			'clicks-and-mortar','value-added','vertical','proactive','robust','revolutionary','scalable','leading-edge','innovative','intuitive','strategic','e-business','mission-critical','sticky','one-to-one','24/7','end-to-end','global','B2B','B2C','granular','frictionless','virtual','viral','dynamic','24/365','best-of-breed','killer','magnetic','bleeding-edge','web-enabled','interactive','dot-com','sexy','back-end','real-time','efficient','front-end','distributed','seamless','extensible','turn-key','world-class','open-source','cross-platform','cross-media','synergistic','bricks-and-clicks','out-of-the-box','enterprise','integrated','impactful','wireless','transparent','next-generation','cutting-edge','user-centric','visionary','customized','ubiquitous','plug-and-play','collaborative','compelling','holistic','rich'
		)
	);

	protected static $companySuffix = array('SPA','e figli','Group', 's.r.l.');

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