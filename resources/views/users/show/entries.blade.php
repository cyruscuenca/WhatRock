@extends('layouts.app')
@section('content')
@include('partials.profile-row')
<style type="text/css">
.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5pt; border: 1pt solid #B0BEC5; height: 32pt; width: 32pt; color: #455A64; font-size: 12pt;}

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
	background: #455A64;
	border: 1pt solid #455A64;
}
.card{
	height: 268pt;
	transition: filter .25s;
	margin-bottom: 18pt;
	break-inside: avoid-column;
	display: block;
}
.card:hover{
	-webkit-filter: brightness(105%); /* Safari 6.0 - 9.0 */
	filter: brightness(108%);
	transition: filter .25s;
}
.card-container{
	-moz-column-width: 205pt ;
	-webkit-column-width: 205pt;
	column-width: 205pt;
	column-count: 3;
	column-gap: 18pt;
	width: calc(100% - 235pt);
	display: inline-block;

}
.user-stats-container{
	float: right;
	display: inline-block;
	width: calc(235pt - 18pt);
	border-radius: 2pt;
	height: 138pt;
	margin-top: -30.5pt;
}
.user-stats{
	width: 100%;
	background: #CFD8DC;
	border-radius: 2pt;
	height: 100%;
	list-style: none;
	color: #455A64;
	font-weight: bold;
	font-size: 12pt;
}
.user-stats ul{
	padding-top: 17pt;
	margin-left: -8pt;
}
.user-stats li{
	margin-bottom: 14pt;
	width: 95%;
}
</style>
<div class="fixed-width" style="margin: 18pt auto;">
	<div style="width: calc(100% - 225pt); display: inline-block;">
		<p style="font-weight: bold; color: #455A64; font-size: 14pt;">Entries</p>
	</div>
	<div class="card-container">
			@foreach ($entries as $entry)
			<a href="{{ action('EntryController@show', [$entry->slug]) }}">
			<article class="card"  style="border-radius: 2pt 2pt 2pt 2pt; background: @foreach ($entry->hex as $hex) {{$hex}} @endforeach;color: {{$entry->getTextcolorAttribute()}};">
				<div style="height: 200pt; width: 100%; border-radius: 1.85pt 1.85pt 0 0; background-image: url(/storage/{{ $entry->photo->photo() }}); background-size: cover; background-position: center;"></div>

					<p style="margin-left: 15pt; margin-top: 8pt; font-size: 17.5pt; height: 20pt; width: 100%; float: left; color: {{$entry->getTextcolorAttribute()}};">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>

					@foreach ($entry->category as $category)

					<a style="margin-left: 15pt; height: 35pt; width: 100%; font-size: 12pt; float: left; color: {{$entry->getTextcolorAttribute()}};" href="../categories/{{ $category }}">{{ $category }}</a>
					@endforeach
		</article>
		</a>
		@endforeach
	</div>
	<div class="user-stats-container">
		<p style="font-weight: bold; color: #455A64; font-size: 14pt;">Quick info</p>
		<div class="user-stats">
			<ul>
				<li><img src="{{asset('images/entry-dark.svg')}}" style="margin-right: 18pt;">Entry count: 28</li>
				<li><img src="{{asset('images/edu-dark.svg')}}" style="margin-right: 18pt;">Lesson count: 0</li>
				<li><img src="{{asset('images/location-dark.svg')}}" style="margin-right: 18pt; float: left;"><div style="float: right; width: 149.2pt; height: 20pt">Santa Rosa, California USA</div></li>
			</ul>
		</div>
	</div>
		<div class="text-center" style="padding-right: 235pt; width: 100%;">
			{!! $entries->links() !!}
		</div>
</div>
@include('partials.footer')

@endsection
