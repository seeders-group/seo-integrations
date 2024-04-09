# SEO Integrations
> SEO Integrations build with Saloon en Laravel Data.

## Installation

You can install the package via composer:

```bash
composer require seeders-group/seo-integrations
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="seo-integrations-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="seo-integrations-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="seo-integrations-views"
```

## Usage

```php
SeoIntegrations::make()
    ->ahrefs()
    ->domainRating(new DomainRatingRequestData(
        target: 'https://spatie.be',
        date: now(),
    )); // Returns a DomainRatingResponseData object
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jesse Hendriks](https://github.com/jessehendriks)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
