<?php

namespace Dynamic\Foxy\Products\Extension;

use Dynamic\Foxy\Products\Page\ShippableProduct;
use SilverStripe\ORM\DataExtension;

/**
 * Class OptionTypeDataExtension
 * @package Dynavap\Extension
 */
class ProductOptionDataExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $belongs_many_many = [
        'ShippableProducts' => ShippableProduct::class,
    ];
}
