# A library for managing and filtering text with stop words

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axisofstevil/stop-words.svg?style=flat-square)](https://packagist.org/packages/axisofstevil/stop-words)
[![Tests](https://github.com/axisofstevil/stop-words/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/axisofstevil/stop-words/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/axisofstevil/stop-words.svg?style=flat-square)](https://packagist.org/packages/axisofstevil/stop-words)

## Installation

You can install the package via composer:

```bash
composer require axisofstevil/stop-words
```

## Usage

```php
$filter = new Axisofstevil\StopWords\Filter();
echo $filter->cleanText('A Walk to Remember'); // 'Walk Remember'

$filter->setWords(array('a','walk','to'));
echo $filter->cleanText('A Walk to Remember'); // 'Remember'

$filter->mergeWords(array('remember'));
echo $filter->cleanText('A Walk to Remember'); // ''
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

- [Steven Maguire](https://github.com/stevenmaguire)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
