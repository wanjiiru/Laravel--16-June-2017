<!doctype html>
<html>
<head>
    <title>Laravel Blog Sample</title>
</head>
<body>
<h2>Blogs </h2>
@foreach($blogs as $blog)
    <h4>{!! $blog->title !!}</h4>
    <br>
    <div>
        {!! $blog->content !!}
    </div>
@endforeach
</body>
</html>
