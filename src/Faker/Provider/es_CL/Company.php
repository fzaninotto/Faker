<?php

namespace Faker\Provider\es_CL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}',
        '{{lastName}}, {{lastName}} y {{lastName}}'
    );

    protected static $catchPhraseWords = array(
        array(
        'Adaptativo', 'Avanzado', 'Mejorado', 'Asimilado', 'Automatizado', 'Equilibrado', 'Centrado en el negocio', 'Centralizado', 'Clonado', 'Compatible', 'Configurable', 'Cruzado de grupos' ,' Cross-platform',' Customer-focused',' Personalizable','Descentralizado','De-engineered','Devolved','Digitized','Distributed','Diverso','Down-sized','Mejorado','Enterprise-wide','Ergonomic','Exclusive','Expanded','Extended','Facetoface','Focused','Front-line','Totalmente configurable','Basado en funciones','Fundamental','A prueba de futuro','Base','Horizontal','Implementado','Innovador','Integrado','Intuitivo','Inverso','Administrado','Obligatorio','Monitored','Multi-channel','Multi-lateral','Multi-layers','Multi-tiered','Networked','Object-based','Open-architected','Open-source','Operativo','Optimizado','Opcional','Orgánico','Organizado','Perseverante','Persistente','Fase','Polarizado','Preferencial','Proactivo','Enfocado en los beneficios','Profundo','Programable','Progresivo','Clave pública','Centrado en la calidad','reactivo','realineado','recontextualizado','rediseñado','reducido','de ingeniería inversa','de tamaño adecuado','robusto','sin inconvenientes','Securo','Sincronizado','Sinérgico','Sinergizado','Orientación al equipo','Total','Triple-buffer','Universal','Up-sized','Actualizable','User-centric','User-friendly','Versatile','Virtual','Visionario'
        ),
        array(
        '24 horas', '24 por 7 ','3ra generación','4ta generación','5ta generación','6ta generación','activando','analizando','asimétrica','asíncrona','orientada a la actitud','fondo ','monitoreo de ancho de banda','bidireccional','bifurcado','balance','pensamiento claro','orientado al cliente','cliente-servidor','coherente','cohesivo','compuesto','sensible al contexto','basado en el contexto','basado en el contenido','dedicado','orientado a la demanda','didáctico','direccional','discreto','desintermedio','dinámico','eco-céntrico','empoderamiento','abarcando','equilibrado','ejecutivo','explícito','exudado','tolerante a fallas','primer plano','nuevo pensamiento','full-range','global','grid-enabled','heuristic','high-level','holistic','homogéneo','human-resource','hybrid','impactful','incremental','intangible','interactivo','intermedio','leadingedge','local','logístico','maximizado','metódico','crítico para la misión','móvil','modular','motivador','multimedia','multi-estado','multitarea','nacional','basado en necesidades','neutral','próxima generación','no volátil','orientado a objetos','óptimo','optimización','radical','tiempo real','recíproco','regional','receptivo','escalable','secundario','orientado a soluciones','estable','estático','sistemático','sistémico','valioso de sistema','tangible','terciario','transitorio','uniforme','tendencia ascendente','orientado al usuario','valor agregado','habilitado para la web','bien modulado','administración cero','cerodefecto','tolerancia cero'
        ),
        array(
        'capacidad', 'acceso', 'adaptador', 'algoritmo', 'alianza', 'analizador', 'aplicación', 'acercamiento', 'arquitectura', 'archivo', 'inteligencia artificial', 'conjunto', 'actitud ',' punto de referencia ',' gestión presupuestaria ',' capacidad ',' capacidad ',' desafío ',' circuito ',' colaboración ',' complejidad ',' concepto ',' conglomerado ',' contingencia ',' núcleo ', 'customerloyalty', 'database', 'data-warehouse', 'definition', 'emulation', 'encoding', 'encryption', 'extranet', 'firmware', 'flexibility', 'focusgroup', 'forecast', 'frame', 'framework', 'function', 'functionalities', 'hardware', 'help-desk', 'infraestructura', 'iniciativa', 'instalación', 'conjunto de instrucciones', 'interfaz', 'internetsolution', 'intranet', 'knowledgeuser', 'knowledgebase', 'localareanetwork', 'apalancamiento', 'matrices', 'matriz', 'metodología', 'middleware', 'migración', 'modelo', 'moderador', 'monitoreo', 'moratoria', 'neural-net ',' openarchitecture ',' opensystem ',' orchestration ',' paradigma ',' paralelismo ',' policy ',' portal ',' pricingstructure ',' processimprovement ',' product ',' productivity ',' project ' , 'proyección', 'protocolo', 'línea segura', 'escritorio de servicio', 'software', 'solución', 'estandarización', 'estrategia', 'estructura', 'éxito', 'superestructura', 'soporte' , 'sinergia', 'systemengine', 'task-force', 'throughput', 'time-frame', 'toolset', 'utilización', 'sitio web', 'workforce'
        )
    );

    protected static $bsWords = array(
        array(
            'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize'
        ),
        array(
            'valor agregado', 'vertical', 'proactivo', 'robusto', 'revolucionario', 'escalable', 'avanzado', 'innovador', 'intuitivo', 'estratégico ',' e-business ',' misión crítica ',' pegajoso ',' uno-a-uno ', '24 / 7', 'extremo a extremo', 'global', 'B2B', 'B2C ',' granular ',' sin fricción ',' virtual ',' viral ',' dinámico ',' 24/365 ',' best-of-breed ',' killer ',' magnetic ',' bleeding-edge ', 'web-enabled', 'interactivo', 'dot-com', 'sexy', 'back-end', 'en tiempo real', 'eficiente', 'front-end', 'distribuido', 'sin inconvenientes', 'extensible', 'llave en mano', 'clase mundial', 'fuente abierta', 'multiplataforma', 'cross-media', 'sinérgica', 'ladrillos y clics', 'fuera de -the-box ',' enterprise ',' integrado ',' impactante ',' inalámbrico ',' transparente ',' próxima generación ',' vanguardista ',' centrado en el usuario ',' visionario ',' personalizado ' ,' ubicuo ',' plug-and-play ',' colaborativo ',' convincente ',' holístico ',' rico '
        ),
        array(
            'sinergias', 'preparación para la web', 'paradigmas', 'mercados', 'asociaciones', 'infraestructuras', 'plataformas', 'iniciativas', 'canales', 'comunidades', 'ROI', 'soluciones', 'e-tailers', 'e-services', 'action-items', 'portales', 'nichos', 'tecnologías', 'contenido', 'vortals', 'supply-chains', 'convergence ',' relaciones ',' arquitecturas ',' interfaces ',' e-markets ',' e-commerce ',' sistemas ',' ancho de banda ',' infomediaries ',' modelos ',' mindshare ',' entregables ', 'usuarios', 'esquemas', 'redes', 'aplicaciones', 'métricas', 'e-business', 'funcionalidades', 'experiencias', 'servicios web', 'metodologías'
        )
    );

    protected static $companySuffix = array('e Hijo', 'e Hijos', 'y Asoc.', 'y Flia.', 'EIRL', 'SRL', 'SA', 'LTDA', 'SPA');

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
