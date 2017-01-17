<?php

declare(strict_types = 1);

namespace MikeAlmond\Color;

use MikeAlmond\Color\Exceptions\ColorException;
use MikeAlmond\Color\Exceptions\InvalidColorException;

/**
 * Class Color
 * @package MikeAlmond\Color
 */
class Color implements \JsonSerializable
{

    /**
     * @var array
     */
    private $colors = [
        'r' => 0,
        'g' => 0,
        'b' => 0,
    ];

    /**
     * Create a new Skeleton Instance
     *
     * @param $red
     * @param $green
     * @param $blue
     */
    private function __construct(int $red, int $green, int $blue)
    {
        $this->colors = [
            'r' => $red,
            'g' => $green,
            'b' => $blue,
        ];
    }

    /**
     * @param $color
     *
     * @return Color
     */
    public static function fromHex(string $color) : Color
    {
        if (!self::isValidHex($color)) {
            throw new InvalidColorException('Invalid hex value');
        }

        return new self(...array_values(self::hexToRgb($color)));
    }

    /**
     * @param $red
     * @param $green
     * @param $blue
     *
     * @return Color
     */
    public static function fromRgb(int $red, int $green, int $blue) : Color
    {
        if (!self::isValidRgb($red, $green, $blue)) {
            throw new InvalidColorException('Invalid RGB values');
        }

        return new self($red, $green, $blue);
    }

    /**
     * @param $hue
     * @param $saturation
     * @param $lightness
     *
     * @return Color
     */
    public static function fromHsl($hue, $saturation, $lightness) : Color
    {
        if (!self::isValidHsl($hue, $saturation, $lightness)) {
            throw new InvalidColorException('Invalid HSL value');
        }

        return new self(...array_values(self::hslToRgb($hue, $saturation, $lightness)));
    }

    /**
     * @param $color
     *
     * @return bool
     */
    private static function isValidHex(string $color) : bool
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
    private static function isValidRgb(int $red, int $green, int $blue) : bool
    {
        // Check to see the values are between 0 and 255 and return false if any are outside the bounds
        return array_reduce([$red, $green, $blue], function ($carry, $color) {
            return max(min(intval($color), 255), 0) === $color && $carry === true;
        }, true);
    }

    /**
     *
     * @param $hue
     * @param $saturation
     * @param $lightness
     *
     * @return bool
     */
    private static function isValidHsl($hue, $saturation, $lightness) : bool
    {
        // Check to see the values are between 0 and 1 and return false if any are outside the bounds
        return array_reduce([$hue, $saturation, $lightness], function ($carry, $color) {
            return $color >= 0 && $color <= 1 && $carry === true;
        }, true);
    }

    /**
     *
     * @param $degrees
     *
     * @return bool|mixed
     */
    private static function isValidAdjustment($degrees) : bool
    {
        // Check to see the values are between -359 and 359 and return false if any are outside the bounds
        return max(min($degrees, 360), -360) === $degrees;
    }

    public static function degreesToHue($degrees)
    {
        return $degrees / 360;
    }

    public static function hueToDegress($hue)
    {
        return $hue * 360;
    }


    /**
     * @param string $color
     *
     * @return array
     */
    private static function hexToRgb(string $color) : array
    {
        // Convert the shorthand hex to the full hex (09F => 0099FF)
        if (strlen($color) == 3) {
            $color = $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2];
        }

