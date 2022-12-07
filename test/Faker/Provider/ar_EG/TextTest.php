<?php

namespace Faker\Test\Provider\ar_EG;

use Faker\Provider\ar_EG\Text;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class TextTest extends TestCase
{
    public function testText(): void
    {
        self::assertNotSame('', $this->faker->realtext(200, 2));
    }

    protected function getProviders(): iterable
    {
        yield new Text($this->faker);
    }
}
