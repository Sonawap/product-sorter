<?php
namespace App\Sorters;

interface ProductSorterInterface
{
    public function sort(array $products): array;
}
