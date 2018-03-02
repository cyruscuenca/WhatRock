@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
		<div style="height: 520pt; width: 70%; margin-left: 15%; margin-top: calc(60px + 25px); border-radius: 6px;">
			<a href="entries/id">
				<div style="width: 55%; height: 100%; background: #455A64; float: left; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 38pt; font-family: 'ubuntu';">Identify a Rock</p>
				</div>
			</a>
			<a href="/contribute">
				<div style="width: calc(45% - 25px); height: calc(50% - 25px); margin-bottom: 25px; background: #455A64; float: right; display: inline-block; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu';">Contribute</p>
				</div>
			</a>
			<a href="https://reddit.com/r/whatsthisrock">
				<div style="width: calc(45% - 25px); height: 50%; background: #455A64; float: right; display: inline-block; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu';">Community</p>
				</div>
			</a>
		</div>
		<div style="height: 480pt; width: 70%; margin-left: 15%; margin-top: 25px; margin-bottom: 60px; border-radius: 6px;">
			<a href="entries/id">
				<div style="width: 40%; height: 100%; background: #455A64; float: right; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 38pt; font-family: 'ubuntu';">Wiki</p>
				</div>
			</a>
			<a href="/contribute">
				<div style="width: calc(60% - 25px); height: calc(50% - 25px); margin-bottom: 25px; background: #455A64; float: left; display: inline-block; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu';">Blog</p>
				</div>
			</a>
			<a href="https://reddit.com/r/whatsthisrock">
				<div style="width: calc(60% - 25px); height: 50%; background: #455A64; float: left; display: inline-block; border-radius: 6px;">
					<p style="color: #fff; text-align: center; font-size: 31pt; font-family: 'ubuntu';">Contact</p>
				</div>
			</a>
		</div>
	</div>
@include('partials.footer')
@endsection
