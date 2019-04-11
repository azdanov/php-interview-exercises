<?php

declare(strict_types=1);

namespace Tests\Stack;

use Exercises\Stack\Complete\StackComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class StackTestComplete extends TestCase
{
    /** @var StackComplete */
    private $stack;

    protected function setUp(): void
    {
        $this->stack = new StackComplete();
    }

    public function testHasMethods(): void
    {
        $this->assertTrue(
            method_exists(StackComplete::class, 'push'),
            'Class does not have static method push'
        );
        $this->assertTrue(
            method_exists(StackComplete::class, 'pop'),
            'Class does not have static method pop'
        );
    }

    public function testCanCreateObject(): void
    {
        $this->assertIsObject($this->stack);
    }

    public function testCanPush(): void
    {
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        $this->assertTrue(true);
    }

    public function testCanPop(): void
    {
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
        $this->assertNull($this->stack->peek());
        $this->stack->push(1);
        $this->stack->push(2);
        $this->assertSame(2, $this->stack->peek());
    }
}
