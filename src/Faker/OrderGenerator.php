<?php

namespace Faker;

/**
 * Proxy for other generators, to return values in ascending or descending order.
 * Works with Faker\Generator\Base->order()
 */
class OrderGenerator extends \Faker\MultiGenerator
{

    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    protected $order = self::ORDER_ASC;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator, $count = 5, $order = self::ORDER_ASC)
    {
        parent::__construct($generator, $count);
        if ($order != self::ORDER_ASC && $order != self::ORDER_DESC) {
            throw new \InvalidArgumentException('Invalid order type given. Must be either \'desc\' or \'asc\'');
        }

        $this->order = $order;
    }

    /**
     * Catch and proxy all generator calls with arguments and order the values
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, $arguments)
    {
        $res = parent::__call($name, $arguments);
        $cmpMethod = 'cmp' . ucfirst($this->order);
        usort($res, array($this, $cmpMethod));
        return $res;
    }

    /**
     * Order values in ascending order
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    protected function cmpAsc($a, $b)
    {
        $cmp_a = $a;
        $cmp_b = $b;

        if (is_array($a) && is_array($b)) {
            $cmp_a = implode(',', $a);
            $cmp_b = implode(',', $b);
        }

        if (is_string($cmp_a) && is_string($cmp_b)) {
            return strcmp($cmp_a, $cmp_b);
        }

        if ((is_numeric($cmp_a) && is_numeric($cmp_b)) ||
                ($cmp_a instanceof DateTime) && ($cmp_b instanceof DateTime)) {
            if ($cmp_a === $cmp_b) {
                return 0;
            }
            return ($cmp_a < $cmp_b) ? -1 : 1;
        }

        return 0;
    }

    /**
     * Order values in descending order
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    protected function cmpDesc($a, $b)
    {
        $res = $this->cmpAsc($a, $b);
        if ($res < 0) {
            return 1;
        } else if ($res > 1) {
            return -1;
        }
        return 0;
    }
}
