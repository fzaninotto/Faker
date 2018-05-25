<?php

namespace Faker\Provider;


class Shipping extends Base
{
    /**
     * @example
     * 1Z9999999999999999
     * 999999999999
     * T9999999999
     * 999999999
     */
    public function ups()
    {
        $formats = array('1Z################','############','T##########','#########');
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

}
