
@extends('categories.layout')
@section('content')
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
      
      <form action="{{ url('categories') }}" method="post">
      @csrf
      <div class="form-group mb-3">
        <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop