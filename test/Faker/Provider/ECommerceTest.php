<?php

namespace Faker\Test\Provider;

use Faker\Provider\ECommerce;
use PHPUnit\Framework\TestCase;

class ECommerceTest extends TestCase
{

    public function testBrand()
    {
        $this->assertContains(ECommerce::brand(), array("Apple", 'Samsung'));
    }

    public function testCategory()
    {
        $this->assertContains(ECommerce::category(), array('Electronics', 'Books'));
    }

    public function testProductName()
    {
        $this->assertContains(ECommerce::productName(), array("MacBook Pro", 'Galaxy M20', 'Galaxy M10', 'iMac'));
    }
}
