@extends('layouts.app')

@section('content')

<div class="container ">

<div class="account-title">Account</div>

<div class="profile-box">

    <div class="profile-title">Personal information</div>
    <div class="avatar-p">Avatar</div>

    <div class="image-profile"><img src="/svg/profile-default.jpg" alt=""></div>

    <div class="btn change-btn"><a href="#">Change</a></div>
    
    <div class="remove-btn"><a href="#">Remove</a></div>


    <div class="firstname-title">
        <p>First name</p>
    </div>

    <div class="firstname-input">
        <input type="text">
    </div>
    
    
    <div class="lastname-title">
        <p>Last Name</p>
    </div>

    <div class="lastname-input">
        <input type="text">
    </div><br><br>
    
    
    <div class="email-title">
        <p>Email</p>
    </div>

    <div class="email-input">
        <input type="text">
    </div>

    <div class="phone-title">
        <p>Phone Number</p>
    </div>

    <div class="phone-input">
        <input type="text">
    </div>

    <div class="homeaddress-title">
        <p>Address</p>
    </div>

    <div class="homeaddress-input">
        <textarea type="text"></textarea>
    </div>


    <hr>

    <div class="btn logout-btn"><a href=" {{ route('logout') }}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></div>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div class="btn discard-btn"><a href="">Discard Change</a></div>
    <div class="btn save-btn"><a href="">Save Change</a></div>

    <div class="cartoon"><img src="/svg/yee.png" style="width:30%"></div>
</div>
</div>


<style>
        .account-title{
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
       
    .profile-box{

        background: #FFFFFF;
        /* neutral/gray lightest */

        position: relative;
        border: 1px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16px;
        height: 650px;
        width: 100%;
        left: 0px;
        top: 0px;
        border-radius: 16px;

        }

        

        .profile-title{

        height: 24px;
        left: 16px;
        right: 16px;
        top: 24px;
        margin-left:20px;
        /* H6 - bold 18 (24, 0.1px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 64px;
        /* identical to box height, or 133% */

        letter-spacing: 0.1px;

        /* neutral/black */

        color: #2B2B43;
        }

        .avatar-p{
        height: 16px;
        left: 16px;
        right: 16px;
        top: 64px;
        margin-left:20px;
        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 80px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }

        .image-profile{
        margin-top:40px;
        margin-left:20px;
        }

        .image-profile img{
        width: 100px;
        height: 100px;
        left: 16px;
        top: 88px;

        border-radius: 12px;
        }

        .btn.change-btn{
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 12px 16px;


        width: 95px;
        height: 44px;
        left: 150px;
        position: relative;
        top: -70px;

        /* primary/default */

        border: 1px solid #4E60FF;
        box-sizing: border-box;
        border-radius: 8px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 20px;
        /* identical to box height, or 143% */

        display: flex;
      
        letter-spacing: 0.3px;

        /* primary/default */

        color: #4e60ff;
            }

        .btn .change-btn a{
        text-decoration:none;
        align-items: center;
        text-align: center;
        padding: 0px;
        } 

        .remove-btn{

        height: 20px;
        left: 270px;
        right: 16px;
        top:-100px;
        position: relative;
     
        /* Button 1 - bold 14 (20, 0.4px) */


        /* identical to box height, or 143% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.3px;

        /* neutral/gray */


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        }

        .remove-btn a{
        color: #83859C;
        text-decoration:none;
        }

    
        .remove-btn a:hover{
        color:#000000;
        }

        .firstname-title{
        position: relative;
        height: 16px;
        left: 20px;
        right: 0px;
        top:-40px;


        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }

        .firstname-input input{
        position: relative;
        left: 20px;
        right: 0px;
        top: -30px;
        bottom: 40px;
        width:320px;
        height:35px;
        /* neutral/gray light */

        border: 1px solid #C7C8D2;
        box-sizing: border-box;
        border-radius: 8px;
        }

        .lastname-title{
        position: relative;
        height: 16px;
        left: 370px;
        right: 0px;
        top:-100px;


        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }
        
        .lastname-input input{
        position: relative;
        left: 370px;
        right: 0px;
        top: -93px;
        bottom: 20px;
        width:325px;
        height:35px;
        /* neutral/gray light */

        border: 1px solid #C7C8D2;
        box-sizing: border-box;
        border-radius: 8px;
        }

        .email-title{
        position: relative;
        height: 16px;
        left: 20px;
        right: 0px;
        top:-118px;


        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }

        .email-input input{
        position: relative;
        left: 20px;
        right: 0px;
        top: -110px;
        bottom: 40px;
        width:320px;
        height:35px;
        /* neutral/gray light */

        border: 1px solid #C7C8D2;
        box-sizing: border-box;
        border-radius: 8px;
        }

        .phone-title{
        position: relative;
        height: 16px;
        left: 370px;
        right: 0px;
        top:-180px;


        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }

        .phone-input input{
        position: relative;
        left: 370px;
        right: 0px;
        top: -173px;
        bottom: 40px;
        width:320px;
        height:35px;
        /* neutral/gray light */

        border: 1px solid #C7C8D2;
        box-sizing: border-box;
        border-radius: 8px;
        }


        .homeaddress-title{
        position: relative;
        height: 16px;
        left: 20px;
        right: 0px;
        bottom:160px;

        /* Small 2 - semibold 12 (16, 0px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */


        /* neutral/gray dark */

        color: #545563;
        }

        .homeaddress-input textarea{
        position: relative;
        left: 20px;
        right: 0px;
        bottom: 150px;
        width:680px;
        height:70px;
        /* neutral/gray light */

        border: 1px solid #C7C8D2;
        box-sizing: border-box;
        border-radius: 8px;
        }

        hr{
        position: relative;
        top: -120px;
        }

        .btn.logout-btn{
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 12px 16px;


        width: 95px;
        height: 44px;
        left: 30px;
        position: relative;
        bottom: 120px;

        /* primary/default */

        border: 1px solid #FF5C60;
        box-sizing: border-box;
        border-radius: 8px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 13px;
        line-height: 20px;
        /* identical to box height, or 143% */


        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.3px;

        /* primary/default */

        }

        .btn.logout-btn a{
        text-decoration: none;
        color: #FF5C60;
        }

        .btn.logout-btn:hover{
        background-color: #f5c4c5;
        }

        .profile-box .btn.discard-btn{
        display: flex;
            flex-direction: row;
            align-items: center;
            padding: 12px 16px;

            position: absolute;
            width: 163px;
            height: 44px;
            right: 156px;
            bottom: 50px;

            /* neutral/gray */

            border: 1px solid #83859C;
            box-sizing: border-box;
            border-radius: 8px;
        }

        .profile-box .btn.discard-btn a{
            text-decoration: none;
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
            
            /* neutral/gray */

            color: #83859C;


            /* Inside auto layout */

            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 0px 2px;
        }

        .profile-box .btn.discard-btn:hover{
        background-color: #c2c3ce;
        }

        .profile-box .btn.save-btn{
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 12px 16px;

        position: absolute;
        width: 134px;
        height: 44px;
        right: 16px;
        bottom: 50px;

        /* primary/default */

        background: #4E60FF;
        box-shadow: 0px 8px 20px rgba(78, 96, 255, 0.16);
        border-radius: 8px;
        }

        .profile-box .btn.save-btn a{
        position: static;
        height: 20px;
        left: 16px;
        right: 16px;
     

        text-decoration: none;
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
        flex-grow: 0;
        margin: 0px 2px;
        }

    .cartoon{
        position: relative;
        bottom:104%;
        left:67%;
    }
</style>
@endsection

