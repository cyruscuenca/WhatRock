@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>New Entries<p>
			</div>
			<div style="width: 100%; height: auto; display: inline-block; margin-top: 39px">
			@foreach ($entries as $entry)
				<article style=" display: block; width: auto; height: auto; margin-left: 40px; margin-right: 40px; margin-bottom: 39px;">
					<div style=" background: #fff; width: 100%; font-size: 20pt; padding: 15px; margin-left: -3px;"><a style="color: #E455A2;" href="{{ action('EntryController@show', [$entry->id]) }}">{{ $entry->title }}</a></div>
					<p style="margin: 15px;">{{ $entry->body }}</p>
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