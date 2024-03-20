<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Text;
use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private \ReflectionClass $textClass;

    protected function setUp(): void
    {
        $this->textClass = new \ReflectionClass(Text::class);
    }

    protected function getMethod($name): \ReflectionMethod
    {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    public function testItShouldAppendEndPunctToTheEndOfString(): void
    {
        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер '])
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер—'])
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер,'])
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер! '])
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер; '])
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['На другой день Чичиков отправился на обед и вечер: '])
        );
    }
}
