@extends('layouts.app')

@section('content')
{!!Form::open(['action' => 'AlbumsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  <div class="form-group">
      {{Form::label('name', 'Album Name')}}
      {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter Album Name'])}}
  </div>
  <div class="form-group">
      {{Form::textarea('description','',['class' => 'form-control','placeholder' => 'Enter Album Description'])}}
  </div>
  <!-- {{Form::textarea('description','',['placeholder' => 'Album Description'])}} -->
      {{Form::file('cover_image')}}
  <br>
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
