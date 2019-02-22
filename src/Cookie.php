<?php

declare(strict_types = 1);

namespace cse\helpers;

/**
 * Class Cookie
 *
 * @package cse\helpers
 */
class Cookie
{
    const COOKIE_PATH = '/';
    const COOKIE_TIMEOUT = 432000;

    /**
     * Set cookie by name
     *
     * @param string $name
     * @param $value
     * @param string $path
     * @param int $timeout
     *
     * @return bool
     */
    public static function set(string $name, $value, string $path = self::COOKIE_PATH, int $timeout = self::COOKIE_TIMEOUT): bool
    {
        $_COOKIE[$name] = $value;

        return setcookie($name, (string) $value, time() + $timeout, $path);
    }

    /**
     * Check cookie by name
     *
     * @param string $name
     *
     * @return bool
     */
    public static function has(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }

    /**
     * Get cookie by name
     *
     * @param string $name
     * @param null $default
     *
     * @return null|mixed
     */
    public static function get(string $name, $default = null)
    {
        return self::has($name) ? $_COOKIE[$name] : $default;
    }

    /**
     * Remove cookie by name
     *
     * @param string $name
     */
    public static function remove(string $name): void
    {
        if (self::has($name)) {
            self::set($name, null, self::COOKIE_PATH, -time());
            unset($_COOKIE[$name]);
        }
    }
}