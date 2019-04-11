<?php

declare(strict_types=1);

namespace Tests\Queue;

use Exercises\Queue\Complete\QueueComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class QueueTestComplete extends TestCase
{
    /** @var QueueComplete */
    private $queue;

    protected function setUp(): void
    {
        $this->queue = new QueueComplete();
    }

    public function testHasMethods(): void
    {
        $this->assertTrue(
            method_exists(QueueComplete::class, 'add'),
            'Class does not have static method add'
        );
        $this->assertTrue(
            method_exists(QueueComplete::class, 'remove'),
            'Class does not have static method remove'
        );
    }

    public function testCanCreateObject(): void
    {
        $this->assertIsObject($this->queue);
    }

    public function testCanAdd(): void
    {
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        $this->assertTrue(true);
    }

    public function testCanRemove(): void
    {
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        self::assertSame(1, $this->queue->remove());
        self::assertSame(2, $this->queue->remove());
        self::assertSame(3, $this->queue->remove());
        self::assertNull($this->queue->remove());
    }

    public function testCanPeek(): void
    {
        self::assertNull($this->queue->peek());

        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        $this->queue->remove();

        self::assertSame(2, $this->queue->peek());
    }

    public function testCanZip(): void
    {
        $queue1 = new QueueComplete();
        $queue2 = new QueueComplete();

        $queue1->add(1);
        $queue1->add(2);
        $queue1->add(3);
        $queue1->add(4);
        $queue2->add('a');
        $queue2->add('b');

        $queue3 = QueueComplete::zip($queue1, $queue2);

        self::assertSame(1, $queue3->remove());
        self::assertSame('a', $queue3->remove());
        self::assertSame(2, $queue3->remove());
        self::assertSame('b', $queue3->remove());
        self::assertSame(3, $queue3->remove());
        self::assertSame(4, $queue3->remove());
        self::assertNull($queue3->remove());
    }
}
