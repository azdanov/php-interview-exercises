<?php

declare(strict_types=1);

namespace Tests\LinkedList\Complete;

use Exercises\LinkedList\Complete\LinkedListComplete;
use Exercises\LinkedList\Complete\NodeComplete;
use PHPUnit\Framework\TestCase;

class LinkedListCompleteTest extends TestCase
{
    /** @var LinkedListComplete */
    private $list;

    protected function setUp(): void
    {
        $this->list = new LinkedListComplete();
    }

    public function testInsertFirst(): void
    {
        $this->list->insertFirst(0);
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        self::assertSame(2, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame(0, $this->list->head->next->next->data);
    }

    public function testInsertLast(): void
    {
        $this->list->insertLast(0);
        $this->list->insertLast(1);
        $this->list->insertLast(2);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame(2, $this->list->head->next->next->data);
    }

    public function testSize(): void
    {
        $this->list->head = new NodeComplete(0, new NodeComplete(1));

        self::assertSame(2, $this->list->size());
    }

    public function testGetFirst(): void
    {
        $this->list->head = new NodeComplete(0, new NodeComplete(1));

        $first = $this->list->getFirst();
        self::assertSame(0, $first->data);
        self::assertInstanceOf(NodeComplete::class, $first->next);
        self::assertSame(1, $first->next->data);
    }

    public function testGetLast(): void
    {
        $this->list->head = new NodeComplete(0, new NodeComplete(1));

        $last = $this->list->getLast();
        self::assertSame(1, $last->data);
        self::assertNull($last->next);
    }

    public function testClear(): void
    {
        $this->list->head = new NodeComplete(0, new NodeComplete(1));

        $this->list->clear();

        $last = $this->list->head;
        self::assertNull($last);
    }

    public function testRemoveFirst(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(2)
            )
        );

        $this->list->removeFirst();

