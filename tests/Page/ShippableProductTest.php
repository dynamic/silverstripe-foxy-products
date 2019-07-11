<?php

namespace Dynavap\Test\Page;

use Dynamic\Foxy\Products\Page\ShippableProduct;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

class ShippableProductTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ShippableProduct::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
