@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>{{$category->name}}</p>
			</div>

			@foreach ($category->blogs as $blog)
				<li>{{ $blog->title }}</li>
			@endforeach

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>
@endsection