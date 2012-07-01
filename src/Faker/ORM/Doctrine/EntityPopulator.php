<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
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

	public function guessColumnFormatters(\Faker\Generator $generator)
	{
		$formatters = array();
		$class = $this->class;
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
			if (!$this->class->isIdentifier($assocName) || !$this->class->isCollectionValuedAssociation($assocName)) {
				continue;
			}
			$relatedClass = $this->class->getAssociationTargetClass($assocName);
			$formatters[$assocName] = function($inserted) use($relatedClass) { return isset($inserted[$relatedClass]) ? $inserted[$relatedClass][mt_rand(0, count($inserted[$relatedClass]) - 1)] : null; };
		}

		return $formatters;
	}

	/**
	 * Insert one new record using the Entity class.
	 */
	public function execute($manager, $insertedEntities)
	{
		$class = $this->class->getName();
		$obj = new $class;
		foreach ($this->columnFormatters as $field => $format) {
			if (null !== $format) {
				$value = is_callable($format) ? $format($insertedEntities, $obj) : $format;
				$this->class->reflFields[$field]->setValue($obj, $value);
			}
		}
		$manager->persist($obj);

		return $obj;
	}

}