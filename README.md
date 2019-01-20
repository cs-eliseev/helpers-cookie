COOKIE CSE HELPERS
=======

The helpers allows you to easily manage cookie data. SET, HAS, GET, REMOVE cookie data - all this is available in this library.

Project repository: https://github.com/cs-eliseev/helpers-cookie

***


## Introduction

CSE HELPERS is a collection of several libraries with simple functions written in PHP for people.

Despite using PHP as the main programming language for the Internet, its functions are not enough. COOKIE CSE HELPERS allows you to easy SET, HAS, GET, REMOVE cookie data.

CSE HELPERS was created for the rapid development of web applications.

**CSE Helpers projec:**
* [Word CSE helpers](https://github.com/cs-eliseev/helpers-word)
* [Json CSE helpers](https://github.com/cs-eliseev/helpers-json)
* [Cookie CSE helpers](https://github.com/cs-eliseev/helpers-cookie)

Below you will find some information on how to init library and perform common commands.


## Install

You can find the most recent version of this project [here](https://github.com/cs-eliseev/helpers-cookie).

### Composer

Execute the following command to get the latest version of the package:
```shell
composer require cse/helpers-cookie
```

Or file composer.json should include the following contents:
```
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


## License

See the [LICENSE.md](https://github.com/cs-eliseev/helpers-cookie/blob/master/LICENSE.md) file for licensing details.