# color

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]


This library will allow you to alter colours, check readability, and generate different palettes based on a base color.

## Install

Via Composer

``` bash
$ composer require mikealmond/color
```

## Usage

``` php
$color = Color::fromHex('FFFFFF');
echo $color->getRgb()['b']; // 255

$darkerColor = $color->darken(20); // 20% darker

echo $darkerColor; // 'CCCCCC'

if ($darkerColor->isDark()) {
    // do something with a dark color
}


$darkerTextColor = $darkerColor->getMatchingTextColor();


$generator = new PaletteGenerator($darkerColor);
$palette   = $generator->monochromatic(5);

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

- [Mike Almond][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mikealmond/color.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mikealmond/color/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mikealmond/color.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mikealmond/color
[link-travis]: https://travis-ci.org/mikealmond/color
[link-scrutinizer]: https://scrutinizer-ci.com/g/mikealmond/color/code-structure
[link-downloads]: https://packagist.org/packages/mikealmond/color
[link-author]: https://github.com/mikealmond
[link-contributors]: ../../contributors
