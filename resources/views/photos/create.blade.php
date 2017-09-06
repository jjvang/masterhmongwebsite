@extends('layouts.app')

@section('content')
<h1>Uplaod Photo!</h1>
{!!Form::open(['action' => 'PhotosController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  <div class="form-group">
      {{Form::label('title', 'Photo title')}}
      {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Enter Photo Title'])}}
  </div>
  <div class="form-group">
      {{Form::textarea('description','',['class' => 'form-control','placeholder' => 'Enter Photo Description'])}}
  </div>
      {{Form::hidden('album_id', $album_id)}}
  <!-- {{Form::textarea('description','',['placeholder' => 'Album Description'])}} -->
      {{Form::file('photo')}}
  <br>
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
