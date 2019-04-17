<?php

declare(strict_types=1);

namespace Exercises\Reverse\Complete;

use function array_reduce;
use function array_reverse;
use function implode;
use function str_split;
use function strlen;
use function strrev;

final class ReverseComplete
{
    public static function string1(string $string): string
    {
        return strrev($string);
    }

    public static function string2(string $string): string
    {
        return implode(array_reverse(str_split($string)));
    }

    public static function string3(string $string): string
    {
        $reversed = '';
        $length = strlen($string);

        for ($i = 0; $i < $length; ++$i) {
            $reversed = $string[$i] . $reversed;
        }

        return $reversed;
    }

    public static function string4(string $string): string
    {
        return array_reduce(str_split($string), static function ($carry, $char) {
            return $char . $carry;
        });
    }

    public static function int(int $number): int
    {
        /** @see https://wiki.php.net/rfc/combined-comparison-operator */
        $sign = $number <=> 0;

        return $sign * (int) strrev((string) $number);
    }
}
