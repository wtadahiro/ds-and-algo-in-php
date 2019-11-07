<?php
namespace DsAndAlgoInPhp\Lists\LinkedList;

class Node
{

    /** @var Node */
    private $next;

    /** @var int */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
        $this->next = null;
    }

    public function next(): ?Node
    {
        return $this->next;
    }

    public function setNext(Node $node): void
    {
        $this->next = $node;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
