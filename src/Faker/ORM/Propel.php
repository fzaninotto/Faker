<?php

namespace Faker\ORM;

include __DIR__ . '/../Guesser/Name.php';

class Propel
{
	protected $class;
	protected $columnFormatters = array();
	
	public static function populateClasses($generator, $classes)
	{
		$entities = array();
		foreach ($classes as $class => $number) {
			$populator = new self($class);
			$populator->setColumnFormatters($populator->guessColumnFormatters($generator));
			$populator->populate($number, $entities);
		}
		
		return $entities;
	}

	public function __construct($class)
	{
		$this->class = $class;
	}
	
	public function setColumnFormatters($columnFormatters)
	{
		$this->columnFormatters = array_merge($columnFormatters, $this->columnFormatters);
	}

	public function guessColumnFormatters(\Faker\Generator $generator)
	{
		$formatters = array();
		$class = $this->class;
		$peerClass = $class::PEER;
		$tableMap = $peerClass::getTableMap();
		$nameGuesser = new \Faker\Guesser\Name($generator);
		foreach ($tableMap->getColumns() as $columnMap) {
			if ($columnMap->isForeignKey()) {
				$relatedClass = $columnMap->getRelation()->getForeignTable()->getPhpName();
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
			// TODO: PropelColumnTypeGuesser
		}
		return $formatters;
	}

	public function populate($nb = 100, &$insertedEntities = array())
	{
		$pks = array();
		$class = $this->class;
		$peer = $class::PEER;
		$con = \Propel::getConnection($peer::DATABASE_NAME, \Propel::CONNECTION_WRITE);
		$con->beginTransaction();
		for ($i=0; $i < $nb; $i++) { 
			$insertedEntities[$this->class][]= $this->populateOne($con, $insertedEntities);
		}
		$con->commit();
	}
	
	public function populateOne($con, $insertedEntities)
	{
		$obj = new $this->class();
		foreach ($this->columnFormatters as $column => $format) {
			if (null !== $column) {
				$obj->setByName($column, is_callable($format) ? $format($insertedEntities) : $format);
			}
		}
		$obj->save($con);
		return $obj->getPrimaryKey();
	}
}