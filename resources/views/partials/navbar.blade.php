<div class="navbar">
         <label for="menu-toggle" class="hamburger noselect">&#9776;</label>
         <a href="http://www.whatrock.local:8000"><img src="{{ asset('images/logorock.png') }}" class="hide-on-mobile logo"><svg
         class="show-on-mobile logo-icon"
         height="30px" width="30px"
         sodipodi:docname="favicon.svg"
         preserveAspectRatio="xMidYMid meet"
         viewBox="0 0 250.000000 250.000000"
         height="250.000000pt"
         width="250.000000pt">
       </metadata>
       <g transform="translate(0.000000,250.000000) scale(0.100000,-0.100000)" stroke="none">
       <path d="M1010 2445 c-41 -12 -140 -41 -220 -64 -80 -22 -171 -49 -202 -58 -32 -9 -58 -19 -58 -23 0 -4 -21 -13 -47 -20 -82 -21 -208 -61 -220 -68 -7 -4 -21 -44 -31 -87 -11 -44 -38 -154 -61 -245 -59 -233 -60 -239 -50 -245 5 -3 21 1 37 9 16 8 65 29 108 46 43 18 81 35 84 39 3 3 17 11 31 18 l26 11 18 -89 c10 -49 21 -89 25 -89 3 0 12 -28 18 -62 7 -35 15 -74 18 -87 6 -22 4 -21 -42 12 -27 20 -67 55 -89 78 -35 38 -40 41 -49 25 -6 -10 -41 -50 -78 -89 -38 -39 -68 -74 -68 -79 0 -9 11 -20 290 -288 100 -96 241 -233 313 -304 147 -145 143 -144 166 -35 7 35 24 106 36 158 l22 93 13 -46 c7 -25 17 -46 21 -46 5 0 9 -6 9 -13 0 -21 161 -521 170 -527 4 -3 18 -39 30 -80 45 -147 70 -225 79 -239 8 -12 74 -4 421 50 226 35 416 67 421 70 6 3 21 55 34 115 13 60 40 183 60 274 66 298 85 392 85 415 0 13 4 25 9 27 6 2 20 54 33 115 l23 113 -20 37 c-11 20 -25 41 -30 47 -6 6 -20 29 -31 51 -56 112 -157 290 -169 299 -8 6 -21 27 -29 46 -8 20 -37 75 -64 122 -28 48 -53 96 -57 107 -11 37 -47 66 -140 116 -49 27 -92 52 -95 55 -3 4 -63 37 -135 75 -136 70 -197 105 -205 115 -3 4 -48 28 -100 55 -52 26 -124 63 -160 82 -36 18 -67 32 -70 32 -3 -1 -39 -11 -80 -24z"
       fill="#fff"
       style="fill-opacity:1" />
       <path
       d="M320 877 c0 -7 16 -28 35 -47 19 -19 35 -38 35 -43 0 -6 38 -47 85 -93 47 -45 85 -86 85 -90 0 -9 71 -88 86 -94 6 -3 38 -36 70 -75 33 -38 88 -99 124 -136 36 -37 90 -96 120 -132 54 -64 88 -93 97 -84 6 6 -19 334 -26 345 -8 12 -176 123 -223 147 -21 11 -38 22 -38 26 0 7 -84 62 -183 120 -32 19 -75 49 -95 66 -21 18 -42 33 -47 33 -6 0 -34 16 -62 35 -58 39 -63 41 -63 22z"
       fill="#fff"
       style="fill-opacity:1" />
       </g>
       </svg></a>
         <div class="hide-on-tablet" style="height: 47.5px; width: 34%; position: relative; float: left; margin-top: 5.25px; margin-left: -1pt;">
         {!! Form::open(['action' => 'EntryController@search', 'method' => 'GET', 'role' => 'search']) !!}
            {!! Form::text('term', Request::get('term'), ['class' => 'search hide-on-tablet', 'placeholder' => 'Search entries and lessons']) !!}
              <button style="z-index: 2; position: absolute; display: inline-block; border: none; background: rgba(0,0,0,0); top: 9pt; right: 2.6pt;" type="submit">
               <svg class="hide-on-tablet" id="search-icon" style="margin-right: 4pt;" viewBox="0 0 24 24" width="26" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                  <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
              </button>
         {!! Form::close() !!}
         </div>
      @guest
          <div style="float: right;">
          <a style="border-radius: 2pt; display: inline-block; color: #fff; margin-right: 18pt; background: #00C853; font-weight: bold; height: 34px; margin-top: 12px;"  href="{{ route('login') }}"><p style="margin: 0 14px; margin-top: 6px; font-size: 11pt; color: #fff;">Sign in</p></a>
          </div>
      @else
      <li class="dropdown" style="float: right; list-style: none; margin-right: 22pt; margin-top: 15pt;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="float: right;">
              <div style="width: 31pt; height: 31pt; border-radius: 50%; background-image: linear-gradient(20deg, #43e97b 0%, #38f9d7 100%); margin-top: -9pt;">
                  <p style="font-size: 12pt; padding-top: 6.55pt; padding-left: 11.35pt; font-weight: bold; color: #fff;" class="initial">{{ substr(auth()->user()->first_name, 0, 1) }}</p>
              </div>
          </a>

          <ul class="dropdown-menu med-shadow" style="color: #fff; border-radius: 2pt; width: 250pt; float: right; list-style-type: none; margin-left: -218pt; border: none; background: #616161;">
              <li>
                  <div style="margin-top: -10; border-radius: 2pt 2pt 0 0; height: 55pt; width: 100%; background: #424242;">
                  <p style="margin-top: -5pt; padding: 15pt; padding-bottom: 0; padding-top: 10pt; font-size: 12pt; font-weight: bold; color: #fff;">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                  <p style="margin-top: -10pt; padding-left: 15pt; padding-top: 0; font-size: 12pt; color: #fff;">{{ auth()->user()->email }}</p>
                  </div>
                  <div style="margin-left: 15pt; margin-top: 12pt;">
                <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{route('users/show', auth()->user()->slug)}}"><img style="margin-right: 15pt;" src="{{ asset('images/user.svg') }}">Profile</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{ route('dashboard') }}"><img style="margin-right: 15pt;" src="{{ asset('images/dashboard.svg') }}">Dashboard</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{ url('/help') }}"><img style="margin-right: 15pt;" src="{{ asset('images/help.svg') }}">Help</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt; margin-left: -1.75pt;" href="{{ url('/help') }}"><img style=" width: 20pt; margin-right: 14.5pt;" src="{{ asset('images/settings.svg') }}">Settings</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{ url('/dashboard') }}"><img style="margin-right: 15pt;" src="{{ asset('images/feedback.svg') }}">Feedback</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{ url('/dashboard') }}"><img style="margin-right: 15pt;" src="{{ asset('images/translate.svg') }}">Language</a>
                  <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt; margin-bottom: 15pt;" href="{{ route('logout') }}"
                  onclick="event.preventhefault();
                  document.getElementById('logout-form').submit();">
                  <img style="margin-right: 12pt;" src="{{ asset('images/logout.svg') }}">
                  Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
          </li>
      </ul>
      </li>
      <div class="hide-on-mobile" style="float: right; margin-right: 22pt; margin-top: 10pt;">
         <div class="dropdown" style="display: inline-block;">
          <img class="dropdown-toggle" data-toggle="dropdown" style="height: 21pt; margin-right: 20pt; margin-top: .75pt;" src="{{ asset('images/apps.svg') }}">
          <ul class="dropdown-menu" style="border-radius: 2pt; width: 180pt; float: right; list-style-type: none; margin-left: -160pt; border: none; background: #616161; margin-top: 7pt; color: #fff; font-size: 12pt;">
            <div style="width: 100%; height: 38pt; margin-top: -5pt; background: #424242; border-radius: 2pt 2pt 0 0;">
              <p style="color: #fff; margin-left: 16pt; padding-top: 10pt; padding-bottom: 8pt; font-weight: bold; font-size: 12.5pt;">Sections</p>
            </div>
            <a href="{{route('learn/index')}}"><li style="color: #fff; width: 100%; height: 38pt; margin-top: 4pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/edu-menu.svg')}}">Learn</li></a>
            <a href="{{route('identify/index')}}"><li style="color: #fff; width: 100%; height: 38pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/id-menu.svg')}}">Identify</li></a>
            <a href="{{route('store/index')}}"><li style="color: #fff; width: 100%; height: 50pt; margin-top: -1pt; margin-bottom: 4pt; border-bottom: 1pt solid #515151;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/store-menu.svg')}}">Store</li></a>
            <a href=""><li style="color: #fff; width: 100%; height: 38pt; margin-top: 3pt; margin-bottom: -1.5pt;"><img style="margin: 12pt 14pt; margin-right: 15.7pt; margin-left: 16.25pt; height: 18.62pt;" src="{{asset('images/community-menu.svg')}}">Community</li></a>
            <a href=""><li style="color: #fff; width: 100%; height: 38pt; margin-bottom: 7pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/user-menu.svg')}}">Users</li></a>
          </ul>
        </div>
         <div class="dropdown" style="display: inline-block;">
          <img class="dropdown-toggle" data-toggle="dropdown" style="height: 21pt; margin-right: 7pt; margin-top: .75pt;" src="{{ asset('images/bell.svg') }}">
          <ul class="dropdown-menu" style="border-radius: 2pt; width: 250pt; float: right; list-style-type: none; margin-left: -230pt; border: none; background: #616161; margin-top: 7pt;">
            <div style="width: 100%; background: #424242; border-radius: 2pt 2pt 0 0; margin-top: -5pt;"><p style="color: #fff; margin-left: 15pt; padding-top: 10pt; padding-bottom: 8pt; font-weight: bold; font-size: 12.5pt;">Notifications</p></div>
            <div style="height: 140pt;">
            </div>
          </ul>
        </div>
      </div>
  @endguest
