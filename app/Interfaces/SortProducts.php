<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface SortProducts
{
    /**
     * Create Eloquent array from data
     *
     * @param array $products
     * @param string $categoryQuery
     * @param string (optional) $priceLessThanQuery
     *
     * @returns array
     */
    public function sortProducts(array $products, string $categoryQuery, string $priceLessThanQuery = null);
}
