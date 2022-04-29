<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/materialize.min.js" defer></script>
 
    <!-- icons -->  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/mobile.css">

    
    <!-- ajax -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      
   @livewireStyles
</head>
<body>
  <br>

    <nav class="nav-extended  N/A transparent no-shadows">
        <div class="nav-wrapper container ">
          <a href="#" class="brand-logo"><img src="/svg/cccc.jpg" style="height:50px; width:130px" ></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger "><i class="material-icons ">menu</i></a>

          @if(auth()->check() && auth()->user()->is_admin == 1)
          <ul class="navbar right hide-on-med-and-down">
            <li><a  href="{{ route('menu.menulist')}}">Manage Menu</a></li>
            <li><a  href="{{route('order.orderlist')}}">Manage Order</a></li>
            <li><a  href="{{route('profile.profilelist')}}">Manage Profile</a></li>
            <li><a href="{{ route('profileUser') }}"><img src="/svg/profile-default.jpg" style="height:60px" class="profile"></li></a>
            </ul>
          @else
         
          <ul id="nav-mobile " class="navbar right hide-on-med-and-down">
            <li><a  href="{{ route('userViewHome')}}">Home</a></li>
            <li><a  href="{{ route('userViewMenu')}}">Menu</a></li>
            <li><a  href="">My Order</a></li>
            <li><a href="{{ route('userviewCart') }}"><div class="cart-box"><img src="/svg/shopping bag.svg" >
              @if (Session::has('cart'))
            <span class="badge">{{ Session::get('cart')->totalQty}}</span></div></li></a>
            @endif
            <li><a href="{{ route('profileUser') }}"><img src="/svg/profile-default.jpg" style="height:60px" class="profile"></li></a>
          </ul>

          @endif
        </div>
      
      </nav>
    
      <ul class="sidenav " id="mobile-demo">
        <li><div class="user-view">
            <div class="background">
              <img src="/svg/blue.png" style="width:350%; height:350%">
            </div>

            <a href="{{ route('profileUser') }}"><img class="circle" src="/svg/profile-default.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
          </div></li>
          <li><a href="{{route('userViewHome')}}"><i class="material-icons">home</i>Home</a></li>
          <li><a href="{{route('userViewMenu')}}"><i class="material-icons">restaurant_menu</i>Menu</a></li>
          <li><a href="{{ route('userviewCart')}}"><i class="material-icons">local_mall</i>My Cart</a></li>
          <li><a href="#!"><i class="material-icons">local_offer</i>My Oder</a></li>
    
      </ul>
    
      <script src="/js/ui.js"></script>
    
<br>
      <main class="py-4">
        @yield('content')
    </main>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    <style>

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
          .profile{
              width: 60px;
              height:10px;
              border-radius: 30%;
      
          }
      
          .navbar a{
            position: static;
         
          /* Subtitle 1 - bold 14 (20, 0.1px) */
      
          font-family: 'Nunito';
          font-style: normal;
          font-weight: 700;
          font-size: 14px;
          line-height: 60px;
          align-content: center;
          /* identical to box height, or 143% */
      
          text-align: right;
          letter-spacing: 0.1px;
      
          /* neutral/black */
      
          color: #2B2B43;
      
      
          /* Inside auto layout */
      
          flex: none;
          order: 0;
          flex-grow: 0;
          margin: 0px 0px;
          text-decoration:none;
          }
          .profile:hover{
              transform: scale(1.1);
          }
      
          .cart-box{
            position: relative;
            background-color:#ffffff; 
            height:50px;
            width:50px;
            bottom:-6px;
            
            
              box-sizing: border-box;
              border-radius: 8px;
          }
      
          .cart-box img{
              position: absolute;
              height:30px;
              width:30px;
              bottom:10px;
      
              left:7px;
          }
      
          .cart-box:hover{
            border: 1px solid #4E60FF;
            background-color:#f3f4ff;
          }
      
          .material-icons {
            color:black;
          }
      
          .badge{
            width:20px;
            top:-19px;
            left:-2px;
            position: relative;
            box-sizing: border-box;
            border-radius: 8px;
            background-color: #4E60FF;
            color: #ffffff !important;
      
          }
      
      
      
      </style>
    @livewireScripts
</body>
</html>

