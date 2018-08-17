@extends('layouts.app')
@section('content')
<div style="margin-top: 60px; height: 800pt;">
	<div class="fixed-width" style="padding-top: 35pt;">
		<div style="width: 55%; display: inline-block;">
		<p style="font-size: 70pt; font-weight: bold; color: #546E7A;">Schist happens...</p>
		<p style="font-size: 18pt; font-weight: bold; line-height: 35pt; color: #546E7A;"><a href="https://en.wikipedia.org/wiki/HTTP_404" ">ERROR 404:</a> The page you are looking for doesn't exist 🤷 You can search for the page you are looking for or head to the homepage</p>
			<div style="width: 100%; margin-top: 28pt;">
				<a class="standard-btn" style="display: inline-block; margin-right: 14pt;" href="http://www.whatrock.local:8000">Home</a>
				<a class="standard-btn" style="display: inline-block;" href="http://www.whatrock.local:8000">Search</a>
			</div>
		</div>
		<div style="width: calc(100% - 50%); display: inline-block; float: right;">
			<img style="width: 100%;" src="{{asset('images/illustrations/lost.svg')}}">
		</div>
	</div>
</div>
@include('partials.footer')
@endsection
