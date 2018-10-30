<?php

namespace Faker\Test\Provider\fr_FR;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private $textClass;

    public function setUp()
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\fr_FR\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À '))
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À—   '))
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À,'))
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À!.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À! '))
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À: '))
        );

        $this->assertSame(
            'Que faisaient-elles maintenant? À.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Que faisaient-elles maintenant? À; '))
        );
    }
}
