<style type="text/css">
	.form-control {
		background: #BDBDBD;
		border-radius: 2pt;
	}
	.form-control::placeholder {
		color: #757575;
	}
	ul, li {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	.settings-menu li {
		padding-bottom: 8pt;
		padding-top: 8pt;
	}
	.settings-menu ul li:nth-child(1) {
		padding-top: 4pt;
	}
	.settings-menu li a, .settings-menu li p{
		color: #E0E0E0;
		font-size: 12pt;
		margin-left: 18pt;
	}
	.settings-menu ul{
		margin-top: 14pt;
	}
</style>
<section class="settings-menu" style="width: 200pt; height: 100%; background: #424242; float: left; position: fixed;">
	<ul>
		<li style="border-bottom: 1px solid #616161; margin-bottom: 10pt; padding-bottom: 12pt;"><a href="{{ route('dashboard') }}" style="font-weight: bold;">MY DASHBOARD</a></li>
		@if (auth()->user()->hasRole('administrator'))
		<li><a href="{{ route('admin/index') }}">Admin area</a></li>
		@endif
		<li><a href="{{ route('entries/create') }}">Create an entry</a></li>
		<li><a href="{{ route('advanced') }}">My entries</a></li>
		<li><a href="{{ route('advanced') }}">Notifications</a></li>
		<li><a href="{{ route('settings') }}">Settings</a></li>
	</ul>
</section>