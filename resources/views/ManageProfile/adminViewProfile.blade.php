@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <ul class="nav nav-pills nav-fill navbar navbar-light" style="background-color: #a4d3f5;">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('menu.menulist')}}">Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{route('order.orderlist')}}">All User Oder</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('profile.profilelist')}}">All User Profile</a>
                </li>
                 </div><br><br>
    
        <div class="row ">
                <div class="card ">
                    <div class="card-header">All users Data</div>
                    <div class="card-body ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Member since</th>
        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('M d Y') }}</td>
                                    
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
        </div>
       </div>
@endsection
