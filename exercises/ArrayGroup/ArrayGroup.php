<?php

declare(strict_types=1);

namespace Exercises\ArrayGroup;

/**
 * Given an array and group size, divide the array into many sub-arrays
 * where each subarray is at most of group size.
 *
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
    /**
     * @param array<any> $array
     *
     * @return array<any>
     */
    public static function group(array $array, int $size): array
    {
        return $array[$size];
    }
}
