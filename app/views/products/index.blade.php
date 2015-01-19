<h1>Homepage</h1>

@if(count($products))
    <ul>
        @foreach( $products as $product)

            <li>{{ link_to_route('product', $product->product_name, array($product->id)) }}
            </li>

        @endforeach
    </ul>

@endif
