@extends('layouts.app')

@section('content')
@include('inc.jumbotron')

<div class = "row">
  <div class = "col-md-9 col-lg-8">
      <!-- This checks that the user has inputed in for the email or username -->
      <!-- If they did not, an error message will populate to alert user -->
      <h1>Dashboard</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md-4 col-lg-4">
  <!-- having the include lets you write just like the blade template and have less mess -->
        <div class="well">
    <h3>Sidebar</h3>
    This is a sidebar
  </div>
  <!-- was not able to move  down here, did not show up in website -->
  </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-4">
        <img width = '300' src="https://i.pinimg.com/736x/1b/c5/fa/1bc5faea88d492ff04364c7c16b2392c--rick-and-morty-background-rick-and-morty-art-to-draw.jpg" alt="">
    </div>
    <div class="col-md-4">
        <img width = '300' src="https://i.pinimg.com/736x/1b/c5/fa/1bc5faea88d492ff04364c7c16b2392c--rick-and-morty-background-rick-and-morty-art-to-draw.jpg" alt="">
    </div>
    <div class="col-md-4">
        <img width = '300' src="https://i.pinimg.com/736x/1b/c5/fa/1bc5faea88d492ff04364c7c16b2392c--rick-and-morty-background-rick-and-morty-art-to-draw.jpg" alt="">
    </div>
  </div>
</div>

<br><br>

@endsection

@section('carosuel')
@include('inc.carousel')
@endsection
