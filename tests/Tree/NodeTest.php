<?php

declare(strict_types=1);

namespace Tests\Tree;

use Exercises\Tree\Node;
use PHPUnit\Framework\TestCase;
use function array_key_last;
use function method_exists;

final class NodeTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Node::class, 'add'),
            'Class does not have method add'
        );
        self::assertTrue(
            method_exists(Node::class, 'remove'),
            'Class does not have method remove'
        );
    }

    public function testHasData(): void
    {
        self::markTestSkipped();
        $node = new Node(10);

        self::assertSame(10, $node->data);
    }

    public function testCanAdd(): void
    {
        self::markTestSkipped();
        $node = new Node(10);

        $node->add(20);

        self::assertCount(1, $node->children);
        self::assertSame(20, $node->children[0]->data);
    }

    public function testCanAddMultiple(): void
    {
        self::markTestSkipped();
        $node = new Node(10);

        $node->add(20);
        $node->add(30);
        $node->add(40);

        self::assertCount(3, $node->children);
        self::assertSame(40, $node->children[array_key_last($node->children)]->data);
    }

    public function testCanRemove(): void
    {
        self::markTestSkipped();
        $node = new Node(10);
        $node->add(20);
        self::assertSame(20, $node->children[0]->data);

        $node->remove(20);

        self::assertCount(0, $node->children);
    }

    public function testCanRemoveMultiple(): void
    {
        self::markTestSkipped();
        $node = new Node(10);
        $node->add(20);
        $node->add(30);
        $node->add(40);
        self::assertSame(20, $node->children[0]->data);
        self::assertSame(30, $node->children[1]->data);
        self::assertSame(40, $node->children[2]->data);

        $node->remove(20);
        $node->remove(40);

        self::assertCount(1, $node->children);
        self::assertSame(30, $node->children[0]->data);
    }
}
