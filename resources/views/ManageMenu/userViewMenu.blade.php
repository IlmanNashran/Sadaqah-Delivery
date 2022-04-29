@extends('layouts.app')

@section('content')

<div class="container">


    <div class="menubtn-container ">

    <form action="{{route('userViewMenu')}}" method="get">
        <input type="submit" value="All Menu" name="category" class="btn-menu ">
    </form>
    <form action="{{route('userViewCategoryMenu')}}" method="get">
        <input type="submit" value="Main Menu" name="category" class="btn-menu">
        <input type="submit" value="Side Menu" name="category" class="btn-menu">
    </form>
    
    </div><br><br>

     
            
    <div class="col-md-12">           
        <div class="menu-container">
        
                  @foreach ($menus as $menu )
                  <div class="card ">
                      
                         <div class="img-saiz"> <img class="materialboxed" src="/assets.file/{{$menu->image}}"></div>
                          
                          <div class="card-detail">
                          <div class="menu-name">{{ $menu->name }}</div>
                          <div class="menu-description">{{ $menu->description }}</div><br>
                          <div class="menu-price">RM {{ $menu->price }}</div>

                          <a href="{{ route('userAddCart',['id'=>$menu->id]) }}" class="btn btn-primary" role="button">Order</a><br>
                        </div>
                    </div>
                  @endforeach
               </div>   
                
     </div>          
    
    </div>
    <br>


<style>
    .menubtn-container{
        display: flex;
       
    }
    .btn-menu{
        position: relative;
        align-content:center;
        border: 2px solid #4E60FF;
        box-sizing: border-box;
        border-radius: 8px;
        
        width: 110px;
        height: 65px;
        left:290px;
        right: 0px;
        top: calc(50% - 58px/2);
        bottom:10px;
        margin-left:20px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 120%;
        /* or 75% */

        text-align: center;
        letter-spacing: 0.1px;

        /* primary/default */
        background-color:#ffff;
        color: #4E60FF;
    }

    .btn-menu:hover{
        background-color:#dde0fc;
    }

   
    .card {
        position: relative;
        transition: 0.3s;
        border-radius: 8px; /* 5px rounded corners */
        left:0px;
        right: 0px;
        top: 0px;
        width: 320px;
        height:265px;
        margin-left:20px;
    
        border: 1px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16px;

        }
        .card img {
            border-radius: 8px;
            width:100%;
            object-fit: cover;
        }

        .card-detail{
            padding: 3px 16px;
        }
   
  .menu-container{
    display: flex;
    flex-wrap: wrap;


  }
   .menu-name{
   position: relative;
    height: 24px;
    left: 0px;
    right: 32px;
    top: 0px;

               /* H6 - bold 18 (24, 0.1px) */

    font-family: 'Nunito';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 24px;
    /* identical to box height, or 133% */

    letter-spacing: 0.1px;

    /* neutral/black */

    color: #2B2B43;
    }

 

    .menu-price{
        position: relative;
        height: 25px;
        left: 0px;
        right: 0px;
        top:-5px;
          

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 24px;

        color: #5b5b62;
    }


    .menu-description{
        position: relative;
        width:100%;
        height: 40px;
        left: 0px;
        top:5px;
        
        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 10px;
        line-height: 16px;
        
        /* identical to box height, or 133% */

        display: flex;
        align-items: center;

        color: #83859C;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 8px;
            }

    .btn{
        position: relative;
        left:220px;
        top:-35px;
    }
        
 

    .img-saiz img{
        height:100px ;
        width: 300px;
    
        
    }
    .img-saiz img::shadow{
         height:100%;
         width: 50%;
    }
</style>
@endsection