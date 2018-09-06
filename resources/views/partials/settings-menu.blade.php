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
		<li style="border-bottom: 1px solid #616161; padding-bottom: 12pt;"><a href="{{ route('dashboard') }}" style="font-weight: bold;"><img style="margin-left: -6pt; height: 22pt; margin-top: -2pt;" src="{{asset('images/left-arrow.svg')}}"> BACK TO DASHBOARD</a></li>
		<li><p style="font-weight: bold; font-size: 15pt; margin-top: 14pt; margin-bottom: 0pt;">SETTINGS</p></li>
		<li><a href="{{ route('settings') }}">Account</a></li>
		<li><a href="{{ route('advanced') }}">Advanced settings</a></li>
	</ul>
</section>