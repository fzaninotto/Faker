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
		$from = array('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '?', '?', '?', '?', '?', '?', '?', '?');
		$to = array('E', 'e', 'S', 's', 'C', 'c', 'R', 'r', 'Z', 'z', 'Y', 'y', 'A', 'a', 'I', 'i', 'E', 'e', 'O', 'o', 'U', 'u', 'U', 'u', 'D', 'd', 'T', 't', 'N', 'n');

		return str_replace($from, $to, $string);
	}

	public function email()
	{
		return $this->toAscii(parent::email());
	}
}
