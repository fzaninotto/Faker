<?php

namespace Faker;

class Documentor
{
    protected $generator;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return array
     */
    public function getFormatters()
    {
        $formatters = array();
        $providers = array_reverse($this->generator->getProviders());
        $providers[]= new Provider\Base($this->generator);
        foreach ($providers as $provider) {
            $providerClass = get_class($provider);
            $formatters[$providerClass] = array();
            $refl = new \ReflectionObject($provider);
            foreach ($refl->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflmethod) {
                if ($reflmethod->getDeclaringClass()->getName() == 'Faker\Provider\Base' && $providerClass != 'Faker\Provider\Base') {
                    continue;
                }
                $methodName = $reflmethod->name;
                if ($reflmethod->isConstructor()) {
                    continue;
                }
                $parameters = array();
                foreach ($reflmethod->getParameters() as $reflparameter) {
                    $parameter = '$' . $reflparameter->getName();
                    if ($reflparameter->isDefaultValueAvailable()) {
                        $parameter .= ' = ' . var_export($reflparameter->getDefaultValue(), true);
                    }
                    $parameters []= $parameter;
                }
                $parameters = $parameters ? '(' . join(', ', $parameters) . ')' : '';
                try {
                    $example = $this->generator->format($methodName);
                } catch (\InvalidArgumentException $e) {
                    $example = '';
                }
                if (is_array($example)) {
                    $example = "array('" . join("', '", $example) . "')";
                } elseif ($example instanceof \DateTime) {
                    $example = "DateTime('" . $example->format('Y-m-d H:i:s') . "')";
                } elseif ($example instanceof Generator || $example instanceof UniqueGenerator) { // modifier
                    $example = '';
                } else {
                    $example = var_export($example, true);
                }
                $formatters[$providerClass][$methodName . $parameters] = $example;
            }
        }

        return $formatters;
    }
}
