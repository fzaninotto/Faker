<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Persistence\ObjectManager;
use Faker\Generator;

/**
 * Service class for populating a database using the Doctrine ORM or ODM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected int $batchSize;

    protected Generator $generator;

    protected ?ObjectManager $manager;

    protected array $entities = [];

    protected array $quantities = [];

    protected array $generateId = [];

    /**
     * Populator constructor.
     */
    public function __construct(Generator $generator, ?ObjectManager $manager = null, int $batchSize = 1000)
    {
        $this->generator = $generator;
        $this->manager = $manager;
        $this->batchSize = $batchSize;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
     * @param mixed $entity A Doctrine classname, or a \Faker\ORM\Doctrine\EntityPopulator instance
     * @param int   $number The number of entities to populate
     */
    public function addEntity(mixed $entity, int $number, array $customColumnFormatters = [], array $customModifiers = [], bool $generateId = false): void
    {
        if (!$entity instanceof EntityPopulator) {
            if (null === $this->manager) {
                throw new \InvalidArgumentException('No entity manager passed to Doctrine Populator.');
            }
            $entity = new EntityPopulator($this->manager->getClassMetadata($entity));
        }
        $entity->setColumnFormatters($entity->guessColumnFormatters($this->generator));
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }
        $entity->mergeModifiersWith($customModifiers);
        $this->generateId[$entity->getClass()] = $generateId;

        $class = $entity->getClass();
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * Please note that large amounts of data will result in more memory usage since the Populator will return
     * all newly created primary keys after executing.
     *
     * @param ObjectManager|null $entityManager A Doctrine connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute(?ObjectManager $entityManager = null): array
    {
        if (null === $entityManager) {
            $entityManager = $this->manager;
        }
        if (null === $entityManager) {
            throw new \InvalidArgumentException('No entity manager passed to Doctrine Populator.');
        }

        $insertedEntities = [];
        foreach ($this->quantities as $class => $number) {
            $generateId = $this->generateId[$class];
            for ($i = 0; $i < $number; ++$i) {
                $insertedEntities[$class][] = $this->entities[$class]->execute(
                    $entityManager,
                    $insertedEntities,
                    $generateId
                );
                if (0 === \count($insertedEntities) % $this->batchSize) {
                    $entityManager->flush();
                    $entityManager->clear($class);
                }
            }
            $entityManager->flush();
            $entityManager->clear($class);
        }

        return $insertedEntities;
    }
}
