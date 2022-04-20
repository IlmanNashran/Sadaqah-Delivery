@extends('layouts.app')

@section('content')
    <div class="container">
     
     
        <div class="row justify-content-center">

        <div class="view-menu-title ">View All Menu</div>
            
          
                <div class="col-md-10">
                
                            @if ($message =session('message'))
                            <div class="alest alert-success" style="background-color: #355ece"><h5>{{ $message }}</h5></div>
                          @endif

                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Category</th>
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
                                            <td class="menu-name">{{ $menu->name }}</td>
                                            <td class="menu-description">{{ $menu->description }}</td>
                                            <td class="menu-price">RM {{ $menu->price }}</td>
                                            <td class="menu-category">{{ $menu->category }}</td>

                                            <td style="text-align:center"><a href="{{ route('menu.edit', $menu->id) }}"><button
                                                        class="btn btn-primary">Edit</button></a></td> 
                                                        
                                            <td style="text-align:center"> <a href="{{ route('menu.destroy', $menu->id)}}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-trash" ></i></a></td>  
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

        .menu-description{
            width:600px;
        }
   

    .pagnation{
    background-color: #a4d3f5 !important;
    }

    .table-bordered{
             border: 1px solid #e3e3e6;
            box-sizing: border-box;
            border-radius: 8px;
    }

    .view-menu-title{
        position: relative;
        height: 28px;
        left: 5px;
        right: 0px;
        top: 0px;
        /* H5 - semibold 20 (28, 0.1px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        /* identical to box height, or 140% */

        letter-spacing: 0.1px;

        /* neutral/black */

        color: #2B2B43;
    }

    .menu-name{
        height: 20.24px;
        left: 85px;
        right: 296.49px;
        top: calc(50% - 20.24px/2 - 22.26px);

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14.167px;
        line-height: 20px;
        /* identical to box height, or 143% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
    }
   .menu-description{
        height: 20.24px;
        left: 85px;
        right: 296.49px;
        top: calc(50% - 20.24px/2 - 22.26px);

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14.167px;
        line-height: 20px;
        /* identical to box height, or 143% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #5c5c64;
   }
   .menu-price{
    height: 20.24px;
        left: 85px;
        right: 296.49px;
        top: calc(50% - 20.24px/2 - 22.26px);

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14.167px;
        line-height: 20px;
        /* identical to box height, or 143% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
   }

   .menu-category{
    height: 20.24px;
        left: 85px;
        right: 296.49px;
        top: calc(50% - 20.24px/2 - 22.26px);

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14.167px;
        line-height: 20px;
        /* identical to box height, or 143% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #5c5c64;
   }
</style>
@endsection
