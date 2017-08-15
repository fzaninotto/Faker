<?php

namespace Faker\ORM\PDO;

/**
 * Service class for populating a database using the native PDO's.
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
    public function __construct(\Faker\Generator $generator, \PDO $connection = null)
    {
        $this->generator = $generator;
        $this->connection = $connection;
    }

    /**
     * Use table name and provided mapping to build INSERT statement
     * @return object PDOStatement object
     */
    private function prepareStatement($tableKey)
    {
        $result = null;
        $columns = array();
        $placeholders = array();

        foreach ($this->rows[$tableKey][1] as $key => $value) {
            $columns[] = $key;
            $placeholders[] = ':' . $key;
        }

        $columns = implode(', ', $columns);
        $placeholders = implode(', ', $placeholders);
        $stmt = 'INSERT INTO '. trim($tableKey) .' (' . $columns . ') VALUES (' . $placeholders . ')';
        $result = $this->connection->prepare($stmt);

        return $result;
    }

    /**
     * Convert the rows corresponding to the supplied table name to
     * keys for use in pdo execute statement.
     * @param  string $tableKey The table name this dataset is for.
     * @return array            The array with placeholder keys
     */
    private function convertToPlaceholders($tableKey)
    {
        $originalArray = $this->rows[$tableKey];
        $newArray = array();

        for ($i=0; $i < count($originalArray); $i++) {
            $newArray[$i] = array();
            foreach ($originalArray[$i] as $key => $value) {
                $newArray[$i][':'. $key] = $value;
            }
        }

        return $newArray;
    }

    /**
     * Return a faker value from the correct formatter.
     * @param  string/array $request Data from supplied mapping
     * @return string                Value returned by formatter or null
     */
    private function generateValue($request)
    {
        $final = false;
        $reqType = gettype($request);
        $count = count($request);

        if ($reqType === 'array' && $count > 0) {
            $name = trim($request[0]);

            if ($count === 1) {
                $params = array();
            } else {
                $params = $request[1];
            }

            // Run method
            switch (count($params)) {
                case 0:
                    $final = $this->generator->$name();
                    break;
                case 1:
                    $final = $this->generator->$name($params[0]);
                    break;
                case 2:
                    $final = $this->generator->$name($params[0], $params[1]);
                    break;
                case 3:
                    $final = $this->generator->$name($params[0], $params[1], $params[1]);
                    break;
                case 4:
                    $final = $this->generator->$name($params[0], $params[1], $params[1], $params[3]);
                    break;
                case 5:
                    $final = $this->generator->$name($params[0], $params[1], $params[1], $params[3], $params[4]);
                    break;
                case 6:
                    $final = $this->generator->$name($params[0], $params[1], $params[1], $params[3], $params[4], $params[5]);
                    break;
            }
        } else if ($reqType == 'string') {
            $name = trim($request);
            $first = strpos($name, '(');
            if ($first !== false) {
                $name = substr($name, 0, $first);
                $final = $this->generator->$name();
            } else {
                $final = $this->generator->$name;
            }
        }

        return $final;
    }

    /**
     * Build row data array grouped by table name.
     * @param array $mapping   Column names keys with required data values
     * @param integer $number  The number of data rows to produce
     * @param string $table    Table name
     */
    public function addRows($mapping, $number, $table)
    {
        if (!isset($this->rows[$table])) {
            $this->rows[$table] = array();
        }

        for ($i=0; $i < $number; $i++) {
            $temp = array();
            foreach ($mapping as $key => &$value) {
                $temp[$key] =  $this->generateValue($value);
            }
            $this->rows[$table][] = $temp;
        }
    }

    /**
     * Write rows to database
     * @return array  Rows successfully written to the DB
     */
    public function execute()
    {
        $stmt = '';
        $insertedRows = array();

        if (null === $this->connection) {
            throw new \InvalidArgumentException("PDO connection not available.");
        }

        foreach ($this->rows as $key => $value) {
            $stmt = $this->prepareStatement($key);
            $placeholders = $this->convertToPlaceholders($key);
            for ($i=0; $i < count($placeholders); $i++) {
                $outcome = $stmt->execute($placeholders[$i]);
                if ($outcome) {
                    $insertedRows[$key][$i] = $this->rows[$key][$i];
                }
            }
        }

        return $insertedRows;
    }
}
