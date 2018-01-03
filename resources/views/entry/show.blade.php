@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p style="margin-bottom: 40px;">{{ $blog->title }}</p>

				<a href="{{ action('BlogController@edit', [$blog->id]) }}"><div style="margin-left: 52px; margin-top: 35px;" class="button pink-gradient">
					<p style="font-size: 12pt; margin-top: -11.5px;">Edit</p>
				</div></a>
			</div>
				<article style="margin-top: 130px; width: 50%; margin-left: 52px;">
					<p>{{ $blog->body }}</p>
				</article>
	</div>
			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
</div>


@endsection