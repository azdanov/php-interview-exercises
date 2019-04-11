<?php

declare(strict_types=1);

namespace Tests\Stack;

use Exercises\Stack\Stack;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class StackTest extends TestCase
{
    /** @var Stack */
    private $stack;

    protected function setUp(): void
    {
        $this->stack = new Stack();
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        $this->assertTrue(
            method_exists(Stack::class, 'push'),
            'Class does not have method push'
        );
        $this->assertTrue(
            method_exists(Stack::class, 'pop'),
            'Class does not have method pop'
        );
        $this->assertTrue(
            method_exists(Stack::class, 'peek'),
            'Class does not have method peek'
        );
    }

    public function testCanCreateObject(): void
    {
        self::markTestSkipped();
        $this->assertIsObject($this->stack);
    }

    public function testCanPush(): void
    {
        self::markTestSkipped();
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        $this->assertTrue(true);
    }

    public function testCanPop(): void
    {
        self::markTestSkipped();
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        $this->assertSame(3, $this->stack->pop());
        $this->assertSame(2, $this->stack->pop());
        $this->assertSame(1, $this->stack->pop());
        $this->assertNull($this->stack->pop());
    }

    public function testCanPeek(): void
    {
        self::markTestSkipped();
        $this->assertNull($this->stack->peek());
        $this->stack->push(1);
        $this->stack->push(2);
        $this->assertSame(2, $this->stack->peek());
    }
}
