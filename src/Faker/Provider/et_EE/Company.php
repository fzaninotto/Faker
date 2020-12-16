<?php

namespace Faker\Provider\et_EE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companySuffix}} {{lastName}}',
    );

    /**
     * @link https://investinestonia.com/business-in-estonia/establishing-company/legal-forms
     */
    protected static $companySuffix = array('OÜ', 'OÜ', 'OÜ', 'OÜ', 'OÜ', 'AS', 'AS', 'AS', 'AS', 'TÜ', 'UÜ', 'ühistu');
}
