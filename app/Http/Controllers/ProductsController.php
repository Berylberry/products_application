<?php

namespace App\Http\Controllers;

use App\Logic\JSONConverter;
use App\Logic\ProductsArrayEdit;
use App\Logic\SortProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected JSONConverter $_JSONConverter;
    protected ProductsArrayEdit $productsArrayEdit;
    protected SortProducts $sortProducts;

    public function __construct()
    {
        $this->_JSONConverter = new JSONConverter();
        $this->productsArrayEdit = new ProductsArrayEdit();
        $this->sortProducts = new SortProducts();
    }

    public function getProducts(Request $request){
        $category = $request->category;
        $priceLessThan = $request->priceLessThan;
        $json = file_get_contents(public_path()."/data/products.json");
        $initialEditArray = $this->_JSONConverter->createArray($json);
        $tertiaryEditArray = array();
        if ($category !== null){
            $secondaryEditArray = $this->sortProducts->sortProducts($initialEditArray, $category, $priceLessThan);
            $tertiaryEditArray = $this->productsArrayEdit->FinalEditingOfProducts($secondaryEditArray);
        }else{
            $tertiaryEditArray = $this->productsArrayEdit->FinalEditingOfProducts($initialEditArray['products']);
        }

        return response()->json($tertiaryEditArray, 200);
    }
}
