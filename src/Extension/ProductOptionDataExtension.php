<?php

namespace Dynamic\Foxy\Products\Extension;

use Dynamic\Products\Page\Product;
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
        'Products' => Product::class,
    ];
}
