<h2>Products Sorted By Price:</h2>
<ul>
    @foreach ($productsSortedByPrice as $product)
        <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
    @endforeach
</ul>

<h2>Products Sorted By Sales Per View:</h2>
<ul>
    @foreach ($productsSortedBySalesPerView as $product)
        <li>{{ $product['name'] }} - Sales Per View: {{ $product['sales_count'] / $product['views_count'] }}</li>
    @endforeach
</ul>
