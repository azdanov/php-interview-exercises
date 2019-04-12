<?php

declare(strict_types=1);

namespace Exercises\LinkedList\Complete;

final class NodeComplete
{
    /** @var self */
    public $next;
    /** @var mixed */
    public $data;

    /** @param mixed $data */
    public function __construct($data, ?self $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
