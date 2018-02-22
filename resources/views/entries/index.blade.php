@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>New Entries<p>
			</div>
			<div style="width: calc(100% - 40px); margin-left: 40px; margin-right: 40px; margin-top: 40px;">
			<div style="column-width: 275px; column-gap: 24px; column-count: 3; height: auto; display: inline-block;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; margin-bottom: 24px; background: #455A64; display: inline-block; column-break-inside: avoid;">
					<a href="{{ action('EntryController@show', [$entry->id]) }}">
					<div 
					style="display: inline-block; padding-left: 5%; font-size: 13.5pt; height: 28px; margin-top: 2%; margin-bottom: 2%;">{{ $entry->title }}
					<p 
					style="color: #fff; display: inline-block; font-family: 'ubuntu-l';">
					@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif
					</p>
					</div>
					<div style="display: inline-block; padding-right: 1%; margin-bottom: 2%; font-size: 10pt; float: right; margin-top: 3.5%;">
					@foreach ($entry->category as $category)
					<a style="color: red;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
					</div>
					<img style="width: 100%;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="height: auto;">
					</div>
					</a>
				</article>
			@endforeach

			</div>
			</div>
			<div class="text-center" style="margin-bottom: 25px;">
				{!! $entries->links() !!}
			</div>
		</div>
	</div>
@endsection