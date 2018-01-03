@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>New Entries<p>
			</div>
			<div style="width: 100%; height: auto; display: inline-block; margin-top: 39px">
			@foreach ($blogs as $blog)
				<article style=" display: block; width: 90%; height: auto; margin-left: 39px; margin-bottom: 39px;">
					<div style=" background: #fff; width: 100%; font-size: 20pt; padding: 15px; margin-left: -3px;"><a style="color: #E455A2;" href="{{ action('BlogController@show', [$blog->id]) }}">{{ $blog->title }}</a></div>
					<p style="margin: 15px;">{{ $blog->body }}</p>
				</article>
			@endforeach
			</div>
		</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>
					Categories
					</p>
				</div>
			</div>
	</div>
@endsection