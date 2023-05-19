
@extends('films.layout')
@section('content')
<div class="card">
  <div class="card-header">Films Page</div>
  <div class="card-body">
      
      <form action="{{ url('films') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="file" placeholder="File" id="film_file" class="form-control"
                    name="film_file">
            @if ($errors->has('file'))
            <span class="text-danger">{{ $errors->first('film_file') }}</span>
            @endif
        </div>
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="film_author" id="film_author" class="form-control" name="film_author" required autofocus>
            @if ($errors->has('film_author'))
            <span class="text-danger">{{ $errors->first('film_author') }}</span>
            @endif
        </div>
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="film_type" id="film_type" class="form-control" name="film_type" required autofocus>
            @if ($errors->has('film_type'))
            <span class="text-danger">{{ $errors->first('film_type') }}</span>
            @endif
        </div>
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="film_description" id="film_description" class="form-control" name="film_description" required autofocus>
            @if ($errors->has('film_description'))
            <span class="text-danger">{{ $errors->first('film_description') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="date" placeholder="film_date" id="film_date" class="form-control" name="film_date" required autofocus>
            @if ($errors->has('film_date'))
            <span class="text-danger">{{ $errors->first('film_date') }}</span>
            @endif
        </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop