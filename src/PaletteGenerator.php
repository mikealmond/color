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
        $percentage = 100 / $steps;

        /** @var Color[] $colors */
        $colors = [
            $this->baseColor,
        ];

        for ($i = 1; $i <= $steps; $i++) {
            array_push($colors, $colors[$i - 1]->darken($percentage));
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
