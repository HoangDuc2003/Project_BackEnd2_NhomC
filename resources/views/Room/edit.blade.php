
@extends('room.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('room/' .$room->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$room->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$room->name}}" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="number" name="quantity" id="quantity" value="{{$room->quantity}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop