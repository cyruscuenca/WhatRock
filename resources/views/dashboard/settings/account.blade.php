@extends('layouts.app')
@section('content')
<style type="text/css">
	.form-control {
		background: #BDBDBD;
		border-radius: 2pt;
	}
	.form-control::placeholder {
		color: #757575;
	}
	textarea {
		text-indent: 9pt;
		font-family: 'Open Sans';
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
	.settings-menu ul li:nth-child(3) {
		border-right: 5px solid #0288D1;
	}
	.settings-menu li a, .settings-menu li p{
		color: #616161;
		font-size: 12pt;
		margin-left: 18pt;
	}
	.settings-menu ul{
		margin-top: 14pt;
	}
</style>
<div style="height: 750pt;">
@include('partials.settings-menu')
<div style="width: 100%; height: 100%;">
		
		<section style="width: calc(100% - 200pt); float: right;">
			<div style="width: 80%; margin-left: 25pt;">
		<div style="margin: 30pt 0; margin-top: 18pt; padding: 10pt 0; border-bottom: 1px solid #BDBDBD;">
			<p style="font-size: 18pt; font-weight: bold; color: #616161;">Account</p>
			<p style="font-size: 30pt; font-weight: bold; color: #424242;">Choose how people see you on WhatRock</p>
		</div>

		<div style="width: 400pt;">
		@if (count($errors))
		<div class="alert alert-danger" style="list-style-type: none;">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
		@endif
		{!! Form::model(auth()->user(), ['method' => 'PATCH', 'action' => ['UserController@update', auth()->user()->id], 'files' => false]) !!}
							<div class="form-group">
								{!! Form::text("first_name", null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::text("last_name", null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								<p style="color: #757575; font-weight: bold; font-size: 12pt; font-family: 'Open Sans';">{{auth()->user()->email}}</p>
							</div>
							<div class="form-group">
								{!! Form::text("city", null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
							</div>
							<div class="form-group">
								{!! Form::text("country", null, ['class' => 'form-control', 'placeholder' => 'Country']) !!}
							</div>
							<div class="form-group" style="margin-bottom: 25pt;">
								{!! Form::textarea("bio", null, ['class' => 'form-control', 'placeholder' => 'Bio']) !!}
							</div>
							{!! Form::submit("Update", ['class' => 'standard-btn' , 'style' => 'background: #424242; width: 76pt; padding-left: 7pt;']) !!}
		{!! Form::close() !!}
		</div>
		</div>
	</section>
</div>
</div>
<script type="text/javascript"
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
</script>
@endsection