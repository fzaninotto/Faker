<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Faker\Guesser\Name;

/**
 * Service class for populating a table through a Doctrine Entity class.
 */
class EntityPopulator
{
    protected array $columnFormatters = [];
    protected array $modifiers = [];

    public function __construct(protected ClassMetadata $class)
    {
    }

    public function getClass(): string
    {
        return $this->class->getName();
    }

    public function setColumnFormatters(array $columnFormatters): void
    {
        $this->columnFormatters = $columnFormatters;
    }

    public function getColumnFormatters(): array
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters): void
    {
        $this->columnFormatters = \array_merge($this->columnFormatters, $columnFormatters);
    }

    public function setModifiers(array $modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith(array $modifiers): void
    {
        $this->modifiers = \array_merge($this->modifiers, $modifiers);
    }

    public function guessColumnFormatters(Generator $generator): array
    {
        $formatters = [];
        $nameGuesser = new Name($generator);
        $columnTypeGuesser = new ColumnTypeGuesser($generator);
        foreach ($this->class->getFieldNames() as $fieldName) {
            if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) {
                continue;
            }

            $size = $this->class->fieldMappings[$fieldName]['length'] ?? null;
            if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) {
                $formatters[$fieldName] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) {
                $formatters[$fieldName] = $formatter;
            }
        }

        foreach ($this->class->getAssociationNames() as $assocName) {
            if ($this->class->isCollectionValuedAssociation($assocName)) {
                continue;
            }

            $relatedClass = $this->class->getAssociationTargetClass($assocName);

            $unique = $optional = false;
            if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) {
                $mappings = $this->class->getAssociationMappings();
                foreach ($mappings as $mapping) {
                    if ($mapping['targetEntity'] === $relatedClass) {
                        if (\Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE === $mapping['type']) {
                            $unique = true;
                            $optional = $mapping['joinColumns'][0]['nullable'] ?? false;
                            break;
                        }
                    }
                }
            } elseif ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) {
                $mappings = $this->class->associationMappings;
                foreach ($mappings as $mapping) {
                    if ($mapping['targetDocument'] === $relatedClass) {
                        if (\Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE === $mapping['type'] && \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE === $mapping['association']) {
                            $unique = true;
                            $optional = $mapping['nullable'] ?? false;
                            break;
                        }
                    }
                }
            }

            $index = 0;
            $formatters[$assocName] = static function($inserted) use ($relatedClass, &$index, $unique, $optional) {
                if (isset($inserted[$relatedClass])) {
                    if ($unique) {
                        $related = null;
                        if (isset($inserted[$relatedClass][$index]) || !$optional) {
                            $related = $inserted[$relatedClass][$index];
                        }

                        ++$index;

                        return $related;
                    }

                    return $inserted[$relatedClass][\random_int(0, \count($inserted[$relatedClass]) - 1)];
                }

                return null;
            };
        }

        return $formatters;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute(ObjectManager $manager, array $insertedEntities, bool $generateId = false): self
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

    private function fillColumns($obj, $insertedEntities): void
    {
        foreach ($this->columnFormatters as $field => $format) {
            if (null !== $format) {
                // Add some extended debugging information to any errors thrown by the formatter
                try {
                    $value = \is_callable($format) ? $format($insertedEntities, $obj) : $format;
                } catch (\InvalidArgumentException $ex) {
                    throw new \InvalidArgumentException(\sprintf('Failed to generate a value for %s::%s: %s', $obj::class, $field, $ex->getMessage()));
                }
                // Try a standard setter if it's available, otherwise fall back on reflection
                $setter = \sprintf('set%s', \ucfirst($field));
                if (\is_callable([$obj, $setter])) {
                    $obj->$setter($value);
                } else {
                    $this->class->reflFields[$field]->setValue($obj, $value);
                }
            }
        }
    }

    private function callMethods($obj, $insertedEntities): void
    {
        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
    }

    private function generateId($obj, $column, ObjectManager $manager): int
    {
        // @var $repository \Doctrine\Persistence\ObjectRepository
        $repository = $manager->getRepository($obj::class);
        $result = $repository->createQueryBuilder('e')
            ->select(\sprintf('e.%s', $column))
            ->getQuery()
            ->execute();
        $ids = \array_map('current', $result->toArray());

        do {
            $id = \random_int(0, 2147483647);
        } while (\in_array($id, $ids, true));

        return $id;
    }
}
