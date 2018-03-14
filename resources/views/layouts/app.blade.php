<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhatRock') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div class="navbar" >
     <label for="menu-toggle" class="hamburger">&#9776;</label>

       <a href="{{ url('/') }}"><img src="{{ asset('images/logorock.png') }}" class="logo"></a>

       <a class="button" style="border: none; background: rgba(0,0,0,0); color: #fff;
 text-decoration: none; float: left; width: 100px; margin-top: 11px;"  href="{{ url('entries/id') }}"><p style="font-size: 11pt; padding-top: 7px; margin-left: 5%;">ID Rocks</p></a>
       <input class="search" type="text" placeholder="Search" style="background: #455A64 url( {{ asset('images/search.png') }} ) right no-repeat; background-size: 6.2%; background-position: center right; ">
       @guest
       <div style="float: right;">
        <a class="" style="border-radius: 2px; display: inline-block; font-family: 'ubuntu-l'; color: #fff; margin-right: 57px; background: #2CBD4E; height: 30px; width: 64px; margin-top: 15px;"  href="{{ route('login') }}"><p style="padding-left: 11px; margin-top: 3px;">Sign in</p></a>
    </div>
    @else
    <li class="dropdown" style="float: right; margin-right: 70px; list-style-type: none; padding-top: 5px;">
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
                <a href="{{ url('/contributor') }}">Dashboard</a>
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

</div>
    <input type="checkbox" id="menu-toggle">

<div class="sidebar">
    <ul>
        <li><img style="padding-left: 14pt;" src="{{ asset('images/home.svg') }}"><a href="{{ url('about') }}">Dashboard</a></li>
        <li><img style="padding-left: 14pt;" src="{{ asset('images/profile.svg') }}"><a href="{{ url('partners') }}">Profile</a></li>
        <li style="margin-bottom: 14pt;"><img style="padding-left: 14pt;" src="{{ asset('images/bell.svg') }}"><a href="{{ url('about') }}">Notifications</a></li>
        <div style="border-top: 1px solid #455A64; font-family: 'Roboto'; color: #fff; padding-left: 14pt;" class="sidebar-label">LINKS</div>
        <li><img style="padding-left: 14pt;" src="{{ asset('images/wiki.svg') }}"><a href="{{ url('contribute') }}">Wiki</a></li>
        <li style="margin-bottom: 15pt;"><img style="padding-left: 14pt;" src="{{ asset('images/community.svg') }}"><a href="https://reddit.com/r/whatsthisrock/">Community</a></li>
        <div style="border-top: 1px solid #455A64; font-family: 'Roboto'; color: #fff; padding-left: 14pt;" class="sidebar-label">TOOLS</div>
        <li><img style="padding-left: 14pt;" src="{{ asset('images/id.svg') }}"><a href="{{ url('contribute') }}">ID a Rock</a></li>
    </ul>
</div>

@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</script>
</body>
</html>
0