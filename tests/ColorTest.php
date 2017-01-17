<?php

namespace MikeAlmond\Color;

use MikeAlmond\Color\Exceptions\InvalidColorException;

/**
 * Class ColorTest
 * @package MikeAlmond\Color
 */
class ColorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider badHexColors
     *
     * @param $color
     */
    public function testInvalidHexValues($color)
    {
        $this->expectException('\MikeAlmond\Color\Exceptions\InvalidColorException');
        Color::fromHex($color);
    }

    /**
     * @dataProvider goodHexColors
     *
     * @param $hex
     */
    public function testValidHexValues($hex)
    {
        $color = Color::fromHex($hex);

        $this->assertInstanceOf(Color::class, $color);
    }

    /**
     * @dataProvider badRgbColors
     *
     * @param $red
     * @param $green
     * @param $blue
     */
    public function testInvalidRgbValues($red, $green, $blue)
    {
        $this->expectException('\MikeAlmond\Color\Exceptions\InvalidColorException');
        try {
            Color::fromRgb($red, $green, $blue);
        } catch (\TypeError $e) {
            throw new InvalidColorException($e->getMessage(), 0, $e);
        }
    }

    /**
     * @dataProvider goodRgbColors
     *
     * @param $red
     * @param $green
     * @param $blue
     */
    public function testValidRgbValues($red, $green, $blue)
    {
        $color = Color::fromRgb($red, $green, $blue);

        $this->assertInstanceOf(Color::class, $color);
        $this->assertEquals(['r' => $red, 'g' => $green, 'b' => $blue], $color->getRgb());
    }

    /**
     *
     */
    public function testConvertsToHex()
    {
        $color1 = Color::fromRgb(255, 0, 0);
        $color2 = Color::fromHex('FF0000');

        $this->assertEquals('FF0000', $color1);
        $this->assertEquals(strval($color1), strval($color2));

        $color = Color::fromRgb(255, 0, 0);
        $this->assertEquals('FF0000', $color->getHex());

        $color = Color::fromRgb(255, 0, 255);
        $this->assertEquals('FF00FF', strval($color));
    }

    /**
     *
     */
    public function testJsonEncode()
    {
        $color1 = Color::fromRgb(255, 0, 255);
        $color2 = Color::fromHex('FF00FF');

        $this->assertEquals('{"r":255,"g":0,"b":255}', json_encode($color1));
        $this->assertEquals('{"r":255,"g":0,"b":255}', json_encode($color2));
    }

    public function testDarkerColor()
    {
        $darkerColor = Color::fromHex('CCCCCC')->darken(20);

        $this->assertEquals('999999', strval($darkerColor));

        $darkerColor = Color::fromHex('000000')->darken(20);
        $this->assertEquals('000000', strval($darkerColor));

        $darkerColor = Color::fromHex('0099FF')->darken(20);
        $this->assertEquals('005C99', strval($darkerColor));

        $darkerColor = Color::fromHex('FFFFFF')->darken(20);
        $this->assertEquals('CCCCCC', strval($darkerColor));
    }

    public function testLightenColor()
    {
        $lighterColor = Color::fromHex('999999')->lighten(20);
        $this->assertEquals('CCCCCC', strval($lighterColor));

        $lighterColor = Color::fromHex('000000')->lighten(20);
        $this->assertEquals('333333', strval($lighterColor));

        $lighterColor = Color::fromHex('CCCCCC')->lighten(20);
        $this->assertEquals('FFFFFF', strval($lighterColor));
    }

    public function testHsl()
    {
        $color = Color::fromHsl(0, 1, 0.5);
        $this->assertEquals('FF0000', strval($color));

        $darkerColor = Color::fromHex('FF9900')->darken(100);
        $this->assertEquals(['h' => 0, 's' => 0, 'l' => 0], $darkerColor->getHsl());

        $color = Color::fromHsl(1, 1, 0.2);
        $this->assertEquals('660000', strval($color));

        $color = Color::fromHsl(1, 1, 0.9);
        $this->assertEquals('FFCDCD', strval($color));
        $this->assertEquals(['h' => 0, 's' => 1, 'l' => 0.90196078431372551], $color->getHsl());

        $green = Color::fromRgb(0, 255, 0);
        $this->assertEquals(['h' => 1 / 3, 's' => 1, 'l' => 0.5], $green->getHsl());
    }

    /**
     */
    public function testBadHsl()
    {
        $this->expectException('\MikeAlmond\Color\Exceptions\InvalidColorException');
        $color = Color::fromHsl(1.1, 1, 0.5);
        $this->assertEquals('FF0000', strval($color));
    }

    public function testEquals()
    {
        $white1 = Color::fromHex('FFFFFF');
        $white2 = Color::fromRgb(255, 255, 255);

        $this->assertEquals(true, $white1->equals($white2));
    }

    public function testLuminosityContrast()
    {
        $white1 = Color::fromHex('FFFFFF');
        $white2 = Color::fromRgb(255, 255, 255);

        $this->assertEquals(1, $white1->luminosityContrast($white2));
        $this->assertEquals(false, $white1->isReadable($white2));

        $this->assertEquals(0, $white1->colorDifference($white2));
        $this->assertEquals(765, $white1->colorDifference(Color::fromHex('000000')));

        $this->assertEquals(255, $white1->getBrightness());

        $this->assertEquals(false, $white1->isReadable($white2));
    }


    public function testAdjustHue()
    {
        $color = Color::fromHex('0099FF');

        $this->assertEquals('FF6600', $color->adjustHue(180)->getHex());

        $this->assertEquals('0099FF', $color->adjustHue(30)->adjustHue(-30)->getHex());
    }
    /**
     * @return array
     */
    public function badHexColors()
    {
        return [
            ['HELLO',],
            ['BADHEX'],
            ['2020303'],
            [''],
            ['0099F'],
            [0],
        ];
    }

    /**
     * @return array
     */
    public function goodHexColors()
    {
        return [
            ['09F'],
            ['AAABBB'],
            ['0099FF'],
        ];
    }

    /**
     * @return array
     */
    public function badRgbColors()
    {
        return [
            ['HELLO', null, null],
            [-10, 0, 0],
            [0, 0, 256],
            ['', null, null],
        ];
    }

    /**
     * @return array
     */
    public function goodRgbColors()
    {
        return [
            [100, 0, 200],
            [0, 0, 250],
            [100, 100, 0],
        ];
    }
}
