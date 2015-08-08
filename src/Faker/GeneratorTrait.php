<?php

namespace Faker;

trait GeneratorTrait
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @param string $locale
     * @param int    $seed
     *
     * @return Generator
     */
    protected function getGenerator($locale = Factory::DEFAULT_LOCALE, $seed = 9000)
    {
        if ($this->generator === null) {
            $this->generator = Factory::create($locale);
            $this->generator->seed($seed);
        }

        return $this->generator;
    }
}
