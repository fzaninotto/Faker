<?php

namespace Faker\Provider;

class Lorem
{
	protected static $wordList = array(
		'alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem', 'accusantium', 'doloremque', 'aperiam', 'eaque', 'ipsa', 'quae', 'ab', 'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto', 'beatae', 'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut', 'odit', 'aut', 'fugit', 'sed', 'quia', 'consequuntur', 'magni', 'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt', 'neque', 'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet', 'consectetur', 'adipisci', 'velit', 'sed', 'quia', 'non', 'numquam', 'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore', 'magnam', 'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad', 'minima', 'veniam', 'quis', 'nostrum', 'exercitationem', 'ullam', 'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas', 'sit', 'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea', 'commodi', 'consequatur', 'quis', 'autem', 'vel', 'eum', 'iure', 'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse', 'quam', 'nihil', 'molestiae', 'et', 'iusto', 'odio', 'dignissimos', 'ducimus', 'qui', 'blanditiis', 'praesentium', 'laudantium', 'totam', 'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos', 'dolores', 'et', 'quas', 'molestias', 'excepturi', 'sint', 'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut', 'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error', 'similique', 'sunt', 'in', 'culpa', 'qui', 'officia', 'deserunt', 'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga', 'et', 'harum', 'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita', 'distinctio', 'nam', 'libero', 'tempore', 'cum', 'soluta', 'nobis', 'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo', 'porro', 'quisquam', 'est', 'qui', 'minus', 'id', 'quod', 'maxime', 'placeat', 'facere', 'possimus', 'omnis', 'voluptas', 'assumenda', 'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem', 'quibusdam', 'et', 'aut', 'consequatur', 'vel', 'illum', 'qui', 'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur', 'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut', 'rerum', 'necessitatibus', 'saepe', 'eveniet', 'ut', 'et', 'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non', 'recusandae', 'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a', 'sapiente', 'delectus', 'ut', 'aut', 'reiciendis', 'voluptatibus', 'maiores', 'doloribus', 'asperiores', 'repellat'
	);

	public static function word()
	{
		return self::$wordList[array_rand(self::$wordList)];
	}
	
	/**
	 * Generate an array of random words
	 *
	 * @param integer $nb how many words to return
	 * @return array
	 */
	public static function words($nb = 3)
	{
		$words = array();
		for ($i=0; $i < $nb; $i++) {
			$words []= self::word();
		}
		return $words;
	}
	
	/**
	 * Generate a random sentence
	 *
	 * @param integer $nbWords around how many words the sentence should contain
	 * @return string
	 */
	public function sentence($nbWords = 3)
	{
		$words = self::words($nbWords + mt_rand(0, 4));
		$words[0] = ucwords($words[0]);
		
		return join($words, ' ') . '.';
	}
	
	/**
	 * Generate an array of sentences
	 *
	 * @param integer $nb how many sentences to return
	 * @return array
	 */
	public function sentences($nb = 3)
	{
		$sentences = array();
		for ($i=0; $i < $nb; $i++) {
			$sentences []= self::sentence();
		}
		return $sentences;
	}
	
	/**
	 * Generate a single paragraph
	 *
	 * @param integer $nbSentences around how many sentences the paragraph should contain
	 * @return string
	 */
	public function paragraph($nbSentences = 3)
	{
		return join(self::sentences($nbSentences + mt_rand(0, 3)), ' ');
	}
	
	/**
	 * Generate an array of paragraphs
	 *
	 * @param integer $nb how many paragraphs to return
	 * @return array
	 */
	public function paragraphs($nb)
	{
		$paragraphs = array();
		for ($i=0; $i < $nb; $i++) {
			$paragraphs []= self::paragraph();
		}
		return $paragraphs;
	}

	/**
	 * Generate a long text string
	 *
	 * @param integer $nbParagraphs around how many paragraphs the text should contain
	 * @return string
	 */
	public function lorem($nbParagraphs = 3)
	{
		return join(self::paragraphs($nbParagraphs + mt_rand(0, 3)), "\n");
	}
}