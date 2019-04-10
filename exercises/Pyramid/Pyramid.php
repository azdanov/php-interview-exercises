<?php

declare(strict_types=1);

namespace Exercises\Pyramid;

/**
 * Given number of rows print a pyramid.
 *
 * @example Pyramid::print(3)  -> '  #  '
 *                                ' ### '
 *                                '#####'
 */
final class Pyramid
{
    public static function print(int $rows): void
    {
        echo $rows;
    }
}
