<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Provider\zh_TW\Text;
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

    public function testItShouldExplodeTheStringToArray(): void
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

    public function testItShouldReturnTheStringLength(): void
    {
        $this->assertContains(
            $this->getMethod('strlen')->invokeArgs(null, ['中文測試真有趣']),
            [7, 21]
        );
    }

    public function testItShouldReturnTheCharacterIsValidStartOrNot(): void
    {
        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['中']));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['2']));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, ['Hello']));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, ['。']));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, ['！']));
    }

    public function testItShouldAppendEndPunctToTheEndOfString(): void
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
