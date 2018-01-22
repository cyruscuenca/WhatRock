@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Edit an Entry</p>
			</div>

				{!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@update', $entry->id], 'files' => true]) !!}


				<div class="form-group" style="width: 65%; margin-left: 17%; margin-top: 35px; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
		 			{!! Form::label("title", "Title:") !!}
		 			{!! Form::text("title", null, ['class' => 'form-control']) !!}
				</div>
					<div class="form-group" style="width: 65%; margin-left: 17%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("body", "Body:") !!}
					{!! Form::textarea("body", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="width: 65%; margin-left: 17%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("photo_id", "Featured Image:") !!}
					{!! Form::file("photo_id", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-top: 50px; width:18.45%; display:inline-block; margin-left: 1%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("category_id", "Category:") !!}
					{!! Form::select("category_id[]", $categories, null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-bottom: 20px; margin-top: 30px; margin-left: 17%;">
					{!! Form::submit("Edit Entry", ['class' => 'btn btn-primary']) !!}
				</div>

			    {!! Form::close() !!}

 				{!! Form::open(['method' => 'DELETE', 'action' => ['EntryController@softDestroy', $entry->id]]) !!}
				<div class="form-group" style="margin-bottom: 40px; margin-top: 30px; margin-left: 17%;">
                    {!! Form::submit("Trash Entry", ['class' => 'btn btn-danger']) !!}
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