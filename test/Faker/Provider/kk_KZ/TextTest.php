<?php

namespace Faker\Test\Provider\kk_KZ;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private $textClass;

    protected function setUp()
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\kk_KZ\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар '))
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар— '))
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар,  '))
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар!.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар! '))
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар: '))
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('Арыстан баб кесенесі - көне Отырар; '))
        );
    }
}
