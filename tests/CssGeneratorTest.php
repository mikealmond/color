<?php

namespace MikeAlmond\Color;

class CssGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testRgb()
    {
        $this->assertEquals('rgb(0, 255, 0)', CssGenerator::rgb(Color::fromHex('00FF00')));

        $this->assertEquals('rgb(0, 255, 0)', CssGenerator::rgb(Color::fromRgb(0, 255, 0)));
    }

    public function testRgba()
    {
        $this->assertEquals('rgb(0, 255, 0, 1)', CssGenerator::rgba(Color::fromHex('00FF00'), 1));

        $this->assertEquals('rgb(0, 255, 0, 0.5)', CssGenerator::rgba(Color::fromRgb(0, 255, 0), 0.5));
        $this->assertEquals('rgb(0, 255, 0, 0.55)', CssGenerator::rgba(Color::fromRgb(0, 255, 0), 0.55));
    }


    public function testCssColorName()
    {
        $this->assertEquals('black', CssGenerator::name(Color::fromHex('000000')));

        $this->assertEquals('white', CssGenerator::name(Color::fromHex('FFFFFF')));
    }

    /**
     * @dataProvider badHexColors
     *
     * @param $invalidColor
     */
    public function testInvalidCssColorName($invalidColor)
    {
        $this->expectException('\MikeAlmond\Color\Exceptions\ColorException');
        $this->assertEquals('black', CssGenerator::name(Color::fromHex($invalidColor)));
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
            ['000001'],
            [0],
        ];
    }


    public function testHsl()
    {
        $this->assertEquals('hsl(204, 100%, 50%)', CssGenerator::hsl(Color::fromHex('0099FF')));

        $this->assertEquals('hsl(202.6, 100%, 50%)', CssGenerator::hsl(Color::fromRgb(0, 159, 255)));
        $this->assertEquals('hsl(201.8, 100%, 47.1%)', CssGenerator::hsl(Color::fromHex('0099f0')));
    }

    public function testHsla()
    {
        $this->assertEquals('hsla(204, 100%, 50%, 1)', CssGenerator::hsla(Color::fromHex('0099FF'), 1));

        $this->assertEquals('hsla(202.6, 100%, 50%, 0.5)', CssGenerator::hsla(Color::fromRgb(0, 159, 255), 0.5));
        $this->assertEquals('hsla(201.8, 100%, 47.1%, 0.55)', CssGenerator::hsla(Color::fromHex('0099f0'), 0.55));
    }
}
