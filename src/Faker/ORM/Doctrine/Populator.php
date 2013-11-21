<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use Faker\Generator;

/**
 * Service class for populating a database using the Doctrine ORM or ODM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected $generator;
    protected $manager;
    protected $entities = array();
    protected $quantities = array();
    protected $generateId = array();

    public function __construct(Generator $generator, ObjectManager $manager = null)
    {
        $this->generator = $generator;
        $this->manager = $manager;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
     * @param mixed $entity A Doctrine classname, or a \Faker\ORM\Doctrine\EntityPopulator instance
     * @param int $number The number of entities to populate
     * @param array $customColumnFormatters
     * @param array $customModifiers
     * @param bool $generateId
     * @throws \InvalidArgumentException
     */
    public function addEntity($entity, $number, $customColumnFormatters = array(), $customModifiers = array(), $generateId = false)
    {
        if (!$entity instanceof EntityPopulator) {
            if (null === $this->manager) {
                throw new \InvalidArgumentException("No entity manager passed to Doctrine Populator.");
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
     * @param EntityManager $entityManager A Propel connection object
     *
     * @throws \InvalidArgumentException
     * @return array A list of the inserted PKs
     */
    public function execute($entityManager = null)
    {
        if (null === $entityManager) {
            $entityManager = $this->manager;
        }
        if (null === $entityManager) {
            throw new \InvalidArgumentException("No entity manager passed to Doctrine Populator.");
        }

        $insertedEntities = array();
        foreach ($this->quantities as $class => $number) {
            $generateId = $this->generateId[$class];
            for ($i=0; $i < $number; $i++) {
                $insertedEntities[$class][]= $this->entities[$class]->execute($entityManager, $insertedEntities, $generateId);
            }
            $entityManager->flush();
        }

        return $insertedEntities;
    }
}
