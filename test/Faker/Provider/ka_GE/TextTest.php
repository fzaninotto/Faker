<?php

namespace Faker\Test\Provider\ka_GE;

use Faker\Test\TestCase;

final class TextTest extends TestCase
{
    private $textClass;

    protected function setUp(): void
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\el_GR\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე '))
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე— '))
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე,  '))
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე!.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე! '))
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე; '))
        );

        $this->assertSame(
            'ჭეშმარიტია. ჩვენც ისე.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('ჭეშმარიტია. ჩვენც ისე: '))
        );
    }
}
