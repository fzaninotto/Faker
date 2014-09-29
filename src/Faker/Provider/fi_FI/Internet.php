<?php

namespace Faker\Provider\fi_FI;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'jippii.fi', 'luukku.com');
    protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'fi');

	/**
	 * Converts czech characters to their ASCII representation
	 * @param string $string
	 * @return string
	 */
	private function toAscii($string)
	{
		$from = array('ü', 'Ü', 'ä', 'Ä', 'ö', 'Ö', 'å', 'Å', 'à', 'À', 'ç', 'Ç', 'é', 'É', 'è', 'È', 'ë', 'Ë', 'ï', 'Ï', 'î', 'Î', 'ô', 'Ô', 'ù', 'Ù', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ý', 'ý', 'Á', 'á', 'Í', 'í', 'É', 'é', 'Ó', 'ó', 'Ú', 'ú', '?', '?', '?', '?', '?', '?', '?', '?', 'ß');
		$to =   array('u', 'U', 'a', 'A', 'o', 'O', 'a', 'A', 'a', 'A', 'c', 'c', 'e', 'E', 'e', 'E', 'e', 'E', 'i', 'I', 'i', 'I', 'o', 'O', 'u', 'U', 'E', 'e', 'S', 's', 'C', 'c', 'R', 'r', 'Z', 'z', 'Y', 'y', 'A', 'a', 'I', 'i', 'E', 'e', 'O', 'o', 'U', 'u', 'U', 'u', 'D', 'd', 'T', 't', 'N', 'n', 'ss');

		return str_replace($from, $to, $string);
	}

	public function email()
	{
		return $this->toAscii(parent::email());
	}
}
