
@extends('Showtimes.layout')
@section('content')
<div class="card">
  <div class="card-header">Showtime Page</div>
  <div class="card-body">
      
      <form action="{{ url('showtimes') }}" method="post">
        {!! csrf_field() !!}
        <label>Room</label></br>
        <input type="text" name="room" id="room" class="form-control"></br>
        <label>Films</label></br>
        <input type="text" name="film" id="film" class="form-control"></br>
        <label>Time</label></br>
        <input type="text" name="time" id="time" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop