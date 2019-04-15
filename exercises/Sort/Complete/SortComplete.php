<?php

declare(strict_types=1);

namespace Exercises\Sort\Complete;

use function count;

final class SortComplete
{
    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function bubble(array $input): array
    {
        $loop = true;
        $length = count($input) - 1;

        while ($loop) {
            $loop = false;

            for ($i = 0; $i < $length; ++$i) {
                if ($input[$i] > $input[$i + 1]) {
                    $temp = $input[$i + 1];
                    $input[$i + 1] = $input[$i];
                    $input[$i] = $temp;
                    $loop = true;
                }
            }
        }

        return $input;
    }

    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function selection(array $input): array
    {
        return $input;
    }

    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function insertion(array $input): array
    {
        return $input;
    }

    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function merge(array $input): array
    {
        return $input;
    }

    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function quick(array $input): array
    {
        return $input;
    }

    /**
     * @param array<mixed> $input
     *
     * @return array<mixed>
     */
    public static function radix(array $input): array
    {
        return $input;
    }
}
