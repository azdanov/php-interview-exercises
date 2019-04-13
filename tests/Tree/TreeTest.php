<?php

declare(strict_types=1);

namespace Tests\Tree;

use Exercises\Tree\Node;
use Exercises\Tree\Tree;
use PHPUnit\Framework\TestCase;

final class TreeTest extends TestCase
{
    /** @var Tree */
    private $tree;

    protected function setUp(): void
    {
        $this->tree = new Tree();
    }

    public function testHasRootProperty(): void
    {
        self::markTestSkipped();
        self::assertObjectHasAttribute('root', $this->tree);
    }

    public function testTraverseBreadthFirst(): void
    {
        self::markTestSkipped();
        $letters = [];
        $this->tree->root = new Node('1a');
        $this->tree->root->add('2b');
        $this->tree->root->add('2c');
        $this->tree->root->children[0]->add('3d');
        $this->tree->traverseBreadthFirst(
            static function ($data) use (&$letters): void {
                $letters[] = $data;
            }
        );

        self::assertEquals(['1a', '2b', '2c', '3d'], $letters);
    }

    public function testTraverseDepthFirst(): void
    {
        self::markTestSkipped();
        $letters = [];
        $this->tree->root = new Node('1a');
        $this->tree->root->add('2b');
        $this->tree->root->add('2c');
        $this->tree->root->children[0]->add('3d');
        $this->tree->traverseDepthFirst(
            static function ($data) use (&$letters): void {
                $letters[] = $data;
            }
        );

        self::assertEquals(['1a', '2b', '3d', '2c'], $letters);
    }

    public function testLevelWidth1(): void
    {
        self::markTestSkipped();
        $this->tree->root = new Node(0);
        $this->tree->root->add(1);
        $this->tree->root->add(2);
        $this->tree->root->add(3);
        $this->tree->root->children[0]->add(4);
        $this->tree->root->children[1]->add(5);

        self::assertEquals([1, 3, 2], TreeComplete::levelWidth($this->tree->root));
    }

    public function testLevelWidth2(): void
    {
        self::markTestSkipped();
        $this->tree->root = new Node(0);
        $this->tree->root->add(1);
        $this->tree->root->children[0]->add(2);
        $this->tree->root->children[0]->add(3);
        $this->tree->root->children[0]->children[0]->add(4);

        self::assertEquals([1, 1, 2, 1], TreeComplete::levelWidth($this->tree->root));
    }
}
