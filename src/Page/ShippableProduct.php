<?php

namespace Dynamic\Foxy\Products\Page;

use Dynamic\Products\Page\Product;

/**
 * Class ShippableProduct
 * @package Dynavap\Page
 */
class ShippableProduct extends Product
{
    /**
     * @var string
     */
    private static $table_name = 'ShippableProduct';

    /**
     * @var string
     */
    private static $hide_ancestor = Product::class;
}
