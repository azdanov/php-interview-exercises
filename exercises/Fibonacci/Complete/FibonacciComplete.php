<?php

declare(strict_types=1);

namespace Exercises\Fibonacci\Complete;

use function array_key_exists;

final class FibonacciComplete
{
    /** @var array<int> */
    private static $cache = [];

    public static function get1(int $limit): int
    {
        $result = [];

        for ($i = 0; $i <= $limit; ++$i) {
            if ($i < 2) {
                $result[] = $i;
            } else {
                $result[] = $result[$i - 1] + $result[$i - 2];
            }
        }

        return $result[$limit];
    }

    public static function get2(int $limit): int
    {
        if ($limit < 2) {
            return $limit;
        }

        return self::get2($limit - 1) + self::get2($limit - 2);
    }

    public static function get3(int $limit): int
    {
        if (array_key_exists($limit, self::$cache)) {
            return self::$cache[$limit];
        }

        if ($limit < 2) {
            self::$cache[$limit] = $limit;

            return $limit;
        }

        $result = self::get3($limit - 1) + self::get3($limit - 2);
        self::$cache[$limit] = $result;

        return $result;
    }
}
