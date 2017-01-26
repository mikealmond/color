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
        $this->setExpectedException('\MikeAlmond\Color\Exceptions\InvalidColorException');
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
        $this->setExpectedException('\MikeAlmond\Color\Exceptions\InvalidColorException');
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


        $this->assertEquals('FF00FF', Color::fromHex('#FF00FF'));
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
        $this->assertEquals('A4A4A4', strval($darkerColor));

        $darkerColor = Color::fromHex('000000')->darken(20);
        $this->assertEquals('000000', strval($darkerColor));

        $darkerColor = Color::fromHex('0099FF')->darken(20);
        $this->assertEquals('007ACC', strval($darkerColor));

        $darkerColor = Color::fromHex('FFFFFF')->darken(20);
        $this->assertEquals('CCCCCC', strval($darkerColor));
    }

    public function testIsDark()
    {
        $this->assertEquals(false, Color::fromHex('FFFFFF')->isDark());

        $this->assertEquals(true, Color::fromHex('000000')->isDark());
    }

    public function testLightenColor()
    {
        $lighterColor = Color::fromHex('999999')->lighten(20);
        $this->assertEquals('B8B8B8', strval($lighterColor));

        $lighterColor = Color::fromHex('000000')->lighten(20);
        $this->assertEquals('000000', strval($lighterColor));

        $lighterColor = Color::fromHex('CCCCCC')->lighten(20);
        $this->assertEquals('F5F5F5', strval($lighterColor));
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
        $this->assertEquals('FFCCCC', strval($color));
        $this->assertEquals(['h' => 0, 's' => 1, 'l' => 0.9], $color->getHsl());

        $green = Color::fromRgb(0, 255, 0);
        $this->assertEquals(['h' => 1 / 3, 's' => 1, 'l' => 0.5], $green->getHsl());

        $red1 = Color::fromHsl(0, 1, 0.5);
        $red2 = Color::fromRgb(255, 0, 0);
        $this->assertEquals(true, $red1->equals($red2));
    }

    /**
     */
    public function testBadHsl()
    {
        $this->setExpectedException('\MikeAlmond\Color\Exceptions\InvalidColorException');
        $color = Color::fromHsl(1.1, 1, 0.5);
        $this->assertEquals('FF0000', strval($color));
    }

    public function testEquals()
    {
        $white1 = Color::fromHex('FFFFFF');
        $white2 = Color::fromRgb(255, 255, 255);

        $this->assertEquals(true, $white1->equals($white2));

        $this->assertEquals(true, Color::fromHex('009AFF')->equals(Color::fromRgb(0, 154, 255)));
        $this->assertEquals(true, Color::fromHex('0099FF')->equals(Color::fromRgb(0, 153, 255)));
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

        $color     = Color::fromHex('0099FF');
        $hue       = $color->getHsl();
        $sameColor = Color::fromHsl($hue['h'], $hue['s'], $hue['l']);
        $this->assertEquals($color->getHex(), $sameColor->getHex());

        /**
         * Failing test
         *
         * $color = Color::fromHex('009AFF');
         * $hue = $color->getHsl();
         * $sameColor = Color::fromHsl($hue['h'], $hue['s'], $hue['l']);
         * $this->assertEquals(0, $hue['h'] - $sameColor->getHsl()['h']);
         */

        $this->assertEquals('00FF00', Color::fromHex('FF0000')->adjustHue(120)->getHex());

        $this->assertEquals('FF6600', Color::fromHex('0099FF')->adjustHue(180)->getHex());

        // Converting 009AFF -> HSL -> HEX results in 0099FF
        $this->assertEquals('0099FF', Color::fromHex('0099FF')->adjustHue(30)->adjustHue(-30)->getHex());
        $this->assertEquals('0099FF', Color::fromHex('009AFF')->adjustHue(30)->adjustHue(-30)->getHex());

        $this->assertEquals('00FF00', Color::fromHex('FF00FF')->adjustHue(180)->getHex());

        // Full circle
        $this->assertEquals('FF00FF', Color::fromHex('FF00FF')->adjustHue(360)->getHex());

        $this->assertEquals('FF00FF', Color::fromHex('FF00FF')->adjustHue(-360)->getHex());
    }

    /**
     */
    public function testBadAdjustment()
    {
        $this->setExpectedException('\MikeAlmond\Color\Exceptions\ColorException');

        Color::fromHex('FF00FF')->adjustHue(720)->getHex();
    }

    public function testMatchingTextColor()
    {
        $this->assertEquals('FFFFFF', Color::fromHex('C91414')->getMatchingTextColor()->getHex());
        $this->assertEquals('000000', Color::fromHex('5CF081')->getMatchingTextColor()->getHex());
        $this->assertEquals('F8BABA', Color::fromHex('930F0E')->getMatchingTextColor()->getHex());
        $this->assertEquals('CCCCCC', Color::fromHex('000000')->getMatchingTextColor()->getHex());
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
            ['#0099FF'],
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

    public function testCssColor()
    {
        $this->assertEquals('FFFFFF', Color::fromCssColor('white')->getHex());
        $this->assertEquals('40E0D0', Color::fromCssColor('turquoise')->getHex());
        $this->assertEquals('00FFFF', Color::fromCssColor('cyan')->getHex());
        $this->assertEquals('00FFFF', Color::fromCssColor('aqua')->getHex());
    }

    public function testBadCssColor()
    {
        $this->setExpectedException('\MikeAlmond\Color\Exceptions\ColorException');
        $this->assertEquals('FFFFFF', Color::fromCssColor('AlmondJoy')->getHex());
    }
}
