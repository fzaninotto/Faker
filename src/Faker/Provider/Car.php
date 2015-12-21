<?php

namespace Faker\Provider;

class Car extends Base
{
    const CAR_NAME = 'car';


    protected static $titleFormat = array(
        '{{titleCar}}',

    );

    protected static $fullCarName = [
        '{{fullCarName}}'
    ] ;





    protected static $carCode = [
        '{{carCode}}'
    ] ;




   /* @param null,
    * @return string
    * @example 'Audi'
    *
    * */
    public function fullCarName(){
       $format = static::randomElement() ;

       return $this->generator->parse($format) ;

    }



    /*
     * @param null
     * @return string
     * @example '- 2.3CL'
     * */

    public function carCode(){
        $format = static::randomElement() ;
        return $this->generator->parse($format) ;
    }






}
