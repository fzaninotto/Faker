<?php

namespace Faker;

require_once dirname(__FILE__).'/const.php';

$localeFactory = new \Faker\Locale\Factory();
$appLocaleFallbackCascade = array(
    $localeFactory::create(Locale\EN_US),
    $localeFactory::create(Locale\NULL_LOCALE)
);

$localeQualificationCascade = new Locale\ProviderQualificationCascade($appLocaleFallbackCascade);

Factory::init(
    $localeFactory,
    $localeQualificationCascade,
    new Provider\Factory()
);
