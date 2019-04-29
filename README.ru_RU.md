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

Данная библиотек позволяет удобно работать с куками. Доступны методы SET, HAS, GET, REMOVE для работы с куками.

Репозиторий проекта: https://github.com/cs-eliseev/helpers-cookie

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


## Описание проекта

[CSE HELPERS](https://github.com/cs-eliseev/helpers/blob/master/README.ru_RU.md) - это набор из небольших библиотек с простыми функциями написанных на PHP специально для вас.

Несмотря на повсеместное использование PHP в качестве основного языка для WEB разработки, его зачастую недостаточно. COOKIE CSE HELPERS, позволит вам довольно просто получить, удалить, установить данные кук.

[CSE HELPERS](https://github.com/cs-eliseev/helpers/blob/master/README.ru_RU.md) создан для быстрой разработки веб-приложений.

**Список библиотек CSE Helpers:**
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

Ниже представлена информация об установке и перечне команд с примерами их использования.


## Установка

Самая последняя версия проекта доступна [здесь](https://github.com/cs-eliseev/helpers-cookie).

### Composer

Чтобы установить последнюю версию проекта, выполните следующую команду в терминале:
```shell
composer require cse/helpers-cookie
```

Или добавьте следующее содержимое в файл composer.json:
```json
{
    "require": {
        "cse/helpers-cookie": "*"
    }
}
```

### Git

Добавить этот репозиторий локально можно следующим образом:
```shell
git clone https://github.com/cs-eliseev/helpers-cookie.git
```

### Скачать

[Скачать последнюю версию проекта можно здесь](https://github.com/cs-eliseev/helpers-cookie/archive/master.zip).

## Использование

Данный класс использует статические методы, которые удобно использовать в любом проекте. Смотрите пример [examples-cookie.php](https://github.com/cs-eliseev/helpers-cookie/blob/master/examples/examples-cookie.php).


**Установить куки**

Пример:
```php
Cookie::set('cookie_example', 12345);
// ['cookie_example' => 12345]
```

**Проверить сущестования ключа в куках**

Пример:
```php
Cookie::has('cookie_example');
// true
```

**Получить данные по ключу из кук**

Пример:
```php
Cookie::get('cookie_example');
// 12345
```

Установить значение по умолчанию:
```php
Cookie::get('cookie_example_2', 67890);
// 67890
```

**Удалить ключ из куки**

Пример:
```php
Cookie::remove('cookie_example');
Cookie::has('cookie_example');
// false
```


## Тестирование и покрытие кода

PHPUnit используется для модульного тестирования. Данные тесты гарантируют, что методы класса выполняют свою задачу.

Подробную документацию по PHPUnit можно найти по адресу: https://phpunit.de/documentation.html.

Чтобы запустить тесты выполните:
```bash
phpunit PATH/TO/PROJECT/tests/
```

Чтобы сформировать отчет о покрытии тестами кода, необходимо выполнить следующую команду:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Чтобы использовать настройки по умолчанию, достаточно выполнить:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Вклад в общее дело

Вы можите поддержать данный проект [здесь](https://www.paypal.me/cseliseev/10usd). 
Вы также можете помочь, внеся свой вклад в проект или сообщив об ошибках.
Даже высказывать свои предложения по функциям - это здорово. Все, что поможет, высоко ценится.


## Лицензия

COOKIE CSE HELPERS это PHP-библиотека с открытым исходным кодом распространяемая по лицензии MIT. Для получения более подробной информации, пожалуйста, ознакомьтесь с [лицензионным файлом](https://github.com/cs-eliseev/helpers-cookie/blob/master/LICENSE.md).

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)