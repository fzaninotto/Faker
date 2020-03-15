<?php

namespace Faker\Test\Provider\fr_FR;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private $textClass;

    protected function setUp(): void
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\fr_FR\Text');
    }

    protected function getMethod($name)
    {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    public function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À '])
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À—   '])
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À,'])
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À! '])
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À: '])
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Que faisaient-elles maintenant? À; '])
        );
    }
}
