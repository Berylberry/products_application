<?php

namespace App\Logic;

class SortProducts implements \App\Interfaces\SortProducts
{

    /**
     * @inheritDoc
     */
    public function sortProducts(array $products, string $categoryQuery, string $priceLessThanQuery = null): array
    {
        $sortedProducts = array();
        foreach($products['products'] as $product){
//            dd($product);
            if ($product['category'] === $categoryQuery && ($priceLessThanQuery !== null && $product['price'] <= $priceLessThanQuery) ){
                array_push($sortedProducts, $product);
            }
        }
        return $sortedProducts;
    }
}
