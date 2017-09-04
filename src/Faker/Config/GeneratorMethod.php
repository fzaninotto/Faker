<?php
namespace Faker\Config;

/**
 * Class GeneratorMethod
 * This class represents a method that can be called on a given Generator to fake some data
 */
class GeneratorMethod
{
    /** @var string */
    private $type;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var array */
    private $parameters;

    /**
     * Property constructor.
     * @param string $type
     * @param string $name
     * @param string $description
     * @param array $parameters
     */
    public function __construct($type, $name, $description = null, $parameters = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}