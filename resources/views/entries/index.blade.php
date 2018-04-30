@extends('layouts.app')
@section('content')
<div class="body-wrapper">
	<div class="body">
		<div style="width: 100%; height: 190pt; margin-top: 60px; background: #37474F;">
		</div>
		<div style="max-width: 875pt; width: 68%; margin-left: auto; margin-right: auto; padding-bottom: 12.5%; ">
			<div style="margin-top: 15pt; column-width: 22%; column-gap: 15pt; column-count: 4; height: auto; display: inline-block; overflow-y: hidden;;">
				@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; margin-bottom: 15pt; background: #455A64;  box-shadow: 0 6px 6px rgba(0,0,0,0.10), 0 2px 2px rgba(0,0,0,0.10); display: inline-block; column-break-inside: avoid; border-radius: 3px;\">
					<a href="{{ action('EntryController@show', [$entry->id]) }}">
						<img style="width: 100%; border-radius: 3px 3px 0 0;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
						<div style="display: block; padding-left: 5%; font-size: 18pt; height: 28px; margin-top: 2%; margin-bottom: 2%; color: #ffff; font-family: 'ubuntu-l';">{{ $entry->title }}
							<p style="display: block;">
								@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif
							</p>
						</div>
						<div style="display: block; padding-left: 5.5%; margin-bottom: 3%; font-size: 10.5pt; float: left; margin-top: 1.5%;">
							@foreach ($categories as $category)
							<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
							@endforeach
						</div>
					</a>
				</article>
				@endforeach
			</div>
		</div>
		<div class="text-center" style="margin-bottom: 10px;">
			{!! $entries->links() !!}
		</div>
	</div>
</div>
@endsection
