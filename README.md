# URL Scanner
It is just an educational test project. It is a slightly modified example from Josh Lockhart's book "Modern PHP" by O'Reilly (2015).

Scan an array of URLs and report inaccessible URLs

## Install

Via Composer

``` bash
$ composer require susucool/scanner dev-main
```

## Usage

``` php
$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Susucool\Scanner\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
```

## Testing

Tests unavailable.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Susucool](https://github.com/susucool)
- [All Contributors](https://github.com/susucool/scanner/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
