<?php
declare(strict_types=1);

namespace Exercises\SinglyLinkedList\Complete;

use Exercises\SinglyLinkedList\Complete\NodeComplete;

final class SinglyLinkedListComplete
{
    private $head = null;
    private $last = null;

    public function add(NodeComplete $node): void
    {
        if (null === $this->head) {
            $this->head = $node;
        }
        if ($this->last instanceof NodeComplete) {
            $this->last->setLink($node);
        }

        $this->last = $node;
    }

    public function reverse(): void
    {
        $current = $this->head;
        $new = null;

        while (null !== $current) {
            $temp = $current->getLink();
            $current->setLink($new);
            $new = $current;
            $current = $temp;
        }
        $this->head = $new;
    }

    public function print(): string
    {
        $currentNode = $this->head;
        $output = '';

        while (null !== $currentNode) {
            $output .= $currentNode->getData();
            $currentNode = $currentNode->getLink();
        }
        return $output;
    }
}
