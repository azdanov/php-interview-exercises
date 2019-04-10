<?php

declare(strict_types=1);

namespace Exercises\Ladder\Complete;

use function strlen;

final class LadderComplete
{
    public static function print1(int $level): void
    {
        for ($row = 0; $row < $level; ++$row) {
            $string = '';
            for ($column = 0; $column < $level; ++$column) {
                $string .= $column <= $row ? '#' : ' ';
            }
            echo $string;
        }
    }

    public static function print2(int $level, int $row = 0, string $stair = ''): void
    {
        if ($level === $row) {
            return;
        }

        $length = strlen($stair);
        if ($level === $length) {
            echo $stair;
            self::print2($level, $row + 1);

            return;
        }

        $stair .= $length <= $row ? '#' : ' ';
        self::print2($level, $row, $stair);
    }
}
