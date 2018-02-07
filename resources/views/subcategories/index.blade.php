@extends('layouts.app')
@section('content')

	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Subcategories</p>
			</div>
			<div style="margin-top: 45px;">
			@foreach ($subcategories as $subcategory)
				<li style="list-style-type: none; margin-left: 50px; margin-top: 10px; font-size: 12pt;"><a style="color: grey; font-family: 'ubuntu-l';" href="{{ route('subcategories.show', $subcategory->slug) }}" >{{ $subcategory->name }}</a></li>
			@endforeach
			</div>

			</div>

			<div class="sidebar">
				<div class="title-bar-thin">
					<p>Categories</p>
				</div>
			</div>
	</div>
@endsection