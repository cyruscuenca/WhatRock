@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>New Entries<p>
			</div>
			<div style="width: calc(100% - 40px); margin-left: 40px; margin-right: 40px; margin-top: 40px;">
			<div style="column-width: 232px; column-gap: 24px; column-count: 4; height: auto; display: inline-block;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 24px; background: #fff; display: inline-block; column-break-inside: avoid;">
					<a href="{{ action('EntryController@show', [$entry->id]) }}" style="color: grey;">
					<img style="width: 100%; border-radius: 2px 2px 0 0;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="height: auto;">
					<div style="padding-left: 6%; font-size: 13.5pt; height: 28px; margin-top: 3.5%;">{{ $entry->title }}<p style="display: inline-block; font-family: 'ubuntu-l';">@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif</p>
					</div>
					</div>
					<div style="padding-left: 6.4%; margin-bottom: 3.5%; font-size: 10pt;">
					@foreach ($entry->category as $category)
					<a href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
					</div>
					</a>
				</article>
			@endforeach
			</div>
			</div>
		</div>

			@include('partials.category-sidebar')
	</div>
@endsection