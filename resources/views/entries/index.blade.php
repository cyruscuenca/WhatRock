@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>New Entries<p>
			</div>
			<div style="width: auto; margin-left: 50px; margin-right: 50px; margin-top: 50px;">
			<div style="column-width: 230px; column-gap: 30px; column-count: 4; height: auto; display: inline-block;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; border: 1px solid #ccc; border-radius: 2px; margin-bottom: 30px; background: #fff; display: inline-block; column-break-inside: avoid;">
					<a href="{{ action('EntryController@show', [$entry->id]) }}" style="color: grey;">
					<img style="width: 100%;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="height: auto;">
					<div style="padding-left: 5%; font-size: 13pt; height: 30px; margin-top: 4.5%;">{{ $entry->title }}<p style="display: inline-block; font-weight: lighter;">@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif</p></div>
					<div>
					<div style="padding-left: 5%; margin-bottom: 4%;">
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