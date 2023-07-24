<?php

namespace App\Http\Controllers;

use App\Catalog\Catalog;
use App\Models\Product;
use App\Sorters\SortByPrice;
use App\Sorters\SortBySalesPerView;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        $catalog = new Catalog($products);

        $productPriceSorter = new SortByPrice();
        $productSalesPerViewSorter = new SortBySalesPerView();

        $productsSortedByPrice = $catalog->getProducts($productPriceSorter);
        $productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

        return view('products', compact('productsSortedByPrice', 'productsSortedBySalesPerView'));
    }
}
