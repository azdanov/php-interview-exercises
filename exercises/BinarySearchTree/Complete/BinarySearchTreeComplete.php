<?php

declare(strict_types=1);

namespace Exercises\BinarySearchTree\Complete;

final class BinarySearchTreeComplete
{
    /** @var mixed */
    public $data;
    /** @var self|null */
    public $left = null;
    /** @var self|null */
    public $right = null;

    /** @param mixed $data */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public static function validate(
        self $node,
        ?int $min = null,
        ?int $max = null
    ): bool {
        if (($max !== null && $node->data > $max) ||
            ($min !== null && $node->data < $min)) {
            return false;
        }

        if (($node->left && !self::validate($node->left, $min, $node->data)) ||
            ($node->right && !self::validate($node->right, $node->data, $max))) {
            return false;
        }

        return true;
    }

    /** @param mixed $data */
    public function insert($data): void
    {
        if ($this->left && $data < $this->data) {
            $this->left->insert($data);

            return;
        }

        if ($this->right && $data > $this->data) {
            $this->right->insert($data);

            return;
        }

        if ($data < $this->data) {
            $this->left = new self($data);

            return;
        }

        if ($data > $this->data) {
            $this->right = new self($data);
        }
    }

    /** @param mixed $data */
    public function contains($data): ?self
    {
        if ($data === $this->data) {
            return $this;
        }

        if ($this->left && $data < $this->data) {
            return $this->left->contains($data);
        }

        if ($this->right && $data > $this->data) {
            return $this->right->contains($data);
        }

        return null;
    }

    /** @return mixed[] */
    public function depthFirstInOrder(): array
    {
        $data = [];

        self::traverseInOrder($this, static function (self $node) use (&$data): void {
            $data[] = $node->data;
        });

        return $data;
    }

    /** @return mixed[] */
    public function depthFirstPostOrder(): array
    {
        $data = [];

        self::traversePostOrder($this, static function (self $node) use (&$data): void {
            $data[] = $node->data;
        });

        return $data;
    }

    /** @return mixed[] */
    public function depthFirstPreOrder(): array
    {
        $data = [];

        self::traversePreOrder($this, static function (self $node) use (&$data): void {
            $data[] = $node->data;
        });

        return $data;
    }

    /** @param mixed[] $node */
    private static function traverseInOrder(self $node, callable $cb): void
    {
        if ($node->left) {
            self::traverseInOrder($node->left, $cb);
        }

        $cb($node);

        if ($node->right) {
            self::traverseInOrder($node->right, $cb);
        }
    }

    /** @param mixed[] $node */
    private static function traversePostOrder(self $node, callable $cb): void
    {
        if ($node->left) {
            self::traversePostOrder($node->left, $cb);
        }

        if ($node->right) {
            self::traversePostOrder($node->right, $cb);
        }

        $cb($node);
    }

    /** @param mixed[] $node */
    private static function traversePreOrder(self $node, callable $cb): void
    {
        $cb($node);

        if ($node->left) {
            self::traversePreOrder($node->left, $cb);
        }

        if ($node->right) {
            self::traversePreOrder($node->right, $cb);
        }
    }
}
