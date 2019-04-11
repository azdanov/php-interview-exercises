<?php

declare(strict_types=1);

namespace Exercises\QueueFromStacks;

use Exercises\Stack\Stack;

/**
 * Implement a Queue using two stacks.
 * This should be a class with add, remove and peek methods.
 *
 * When queue is empty remove and peek methods should return null.
 */
final class QueueFromStacks
{
    /** @var Stack */
    private $s1;
    /** @var Stack */
    private $s2;

    public function __construct()
    {
        $this->s1 = new Stack();
        $this->s2 = new Stack();
    }
}
