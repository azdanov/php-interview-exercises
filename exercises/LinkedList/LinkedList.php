<?php

declare(strict_types=1);

namespace Exercises\LinkedList;

use Iterator;

/**
 * Implements Linked List data structure with help of Node class.
 *
 * This class has single property head that references first node.
 */
class LinkedList implements Iterator
{
    public function __construct()
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
