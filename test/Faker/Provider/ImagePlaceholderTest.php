<?php

namespace Faker\Test\Provider;

use Faker\Provider\ImagePlaceholder;

/**
 * @requires extension gd
 */
class ImagePlaceholderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string Path to image
     */
    private $image;

    protected function setUp()
    {
        $this->image = null;
    }

    protected function tearDown()
    {
        if (is_file($this->image)) {
            unlink($this->image);
        }
    }

    public function testDefaults()
    {
        $this->image = ImagePlaceholder::imagePlaceholder();

        $this->assertFileExists($this->image);

        // uses sys temp dir by default and returns full path by default
        $this->assertEquals(sys_get_temp_dir(), dirname($this->image));

        list($width, $height, $type) = getimagesize($this->image);

        // uses 640x480 as default size
        $this->assertEquals(640, $width);
        $this->assertEquals(480, $height);

        // uses jpg as default type
        $this->assertEquals(IMAGETYPE_JPEG, $type);
        $this->assertEquals('jpg', pathinfo($this->image, PATHINFO_EXTENSION));
    }

    public function testAcceptsCustomDir()
    {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'faker';
        if (!is_dir($dir)) {
            mkdir($dir);
        }

        $this->image = ImagePlaceholder::imagePlaceholder($dir);

        $this->assertFileExists($this->image);
        $this->assertEquals($dir, dirname($this->image));
    }

    public function testAcceptsCustomWidthAndHeight()
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 300, 100);

        $this->assertFileExists($this->image);

        list($width, $height) = getimagesize($this->image);
        $this->assertEquals(300, $width);
        $this->assertEquals(100, $height);
    }

    public function testCanReturnOnlyFilename()
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 640, 480, false);
        $this->assertEquals('.', dirname($this->image));
    }

    public function typeProvider()
    {
        return [
            ['png', IMAGETYPE_PNG],
            ['gif', IMAGETYPE_GIF]
        ];
    }

    /**
     * @dataProvider typeProvider
     */
    public function testCanGeneratePngAndGif($format, $imageType)
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 640, 480, true, 'ccc', '000', $format);
        $this->assertFileExists($this->image);

        list(, , $type) = getimagesize($this->image);

        $this->assertEquals($imageType, $type);
        $this->assertEquals($format, pathinfo($this->image, PATHINFO_EXTENSION));
    }

    public function testAcceptsCustomColors()
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 640, 480, true, '000', 'fff');
        $this->assertFileExists($this->image);
        // TODO: compare with sample image to verify if colors match
    }

    public function testAcceptsCustomFont()
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 640, 480, true, 'ccc', '000', 'jpg', __DIR__ . '/../../../fonts/verdana.ttf');
        $this->assertFileExists($this->image);
        // TODO: compare with sample image to verify if the custom font is used
    }

    public function testAcceptsCustomText()
    {
        $this->image = ImagePlaceholder::imagePlaceholder(null, 640, 480, true, 'ccc', '000', 'jpg', null, 'abcd');
        $this->assertFileExists($this->image);
        // TODO: compare with sample image to verify if the custom text is used
    }

    public function wrongSizeProvider()
    {
        return [
            [0, 0],
            [10, 0],
            [0, 10]
        ];
    }

    /**
     * @dataProvider wrongSizeProvider
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionIfWidthOrHeightIsLessThan1($width, $height)
    {
        ImagePlaceholder::imagePlaceholder(null, $width, $height);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionIfDirIsNotWriteable()
    {
        ImagePlaceholder::imagePlaceholder('/ffjhhhsdf/ghdfsgsa/hdyt345gfg/45gfgfe');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionIfFormatIsNotSupported()
    {
        ImagePlaceholder::imagePlaceholder(null, 640, 480, true, 'ccc', '000', 'bmp');
    }
}
