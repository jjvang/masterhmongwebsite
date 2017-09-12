@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/contact">Go Back</a>

<h1>Edit Message!</h1>
<!-- Changed url to action and the rest of the stuff b/c it wasn't working  -->
  {!! Form::open(['action' => ['MessagesController@update', $message->id], 'method'=>'POST']) !!}
      <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $message->name, ['class' => 'form-control', 'placeholder'=>'Enter Name'])}}
      </div>
      <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $message->email, ['class' => 'form-control', 'placeholder'=>'Enter Email'])}}
      </div>
      <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message',  $message->message, ['class' => 'form-control', 'placeholder'=>'Enter Message'])}}
      </div>
      {{ Form::hidden('_method', 'PUT') }}
      {{ Form::Submit('submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}

@endsection
