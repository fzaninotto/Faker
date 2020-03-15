<?php

namespace Faker\Test\Provider\el_GR;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
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

    public function testItShouldAppendEndPunctToTheEndOfString()
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
