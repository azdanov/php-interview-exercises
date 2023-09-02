<?php

declare(strict_types=1);

namespace Exercises\MaxChar\Complete;

use function str_split;

final class MaxCharComplete
{
    public static function get(string $string): string
    {
        $map = [];

        foreach (str_split($string) as $char) {
            if (isset($map[$char])) {
                ++$map[$char];
            } else {
                $map[$char] = 1;
            }
        }

        $max = '';
        $freqMax = 0;

        foreach ($map as $char => $freq) {
            if ($freq <= $freqMax) {
                continue;
            }

            $max = $char;
            $freqMax = $freq;
        }

        return (string) $max;
    }

    public static function get1(string $string): string
    {
        $array = [];
        for ($i = 0; $i < strlen($string); ++$i) {
            if (isset($array[$string[$i]])) {
                ++$array[$string[$i]];
            } else {
                $array[$string[$i]] = 1;
            }
        }

        arsort($array);
        $max = array_keys($array)[0];

        return (string) $max;
    }

    public static function get2(string $string): string
    {
        $chars = str_split($string);
        $count = array_count_values($chars);
        arsort($count);

        return (string) key($count);
    }
}
