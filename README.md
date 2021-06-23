# A simple `make:view` command for Laravel applications.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/laravel-make-view.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/laravel-make-view)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/laravel-make-view/run-tests?label=tests)](https://github.com/ryangjchandler/laravel-make-view/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/laravel-make-view/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/laravel-make-view/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/laravel-make-view.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/laravel-make-view)

Quickly generate a new Blade view from the console using `artisan make:view`.

## Installation

You can install the package via composer:

```bash
composer require ryangjchandler/laravel-make-view
```

## Usage

```bash
php artisan make:view name.of.view.here
```

This will create a file at `resources/views/name/of/view/here.blade.php`. Use dot-notation for the view name, just as you would inside of the `view()` function.

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

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
