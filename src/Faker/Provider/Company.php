<?php

namespace Faker\Provider;

class Company extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $jobTitle = array(
        'Account Executive', 'Account Manager', 'Accountant', 'Administrative Assistant', 'Assistant Manager', 'Assistant Store Manager', 'Business Analyst', 'Cashier', 'Cook', 'Customer Sales Representative', 'Customer Service', 'Driver', 'Engineer', 'Executive Assistant', 'Financial Analyst', 'Java Developer', 'Maintenance Technician', 'Manager', 'Merchandiser', 'Nurse', 'Occupational Therapist', 'Occupational Therapy Assistant', 'Pharmacist', 'Physcial Therapist', 'Program Manager', 'Project Manager', 'Receptionist', 'Registered Nurse', 'Restaurant Manager', 'Retail Sales Consultant', 'Sales', 'Sales Associate', 'Sales Manager', 'Sales Representative', 'Security Officer', 'Senior Accountant', 'Software Engineer', 'Speech Language Therapist', 'Store Manager', 'Systems Engineer', 'Technician', 'Teller',
    );

    protected static $companySuffix = array('Ltd');

    /**
     * @example 'Acme Ltd'
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    /*
     * @example 'Cashier'
     */
    public static function jobTitle()
    {
        return static::randomElement(static::$jobTitle);
    }
}
