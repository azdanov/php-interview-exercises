<?php

declare(strict_types=1);

namespace Tests\Queue;

use Exercises\QueueFromStacks\QueueFromStacks;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class QueueFromStacksTest extends TestCase
{
    /** @var QueueFromStacks */
    private $queue;

    protected function setUp(): void
    {
        $this->queue = new QueueFromStacks();
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'add'),
            'Class does not have static method add'
        );
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'remove'),
            'Class does not have static method remove'
        );
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'peek'),
            'Class does not have static method peek'
        );
    }

    public function testCanCreateObject(): void
    {
        self::markTestSkipped();
        self::assertIsObject($this->queue);
    }

    public function testCanAdd(): void
    {
        self::markTestSkipped();
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        self::assertTrue(true);
    }

    public function testCanRemove(): void
    {
        self::markTestSkipped();
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        self::assertSame(1, $this->queue->remove());
        self::assertSame(2, $this->queue->remove());
        self::assertSame(3, $this->queue->remove());
    }

    public function testCanPeek(): void
    {
        self::markTestSkipped();
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);
        $this->queue->remove();

        self::assertSame(2, $this->queue->peek());
    }
}
