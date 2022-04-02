@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <ul class="nav nav-pills nav-fill navbar navbar-light" style="background-color: #a4d3f5;">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('menu.menulist')}}">Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  active" aria-current="page"  href="{{route('order.orderlist')}}">All User Oder</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('profile.profilelist')}}">All User Profile</a>
                </li>
    </div><br><br>

        <div class="row ">
            <div class="col-md-12">

                <div class="card ">
                    <div class="card-header">Order List </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">User</th>
                                    <th scope="col">Phone/Email</th>
                                    <th scope="col">Date/Time</th>
                                    <th scope="col">Menu Name</th>
                                    <th scope="col">Order Quantity</th>
                                    <th scope="col">Total(RM)</th>
                                    <th scope="col">Address Delivery</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Reject</th>
                                    <th scope="col">Order<br>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->user->name }}</td>
                                        <td >{{ $order->user->email }}
                                        <td>{{ $order->date }}/{{ $order->time }}</td>
                                        <td>{{ $order->menu->name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>RM{{ ($order->menu->price * $order->quantity) }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->status }}</td>
                                        <form action="{{ route('order.status',$order->id) }}" method="post">@csrf
                                            <td>
                                                <input name="status" type="submit" value="accepted"
                                                    class="btn btn-primary btn-sm">
                                            </td>
                                            <td>
                                                <input name="status" type="submit" value="rejected"
                                                    class="btn btn-danger btn-sm">
                                            </td>
                                            <td>
                                                <input name="status" type="submit" value="completed"
                                                    class="btn btn-success btn-sm">
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
