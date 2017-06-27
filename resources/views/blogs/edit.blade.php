@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4>Edit Blog</h4>
            </div>
            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($blog, ['url' => '/blogs/' . $blog->id, 'method' => 'patch']) !!}
                <div class="form-group">
                    {!! Form::label('Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Content') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
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
@endsection¬