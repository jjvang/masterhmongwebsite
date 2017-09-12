@extends('layouts.app')

@section('content')
<h1>contact</h1>

  {!! Form::open(['url' => 'contact/submit']) !!}
      <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Enter Name'])}}
      </div>
      <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Enter Email'])}}
      </div>
      <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message',  '', ['class' => 'form-control', 'placeholder'=>'Enter Message'])}}
      </div>
      <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      </div>
  {!! Form::close() !!}

  <h1>Messages</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <!-- <li class="list-group-item">Email: {{$message->email}}</li> -->
        <li class="list-group-item">Message: {{$message->message}}</li>
      </ul>
      <a href="/contact/{{$message->id}}/edit" class="btn btn-default">Edit</a>
      <!-- Delete button not working  -->

    @endforeach
  @endif

@endsection
