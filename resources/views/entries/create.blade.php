@extends('layouts.app')
@section('content')

<style type="text/css">
	.summary-height{
		height: 200px;
	}
</style>

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Create an Entry</p>
			</div>

				{!! Form::open(['method' => 'POST', 'action' => 'EntryController@store', 'files' => true]) !!}
				<div style="width: 50%; height: auto; background: #f3f3f3; margin: auto; margin-top: 50px; border-radius: 2px;">
				<div style="width: 90%; height: auto; margin: auto;">

				<div style="width: 100%; padding-top: 5%;">
				<div class="form-group" style="width: 55%; display: inline-block;">
		 			{!! Form::label("title", "Name:") !!}
		 			{!! Form::text("title", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="width: 40%; display: inline-block; float: right;">
		 			{!! Form::label("alt_title", "A.K.A:") !!}
		 			{!! Form::text("alt_title", null, ['class' => 'form-control']) !!}
				</div>
				</div>

				<div style="width: 100%;">
				<div class="form-group" style="width: 40%;">
					{!! Form::label("category_id", "Category:") !!}
					{!! Form::select("category_id[]", $categories, null, ['class' => 'form-control']) !!}
				</div>
				</div>

				<div style="width: 100%;">
				<div class="form-group" style="width: 100%;">
					{!! Form::label("color_id", "Color:") !!}
					{!! Form::select("color_id[]", $colors, null, ['class' => 'form-control']) !!}
				</div>
				</div>

				<div style="width: 100%;">
				<div class="form-group" style="width: 100%;">
					{!! Form::label("streak_id", "Streak:") !!}
					{!! Form::select("streak_id[]", $streaks, null, ['class' => 'form-control']) !!}
				</div>
				</div>

				<div style="width: 100%;">
				<div class="form-group" style="width: 100%;">
					{!! Form::label("lustre_id", "Lustre:") !!}
					{!! Form::select("lustre_id[]", $lustres, null, ['class' => 'form-control']) !!}
				</div>
				</div>

				<div style="width: 100%;">
				<div class="form-group">
					{!! Form::label("summary", "Summary:") !!}
					{!! Form::textarea("summary", null, ['class' => 'form-control summary-height']) !!}
				</div>
				<div class="form-group">
					{!! Form::label("body", "Body:") !!}
					{!! Form::textarea("body", null, ['class' => 'form-control']) !!}
				</div>
				</div>
				<div style="width: 100%; padding-bottom: 5%;">
				<div class="form-group" style="display: inline-block;">
					{!! Form::label("photo_id", "Featured Image:") !!}
					{!! Form::file("photo_id", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="display: inline-block; float: right; padding-top: 20px;">
					{!! Form::submit("Submit", ['class' => '']) !!}
				</div>
				</div>

				</div>
				</div>

			    {!! Form::close() !!}

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>

@endsection