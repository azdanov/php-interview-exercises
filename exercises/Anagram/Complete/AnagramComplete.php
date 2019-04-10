<?php

declare(strict_types=1);

namespace Exercises\Anagram\Complete;

use function implode;
use function preg_replace;
use function sort;
use function str_split;
use function strtolower;

final class AnagramComplete
{
    public static function check(string $first, string $second): bool
    {
        $first = self::normalizeAndSort($first);
        $second = self::normalizeAndSort($second);

        return $first === $second;
    }

    private static function normalizeAndSort(string $string): string
    {
        $chars = str_split(preg_replace('#\W#', '', strtolower($string)));
        sort($chars);

        return implode($chars);
    }
}
