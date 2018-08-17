@extends('layouts.app')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector: '.body-area' });</script>
<style type="text/css">
	.form-control {
		background: #B0BEC5;
		border-radius: 2pt;
	}
	.summary {
		max-width: 100%;
		min-width: 100%;
	}
	.body-area{
		min-height: 350pt;
	}
</style>
<div style="background:linear-gradient(rgba(207, 216, 220, 1),rgba(207, 216, 220, 0.15)),url({{asset('images/slider/blue-sky.jpg')}}); background-size: cover; background-position: top; width: 100%;">
	<div class="fixed-width" style="margin-top: 60px; height: 240pt;">
		<div style="width: 100%; padding-top: 22pt;">
			<p style="margin-top: -5pt; display: inline-block; font-weight: bold; font-size: 28pt; color: #455A64;">Welcome back,
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
	<div style="width: 100%; padding-top: 110pt; font-size: 11pt;">
		<a href="{{route('entries/create')}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">CREATE AN ENTRY</button>
		</a>
		<a href="{{route('userlist')}}">
			<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">LIST ENTRIES</button>
		</a>
		<a href="{{route('userlist')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt; margin-right: 25pt;">MANAGE USERS</button>
		</a>
		<a href="{{route('dashboard')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">DASHBOARD</button>
		</a>
	</div>
</div>
</div>
	<div class="fixed-width" style="margin-bottom: 50pt;">
		<div style="padding-top: 9pt;">
			<p style="font-size: 18pt; font-weight: bold; color: #546E7A;">Edit an Entry</p>
		</div>
		@if (count($errors))
		<div class="alert alert-danger" style="width: calc(75% - 18pt); list-style-type: none;">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
		@endif
			<div style="background: #CFD8DC; border-radius: 2pt; width: calc(75% - 18pt); display: inline-block;">
				{!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@update', $entry->id], 'files' => true]) !!}
				<div style="width: calc(100% - 32pt); margin: 16pt;">
					<div style="width: 100%; padding-bottom: 5pt;">
						<div class="form-group" style="width: 59.5%; display: inline-block;">
							{!! Form::text("title", null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group" style="width: 38%; display: inline-block; float: right;">
							{!! Form::text("alt_title", null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div style="width: 100%;">
						<div class="form-group">
							{!! Form::textarea("summary", null, ['class' => 'form-control summary']) !!}
						</div>
						<div class="form-group">
							{!! Form::textarea("body", null, ['class' => 'form-control body-area']) !!}
						</div>
					</div>
				</div>
			</div>
			<div style="background: #CFD8DC; border-radius: 2pt; width: calc(27% - 17pt); display: inline-block; float: right;">
				<div id="img-box" style="cursor: pointer; height: 100pt; width: 100%; background: #B0BEC5; border-radius: 2pt 2pt 0 0; overflow: hidden; background-image: url({{ asset('images/add-photo-icon.svg') }}); background-size: 32%; background-repeat: no-repeat; background-position: center;">
					{{ Form::file("photo_id", ['style' => 'display: none;', 'type' => 'submit', 'id' => 'img-input']) }}
					<img id="preview-img" style="height: auto; width: 100%; margin-top: -8%; display: block;" src="">
				</div>
				<div style="width: calc(100% - 32pt); margin: 16pt;">
					<div style="width: 100%;">
						<div class="form-group" style="width: 100%;">
							{!! Form::select("category_id", $categories, null, ['class' => 'form-control', 'placeholder' => 'Pick a category']) !!}
						</div>
					</div>
					<div style="width: 100%;">
						<div class="form-group" style="width: 100%;">
							{!! Form::select("lustre_id", $lustres, null, ['class' => 'form-control', 'placeholder' => 'Pick a lustre']) !!}
						</div>
					</div>
					<div style="width: 100%;">
						<div class="form-group" style="width: 100%;">
							{!! Form::select("streak_id", $streaks, null, ['class' => 'form-control', 'placeholder' => 'Pick a streak color']) !!}
						</div>
					</div>
					<div style="width: 100%;">
						<div class="form-group" style="width: 100%;">
							{!! Form::select("color_id", $colors, null, ['class' => 'form-control', 'placeholder' => 'Pick a color']) !!}
						</div>
					</div>
					<div style="width: 100%;">
						<div class="form-group" style="width: 100%;">
							{!! Form::select("tag_id", $tags, null, ['class' => 'form-control', 'placeholder' => 'Add extra tags']) !!}
						</div>
					</div>
				<div class="form-group" style="display: inline-block; float: right; padding-top: 15pt;">
					{!! Form::submit("Submit", ['class' => 'standard-btn' , 'style' => 'width: 76pt; padding-left: 8pt;']) !!}
				</div>
				</div>
				{!! Form::close() !!}

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
<script type="text/javascript">
(function() {
  $('#img-box').click(function(e) {
	$(function(){
	   $('img-input').change(function(e) {
	   	new previewFile;
	   });
	});
	function previewFile() {
	  var preview = document.getElementById('img-box');
	  var file    = document.getElementById('img-input').files[0];
	  var reader  = new FileReader();

	  reader.addEventListener("load", function () {
	    preview.backgroundImage = 'url('+reader.result+')';
	  }, false);

	  if (file) {
	    reader.readAsDataURL(file);
	  }
	}
    return $('input:file')[0].click();
  });

}).call(this);
	function readURL(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#preview-img').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$("#img-input").change(function() {
	  readURL(this);
	});
</script>
@include('partials.footer')
@endsection