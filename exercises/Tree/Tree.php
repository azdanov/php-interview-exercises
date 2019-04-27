<?php

declare(strict_types=1);

namespace Exercises\Tree;

/**
 * Create a Tree.
 *
 * Methods traverseBreadthFirst and traverseDepthFirst should call
 * provided callback on each tree Node.
 *
 * Method levelWidth when given the root node of a tree should return
 * an array where each element is the width of the tree at respective level.
 *      0
 *    / | \
 *  1   2  3
 *  |      |
 *  4      5
 * ===
 *  [1, 3, 2]
 *
 * @see http://courses.cs.vt.edu/~cs2604/spring02/Notes/C04.GeneralBinaryTrees.pdf
 *
 * @property Node|null $root
 * @method void traverseBreadthFirst(callable $callback)
 * @method void traverseDepthFirst(callable $callback)
 * @method static int[] levelWidth(Node $root)
 */
final class Tree
{
}
