<?php

namespace App\Interfaces;

interface ProductsArrayCropAndEdit
{
    /**
     * Create Eloquent array from data
     *
     * @param array $products
     *
     * @returns array
     */
    public function FinalEditingOfProducts(array $products);
}
