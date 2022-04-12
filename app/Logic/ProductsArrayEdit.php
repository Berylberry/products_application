<?php

namespace App\Logic;

class ProductsArrayEdit implements \App\Interfaces\ProductsArrayCropAndEdit
{

    /**
     * @inheritDoc
     */
    public function FinalEditingOfProducts(array $products)
    {
        $slicedArray = array_slice($products, 0, 5);
//        dd($slicedArray);
        $finalProductArray = array();
        foreach ($slicedArray as $product){
            $details = array();
            $details['original'] = $product['price'];
            if ($product['category'] === "boots" && $product['sku'] === "000003"){
                $details['final'] = (string)($product['price']*0.3);
                $details['discount_percentage'] = "30%";
            }elseif ($product['category'] === "boots"){
                $details['final'] = (string)($product['price']*0.3);
                $details['discount_percentage'] = "30%";
            }elseif ($product['sku'] === "000003"){
                $details['final'] = (string)($product['price']*0.15);
                $details['discount_percentage'] = "15%";
            }else{
                $details['final'] = $product['price'];
                $details['discount_percentage'] = "0%";
            }

            $details['currency'] = "EUR";
            $product['price'] = $details;

            array_push($finalProductArray, $product);
        }

        return $finalProductArray;
    }
}
