<?php
/**
 * Created by PhpStorm.
 * User: Almond
 * Date: 2017-01-17
 * Time: 1:19 PM
 */

namespace MikeAlmond\Color;

/**
 * Class PaletteGeneratorTest
 * @package MikeAlmond\Color
 */
class PaletteGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testMonochromatic()
    {

        $base = Color::fromHex('999999');

        $generator = new PaletteGenerator($base);
        $palette = $generator->monochromatic(7);


        self::assertEquals('5F5F5F', $palette[6]);
    }
}
