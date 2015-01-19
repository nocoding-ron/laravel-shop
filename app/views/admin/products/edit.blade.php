<h1>Edit Product</h1>
    {{ Form::model($product, array('route' => array('admin.products.update',$product->id),'method'=>'put')) }}
        
        @include('admin.products._partials.form')

    {{ Form::close() }}