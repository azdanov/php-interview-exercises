<?php

declare(strict_types=1);

namespace Exercises\LinkedList;

use Iterator;

/**
 * Implements Linked List data structure with help of Node class.
 *
 * This class has single property head that references first node.
 */
final class LinkedList implements Iterator
{
    public function __construct()
    {
    }

    /**
     * Return a middle node without using counters or size.
     * Only iteration is allowed.
     *
     * When list has even number of items, return the
     * last one from the first half.
     */
    public static function midpoint(self $list): ?Node
    {
    }

    /**
     * Given a linked list detect if there is a circular reference
     * inside one of the nodes.
     *
     * $list = new LinkedList();
     * $a = new Node('a');
     * $b = new Node('b');
     * $c = new Node('c');
     *
     * $list->head = $a;
     * $a->next = $b;
     * $b->next = $c;
     * $c->next = $a;
     * LinkedList::circular($list) === true
     */
    public static function circular(self $list): ?Node
    {
    }

    /**
     * Return a node that is located n places from the end.
     *
     * Do not use size, and assume that n is always less than
     * the list length.
     */
    public static function fromLast(self $list, int $n): ?Node
    {
    }

    /**
     * Create a new Node from data and assign the node to the head property.
     *
     * @param mixed $data
     */
    public function insertFirst($data): void
    {
    }

    /**
     * Create a new Node from data and assign the node at the end.
     *
     * @param mixed $data
     */
    public function insertLast($data): void
    {
    }

    /**
     * @return int number of nodes in the linked list
     */
    public function size(): int
    {
    }

    /**
     * @return Node first node in the linked list
     */
    public function getFirst(): Node
    {
    }

    /**
     * @return Node first node in the linked list
     */
    public function getLast(): Node
    {
    }

    /**
     * Empty the linked list.
     */
    public function clear(): void
    {
    }

    /**
     * Remove first node from the linked list.
     */
    public function removeFirst(): void
    {
    }

    /**
     * Remove last node from the linked list.
     */
    public function removeLast(): void
    {
    }

    /**
     * @return Node at specified index
     */
    public function getAt(int $index): Node
    {
    }

    /**
     * @param int $index to remove node at
     */
    public function removeAt(int $index): void
    {
    }

    /**
     * Insert data at position.
     *
     * @param mixed $data
     */
    public function insertAt($data, int $index): void
    {
    }

    /**
     * @param callable $callback to call for each node in linked list
     */
    public function forEach(callable $callback): void
    {
    }

    /**
     * Return the current element.
     *
     * @see https://php.net/manual/en/iterator.current.php
     *
     * @return mixed can return any type
     */
    public function current()
    {
    }

    /**
     * Move forward to next element.
     *
     * @see https://php.net/manual/en/iterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Return the key of the current element.
     *
     * @see https://php.net/manual/en/iterator.key.php
     *
     * @return mixed scalar on success, or null on failure
     */
    public function key()
    {
    }

    /**
     * Checks if current position is valid.
     *
     * @see https://php.net/manual/en/iterator.valid.php
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool
    {
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see https://php.net/manual/en/iterator.rewind.php
     */
    public function rewind(): void
    {
    }
}
