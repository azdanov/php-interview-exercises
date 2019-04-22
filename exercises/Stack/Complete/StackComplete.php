<?php

declare(strict_types=1);

namespace Exercises\Stack\Complete;

use function array_key_last;
use function array_pop;
use function count;

final class StackComplete
{
    /** @var mixed[] */
    private $queue = [];

    /** @param mixed $value */
    public function push($value): void
    {
        $this->queue[] = $value;
    }

    /** @return mixed|null */
    public function pop()
    {
        return array_pop($this->queue);
    }

    /** @return mixed|null */
    public function peek()
    {
        return count($this->queue)
            ? $this->queue[array_key_last($this->queue)]
            : null;
    }
}
