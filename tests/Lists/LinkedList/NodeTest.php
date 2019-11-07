<?php
namespace Tests\Lists\LinkedList;

use PHPUnit\Framework\TestCase;
use DsAndAlgoInPhp\Lists\LinkedList\Node;

class NodeTest extends TestCase
{

    public function test_class()
    {
        $list = new Node(1);
        $this->assertInstanceof(Node::class, $list);
    }

}
