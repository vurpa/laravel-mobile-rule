# Validate mobile phone numbers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vurpa/laravel-mobile-rule.svg?style=flat-square)](https://packagist.org/packages/vurpa/laravel-mobile-rule)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vurpa/laravel-mobile-rule/run-tests?label=tests)](https://github.com/vurpa/laravel-mobile-rule/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vurpa/laravel-mobile-rule/Check%20&%20fix%20styling?label=code%20style)](https://github.com/vurpa/laravel-mobile-rule/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vurpa/laravel-mobile-rule.svg?style=flat-square)](https://packagist.org/packages/vurpa/laravel-mobile-rule)

## Installation

You can install the package via composer:

```bash
composer require vurpa/laravel-mobile-rule
```

## Usage

```php
// in a `FormRequest`

use Vurpa\MobileRule\Rules\Mobile;

public function rules()
{
    return [
        'mobile' => ['required', new Mobile(locale: 'sv-SE')],
    ];
}
```

Multiple locales:

```php
// in a `FormRequest`

use Vurpa\MobileRule\Rules\Mobile;

public function rules()
{
    return [
        'mobile' => ['required', new Mobile(locale: ['sv-SE', 'nb-NO'])],
    ];
}
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

- [john](https://github.com/vurpa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
