<?php
namespace Tests\Lists\LinkedList;

use PHPUnit\Framework\TestCase;
use DsAndAlgoInPhp\Lists\LinkedList\LinkedList;

class LinkedListTest extends TestCase
{

    public function test_class()
    {
        $list = new LinkedList();
        $this->assertInstanceof(LinkedList::class, $list);
    }

}