        $first = $this->list->head;
        self::assertSame(1, $first->data);
        self::assertInstanceOf(NodeComplete::class, $first->next);
        self::assertSame(2, $first->next->data);
    }

    public function testRemoveFirstEmpty(): void
    {
        $this->list->removeFirst();
        self::assertTrue(true);
    }

    public function testRemoveLast(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(2)
            )
        );

        $this->list->removeLast();

        $last = $this->list->head->next;
        self::assertSame(1, $last->data);
        self::assertNull($last->next);
    }

    public function testRemoveLastEmpty(): void
    {
        $this->list->removeLast();
        self::assertTrue(true);
    }

    public function testGetAt(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(2)
            )
        );

        $first = $this->list->getAt(0);
        self::assertSame(0, $first->data);

        $last = $this->list->getAt(2);
        self::assertSame(2, $last->data);
    }

    public function testGetAtEmpty(): void
    {
        $first = $this->list->getAt(0);
        self::assertNull($first);

        $second = $this->list->getAt(1);
        self::assertNull($second);
    }

    public function testRemoveAtEmpty(): void
    {
        $this->list->removeAt(0);
        $this->list->removeAt(1);
        $this->list->removeAt(2);
        self::assertTrue(true);
    }

    public function testRemoveAtOutOfBound(): void
    {
        $this->list->head = new NodeComplete(0);

        $this->list->removeAt(1);

        $first = $this->list->head;
        self::assertNull($first);
    }

    public function testRemoveAtFirst(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $first = $this->list->head;
        self::assertSame(0, $first->data);

        $this->list->removeAt(0);

        $first = $this->list->head;
        self::assertSame(1, $first->data);
    }

    public function testRemoveAtIndex(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $first = $this->list->head->next;
        self::assertSame(1, $first->data);

        $this->list->removeAt(0);

        $first = $this->list->head->next;
        self::assertSame(2, $first->data);
    }

    public function testRemoveAtLast(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $first = $this->list->head->next->next->next;
        self::assertSame(3, $first->data);

        $this->list->removeAt(3);

        $first = $this->list->head->next->next;
        self::assertSame(2, $first->data);
    }

    public function testInsertAtEmpty(): void
    {
        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->head->data);
    }

    public function testInsertAtNegativeOutOfBound(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $this->list->insertAt('a', -10);

        self::assertSame('a', $this->list->head->data);
        self::assertSame(0, $this->list->head->next->data);
    }

    public function testInsertAt0(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->head->data);
        self::assertSame(0, $this->list->head->next->data);
    }

    public function testInsertAtMiddle(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $this->list->insertAt('a', 2);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame('a', $this->list->head->next->next->data);
        self::assertSame(2, $this->list->head->next->next->next->data);
        self::assertSame(3, $this->list->head->next->next->next->next->data);
    }

    public function testInsertAtLast(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(1)
        );

        $this->list->insertAt('hi', 2);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame('hi', $this->list->head->next->next->data);
    }

    public function testInsertAtOutOfBound(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(1)
        );

        $this->list->insertAt('hi', 20);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame('hi', $this->list->head->next->next->data);
    }

    public function testForEach(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $keys = [];
        $this->list->forEach(static function (&$data, $index) use (&$keys): void {
            $keys[] = $index;
            $data *= 10;
        });

        self::assertSame([0, 1, 2, 3], $keys);
        self::assertSame(0, $this->list->head->data);
        self::assertSame(10, $this->list->head->next->data);
        self::assertSame(20, $this->list->head->next->next->data);
        self::assertSame(30, $this->list->head->next->next->next->data);
    }

    public function testForEachAs(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $keys = [];
        foreach ($this->list as $key => $item) {
            $keys[] = $key;
            $item->data *= 10;
        }

        self::assertSame([0, 1, 2, 3], $keys);
        self::assertSame(0, $this->list->head->data);
        self::assertSame(10, $this->list->head->next->data);
        self::assertSame(20, $this->list->head->next->next->data);
        self::assertSame(30, $this->list->head->next->next->next->data);
    }

    public function testForEachAsEmpty(): void
    {
        foreach ($this->list as $item) {
            $item->data *= 10;
        }
        self::assertTrue(true);
    }

    public function testMidpointEmpty(): void
    {
        $midpoint = LinkedListComplete::midpoint($this->list);

        self::assertNull($midpoint);
    }

    public function testMidpointOne(): void
    {
        $this->list->head = new NodeComplete(0);

        $midpoint = LinkedListComplete::midpoint($this->list);

        self::assertSame(0, $midpoint->data);
    }

    public function testMidpointTwo(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(1)
        );

        $midpoint = LinkedListComplete::midpoint($this->list);

        self::assertSame(0, $midpoint->data);
    }

    public function testMidpointOdd(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(2)
            )
        );

        $midpoint = LinkedListComplete::midpoint($this->list);

        self::assertSame(1, $midpoint->data);
    }

    public function testMidpointEven(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $midpoint = LinkedListComplete::midpoint($this->list);

        self::assertSame(1, $midpoint->data);
    }

    public function testCircularEmpty(): void
    {
        self::assertFalse(LinkedListComplete::circular($this->list));
    }

    public function testCircular(): void
    {
        $list = new LinkedListComplete();
        $a = new NodeComplete('a');
        $b = new NodeComplete('b');
        $c = new NodeComplete('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = $b;

        self::assertTrue(LinkedListComplete::circular($list));
    }

    public function testCircularHead(): void
    {
        $list = new LinkedListComplete();
        $a = new NodeComplete('a');
        $b = new NodeComplete('b');
        $c = new NodeComplete('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = $a;

        self::assertTrue(LinkedListComplete::circular($list));
    }

    public function testNonCircular(): void
    {
        $list = new LinkedListComplete();
        $a = new NodeComplete('a');
        $b = new NodeComplete('b');
        $c = new NodeComplete('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = null;

        self::assertFalse(LinkedListComplete::circular($list));
    }

    public function testFromLastEmpty(): void
    {
        self::assertNull(LinkedListComplete::fromLast($this->list, 2));
    }

    public function testFromLast(): void
    {
        $this->list->head = new NodeComplete(
            0,
            new NodeComplete(
                1,
                new NodeComplete(
                    2,
                    new NodeComplete(3)
                )
            )
        );

        $fromLast = LinkedListComplete::fromLast($this->list, 1);

        self::assertSame(2, $fromLast->data);
    }
}
