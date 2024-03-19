<?php

namespace Faker\ORM\CakePHP;

class Populator
{
    protected \Faker\Generator $generator;
    protected array $entities = [];
    protected array $quantities = [];
    protected array $guessers = [];

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function getGenerator(): \Faker\Generator
    {
        return $this->generator;
    }

    public function getGuessers(): array
    {
        return $this->guessers;
    }

    /**
     * @return $this
     */
    public function removeGuesser($name): static
    {
        if ($this->guessers[$name]) {
            unset($this->guessers[$name]);
        }

        return $this;
    }

    /**
     * @throws \Exception
     *
     * @return $this
     */
    public function addGuesser($class): static
    {
        if (!\is_object($class)) {
            $class = new $class($this->generator);
        }

        if (!\method_exists($class, 'guessFormat')) {
            throw new \RuntimeException('Missing required custom guesser method: '.$class::class.'::guessFormat()');
        }

        $this->guessers[$class::class] = $class;

        return $this;
    }

    /**
     * @return $this
     */
    public function addEntity($entity, $number, array $customColumnFormatters = [], array $customModifiers = []): static
    {
        if (!$entity instanceof EntityPopulator) {
            $entity = new EntityPopulator($entity);
        }

        $entity->columnFormatters = $entity->guessColumnFormatters($this);
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }

        $entity->modifiers = $entity->guessModifiers();
        if ($customModifiers) {
            $entity->mergeModifiersWith($customModifiers);
        }

        $class = $entity->class;
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;

        return $this;
    }

    public function execute(array $options = []): array
    {
        $insertedEntities = [];

        foreach ($this->quantities as $class => $number) {
            for ($i = 0; $i < $number; ++$i) {
                $insertedEntities[$class][] = $this->entities[$class]->execute($class, $insertedEntities, $options);
            }
        }

        return $insertedEntities;
    }
}
