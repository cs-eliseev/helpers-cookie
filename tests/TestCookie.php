<?php

use cse\helpers\Cookie;
use PHPUnit\Framework\TestCase;

class TestCookie extends TestCase
{
    /**
     * @param $name
     * @param $value
     * @param $timeout
     * @param $path
     * @param $expected
     *
     * @dataProvider providerSet
     *
     * @runInSeparateProcess
     */
    public function testSet(string $name, $value, string $path, int $timeout, bool $expected): void
    {
        $actual = Cookie::set($name, $value, $path, $timeout);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function providerSet(): array
    {
        return [
            [
                'cookie_test',
                12345,
                Cookie::COOKIE_PATH,
                Cookie::COOKIE_TIMEOUT,
                true,
            ],
        ];
    }


    /**
     * @param $name
     * @param $set
     * @param $expected
     *
     * @dataProvider providerHas
     *
     * @runInSeparateProcess
     */
    public function testHas(string $name, $set, bool $expected): void
    {
        if ($set) {
            Cookie::set($name, $name);
        }
        $actual = Cookie::has($name);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function providerHas(): array
    {
        return [
            [
                'cookie_test',
                true,
                true,
            ],

            [
                'cookie_test',
                false,
                false,
            ],
        ];
    }

    /**
     * @param $name
     * @param $default
     * @param $set
     * @param $expected
     *
     * @dataProvider providerGet
     *
     * @runInSeparateProcess
     */
    public function testGet(string $name, $default, $set, $expected): void
    {
        if ($set) {
            Cookie::set($name, $default);
        }
        $actual = Cookie::get($name, $default);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function providerGet(): array
    {
        return [
            [
                'cookie_test',
                12345,
                true,
                12345,
            ],

            [
                'cookie_test',
                false,
                false,
                false,
            ],
        ];
    }

    /**
     * @runInSeparateProcess
     */
    public function testRemove(): void
    {
        $name = 'cookie_test';

        Cookie::set($name, $name);
        Cookie::remove($name);
        $this->assertFalse(isset($_COOKIE[$name]));
    }
}