        return [
            'r' => (int) hexdec(substr($color, 0, 2)),
            'g' => (int) hexdec(substr($color, 2, 2)),
            'b' => (int) hexdec(substr($color, 4, 2)),
        ];
    }

    /**
     * @param $p
     * @param $q
     * @param $t
     *
     * @return mixed
     */
    private static function hueToRgb($p, $q, $t) : float
    {
        if ($t < 0) {
            $t += 1;
        }
        if ($t > 1) {
            $t -= 1;
        }

        if ($t < 1 / 6) {
            return $p + ($q - $p) * 6 * $t;
        }
        if ($t < 1 / 2) {
            return $q;
        }
        if ($t < 2 / 3) {
            return $p + ($q - $p) * (2 / 3 - $t) * 6;
        }

        return $p;
    }

    /**
     * @param $hue
     * @param $saturation
     * @param $lightness
     *
     * @return array
     */
    private static function hslToRgb($hue, $saturation, $lightness) : array
    {
        // If saturation is 0, the given color is grey and only
        // lightness is relevant.
        if ($saturation == 0) {
            $lightness = (int) ceil($lightness * 255);

            return ['r' => $lightness, 'g' => $lightness, 'b' => $lightness];
        }

        $q = $lightness < 0.5
            ? $lightness * (1 + $saturation)
            : $lightness + $saturation - $lightness * $saturation;

        $p = 2 * $lightness - $q;

        $red   = self::hueToRgb($p, $q, $hue + 1 / 3);
        $green = self::hueToRgb($p, $q, $hue);
        $blue  = self::hueToRgb($p, $q, $hue - 1 / 3);

        return [
            'r' => (int) round($red * 255, 2),
            'g' => (int) round(round($green, 2) * 255),
            'b' => (int) round($blue * 255, 2),
        ];
    }

    /**
     *
     * @return float
     */
    public function getLuminosity() : float
    {
        return 0.2126 * pow($this->colors['r'] / 255, 2.2)
            + 0.7152 * pow($this->colors['g'] / 255, 2.2)
            + 0.0722 * pow($this->colors['b'] / 255, 2.2);
    }

    /**
     * @return string
     */
    public function getHex() : string
    {
        return sprintf(
            '%02X%02X%02X',
            $this->colors['r'],
            $this->colors['g'],
            $this->colors['b']
        );
    }

    /**
     * @return array
     */
    public function getRgb() : array
    {
        return $this->colors;
    }

    /**
     * Converts RGB color to HSL color
     * @see http://en.wikipedia.org/wiki/HSL_and_HSV#Hue_and_chroma
     *
     * @return array
     */
    public function getHsl() : array
    {
        $red   = $this->colors['r'] / 255;
        $green = $this->colors['g'] / 255;
        $blue  = $this->colors['b'] / 255;

        // Determine lowest & highest value and chroma
        $max    = max($red, $green, $blue);
        $min    = min($red, $green, $blue);
        $chroma = $max - $min;

        // Calculate Luminosity
        $lightness = ($max + $min) / 2;

        // If chroma is 0, the given color is grey
        // therefore hue and saturation are set to 0
        if ($chroma == 0) {

            return ['h' => 0, 's' => 0, 'l' => $lightness];
        }

        $saturation = $lightness > 0.5
            ? $chroma / (2 - $max - $min)
            : $chroma / ($max + $min);

        switch ($max) {
            case $red:
                $hue = ($green - $blue) / $chroma + ($green < $blue ? 6 : 0);
                break;

            case $green:
                $hue = ($blue - $red) / $chroma + 2;
                break;

            case $blue:
            default:
                $hue = ($red - $green) / $chroma + 4;
                break;
        }

        $hue /= 6;

        // Return HSL Color as array
        return ['h' => $hue, 's' => $saturation, 'l' => $lightness];
    }

    /**
     * Based on the W3C working draft on accessibility's brightness formula
     * https://www.w3.org/TR/AERT#color-contrast
     *
     * @return float
     */
    public function getBrightness() : float
    {
        return (($this->colors['r'] * 299) + ($this->colors['g'] * 587) + ($this->colors['b'] * 114)) / 1000;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->getHex();
    }

    /**
     * @return array
     */
    public function jsonSerialize() : array
    {
        return $this->colors;
    }

    /**
     * This works by summing up the differences between the three color components red, green and blue.
     * A value higher than 500 is recommended for good readability.
     *
     * @param Color $color
     *
     * @return int
     */
    public function colorDifference(Color $color) : int
    {
        $color2 = $color->getRgb();

        return (int) abs($this->colors['r'] - $color2['r'])
            + (int) abs($this->colors['g'] - $color2['g'])
            + (int) abs($this->colors['b'] - $color2['b']);
    }

    /**
     * This function tries to compare the brightness of the colors. A return value of
     * more than 125 is recommended. Combining it with the color difference above might make sense.
     *
     * @param Color $color
     *
     * @return float
     */
    public function brightnessDifference(Color $color) : float
    {
        return (float) abs($this->getBrightness() - $color->getBrightness());
    }

    /**
     * Uses the luminosity to calculate the difference between the given colors.
     * The returned value should be bigger than 5 for best readability.
     *
     * @param Color $color
     *
     * @return float
     */
    public function luminosityContrast(Color $color) : float
    {
        $colorLuminosity1 = $this->getLuminosity() + 0.05;
        $colorLuminosity2 = $color->getLuminosity() + 0.05;

        return max($colorLuminosity1, $colorLuminosity2) / min($colorLuminosity1, $colorLuminosity2);
    }

    /**
     * @param Color $color
     *
     * @return bool
     */
    public function isReadable(Color $color) : bool
    {
        return $this->brightnessDifference($color) >= 100;
    }

    /**
     * @param $percentage
     *
     * @return Color
     */
    public function darken($percentage) : Color
    {
        $colors = $this->getHsl();
        $colors['l'] -= ($percentage / 100);

        $darkerColor = self::hslToRgb($colors['h'], $colors['s'], max(round($colors['l'], 5), 0));

        return new self(...array_values($darkerColor));
    }

    /**
     * @param $percentage
     *
     * @return Color
     */
    public function lighten($percentage) : Color
    {
        $colors = $this->getHsl();
        $colors['l'] += ($percentage / 100);

        $lighterColor = self::hslToRgb($colors['h'], $colors['s'], min(round($colors['l'], 5), 255));

        return new self(...array_values($lighterColor));
    }

    /**
     * @param $degrees
     *
     * @return Color
     */
    public function adjustHue($degrees = 30) : Color
    {
        if (!self::isValidAdjustment($degrees)) {
            throw new ColorException('You must specify a proper value between 360 and -360');
        }

        $colors = $this->getHsl();

        $hue = self::hueToDegress($colors['h']) + $degrees;


        if ($hue >= 360) {
            $hue -= 360;
        } else if ($hue < 0) {
            $hue += 360;
        }

        $adjustedColor = self::hslToRgb(self::degreesToHue($hue), $colors['s'], min(round($colors['l'], 5), 255));

        return new self(...array_values($adjustedColor));
    }

    /**
     * @param Color $color
     *
     * @return bool
     */
    public function equals(Color $color) : bool
    {
        return $this->getHex() == $color->getHex();
    }
}

