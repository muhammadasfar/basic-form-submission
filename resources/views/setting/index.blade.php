<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>


    @if(isset($message) && !empty($message) )
        {{ $message }}
    @endif

    {!! Form::open(['url' => 'settings']) !!}
    <div class="form-group">
    {!! Form::label('title_label', 'Title', ['class' => 'setting-title-label','id'=> 'setting-title-label'])  !!}
    {{ Form::text('title', null, ['class' => 'setting-title','id'=> 'setting-title']) }}
    
    <div class="error">{{ $errors->first('title') }}</div>
    </div>

    <br/>
    <div class="form-group">
    {!! Form::label('description', 'Description', ['class' => 'setting-description','id'=> 'setting-description'])  !!}
    {{ Form::textarea('description', null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]  ) }}
    <div class="error">{{ $errors->first('descripition') }}</div>    
</div>

    <div>
    {!! Form::submit('Save'); !!}
    </div>



    {!! Form::close() !!}

    </body>
</html>
