<?php

declare(strict_types=1);

namespace Exercises\BinarySearchTree;

/**
 * @property mixed data is set in the constructor
 * @property self|null left is initially null
 * @property self|null right is initially null
 * @method void insert(mixed $data) inserts a new node at the appropriate location.
 * @method Node|null contains(mixed $data) returns a node that was found in the tree or null.
 * @method static bool validate(self $node, int $min, int $max) validate the binary search tree,
 *   ensure that every node's left child is less than the parent node's value, and that
 *   every node's right child is greater than the parent.
 */
final class BinarySearchTree
{
}
