@extends('layouts.app')
@section('content')
<style type="text/css">
.quickinfo{
	border: 1px solid #ccc;
	border-radius: 1px;
	width: 265px;
	float: right;
}
ul{
    list-style:none;
    padding-left:0;	
}
</style>

<div style="width: 22%; height: 100%; position: fixed; background: #fff; margin-top: 60px; box-shadow: 0 3px 5px rgba(0,0,0,0.14);">
	<img style="width: 100%; " src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">

	<p style="margin-left: 20pt; margin-top: 10pt; font-size: 24pt; font-weight: bold;">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>

	<ul style="margin-left: 21pt; margin-top: 25pt;">
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
				@foreach ($entry->color as $color)
				<p><strong>Color:</strong> <a href="../colors/{{ $color->name }}">{{ $color->name }}</a></p>
				@endforeach
			</li>
			<li>
				@foreach ($entry->lustre as $lustre)
				<p><strong>Lustre:</strong> <a href="../lustres/{{ $lustre->name }}">{{ $lustre->name }}</a></p>
				@endforeach
			</li>
			<li>
				@foreach ($entry->streak as $streak)
				<p><strong>Streak:</strong> <a href="../streaks/{{ $streak->name }}">{{ $streak->name }}</a></p>
				@endforeach
			</li>
			<li>
				<p><strong>Fracture:</strong> Conchoidal</p>
			</li>
			<li>
				<p><strong>Specific gravity:</strong> c. 2.4</p>
			</li>
		</ul>
</div>
<article style="margin-top: 50px; width: auto; margin-right: 52px;  margin-left: 52px;">
	<div>
		@if($entry->photo)
		<div>

		</div>
		@endif
	</div>
		<div style="width: 45%; background: #fff; margin-left: 25%; margin-top: calc(40px + 50px); box-shadow: 0 2px 4px rgba(0,0,0,0.13); border-radius: 3px;">
			<p style="padding: 10pt 15pt;">{{ $entry->summary }}</p>
		</div>
		<div style="width: 45%; background: #fff; margin-left: 25%; margin-top: 40px; box-shadow: 0 2px 4px rgba(0,0,0,0.13); border-radius: 3px; ">
			<div style="padding: 10pt 15pt;">
			<p style="">{!!html_entity_decode($entry->body)!!}</p>
			<a href="{{ action('EntryController@edit', [$entry->id]) }}" style="margin-bottom: 50px; display: block;">Edit</a>
			</div>
		</div>
</article>


@endsection