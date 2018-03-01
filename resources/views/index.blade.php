@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
		<div style="height: 525pt; width: 70%; margin-left: 15%; margin-top: 6%; border-radius: 3px;">
			<a href="entries/id">
				<div style="width: 57.5%; height: 100%; background: #263238; float: left; border-radius: 3px;">
					<p style="color: #fff; text-align: center; font-size: 38pt; font-family: 'ubuntu'; margin-top: 43%;">Identify a Rock</p>
				</div>
			</a>
			<a href="/contribute">
				<div style="width: calc(42.5% - 25px); height: calc(50% - 25px); margin-bottom: 25px; background: #263238; float: right; display: inline-block; border-radius: 3px;">
					<img style="margin: 0 auto; display: block; width: 45%; margin-top: 10%;" src="{{ asset('images/contribute.svg') }}">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu'; margin-top: -78pt;">Contribute</p>
				</div>
			</a>
			<a href="https://reddit.com/r/whatsthisrock">
				<div style="width: calc(42.5% - 25px); height: 50%; background: #263238; float: right; display: inline-block; border-radius: 3px;">
					<img style="margin: 0 auto; display: block; width: 39%; margin-top: 19%;" src="{{ asset('images/community.svg') }}">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu'; margin-top: -78pt;">Community</p>
				</div>
			</a>
		</div>
	</div>
@endsection
