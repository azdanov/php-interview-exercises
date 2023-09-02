<?php

declare(strict_types=1);

namespace Tests\SinglyLinkedList;

use Exercises\SinglyLinkedList\Complete\SinglyLinkedListComplete;
use Exercises\SinglyLinkedList\Complete\NodeComplete;
use PHPUnit\Framework\TestCase;

final class SinglyLinkedListCompleteTest extends TestCase
{
    private $list;

    protected function setUp(): void
    {
        $this->list = new SinglyLinkedListComplete();
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(SinglyLinkedListComplete::class, 'add'),
            'Class does not have method add'
        );
        self::assertTrue(
            method_exists(SinglyLinkedListComplete::class, 'reverse'),
            'Class does not have method reverse'
        );
        self::assertTrue(
            method_exists(SinglyLinkedListComplete::class, 'print'),
            'Class does not have method print'
        );
    }

    public function testPrint(): void
    {
        $this->list->add(new NodeComplete("a"));
        $this->list->add(new NodeComplete("b"));
        $this->list->add(new NodeComplete("c"));

        self::assertSame('abc', $this->list->print());
    }

    public function testReverse(): void
    {
        $this->list->add(new NodeComplete("a"));
        $this->list->add(new NodeComplete("b"));
        $this->list->add(new NodeComplete("c"));
        $this->list->reverse();
        self::assertSame('cba', $this->list->print());
    }
}
