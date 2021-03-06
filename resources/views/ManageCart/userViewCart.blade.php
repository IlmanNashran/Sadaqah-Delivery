@extends('layouts.app')

@section('content')

<div class="container row">

   <div class="col s8">
    <div class="cart-title">My Cart</div>
    <div class="cart-border">
  
       
        @if (Session::has('cart'))
        <div class="menu-label">Menu</div>
        <div class="menu-total-description">{{  Session::has('cart') ? Session::get('cart')->totalQty:''  }} meal</div><br>

        <table class="table">
            <tbody>
        @foreach ($menus as  $menu)

          <tr>
           <td> <div class="cart-menu-img"><img src="{{ url('assets.file/'.$menu['item']->image) }}"/></div></td>
           <td> <div class="cart-menu-title">{{ $menu['item']->name}}
            <h1> {{ $menu['item']->description}}</h1></div></td>
            <td> <div class ="cart-manage-qty"> {{ $menu['qty'] }}</div></td>
            <td> <div class="cart-menu-price">RM{{ $menu['price'] }}</div></td>
            <td> <div class="cart-menu-bin"><i class="material-icons " style="color: #83859C"">delete</></div></td>
            </tr> 
       

        @endforeach 
    </tbody>
    </table>
    <div class="total-price"><h6> Total Price :  RM{{$totalPrice }}</h6></div>
    
    <hr>

        @else
           <p>no cart menu</p>
        @endif
    </div>
    
   
       <br><br>
    <div class="add-menu ma"><i class="material-icons " style="color: #4E60FF">arrow_back</i>
        <a href="{{route('userViewMenu')}}">Add more meals</a></div>
    </div>
    
        <div class="col s4">
       <div class="delivery-map-box">
      
        <div class="title">Delivery to:</div>

<form action="{{ route('addDeliveryTo') }}" method="post">

    <div class="delivery-to-name">
        <p>Name:</p>
       <input type="text" name="name" id="name" required>
   </div>

   <div class="delivery-to-phone">
       <p>Phone Number:</p>
      <input type="text" name="phonenumber" id="address" required >
  </div>
   
  <div class="delivery-to-address"><p>Address:</p></div>
   <div class="map"><img src="/svg/map.png"></div>
   <div><textarea name="address" id="address" cols="30" rows="10" placeholder="Your address delivery..." required></textarea></div>
  </div><br>

  <div class="checkout-box">
   <div class="title">Payment summary</div>

   <div class="subtotal">Subtotal</div>
   <div class="payment-info">RM {{ $totalPrice }}</div>

   <div class="shipping">Shipping</div>
   <div class="payment-info">RM 0</div>

   <div class="total">Total (tax incl.)</div>
   <div class="payment-info">RM {{ $totalPrice }}</div>

{{ csrf_field() }}
    <button type="submit" class="btn checkout-btn"><a>Proceed to checkout</a></button>
</form>
    </div><br>

   </div>

   </div>
