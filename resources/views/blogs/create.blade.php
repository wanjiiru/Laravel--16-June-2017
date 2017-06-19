<!doctype html>
<html>
<head>
    <title>Laravel Blog Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h2>Create Blogs </h2>
<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['url' => '/blogs']) !!}
            <div class="form-group">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        @if (count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</section>
</body>
</html>
