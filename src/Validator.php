<?php

namespace MikeAlmond\Color;

class Validator
{
    /**
     * @param $color
     *
     * @return bool
     */
    public static function isValidHex(string $color) : bool
    {
        $color = ltrim($color, '#');

        return ctype_xdigit($color) && (strlen($color) === 6 || strlen($color) === 3);
    }

    /**
     *
     * @param $red
     * @param $green
     * @param $blue
     *
     * @return bool|mixed
     */
    public static function isValidRgb(int $red, int $green, int $blue) : bool
    {
        // Check to see the values are between 0 and 255 and return false if any are outside the bounds
        return array_reduce([$red, $green, $blue], function ($carry, $color) {
            return max(min(intval($color), 255), 0) === $color && $carry === true;
        }, true);
    }

    /**
     *
     * @param float $hue
     * @param float $saturation
     * @param float $lightness
     *
     * @return bool
     */
    public static function isValidHsl(float $hue, float $saturation, float $lightness) : bool
    {
        // Check to see the values are between 0 and 1 and return false if any are outside the bounds
        return array_reduce([$hue, $saturation, $lightness], function ($carry, $color) {
            return $color >= 0 && $color <= 1 && $carry === true;
        }, true);
    }

    /**
     *
     * @param float $degrees
     *
     * @return bool|mixed
     */
    public static function isValidAdjustment(float $degrees) : bool
    {
        // Check to see the values are between -359 and 359 and return false if any are outside the bounds
        return max(min($degrees, 360), -360) === $degrees;
    }
}
