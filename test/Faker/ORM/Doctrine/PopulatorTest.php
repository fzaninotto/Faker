<?php

declare(strict_types=1);

namespace Faker\Test\ORM\Doctrine;

use Faker\ORM\Doctrine\Populator;
use Faker\Test\TestCase;

final class PopulatorTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testClassGenerationWithBackwardCompatibility(): void
    {
        $populator = new Populator($this->faker);
        // Mock ObjectManager after autoload to test class alias
        $objectManager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');

        self::assertEmpty($populator->execute($objectManager));
    }
}
