@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <ul class="nav nav-pills nav-fill navbar navbar-light" style="background-color: #a4d3f5;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('menu.menulist')}}">Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{route('order.orderlist')}}">All User Oder</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{route('profile.profilelist')}}">All User Profile</a>
                </li>
    </div><br><br>
    
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Manage Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                        <a href="{{route('menu.menulist')}}" class="list-group-item list-group-item-action " >View All Menu</a>
                        <a href="{{route('menu.create')}}" class="list-group-item list-group-item-action" >Create Menu</a>
  
                        </ul>
                    </div>
                </div>
            </div>
            
          
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header text-center">Edit Menu</div>
                        <form action="{{ route('menu.update',$menu->id) }}" method="post" enctype="multipart/form-data">@csrf
                           @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Menu Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name of menu"
                                        value="{{ $menu->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description of Menu</label>
                                    <textarea class="form-control" name="description">{{ $menu->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Menu Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="price of menu"
                                        value="{{ $menu->price }}">
                                </div>

                             
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" name="image">
                                    <img src="/assets.file/{{$menu->image}}" width="100">
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                    </div><br>
                    <div class="form-group text-center">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('/ManageMenu') }}" class="btn btn-info">Cancel Edit</a>
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
