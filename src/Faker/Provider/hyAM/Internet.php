<?php

namespace Faker\Provider\hy_AM;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('com', 'com', 'am', 'am', 'am', 'net', 'org', 'ru', 'am', 'am', 'am');

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        $company = $this->generator->format('company');
        $companyElements = explode(' ', $company);
        $company = $companyElements[0];
        $company = preg_replace('/,/', '', $company);

        // Translit for armenian language
        $company = mb_strtolower($company, 'UTF-8');
        $company = str_replace(
            array('ու','ա','բ','գ','դ','ե','զ','է','ը','թ','ժ','ի','լ','խ','ծ','կ','հ','ձ','ղ','ճ','մ','յ','ն','շ','ո','չ','պ','ջ','ռ','ս','վ','տ','ր','ց','փ','ք','և','օ','ֆ',),
            array('u','a','b','g','d','e','z','e','y','t','zh','i','l','kh','ts','k','h','dz','gh','ch','m','y','n','sh','o','ch','p','j','r','s','v','t','r','ts','p','q','ev','o','f'),
            $company
        );

        return $company;
    }
}
