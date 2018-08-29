<div style="background: #4a606b; background-image: url({{asset('images/topography.svg')}}); background-size: 62%; width: 100%;">
	<div class="fixed-width" style="height: 240pt;">
		<div style="width: 100%; padding-top: 22pt;">
			<p style="margin-top: -5pt; display: inline-block; font-weight: bold; font-size: 33pt; color: #fff; text-shadow: 4px 4px 4px #37474F;
">Welcome back,
				@php {{
				$name = auth()->user()->name;
				$splitName = explode(' ', $name, 2);

				$first_name = $splitName[0];
				$last_name = !empty($splitName[1]) ? $splitName[1] : '';

				echo $first_name;
			}}
		@endphp!</p>
		<button class="med-shadow" style="display: inline-block; background: #0288D1; float: right; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">SETTINGS</button>
	</div>
	<div style="width: 100%; padding-top: 104pt; font-size: 11pt;">
		<a href="{{route('entries/create')}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">CREATE AN ENTRY</button>
		</a>
		<a href="{{route('users/entries', auth()->user()->slug)}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">YOUR ENTRIES</button>
		</a>
		<a href="{{route('userlist')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">MANAGE USERS</button>
		</a>
		<a href="{{route('dashboard')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">DASHBOARD</button>
		</a>
		@if ( auth()->check() )
     		    @if (auth()->user()->hasRole('administrator'))
		<a href="{{route('admin/index')}}">
		<button class="med-shadow" style="display: inline-block; background: #00C853; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-left: 25pt;">ADMIN AREA</button>
		</a>
    @else
    @endif

		@endif
	</div>
</div>
</div>
