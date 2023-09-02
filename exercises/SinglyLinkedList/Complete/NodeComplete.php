<?php
declare(strict_types=1);

namespace Exercises\SinglyLinkedList\Complete;

final class NodeComplete {

  private $data;

  private $link = null;

  public function __construct(string $data)
  {
    $this->data = $data;
  }

  public function setLink(?NodeComplete $link): void
  {
    $this->link = $link;
  }

  public function getLink(): ?NodeComplete
  {
    return $this->link;
  }

  public function getData(): string
  {
    return $this->data;
  }
}
