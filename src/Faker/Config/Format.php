<?php
namespace Faker\Config;

/**
 * Class Format
 * This class defines a parsed format that can then be used to invoke the generator
 */
class Format
{
    /** @var string */
    private $name;

    /** @var array */
    private $arguments;

    /**
     * Format constructor.
     * @param string $name
     * @param array $arguments
     */
    public function __construct($name, array $arguments = array())
    {
        $this->name = $name;
        $this->arguments = $arguments;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    public function isProperty()
    {
        return empty($this->arguments);
    }
}