<?php
namespace App\Catalog;

use App\Sorters\ProductSorterInterface;

class Catalog
{
    protected $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(ProductSorterInterface $sorter): array
    {
        return $sorter->sort($this->products);
    }
}
