@extends('layouts.app')

@section('content')
<h3>This is where the gallery is</h3>
<a href="/gallery/create" class="btn btn-primary">CREATE</a>

@if(count($albums) > 0)
  <?php
    $colcount = count($albums);
    $i = 1;
  ?>
  <div class="container">
    <div class="row text-center">
      @foreach($albums as $album)
        @if($i == $colcount)
            <!-- this one is being done first -->
           <div class='col'>
             <a href="/gallery/{{$album->id}}">
                <img class="" width="20%" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
              </a>
              <a href="/gallery/{{$album->id}}/edit" class="btn btn-default">Edit</a>
             <br>
             <h4>{{$album->name}}</h4>
              @else
                <div class='col-4'>
                  <a href="/gallery/{{$album->id}}">
                    <img class="thumbnail" width="20%" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                  </a>
                    <a href="/gallery/{{$album->id}}/edit" class="btn btn-default">Edit</a>
                    <h1>this is being done first</h1>
                  <br>
                  <h4>{{$album->name}}</h4>
              @endif
              @if($i % 3 == 0)
          </div>
        </div>
        <div class="row text-center">
        @else
        </div>
        @endif
        <?php $i++; ?>
      @endforeach
    </div>
  </div>
@else
  <p>No Albums To Display</p>
@endif
@endsection
