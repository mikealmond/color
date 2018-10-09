<?php

use MikeAlmond\Color\Color;
use MikeAlmond\Color\CssGenerator;
use MikeAlmond\Color\PaletteGenerator;
use MikeAlmond\Color\X11Colors;

require __DIR__ . '/../vendor/autoload.php';

$backgroundColor = Color::fromHex(array_rand(X11Colors::$colors));

$generator = new PaletteGenerator($backgroundColor);

?>
<html>
<body bgcolor="<?php echo CssGenerator::hex($backgroundColor); ?>">


<div style="margin:20px auto; width:876px;">
    <?php
    $palette = $generator->monochromatic(5);
    foreach ($palette as $color) {
        printf('<div style="width:250px;height:15px;background-color:%s;color:%s;border:1px solid %s;float:left;text-align:center; padding: 20px;">%s</div>',
            CssGenerator::hex($color),
            CssGenerator::hex($color->getMatchingTextColor()),
            CssGenerator::hex($color->darken(50)),
            CssGenerator::hasName($color) ? CssGenerator::name($color) : CssGenerator::hex($color)
        );
    }
    ?>
    <div style="clear:both;"></div>
</div>

<div style="margin:20px auto; width:876px;">
    <?php
    $palette = $generator->tetrad(30);

    foreach ($palette as $color) {
        printf('<div style="width:250px;height:15px;background-color:%s;color:%s;border:1px solid %s;float:left;text-align:center; padding: 20px;">%s</div>',
            CssGenerator::hex($color),
            CssGenerator::hex($color->getMatchingTextColor()),
            CssGenerator::hex($color->darken(50)),
            CssGenerator::hasName($color) ? CssGenerator::name($color) : CssGenerator::hex($color)
        );
    }
    ?>
    <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>


<div style="clear:both;margin:100px auto; width:876px;">
    <?php
    foreach (X11Colors::$colors as $hex => $colorNames) {
        printf('<div style="width:250px;height:15px;background-color:%s;color:%s;border:1px solid %s;float:left;text-align:center; padding: 20px;">%s</div>',
            CssGenerator::hex(Color::fromHex($hex)),
            CssGenerator::hex(Color::fromHex($hex)->getMatchingTextColor()),
            CssGenerator::hex(Color::fromHex($hex)->darken(100)),
            $colorNames[0]
        );
    }
    ?>
    <div style="clear:both;"></div>
</div>
</body>
</html>
