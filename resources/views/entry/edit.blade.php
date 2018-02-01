@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Edit an Entry</p>
			</div>

				{!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id]]) !!}


				<div class="form-group" style="width: 65%; margin-left: 17%; margin-top: 35px; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
		 			{!! Form::label("title", "Title:") !!}
		 			{!! Form::text("title", null, ['class' => 'form-control']) !!}
				</div>
					<div class="form-group" style="width: 65%; margin-left: 17%; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
					{!! Form::label("body", "Body:") !!}
					{!! Form::textarea("body", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-bottom: 20px; margin-top: 30px; margin-left: 17%;">
					{!! Form::submit("Edit Entry", ['class' => 'btn btn-primary']) !!}
				</div>

			    {!! Form::close() !!}

 				{!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@softDestroy', $blog->id]]) !!}
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