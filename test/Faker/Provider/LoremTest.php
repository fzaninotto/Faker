<?php

namespace Faker\Test\Provider;

use Faker\Provider\Lorem;
use Faker\Generator;

class LoremTest extends \PHPUnit_Framework_TestCase
{
	public function testText()
	{
		$generator = new Generator();
		$provider = new TestableLorem($generator);
		$singleParagraph = 'This is a test paragraph.';
		$this->assertEquals($singleParagraph, $provider->text(51));
		$this->assertEquals($singleParagraph . "\n" . $singleParagraph, $provider->text(52));
	}
}

class TestableLorem extends Lorem
{
	public static function paragraph($nbSentences = 3)
	{
		// 25 characters
		return 'This is a test paragraph.';
	}
}