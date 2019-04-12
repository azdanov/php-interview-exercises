<?php

declare(strict_types=1);

namespace Exercises\ReverseString\Complete;

use function array_reduce;
use function array_reverse;
use function implode;
use function str_split;
use function strlen;
use function strrev;

final class ReverseStringComplete
{
    public static function reverse1(string $string): string
    {
        return strrev($string);
    }

    public static function reverse2(string $string): string
    {
        return implode(array_reverse(str_split($string)));
    }

    public static function reverse3(string $string): string
    {
        $reversed = '';
        $length = strlen($string);

        for ($i = 0; $i < $length; ++$i) {
            $reversed = $string[$i] . $reversed;
        }

        return $reversed;
    }

    public static function reverse4(string $string): string
    {
        return array_reduce(str_split($string), static function ($carry, $char) {
            return $char . $carry;
        });
    }
}
