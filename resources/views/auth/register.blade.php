@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="title">Sign up</div>
            <p class="signup-description">Register to create your personal account.</p>
              
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="firstname" class="alltitle-register">{{ __('Name') }}</label>

                            <div class=" col-md-6">
                                <input id="name" type="text" class="allinput-register form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">
                            <label for="lastname" class="alltitle-register">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="allinput-register form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        
                        <div class="row mb-3">
                            <label for="phonenumber" class="alltitle-register">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="allinput-register form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">
                            <label for="email" class="alltitle-register ">{{ __('E-Mail Address') }}</label>

                            <div class=" col-md-6">
                                <input id="email" type="email" class="allinput-register form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">
                            <label for="password" class="alltitle-register">{{ __('Password') }}</label>

                            <div class=" col-md-6">
                                <input id="password" type="password" class="allinput-register form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">
                            <label for="password-confirm" class="alltitle-register">{{ __('Confirm Password') }}</label>

                            <div class=" col-md-6">
                                <input id="password-confirm" type="password" class="allinput-register form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="width: 320px; margin-left:20%" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div><br><br>

                        <div class="list-group-item " style="margin-left:20%">Already have an account?  
                            <a  style="color: #2436f8" href="{{ route('login') }}" >
                           {{ __('Sign in') }}
                       </a></div>
                    </form>
               
           
        </div>
    </div>
</div>
<style>
    a.list-group-item {
        font-size: 15px;
    }

    a.list-group-item:hover {
        color: #0c0fa6;
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
          .signup-description{
           position: relative;
           height: 40px;
           left: 20%;
           right: 15px;
           top: 21%;
    
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

       .alltitle-register{
       
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

       .allinput-register{
           position: relative;
            width: 65%;
            height:45px;
            left: 0px;
            right: 0px;
            top: 7px;
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
