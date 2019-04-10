<?php

declare(strict_types=1);

namespace Exercises\Capitalize\Complete;

use function array_map;
use function explode;
use function implode;
use function strtoupper;
use function substr;
use function ucwords;

final class CapitalizeComplete
{
    public static function get1(string $string): string
    {
        return ucwords($string);
    }

    public static function get2(string $string): string
    {
        $slices = array_map(static function ($slice) {
            return strtoupper($slice[0]) . substr($slice, 1);
        }, explode(' ', $string));

        return implode(' ', $slices);
    }
}
