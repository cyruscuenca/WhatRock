<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhatRock') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
    .logo{
        margin-left: auto;
        margin-right: auto;
    }
    </style>

</head>
<body>
    <div class="sidebar-menu">
        <a href="{{ url('/') }}" class="logo-box">
            <img href="{{ url('/') }}" src="{{ asset('images/logorock.png') }}" class="logo">
        </a>
            <ul>
                <li><a href="https://reddit.com/r/whatsthisrock/">WhatRock Community</a></li>
                <li><a href="{{ url('partners') }}">Partners</a></li>
                <li><a href="{{ url('contribute') }}">Contribute</a></li>
                <li style="margin-bottom: 25px;"><a href="{{ url('about') }}">About WhatRock</a></li>
            </ul>
    </div>
    <div class="navbar">
        <a class="button" style=" text-decoration: none; float:left; margin-left: 40px; width: 136px;"  href="{{ url('entries') }}"><p style="font-size: 11pt; padding-top: 9px; margin-left: 16px;">Random Rock</p></a>
        <a class="button" style=" text-decoration: none; float:left; width: 121px;"  href="{{ url('entries') }}"><p style="font-size: 11pt; padding-top: 9px; margin-left: 16px;">New Entries</p></a>

        <input class="search" type="text" placeholder="Search">
        <a href="">
        <div class="whatstuff">
            <p>WhatStuff</p>
            <div>
                    <div></div>
                    <div></div>
                    <div></div> 
                    <div></div>
                    <div></div>
                    <div></div> 
                    <div></div>
                    <div></div>
                    <div></div> 
            </div>
        </div>
        </a>
        <div>
        @guest
        <div style="float: right; margin-top: -36px;">
            <a class="" style="display: inline-block; font-family: 'ubuntu-l'; color: grey; margin-right: 3px;" href="{{ route('register') }}"><p style="">Register</p></a>
            <a class="" style="border-radius: 3px; display: inline-block; font-family: 'ubuntu-l'; color: #fff; margin-right: 25px; background: #F761A1; height: 25px; width: 58px;"  href="{{ route('login') }}"><p style="padding-left: 11px;">Login</p></a>
        </div>
        @else
        
        <li class="dropdown" style="float: right; margin-right: 60px; list-style-type: none; padding-top: 5px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: #909090; font-family: 'ubuntu-l'; font-size: 16pt;">
                <div style="width: 38px; height: 38px; border-radius: 20px; border: 1px solid #ccc; margin-top: -49px;">
                <p class="initial" style="text-align: center; padding-top: 1px;">{{ substr(auth()->user()->name, 0, 1) }}</p>
                </div>
            </a>

            <ul class="dropdown-menu">
                <li>

                @if(Auth::user()->role_id == 1)
                     <a href="{{ url('/admin') }}">Dashboard</a>
                @endif
                @if(Auth::user()->role_id == 2)
                     <a href="{{ url('/mod') }}">Dashboard</a>
                @endif
                @if(Auth::user()->role_id == 3)
                     <a href="{{ url('/contributer') }}">Dashboard</a>
                @endif
                <a href="{{ url('/help') }}">Help</a>

                <a href="{{ route('logout') }}"
                    onclick="event.preventhefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                </li>
            </ul>
        </li>
        @endguest
    <div class="grey-box">


@yield('content')

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
