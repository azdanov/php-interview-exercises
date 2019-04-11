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
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst('a');

        self::assertTrue(true);
    }

    public function testInsertLast(): void
    {
        self::markTestSkipped();
        $this->list->insertLast(0);
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        self::assertTrue(true);
    }

    public function testSize(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertLast('a');

        self::assertSame(2, $this->list->size());
    }

    public function testGetFirstAndInsertFirst(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst('a');

        $first = $this->list->getFirst();
        self::assertSame('a', $first->data);
        self::assertInstanceOf(Node::class, $first->next);
        self::assertSame(1, $first->next->data);
    }

    public function testGetLastAndInsertLast(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst('a');
        $this->list->insertLast(0);

        $last = $this->list->getLast();
        self::assertSame(0, $last->data);
        self::assertNull($last->next);
    }

    public function testClear(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        $this->list->clear();

        $last = $this->list->getLast();
        self::assertNull($last);
    }

    public function testRemoveFirst(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);

        $this->list->removeFirst();

        $first = $this->list->getFirst();
        self::assertSame(2, $first->data);
        self::assertInstanceOf(Node::class, $first->next);
        self::assertSame(1, $first->next->data);
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
        $this->list->insertLast(1);
        $this->list->insertLast(2);
        $this->list->removeLast();

        $first = $this->list->getLast();
        self::assertSame(1, $first->data);
        self::assertNull($first->next);
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
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);

        $first = $this->list->getAt(0);
        self::assertSame(3, $first->data);

        $last = $this->list->getAt(2);
        self::assertSame(1, $last->data);
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
        $this->list->insertFirst(1);

        $this->list->removeAt(1);

        $first = $this->list->getFirst();
        self::assertNull($first);
    }

    public function testRemoveAtFirst(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $first = $this->list->getFirst();
        self::assertSame(4, $first->data);

        $this->list->removeAt(0);

        $first = $this->list->getFirst();
        self::assertSame(3, $first->data);
    }

    public function testRemoveAtIndex(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $first = $this->list->getAt(1);
        self::assertSame(3, $first->data);

        $this->list->removeAt(0);

        $first = $this->list->getAt(1);
        self::assertSame(2, $first->data);
    }

    public function testRemoveAtLast(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $first = $this->list->getLast();
        self::assertSame(1, $first->data);

        $this->list->removeAt(3);

        $first = $this->list->getLast();
        self::assertSame(2, $first->data);
    }

    public function testInsertAtEmpty(): void
    {
        self::markTestSkipped();
        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->getFirst()->data);
    }

    public function testInsertAtNegativeOutOfBound(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $this->list->insertAt('a', -10);

        self::assertSame('a', $this->list->getAt(0)->data);
        self::assertSame(4, $this->list->getAt(1)->data);
    }

    public function testInsertAt0(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $this->list->insertAt('a', 0);

        self::assertSame('a', $this->list->getAt(0)->data);
        self::assertSame(4, $this->list->getAt(1)->data);
    }

    public function testInsertAtMiddle(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $this->list->insertAt('a', 2);

        self::assertSame(4, $this->list->getAt(0)->data);
        self::assertSame(3, $this->list->getAt(1)->data);
        self::assertSame('a', $this->list->getAt(2)->data);
        self::assertSame(2, $this->list->getAt(3)->data);
        self::assertSame(1, $this->list->getAt(4)->data);
    }

    public function testInsertAtLast(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        $this->list->insertAt('hi', 2);

        self::assertSame(2, $this->list->getAt(0)->data);
        self::assertSame(1, $this->list->getAt(1)->data);
        self::assertSame('hi', $this->list->getAt(2)->data);
    }

    public function testInsertAtOutOfBound(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);

        $this->list->insertAt('hi', 20);

        self::assertSame(2, $this->list->getAt(0)->data);
        self::assertSame(1, $this->list->getAt(1)->data);
        self::assertSame('hi', $this->list->getAt(2)->data);
    }

    public function testForEach(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $keys = [];
        $this->list->forEach(static function (&$data, $index) use (&$keys): void {
            $keys[] = $index;
            $data *= 10;
        });

        self::assertSame([0, 1, 2, 3], $keys);
        self::assertSame(40, $this->list->getAt(0)->data);
        self::assertSame(30, $this->list->getAt(1)->data);
        self::assertSame(20, $this->list->getAt(2)->data);
        self::assertSame(10, $this->list->getAt(3)->data);
    }

    public function testForEachAs(): void
    {
        self::markTestSkipped();
        $this->list->insertFirst(1);
        $this->list->insertFirst(2);
        $this->list->insertFirst(3);
        $this->list->insertFirst(4);

        $keys = [];
        foreach ($this->list as $key => $item) {
            $keys[] = $key;
            $item->data *= 10;
        }

        self::assertSame([0, 1, 2, 3], $keys);
        self::assertSame(40, $this->list->getAt(0)->data);
        self::assertSame(30, $this->list->getAt(1)->data);
        self::assertSame(20, $this->list->getAt(2)->data);
        self::assertSame(10, $this->list->getAt(3)->data);
    }

    public function testForEachAsEmpty(): void
    {
        self::markTestSkipped();
        foreach ($this->list as $item) {
            $item->data *= 10;
        }
        self::assertTrue(true);
    }
}
