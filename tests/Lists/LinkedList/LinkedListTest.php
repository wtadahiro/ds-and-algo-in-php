<?php
namespace Tests\Lists\LinkedList;

use PHPUnit\Framework\TestCase;
use DsAndAlgoInPhp\Lists\LinkedList\LinkedList;

class LinkedListTest extends TestCase
{

    public function test_instance()
    {
        $list = new LinkedList();
        $this->assertInstanceof(LinkedList::class, $list);
    }

    public function test_insertFirst_intoEmptyList()
    {
        $list = new LinkedList();
        $list->insertFirst(1);
        $this->assertEquals(1, $list->get(0));
        $this->assertEquals(1, $list->count());
    }

    public function test_insertFirst_intoNotEmptyList()
    {
        $list = new LinkedList();
        $list->insertFirst(1);
        $list->insertFirst(2);
        $this->assertEquals(2, $list->get(0));
        $this->assertEquals(2, $list->count());
    }

    public function test_insertLast_intoEmptyList()
    {
        $list = new LinkedList();
        $list->insertLast(1);
        $this->assertEquals(1, $list->get(0));
        $this->assertEquals(1, $list->count());
    }

    public function test_insertLast_intoNotEmptyList()
    {
        $list = new LinkedList();
        $list->insertFirst(1);
        $list->insertLast(2);
        $this->assertEquals(2, $list->get(1));
        $this->assertEquals(2, $list->count());
    }

    public function test_insert_intoEmptyList()
    {
        $list = new LinkedList();
        $list->insert(1, 0);
        $this->assertEquals(1, $list->get(0));
        $this->assertEquals(1, $list->count());
    }

    public function test_insert_intoBetweenElements()
    {
        $list = new LinkedList();
        $list->insertFirst(1);
        $list->insertFirst(2);
        $list->insert(3, 1);
        $this->assertEquals(3, $list->get(1));
        $this->assertEquals(3, $list->count());
    }

    public function test_insert_intoTheEndOfList()
    {
        $list = new LinkedList();
        $list->insertFirst(1);
        $list->insert(2, 1);
        $this->assertEquals(2, $list->get(1));
        $this->assertEquals(2, $list->count());
    }

    public function test_get_firstElement()
    {
        $list = new LinkedList();
        $list->insert(1);
        $this->assertEquals(1, $list->get(0));
    }

    public function test_get_lastelement()
    {
        $list = new LinkedList();
        $list->insert(1);
        $list->insert(2, 1);
        $this->assertEquals(2, $list->get(1));
    }

    public function test_get_outOfRange()
    {
        $this->expectException(\OutOfRangeException::class);
        $list = new LinkedList();
        $list->insert(1);
        $list->get(5);
    }


}

