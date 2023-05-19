
@extends('seat.layout')
@section('content')
<div class="card">
  <div class="card-header">Page</div>
  <div class="card-body">
      
      <form action="{{ route('seat.create') }}" method="get">
      @csrf
      <div class="form-group mb-3">
        <input type="text" placeholder="Status" id="status" class="form-control" name="status" required autofocus>
        @if ($errors->has('status'))
        <span class="text-danger">{{ $errors->first('status') }}</span>
        @endif
      </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop