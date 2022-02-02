<?php

declare(strict_types=1);

namespace Faker\Test\ORM\Doctrine;

use Faker\ORM\Doctrine\ColumnTypeGuesser;
use Faker\Test\TestCase;

final class ColumnTypeGuesserTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testClassGenerationWithBackwardCompatibility(): void
    {
        $columnTypeGuesser = new ColumnTypeGuesser($this->faker);
        // Mock ClassMetadata after autoload to test class alias
        $classMetaData = $this->createMock('Doctrine\Common\Persistence\Mapping\ClassMetadata');
        $classMetaData->method('getTypeOfField')->with(self::anything())->willReturn('integer');

        $fakerClosure = $columnTypeGuesser->guessFormat('test', $classMetaData);
        self::assertIsNumeric($fakerClosure());
    }
}
