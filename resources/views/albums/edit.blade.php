@extends('layouts.app')

@section('content')

{!!Form::open(['action' => ['AlbumsController@update', $album->id],'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  <div class="form-group">
      {{Form::label('name', 'Album Name')}}
      {{Form::text('name',$album->name,['class' => 'form-control', 'placeholder' => 'Enter Album Name'])}}
  </div>
  <div class="form-group">
      {{Form::textarea('description',$album->description,['class' => 'form-control','placeholder' => 'Enter Album Description'])}}
  </div>
  <!-- {{Form::textarea('description','',['placeholder' => 'Album Description'])}} -->
  <!-- not sure what to put for cover_image since we don't save it in the data base but actually in the public storage -->
      <!-- {{Form::file('cover_image')}} -->
  <br>
      {{ Form::hidden('_method', 'PUT') }}
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
