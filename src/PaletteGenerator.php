<?php

declare(strict_types = 1);

namespace MikeAlmond\Color;

class PaletteGenerator
{
    const DEFAULT_DISTANCE = 30;

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

        for ($i = $numberToLighten ; $i > 0; $i--) {
            array_push($colors, $this->baseColor->lighten($percentage * $i)->getHex());
        }
        array_push($colors, $this->baseColor->getHex());

        $j = 0;
        for ($i = $numberToLighten; $i < $steps - 1; $i++) {
            $j++;
            array_push($colors, $this->baseColor->darken($percentage * $j)->getHex());
        }

        return $colors;
    }

    public function adjacent($distance = self::DEFAULT_DISTANCE): array
    {
        
    }

    public function triad($distance = self::DEFAULT_DISTANCE): array
    {
    }

    public function tetrad($distance = self::DEFAULT_DISTANCE): array
    {
    }
}
