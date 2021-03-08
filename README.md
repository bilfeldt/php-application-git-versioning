# Git-based versioning for PHP applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bilfeldt/php-application-git-versioning.svg?style=flat-square)](https://packagist.org/packages/bilfeldt/php-application-git-versioning)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bilfeldt/php-application-git-versioning/run-tests?label=tests)](https://github.com/bilfeldt/php-application-git-versioning/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bilfeldt/php-application-git-versioning/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bilfeldt/php-application-git-versioning/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/bilfeldt/php-application-git-versioning.svg?style=flat-square)](https://packagist.org/packages/bilfeldt/php-application-git-versioning)


A lightweight framework-agnostic git-based versioning package for any PHP application

## Installation

You can install the package via composer:

```bash
composer require bilfeldt/php-application-git-versioning
```

## Usage

### Basic usage
```php
$version = new Bilfeldt\Version();
echo $version->get(); // 20210308000952-19a92d02
```

### Laravel usage
This package binds the `Bilfeldt\Version` class as a singleton into the Service Container and registers a `Version` Facade making it possible to call this anywhere in the application using:

```php
use Bilfeldt\Version\Facades\Version;

Version::get(); // 20210308000952-19a92d02
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Anders Bilfeldt](https://github.com/bilfeldt)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
