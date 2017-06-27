@extends('layouts.app')

@section('content')
    {{--<h2>{{'Details'}} </h2>--}}
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>
                            Blog By Liz
                        </span>
                        <div class="panel-body">
                            {{$blog->content}}
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
