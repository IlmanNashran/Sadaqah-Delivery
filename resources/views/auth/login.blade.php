@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="title">Login</div>
               
                <p class="login-description">Sign in with your data that you entered during your registration.</p>
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">

                            <label for="email" class="email-password-title"> {{ __('E-Mail Address') }}</label>

                            <div class=" col-md-12 browser-default"><br>
                                <input id="email" type="email" class="email-password-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>

                        <div class="row mb-3">
                            <label for="password" class="email-password-title">{{ __('Password') }}</label>

                            <div class="  col-md-6"><br>
                                <input id="password" type="password" class="email-password-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                     

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button style="width: 220px; margin-left:-7%" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button><br><br>

                                @if (Route::has('password.request'))
                                    <a class="list-group-item" href="{{ route('password.request') }} " >
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div><br>

                        <div class="list-group-item " style="margin-left:20%"><p>Don’t have an account?   
                             <a   href="{{ route('register') }}" >
                            {{ __('Sign up') }}
                        </a></p></div>
                    </form>
               
           
        </div>
    </div>
</div>
<style>

    
    a.list-group-item {
        position: relative;
        font-size: 15px;
        left:20%;
    }
 
    p.list-group-item {
        color: #545563;
    }

    a.list-group-item:hover {
        color: #1f14ee;
    }

    .title {
      
        height: 82px;
        left: 15px;
        right: 15px;
        top: 120px;
        margin-left: 20%;
        /* H1 - bold 60 (82, 0.1px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 700;
        font-size: 60px;
        line-height: 82px;
        /* identical to box height, or 137% */

        letter-spacing: 0.1px;

        /* neutral/black */

        color: #2B2B43;
            }
       
        .login-description{
           
            height: 40px;
            left: 15px;
            right: 15px;
            top: 218px;
            margin-left: 20%;
            /* Body 1 - regular 14 (20, 0.1px) */

            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            /* or 143% */

            letter-spacing: 0.1px;

            /* neutral/gray dark */

            color: #545563;
        }
        .email-password-title{
    
            width:70%;
            height: 16px;
            left: 0px;
            right: 0px;
            top: 0px;
            margin-left: 20%;


            /* Small 2 - semibold 12 (16, 0px) */

            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 16px;
            /* identical to box height, or 133% */
        }
        
        .btn{
            position: relative;
            left:27%;

        }
        
        .email-password-input{
            width: 70%;
            height: 50px;
            left: 0px;
            right: 0px;
            top: 0px;
            margin-left: 20%;
            /* Small 2 - semibold 12 (16, 0px) */
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 16px;
            /* identical to box height, or 133% */
            /* neutral/gray dark */
            border: 1px solid #9e9e9e;
            box-sizing: border-box;
            border-radius: 8px;
            border-width: 1px;
        }

@endsection
