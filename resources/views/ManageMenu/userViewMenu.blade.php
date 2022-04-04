@extends('layouts.app')

@section('content')
<div class="container">

  
<div class="flex-container">
    <form action="{{route('userViewMenu')}}" method="get">
        <input type="submit" value="All Menu" name="category" class="btn-menu">
    </form>
    <form action="{{route('userViewCategoryMenu')}}" method="get">
        <input type="submit" value="Main Menu" name="category" class="btn-menu">
        <input type="submit" value="Side Menu" name="category" class="btn-menu"><br><br>
    </form>
    </div>

     
            
    <div class="col-md-12">           
        <div class="flex-container2">
        
                  @foreach ($menus as $menu )
                  <div class="card col-md-3 mt-3">
                      
                          <img src="/assets.file/{{$menu->image}}"  style="width:100%; height:50%">
                          
                          <div class="co">
                          <p class="menu-name">{{ $menu->name }}</p>
                          <p class="menu-description">{{ $menu->description }}</p>
                          <button class="btn btn-primary">Order</button><br>
                        </div>
                    </div>
                  @endforeach
               </div>   
                
     </div>          
    
</div>
</div>
<style>
    .flex-container{
        display: flex;
        flex-direction: row;
        justify-content: center;
        height: 120px;
        left: 91px;
        right: 239px;
        top: 105px;
        
    }
    .btn-menu{
        align-items: center;
        padding: 16px 20px;
        width: 170px;
        border: 2px solid #4E60FF;
        box-sizing: border-box;
        border-radius: 8px;
        margin-left:65px;
    
        height: 75px;
        left: 283px;
        right: 671px;
        top: calc(50% - 58px/2);

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 22px;
        line-height: 130%;
        /* or 75% */

        text-align: center;
        letter-spacing: 0.1px;

        /* primary/default */

        color: #4E60FF;
    }

    .btn-menu:hover{
        background-color:#dde0fc;
    }

   
    .card {
 
        transition: 0.3s;
        border-radius: 8px; /* 5px rounded corners */
        left: 0px;
        right: 0px;
        top: 0px;
        width: 390px;
        height:340px;
        margin-left:30px;
    
        border: 1px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16px;

        object-fit: cover;
        }

  .co{
    padding: 10px 16px;
  }
   
  .flex-container2{
    display: flex;
    flex-wrap: wrap;
  }
   .menu-name{
   
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

    .menu-description{
        
        width:50%;
        height: 40px;
        left: 0px;
        top: 0px;

        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
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

            img {
        width: 200px;
        height: 300px;
        object-fit: cover;
        }
</style>
@endsection