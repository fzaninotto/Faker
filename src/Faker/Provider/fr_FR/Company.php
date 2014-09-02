<?php

namespace Faker\Provider\fr_FR;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    /**
     * @var array French company name formats.
     */
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    /**
     * @var array French catch phrase formats.
     */
    protected static $catchPhraseFormats = array(
        '{{catchPhraseNoun}} {{catchPhraseVerb}} {{catchPhraseAttribute}}',
    );

    /**
     * @var array French nouns (used by the catch phrase format).
     */
    protected static $noun = array(
        'la sécurité', 'le plaisir', 'le confort', 'la simplicité', "l'assurance", "l'art", 'le pouvoir', 'le droit',
        'la possibilité', "l'avantage", 'la liberté'
    );

    /**
     * @var array French verbs (used by the catch phrase format).
     */
    protected static $verb = array(
        'de rouler', "d'avancer", "d'évoluer", 'de changer', "d'innover", 'de louer', "d'atteindre vos buts",
        'de concrétiser vos projets'
    );

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static $attribute = array(
        'de manière efficace', 'plus rapidement', 'plus facilement', 'plus simplement', 'en toute tranquilité',
        'avant-tout', 'autrement', 'naturellement', 'à la pointe', 'sans soucis', "à l'état pur",
        'à sa source', 'de manière sûre', 'en toute sécurité'
    );

    /**
     * @var array Company suffixes.
     */
    protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.', 'et Fils');

    protected static $siretNicFormats = array('####', '0###', '00#%');

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
     * Generates a french catch phrase.
     *
     * @return string
     */
    public function catchPhrase()
    {
        do {
            $format = static::randomElement(static::$catchPhraseFormats);
            $catchPhrase = ucfirst($this->generator->parse($format));

            if ($this->isCatchPhraseValid($catchPhrase)) {
                break;
            }
        } while (true);

        return $catchPhrase;
    }

    /**
     * Generates a siret number (14 digits) that passes the Luhn check.
     *
     * @see http://fr.wikipedia.org/wiki/Syst%C3%A8me_d'identification_du_r%C3%A9pertoire_des_%C3%A9tablissements
     * @return string
     */
    public function siret($formatted = true)
    {
        $siret = $this->siren(false);
        $nicFormat = static::randomElement(static::$siretNicFormats);
        $siret .= $this->numerify($nicFormat);
        $siret .= Luhn::computeCheckDigit($siret);
        if ($formatted) {
            $siret = substr($siret, 0, 3) . ' ' . substr($siret, 3, 3) . ' ' . substr($siret, 6, 3) . ' ' . substr($siret, 9, 5);
        }

        return $siret;
    }

    /**
     * Generates a siren number (9 digits) that passes the Luhn check.
     *
     * @see http://fr.wikipedia.org/wiki/Syst%C3%A8me_d%27identification_du_r%C3%A9pertoire_des_entreprises
     * @return string
     */
    public function siren($formatted = true)
    {
        $siren = $this->numerify('%#######');
        $siren .= Luhn::computeCheckDigit($siren);
        if ($formatted) {
            $siren = substr($siren, 0, 3) . ' ' . substr($siren, 3, 3) . ' ' . substr($siren, 6, 3);
        }

        return $siren;
    }

    /**
     * @var array An array containing string which should not appear twice in a catch phrase.
     */
    protected static $wordsWhichShouldNotAppearTwice = array('sécurité', 'simpl');

    /**
     * Validates a french catch phrase.
     *
     * @param string $catchPhrase The catch phrase to validate.
     *
     * @return boolean (true if valid, false otherwise)
     */
    protected static function isCatchPhraseValid($catchPhrase)
    {
        foreach (static::$wordsWhichShouldNotAppearTwice as $word) {
            // Fastest way to check if a piece of word does not appear twice.
            $beginPos = strpos($catchPhrase, $word);
            $endPos = strrpos($catchPhrase, $word);

            if ($beginPos !== false && $beginPos != $endPos) {
                return false;
            }
        }

        return true;
    }
}
