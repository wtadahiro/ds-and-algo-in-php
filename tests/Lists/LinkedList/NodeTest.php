<?php
namespace Tests\Lists\LinkedList;

use PHPUnit\Framework\TestCase;
use DsAndAlgoInPhp\Lists\LinkedList\Node;

class NodeTest extends TestCase
{

    public function test_instance()
    {
        $node = new Node(1);
        $this->assertInstanceof(Node::class, $node);
    }

    public function test_getValue()
    {
        $node = new Node(1);
        $this->assertEquals(1, $node->getValue());
    }

    public function test_next()
    {
        $node = new Node(1);
        $next_node = new Node(2);
        $node->setNext($next_node);
        $this->assertEquals($next_node, $node->next());
    }

}
