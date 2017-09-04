<?php
namespace Faker\Guesser;

use Faker\Config\Format;

/**
 * Class ConfigGuesser
 * This class defines a guesser that can be configured to return/override a specific format to use for an Entity/Property
 * configuration.
 */
class ConfigGuesser
{
    /** Constants that can be used as a wildcard to represent ANY entity */
    const WILDCARD = '*';

    /** @var \Faker\Generator */
    protected $generator;

    /** @var Format[] */
    protected $formats;

    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
        $this->formats = array();
    }

    /**
     * @return \Faker\Generator
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Adds an explicit format to the guesser
     * @param string $entity The entity's name to which the format must be applied, or WILDCARD for all entities
     * @param string $property The property's name to which the format must be applied.
     * @param Format $format The format to associate with the entity/property combination
     *
     */
    public function addFormat($entity, $property, Format $format)
    {
        $key = $entity.'.'.$property;

        $this->formats[$key] = $format;
    }

    /**
     * Checks if an explicit format has been configured for a given entity/property combination
     * @param string $entity The entity's name to check, or WILDCARD for any entities
     * @param string $property The property's name to check.
     *
     * @return bool Whether a format has been configured for the entity/property combination provided
     */
    public function isConfigured($entity, $property) {
        $key = $entity.'.'.$property;
        return array_key_exists($key, $this->formats);
    }

    /**
     * Returns the closure to use for a given Entity / Property combination based on the current configuration
     * @param string $entity
     * @param string $property
     *
     * @return \Closure|null
     */
    public function guessFormat($entity, $property) {
        $key = $entity.'.'.$property;
        $wildcard = self::WILDCARD.'.'.$property;

        $generator = $this->generator;
        if (isset($this->formats[$key])) {
            // We have a format defined for this field in this entity
            $format = $this->formats[$key];
            $args = $format->getArguments();
            if (empty($args)) {
                return function () use ($generator, $format) {
                    return $generator->{$format->getName()};
                };
            } else {
                return function () use ($generator, $format, $args) {
                    return call_user_func_array(array($generator, $format->getName()), $args);
                };
            }
        } else if (isset($this->formats[$wildcard])) {
            // We have a format defined for this field in any entity
            $format = $this->formats[$wildcard];
            $args = $format->getArguments();
            if (empty($args)) {
                return function () use ($generator, $format) {
                    return $generator->{$format->getName()};
                };
            } else {
                return function () use ($generator, $format, $args) {
                    return call_user_func_array(array($generator, $format->getName()), $args);
                };
            }
        }

        return null;
    }

}