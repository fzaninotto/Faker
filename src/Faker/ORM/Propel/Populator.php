<?php

namespace Faker\ORM\Propel;

/**
 * Service class for populating a database using the Propel ORM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected $generator;
    protected $entities = array();
    protected $quantities = array();

    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
     * @param mixed $entity A Propel ActiveRecord classname, or a \Faker\ORM\Propel\EntityPopulator instance
     * @param int   $number The number of entities to populate
     */
    public function addEntity($entity, $number, $customColumnFormatters = array(), $customModifiers = array())
    {
        if (!$entity instanceof \Faker\ORM\Propel\EntityPopulator) {
            $entity = new \Faker\ORM\Propel\EntityPopulator($entity);
        }
        $entity->setColumnFormatters($entity->guessColumnFormatters($this->generator));
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }
        $entity->setModifiers($entity->guessModifiers($this->generator));
        if ($customModifiers) {
            $entity->mergeModifiersWith($customModifiers);
        }
        $class = $entity->getClass();
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param PropelPDO $con A Propel connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute($con = null)
    {
        if (null === $con) {
            $con = $this->getConnection();
        }
        $isInstancePoolingEnabled = \Propel::isInstancePoolingEnabled();
        \Propel::disableInstancePooling();
        $insertedEntities = array();
        $con->beginTransaction();
        foreach ($this->quantities as $class => $number) {
            for ($i=0; $i < $number; $i++) {
                $insertedEntities[$class][]= $this->entities[$class]->execute($con, $insertedEntities);
            }
        }
        $con->commit();
        if ($isInstancePoolingEnabled) {
            \Propel::enableInstancePooling();
        }

        return $insertedEntities;
    }

    protected function getConnection()
    {
        // use the first connection available
        $class = key($this->entities);

        if (!$class) {
            throw new \RuntimeException('No class found from entities. Did you add entities to the Populator ?');
        }

        $peer = $class::PEER;

        return \Propel::getConnection($peer::DATABASE_NAME, \Propel::CONNECTION_WRITE);
    }
}
