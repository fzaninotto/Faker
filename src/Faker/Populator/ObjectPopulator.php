<?php
namespace Faker\Populator;
use Faker\Generator;
use Faker\Guesser\ConfigGuesser;
use Faker\Guesser\Name;
use ReflectionClass;

/**
 * Class ObjectPopulator
 */
class ObjectPopulator
{
    /** @var Generator */
    protected $generator;

    /** @var  ConfigGuesser */
    protected $configGuesser;

    /** @var  Name */
    protected $nameGuesser;

    /**
     * ObjectPopulator constructor.
     * @param Generator $generator
     * @param ConfigGuesser $configGuesser
     * @param Name $nameGuesser
     */
    public function __construct(Generator $generator, ConfigGuesser $configGuesser, Name $nameGuesser = null)
    {
        $this->generator = $generator;
        $this->configGuesser = $configGuesser;
        $this->nameGuesser = $nameGuesser;
    }

    /**
     * Populates an object based on the guessers configured and its class hierarchy. The ConfigGuesser is checked first
     * @param object $object The object to fill
     *
     * @throws \InvalidArgumentException If the parameter passed is not a valid object
     */
    public function populate($object) {
        $classes = $this->getClassHierarchy($object);
        if (!isset($classes)) {
            throw new \InvalidArgumentException('Failed to retrieve class hierarchy. Make sure you passed a valid object');
        }

        $reflect = new ReflectionClass($object);
        $properties = $reflect->getProperties();
        /** @var \ReflectionProperty $property */
        foreach ($properties as $property) {
            $format = null;
            // Scan the entire class hierarchy starting at the bottom to pick the right format to apply
            foreach ($classes as $class) {
                if ($this->configGuesser->isConfigured($class, $property->getName())) {
                    $format = $this->configGuesser->guessFormat($class, $property->getName());
                } else if ($class == $property->getDeclaringClass()->getName()) {
                    // We have reached the class where the property has been declared, it is time to check for wildcard as well
                    $format = $this->configGuesser->guessFormat($class, $property->getName());
                    break;
                }

                if (isset($format)) {
                    break;
                }
            }

            // If we have not found a configured format to use, let's fallback ot the name guesser
            if (!isset($format) && isset($this->nameGuesser)) {
                $format = $this->nameGuesser->guessFormat($property->getName());
            }

            if (isset($format)) {
                $value = $format();
                // Try a standard setter if it's available, otherwise fall back on reflection
                $setter = sprintf("set%s", ucfirst($property->getName()));
                if (method_exists($object, $setter)) {
                    $object->$setter($value);
                } else {
                    if ($property->isPublic()) {
                        $property->setValue($object, $value);
                    }
                }
            }
        }
    }

    private function getClassHierarchy($object) {
        if (!is_object($object)) {
            return null;
        }
        $hierarchy = array();
        $class = get_class($object);
        do {
            $hierarchy[] = $class;
        } while (($class = get_parent_class($class)) !== false);

        return $hierarchy;
    }
}