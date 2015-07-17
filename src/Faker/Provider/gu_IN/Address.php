<?php

namespace Faker\Provider\en_US;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('મોટા', 'નાના', 'છોટા');
    protected static $citySuffix = array('પુર', 'ગઢ', 'કોટ', 'ગામ');
    
	
    protected static $postcode = array('######');
    protected static $state = array(
        'આંધ્ર પ્રદેશ', 'અરુણાચલ પ્રદેશ', 'આસામ', 'બિહાર', 'છત્તીસગઢ', 'ગોઆ', 'ગુજરાત', 'હરિયાણા', 'હિમાચલ પ્રદેશ', 'જમ્મુ અને કાશ્મીર', 'ઝારખંડ', 'કર્ણાટક', 'કેરળ', 'મધ્ય પ્રદેશ', 'મહારાષ્ટ્ર', 'મણિપુર', 'મેઘાલય', 'મિઝોરમ', 'નાગાલેંડ', 'ઑડિશા', 'પંજાબ', 'રાજસ્થાન', 'સિક્કિમ', 'તામિલ નાડુ', 'તેલંગાણા', 'ત્રિપુરા', 'ઉત્તર પ્રદેશ', 'ઉત્તરાંચલ/ઉત્તરાખંડ', 'પશ્ચિમ બંગાળ'
    );
   

}
