@extends('layouts.app')
@section('content')
	<style>
		.quickinfo{
			border: 1px solid #ccc;
			border-radius: 1px;
			width: 265px;
			float: right;
		}

	</style>
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>
			</div>
				<article style="margin-top: 50px; width: auto; margin-right: 52px;  margin-left: 52px;">
					<div>
						@if($entry->photo)
							<div>
								<img style="width: 520px; border: 1px solid #ccc; border-radius: 1px;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
							</div>
						@endif
					</div>
					<div style="margin-top: 50px;">

					<div style="float: left; width: calc(100% - 305px);">
					<p>{{ $entry->summary }}</p>
					<p>{{ $entry->body }}</p>
					<a href="{{ action('EntryController@edit', [$entry->id]) }}" style="margin-bottom: 50px; display: block;">Edit</a>
					</div>
					<div class="quickinfo">
						<div style="border-bottom: 1px solid #ccc; height: 45px;">
							<p style="text-align: center; padding-top: 10px; font-size: 12pt;">Quick Information</p>
						</div>
						<ul style="margin-top: 30px; margin-bottom: 30px;">
							<li>
							@foreach ($entry->category as $category)
								<p><strong>Category:</strong> <a href="../categories/{{ $category->name }}">{{ $category->name }}</a></p>
							@endforeach
							</li>
							<li style="margin-bottom: 30px;">
								<p><strong>Subcategory:</strong> <a>Volcanic Glass</a></p>
							</li>
							<li>
								<p><strong>Mohs scale hardness:</strong> 5–6</p>
							</li>
							<li>
								<p><strong>Optical properties:</strong> Translucent</p>
							</li>
							<li>
								<p><strong>Color:</strong> Black, Black-green</p>
							</li>
							<li>
								<p><strong>Luster:</strong> Vitreous</p>
							</li>
							<li>
								<p><strong>Fracture:</strong> Conchoidal</p>
							</li>
							<li>
								<p><strong>Specific gravity:</strong> c. 2.4</p>
							</li>
						</ul>
					</div>
					</div>
				</article>
	</div>
			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Contributers</p>
				</div>	
			</div>
</div>


@endsection