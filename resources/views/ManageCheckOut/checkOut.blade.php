@extends('layouts.app')

@section('content')

<div class="container row">

  <div class="col s8">
    <div class="back-to-pervious-page">
        <a href="{{ route('userviewCart')}}"><i class="material-icons">chevron_left</i> Back to cart</a>
    </div>

    
      <div class="select-payment-title"><p>Select payment method</p></div>

      <ul class="tabs">
        <li class="tab col s4"><a href="#test1"> <i class="material-icons icon">account_balance </i> Online Banking</a></li>
        <li class="tab col s4"><a class="active" href="#test2"><i class="material-icons icon">credit_card</i> Credit Card</a></li>
      </ul>
   
   <br>
    <div id="test1" class=" payment-border"><option value="">bank</option>
    
    </div>

    <div id="test2" class=" payment-border">

    <br>
    <div class="row">
    <div class="col s2.5 debit-type-box"><img src="/svg/Visa.svg" alt=""></div>
    <div class="col s2.5 debit-type-box"><img src="/svg/PayPal.svg" alt=""></div>
    <div class="col s2.5 debit-type-box"><img src="/svg/Mastercard.svg" alt=""></div>
    <div class="col s2.5 debit-type-box"><img src="/svg/Stripe.svg" alt=""></div>
    </div>
 
    <div class="select-payment-title"><p>Payment detail</p></div>

    <form action="{{ route('postCheckOutPayment')}}" method="post" id="checkout-form">
      
   
    
   <div class="card-name">
    <label for="card-name">Card Holder Name</label><br>
    <input type="text" id="card-name"  required>
    </div>

    <div class="card-number">
      <label for="card-number">Credit Card Number</label><br>
      <input type="text" id="card-number" required>
    </div>

    

    <div class="card-expiry-month">
      <label for="card-expiry-month">Expiration Month</label><br>
      <input type="text" id="card-expiry-month" class="form-control" required>
    </div>

    <div class="card-expiry-year">
      <label for="card-expiry-year">Expiration Year</label><br>
      <input type="text" id="card-expiry-year" class="form-control" required>
    </div>

    
    <div class="card-cvc">
      <label for="card-cvc">CVC</label><br>
      <input type="text" id="card-cvc" class="form-control" required>
    </div><br><br>

    </div>

    </div>


    <div class="col s4">
      <div class="payment-summary">
     
       <div class="title">Payment summary</div>

       <div class="delivery-to-name">
            <p>Name:</p>
            <input type="text" id="name" class="form-control" required>
       </div>

    
      <div class="delivery-to-address"><p>Address:</p></div>
       <div><textarea  id="address" cols="30" rows="10" placeholder="Your address delivery..." class="form-control" required></textarea></div>
     
  
       <div class="subtotal">Subtotal</div>
       <div class="payment-info">RM {{ $totalPrice }}</div>

       <div class="shipping">Shipping</div>
       <div class="payment-info">RM 0</div>


       <div class="total">Total (tax incl.)</div>
     <div class="payment-info">RM {{ $totalPrice }}</div>

     {{ csrf_field() }}
     <button type="submit" class="btn checkout-btn"><a>Pay Order</a></button>

   </div>


  </div>

  </form>
  
   <br>
  


</div>

<style>
    .back-to-pervious-page a{
        position: relative;
       font-family: 'Nunito';
       font-style: normal;
       font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        /* identical to box height, or 138% */

        display: flex;
        align-items: center;
        letter-spacing: 0.1px;

        /* neutral/gray dark */

        color: #545563;}

        .select-payment-title p{
            position: relative;
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 18px;
            /* identical to box height, or 138% */

            display: flex;
            align-items: center;
            letter-spacing: 0.1px;

            /* neutral/gray dark */

            color: #353539;
                }
        .icon{
            position: relative;
          /* Adjust these values accordingly */
              top: 5px;
              left: 5px;
              padding:10px
        }


          .debit-type-box img{
          border: 1px solid #C7C8D2;
          box-sizing: border-box;
          border-radius: 8px;
          height: 88px;
          width: 150px;
          left: 0px;
          top: 0px;
          border-radius: 8px;

          }

      .payment-border{
      background: #FFFFFF;

      border: 1px solid #EDEEF2;
      box-sizing: border-box;
      border-radius: 16px;
      width:100%;
      height:100%;
      }
  
      .card-name label{
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 24px;

        letter-spacing: 0.101193px;
        color: #2B2B43;
      }

      .card-name  input{
        width:35%;
      }

      .card-number{
        position: relative;
        left:50%;
        margin-top:-7%;
      }
      .card-number label{
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 24px;

        letter-spacing: 0.101193px;
        color: #2B2B43;
      }
      .card-number input{
        width:35%;
      }

      .card-expiry-month {
        position: relative;
        margin-top:5%;
      }

      .card-expiry-month label{
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 24px;

        letter-spacing: 0.101193px;
        color: #2B2B43;
      }

      .card-expiry-month input{
        width:35%;
      }

      .card-expiry-year {
        position: relative;
        left:50%;
        margin-top:-7%;
      }

      .card-expiry-year label{
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 24px;

        letter-spacing: 0.101193px;
        color: #2B2B43;
      }

      .card-expiry-year input{
        width:35%;
      }

      .card-cvc{
        position: relative;
        margin-top:5%;
      }

      .card-cvc label{
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 24px;

        letter-spacing: 0.101193px;
        color: #2B2B43;
      }

      .card-cvc input{
        width:35%;
      }
  .payment-summary{
        position: relative;
        width: 354.17px;
        height: 600px;
        right:0px;
        left:0px;
        bottom:0px;
        background: #FFFFFF;
        /* neutral/gray lightest */

        border: 1.01193px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16.1908px;
    }
    .payment-summary .title{
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
    .payment-summary img{
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



    .payment-summary .title{
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

    .payment-summary .subtotal{
        position: relative;
        width: 52px;
        height: 19px;
        left: 16.19px;
        bottom:-65px;

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

    .payment-summary .shipping{
        position: relative;
        width: 53.63px;
        height: 18.21px;
        left: 16.19px;
        bottom: -60px;

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

.payment-summary .total{
    position: relative;
    width: 96px;
    height: 21px;
    left: 16.19px;
    top: 60px;

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

.payment-summary .checkout-btn{
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

.payment-summary .checkout-btn a{
    position: relative;
    height: 20px;
    left: 80px;
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





.delivery-to-address p{
    position: relative;

    margin-left:10px;
    top:20px;
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
        bottom:-45px;

        font-family: 'Nunito';
        font-style: bold;
        font-weight: 400;
        font-size: 14.155px;
        line-height: 18px;
        /* identical to box height, or 138% */

        letter-spacing: 0.202385px;

        /* neutral/gray dark */

        color: #4e60ff;
}
</style>



@endsection

@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('resources/js/checkout.js') }}"></script>
@endsection