<?php

namespace Faker\Test\Provider\ka_GE;

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
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე ']),
        );

        self::assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე— ']),
        );

        self::assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე,  ']),
        );

        self::assertSame(
            'ჭეშმარიტია. ჩვენც ისე!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე! ']),
        );

        self::assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე; ']),
        );

        self::assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე: ']),
        );
    }
}
