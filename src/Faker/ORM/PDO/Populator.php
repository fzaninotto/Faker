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
     * Check if $request is a method and if yes run with
     * any supplied parameters.
     * @param  string $request String from supplied mapping
     * @return string          Value returned by method or null
     */
    private function runMethod($request)
    {
        $request = trim($request);
        $final = null;

        if (strpos($request, '(') !== false &&  strpos($request, ')') !== false) {
            $start = strpos($request, '(');
            $name = substr($request, 0, $start);
            $options = substr($request, ++$start, -1);
            $vars = explode(',', $options);

            // Clean string & convert true, false or null.
            foreach ($vars as &$value) {
                $val = strtolower($value);
                $val = trim($val);
                $val = str_replace('"', '', $val);
                $val = str_replace('\'', '', $val);
                switch ($val) {
                    case 'true':
                        $value = true;
                        break;
                    case 'false':
                        $value = true;
                        break;
                    case 'null':
                        $value = null;
                        break;
                    default:
                        $value = $val;
                        break;
                }
            }

            // Run method
            switch (count($vars)) {
                case 1:
                    $final = $this->generator->$name($vars[0]);
                    break;
                case 2:
                    $final = $this->generator->$name($vars[0], $vars[1]);
                    break;
                case 3:
                    $final = $this->generator->$name($vars[0], $vars[1], $vars[1]);
                    break;
                case 4:
                    $final = $this->generator->$name($vars[0], $vars[1], $vars[1], $vars[3]);
                    break;
                case 5:
                    $final = $this->generator->$name($vars[0], $vars[1], $vars[1], $vars[3], $vars[4]);
                    break;
                case 6:
                    $final = $this->generator->$name($vars[0], $vars[1], $vars[1], $vars[3], $vars[4], $vars[5]);
                    break;
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
        foreach ($mapping as &$value) {
            $value = trim($value);
        }

        if (!isset($this->rows[$table])) {
            $this->rows[$table] = array();
        }

        for ($i=0; $i < $number; $i++) {
            $temp = array();
            foreach ($mapping as $key => &$value) {
                $method =  $this->runMethod($value);
                if (is_null($method)) {
                    $temp[$key] = $this->generator->$value;
                } else {
                    $temp[$key] = $method;
                }
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
