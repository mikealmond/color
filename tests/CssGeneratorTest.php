<?php

namespace MikeAlmond\Color;

use MikeAlmond\Color\Exceptions\ColorException;
use PHPUnit\Framework\TestCase;

class CssGeneratorTest extends TestCase
{

    public function testRgb()
    {
        self::assertEquals('rgb(0, 255, 0)', CssGenerator::rgb(Color::fromHex('00FF00')));

        self::assertEquals('rgb(0, 255, 0)', CssGenerator::rgb(Color::fromRgb(0, 255, 0)));
    }

    public function testRgba()
    {
        self::assertEquals('rgba(0, 255, 0, 1)', CssGenerator::rgba(Color::fromHex('00FF00'), 1));

        self::assertEquals('rgba(0, 255, 0, 0.5)', CssGenerator::rgba(Color::fromRgb(0, 255, 0), 0.5));
        self::assertEquals('rgba(0, 255, 0, 0.55)', CssGenerator::rgba(Color::fromRgb(0, 255, 0), 0.55));
    }


    public function testCssColorName()
    {
        self::assertEquals('black', CssGenerator::name(Color::fromHex('000000')));

        self::assertEquals('white', CssGenerator::name(Color::fromHex('FFFFFF')));
    }

    /**
     * @dataProvider badHexColors
     *
     * @param $invalidColor
     */
    public function testInvalidCssColorName($invalidColor)
    {
        $this->expectException(ColorException::class);

        self::assertEquals('black', CssGenerator::name(Color::fromHex($invalidColor)));
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
        self::assertEquals('hsl(204, 100%, 50%)', CssGenerator::hsl(Color::fromHex('0099FF')));

        self::assertEquals('hsl(202.6, 100%, 50%)', CssGenerator::hsl(Color::fromRgb(0, 159, 255)));
        self::assertEquals('hsl(201.8, 100%, 47.1%)', CssGenerator::hsl(Color::fromHex('0099f0')));
    }

    public function testHsla()
    {
        self::assertEquals('hsla(204, 100%, 50%, 1)', CssGenerator::hsla(Color::fromHex('0099FF'), 1));

        self::assertEquals('hsla(202.6, 100%, 50%, 0.5)', CssGenerator::hsla(Color::fromRgb(0, 159, 255), 0.5));
        self::assertEquals('hsla(201.8, 100%, 47.1%, 0.55)', CssGenerator::hsla(Color::fromHex('0099f0'), 0.55));
    }
}
