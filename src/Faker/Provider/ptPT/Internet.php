<?php

namespace Faker\Provider\pt_PT;

class Internet extends \Faker\Provider\Internet
{

    /**
     * Convert accent chars to their canonical
     *
     * @link http://stackoverflow.com/questions/1017599/how-do-i-remove-accents-from-characters-in-a-php-string
     * @param string $string
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $a = array(
            'À', 'Á', 'Â', 'Ã', 'Ç', 'ç', 'È', 'É', 'Ê', 'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'Û', 'à', 'á', 'â', 'ã', 'è', 'é', 'ê', 'ì', 'í', 'î', 'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û',
        );
        $b = array(
            'A', 'A', 'A', 'A', 'C', 'c', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u',
        );

        return str_replace($a, $b, $string);
    }

    public function email()
    {
        return static::toAscii(parent::email());
    }

    public function username()
    {
        return static::toAscii(parent::username());
    }

    public function domainWord()
    {
        return static::toAscii(parent::domainWord());
    }
}
