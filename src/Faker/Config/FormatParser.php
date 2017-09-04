<?php

namespace Faker\Config;

/**
 * Class FormatParser
 * This class parses the PhpDoc comment associated with a Generator class to extract the list of properties and methods
 * that can be invoked.
 */
class FormatParser
{
    /** @var  GeneratorProperty[] */
    private $properties = array();

    /** @var  GeneratorMethod[] */
    private $methods = array();

    /**
     * @param \Faker\Generator $generator
     */
    public function load(\Faker\Generator $generator)
    {
        $class = new \ReflectionClass($generator);
        $comment = $class->getDocComment();

        $lines = preg_split("/\\r\\n|\\r|\\n/", $comment);

        foreach ($lines as $line) {
            $line = ltrim($line, " \t\n\r\0\x0B*");
            if (strpos($line, "@property") !== FALSE) {
                $property = $this->loadProperty($line);
                $this->properties[$property->getName()] = $property;
            } else if (strpos($line, "@method") !== FALSE) {
                $method = $this->loadMethod($line);
                $this->methods[$method->getName()] = $method;
            }
        }
    }

    /**
     * @param $name
     *
     * @return GeneratorProperty|null
     */
    public function getProperty($name)
    {
        if (isset($this->properties[$name])) {
            return $this->properties[$name];
        }

        return null;
    }

    /**
     * @param $name
     *
     * @return GeneratorMethod|null
     */
    public function getMethod($name)
    {
        if (isset($this->methods[$name])) {
            return $this->methods[$name];
        }

        return null;
    }

    /**
     * Creates a Format object based on a string provided.
     * @param string $value The string to parse. Must be a valid attribute or method defined in the Generator data loaded
     *
     * @return Format The format object to use when invoking the generator
     * @throws \Exception If the value provided does not match a valid property or method based on the generator data loaded
     */
    public function parse($value)
    {
        $name = $value;
        $args = array();
        $index = strpos($value, '(');

        // Check if we need to pass arguments to the generator
        if ($index > 0) {
            $name = substr($value, 0, $index);
            $end = strpos($value, ')', $index);
            if ($end) {
                $params = substr($value, $index+1, ($end-$index-1));
                // Extract any array arguments
                $arrays = array();
                $count = preg_match_all('/(\\[[a-zA-Z0-9_,"\'\\. ]*\\])/', $params, $arrays);
                if ($count > 0) {
                    $params = preg_replace('/(\\[[a-zA-Z0-9_,"\'\\. ]*\\])/', '[]', $params);
                }
                $args = explode(',',$params);
                $j = 0;
                for ($i = 0; $i < count($args); $i++) {
                    if ($args[$i] == '[]') {
                        $arg = array();
                        $innerArgs = explode(',', trim($arrays[0][$j], '[]'));
                        foreach($innerArgs as $innerArg) {
                            $arg[] = $this->parseArgument($innerArg);
                        }
                        //$args[$i] = $arrays[0][$j];
                        $args[$i] = $arg;
                        $j++;
                    } else {
                        $args[$i] = $this->parseArgument($args[$i]);
                    }
                }
            } else {
                throw new \Exception("Invalid format provided: $value. Reason: Missing ')' in format provided: $value");
            }
        }

        // Make sure the name found is a valid one based on our generator
        if (empty($args)) {
            // We need to have a matching property set in our faker generator
            $generatorProperty = $this->getProperty($name);
            if (!isset($generatorProperty)) {
                throw new \Exception("Invalid format provided: $value. Reason: Unknown Faker property: $name");
            }
        } else {
            // We need to have a matching method defined in our faker generator
            $generatorMethod = $this->getMethod($name);
            if (!isset($generatorMethod)) {
                throw new \Exception("Invalid format provided: $value. Reason: Unknown Faker method: $name");
            }

            // Make sure the arguments match the method definition
            if (count($args) > count($generatorMethod->getParameters())) {
                throw new \Exception("Invalid format provided: $value. Reason: Too many parameters for Faker method: $name. Expected: " . count($generatorMethod->getParameters()) . ', Actual: ' . count($args));
            }
        }
        return new Format($name, $args);
    }

    /**
     * @param string $line The comment line that describes a valid Generator property
     *
     * @return GeneratorProperty
     */
    protected function loadProperty($line)
    {
        $items = explode(' ', $line);
        $type = $items[1];
        $name = ltrim($items[2], '$');
        $description = null;
        if (count($items) > 3) {
            $description = implode(" ", array_slice($items, 3));
        }
        return new GeneratorProperty($type, $name, $description);
    }

    /**
     * @param string $line The comment line that describes a valid Generator method
     *
     * @return GeneratorMethod
     */
    protected function loadMethod($line)
    {
        $description = null;
        $parameters = null;

        // Extract the parameters
        $index = strpos($line, '(');
        if ($index > 0) {
            // This method has parameters
            $items = explode(' ', substr($line, 0, $index));
            $end = strpos($line, ')', -1);
            if ($end > $index) {
                $length = $end - ($index +1);
                $paramString = substr($line, $index+1, $length);
            } else {
                $paramString = substr($line, $index+1);
            }
            // Strip out any embedded parameters
            $paramString = preg_replace("(\(.*\))", '', $paramString);

            $parameters = explode(',', $paramString);
        } else {
            // No parameter
            $items = explode(' ', $line);
            if (count($items) > 3) {
                $description = implode(" ", array_slice($items, 3));
            }
        }
        $type = $items[1];
        $name = $items[2];
        return new GeneratorMethod($type, $name, $description, $parameters);
    }

    protected function parseArgument($arg)
    {
        $arg = trim($arg, ' \'"');
        $matches = array();
        // Check if this is an int
        preg_match('/^-?\d+$/', $arg, $matches);
        if (count($matches) > 0) {
            return intval($arg);
        }
        // Check if this is a float
        preg_match('/^-?(\d*\.\d+)$/', $arg, $matches);
        if (count($matches) > 0) {
            return floatval($arg);
        }
        // Check if this is a boolean
        if (strcasecmp($arg, 'true') == 0) {
            return true;
        } else if (strcasecmp($arg, 'false') == 0) {
            return false;
        }

        return $arg;
    }
}