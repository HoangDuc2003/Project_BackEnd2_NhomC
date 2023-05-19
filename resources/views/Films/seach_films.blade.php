<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
<div id="timkiem" class="col-10 p-2 mx-auto">
  <form class="border border-primary p-2 row" action="" method="get">
  <input class="border border-primary p-2 col-6" placeholder= "Từ khóa">
  <button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
  </form>
  <div id="ketquatim">
  <div class="list-group">
    @foreach ($listfilms as $sp)
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{$sp->film_name}}</h5>
        <small>3 days ago</small>
        </div>
        <p class="mb-1">{{$sp->film_description}}</p>
    </a>
  </div>
</div>