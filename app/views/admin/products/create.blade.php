<h1>Create Product</h1>
    {{ Form::open(array('route' =>'admin.products.store')) }}
        
        @include('admin.products._partials.form')

    {{ Form::close() }}