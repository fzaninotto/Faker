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
	 * @var string Siren format.
	 */
	protected static $sirenFormat = "### ### ###";

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

			if (static::isCatchPhraseValid($catchPhrase)) {
				break;
			}
		} while (true);

		return $catchPhrase;
	}

	/**
	 * Generates a siret number (14 digits).
	 * It is in fact the result of the concatenation of a siren number (9 digits),
	 * a sequential number (4 digits) and a control number (1 digit) concatenation.
	 * If $maxSequentialDigits is invalid, it is set to 2.
	 *
	 * @param int $maxSequentialDigits The maximum number of digits for the sequential number (> 0 && <= 4).
	 *
	 * @return string
	 */
	public static function siret($maxSequentialDigits = 2)
	{
		if ($maxSequentialDigits > 4 || $maxSequentialDigits <= 0) {
			$maxSequentialDigits = 2;
		}

		$sequentialNumber = str_pad(static::randomNumber($maxSequentialDigits), 4, '0', STR_PAD_LEFT);

		return  static::numerify(static::siren() . ' ' . $sequentialNumber . '#');
	}

	/**
	 * Generates a siren number (9 digits).
	 *
	 * @return string
	 */
	public static function siren()
	{
		return static::numerify(static::$sirenFormat);
	}

	/**
	 * @var array An array containing string which should not appear twice in a catch phrase.
	 */
	private static $wordsWhichShouldNotAppearTwice = array('sécurité', 'simpl');

	/**
	 * Validates a french catch phrase.
     *
     * @param string $catchPhrase The catch phrase to validate.
	 *
	 * @return boolean (true if valid, false otherwise)
	 */
	public static function isCatchPhraseValid($catchPhrase)
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