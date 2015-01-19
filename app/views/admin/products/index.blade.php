{{ link_to_route('admin.products.create','Add New Product' )}}
@if(count($products))
    <ul>
        @foreach( $products as $product)

            <li>{{ link_to_route('admin.products.edit', $product->product_name, array($product->id)) }}
                {{ Form::open(array('route' =>array('admin.products.destroy',$product->id), 'method'=>'delete', 'class' => 'destroy'))}}
                    {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </li>

        @endforeach
    </ul>

@endif
