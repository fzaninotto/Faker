<?php

namespace Faker\ORM\Propel;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
	protected $class;
	protected $columnFormatters = array();

	/**
	 * Class constructor.
	 *
	 * @param string $class A Propel ActiveRecord classname
	 */
	public function __construct($class)
	{
		$this->class = $class;
	}
	
	public function getClass()
	{
		return $this->class;
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
		$peerClass = $class::PEER;
		$tableMap = $peerClass::getTableMap();
		$nameGuesser = new \Faker\Guesser\Name($generator);
		$columnTypeGuesser = new \Faker\ORM\Propel\ColumnTypeGuesser($generator);
		foreach ($tableMap->getColumns() as $columnMap) {
			if ($columnMap->isForeignKey()) {
				$relatedClass = $columnMap->getRelation()->getForeignTable()->getClassname();
				$formatters[$columnMap->getPhpName()] = function($inserted) use($relatedClass) { return isset($inserted[$relatedClass]) ? $inserted[$relatedClass][mt_rand(0, count($inserted[$relatedClass]) - 1)] : null; };
				continue;
			}
			if ($columnMap->isPrimaryKey()) {
				continue;
			}
			if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName())) {
				$formatters[$columnMap->getPhpName()] = $formatter;
				continue;
			}
			if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) {
				$formatters[$columnMap->getPhpName()] = $formatter;
				continue;
			}
		}
		return $formatters;
	}
	
	/**
	 * Insert one new record using the Entity class.
	 */
	public function execute($con, $insertedEntities)
	{
		$obj = new $this->class();
		foreach ($this->columnFormatters as $column => $format) {
			if (null !== $column) {
				$obj->setByName($column, is_callable($format) ? $format($insertedEntities, $obj) : $format);
			}
		}
		$obj->save($con);
		
		return $obj->getPrimaryKey();
	}

}