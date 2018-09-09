@extends('layouts.app')
@section('content')
<div class="fixed-width" style="margin-bottom: 100px;">
	<h1 style="font-weight: bold; font-family: 'Open Sans'; margin: 25pt 0;">Live Earthquakes Feeds</h1>
	<iframe style="margin-bottom: 30px; border-radius: 3px; border: 2px solid #757575; border-right: none;" frameBorder="no" src="http://quakes.globalincidentmap.com/" width="1225px" height="500px" name="window" id="window">
		<p>Sorry! Your browser does not support iframes.</p>
	</iframe>
	<br>
	<a class="standard-btn" style="background: #616161; margin-right: 15px;" href="http://quakes.globalincidentmap.com/" target="window">Global Incedent</a>
	<a class="standard-btn" style="background: #616161; margin-right: 15px;" href="http://ds.iris.edu/seismon/?" target="window">IRIS</a>
	<a class="standard-btn" style="background: #616161; margin-right: 15px;" href="http://www.earthquake3d.com/" target="window">Earthquake3D</a>
	<div style="width: 100%; margin-top: 32px; padding-bottom: 80px;">
		<p style="color: #424242; font-family: 'Open Sans'; font-size: 12pt;">The WhatRock Live Earthquake feeds are from 3rd party websites. WhatRock does not claim ownership of the feeds displayed on this page.</p>
	</div>
		<a class="standard-btn" style="background: #424242; margin-right: 15px;" href="http://www.earthquake3d.com/">Back to home</a>
		<a class="standard-btn" style="background: #424242; margin-right: 15px;" href="http://www.earthquake3d.com/">More about earthquakes</a>
</div>
@include('partials.footer')
@endsection