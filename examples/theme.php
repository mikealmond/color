<?php

use MikeAlmond\Color\Color;
use MikeAlmond\Color\PaletteGenerator;

require __DIR__ . '/../vendor/autoload.php';

$baseColor = Color::fromHex($_GET['color'] ?? 'C91414');
$generator = new PaletteGenerator($baseColor);
$distance  = ($_GET['distance'] ?? 45);

echo '<div style="float:left;margin:20px;">';

$palette = $generator->triad($distance);
array_push($palette, $baseColor->darken(20));

foreach ($palette as $color) {
    print sprintf('<div style="background-color: #%s;width:200px;height:50px;color:#%s;">%s<br>%s</div>',
        $color->getHex(),
        $color->getMatchingTextColor()->getHex(),
        $color->getHex(),
        $color->getMatchingTextColor()->getHex()
    );
}

echo '</div><div style="float:left;margin:20px;">';

$palette = $generator->monochromatic(3);
array_unshift($palette, $baseColor->adjustHue(180));
array_pop($palette);
foreach ($palette as $color) {
    print sprintf('<div style="background-color: #%s;width:200px;height:50px;color:#%s;">%s<br>%s</div>',
        $color->getHex(),
        $color->getMatchingTextColor()->getHex(),
        $color->getHex(),
        $color->getMatchingTextColor()->getHex()
    );
}

echo '</div><div style="float:left;margin:20px;">';

$palette = [
    $baseColor,
    $baseColor->isDark() ? $baseColor->lighten(50) : $baseColor->darken(50),
    $baseColor->adjustHue(180),
    $baseColor->adjustHue(180)->isDark() ? $baseColor->adjustHue(180)->lighten(50) : $baseColor->adjustHue(180)->darken(50),
];
foreach ($palette as $color) {
    print sprintf('<div style="background-color: #%s;width:200px;height:50px;color:#%s;">%s<br>%s</div>',
        $color->getHex(),
        $color->getMatchingTextColor()->getHex(),
        $color->getHex(),
        $color->getMatchingTextColor()->getHex()
    );
}

echo '</div><div style="float:left;margin:20px;">';

$palette = [
    $baseColor->adjustHue(180 - $distance),
    $baseColor->adjustHue(180 - $distance)->isDark() ? $baseColor->adjustHue(180 - $distance)->lighten(50) : $baseColor->adjustHue(180)->darken(50),
    $baseColor,
    $baseColor->adjustHue(180 - $distance)->isDark() ? $baseColor->adjustHue(180 - $distance)->lighten(75) : $baseColor->adjustHue(180)->darken(75),
];
foreach ($palette as $color) {
    print sprintf('<div style="background-color: #%s;width:200px;height:50px;color:#%s;">%s<br>%s</div>',
        $color->getHex(),
        $color->getMatchingTextColor()->getHex(),
        $color->getHex(),
        $color->getMatchingTextColor()->getHex()
    );
}

echo '</div><div style="float:left;margin:20px;">';

$palette = [
    $baseColor->adjustHue(180 + $distance),
    $baseColor->adjustHue(180 + $distance)->isDark() ? $baseColor->adjustHue(180 + $distance)->lighten(50) : $baseColor->adjustHue(180 + $distance)->darken(50),
    $baseColor,
    $baseColor->adjustHue(180 + $distance)->isDark() ? $baseColor->adjustHue(180 + $distance)->lighten(75) : $baseColor->adjustHue(180 + $distance)->darken(75),
];
foreach ($palette as $color) {
    print sprintf('<div style="background-color: #%s;width:200px;height:50px;color:#%s;">%s<br>%s</div>',
        $color->getHex(),
        $color->getMatchingTextColor()->getHex(),
        $color->getHex(),
        $color->getMatchingTextColor()->getHex()
    );
}

echo '</div>';
