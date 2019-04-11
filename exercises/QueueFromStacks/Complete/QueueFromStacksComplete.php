<?php

declare(strict_types=1);

namespace Exercises\QueueFromStacks\Complete;

use Exercises\Stack\Complete\StackComplete;

final class QueueFromStacksComplete
{
    /** @var StackComplete () */
    private $storage;
    /** @var StackComplete () */
    private $temporary;

    public function __construct()
    {
        $this->storage = new StackComplete();
        $this->temporary = new StackComplete();
    }

    /** @param mixed $value */
    public function add($value): void
    {
        $this->storage->push($value);
    }

    /** @return mixed|null */
    public function remove()
    {
        while ($this->storage->peek()) {
            $this->temporary->push($this->storage->pop());
        }

        $item = $this->temporary->pop();

        while ($this->temporary->peek()) {
            $this->storage->push($this->temporary->pop());
        }

        return $item;
    }

    /** @return mixed|null */
    public function peek()
    {
        while ($this->storage->peek()) {
            $this->temporary->push($this->storage->pop());
        }

        $item = $this->temporary->peek();

        while ($this->temporary->peek()) {
            $this->storage->push($this->temporary->pop());
        }

        return $item;
    }
}
