<?php

declare(strict_types=1);

namespace Exercises\Tree\Complete;

use function array_push;
use function array_shift;
use function array_unshift;
use function count;

final class TreeComplete
{
    private const SENTINEL = 'SENTINEL';
    /** @var NodeComplete|null */
    public $root = null;

    /** @param callable $callback node data will be passed as the only argument */
    public function traverseBreadthFirst(callable $callback): void
    {
        $current = $this->root;
        $queue = [];

        while ($current) {
            array_push($queue, ...$current->children);
            $callback($current->data);
            $current = array_shift($queue);
        }
    }

    /** @param callable $callback node data will be passed as the only argument */
    public function traverseDepthFirst(callable $callback): void
    {
        $current = $this->root;
        $queue = [];

        while ($current) {
            array_unshift($queue, ...$current->children);
            $callback($current->data);
            $current = array_shift($queue);
        }
    }

    /** @return int[] each respective tree level width */
    public static function levelWidth(NodeComplete $root): array
    {
        $level = 0;
        $widths = [0];

        $queue = [$root, self::SENTINEL];

        while (count($queue) > 1) {
            $current = array_shift($queue);

            if ($current === self::SENTINEL) {
                $widths[++$level] = 0;
                $queue[] = self::SENTINEL;
            } else {
                array_push($queue, ...$current->children);
                ++$widths[$level];
            }
        }

        return $widths;
    }
}
