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
}
