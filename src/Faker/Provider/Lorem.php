<?php

namespace Faker\Provider;

class Lorem extends \Faker\Provider\Base
{
	protected static $wordList = array(
		'alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem', 'accusantium', 'doloremque', 'aperiam', 'eaque', 'ipsa', 'quae', 'ab', 'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto', 'beatae', 'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut', 'odit', 'aut', 'fugit', 'sed', 'quia', 'consequuntur', 'magni', 'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt', 'neque', 'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet', 'consectetur', 'adipisci', 'velit', 'sed', 'quia', 'non', 'numquam', 'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore', 'magnam', 'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad', 'minima', 'veniam', 'quis', 'nostrum', 'exercitationem', 'ullam', 'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas', 'sit', 'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea', 'commodi', 'consequatur', 'quis', 'autem', 'vel', 'eum', 'iure', 'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse', 'quam', 'nihil', 'molestiae', 'et', 'iusto', 'odio', 'dignissimos', 'ducimus', 'qui', 'blanditiis', 'praesentium', 'laudantium', 'totam', 'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos', 'dolores', 'et', 'quas', 'molestias', 'excepturi', 'sint', 'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut', 'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error', 'similique', 'sunt', 'in', 'culpa', 'qui', 'officia', 'deserunt', 'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga', 'et', 'harum', 'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita', 'distinctio', 'nam', 'libero', 'tempore', 'cum', 'soluta', 'nobis', 'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo', 'porro', 'quisquam', 'est', 'qui', 'minus', 'id', 'quod', 'maxime', 'placeat', 'facere', 'possimus', 'omnis', 'voluptas', 'assumenda', 'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem', 'quibusdam', 'et', 'aut', 'consequatur', 'vel', 'illum', 'qui', 'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur', 'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut', 'rerum', 'necessitatibus', 'saepe', 'eveniet', 'ut', 'et', 'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non', 'recusandae', 'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a', 'sapiente', 'delectus', 'ut', 'aut', 'reiciendis', 'voluptatibus', 'maiores', 'doloribus', 'asperiores', 'repellat'
	);

	/**
	 * @example 'Lorem'
	 */
	public static function word()
	{
		return static::randomElement(static::$wordList);
	}

	/**
	 * Generate an array of random words
	 *
	 * @example array('Lorem', 'ipsum', 'dolor')
	 * @param integer $nb how many words to return
	 * @return array
	 */
	public static function words($nb = 3)
	{
		$words = array();
		for ($i=0; $i < $nb; $i++) {
			$words []= static::word();
		}
		return $words;
	}

	/**
	 * Generate a random sentence
	 *
 	 * @example 'Lorem ipsum dolor sit amet.'
	 * @param integer $nbWords around how many words the sentence should contain
	 * @return string
	 */
	public static function sentence($nbWords = 6)
	{
		if ($nbWords <= 0) {
			return '';
		}

		$nbWords = ($nbWords * mt_rand(60, 140) / 100) + 1;

		$words = static::words($nbWords);
		$words[0] = ucwords($words[0]);

		return join($words, ' ') . '.';
	}

	/**
	 * Generate an array of sentences
	 *
	 * @example array('Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.')
	 * @param integer $nb how many sentences to return
	 * @return array
	 */
	public static function sentences($nb = 3)
	{
		$sentences = array();
		for ($i=0; $i < $nb; $i++) {
			$sentences []= static::sentence();
		}
		return $sentences;
	}

	/**
	 * Generate a single paragraph
	 *
 	 * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
	 * @param integer $nbSentences around how many sentences the paragraph should contain
	 * @return string
	 */
	public static function paragraph($nbSentences = 3)
	{
		if ($nbSentences <= 0) {
			return '';
		}

		$nbSentences = ($nbSentences * mt_rand(60, 140) / 100) + 1;

		return join(static::sentences($nbSentences), ' ');
	}

	/**
	 * Generate an array of paragraphs
	 *
	 * @example array($paragraph1, $paragraph2, $paragraph3)
	 * @param integer $nb how many paragraphs to return
	 * @return array
	 */
	public static function paragraphs($nb = 3)
	{
		$paragraphs = array();
		for ($i=0; $i < $nb; $i++) {
			$paragraphs []= static::paragraph();
		}
		return $paragraphs;
	}

	/**
	 * Generate a long text string
	 *
 	 * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
	 * @param integer $maxNbChars Maximum number of characters the text should contain
	 * @return string
	 */
	public function text($maxNbChars = 200)
	{
		// determine how many paragraphs are needed to reach the $maxNbChars once;
		$text = array();
		$size = 0;
		while ($size < $maxNbChars) {
			$paragraph = ($size ? "\n" : '') . static::paragraph();
			$text []= $paragraph;
			$size += strlen($paragraph);
		}
		array_pop($text);

		return join($text, '');
	}
}

