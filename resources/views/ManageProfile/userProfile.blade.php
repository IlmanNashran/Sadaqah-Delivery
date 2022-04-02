@extends('layouts.app')

@section('content')

<div class="titleProfile">My profile</div>

<div class=" title-P-1 ">
    Account
</div>

<div class="acc">xs</div>
@endsection

<style>
    .titleProfile{
        position: absolute;
        height: 20px;
        left: 165px;
        right: 925px;
        top: 104px;

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

    .title-p-1{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px;

        position: absolute;
        width: 350px;
        height: 72px;
        left: calc(50% - 350px/2 - 380px);
        top: 148px;
        border-radius:15%;
        width: 300px;
        border: 1px solid rgb(41, 19, 211);
        padding: 10px;
        margin: 10px;
    }
    .acc{
        position: absolute;
        height: 688px;
        left: 545px;
        right: 165px;
        top: 148px;
      
        width: 300px;
        border: 1px solid rgb(41, 19, 211);
        padding: 10px;
        margin: 10px;

    }
</style>