<?php

// Needed to get styleci-bridge loaded
require_once './vendor/autoload.php';

use SLLH\StyleCIBridge\ConfigBridge;

return ConfigBridge::create()
    ->setUsingCache(true)
;
