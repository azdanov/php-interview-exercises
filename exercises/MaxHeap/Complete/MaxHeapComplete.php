<?php

declare(strict_types=1);

namespace Exercises\MaxHeap\Complete;

use function count;
use function floor;
use function intdiv;

final class MaxHeapComplete
{
    /** @var mixed[] */
    public $values = [];

    public function __construct()
    {
        $this->values = [];
    }

    /** @param mixed $value */
    public function insert($value): void
    {
        $this->values[] = $value;

        $currentIndex = count($this->values) - 1;
        $currentValue = $this->values[$currentIndex];

        while (true) {
            $parentIndex = (int) (floor($currentIndex - 1) / 2);
            $parentValue = $this->values[$parentIndex];

            if ($currentValue <= $parentValue) {
                break;
            }

            $this->values[$parentIndex] = $currentValue;
            $this->values[$currentIndex] = $parentValue;
            $currentIndex = $parentIndex;
        }
    }
}
