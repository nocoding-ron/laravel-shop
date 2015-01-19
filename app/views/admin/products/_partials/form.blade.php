{{ Form::label('product_name','Product Name') }}
{{ Form::text('product_name') }}
{{ $errors->first('product_name', '<p class="error">:message</p>') }}

<br />

{{ Form::label('product_description','Product Description') }}
{{ Form::textarea('product_description') }}
{{ $errors->first('product_description', '<p class="error">:message</p>') }}

<br />

{{ Form::submit('Save') }}