<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Test\TestCase;

final class TextTest extends TestCase
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
        self::assertSame(
            ['中', '文', '測', '試', '真', '有', '趣'],
            $this->getMethod('explode')->invokeArgs(null, ['中文測試真有趣'])
        );

        self::assertSame(
            ['標', '點', '，', '符', '號', '！'],
            $this->getMethod('explode')->invokeArgs(null, ['標點，符號！'])
        );
    }

    public function testItShouldReturnTheStringLength()
    {
        self::assertContains(
            $this->getMethod('strlen')->invokeArgs(null, ['中文測試真有趣']),
            [7, 21]
        );
    }

    public function testItShouldReturnTheCharacterIsValidStartOrNot()
    {
        self::assertTrue($this->getMethod('validStart')->invokeArgs(null, ['中']));

        self::assertTrue($this->getMethod('validStart')->invokeArgs(null, ['2']));

        self::assertTrue($this->getMethod('validStart')->invokeArgs(null, ['Hello']));

        self::assertFalse($this->getMethod('validStart')->invokeArgs(null, ['。']));

        self::assertFalse($this->getMethod('validStart')->invokeArgs(null, ['！']));
    }

    public function testItShouldAppendEndPunctToTheEndOfString()
    {
        self::assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣'])
        );

        self::assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣，'])
        );

        self::assertSame(
            '中文測試真有趣！',
            $this->getMethod('appendEnd')->invokeArgs(null, ['中文測試真有趣！'])
        );
    }
}
