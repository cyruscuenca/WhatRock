<div style="background: #616161;">
	<div class="fixed-width" style="height: 240pt;">
		<div style="width: 100%; padding-top: 22pt;">
			<p style="margin-top: -10px; display: inline-block; font-weight: bold; font-size: 34pt; color: #fff;">Welcome back, {{auth()->user()->first_name}}</p>
		<button style="display: inline-block; background: #0288D1; float: right; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">SETTINGS</button>
	</div>
	<div style="width: 100%; padding-top: 104pt; font-size: 11pt;">
		<a href="{{route('entries/create')}}">
			<button style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">CREATE AN ENTRY</button>
		</a>
		<a href="{{route('users/entries', auth()->user()->slug)}}">
			<button style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">YOUR ENTRIES</button>
		</a>
		<a href="{{route('dashboard')}}">
		<button style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">DASHBOARD</button>
		</a>
		@if ( auth()->check() )
     		    @if (auth()->user()->hasRole('administrator'))
		<a href="{{route('admin/index')}}">
		<button style="display: inline-block; background: #00C853; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-left: 25pt;">ADMIN AREA</button>
		</a>
    @else
    @endif

		@endif
	</div>
</div>
</div>
