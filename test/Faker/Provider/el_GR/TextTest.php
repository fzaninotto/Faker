<?php

namespace Faker\Test\Provider\el_GR;

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
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ '])
        );

        $this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ—'])
        );

        $this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ,'])
        );

        $this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ!.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ! '])
        );

        $this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ; '])
        );

        $this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            $this->getMethod('appendEnd')->invokeArgs(null, ['Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ: '])
        );
    }
}
