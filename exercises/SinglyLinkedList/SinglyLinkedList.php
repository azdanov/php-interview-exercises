<?php
declare(strict_types=1);

namespace Exercises\SinglyLinkedList;

/**
 * Implement a singly linked-list
 * Each element only knows about the next Node, but not the previous.
 * Implement a print method, that prints all Node's data in their order.
 * Implement a reverse method that reverses the order of the linked list.
 *
 * @property Node|null $head
 * @property Node|null $last
 * @method void add(Node $link)
 * @method void reverse()
 * @method string print()

 * @example $list = new SinglyLinkedList;
 * $list->add(new Node('a'));
 * $list->add(new Node('b'));
 * $list->add(new Node('c'));
 *
 * $list::print() -> abc
 *
 * $list->reverse();
 * $list->print() -> cba
 *
*/
final class SinglyLinkedList
{
}
