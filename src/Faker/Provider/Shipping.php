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
        $formats = array('1Z******##########','############','T##########','#########');
        return static::bothify($this->generator->parse(static::randomElement($formats)));
    }

    public function fedex()
    {
        $formats = array('############','##############','#################');
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

    public function usps()
    {
        $formats = array('####################','??#########US');
        return static::bothify($this->generator->parse(static::randomElement($formats)));
    }

    public function dhl()
    {
        $formats = array('##########');
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

    public function tracking_number(){
        return $this->ups();
    }
    public function amazon_tracking_number(){
        //call_user_func();
        $shipping_companies = ["UPS(".$this->ups().")", "FedEx(".$this->fedex().")", "DHL(".$this->dhl().")"];
        return $shipping_companies[mt_rand(0, count($shipping_companies) - 1)];
    }

}
