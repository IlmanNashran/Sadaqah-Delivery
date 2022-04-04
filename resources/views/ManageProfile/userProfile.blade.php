@extends('layouts.app')

@section('content')

<div class="myprofile-title">My profile</div>

<div class="account-box">
    <div class="label-1"></div>
    <div class="label-2">Account</div>
    <div class="label-3"></div>
</div>

<div class="account-title">Account</div>

<div class="profile-box">

    <div class="profile-title">Personal information</div>
    <div class="avatar-p">Avatar</div>

    <div class="image-profile"><img src="/svg/profile-default.jpg" alt=""></div>

    <div class="btn btn-changeprofile"><a href="#"></a></div>
</div>




@endsection

<style>


    .myprofile-title{
        position: absolute;
        height: 20px;
        left: 165px;
        right: 925px;
        top: 104px;

        margin-left:140px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 20px;
        /* identical to box height, or 83% */

        letter-spacing: 0.1px;

        /* neutral/black */

        color: #2B2B43;

    }

    .account-title{
       
        height: 28px;
        left: 545px;
        right: 165px;
        top: 104px;
        margin-left:700px;
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
    .account-box{
        
        left: 0%;
        right: 0%;
        top: 0%;
        bottom: 0%;


        /* primary/light */

        background: #F3F4FF;
        /* primary/default */

        border: 2px solid #4E60FF;
        box-sizing: border-box;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px;

        position: absolute;
        width: 350px;
        height: 72px;
        left: calc(50% - 350px/2 - 380px);
        top: 148px;
    }

    .label-2{
        height: 20px;
        left: 68px;
        right: 16px;
        top: calc(50% - 20px/2 - 10px);
        margin-left:100px;

        /* Subtitle 1 - bold 14 (20, 0.1px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 40px;
        /* identical to box height, or 143% */

        letter-spacing: 0.1px;

        /* neutral/black */

        color: #2B2B43;
    }

    .profile-box{

        left: 0%;
        right: 0%;
        top: 0%;
        bottom: 0%;

        /* neutral / white */

        background: #FFFFFF;
        /* neutral/gray lightest */
    
        margin-left:700px;

        border: 1px solid #EDEEF2;
        box-sizing: border-box;
        border-radius: 16px;
        height: 688px;
        width: 730px;
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
</style>