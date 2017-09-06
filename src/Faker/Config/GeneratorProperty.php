<?php
namespace Faker\Config;

/**
 * Class GeneratorProperty
 * This class represents a property that can be accessed on a given Generator to fake some data
 */
class GeneratorProperty
{
    /** @var string */
    private $type;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /**
     * Property constructor.
     * @param string $type
     * @param string $name
     * @param string $description
     */
    public function __construct($type, $name, $description = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
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
}
