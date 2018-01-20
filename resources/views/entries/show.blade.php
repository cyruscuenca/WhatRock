@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p style="margin-bottom: 40px;">{{ $entry->title }}</p>

				<a href="{{ action('EntryController@edit', [$entry->id]) }}"><div style="margin-left: 50px; margin-top: 35px;" class="button">
					<p style="font-size: 12pt; margin-top: -11.5px;">Edit</p>
				</div></a>
				<a href=""><div style="margin-left: 25px; margin-top: 35px;" class="button">
					<p style="font-size: 12pt; margin-top: -11.5px;">History</p>
				</div></a>
			</div>
				<article style="margin-top: 130px; width: 50%; margin-left: 52px;">
					<p>{{ $entry->body }}</p>
					@foreach ($entry->category as $category)
						<p>{{ $category->name }}</p>
					@endforeach

				</article>
	</div>
			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Contributers</p>
				</div>
			</div>
</div>


@endsection