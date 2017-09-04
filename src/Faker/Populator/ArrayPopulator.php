<?php
namespace Faker\Populator;
use Faker\Generator;
use Faker\Guesser\ConfigGuesser;
use Faker\Guesser\Name;

/**
 * Class ArrayPopulator
 */
class ArrayPopulator
{
    /** @var Generator */
    protected $generator;

    /** @var  ConfigGuesser */
    protected $configGuesser;

    /** @var  Name */
    protected $nameGuesser;

    /**
     * ArrayPopulator constructor.
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
     * Populates an array based on the guessers configured. The ConfigGuesser is checked first
     * @param array $array
     * @param string $entity The name of the entity associated with the array
     *
     */
    public function populate(array &$array, $entity = '') {
        $keys = array_keys($array);
        foreach ($keys as $key) {
            $format = $this->configGuesser->guessFormat($entity, $key);
            if (!isset($format) && isset($this->nameGuesser)) {
                $format = $this->nameGuesser->guessFormat($key);
            }
            if (isset($format)) {
                $array[$key] = $format();
            }
        }
    }
}