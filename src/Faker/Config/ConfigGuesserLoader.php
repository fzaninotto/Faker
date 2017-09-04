<?php
namespace Faker\Config;

use Faker\Guesser\ConfigGuesser;

/**
 * Class ConfigGuesserLoader
 */
class ConfigGuesserLoader
{
    /**
     * @param ConfigGuesser $guesser The guesser to configure
     * @param string $file The JSON file to load formats from
     *
     * @throws \Exception If the file cannot be loaded
     */
    public static function loadFile(ConfigGuesser $guesser, $file)
    {
        $parser = new FormatParser();
        $parser->load($guesser->getGenerator());

        // Make sure the file requested exist
        if (!file_exists($file)) {
            throw new \Exception("Config file cannot be found: $file");
        }
        $string = file_get_contents($file);

        $json = json_decode($string, true);
        if (json_last_error() != JSON_ERROR_NONE) {
            $message = "Failed to decode config file: $file ";
            if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
                $message .= "Error: " . json_last_error() . ' - '.json_last_error_msg();
            } else {
                $message .= "Error: " . json_last_error();
            }
            $message .= PHP_EOL . "config file content: $string";
            throw new \Exception($message, json_last_error());
        }

        foreach ($json as $entity => $item) {
            foreach ($item as $property => $value) {
                try {
                    $format = $parser->parse($value);
                    $guesser->addFormat($entity, $property, $format);
                } catch (\Exception $e) {
                    throw new \Exception("Failed to decode config file: $file. Invalid format provided for Entity '$entity', Property '$property': ".$e->getMessage());
                }
            }
        }
    }
}
