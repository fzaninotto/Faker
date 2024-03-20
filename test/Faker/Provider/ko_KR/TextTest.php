<?php

namespace Faker\Test\Provider\ko_KR;

use Faker\Provider\el_GR\Text;
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
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가 '])
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가—'])
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가,'])
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가! '])
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가: '])
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가; '])
        );
    }
}
