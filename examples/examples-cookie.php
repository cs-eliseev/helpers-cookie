<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use cse\helpers\Cookie;

$key = 'cookie_example';

// Example: set
// 12345 => ['cookie_example' => 12345]
Cookie::set($key, 12345);

// Example: has
// cookie_example => true
Cookie::has($key);