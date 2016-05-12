<?php

namespace Faker\Test\Provider\zh_TW;

class TextTest extends \PHPUnit_Framework_TestCase
{
    private $textClass;

    public function setUp()
    {
        $this->textClass = new \ReflectionClass('Faker\Provider\zh_TW\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    /** @test */
    function it_should_explode_the_string_to_array()
    {
        $this->assertSame(
            array('中', '文', '測', '試', '真', '有', '趣'),
            $this->getMethod('explode')->invokeArgs(null, array('中文測試真有趣'))
        );

        $this->assertSame(
            array('標', '點', '，', '符', '號', '！'),
            $this->getMethod('explode')->invokeArgs(null, array('標點，符號！'))
        );
    }

    /** @test */
    function it_should_return_the_string_length()
    {
        $this->assertContains(
            $this->getMethod('strlen')->invokeArgs(null, array('中文測試真有趣')),
            array(7, 21)
        );
    }

    /** @test */
    function it_should_return_the_character_is_valid_start_or_not()
    {
        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, array('中')));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, array('2')));

        $this->assertTrue($this->getMethod('validStart')->invokeArgs(null, array('Hello')));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, array('。')));

        $this->assertFalse($this->getMethod('validStart')->invokeArgs(null, array('！')));
    }

    /** @test */
    function it_should_append_end_punct_to_the_end_of_string()
    {
        $this->assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣'))
        );

        $this->assertSame(
            '中文測試真有趣。',
            $this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣，'))
        );

        $this->assertSame(
            '中文測試真有趣！',
            $this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣！'))
        );
    }
}
