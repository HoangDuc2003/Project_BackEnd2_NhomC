@extends('Films\layout')
@section ('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3>Danh sach Films</h3>
                </div>

                <div class="col-3">
                    <a href="http://"></a>
                </div>

                <div class="col-3">
                    <a href=""></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('/films/create') }}" class="btn btn-success btn-sm" title="Add New Films">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
            <br />
            <br />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Hinh anh</th>
                        <th scope="col">Author</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $item )
                    <tr>
                        <td>{{$item->film_name}}</td>
                        <td><img src="/upload/{{$item->film_image}}" alt="" width="50"></td>
                        <td>{{$item->film_author}}</td>
                        <td>{{$item->film_type}}</td>
                        <td>{{$item->film_description}}</td>
                        <td>{{$item->film_date}}</td>
                        <td>
                            <a href="{{ url('/films/' . $item->id) }}" title="View categories"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/films/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('/films' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="{{ url('/films/seach_films') }}" class="form-search" name="mobile-seacrh" method="get">
                <input type="text" name="key" id="key" class="input-text" value="" placeholder="Search here...">
                <button type="submit" class="btn-submit">go</button>
            </form>
        </div>
    </div>
</div>
@endsection