# Action

![Tests](https://github.com/ninthspace/action/workflows/Tests/badge.svg?branch=master)
[![Coverage](https://codecov.io/gh/ninthspace/action/branch/master/graph/badge.svg)](https://codecov.io/gh/ninthspace/action)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ninthspace/action.svg?style=flat-square)](https://packagist.org/packages/ninthspace/action)
[![Total Downloads](https://img.shields.io/packagist/dt/ninthspace/action.svg?style=flat-square)](https://packagist.org/packages/ninthspace/action)

A simple Action class for PHP.

## Installation

You can install the package via composer:

```bash
composer require ninthspace/action
```

## Usage

An Action class is just a way of encapsulating repeatable or reusable code, which is usually defined or extracted from other classes to improve readability or testability.

To use this package simply extend it:

```php
class MyAction extends \Ninthspace\Action
{
}
```

Doing so will give you two additional methods:

* `handle` which is a method you should write to perform the action, and,
* `authorise` which is an optional method you can write that returns if the action is authorised (by the user, for example)

**Note:** You can use `authorize` if you prefer the alternative spelling.

If you create `authorise` and it fails, a `\Ninthspace\Action\Exceptions\AuthorisationException` will be raised.

**Note:** If you want a different authorisation exception to be raised you can override it in your Action, thus:

```php
class MyAction extends \Ninthspace\Action
{
    public $authorisationException = \Illuminate\Auth\Access\AuthorizationException::class
}
```

To invoke an action call its `run` method:

```php
class MyAction extends \Ninthspace\Action
{
    public function handle()
    {
        return 'done';
    }
}

(new MyAction())->run() // returns "done";

```

You can pass arguments into the `run` method and then update the `handle` function definition accordingly.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email chris@junctionbox.com instead of using the issue tracker.

## Credits

- [Chris Aves](https://github.com/ninthspace)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
