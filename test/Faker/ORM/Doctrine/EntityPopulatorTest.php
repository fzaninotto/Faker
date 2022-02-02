<?php

declare(strict_types=1);

namespace Faker\Test\ORM\Doctrine;

use Faker\ORM\Doctrine\EntityPopulator;
use Faker\Test\TestCase;

final class EntityPopulatorTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testClassGenerationWithBackwardCompatibility(): void
    {
        // trigger autoload before using to load backward compatibility fix
        class_exists(EntityPopulator::class);

        $classMetaData = $this->createMock('Doctrine\Common\Persistence\Mapping\ClassMetadata');
        $classMetaData->method('getName')->willReturn('test');
        $entityPopulator = new EntityPopulator($classMetaData);

        self::assertSame('test', $entityPopulator->getClass());
    }
}
