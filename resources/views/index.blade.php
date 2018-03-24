@extends('layouts.app')
@section('content')
<style>
.fadeInLeft{
	animation-delay: .10s;
	animation-duration: .30s;
}
</style>
	<div class="body-wrapper">
		<div style="background-image: linear-gradient(20deg, #37474F 0%, #546E7A 100%); width: 100%; height: 465pt">
			<img class="" src="{{ asset('images/postsvg.svg') }}" style="height: 80%; margin-left: 10%; margin-top: 45pt; ">
			<div class="animated fadeInRight" style="width: 280pt; height: 80%; margin-top: 45pt; margin-right: 15%; float: right; background: #FFFFFF;">
			</div>
		</div>
		<div style="width: 100%; height: 125pt; background-image: linear-gradient(to right, #631BD0 0%, #3360F2 100%);">
			<div>
				<li></li>
				<li></li>
				<li></li>
			</div>
		</div>
	</div>
@include('partials.footer')
@endsection