</div>
<input type="checkbox" id="menu-toggle">

<div class="sidebar">
    <ul>
        @guest
        <div style="text-align: center; width: calc(100% - 30pt); margin-left: 15pt; margin-bottom: 15pt; margin-top: -5px; border-radius: 3px; height: 265px; background: #9E9E9E;">
          <img style="width: 74%; margin: 10% 13%;" src="{{ asset('images/illustrations/todo.svg') }}">
          <p style="color: #424242; font-size: 14pt; font-family: 'Roboto'; margin-top: -8px; margin-bottom: 20px;">Join the community!</p>
          <a style="border-radius: 2pt; display: inline-block; color: #fff; background: #424242; font-weight: bold; height: 34px;"  href="{{ route('login') }}"><p style="margin: 0 14px; margin-top: 6px; font-size: 11pt; color: #fff;">Sign in</p></a>
          <a style="border-radius: 2pt; display: inline-block; color: #fff; font-weight: bold; height: 34px;"  href="{{ route('register') }}"><p style="margin: 0 14px; margin-top: 6px; font-size: 11pt; color: #424242;">Register</p></a>
        </div>
        @else
        <li id="sidebar-item-1"><img style="padding-left: 15pt;" src="{{ asset('images/home-dark.svg') }}"><a id="sidebar-item-1-text" href="{{ url('dashboard') }}">Home</a></li>
        <li id="sidebar-item-2"><img style="padding-left: 15pt;" src="{{ asset('images/profile-dark.svg') }}"><a id="sidebar-item-2-text" href="{{route('users/show', auth()->user()->slug)}}">Profile</a></li>
        <li id="sidebar-item-3" style="margin-bottom: 5pt;"><img style="padding-left: 15pt;" src="{{ asset('images/bell-dark.svg') }}"><a id="sidebar-item-3-text" href="{{ url('notifications') }}">Notifications</a></li>
        @endguest
        <div style="color: #424242; padding-left: 15.8pt; font-weight: bold;" class="sidebar-label">LINKS</div>
        <li id="sidebar-item-5"><img style="padding-left: 15.4pt;" src="{{ asset('images/community.svg') }}"><a id="sidebar-item-5-text" href="https://reddit.com/r/whatsthisrock/">Community</a></li>
        <li id="sidebar-item-6" style="margin-bottom: 6pt;"><img style="padding-left: 17.2pt; padding-top: 1pt; height: 17pt;" src="{{ asset('images/edu.svg') }}"><a style="padding-top: 1.4pt;" id="sidebar-item-6-text" href="{{route('learn/index')}}">Learn</a></li>
        <div style="color: #424242; padding-left: 15.60pt; font-weight: bold;" class="sidebar-label">TOOLS</div>
        <li id="sidebar-item-7"><img style="padding-left: 15.75pt;" src="{{ asset('images/id.svg') }}"><a id="sidebar-item-7-text" href="{{route('identify/index')}}">Identify a Rock</a></li>
    </ul>
</div>
