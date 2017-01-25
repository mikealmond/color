<?php

declare(strict_types = 1);

namespace MikeAlmond\Color;

/**
 * Class PaletteGenerator
 * @package MikeAlmond\Color
 */
class PaletteGenerator
{
    /**
     * The default distance in degrees to calculate hue adjustments
     */
    const DEFAULT_DISTANCE = 40;

    /**
     * @var Color
     */
    public $baseColor;

    /**
     * PaletteGenerator constructor.
     *
     * @param Color $baseColor
     */
    public function __construct(Color $baseColor)
    {
        $this->baseColor = $baseColor;
    }

    /**
     * @param int $steps
     *
     * @return Color[]
     */
    public function monochromatic($steps = 5): array
    {
        $colors          = [];
        $percentage      = 80 / $steps;
        $numberToLighten = floor(($this->baseColor->getHsl()['l'] * 80) / $percentage);

        for ($i = $numberToLighten; $i > 0; $i--) {
            array_push($colors, $this->baseColor->lighten($percentage * $i));
        }

        array_push($colors, $this->baseColor);

        for ($i = 1; $i < $steps - $numberToLighten + 1; $i++) {
            array_push($colors, $this->baseColor->darken($percentage * $i));
        }

        return $colors;
    }

    /**
     * @param int $distance
     *
     * @return Color[]
     */
    public function adjacent($distance = self::DEFAULT_DISTANCE): array
    {
        return [
            $this->baseColor->adjustHue($distance * -1),
            $this->baseColor,
            $this->baseColor->adjustHue($distance),
        ];
    }

    /**
     * @param int $distance
     *
     * @return Color[]
     */
    public function triad($distance = self::DEFAULT_DISTANCE): array
    {
        return [
            $this->baseColor,
            $this->baseColor->adjustHue(180 - $distance),
            $this->baseColor->adjustHue(180 + $distance),
        ];
    }

    /**
     * @param int $distance
     *
     * @return Color[]
     */
    public function tetrad($distance = self::DEFAULT_DISTANCE): array
    {
        return [
            $this->baseColor,
            $this->baseColor->adjustHue(180),
            $this->baseColor->adjustHue($distance * -1),
            $this->baseColor->adjustHue(180 + $distance),
        ];
    }
}
