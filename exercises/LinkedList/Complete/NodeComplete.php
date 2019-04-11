<?php

declare(strict_types=1);

namespace Exercises\LinkedList\Complete;

class NodeComplete
{
    /** @var mixed */
    public $data;
    /** @var self */
    public $next;

    /** @param mixed $data */
    public function __construct($data, ?self $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
