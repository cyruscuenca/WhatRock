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
<div class="fixed-width" style="margin-bottom: 125px;">
	<div style="width: 100%; display: inline-block; margin-top: 12pt; margin-bottom: 4pt;">
		<p style="font-weight: bold; color: #455A64; font-size: 18pt;">Entries</p>
	</div>
			@foreach ($entries as $entry)
			<a style="display: block; width: 100%; max-width: 600px;">
				<div style="height: 170pt; width: calc(100% - 200pt); display: inline-block;">
					<div style="margin-left: 20pt; margin-top: -5pt;">
					<p style="font-size: 20pt; color: #607D8B; font-weight: bold;">{{$entry->title}}</p>
					@foreach($entry->category as $category)
					<p style="font-size: 12pt; margin-top: -6pt;">{{$category}}</p>
					@endforeach
					<p class="hide-on-mobile" style="font-size: 12pt; color: #607D8B; padding-bottom: 5pt; padding-top: 7pt;">{{ str_limit($entry->summary, 175) }}</p>
					<a href="{{ action('EntryController@show', [$entry->slug]) }}" style="margin-left: auto; font-size: 12pt;">
						View
					</a>
					</div>
				</div>
				<div class="dynamic-shadow" style="height: 150pt; width: 200pt; border-radius: 3pt; background-image: url(/storage/{{ $entry->photo->photo() }}); background-size: cover; background-position: center; display: inline-block; float: left;">
				</div>
				</a>
		@endforeach

</div>
@include('partials.footer')

@endsection
