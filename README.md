# color

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

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
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mike.almond@gmail.com instead of using the issue tracker.

## Credits

- [Mike Almond][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mikealmond/color.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mikealmond/color/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mikealmond/color.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mikealmond/color.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mikealmond/color.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mikealmond/color
[link-travis]: https://travis-ci.org/mikealmond/color
[link-scrutinizer]: https://scrutinizer-ci.com/g/mikealmond/color/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mikealmond/color
[link-downloads]: https://packagist.org/packages/mikealmond/color
[link-author]: https://github.com/mikealmond
[link-contributors]: ../../contributors
