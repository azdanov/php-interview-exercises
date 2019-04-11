<?php

declare(strict_types=1);

namespace Exercises\QueueFromStacks\Complete;

use Exercises\Stack\Complete\StackComplete;

final class QueueFromStacksComplete
{
    /** @var StackComplete () */
    private $receiver;
    /** @var StackComplete () */
    private $storage;

    public function __construct()
    {
        $this->receiver = new StackComplete();
        $this->storage = new StackComplete();
    }

    /** @param mixed $value */
    public function add($value): void
    {
        $this->receiver->push($value);
    }

    /** @return mixed|null */
    public function remove()
    {
        while ($this->receiver->peek()) {
            $this->storage->push($this->receiver->pop());
        }

        return $this->storage->pop();
    }

    /** @return mixed|null */
    public function peek()
    {
        while ($this->receiver->peek()) {
            $this->storage->push($this->receiver->pop());
        }

        return $this->storage->peek();
    }
}
