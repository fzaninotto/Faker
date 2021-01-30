<?php

namespace Faker\Provider\en_KE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '07########','+2547########',
    );

    protected static $landline = array(

        '20#######','40#######','41#######','45#######','50#######','52#######','54#######'
    );

    protected static $safaricom = array(

        '070#######','071#######','072#######','0740######',
        '0741######','0742######','0748######','079#######',
    );

    protected static $telkom = array('077#######');

    protected static $airtel = array('0731######','0786######','0787######','0788######','0789######');

    protected static $equitel = array('0763######');

    protected static $faiba = array('0747######');

    /**
     * Get Kenyan telephone Landlines
     * @example 203643631
     */

    public function landline()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$landline)));
    }

    /**
     * Get Kenyan Safaricom Phone Numbers
     * @example 0712345678
     */

    public function safaricom()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$safaricom)));
    }

    /**
     * Get Kenyan Telkom Numbers
     * @example 0770000000
     */

    public function telkom()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$telkom)));
    }

    /**
     * Get Kenyan airtel numbers
     * @example 0730000000
     */

    public function airtel()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$airtel)));
    }

    /**
     * Get Kenyan Equitel Numbers
     * @example 0763000000
     */

    public function equitel()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$equitel)));
    }

    /**
     * Get Kenyan Faiba Numbers
     * @example 0747000000
     */

    public function faiba()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$faiba)));
    }
}
