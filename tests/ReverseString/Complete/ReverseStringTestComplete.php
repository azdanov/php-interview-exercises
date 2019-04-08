<?php

declare(strict_types=1);

namespace Tests\ReverseString\Complete;

use Exercises\ReverseString\Complete\ReverseStringComplete;
use PHPUnit\Framework\TestCase;

final class ReverseStringTestComplete extends TestCase
{
    public function testCanReverseString1(): void
    {
        $this->assertSame('ytrewq', ReverseStringComplete::reverse1('qwerty'));
    }

    public function testCanReverseStringWithWhitespace1(): void
    {
        $this->assertSame('ytr ewq ', ReverseStringComplete::reverse1(' qwe rty'));
    }

    public function testCanReverseString2(): void
    {
        $this->assertSame('ytrewq', ReverseStringComplete::reverse2('qwerty'));
    }

    public function testCanReverseStringWithWhitespace2(): void
    {
        $this->assertSame('ytr ewq ', ReverseStringComplete::reverse2(' qwe rty'));
    }

    public function testCanReverseString3(): void
    {
        $this->assertSame('ytrewq', ReverseStringComplete::reverse3('qwerty'));
    }

    public function testCanReverseStringWithWhitespace3(): void
    {
        $this->assertSame('ytr ewq ', ReverseStringComplete::reverse3(' qwe rty'));
    }

    public function testCanReverseString4(): void
    {
        $this->assertSame('ytrewq', ReverseStringComplete::reverse4('qwerty'));
    }

    public function testCanReverseStringWithWhitespace4(): void
    {
        $this->assertSame('ytr ewq ', ReverseStringComplete::reverse4(' qwe rty'));
    }
}