<style>

    .cart-title{
        position: relative;
        width: 642.57px;
        height: 28.33px;
        left: -20px;
        top: -10px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 20.2385px;
        line-height: 28px;
        /* identical to box height, or 140% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
    }

    .cart-border{
        position: relative;      
        left: 0%;
        right: 0%;
        top: 0%;
        bottom: 0%;

        width:100%;

        /* neutral / white */

        background: #FFFFFF;
        /* neutral/gray lightest */

        border: 1.01193px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16.1908px;

    }

    .menu-label{
        position: relative;
        width: 46.55px;
        height: 24.29px;
        left: 20px;
        top: 20px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 17px;
        line-height: 24px;
        /* identical to box height, or 143% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
    }

    .menu-total-description{

       position: relative;
        width: 46.55px;
        height: 16.19px;
        left: 90px;
        top: 1px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12.1431px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray */

        color: #83859C;

    }
    
    .cart-menu-img {
        width:35px;
    }

     .cart-menu-img img{
        position: relative;
        width: 100px;
        height: 100px;
        left: 5px;
        top: calc(50% - 72.86px/2);

        border-radius: 12.1431px;
    }

    .cart-menu-title{
      
        position: relative;
        height: 20.24px;
        left: 0px;
        right:0px;
        bottom:45px;
        width:90px ;
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

    .cart-menu-title h1{
        position: relative;
        width:260px;
        left: 0px;
        right: 0px;
        bottom:40px;;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 20px;
        /* or 143% */

        letter-spacing: 0.101193px;

        /* neutral/gray dark */

        color: #545563;
    }

     .cart-manage-qty{
        position: relative;
        height: 20.24px;
        left: 20px;
        right: 296.49px;
        width:20px;
        padding:0px 5px ;



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

    .cart-menu-price{
        position: relative;
      
 
    
     
        
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 18.2147px;
        line-height: 24px;
        /* identical to box height, or 133% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;

    }



    .cart-menu-bin{
        position: relative;
        left:30px;
       
    }

    .add-menu{
        height: 20px;
        left: 40.19px;
        right: 16px;
        top: calc(50% - 20px/2);

        /* Button 1 - bold 14 (20, 0.4px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 20px;
        /* identical to box height, or 143% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.3px;

        /* primary / default */

        color: #4E60FF;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 0px 8px;
    }



    .delivery-map-box{
        position: relative;
        width: 354.17px;
        height: 680px;
        right:0px;
        left:0px;
        bottom:0px;
        background: #FFFFFF;
        /* neutral/gray lightest */

        border: 1.01193px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16.1908px;
    }
    .delivery-map-box .title{
        position: relative;
        width: 200px;
        margin:13px;
        top:5px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 36px;
        line-height: 24px;
        /* or 67% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
    }
    .delivery-map-box img{
        position: relative;
        right: -14px;
        top: 20px;
    }

    textarea{

        position: relative;
        height:25%;
        left:15px;
        bottom:-30px;
        width:90%;
        
       
        border: 1.01193px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16.1908px; 

    }
    textarea p{
        padding:1px
    }

    .checkout-box{
        position: relative;
        width: 354.17px;
        height: 240.62px;
        right:0px;
        left:0px;
        
        border: 1.01193px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16.1908px; 

    }

    .checkout-box .title{
        position: relative;
        height: 24.29px;
        left: 16.19px;
        right: 16.19px;
        bottom:-10px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 18.2147px;
        line-height: 24px;
        /* identical to box height, or 133% */

        letter-spacing: 0.101193px;

        /* neutral/black */

        color: #2B2B43;
    }

    .checkout-box .subtotal{
        position: relative;
        width: 52px;
        height: 19px;
        left: 16.19px;
        bottom:-40px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 13.155px;
        line-height: 18px;
        /* identical to box height, or 138% */

        letter-spacing: 0.202385px;

        /* neutral/gray dark */

        color: #545563;
    }

    .checkout-box .shipping{
        position: relative;
        width: 53.63px;
        height: 18.21px;
        left: 16.19px;
        bottom: -38px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 13.155px;
        line-height: 18px;
        /* identical to box height, or 138% */

        letter-spacing: 0.202385px;

        /* neutral/gray dark */

        color: #545563;
}

.checkout-box .total{
    position: relative;
    width: 96px;
    height: 21px;
    left: 16.19px;
    top: 40px;

    font-family: 'Nunito';
    font-style: normal;
    font-weight: 400;
    font-size: 14.167px;
    line-height: 20px;
    /* identical to box height, or 143% */

    letter-spacing: 0.101193px;

    /* neutral/black */

    color: #2B2B43;
}

.checkout-box .checkout-btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 12px 16px 12px;

    position: absolute;
    height: 44px;
    left: 16.78px;
    right: 15.6px;
    bottom:10px;

    /* primary / default */

    background: #4E60FF;
    box-shadow: 0px 8.09541px 20.2385px rgba(78, 96, 255, 0.16);
    border-radius: 8px;
}

.checkout-box .checkout-btn a{
    position: relative;
    height: 20px;
    left: 50px;
    right: 16px;
    top: calc(50% - 20px/2);
   
    /* Button 1 - bold 14 (20, 0.4px) */

    font-family: 'Nunito';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 20px;
    /* identical to box height, or 143% */

    display: flex;
    align-items: center;
    text-align: center;
    letter-spacing: 0.3px;

    /* neutral / white */

    color: #FFFFFF;


    /* Inside auto layout */

    flex: none;
    order: 0;
    flex-grow: 1;
     margin: 0px 8px;
}

.total-price h6{
    font-family: 'Nunito';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 20px;
    margin-left:56%;
    /* identical to box height, or 143% */
}

.delivery-to-name p{
    position: relative;
    margin-left:10px;
    bottom:-10px;
    font-family: 'Nunito';
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    line-height: 16px;
    /* identical to box height, or 133% */


    /* neutral/gray dark */

    color: #545563;
}

.delivery-to-name input{
    width:95%;
    height:30px;
    margin-left:10px;
    border: 1px solid #C7C8D2;
    box-sizing: border-box;
    border-radius: 8px;

}

.delivery-to-phone p{
    position: relative;
    margin-left:10px;
    bottom:-10px;
    font-family: 'Nunito';
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    line-height: 16px;
    /* identical to box height, or 133% */


    /* neutral/gray dark */

    color: #545563;
}

.delivery-to-phone input{
    width:95%;
    height:30px;
    margin-left:10px;
    border: 1px solid #C7C8D2;
    box-sizing: border-box;
    border-radius: 8px;

}

.delivery-to-address p{
    position: relative;
    margin-left:10px;
    bottom:-10px;
    font-family: 'Nunito';
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    line-height: 16px;
    /* identical to box height, or 133% */


    /* neutral/gray dark */

    color: #545563;
}


    .payment-info{
        position: relative;
        width: 52px;
        height: 19px;
        left: 75%;
        bottom:-18px;

        font-family: 'Nunito';
        font-style: bold;
        font-weight: 400;
        font-size: 13.155px;
        line-height: 18px;
        /* identical to box height, or 138% */

        letter-spacing: 0.202385px;

        /* neutral/gray dark */

        color: #4e60ff;
}
</style>

@endsection