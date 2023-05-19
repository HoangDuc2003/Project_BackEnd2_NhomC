
@extends('staffs.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('staffs/' .$staff->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$staff->id}}" id="id" />
      <div class="form-group mb-3">
        <input type="text" placeholder="name" id="name" class="form-control" name="name" required autofocus>
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="phone" id="staff_phone" class="form-control" name="staff_phone" required autofocus>
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="staff_email" id="" class="form-control" name="staff_email" required autofocus>
      </div>
      <div class="form-group mb-3">
        <input type="password" placeholder="Pass" id="password" class="form-control" name="password" required autofocus>      
      </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop