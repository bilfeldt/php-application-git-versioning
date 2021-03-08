# A lightweight package for adding git-based versioning to a PHP application - compatible with Laravel and other frameworks.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bilfeldt/php-application-git-versioning.svg?style=flat-square)](https://packagist.org/packages/bilfeldt/php-application-git-versioning)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bilfeldt/php-application-git-versioning/run-tests?label=tests)](https://github.com/bilfeldt/php-application-git-versioning/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bilfeldt/php-application-git-versioning/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bilfeldt/php-application-git-versioning/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/bilfeldt/php-application-git-versioning.svg?style=flat-square)](https://packagist.org/packages/bilfeldt/php-application-git-versioning)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-php-application-git-versioning-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-php-application-git-versioning-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require bilfeldt/php-application-git-versioning
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Bilfeldt\Version\VersionServiceProvider" --tag="php-application-git-versioning-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Bilfeldt\Version\VersionServiceProvider" --tag="php-application-git-versioning-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$php-application-git-versioning = new Bilfeldt\Version();
echo $php-application-git-versioning->echoPhrase('Hello, Bilfeldt!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anders Bilfeldt](https://github.com/bilfeldt)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
