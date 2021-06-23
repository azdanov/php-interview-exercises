<?php
declare(strict_types=1);

namespace Exercises\SinglyLinkedList;

/**
 * Create a Node.
 * The node can have a linked node and a data string.
 *
 * @property string $data
 * @property Node|null $link
 *
 * @method void setLink(Node $link)
 * @method Node|null getLink()
 * @method string getData()

 * @example $node = new Node('first');
 * $linkedNode = new Node('second');
 * $node->setLink($linkedNode);
 *
 * $node->getData() -> 'first'
 * $node->getLink() -> $linkedNode
*/

final class Node
{
}
