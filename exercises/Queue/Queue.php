<?php

declare(strict_types=1);

namespace Exercises\Queue;

/**
 * Create a queue data structure.
 * This should be a class with add, remove and peek methods.
 *
 * Also create a static zip method that interweaves 2 queues
 * producing a new one.
 *
 * When queue is empty remove and peek methods should return null.
 *
 * @example $queue1 = new Queue();
 * $queue1->add(1);
 * $queue1->add(2);
 * $queue1->add(3);
 * $queue1->peek() === 3;
 * $queue1->remove() === 3;
 *
 * $queue2 = new Queue();
 *
 * $queue1->add('a');
 * $queue1->add('b');
 * $queue1->add('c');
 *
 * Queue::zip(queue1, queue2) -> [1, 'a', 2, 'b', 'c']
 */
final class Queue
{
}
