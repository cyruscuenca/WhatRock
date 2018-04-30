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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">


</head>
<body >
<div class="navbar" >
         <label for="menu-toggle" class="hamburger noselect">&#9776;</label>

         <a href="http://whatrock.local"><img src="{{ asset('images/logorock.png') }}" class="logo"></a>
         <div style="height: 47.5px; width: 30.75%; position: relative; display: inline-block; float: left; margin-top: 6px;">
         {!! Form::open(['action' => 'EntryController@search', 'method' => 'GET', 'role' => 'search']) !!}
            {!! Form::text('term', Request::get('term'), ['class' => 'search', 'placeholder' => 'Search entries and lessons']) !!}
              <button style="z-index: 2; position: absolute; display: inline-block; border: none; background: rgba(0,0,0,0); top: 9pt; right: 2.6pt;" type="submit">
               <svg id="search-icon" style="margin-right: 4pt;" viewBox="0 0 24 24" width="26" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                  <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
              </button>
         {!! Form::close() !!}
         </div>
         <div style="margin-top: 14pt;">
         <a href="{{ route('/identify/index') }}" style="margin-left: 48.5px; position: relative; color: #fff;">ID a Rock</a>
         <a href="{{ route('/store/index') }}" style="position: relative; color: #fff; margin-left: 47.5px">Store</a>
         </div>

      @guest
          <div style="float: right; margin-top: -30pt;">
          <a class="" style="border-radius: 2px; display: inline-block; font-family: 'ubuntu-l'; color: #fff; margin-right: 55px; background: #2CBD4E; height: 30px; width: 64px; margin-top: 14px;"  href="{{ route('login') }}"><p style="padding-left: 11px; margin-top: 4px;">Sign in</p></a>
          </div>
      @else
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="float: right;">
              <div >
                  <p class="initial">{{ substr(auth()->user()->name, 0, 1) }}</p>
              </div>
          </a>

          <ul class="dropdown-menu" style="float: right; list-style-type: none;">
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
        <li id="sidebar-item-1"><img style="padding-left: 15pt;" src="{{ asset('images/home.svg') }}"><a id="sidebar-item-1-text" href="{{ url('admin') }}">Dashboard</a></li>
        <li id="sidebar-item-2"><img style="padding-left: 15pt;" src="{{ asset('images/profile.svg') }}"><a id="sidebar-item-2-text" href="{{ url('profile') }}">Profile</a></li>
        <li id="sidebar-item-3" style="margin-bottom: 5pt;"><img style="padding-left: 15pt;" src="{{ asset('images/bell.svg') }}"><a id="sidebar-item-3-text" href="{{ url('notifications') }}">Notifications</a></li>
        <div style="font-family: 'Roboto'; color: #fff; padding-left: 15.8pt;" class="sidebar-label">LINKS</div>
        <li id="sidebar-item-4"><img style="padding-left: 15.4pt;" src="{{ asset('images/wiki.svg') }}"><a id="sidebar-item-4-text" href="{{ url('wiki') }}">Wiki</a></li>
        <li id="sidebar-item-5"><img style="padding-left: 15.4pt;" src="{{ asset('images/community.svg') }}"><a id="sidebar-item-5-text" href="https://reddit.com/r/whatsthisrock/">Community</a></li>
        <li id="sidebar-item-6" style="margin-bottom: 6pt;"><img style="padding-left: 17.2pt; padding-top: 1pt; height: 17pt;" src="{{ asset('images/edu.svg') }}"><a style="padding-top: 1.4pt;" id="sidebar-item-6-text" href="{{route('learn/index')}}">Learn</a></li>
        <div style=" font-family: 'Roboto'; color: #fff; padding-left: 15.60pt;" class="sidebar-label">TOOLS</div>
        <li id="sidebar-item-7"><img style="padding-left: 15.75pt;" src="{{ asset('images/id.svg') }}"><a id="sidebar-item-7-text" href="{{route('/identify/index')}}">Identify a Rock</a></li>
    </ul>
</div>

@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
