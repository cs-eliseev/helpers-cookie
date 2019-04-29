[English](https://github.com/cs-eliseev/helpers-cookie/blob/master/README.md) | Русский

COOKIE CSE HELPERS
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/helpers-cookie.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/helpers-cookie)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/helpers-cookie.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/helpers-cookie)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/helpers-cookie.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/helpers-cookie/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/helpers-cookie.svg?style=flat-square)](https://packagist.org/packages/cse/helpers-cookie)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/helpers-cookie)
[![Packagist](https://img.shields.io/packagist/l/cse/helpers-cookie.svg?style=flat-square)](https://github.com/cs-eliseev/helpers-cookie/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/helpers-cookie.svg?style=flat-square)](https://github.com/cs-eliseev/helpers-cookie/archive/master.zip)

The helpers allows you to easily manage cookie data. SET, HAS, GET, REMOVE cookie data - all this is available in this library.

Project repository: https://github.com/cs-eliseev/helpers-cookie

**DEMO**
```php
Cookie::set('cookie_example', 12345);
// ['cookie_example' => 12345]
if (Cookie::has('cookie_example')) Cookie::remove('cookie_example');
// true
Cookie::get('cookie_example', 67890);
// 67890
```

***


## Introduction

[CSE HELPERS](https://github.com/cs-eliseev/helpers/blob/master/README.md) is a collection of several libraries with simple functions written in PHP for people.

Despite using PHP as the main programming language for the Internet, its functions are not enough. COOKIE CSE HELPERS allows you to easy SET, HAS, GET, REMOVE cookie data.

[CSE HELPERS](https://github.com/cs-eliseev/helpers/blob/master/README.md) was created for the rapid development of web applications.

**CSE Helpers project:**
* [Array CSE helpers](https://github.com/cs-eliseev/helpers-arrays)
* [Cookie CSE helpers](https://github.com/cs-eliseev/helpers-cookie)
* [Date CSE helpers](https://github.com/cs-eliseev/helpers-date)
* [Email CSE helpers](https://github.com/cs-eliseev/helpers-email)
* [IP CSE helpers](https://github.com/cs-eliseev/helpers-ip)
* [Json CSE helpers](https://github.com/cs-eliseev/helpers-json)
* [Math Converter CSE helpers](https://github.com/cs-eliseev/helpers-math-converter)
* [Phone CSE helpers](https://github.com/cs-eliseev/helpers-phone)
* [Request CSE helpers](https://github.com/cs-eliseev/helpers-request)
* [Session CSE helpers](https://github.com/cs-eliseev/helpers-session)
* [Word CSE helpers](https://github.com/cs-eliseev/helpers-word)

Below you will find some information on how to init library and perform common commands.


## Install

You can find the most recent version of this project [here](https://github.com/cs-eliseev/helpers-cookie).

### Composer

Execute the following command to get the latest version of the package:
```bash
composer require cse/helpers-cookie
```

Or file composer.json should include the following contents:
```json
{
    "require": {
        "cse/helpers-cookie": "*"
    }
}
```

### Git

Clone this repository locally:
```bash
git clone https://github.com/cs-eliseev/helpers-cookie.git
```

### Download

[Download the latest release here](https://github.com/cs-eliseev/helpers-cookie/archive/master.zip).


## Usage

The class consists of static methods that are conveniently used in any project. See example [examples-cookie.php](https://github.com/cs-eliseev/helpers-word/blob/master/examples/examples-cookie.php).

**SET cookie**

Example:
```php
Cookie::set('cookie_example', 12345);
// ['cookie_example' => 12345]
```

**HAS cookie**

Example:
```php
Cookie::has('cookie_example');
// true
```

**GET cookie**

Example:
```php
Cookie::get('cookie_example');
// 12345
```

Set default value:
```php
Cookie::get('cookie_example_2', 67890);
// 67890
```

**REMOVE cookie**

Example:
```php
Cookie::remove('cookie_example');
Cookie::has('cookie_example');
// false
```


## Testing & Code Coverage

PHPUnit is used for unit testing. Unit tests ensure that class and methods does exactly what it is meant to do.

General PHPUnit documentation can be found at https://phpunit.de/documentation.html.

To run the PHPUnit unit tests, execute:
```bash
phpunit PATH/TO/PROJECT/tests/
```

If you want code coverage reports, use the following:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Used PHPUnit default config:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Donating

You can support this project [here](https://www.paypal.me/cseliseev/10usd). 
You can also help out by contributing to the project, or reporting bugs. 
Even voicing your suggestions for features is great. Anything to help is much appreciated.


## License

The COOKIE CSE HELPERS is open-source PHP library licensed under the MIT license. Please see [License File](https://github.com/cs-eliseev/helpers-cookie/blob/master/LICENSE.md) for more information.

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)