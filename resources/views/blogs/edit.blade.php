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
               {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
               {!! Form::close() !!}
           </div>
       </div>
   </section>
@endsection