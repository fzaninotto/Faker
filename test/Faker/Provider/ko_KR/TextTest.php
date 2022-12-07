<?php

namespace Faker\Test\Provider\ko_KR;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class TextTest extends TestCase
{
    private $textClass;

    protected function setUp(): void
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\el_GR\Text');
    }

    protected function getMethod($name)
    {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    public function testItShouldAppendEndPunctToTheEndOfString(): void
    {
        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가 ']),
        );

        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가—']),
        );

        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가,']),
        );

        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가! ']),
        );

        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가: ']),
        );

        self::assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['최석(崔晳)으로부터 최후의 편지가; ']),
        );
    }
}
