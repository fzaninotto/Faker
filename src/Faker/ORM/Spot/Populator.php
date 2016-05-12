<?php


namespace Faker\ORM\Spot;

use Spot\Locator;

/**
 * Service class for populating a database using the Spot ORM.
 */
class Populator
{
    protected $generator;
    protected $locator;
    protected $entities = array();
    protected $quantities = array();

    /**
     * Populator constructor.
     * @param \Faker\Generator $generator
     * @param Locator|null $locator
     */
    public function __construct(\Faker\Generator $generator, Locator $locator = null)
    {
        $this->generator = $generator;
        $this->locator = $locator;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
     * @param $entityName string Name of Entity object to generate
     * @param $number int The number of entities to populate
     * @param $customColumnFormatters array
     * @param $customModifiers array
     * @param $useExistingData bool Should we use existing rows (e.g. roles) to populate relations?
     */
    public function addEntity(
        $entityName,
        $number,
        $customColumnFormatters = array(),
        $customModifiers = array(),
        $useExistingData = false
    ) {
        $mapper = $this->locator->mapper($entityName);
        if (null === $mapper) {
            throw new \InvalidArgumentException("No mapper can be found for entity " . $entityName);
        }
        $entity = new EntityPopulator($mapper, $this->locator, $useExistingData);

        $entity->setColumnFormatters($entity->guessColumnFormatters($this->generator));
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }
        $entity->mergeModifiersWith($customModifiers);

        $this->entities[$entityName] = $entity;
        $this->quantities[$entityName] = $number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param Locator $locator A Spot locator
     *
     * @return array A list of the inserted PKs
     */
    public function execute($locator = null)
    {
        if (null === $locator) {
            $locator = $this->locator;
        }
        if (null === $locator) {
            throw new \InvalidArgumentException("No entity manager passed to Spot Populator.");
        }

        $insertedEntities = array();
        foreach ($this->quantities as $entityName => $number) {
            for ($i = 0; $i < $number; $i++) {
                $insertedEntities[$entityName][] = $this->entities[$entityName]->execute(
                    $insertedEntities
                );
            }
        }

        return $insertedEntities;
    }
}
