<?php

namespace Faker\ORM;

class Propel
{
	protected $class;
	protected $columnFormatters = array();
	
	public function __construct($class)
	{
		$this->class = $class;
	}
	
	public function setColumnFormatters($columnFormatters)
	{
		$this->columnFormatters = array_merge($columnFormatters, $this->columnFormatters);
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