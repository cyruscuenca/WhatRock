@extends('layouts.app')
@section('content')
<style type="text/css">
ul{
    list-style:none;
    padding-left:0;
}

.fadeInUp{
	animation-duration: .45s;
}
.slideInRight{
  animation-delay: .30s;
  animation-duration: .40s;
}
</style>
	@foreach ($entry->color as $color)
<div class="animated slideInRight" style="width: 275pt; height: 100%; position: fixed; background: {{ $color->hex }}; margin-top: 60px; float: right; color: #fff; right: 0;">
	@endforeach

	<img style="width: 100%; " src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">

	<p style="margin-left: 20pt; margin-top: 10pt; font-size: 24pt; font-weight: bold;">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>

	<ul style="margin-left: 21pt; margin-top: 25pt;">
			<li>
				@foreach ($entry->category as $category)
				<p><strong>Category:</strong> <a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a></p>
				@endforeach
			</li>
			<li style="margin-bottom: 30px;">
				<p><strong>Subcategory:</strong> <a style="color: #fff;">Volcanic Glass</a></p>
			</li>
			<li>
				<p><strong>Mohs scale hardness:</strong> 5–6</p>
			</li>
			<li>
				<p><strong>Optical properties:</strong> Translucent</p>
			</li>
			<li>
				@foreach ($entry->color as $color)
				<p><strong>Color:</strong> <a style="color: #fff;" href="../colors/{{ $color->name }}">{{ $color->name }}</a></p>
				@endforeach
			</li>
			<li>
				@foreach ($entry->lustre as $lustre)
				<p><strong>Lustre:</strong> <a style="color: #fff;" href="../lustres/{{ $lustre->name }}">{{ $lustre->name }}</a></p>
				@endforeach
			</li>
			<li>
				@foreach ($entry->streak as $streak)
				<p><strong>Streak:</strong> <a style="color: #fff;" href="../streaks/{{ $streak->name }}">{{ $streak->name }}</a></p>
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
<article style="margin-top: 50px; max-width: 600pt; width: 50%; margin-right: auto; margin-left: auto;">
	<div>
		@if($entry->photo)
		<div>

		</div>
		@endif
	</div>
  <div style="overflow-y: hidden; margin-top: calc(40px + 50px);">
		<div class="animated fadeInUp" style="background: #fff;">
			<p style="padding: 12pt 16pt;">{{ $entry->summary }}</p>
		</div>
		<div class="animated fadeInUp" style="animation-delay: .005s; background: #fff; margin-top: 40px;">
			<div style="padding: 12pt 16pt;">
			<p style="padding: 12pt 16pt;">{!!html_entity_decode($entry->body)!!}</p>
			<a href="{{ action('EntryController@edit', [$entry->id]) }}" style="">Edit</a>
			</div>
		</div>
  </div>
</article>


@endsection
