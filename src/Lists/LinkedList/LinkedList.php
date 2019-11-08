<?php
namespace DsAndAlgoInPhp\Lists\LinkedList;

use DsAndAlgoInPhp\Lists\LinkedList\Node;

class LinkedList
{
    /** @var Node */
    private $first_node;

    /** @var Node */
    private $last_node;

    /** @var int */
    private $count;

    public function __construct()
    {
        $this->first_node = null;
        $this->last_node = null;
        $this->count = 0;
    }


    /**
     * @param int $value
     * @param int $index
     * @return void
     */
    public function insert(int $value, int $index = 0): void
    {
        if (is_null($this->first_node) || $index === 0) {
            $this->insertFirst($value);
            return;
        } elseif ($index >= $this->count) {
            $this->insertLast($value);
            return;
        }

        $target_node = $this->first_node;
        $count = 0;
        while ($target_node) {
            $count++;
            if ($count === $index) {
                break;
            }
            $target_node = $target_node->next();
        }
        $node = new Node($value);
        $node->setNext($target_node->next());
        $target_node->setNext($node);

        $this->count++;

    }

    /**
     * @param int $value
     * @return void
     */
    public function insertFirst($value): void
    {
        $node = new Node($value);
        if (is_null($this->first_node)) {
            $this->last_node = $node;
        } else {
            $node->setNext($this->first_node);
        }

        $this->first_node = $node;
        $this->count++;
    }

    /**
     * @param int $value
     * @return void
     */
    public function insertLast($value): void
    {
        if (is_null($this->first_node)) {
            $this->insertFirst($value);
            return;
        }

        $node = new Node($value);
        $this->last_node->setNext($node);
        $this->last_node = $node;
        $this->count++;
    }

    public function delete(int $index): void
    {
    }

    public function find(int $value): ?int
    {
    }

    public function get(int $index): ?int
    {

        if ($index > $this->count() - 1) {
            throw new \OutOfRangeException();
        }

        $node = $this->first_node;
        for ($i = 0; $i < $index; $i++) {
            $node = $node->next();
        }

        return $node->getValue();
    }

    public function toString(): string
    {
        $node = $this->first_node;
        $string = '';
        while ($node) {
            $string .= $node->getValue();
            $node = $node->next();
            if ($node) {
                $string .= ' -> ';
            }
        }

        return $string;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->count;
    }
}

