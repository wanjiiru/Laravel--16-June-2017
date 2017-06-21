@extends("layouts.app")
@section("content")
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><span>Blogs</span> <a class="btn btn-primary pull-right" href="/blogs/create">Create Blog</a></h2>
                    </div>
                </div>
                @foreach($blogs as $blog)
                    {{ Form::open(array('url' => '/blogs/' . $blog->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete',['class' => 'btn btn-danger pull-right'])}}
                    {{ Form::close() }}
                    <a href="/blogs/{{ $blog->id }}/edit" class="btn btn-default btn-edit-post">Edit</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><strong>{!! $blog->title !!}</strong></h4>
                        </div>
                        <div class="panel-body">
                            {!! $blog->content !!}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>

@endsection