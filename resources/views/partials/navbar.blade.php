<div class="navbar med-shadow">
         <label for="menu-toggle" class="hamburger noselect">&#9776;</label>
         <a href="http://www.whatrock.local:8000"><img src="{{ asset('images/logorock.png') }}" class="logo"></a>
         <div style="height: 47.5px; width: 33.6%; position: relative; display: inline-block; float: left; margin-top: 5.25px; margin-left: -1pt;">
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
      @guest
          <div style="float: right;">
          <a style="border-radius: 2pt; display: inline-block; color: #fff; margin-right: 22.5pt; background: #00C853; font-weight: bold; height: 34px; width: 72px; margin-top: 12px;"  href="{{ route('login') }}"><p style="padding-left: 12px; margin-top: 6px; font-size: 11pt; color: #fff;">Sign in</p></a>
          </div>
           <div style="float: right; margin-top: 11.5pt; margin-right: 35pt;">
             <img style="height: 21pt;" src="{{ asset('images/translate.svg') }}">
           </div>
      @else
      <li class="dropdown" style="float: right; list-style: none; margin-right: 22pt; margin-top: 15pt;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="float: right;">
              <div style="width: 31pt; height: 31pt; border-radius: 50%; background-image: linear-gradient(20deg, #43e97b 0%, #38f9d7 100%); margin-top: -9pt;">
                  <p style="font-size: 12pt; padding-top: 6.55pt; padding-left: 11.35pt; font-weight: bold; color: #fff;" class="initial">{{ substr(auth()->user()->name, 0, 1) }}</p>
              </div>
          </a>

          <ul class="dropdown-menu med-shadow" style="color: #fff; border-radius: 2pt; width: 250pt; float: right; list-style-type: none; margin-left: -218pt; border: none; background: #455A64;">
              <li>
                  <div style="margin-top: -10; border-radius: 2pt 2pt 0 0; height: 55pt; width: 100%; background: #546E7A;">
                  <p style="margin-top: -5pt; padding: 15pt; padding-bottom: 0; padding-top: 10pt; font-size: 12pt; font-weight: bold; color: #fff;">{{ auth()->user()->name }}</p>
                  <p style="margin-top: -10pt; padding-left: 15pt; padding-top: 0; font-size: 12pt; color: #fff;">{{ auth()->user()->email }}</p>
                  </div>
                  <div style="margin-left: 15pt; margin-top: 12pt;">
                <a style="color: #fff; display: block; margin-top: 15pt; font-size: 12pt;" href="{{ url('/dashboard') }}"><img style="margin-right: 15pt;" src="{{ asset('images/user.svg') }}">Profile</a>
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
      <div style="float: right; margin-right: 22pt; margin-top: 10pt;">
         <div class="dropdown" style="display: inline-block;">
          <img class="dropdown-toggle" data-toggle="dropdown" style="height: 21pt; margin-right: 20pt; margin-top: .75pt;" src="{{ asset('images/apps.svg') }}">
          <ul class="dropdown-menu" style="border-radius: 2pt; width: 180pt; float: right; list-style-type: none; margin-left: -160pt; border: none; background: #455A64; margin-top: 7pt; color: #fff; font-size: 12pt;">
            <div style="width: 100%; height: 38pt; margin-top: -5pt; background: #546E7A; border-radius: 2pt 2pt 0 0;">
              <p style="color: #fff; margin-left: 16pt; padding-top: 10pt; padding-bottom: 8pt; font-weight: bold; font-size: 12.5pt;">Sections</p>
            </div>
            <a href="{{route('learn/index')}}"><li style="color: #fff; width: 100%; height: 38pt; margin-top: 4pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/edu-menu.svg')}}">Learn</li></a>
            <a href="{{route('identify/index')}}"><li style="color: #fff; width: 100%; height: 38pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/id-menu.svg')}}">Identify</li></a>
            <a href="{{route('store/index')}}"><li style="color: #fff; width: 100%; height: 50pt; margin-top: -1pt; margin-bottom: 4pt; border-bottom: 1pt solid #546E7A;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/store-menu.svg')}}">Store</li></a>
            <a href=""><li style="color: #fff; width: 100%; height: 38pt; margin-top: 3pt; margin-bottom: -1.5pt;"><img style="margin: 12pt 14pt; margin-right: 15.7pt; margin-left: 16.25pt; height: 18.62pt;" src="{{asset('images/community-menu.svg')}}">Community</li></a>
            <a href=""><li style="color: #fff; width: 100%; height: 38pt; margin-bottom: 7pt;"><img style="margin: 12pt 14pt; height: 22pt;" src="{{asset('images/user-menu.svg')}}">Users</li></a>
          </ul>
        </div>
         <div class="dropdown" style="display: inline-block;">
          <img class="dropdown-toggle" data-toggle="dropdown" style="height: 21pt; margin-right: 7pt; margin-top: .75pt;" src="{{ asset('images/bell.svg') }}">
          <ul class="dropdown-menu" style="border-radius: 2pt; width: 250pt; float: right; list-style-type: none; margin-left: -230pt; border: none; background: #455A64; margin-top: 7pt;">
            <div style="width: 100%; background: #546E7A; border-radius: 2pt 2pt 0 0; margin-top: -5pt;"><p style="color: #fff; margin-left: 15pt; padding-top: 10pt; padding-bottom: 8pt; font-weight: bold; font-size: 12.5pt;">Notifications</p></div>
            <div style="height: 140pt;">
            </div>
          </ul>
        </div>
      </div>
  @endguest
</div>
<input type="checkbox" id="menu-toggle">

<div class="sidebar med-shadow">
    <ul>
        <li id="sidebar-item-1"><img style="padding-left: 15pt;" src="{{ asset('images/home.svg') }}"><a id="sidebar-item-1-text" href="{{ url('dashboard') }}">Home</a></li>
        <li id="sidebar-item-2"><img style="padding-left: 15pt;" src="{{ asset('images/profile.svg') }}"><a id="sidebar-item-2-text" href="{{ url('profile') }}">Profile</a></li>
        <li id="sidebar-item-3" style="margin-bottom: 5pt;"><img style="padding-left: 15pt;" src="{{ asset('images/bell.svg') }}"><a id="sidebar-item-3-text" href="{{ url('notifications') }}">Notifications</a></li>
        <div style="color: #fff; padding-left: 15.8pt; font-weight: bold;" class="sidebar-label">LINKS</div>
        <li id="sidebar-item-5"><img style="padding-left: 15.4pt;" src="{{ asset('images/community.svg') }}"><a id="sidebar-item-5-text" href="https://reddit.com/r/whatsthisrock/">Community</a></li>
        <li id="sidebar-item-6" style="margin-bottom: 6pt;"><img style="padding-left: 17.2pt; padding-top: 1pt; height: 17pt;" src="{{ asset('images/edu.svg') }}"><a style="padding-top: 1.4pt;" id="sidebar-item-6-text" href="{{route('learn/index')}}">Learn</a></li>
        <div style="color: #fff; padding-left: 15.60pt; font-weight: bold;" class="sidebar-label">TOOLS</div>
        <li id="sidebar-item-7"><img style="padding-left: 15.75pt;" src="{{ asset('images/id.svg') }}"><a id="sidebar-item-7-text" href="{{route('identify/index')}}">Identify a Rock</a></li>
    </ul>
</div>
