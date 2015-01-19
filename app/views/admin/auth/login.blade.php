<h1>Login</h1>
    {{ Form::open(array('route' =>'admin.login.post')) }}
        
        {{ Form::label('email','Email') }}
        {{ Form::email('email') }}
        {{ $errors->first('email', '<p class="error">:message</p>') }}

        <br />

        {{ Form::label('password','Pasword') }}
        {{ Form::password('password') }}
        {{ $errors->first('password', '<p class="error">:message</p>') }}

        <br />

        {{ Form::submit('Login') }}

    {{ Form::close() }}