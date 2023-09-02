<?php

declare(strict_types=1);

namespace Tests\SinglyLinkedList;

use Exercises\SinglyLinkedList\Node;
use Exercises\SinglyLinkedList\SinglyLinkedList;
use PHPUnit\Framework\TestCase;

final class SinglyLinkedListTest extends TestCase
{
    private $list;

    protected function setUp(): void
    {
        $this->list = new SinglyLinkedList();
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(SinglyLinkedList::class, 'add'),
            'Class does not have method add'
        );
        self::assertTrue(
            method_exists(SinglyLinkedList::class, 'reverse'),
            'Class does not have method reverse'
        );
        self::assertTrue(
            method_exists(SinglyLinkedList::class, 'print'),
            'Class does not have method print'
        );
    }

    public function testPrint(): void
    {
        self::markTestSkipped();
        $this->list->add(new Node("a"));
        $this->list->add(new Node("b"));
        $this->list->add(new Node("c"));
        self::assertSame('abc', $this->list->print());
    }

    public function testReverse(): void
    {
        self::markTestSkipped();
        $this->list = new SinglyLinkedList;
        $this->list->add(new Node("a"));
        $this->list->add(new Node("b"));
        $this->list->add(new Node("c"));

        $this->list->reverse();
        self::assertSame('cba', $this->list->print());
    }
}
