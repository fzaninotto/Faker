<?php

namespace Faker\ORM\PDO;


/**
 * Service class for populating a database using the Doctrine ORM or ODM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected $generator;
    protected $connection;
    protected $rows = array();

    /**
     * @param \Faker\Generator $generator
     * @param PDO|null $connection
     */
    public function __construct(\Faker\Generator $generator, PDO $connection = null)
    {
        $this->generator = $generator;
        $this->connection = $connection;
    }

    /**
     * Use table name and provided mapping to build INSERT statement
     * @return object PDOStatement object
     */
    public function prepareStatement()
    {
        $stmt = 'INSERT INTO $table () VALUES ()';
        return $this->connection->prepare($stmt);
    }

    /**
     * Build row data array
     * @param array $mapping [description]
     * @param integer $number  The number of data rows to produce
     * @param string $table   Table name
     */
    public function addRow($mapping, $number, $table)
    {
        $result = array();

        // trim $mapping method names

        // For loop for $number iterations building data

            // foreach mapping generate value and write to new row array


        // return data array
        return $this->rows;
    }


    /**
     * Write rows to Database
     * @param  [type] $entityManager [description]
     * @return [type]                [description]
     */
    public function execute($entityManager = null)
    {

        // prepare statement


        // loop through data array (inserting)


        // return data array on success

    }
}
