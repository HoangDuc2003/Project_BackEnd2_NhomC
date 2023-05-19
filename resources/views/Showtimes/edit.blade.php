
@extends('showtimes.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('showtimes/' .$showtimes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$showtimes->id}}" id="id" />
        <label>Room</label></br>
        <input type="text" name="room" id="room" class="form-control"></br>
        <label>Films</label></br>
        <input type="text" name="film" id="film" class="form-control"></br>
        <label>Time</label></br>
        <input type="text" name="time" id="time" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop