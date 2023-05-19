
@extends('staffs.layout')
@section('content')
<div class="card">
  <div class="card-header">Page</div>
  <div class="card-body">
      
      <form action="{{ url('staffs') }}" method="post">
      @csrf
      <div class="form-group mb-3">
        <input type="text" placeholder="name" id="name" class="form-control" name="name" required autofocus>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="phone" id="staff_phone" class="form-control" name="staff_phone" required autofocus>
        @if ($errors->has('staff_phone'))
        <span class="text-danger">{{ $errors->first('staff_phone') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="staff_email" id="" class="form-control" name="staff_email" required autofocus>
        @if ($errors->has('staff_email'))
        <span class="text-danger">{{ $errors->first('staff_email') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="password" placeholder="Pass" id="password" class="form-control" name="password" required autofocus>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop