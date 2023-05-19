
@extends('films.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('films/' .$films->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$films->id}}" id="id" />
        <div class="form-group mb-3">
            <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="file" placeholder="File" id="film_file" class="form-control" name="film_file">
        </div>
        <div class="form-group mb-3">
            <input type="text" placeholder="film_author" id="film_author" class="form-control" name="film_author" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="text" placeholder="film_type" id="film_type" class="form-control" name="film_type" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="text" placeholder="film_description" id="film_description" class="form-control" name="film_description" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="date" placeholder="film_date" id="film_date" class="form-control" name="film_date" required autofocus>
        </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop