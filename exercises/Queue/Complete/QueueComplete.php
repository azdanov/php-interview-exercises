<?php

declare(strict_types=1);

namespace Exercises\Queue\Complete;

use function array_key_last;
use function array_pop;
use function array_unshift;
use function count;

final class QueueComplete
{
    /** @var array<any> */
    private $queue = [];

    /** @param mixed $value */
    public function add($value): void
    {
        array_unshift($this->queue, $value);
    }

    /** @return mixed|null */
    public function remove()
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

    public static function zip(self $queue1, self $queue2): self
    {
        $new = new self();

        while ($queue1->peek() || $queue2->peek()) {
            $value1 = $queue1->remove();
            if ($value1) {
                $new->add($value1);
            }

            $value2 = $queue2->remove();
            if ($value2) {
                $new->add($value2);
            }
        }

        return $new;
    }
}
