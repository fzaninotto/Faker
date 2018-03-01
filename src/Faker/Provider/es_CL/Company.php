<?php

namespace Faker\Provider\es_CL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyType}} {{lastName}} {{companySuffix}}',
        '{{companyType}} {{lastName}} {{lastName}} {{companySuffix}}',
        );

    protected static $catchPhraseWords = array(
        array(
        'Adaptativo', 'Avanzado', 'Mejorado', 'Asimilado', 'Automatizado', 'Equilibrado', 'Centrado en el negocio', 'Centralizado', 'Clonado', 'Compatible', 'Configurable', 'Cruzado de grupos' ,' Cross-platform',' Customer-focused',' Personalizable','Descentralizado','De-engineered','Devolved','Digitized','Distributed','Diverso','Down-sized','Mejorado','Totalmente configurable','Basado en funciones','Fundamental','A prueba de futuro','Base','Horizontal','Implementado','Innovador','Integrado','Intuitivo','Inverso','Administrado','Obligatorio','Operativo','Optimizado','Opcional','Orgánico','Organizado','Perseverante','Persistente','Fase','Polarizado','Preferencial','Proactivo','Enfocado en los beneficios','Profundo','Programable','Progresivo','Clave pública','Centrado en la calidad','reactivo','realineado','recontextualizado','rediseñado','reducido','de ingeniería inversa','de tamaño adecuado','robusto','sin inconvenientes','Securo','Sincronizado','Sinérgico','Sinergizado','Orientación al equipo','Total','Triple-buffer','Universal','Up-sized','Actualizable','User-centric','User-friendly','Versatile','Virtual','Visionario'
        ),
        array(
        '24 horas', '24 por 7 ','3ra generación','4ta generación','5ta generación','6ta generación','activando','analizando','asimétrica','asíncrona','orientada a la actitud','fondo ','monitoreo de ancho de banda','bidireccional','bifurcado','balance','pensamiento claro','orientado al cliente','cliente-servidor','coherente','cohesivo','compuesto','sensible al contexto','basado en el contexto','basado en el contenido','dedicado','orientado a la demanda','didáctico','direccional','discreto','desintermedio','dinámico','eco-céntrico','empoderamiento','abarcando','equilibrado','ejecutivo','explícito','exudado','tolerante a fallas','primer plano','nuevo pensamiento','homogéneo','interactivo','intermedio','leadingedge','local','logístico','maximizado','metódico','crítico para la misión','móvil','modular','motivador','multimedia','multi-estado','multitarea','nacional','basado en necesidades','neutral','próxima generación','no volátil','orientado a objetos','óptimo','optimización','radical','tiempo real','recíproco','regional','receptivo','escalable','secundario','orientado a soluciones','estable','estático','sistemático','sistémico','valioso de sistema','tangible','terciario','transitorio','uniforme','tendencia ascendente','orientado al usuario','valor agregado','habilitado para la web','bien modulado','administración cero','cerodefecto','tolerancia cero'
        ),
        array(
        'capacidad', 'acceso', 'adaptador', 'algoritmo', 'alianza', 'analizador', 'aplicación', 'acercamiento', 'arquitectura', 'archivo', 'inteligencia artificial', 'conjunto', 'actitud ',' punto de referencia ',' gestión presupuestaria ',' capacidad ',' capacidad ',' desafío ',' circuito ',' colaboración ',' complejidad ',' concepto ',' conglomerado ',' contingencia ',' núcleo ', 'customerloyalty', 'database', 'data-warehouse', 'definition', 'emulation', 'encoding', 'encryption', 'extranet', 'firmware', 'flexibility', 'focusgroup', 'forecast', 'frame', 'framework', 'function', 'functionalities', 'hardware', 'help-desk', 'infraestructura', 'iniciativa', 'instalación', 'conjunto de instrucciones', 'interfaz', 'internetsolution', 'intranet', 'knowledgeuser', 'knowledgebase', 'localareanetwork', 'apalancamiento', 'matrices', 'matriz', 'metodología', 'middleware', 'migración', 'modelo', 'moderador', 'monitoreo', 'moratoria', 'proyección', 'protocolo', 'línea segura', 'escritorio de servicio', 'software', 'solución', 'estandarización', 'estrategia', 'estructura', 'éxito', 'superestructura', 'soporte' , 'sinergia', 'utilización', 'sitio web', 'workforce'
        )
    );

    protected static $bsWords = array(
        array(
            'implementar', 'utilizar', 'integrar', 'simplificar', 'optimizar', 'evolucionar', 'transformar', 'abrazar', 'habilitar', 'orquestar', 'apalancar', 'reinventar', 'agregar ',' arquitecto ',' mejorar ',' incentivar ',' transformar ',' habilitar ',' envisioneer ',' monetizar ',' aprovechar ',' facilitar ',' aprovechar ',' desintermedia ',' sinergizar ', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'sintetizar', 'entregar', 'malla', 'incubar', 'participar', 'maximizar', 'punto de referencia ',' agilizar ',' reintermediar ',' pizarra ',' visualizar ',' reutilizar ',' innovar ',' escalar ',' liberar ',' conducir ',' ampliar ',' ingeniero ',' revolucionar ', 'generar', 'explotar', 'transición', 'e-enable', 'iterar', 'cultivar', 'matriz', 'productizar', 'redefinir', 'recontextualizar'
        ),
        array(
            'valor agregado', 'vertical', 'proactivo', 'robusto', 'revolucionario', 'escalable', 'avanzado', 'innovador', 'intuitivo', 'estratégico ',' e-business ',' misión crítica ',' pegajoso ',' uno-a-uno ', '24 / 7', 'extremo a extremo', 'global', 'B2B', 'B2C ',' granular ',' sin fricción ',' virtual ',' viral ',' dinámico ',' 24/365 ',' best-of-breed ',' killer ',' magnetic ',' bleeding-edge ', 'web-enabled', 'interactivo', 'dot-com', 'sexy', 'back-end', 'en tiempo real', 'eficiente', 'front-end', 'distribuido', 'sin inconvenientes', 'extensible', 'llave en mano', 'clase mundial', 'fuente abierta', 'multiplataforma', 'cross-media', 'sinérgica', 'ladrillos y clics', 'fuera de -the-box ',' enterprise ',' integrado ',' impactante ',' inalámbrico ',' transparente ',' próxima generación ',' vanguardista ',' centrado en el usuario ',' visionario ',' personalizado ' ,' ubicuo ',' plug-and-play ',' colaborativo ',' convincente ',' holístico ',' rico '
        ),
        array(
            'sinergias', 'preparación para la web', 'paradigmas', 'mercados', 'asociaciones', 'infraestructuras', 'plataformas', 'iniciativas', 'canales', 'comunidades', 'ROI', 'soluciones', 'e-tailers', 'e-services', 'action-items', 'portales', 'nichos', 'tecnologías', 'contenido', 'vortals', 'supply-chains', 'convergence ',' relaciones ',' arquitecturas ',' interfaces ',' e-markets ',' e-commerce ',' sistemas ',' ancho de banda ',' infomediaries ',' modelos ',' mindshare ',' entregables ', 'usuarios', 'esquemas', 'redes', 'aplicaciones', 'métricas', 'e-business', 'funcionalidades', 'experiencias', 'servicios web', 'metodologías'
        )
    );

    protected static $companySuffix = array('EIRL', 'SRL', 'SA', 'LTDA', 'SPA');
    protected static $companyType = array('Construcciones', 'Transportes', 'Distribución de Materiales', 'Bodega', 'Mini Market', 'Supermercado', 'Botilleria', 'Café', 'Medicina Integral');

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
    
    public static function companyType()
    {
        return static::randomElement(static::$companyType);
    }
}
