<?php

declare(strict_types=1);

namespace Exercises\Reverse\Complete;

use function abs;
use function array_reduce;
use function array_reverse;
use function implode;
use function log10;
use function mb_strlen;
use function mb_substr;
use function pow;
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

    public static function string5(string $string): string
    {
        $revers = '';

        for ($i = mb_strlen($string); $i >= 0; $i--) {
            $revers .= mb_substr($string, $i, 1);
        }

        return $revers;
    }

    public static function int(int $number): int
    {
        /** @see https://wiki.php.net/rfc/combined-comparison-operator */
        $sign = $number <=> 0;

        return $sign * (int) strrev((string) $number);
    }

    public static function int2(int $number): int
    {
        $revers = 0;

        $sign = $number <=> 0;
        $number = abs($number);

        $n = (int) log10($number) + 1;

        for ($i = 1; $i <= $n; $i++) {
            $pow = pow(10, $n - $i);
            $numeral = (int) ($number / $pow);
            $number -= $numeral * $pow;
            $revers += $numeral * pow(10, $i - 1);
        }

        return $revers * $sign;
    }

    public static function int3(int $number): int
    {
        $reverse = 0;

        $sign = $number <=> 0;
        $number = abs($number);

        while ($number > 0) {
            $lastDigit = $number % 10;
            $reverse = ($reverse * 10) + $lastDigit;
            $number = (int) ($number / 10);
        }
        return $reverse * $sign;
    }
}
