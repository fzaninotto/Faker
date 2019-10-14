<?php

namespace Faker\Provider;

class MobileCarrier extends Base
{
    protected static $networks = array(
                                  'AT&T',
                                  'Sprint',
                                  'Verizon Wireless',
                                  'T-Mobile',
                                  'U.S. Cellular',
                                 );


    public function carrier()
    {
        return static::randomElement(static::$networks);
    }//end carrier()
}//end class
