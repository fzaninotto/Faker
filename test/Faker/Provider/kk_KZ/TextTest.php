<?php

namespace Faker\Test\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Text;
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
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар '])
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар— '])
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар,  '])
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар! '])
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар: '])
        );

        $this->assertSame(
            'Арыстан баб кесенесі - көне Отырар.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Арыстан баб кесенесі - көне Отырар; '])
        );
    }
}
