<?php
namespace App\Sorters;

class SortBySalesPerView implements ProductSorterInterface
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            $salesPerViewA = $a['sales_count'] / $a['views_count'];
            $salesPerViewB = $b['sales_count'] / $b['views_count'];

            return $salesPerViewB <=> $salesPerViewA;
        });

        return $products;
    }
}
