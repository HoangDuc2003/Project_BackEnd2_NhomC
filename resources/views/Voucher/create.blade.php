
@extends('voucher.layout')
@section('content')
<div class="card">
  <div class="card-header">Page</div>
  <div class="card-body">
      
      <form action="{{ url('voucher') }}" method="post">
      @csrf
      <div class="form-group mb-3">
        <input type="number" placeholder="Value" id="voucher_value" class="form-control" name="voucher_value" required autofocus>
        @if ($errors->has('voucher_value'))
        <span class="text-danger">{{ $errors->first('voucher_value') }}</span>
        @endif
      </div>
      <div class="form-group mb-3">
        <input type="text" placeholder="phone" id="voucher_detail" class="form-control" name="voucher_detail" required autofocus>
        @if ($errors->has('voucher_detail'))
        <span class="text-danger">{{ $errors->first('voucher_detail') }}</span>
        @endif
      </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop