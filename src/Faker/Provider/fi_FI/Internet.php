<?php

namespace Faker\Provider\fi_FI;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array( 'gmail.com', 'yahoo.com', 'hotmail.com', 'jippii.fi', 'luukku.com' );
    protected static $tld = array( 'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'fi' );

    /**
     * Converts czech characters to their ASCII representation
     *
     * @param string $string
     *
     * @return string
     */
    private function toAscii( $string )
    {
        return preg_replace( '/[^a-zA-Z0-9@_\-.]/', '',
            str_replace( array( 'ä', 'ö', 'å', 'Ä', 'Ö', 'Å' ), array( 'a', 'o', 'a', 'A', 'O', 'A' ), $string ) );
        //return str_replace($from, $to, $string);
    }

    public function email()
    {
        return $this->toAscii( parent::email() );
    }
}
