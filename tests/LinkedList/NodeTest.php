<?php

declare(strict_types=1);

namespace Tests\LinkedList;

use Exercises\LinkedList\Node;
use PHPUnit\Framework\TestCase;

final class NodeTest extends TestCase
{
    public function testCanCreateNode(): void
    {
        self::markTestSkipped();
        $tail = new Node(1, new Node(2));

        self::assertSame(1, $tail->data);
        self::assertInstanceOf(Node::class, $tail->next);
        self::assertSame(2, $tail->next->data);
        self::assertNull($tail->next->next);
    }
}
