<!-- Checking if there are any errors passed in -->
@if(count($errors)>0)
<!-- If true, checking for each error and alert which type of error -->
  @foreach($errors->all() as $error)
  <!-- Display the error to screen -->
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif
