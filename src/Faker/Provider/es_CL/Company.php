<?php

namespace Faker\Provider\es_CL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{catchPhrase}}',
        '{{catchPhrase}} {{bs}} {{companySuffix}}',
        '{{catchPhrase}} {{catchPhrase}} {{companySuffix}}',
        '{{companyPrefix}} {{catchPhrase}} {{companySuffix}}',
        '{{catchPhrase}} {{companySuffix}}',
        '{{companyPrefix}} {{catchPhrase}}',
        '{{companyPrefix}} {{bs}}',
        '{{companyPrefix}} {{bs}}  {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}}-{{lastName}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}'
    );

    protected static $catchPhraseWords = array(
        array(
            'Adaptive', 'Advanced', 'Ameliorated', 'Assimilated', 'Automated', 'Balanced', 'Business-focused', 'Centralized', 'Cloned', 'Compatible', 'Configurable', 'Cross-group', 'Cross-platform', 'Customer-focused', 'Customizable', 'Decentralized', 'De-engineered', 'Devolved', 'Digitized', 'Distributed', 'Diverse', 'Down-sized', 'Enhanced', 'Enterprise-wide', 'Ergonomic', 'Exclusive', 'Expanded', 'Extended', 'Facetoface', 'Focused', 'Front-line', 'Fully-configurable', 'Function-based', 'Fundamental', 'Future-proofed', 'Grass-roots', 'Horizontal', 'Implemented', 'Innovative', 'Integrated', 'Intuitive', 'Inverse', 'Managed', 'Mandatory', 'Monitored', 'Multi-channelled', 'Multi-lateral', 'Multi-layered', 'Multi-tiered', 'Networked', 'Object-based', 'Open-architected', 'Open-source', 'Operative', 'Optimized', 'Optional', 'Organic', 'Organized', 'Persevering', 'Persistent', 'Phased', 'Polarised', 'Pre-emptive', 'Proactive', 'Profit-focused', 'Profound', 'Programmable', 'Progressive', 'Public-key', 'Quality-focused', 'Reactive', 'Realigned', 'Re-contextualized', 'Re-engineered', 'Reduced', 'Reverse-engineered', 'Right-sized', 'Robust', 'Seamless', 'Secured', 'Self-enabling', 'Sharable', 'Stand-alone', 'Streamlined', 'Switchable', 'Synchronised', 'Synergistic', 'Synergized', 'Team-oriented', 'Total', 'Triple-buffered', 'Universal', 'Up-sized', 'Upgradable', 'User-centric', 'User-friendly', 'Versatile', 'Virtual', 'Visionary', 'Vision-oriented',
        )
    );

    protected static $bsWords = array(
        array(
            'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize',
            'clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich',
            'synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'webservices', 'methodologies'
        )
    );

    protected static $companyPrefix = array('Asociación', 'Centro', 'Corporación', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes');
    protected static $companySuffix = array('Group','Chile','Latam.','Latinoamérica','e Hijos Ltda.', 'y Asoc. Ltda.', 'y compañia','Ltda.','Spa.','Limitada','E.I.R.L.', 'S.A.');

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

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
