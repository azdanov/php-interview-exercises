<?php

declare(strict_types=1);

namespace Exercises\Spiral;

/**
 * Given a length return spiral matrix of length * length.
 *
 * @example Spiral::make(3)  === [
 *     [1, 2, 3],
 *     [8, 9, 4],
 *     [7, 6, 5]
 * ]
 */
final class Spiral
{
    /** @return array<array<number>> */
    public static function make(int $length): array
    {
        return [$length];
    }
}
