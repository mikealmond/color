# color

[![Build Status](https://travis-ci.org/mikealmond/color.svg?branch=master)](https://travis-ci.org/mikealmond/color)
[![Code Coverage](https://scrutinizer-ci.com/g/mikealmond/color/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mikealmond/color/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mikealmond/color/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mikealmond/color/?branch=master)


This library will allow you to alter colors, check readability, and generate different palettes based on a base color.

## Install

Via Composer

``` bash
$ composer require mikealmond/color
```

## Usage

```php
$color = Color::fromHex('FFFFFF');
echo $color->getRgb()['b']; // 255

/** @var Color $darkerColor */
$darkerColor = $color->darken(50); // 50% darker

echo $darkerColor; // implements `__toString()`

if ($darkerColor->isDark()) {
    // do something with a dark color
}
```

```php
// Create a color palette based on #663399
$color     = Color::fromCssColor('RebeccaPurple');
$generator = new PaletteGenerator($color);
$palette   = $generator->triad(40);

foreach ($palette as $color) {
    printf(
    '<div style="background-color:%s;color:%s;text-align:center;">%s</div>',
        CssGenerator::hex($color),
        CssGenerator::hex($color->getMatchingTextColor()),
        CssGenerator::rgb($color)
    );
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Mike Almond](https://github.com/mikealmond)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
