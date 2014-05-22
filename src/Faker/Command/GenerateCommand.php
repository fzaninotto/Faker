<?php

namespace Faker\Command;

use Faker\Factory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('faker:generate')
            ->addOption('locale', 'l', InputOption::VALUE_REQUIRED, 'The locale to used.', Factory::DEFAULT_LOCALE)
            ->addOption('seed', 's', InputOption::VALUE_REQUIRED, 'The generators seed.')
            ->addOption('format', 'f', InputOption::VALUE_REQUIRED, 'The output format (json, xml, csv, php)', 'json')
            ->addOption('count', 'c', InputArgument::OPTIONAL, 'The count of generated data.', 1)
            ->addArgument('type', InputArgument::REQUIRED, 'The data type to generate (e.g. "randomDigit", "words(5)", "name", "city")')
            ->addArgument('args', InputArgument::IS_ARRAY | InputArgument::OPTIONAL, 'Arguments for the type, e.g. "words 5" will generate 5 words.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $locale = $input->getOption('locale');
        $seed   = $input->getOption('seed');
        $format = $input->getOption('format');
        $count  = $input->getOption('count');
        $type   = $input->getArgument('type');
        $args   = $input->getArgument('args');

        $data = array();

        $faker = Factory::create($locale);

        if ($seed) {
            $faker->seed($seed);
        }

        for ($i=0; $i<$count; $i++) {
            $data[] = $faker->format($type, $args);
        }

        switch ($format) {
            case 'json':
                $this->outputJson($output, $data);
                break;

            case 'xml':
                $this->outputXml($output, $data);
                break;

            case 'csv':
                $this->outputCsv($output, $data);
                break;

            case 'php':
                $this->outputPhp($output, $data);
                break;

            default:
                throw new \RuntimeException('Unknown output format ' . $format);
        }
    }

    /**
     * Generate and output the data as JSON.
     *
     * @param OutputInterface $output
     * @param mixed           $data
     */
    protected function outputJson(OutputInterface $output, $data)
    {
        $json = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        $output->write($json);
    }

    /**
     * Generate and output the data as XML.
     *
     * @param OutputInterface $output
     * @param mixed           $data
     */
    protected function outputXml(OutputInterface $output, $data)
    {
        $doc = new \DOMDocument();
        $doc->formatOutput = true;
        $doc->appendChild($this->generateXml($doc, $data));
        $xml = $doc->saveXML();
        $output->write($xml);
    }

    /**
     * Generate a xml element from the input data.
     *
     * @param \DOMDocument $doc
     * @param mixed        $data
     *
     * @return \DOMElement
     */
    protected function generateXml(\DOMDocument $doc, $data)
    {
        // $data is a regular indexed array
        if (is_array($data) && range(0, count($data)-1) == array_keys($data)) {
            $array = $doc->createElement('array');

            foreach ($data as $value) {
                $entry = $doc->createElement('item');
                $entry->appendChild($this->generateXml($doc, $value));

                $array->appendChild($entry);
            }

            return $array;
        }

        // $data is an associative array or object
        else if (is_array($data) || is_object($data)) {
            $map = $doc->createElement('map');

            foreach ($data as $key => $value) {
                $entry = $doc->createElement('item');
                $entry->setAttribute('key', $key);
                $entry->appendChild($this->generateXml($doc, $value));

                $map->appendChild($entry);
            }

            return $map;
        }

        // $data is a primitive type
        else {
            return $doc->createTextNode($data);
        }
    }

    /**
     * Generate and output the data as CSV.
     *
     * @param OutputInterface $output
     * @param mixed           $data
     */
    protected function outputCsv(OutputInterface $output, $data)
    {
        $stream = fopen('php://temp', 'w+');

        foreach ($data as $row) {
            fputcsv($stream, $this->flattenArray($row), ',', '"');
        }

        fseek($stream, 0);
        $csv = stream_get_contents($stream);
        $output->write($csv);
    }

    /**
     * Flatten an array.
     *
     * @param $data
     *
     * @return array
     */
    protected function flattenArray($data)
    {
        if (is_array($data) || is_object($data)) {
            $buffer = array();

            foreach ($data as $item) {
                $buffer = array_merge($buffer, $this->flattenArray($item));
            }

            return $buffer;
        }
        else {
            return (array) $data;
        }
    }

    /**
     * Generate and output the data as PHP.
     *
     * @param OutputInterface $output
     * @param mixed           $data
     */
    protected function outputPhp(OutputInterface $output, $data)
    {
        $php = var_export($data, true);
        $output->write($php);
    }
}
