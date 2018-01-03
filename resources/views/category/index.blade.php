@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Categories</p>
			</div>

			@foreach ($category as $category)
				<li><a href="{{ route('category.show', $category->slug) }}" >{{ $category->name }}</a></li>
			@endforeach

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>
@endsection