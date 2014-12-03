<?php

namespace Faker\ORM\CakePHP;

class Populator
{

    protected $generator;
    protected $entities = [];
    protected $quantities = [];
    protected $guessers = [];

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function getGenerator()
    {
        return $this->generator;
    }

    public function getGuessers()
    {
        return $this->guessers;
    }

    public function removeGuesser($name)
    {
        if ($this->guessers[$name]) {
            unset($this->guessers[$name]);
        }
        return $this;
    }

    public function addGuesser($class)
    {
        if (!is_object($class)) {
            $class = new $class($this->generator);
        }

        if (!method_exists($class, 'guessFormat')) {
            throw new \Exception('Missing required custom guesser method: ' . get_class($class) . '::guessFormat()');
        }

        $this->guessers[get_class($class)] = $class;
        return $this;
    }

    public function addEntity($entity, $number, $customColumnFormatters = [], $customModifiers = [])
    {
        if (!$entity instanceof EntityPopulator) {
            $entity = new EntityPopulator($entity);
        }

        $entity->columnFormatters = $entity->guessColumnFormatters($this);
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }

        $entity->modifiers = $entity->guessModifiers($this);
        if ($customModifiers) {
            $entity->mergeModifiers($customModifiers);
        }

        $class = $entity->class;
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;
        return $this;
    }

    public function execute($options = [])
    {
        $insertedEntities = [];

        foreach ($this->quantities as $class => $number) {
            for ($i = 0; $i < $number; $i++) {
                $insertedEntities[$class][] = $this->entities[$class]->execute($class, $insertedEntities, $options);
            }
        }

        return $insertedEntities;
    }
}
