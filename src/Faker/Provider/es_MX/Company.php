<?php

namespace Faker\Provider\es_MX;

class Company extends \Faker\Provider\es_ES\Company
{
    protected static $companySuffix = array('y Asoc.', 'SA', 'SA. de CV.', 'SRL', 'SAPI');
}
