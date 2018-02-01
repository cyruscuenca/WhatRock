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
					<div>
						@if($entry->photo)
							<div>
								<img style="width: 520px;" src="{{ asset($entry->photo->photo()) }}" alt="Photo of {{$entry->title}}">
							</div>
						@endif
					</div>
					<p>{{ $entry->body }}</p>
					<div>
						<div>
							<p>Quick Information</p>
						</div>
						<ul>
							<li>
							@foreach ($entry->category as $category)
								<p>Category: {{ $category->name }}</p>
							@endforeach
							</li>
							<li>
								<p>Subcategory: Volcanic Glass</p>
							</li>
							<li>
								<p>Mohs scale hardness: 5–6</p>
							</li>
							<li>
								<p>Optical properties: Translucent</p>
							</li>
							<li>
								<p>Color: Black, Black-green</p>
							</li>
							<li>
								<p>Luster: Vitreous</p>
							</li>
							<li>
								<p>Fracture: Conchoidal</p>
							</li>
							<li>
								<p>Specific gravity: c. 2.4</p>
							</li>
						</ul>
					<div>
				</article>
	</div>
			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Contributers</p>
				</div>
			</div>
</div>


@endsection