@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Edit Subcategory</p>
			</div>

				{!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}


				<div class="form-group" style="width: 65%; margin-left: 17%; margin-top: 35px; font-family: 'ubuntu'; font-size: 14pt; color: grey;">
		 			{!! Form::label("name", "Name:") !!}
		 			{!! Form::text("name", null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group" style="margin-bottom: 20px; margin-top: 30px; margin-left: 17%;">
					{!! Form::submit("Edit Subcategory", ['class' => 'btn btn-primary']) !!}
				</div>

			    {!! Form::close() !!}

			    {!! Form::open(['method' => 'DELETE', 'action' => ['SubcategoryController@destroy', $subcategory->id]]) !!}
			    {!! Form::submit("Delete Subcategory", ['class' => 'btn btn-danger']) !!}
			    {!! Form::close() !!}

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>

		</div>
@endsection