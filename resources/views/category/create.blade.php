@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Create an Category</p>
			</div>

				{!! Form::open(['method' => 'POST', 'action' => 'CategoryController@store']) !!}

				<div class="form-group" style="margin-top: 50px; width: 55%; margin-bottom: 30px; margin-left: 17%; font-family: 'ubuntu-l'; font-size: 13pt; color: grey;">
		 			{!! Form::label("name", "Name:") !!}
		 			{!! Form::text("name", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-bottom: 40px; margin-top: 30px; margin-left: 12.6%;">
					{!! Form::submit("Create Category", ['class' => 'btn-primary']) !!}
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