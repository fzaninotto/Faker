<?php

namespace Faker\Provider\cs_CZ;

class Company extends \Faker\Provider\Company
{
    /**
     * @var array Czech company name formats.
     */
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} a {{lastName}} {{companySuffix}}',
    ];

    /**
     * @var array Czech catch phrase formats.
     */
    protected static array $catchPhraseFormats = [
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} a {{catchPhraseNoun}} {{catchPhraseAttribute}}',
        '{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}} a {{catchPhraseAttribute}}',
        'Ne{{catchPhraseVerb}} {{catchPhraseNoun}} {{catchPhraseAttribute}}',
    ];

    /**
     * @var array Czech nouns (used by the catch phrase format).
     */
    protected static array $noun = [
        'bezpečnost',
        'pohodlí',
        'seo',
        'rychlost',
        'testování',
        'údržbu',
        'odebírání',
        'výstavbu',
        'návrh',
        'prodej',
        'nákup',
        'zprostředkování',
        'odvoz',
        'přepravu',
        'pronájem',
    ];

    /**
     * @var array Czech verbs (used by the catch phrase format).
     */
    protected static array $verb = [
        'zajišťujeme',
        'nabízíme',
        'děláme',
        'provozujeme',
        'realizujeme',
        'předstihujeme',
        'mobilizujeme',
    ];

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static array $attribute = [
        'pro vás',
        'pro vaší službu',
        'a jsme jednička na trhu',
        'pro lepší svět',
        'zdarma',
        'se zárukou',
        's inovací',
        'turbíny',
        'mrakodrapů',
        'lampiónků a svíček',
        'bourací techniky',
        'nákupních košíků',
        'vašeho webu',
        'pro vaše zákazníky',
        'za nízkou cenu',
        'jako jediní na trhu',
        'webu',
        'internetu',
        'vaší rodiny',
        'vašich známých',
        'vašich stránek',
        'čehokoliv na světě',
        'za hubičku',
    ];

    /**
     * @var array Company suffixes.
     */
    protected static array $companySuffix = ['s.r.o.', 's.r.o.', 's.r.o.', 's.r.o.', 'a.s.', 'o.p.s.', 'o.s.'];

    /**
     * Returns a random catch phrase noun.
     */
    public function catchPhraseNoun(): string
    {
        return static::randomElement(static::$noun);
    }

    /**
     * Returns a random catch phrase attribute.
     */
    public function catchPhraseAttribute(): string
    {
        return static::randomElement(static::$attribute);
    }

    /**
     * Returns a random catch phrase verb.
     */
    public function catchPhraseVerb(): string
    {
        return static::randomElement(static::$verb);
    }

    public function catchPhrase(): string
    {
        $format = static::randomElement(static::$catchPhraseFormats);

        return \ucfirst($this->generator->parse($format));
    }

    /**
     * Generates valid czech IČO.
     *
     * @see http://phpfashion.com/jak-overit-platne-ic-a-rodne-cislo
     */
    public function ico(): string
    {
        $ico = static::numerify('#######');
        $split = \str_split($ico);
        $prod = 0;
        foreach ([8, 7, 6, 5, 4, 3, 2] as $i => $p) {
            $prod += $p * $split[$i];
        }
        $mod = $prod % 11;
        if (0 === $mod || 10 === $mod) {
            return "{$ico}1";
        } elseif (1 === $mod) {
            return "{$ico}0";
        }

        return $ico.(11 - $mod);
    }
}
