COOKIE CSE HELPERS
=======

The helpers allows you to easily manage cookie data. SET, HAS, GET, REMOVE cookie data - all this is available in this library.

Project repository: https://github.com/cs-eliseev/helpers-cookie

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

CSE HELPERS is a collection of several libraries with simple functions written in PHP for people.

Despite using PHP as the main programming language for the Internet, its functions are not enough. COOKIE CSE HELPERS allows you to easy SET, HAS, GET, REMOVE cookie data.

CSE HELPERS was created for the rapid development of web applications.

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
```shell
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
```
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
```shell
phpunit PATH/TO/PROJECT/tests/
```

If you want code coverage reports, use the following:
```shell
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Used PHPUnit default config:
```shell
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## License

See the [LICENSE.md](https://github.com/cs-eliseev/helpers-cookie/blob/master/LICENSE.md) file for licensing details.