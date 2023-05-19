@extends('categories.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ url('cinemas/' .$cinemas->id) }}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$cinemas->id}}" id="id" />
      <div class="form-group mb-3">
        <input type="text" placeholder="Name" id="cinema_name" class="form-control" name="cinema_name" required autofocus>
        @if ($errors->has('cinema_name'))
        <span class="text-danger">{{ $errors->first('cinema_name') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="file" placeholder="File" id="file" class="form-control" name="file">
        @if ($errors->has('file'))
        <span class="text-danger">{{ $errors->first('file') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="Address" id="cinema_address" class="form-control" name="cinema_address" required autofocus>
        @if ($errors->has('cinema_address'))
        <span class="text-danger">{{ $errors->first('cinema_address') }}</span>
        @endif
      </div>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop