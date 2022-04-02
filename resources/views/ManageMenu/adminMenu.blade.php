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
                        <a href="{{route('menu.menulist')}}" class="list-group-item list-group-item-action "style="background-color: #a4d3f5;" >View All Menu</a>
                        <a href="{{route('menu.create')}}" class="list-group-item list-group-item-action">Create Menu</a>
  
                        </ul>
                    </div>
                </div>
            </div>
            
          
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header text-center">View All Menu</div>
                            @if ($message =session('message'))
                            <div class="alest alert-success"><h5>{{ $message }}</h5></div>
                          @endif

                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">.price</th>
                                    <th scope="col">Edit Menu</th>
                                    <th scope="col">Delete Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($menus) > 0)
                                    @foreach ($menus as $key => $menu)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td><img src="/assets.file/{{$menu->image}}" width="80"></td>
                                            <td>{{ $menu->name }}</td>
                                            <td>{{ $menu->description }}</td>
                                            <td>RM {{ $menu->price }}</td>

                                            <td><a href="{{ route('menu.edit', $menu->id) }}"><button
                                                        class="btn btn-primary">Edit</button></a></td> 
                                                        
                                            <td> <a href="{{ route('menu.destroy', $menu->id)}}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a></td>  
                                        </tr>
                                    @endforeach

                                @else
                                    <p>No menu to show</p>
                                @endif
                                
                                <form id="form-delete" method="POST" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                    </form>

                            </tbody>
                        </table>
                        {{ $menus->links() }}
        
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
