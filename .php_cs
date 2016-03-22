<?php

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->fixers([
        'ordered_use',
        'short_array_syntax'
        ])
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__ . '/src')
    )
;