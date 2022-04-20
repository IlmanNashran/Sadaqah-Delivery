<div class="container">

  
    <div class="menubtn-container col-md-12">

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
                      
                          <img src="/assets.file/{{$menu->image}}"  style="width:100%; height:50% ">
                          
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
