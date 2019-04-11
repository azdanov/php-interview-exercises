<?php

declare(strict_types=1);

namespace Exercises\LinkedList\Complete;

use Iterator;

class LinkedListComplete implements Iterator
{
    /** @var NodeComplete|null */
    public $head;
    /** @var int */
    private $position = 0;

    public function __construct()
    {
        $this->head = null;
    }

    public function size(): int
    {
        $count = 0;

        $current = $this->head;

        while ($current) {
            ++$count;
            $current = $current->next;
        }

        return $count;
    }

    public function getFirst(): ?NodeComplete
    {
        return $this->head;
    }

    public function getLast(): ?NodeComplete
    {
        $current = $this->head;
        if ($current === null) {
            return $current;
        }

        while ($current->next !== null) {
            $current = $current->next;
        }

        return $current;
    }

    public function clear(): void
    {
        $this->head = null;
    }

    public function removeLast(): void
    {
        $current = $this->head;
        if ($current === null) {
            return;
        }

        $previous = null;
        while ($current->next) {
            $previous = $current;
            $current = $current->next;
        }

        $previous->next = null;
    }

    public function removeAt(int $index): void
    {
        $current = $this->head;

        if ($current === null) {
            return;
        }

        if ($index === 0 || $current->next === null) {
            $this->removeFirst();

            return;
        }

        $previous = null;
        for ($i = 0; $current->next && $i <= $index; ++$i) {
            $previous = $current;
            $current = $current->next;
        }

        $previous->next = $current->next;
    }

    public function removeFirst(): void
    {
        if ($this->head === null) {
            return;
        }

        $this->head = $this->head->next;
    }

    /** @param mixed $data */
    public function insertAt($data, int $index): void
    {
        $current = $this->head;
        if ($index <= 0 || !$current) {
            $this->insertFirst($data);

            return;
        }

        $previous = null;
        for ($i = 0; $current->next && $i < $index; ++$i) {
            $previous = $current;
            $current = $current->next;
        }

        if ($current->next === null) {
            $this->insertLast($data);

            return;
        }

        $previous->next = new NodeComplete($data, $current);
    }

    /** @param mixed $data */
    public function insertFirst($data): void
    {
        if ($this->head) {
            $this->head = new NodeComplete($data, $this->head);
        } else {
            $this->head = new NodeComplete($data);
        }
    }

    /** @param mixed $data */
    public function insertLast($data): void
    {
        $last = $this->getLast();
        $new = new NodeComplete($data);

        if ($last) {
            $last->next = $new;
        } else {
            $this->head = $new;
        }
    }

    public function forEach(callable $callback): void
    {
        $current = $this->head;

        $counter = 0;
        while ($current) {
            $callback($current->data, $counter++);
            $current = $current->next;
        }
    }

    public function current(): NodeComplete
    {
        return $this->getAt($this->position);
    }

    public function getAt(int $index): ?NodeComplete
    {
        $current = $this->head;
        for ($i = 0; $current && $i < $index; ++$i) {
            $current = $current->next;
        }

        return $current;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->getAt($this->position)->data);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public static function midpoint(self $list): ?NodeComplete
    {
        $current = $list->head;
        if (!$current) {
            return $current;
        }

        $sentinel = $list->head;
        while ($sentinel->next && $sentinel->next->next) {
            $current = $current->next;
            $sentinel = $sentinel->next->next;
        }

        return $current;
    }

    public static function circular(self $list): bool
    {
        $current = $list->head;
        if (!$current) {
            return false;
        }

        $sentinel = $list->head;
        while ($sentinel->next && $sentinel->next->next) {
            $current = $current->next;
            $sentinel = $sentinel->next->next;

            if ($current === $sentinel) {
                return true;
            }
        }

        return false;
    }

    public static function fromLast(self $list, int $n): ?NodeComplete
    {
        $current = $list->head;

        if (!$current) {
            return null;
        }

        $sentinel = $list->head;

        while ($n-- > 0) {
            $sentinel = $sentinel->next;
        }

        while ($sentinel->next) {
            $current = $current->next;
            $sentinel = $sentinel->next;
        }

        return $current;
    }
}
