@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
<form action="submit" enctype="text/plain">

    <label for="name">Name:</label> <input type="text" name="Name" style="width:100%"><br>
    <label for="name">E-mail:</label> <input type="text" name="Email" style="width:100%"><br>
    <label for="name">Comments:</label> <br>
    <textarea name="comments" style="width:100%">

    </textarea>
<br>
<input type="submit">
</form>
    </div>
    <div class="col-sm">

    </div>
  </div>
</div>
@endsection
