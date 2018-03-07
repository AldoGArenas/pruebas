<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        {!! Form::open(['route' => 'contact.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Your Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email', 'E-mail Address') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
        
        {!! Form::close() !!}
</body>
</html>