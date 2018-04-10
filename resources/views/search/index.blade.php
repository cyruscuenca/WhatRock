@extends('layouts.app')
@section('content')
<style type="text/css">
.tag{
	background-image: linear-gradient(to right, #fff 0%, #fff 100%);
	background-attachment: fixed;
	margin: 4.5pt 3.5px;
	height: 25pt;
	width: 85pt;
	border-radius: 12.5pt;
	display: inline-block;
}
.sidebar{
}
#sidebar-item-7{
	background: #546E7A;
}
#sidebar-item-7-text{
}
.card{
	min-height: 180pt;
}
.card:hover{
	-webkit-filter: brightness(105%); /* Safari 6.0 - 9.0 */
	filter: brightness(108%);
	transition: filter .25s;
}
.fadeInUp{
	animation-delay: .20;
	animation-duration: .5s;
}
.fadeInDown{
	animation-duration: .50s;
}
input[type=text]:focus{
	background: #fff;
	color: #90A4AE;
	transition: background .2s;
}
a svg:hover .path4 {
	fill: #afbbd2; 
}
.fadeInLeft{
	animation-duration: .36s;
}
</style>
<div style="width: 100%; height: 190pt; margin-top: 60px; background: #37474F;">
	<div style="max-width: 875pt; width: 68%; margin: 0 auto; padding-top: 24pt;">
<p style="margin-left: -2.5pt; font-size: 42pt; font-family: 'Open Sans', sans-serif; color: #fff;"  class="animated fadeInLeft">{{ $term }}</p>
</div>
</div>
<div style="max-width: 875pt; width: 68%; margin-left: auto; margin-right: auto; padding-bottom: 12.5%; ">
	<div style="column-width: 22%; column-gap: 15pt; column-count: 4; height: auto; display: inline-block; overflow-y: hidden; padding-top: 15pt;">
		@foreach ($entries as $entry)
		@foreach ($entry->color as $color)
		<article class="card animated fadeInUp" style="border-radius: 3pt 3pt 1.85pt 1.85pt; width: 100%; margin-bottom: 15pt; background: {{ $color->hex }}; display: inline-block; break-inside: avoid;">
			<a href="{{ action('EntryController@show', [$entry->id]) }}">
				<div style="height: 155pt; width: 100%; border-radius: 1.85pt 1.85pt 0 0; background-image: url(/storage/{{ $entry->photo->photo() }}); background-size: cover; background-position: center;">
					
				</div>
				<div style="display: block; letter-spacing: .25px; padding-left: 6%; font-size: 20pt; height: 28px; margin-top: 3.5%; margin-bottom: 3%; color: #fff; font-family: 'Open Sans', sans-serif;">
					{{ $entry->title }}
					<p style=" display: inline-block; font-family: 'Open Sans', sans-serif; letter-spacing: .25px;">
						@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif
					</p>
				</div>
				<div style="display: block; padding-left: 6.5%; font-family: 'Open Sans', sans-serif; margin-bottom: 3%; font-size: 11pt; float: left; margin-top: .25%;">
					@foreach ($entry->category as $category)
					<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
				</div>
				<div style="width: 100%; height: 58pt; padding-top: 30pt; padding-right: 14pt;">
					<a style="color: #fff; font-family: 'Roboto'; float: right; font-size: 12.5pt;">PIN</a>
				</div>
			</a>
		</article>
		@endforeach
		@endforeach
	</div>
</div>

	<div class="text-center">
		{!! $entries->links() !!}
	</div>
@endsection

