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
                    <div class="card-header">Mange Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="{{route('menu.menulist')}}" class="list-group-item list-group-item-action " >View All Menu</a>
                            <a href="{{route('menu.create')}}" class="list-group-item list-group-item-action"style="background-color: #a4d3f5;">Create Menu</a>
  
                        </ul>
                    </div>
                </div>
            </div>
            
          
                <div class="col-md-10">
                    <div class="card">
                      
                        <div class="card-header text-center">Create New Menu</div>
                            @if ($message =session('message'))
                            <div class="alest alert-success"><h5>{{ $message }}</h5></div>
                          @endif
                        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Menu Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name">
                                </div>
    
                                <div class="form-group">
                                    <label for="description">Description of Menu</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>

    
                                <div class="form-group">
                                    <label for="name">Menu price(RM)</label>
                                    <input type="text" class="form-control" name="price" placeholder="Menu price(RM)">
                                </div>

                                <div class="form-group">
                                    <label for="description">Category</label>
                                    <select class="browser-default" name="category">
                                        <option value=""></option>
                                        <option value="main menu">Main Menu</option>
                                        <option value="side menu">Side Menu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" name="image">
                                </div><br>

                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit">Submit</button>
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
