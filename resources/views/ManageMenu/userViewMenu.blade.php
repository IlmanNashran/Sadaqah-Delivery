@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">Menu</div>
          <div class="card-body">
              <div class="row">
               
                  @foreach ($menus as $menu )
                      <div class="col-md-3 mt-2 text-center" style="border: 1px solid #ccc;">
                          <td ><img src="/assets.file/{{$menu->image}}" class="img-thumbnail" style="width: 90%; height:50%"></td>
                          <p>{{ $menu->name }}</p>
                          <p>{{ $menu->description }}</p>
                          <button class="btn btn-primary">Order</button><br>
                      </div>  
                  @endforeach
                  
              </div>
  
          </div>
      </div>
      </div>
</div>
<style>
    a.list-group-item {
        font-size: 18px;
    }

    a.list-group-item:hover {
        background-color: #a4d3f5;
        color: #fff;
    }

    .card-header {
        background-color: #355ece;
        color: #fff;
        font-size: 20px;
    }

</style>
@endsection