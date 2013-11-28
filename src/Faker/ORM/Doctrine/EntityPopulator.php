<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Faker\ORM\Doctrine\ColumnTypeGuesser;

/**
 * Service class for populating a table through a Doctrine Entity class.
 */
class EntityPopulator
{
    /**
     * @var ClassMetadata
     */
    protected $class;
    /**
     * @var array
     */
    protected $columnFormatters = array();
    /**
     * @var array
     */
    protected $modifiers = array();

    /**
     * Class constructor.
     *
     * @param ClassMetadata $class
     */
    public function __construct(ClassMetadata $class)
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class->getName();
    }

    public function setColumnFormatters($columnFormatters)
    {
        $this->columnFormatters = $columnFormatters;
    }

    public function getColumnFormatters()
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters)
    {
        $this->columnFormatters = array_merge($this->columnFormatters, $columnFormatters);
    }

    public function setModifiers(array $modifiers)
    {
        $this->modifiers = $modifiers;
    }

    public function getModifiers()
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith(array $modifiers)
    {
        $this->modifiers = array_merge($this->modifiers, $modifiers);
    }

    public function guessColumnFormatters(\Faker\Generator $generator)
    {
        $formatters = array();
        $nameGuesser = new \Faker\Guesser\Name($generator);
        $columnTypeGuesser = new ColumnTypeGuesser($generator);
        foreach ($this->class->getFieldNames() AS $fieldName) {
            if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) {
                continue;
            }

            if ($formatter = $nameGuesser->guessFormat($fieldName)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
        }

        foreach ($this->class->getAssociationNames() AS $assocName) {
            if ($this->class->isCollectionValuedAssociation($assocName)) {
                continue;
            }

            $relatedClass = $this->class->getAssociationTargetClass($assocName);

            $unique = false;
            $mappings = $this->class->getAssociationMappings();
            foreach ($mappings as $mapping) {
                if ($mapping['targetEntity'] == $relatedClass) {
                    if ($mapping['type'] == ClassMetadata::ONE_TO_ONE) {
                        $unique = true;
                        break;
                    }
                }
            }

            $index = 0;
            $formatters[$assocName] = function($inserted) use ($relatedClass, &$index, $unique) {
                if ($unique && isset($inserted[$relatedClass])) {
                    return $inserted[$relatedClass][$index++];
                } elseif (isset($inserted[$relatedClass])) {
                    return $inserted[$relatedClass][mt_rand(0, count($inserted[$relatedClass]) - 1)];
                }

                return null;
            };
        }

        return $formatters;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute(ObjectManager $manager, $insertedEntities, $generateId = false)
    {
        $obj = $this->class->newInstance();

        $this->fillColumns($obj, $insertedEntities);
        $this->callMethods($obj, $insertedEntities);

        if ($generateId) {
            $idsName = $this->class->getIdentifier();
            foreach ($idsName as $idName) {
                $id = $this->generateId($obj, $idName, $manager);
                $this->class->reflFields[$idName]->setValue($obj, $id);
            }
        }

        $manager->persist($obj);

        return $obj;
    }

    private function fillColumns($obj, $insertedEntities)
    {
        foreach ($this->columnFormatters as $field => $format) {
            if (null !== $format) {
                $value = is_callable($format) ? $format($insertedEntities, $obj) : $format;
                $this->class->reflFields[$field]->setValue($obj, $value);
            }
        }
    }

    private function callMethods($obj, $insertedEntities)
    {
        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
    }

    private function generateId($obj, $column, EntityManagerInterface $manager)
    {
        /* @var $repository \Doctrine\ORM\EntityRepository */
        $repository = $manager->getRepository(get_class($obj));
        $result = $repository->createQueryBuilder('e')
                ->select(sprintf('e.%s', $column))
                ->getQuery()
                ->getResult();
        $ids = array_map('current', $result);

        $id = null;
        do {
            $id = rand();
        } while (in_array($id, $ids));

        return $id;
    }
}
