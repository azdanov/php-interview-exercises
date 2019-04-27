<?php

declare(strict_types=1);

namespace Tests\MaxHeap\Complete;

use Exercises\MaxHeap\Complete\MaxHeapComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxHeapCompleteTest extends TestCase
{
    /** @var MaxHeapComplete */
    private $heap;

    protected function setUp(): void
    {
        $this->heap = new MaxHeapComplete();
    }

    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(MaxHeapComplete::class, 'insert'),
            'Class does not have method insert'
        );
    }

    public function testCanInsertValuesInCorrectOrder(): void
    {
        $this->heap->insert(41);
        $this->heap->insert(39);
        $this->heap->insert(33);
        $this->heap->insert(18);
        $this->heap->insert(27);
        $this->heap->insert(12);
        $this->heap->insert(55);

        /**
         *         55
         *       /   \
         *     39     41
         *   /  \    /  \
         * 18   27  12  33
         */
        self::assertSame([55, 39, 41, 18, 27, 12, 33], $this->heap->values);
    }
}
