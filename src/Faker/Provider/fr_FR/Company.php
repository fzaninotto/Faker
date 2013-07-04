<?php

namespace Faker\Provider\fr_FR;

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
     * Use $maxSequentialDigits to make sure the digits at position 2 to 5 are not zeros.
     * @see http://en.wikipedia.org/wiki/Luhn_algorithm
     * @param  int    $maxSequentialDigits The maximum number of digits for the sequential number (> 0 && <= 4).
     * @return string
     */
    public static function siret($maxSequentialDigits = 2)
    {

        if ($maxSequentialDigits > 4 || $maxSequentialDigits <= 0) {
            $maxSequentialDigits = 2;
        }

        $controlDigit = mt_rand(0, 9);
        $siret = $sum = $controlDigit;

        $position = 2;
        for ($i = 0; $i < $maxSequentialDigits; $i++) {

            $sequentialDigit = mt_rand(0, 9);
            $isEven = $position++ % 2 === 0;

            $tmp = $isEven ? $sequentialDigit * 2 : $sequentialDigit;
            if ($tmp >= 10) $tmp -= 9;
            $sum += $tmp;

            $siret = $sequentialDigit . $siret;

        }

        $siret = str_pad($siret, 5, '0', STR_PAD_LEFT);

        $position = 6;
        for ($i = 0; $i < 7; $i++) {

            $digit = mt_rand(0, 9);
            $isEven = $position++ % 2 === 0;

            $tmp = $isEven ? $digit * 2 : $digit;
            if ($tmp >= 10) $tmp -= 9;
            $sum += $tmp;

            $siret = $digit . $siret;

        }

        $mod = $sum % 10;
        if ($mod === 0) {
            $siret = '00' . $siret;
        } else {
            // Use the odd position to avoid multiplying by two
            $siret = '0' . (10 - $mod) . $siret;
        }

        return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{5})/", "$1 $2 $3 $4", $siret);

    }

    /**
     * Generates a siren number (9 digits) that passes the Luhn check.
     * @see http://en.wikipedia.org/wiki/Luhn_algorithm
     * @return string
     */
    public static function siren()
    {
        $siren = '';
        $sum = 0;
        for ($i = 9; $i > 1; $i--) {

            $digit = mt_rand(0, 9);
            $isEven = $i % 2 === 0;

            $tmp = $isEven ? $digit * 2 : $digit;
            if ($tmp >= 10) {
                $tmp -= 9;
            }
            $sum += $tmp;

            $siren = $digit . $siren;

        }

        $mod = $sum % 10;
        if ($mod === 0) {
            $siren = '0' . $siren;
        } else {
            $siren = (10 - $mod) . $siren;
        }

        return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{3})/", "$1 $2 $3", $siren);

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
