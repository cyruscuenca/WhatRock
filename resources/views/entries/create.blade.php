@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Create an Entry</p>
			</div>

				{!! Form::open(['method' => 'POST', 'action' => 'EntryController@store']) !!}

				<div class="form-group" style="margin-top: 50px; width: 45%; margin-bottom: 30px; display: inline-block; margin-left: 17%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
		 			{!! Form::label("title", "Name:") !!}
		 			{!! Form::text("title", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-top: 50px; width:18.45%; display:inline-block; margin-left: 1%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("category_id", "Category:") !!}
					{!! Form::select("category_id[]", $categories, null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="width: 65%; margin-left: 17%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("body", "Body:") !!}
					{!! Form::textarea("body", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-bottom: 40px; margin-top: 30px; margin-left: 17%;">
					{!! Form::submit("Create Entry", ['class' => 'button']) !!}
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