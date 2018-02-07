@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>{{$subcategory->name}}</p>
				<p><a href="{{ action('SubcategoryController@edit', [$subcategory->id])}}">Edit</a></p>
			</div>

			@foreach ($subcategory->category as $category)
				<li>{{ $category->name }}</li>
			@endforeach

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>
@endsection