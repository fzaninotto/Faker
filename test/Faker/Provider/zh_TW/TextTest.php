<?php

namespace Faker\Test\Provider\zh_TW;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private $textClass;

    protected function setUp(): void
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\zh_TW\Text');
    }

    protected function getMethod($name)
    {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    public function testItShouldExplodeTheStringToArray()
    {
        $this->assertSame(
            ['中', '文', '測', '試', '真', '有', '趣'],
            $this->getMethod('explode')->invokeArgs(null, ['中文測試真有趣'])
        );

        $this->assertSame(
            ['標', '點', '，', '符', '號', '！'],
            $this->getMethod('explode')->invokeArgs(null, ['標點，符號！'])
        );
    }

    public function testItShouldReturnTheStringLength()
    {
        $this->assertContains(
            $this->getMethod('strlen')->invokeArgs(null, ['中文測試真有趣']),
            [7, 21]
        );
    }

    public function testItShouldReturnTheCharacterIsValidStartOrNot()
    {
        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['中']));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['2']));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['Hello']));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, ['。']));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, ['！']));
    }

    public function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣'])
        );

        $this->assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣，'])
        );

        $this->assertSame(
            '中文測試真有趣！',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣！'])
        );
    }
}
