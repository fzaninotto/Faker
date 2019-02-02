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
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান',  'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাসনুন', 'রহিম',  'রিফাত', 'হাসনাত', 'হাসান',
        'আরিফ', 'শামীম', 'মিলন', 'ইদ্রিস', ' রুদ্র', 'প্রণব', 'রিফাত', 'পরাগ', 'রানা',  'কাউসার', 'পারভেজ', 'জানে',
        'ফেরদৌস', 'হিমেল', ' রণি','মাহাবুব', ' আলামিন', 'মারুফ', 'নাইচ', 'ইব্রাহিম', 'হাবিবুর',  'সায়মন', 'পারভেজ', 'আব্দুল্লাহ',
        'মুক্তার', 'সোহাগ', ' মমিনুর','আনিস', 'রাব্বানি', 'রেদুয়ান', 'রমজান', 'জয়নাল', 'নাসির',  'মানিক', 'নুরমোহাম্মদ', 'হেলাল',
        'বাবলু', 'সেলিম', ' সাত্তার','সানোয়ার', 'ফজলু', 'আলম', 'জামাল', 'ইসহাক', 'হাকিম',  'ফিরোজ', 'নাইম', 'সোহেল',
        'ইকবাল', 'পাপ্পু', ' মোশাররফ',' আবুবকর', 'সাগর','মুকুট', 'বেলাল', 'কামরান', 'সালাম', 'ছাইদ',  'আবুহেনা', 'আলিম', 'কিবরিয়া'
    );

    protected static $firstNameFemale = array(
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা', 'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'রহমত',
    );

    protected static $lastName = array(
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম','ইসলাম','আল-দ্বীন','কুমার','রহমান'
    );

    protected static $titleMale = array('মি.');

    protected static $titleFemale = array('মিসেস.', 'মিস.');
}
