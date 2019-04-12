<?php

declare(strict_types=1);

namespace Tests\LinkedList\Complete;

use Exercises\LinkedList\Complete\NodeComplete;
use PHPUnit\Framework\TestCase;

final class NodeCompleteTest extends TestCase
{
    public function testCanCreateNode(): void
    {
        $tail = new NodeComplete(1, new NodeComplete(2));

        self::assertSame(1, $tail->data);
        self::assertInstanceOf(NodeComplete::class, $tail->next);
        self::assertSame(2, $tail->next->data);
        self::assertNull($tail->next->next);
    }
}
