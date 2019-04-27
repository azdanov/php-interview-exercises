<?php

declare(strict_types=1);

namespace Exercises\MaxHeap\Complete;

use function array_pop;
use function count;
use function floor;

final class MaxHeapComplete
{
    /** @var mixed[] */
    public $values = [];

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

    /** @return mixed */
    public function extractMax()
    {
        $max = $this->values[0];

        $this->values[0] = array_pop($this->values);

        $currentIndex = 0;
        $length = count($this->values);
        $currentElement = $this->values[0];

        while (true) {
            /** @var int $leftChildIndex */
            $leftChildIndex = 2 * $currentIndex + 1;
            /** @var int $rightChildIndex */
            $rightChildIndex = 2 * $currentIndex + 2;

            $leftChild = null;
            $rightChild = null;
            $swapIndex = null;

            if ($leftChildIndex < $length) {
                $leftChild = $this->values[$leftChildIndex];

                if ($leftChild > $currentElement) {
                    $swapIndex = $leftChildIndex;
                }
            }

            if ($rightChildIndex < $length) {
                $rightChild = $this->values[$rightChildIndex];

                if (($swapIndex === null && $rightChild > $currentElement) ||
                    ($swapIndex !== null && $rightChild > $leftChild)) {
                    $swapIndex = $rightChildIndex;
                }
            }

            if ($swapIndex === null) {
                break;
            }

            $this->values[$currentIndex] = $this->values[$swapIndex];
            $this->values[$swapIndex] = $currentElement;
            $currentIndex = $swapIndex;
        }

        return $max;
    }
}
