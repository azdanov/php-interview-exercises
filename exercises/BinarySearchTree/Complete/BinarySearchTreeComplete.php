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
}
