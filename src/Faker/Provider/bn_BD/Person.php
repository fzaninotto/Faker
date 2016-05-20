<?php

namespace Faker\Provider\bn_BD;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান','আনাম',  'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাহাবুব','মাসনুন', 'রহিম',  'রিফাত', 'হাসনাত', 'হাসান', 'প্রিয়' , 'পরিতোষ' , 'শুভ'
    );

    protected static $firstNameFemale = array(
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা', 'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'রহমত', 'আশা' , 'বীথি' , 'পরিনতা' , 'মৌ' , 'বৃষ্টি'
    );

    protected static $lastName = array(
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম' , 'চৌধুরী' , 'তালুকদার'
    );

    protected static $titleMale = array('মি.' , 'জনাবঃ');

    protected static $titleFemale = array('মিসেস.', 'মিস.' , 'জনাবাঃ');
}
