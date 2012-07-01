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
		'{{cpNoun}} {{cpVerb}} {{cpAttribute}}',
		'{{cpNoun}} et {{cpNoun}} {{cpAttribute}}',
		'{{cpNoun}} et {{cpNoun}} {{cpMultipleAttribute}}',
	);

	/**
	 * @var array French nouns (used by the catch phrase format).
	 */
	protected static $noun = array(
		'la sécurité', 'le plaisir', "l'efficacité", 'le confort', 'la simplicité', 'la qualité', "l'assurance",
		'la santé', 'la technologie', "l'art", 'le pouvoir', 'le prestige', "l'honneur", 'la chance',  'la faculté',
		'la possibilité', 'le droit', "l'avantage", 'la liberté'
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
		'moins', 'de manière efficace', 'plus rapidement', 'plus facilement', 'plus simplement', 'en toute tranquilité',
		'avant-tout', "d'abord", 'autrement', 'naturellement', 'à la pointe', 'sans soucis', "à l'état pur",
		'à sa source', 'sûre', 'pour la vie'
	);

	/**
	 * @var array End of sentences when using multiple nouns (used by the catch phrase format).
	 */
	protected static $multipleAttribute = array('sont nos priorités', 'sont nos points forts', 'font notre force',
		'qui assurent', 'sont nos passions', 'supérieurs'
	);

	/**
	 * @var array Company suffixes.
	 */
	protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.', 'et Fils');

	/**
	 * @var string Siren format.
	 */
	protected static $sirenFormat = "### ### ###";

	public function cpNoun()
	{
		return static::randomElement(static::$noun);
	}

	public function cpAttribute()
	{
		return static::randomElement(static::$attribute);
	}

	public function cpMultipleAttribute()
	{
		return static::randomElement(static::$multipleAttribute);
	}

	public function cpVerb()
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
		$format = static::randomElement(static::$catchPhraseFormats);

		return ucfirst($this->generator->parse($format));
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
}