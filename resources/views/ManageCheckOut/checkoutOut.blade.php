@extends('layouts.app')

@section('content')

<div class="container">

    <div class="back-to-pervious-page">
        <a href="{{ route('userviewCart')}}"><i class="material-icons">chevron_left</i> Back to cart</a>
    </div>

    <div class="checkout-box">
      <div class="select-payment-title"><p>Select payment method</p></div>


      <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1"> <i class="material-icons icon">account_balance</i> Online Banking</a></li>
        <li class="tab col s3"><a class="active" href="#test2"><i class="material-icons icon">credit_card</i> Credit Card</a></li>
      </ul>
    </div>
    <br>
    <div id="test1" class="col s12"><option value="">bank</option>
    
    </div>

    <div id="test2" class="col s12 ">

    <br><div class="debit-type-box"><img src="/svg/Visa.svg" alt=""></div>
    <div class="debit-type-box"><img src="/svg/PayPal.svg" alt=""></div>
    <div class="debit-type-box"><img src="/svg/Mastercard.svg" alt=""></div>
    </div>

  </div>


    </div>

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
width: 222px;
left: 0px;
top: 0px;
border-radius: 8px;

}


</style>



@endsection