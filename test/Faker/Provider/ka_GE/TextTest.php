<?php

namespace Faker\Test\Provider\ka_GE;

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
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე '])
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე— '])
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე,  '])
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე! '])
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე; '])
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['ჭეშმარიტია. ჩვენც ისე: '])
        );
    }
}
