<?php

declare(strict_types=1);

namespace Exercises\Pyramid\Complete;

use function floor;
use function strlen;

final class PyramidComplete
{
    public static function print1(int $rows): void
    {
        $columns = $rows * 2 - 1;
        $middle = floor($columns / 2);

        for ($row = 0; $row < $rows; ++$row) {
            $line = '';
            $middleLower = $middle - $row;
            $middleUpper = $middle + $row;

            for ($column = 0; $column < $columns; ++$column) {
                if ($column >= $middleLower && $middleUpper >= $column) {
                    $line .= '#';
                } else {
                    $line .= ' ';
                }
            }
            echo $line;
        }
    }

    public static function print2(int $rows, int $row = 0, string $line = ''): void
    {
        if ($rows === $row) {
            return;
        }

        $columns = $rows * 2 - 1;
        $length = strlen($line);

        if ($length === $columns) {
            echo $line;
            self::print2($rows, $row + 1);

            return;
        }

        $middle = floor($columns / 2);
        $middleLower = $middle - $row;
        $middleUpper = $middle + $row;

        if ($length >= $middleLower && $middleUpper >= $length) {
            $line .= '#';
        } else {
            $line .= ' ';
        }

        self::print2($rows, $row, $line);
    }
}
