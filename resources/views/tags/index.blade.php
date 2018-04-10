@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div style="width: 100%; height: 166pt; border-radius:0 0 3px 3px; background: #455A64; box-shadow: 0 6px 6px rgba(0,0,0,0.10), 0 2px 2px rgba(0,0,0,0.10);">
				<p style="padding-top: 56pt; text-align: center; font-size: 26pt; font-family: 'ubuntu-l'; color: #fff;">New Entries<p>
			</div>
			<div style="column-width: 22%; column-gap: 25px; column-count: 4; height: auto; display: inline-block; margin-top: 25px;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; margin-bottom: 25px; background: #455A64;  box-shadow: 0 6px 6px rgba(0,0,0,0.10), 0 2px 2px rgba(0,0,0,0.10); display: inline-block; column-break-inside: avoid; border-radius: 3px;\">
					<a href="{{ action('EntryController@show', [$entry->id]) }}">
					<img style="width: 100%; border-radius: 3px 3px 0 0;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="display: block; padding-left: 5%; font-size: 18pt; height: 28px; margin-top: 2%; margin-bottom: 2%; color: #ffff; font-family: 'ubuntu-l';">{{ $entry->title }}
					<p style="display: block;">
					@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif
					</p>
					</div>
					<div style="display: block; padding-left: 5.5%; margin-bottom: 3%; font-size: 10.5pt; float: left; margin-top: 1.5%;">
					@foreach ($entry->category as $category)
					<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
					</div>
					</a>
				</article>
			@endforeach
			</div>
			<div class="text-center" style="margin-bottom: 10px;">
				{!! $entries->links() !!}
			</div>
			@include('partials.footer')

		</div>
	</div>
@endsection