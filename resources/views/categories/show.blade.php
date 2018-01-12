@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>{{$category->name}}</p>
				<p><a href="{{ action('CategoryController@edit', [$category->id])}}">Edit</a></p>
			</div>

			@foreach ($category->entry as $entry)
				<li>{{ $entry->title }}</li>
			@endforeach

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>
@endsection