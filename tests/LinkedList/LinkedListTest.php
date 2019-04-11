<?php

declare(strict_types=1);

namespace Tests\LinkedList;

use Exercises\LinkedList\LinkedList;
use Exercises\LinkedList\Node;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    /** @var LinkedList */
    private $list;

    protected function setUp(): void
    {
        $this->list = new LinkedList();
    }

    public function testInsertFirst(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(0);
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        self::assertSame(2, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame(0, $this->list->head->next->next->data);
    }

    public function testInsertLast(): void
    {
        self::markTestSkipped();
        $this->list->insertLast(0);
        $this->list->insertLast(1);
        $this->list->insertLast(2);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame(2, $this->list->head->next->next->data);
    }

    public function testSize(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0, new Node(1));

        self::assertSame(2, $this->list->size());
    }

    public function testGetFirst(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0, new Node(1));

        $first = $this->list->getFirst();
        self::assertSame(0, $first->data);
        self::assertInstanceOf(Node::class, $first->next);
        self::assertSame(1, $first->next->data);
    }

    public function testGetLast(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0, new Node(1));

        $last = $this->list->getLast();
        self::assertSame(1, $last->data);
        self::assertNull($last->next);
    }

    public function testClear(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0, new Node(1));

        $this->list->clear();

        $last = $this->list->head;
        self::assertNull($last);
    }

    public function testRemoveFirst(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(2)
            )
        );

        $this->list->removeFirst();

        $first = $this->list->head;
        self::assertSame(1, $first->data);
        self::assertInstanceOf(Node::class, $first->next);
        self::assertSame(2, $first->next->data);
    }

    public function testRemoveFirstEmpty(): void
    {
        self::markTestSkipped();
        $this->list->removeFirst();
        self::assertTrue(true);
    }

    public function testRemoveLast(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(2)
            )
        );

        $this->list->removeLast();

        $last = $this->list->head->next;
        self::assertSame(1, $last->data);
        self::assertNull($last->next);
    }

    public function testRemoveLastEmpty(): void
    {
        self::markTestSkipped();
        $this->list->removeLast();
        self::assertTrue(true);
    }

    public function testGetAt(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(2)
            )
        );

        $first = $this->list->getAt(0);
        self::assertSame(0, $first->data);

        $last = $this->list->getAt(2);
        self::assertSame(2, $last->data);
    }

    public function testGetAtEmpty(): void
    {
        self::markTestSkipped();
        $first = $this->list->getAt(0);
        self::assertNull($first);

        $second = $this->list->getAt(1);
        self::assertNull($second);
    }

    public function testRemoveAtEmpty(): void
    {
        self::markTestSkipped();
        $this->list->removeAt(0);
        $this->list->removeAt(1);
        $this->list->removeAt(2);
        self::assertTrue(true);
    }

    public function testRemoveAtOutOfBound(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0);

        $this->list->removeAt(1);

        $first = $this->list->head;
        self::assertNull($first);
    }

    public function testRemoveAtFirst(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->head->data);
    }

    public function testInsertAtNegativeOutOfBound(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
                )
            )
        );

        $this->list->insertAt('a', -10);

        self::assertSame('a', $this->list->head->data);
        self::assertSame(0, $this->list->head->next->data);
    }

    public function testInsertAt0(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
                )
            )
        );

        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->head->data);
        self::assertSame(0, $this->list->head->next->data);
    }

    public function testInsertAtMiddle(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(1)
        );

        $this->list->insertAt('hi', 2);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame('hi', $this->list->head->next->next->data);
    }

    public function testInsertAtOutOfBound(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(1)
        );

        $this->list->insertAt('hi', 20);

        self::assertSame(0, $this->list->head->data);
        self::assertSame(1, $this->list->head->next->data);
        self::assertSame('hi', $this->list->head->next->next->data);
    }

    public function testForEach(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
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
        self::markTestSkipped();
        foreach ($this->list as $item) {
            $item->data *= 10;
        }
        self::assertTrue(true);
    }

    public function testMidpointEmpty(): void
    {
        self::markTestSkipped();
        $midpoint = LinkedList::midpoint($this->list);

        self::assertNull($midpoint);
    }

    public function testMidpointOne(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(0);

        $midpoint = LinkedList::midpoint($this->list);

        self::assertSame(0, $midpoint->data);
    }

    public function testMidpointTwo(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(1)
        );

        $midpoint = LinkedList::midpoint($this->list);

        self::assertSame(0, $midpoint->data);
    }

    public function testMidpointOdd(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(2)
            )
        );

        $midpoint = LinkedList::midpoint($this->list);

        self::assertSame(1, $midpoint->data);
    }

    public function testMidpointEven(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
                )
            )
        );

        $midpoint = LinkedList::midpoint($this->list);

        self::assertSame(1, $midpoint->data);
    }

    public function testCircularEmpty(): void
    {
        self::markTestSkipped();
        self::assertFalse(LinkedList::circular($this->list));
    }

    public function testCircular(): void
    {
        self::markTestSkipped();
        $list = new LinkedList();
        $a = new Node('a');
        $b = new Node('b');
        $c = new Node('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = $b;

        self::assertTrue(LinkedList::circular($list));
    }

    public function testCircularHead(): void
    {
        self::markTestSkipped();
        $list = new LinkedList();
        $a = new Node('a');
        $b = new Node('b');
        $c = new Node('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = $a;

        self::assertTrue(LinkedList::circular($list));
    }

    public function testNonCircular(): void
    {
        self::markTestSkipped();
        $list = new LinkedList();
        $a = new Node('a');
        $b = new Node('b');
        $c = new Node('c');

        $list->head = $a;
        $a->next = $b;
        $b->next = $c;
        $c->next = null;

        self::assertFalse(LinkedList::circular($list));
    }

    public function testFromLastEmpty(): void
    {
        self::markTestSkipped();
        self::assertNull(LinkedList::fromLast($this->list, 2));
    }

    public function testFromLast(): void
    {
        self::markTestSkipped();
        $this->list->head = new Node(
            0,
            new Node(
                1,
                new Node(
                    2,
                    new Node(3)
                )
            )
        );

        $fromLast = LinkedList::fromLast($this->list, 1);

        self::assertSame(2, $fromLast->data);
    }
}
