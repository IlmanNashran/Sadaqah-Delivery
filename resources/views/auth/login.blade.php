@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="title">Login</div>
               
                <p class="signup-1">Sign in with your data that you entered during your registration.</p>
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <label for="email" class="signup-2"> {{ __('E-Mail Address') }}</label><br>

                            <div class="signup-2 col-md-6"><br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>

                        <div class="row mb-3">
                            <label for="password" class="signup-2">{{ __('Password') }}</label><br>

                            <div class=" signup-2 col-md-6"><br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>

                        <div class=" row mb-3">
                            <div class="signup-2 col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button style="width: 420px; margin-left:-7%" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button><br><br>

                                @if (Route::has('password.request'))
                                    <a class="btn" href="{{ route('password.request') }} " style="color: #2436f8; margin-left:17%">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div><br><br><br>

                        <div class="signup-4">Don’t have an account?   
                             <a  class="btn" style="color: #2436f8" href="{{ route('register') }}" >
                            {{ __('Sign up') }}
                        </a></div>
                    </form>
               
           
        </div>
    </div>
</div>
<style>

    
    a.list-group-item {
        font-size: 18px;
    }

    a.list-group-item:hover {
        background-color: #a4d3f5;
        color: #fff;
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
       
        .signup-1{
           
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

    .signup-2{
       
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


    /* neutral/gray dark */

    color: #545563;

    
    }
    
    .signup-4{
        
        width: 350px;
        height: 20px;
        left: 165px;
        top: 800px;
        margin-left: 35%;
        /* Body 1 - regular 14 (20, 0.1px) */

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        /* identical to box height, or 143% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.1px;

        /* neutral/gray dark */

        color: #545563;
    }
     

</style>
@endsection
