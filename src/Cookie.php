<?php

namespace cse\helpers;

/**
 * Class Cookie
 *
 * @package cse\helpers
 */
class Cookie
{
    const COOKIE_PATH    = '/';
    const COOKIE_TIMEOUT = 432000;

    /**
     * Set cookie by name
     *
     * @param string $name
     * @param $value
     * @param string $path
     * @param string $timeout
     * @return bool
     */
    public static function set(string $name, $value, string $path = self::COOKIE_PATH, string $timeout = self::COOKIE_TIMEOUT): bool
    {
        $_COOKIE[$name] = $value;

        return setcookie($name, $value, time() + $timeout, $path);
    }

    /**
     * Check cookie by name
     *
     * @param string $name
     * @return bool
     */
    public static function has(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }
}