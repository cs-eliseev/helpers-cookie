<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'autoload.php';

use cse\helpers\Cookie;

$key = 'cookie_example';

// Example: set
// 12345 => ['cookie_example' => 12345]
var_dump(Cookie::set($key, 12345));
echo PHP_EOL;

// Example: has
// cookie_example => true
var_dump(Cookie::has($key));
echo PHP_EOL;

// Example: get
// cookie_example => 12345
var_dump(Cookie::get($key));
echo PHP_EOL;

// Example: remove
// cookie_example => false
Cookie::remove($key);
var_dump(Cookie::has($key));
echo PHP_EOL;