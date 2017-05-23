<?php

class CollectionTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function empty_instantiated_return_no_items()
    {
        $collection = new App\Support\Collection();

        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct_for_items_passed_in()
    {
        $collection = new App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_return_match_items_passed_in()
    {
        $collection = new App\Support\Collection([
            'one', 'two'
        ]);

        $this->assertCount(2, $collection->get());
        $this->assertEquals('one', $collection->get()['0']);
        $this->assertEquals('two', $collection->get()['1']);
    }

    /** @test */
    public function collection_is_instance_of_iterator_aggregate()
    {
        $collection = new App\Support\Collection();

        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test */
    public function collection_can_be_iterated()
    {
        $collection = new App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $collection->getIterator());
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /** @test */
    public function collection_can_be_merged_with_another_collection()
    {
        $collection1 = new App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $collection2 = new App\Support\Collection([
            'four', 'five'
        ]);

        $collection1->merge($collection2);

        $this->assertCount(5, $collection1->get());
        $this->assertEquals(5, $collection1->count());
    }
}
