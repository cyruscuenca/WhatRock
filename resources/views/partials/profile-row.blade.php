<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<div style="background:linear-gradient(rgba(207, 216, 220, 1),rgba(207, 216, 220, 0.15)),url({{asset('images/slider/blue-sky.jpg')}}); background-size: cover; background-position: top; width: 100%;">
	<div class="fixed-width" style="height: 240pt;">
		<div style="width: 100%; padding-top: 22pt;">
			<p style="margin-top: -5pt; display: inline-block; font-weight: bold; font-size: 33pt; color: #455A64;">{{$user->name}}&nbsp&nbsp<img style="width: 30pt;" src="{{asset('images/verified-icon.svg')}}">&nbsp&nbsp<i style="font-size: 27pt; color: #01b74d;" class="fas fa-user-shield"></i></p>
		<button class="med-shadow" style="display: inline-block; background: #0288D1; float: right; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">MESSAGE</button>
	</div>
	<div style="width: 100%; padding-top: 104pt; font-size: 11pt;">
		<a href="{{route('userlist')}}">
			<button class="med-shadow" style="display: inline-block; background: #ECEFF1; border: none; color: #455A64; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">ABOUT</button>
		</a>
		<a href="{{route('users/entries', $user->slug)}}">
			<button class="med-shadow" style="display: inline-block; background: #ECEFF1; border: none; color: #455A64; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">ENTRIES</button>
		</a>
		<a href=""></a>
			<button class="med-shadow" style="display: inline-block; background: #ECEFF1; border: none; color: #455A64; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">LESSONS</button>
		</a>
		@if ( auth()->check() )
     		    @if (auth()->user()->hasRole('administrator'))
		<a href="{{route('admin/index')}}">
		<button class="med-shadow" style="display: inline-block; background: #F44336; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">SUSPEND USER</button>
		</a>
                @else
                @endif

		@endif
	</div>
</div>
</div>
