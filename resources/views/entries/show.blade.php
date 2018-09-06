@extends('layouts.app')
@section('content')
<title>{{ $entry->title }} | WhatRock</title>
<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
<style type="text/css">
.siema div{
	height: 100%;
	width: 100%;
}
.siema div img{
	height: 100%;
	margin: 0 auto;
	display: block;
}
ul{
	list-style:none;
	padding-left:0;
    font-family: 'Open Sans', serif;
}

.fadeInUp{
	animation-duration: .45s;
}
.slideInRight{
	animation-delay: .40s;
	animation-duration: .40s;
}
a svg:hover .path4 {
	fill: #757575;
}
.path4{
	fill: #9E9E9E;
}
</style>
<style>
.accordion {
	background: none;
	color: #455A64;
	font-weight: bold;
	cursor: pointer;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	background:none;
	outline:none;
	padding:0;
	margin-top: 13pt;
}
.accordion:active {
	background:none;
	outline:none;
	padding:0;
}
.panel {
	display: none;
	overflow: hidden;
	background: none;
	box-shadow: none;
}
.entry-text {
	line-height: 200%;
	color: #37474F;
    font-family: 'Open Sans', serif;
    font-size: 14pt;
}
.entry-caption{
	line-height: 200%;
	color: #37474F;
    font-family: 'Open Sans', serif;
    font-size: 20pt;
    font-weight: bold;
}
</style>
<div style="z-index: 1; position: fixed; width: 300px; height: 100%; right: 0; background: #BDBDBD;">
	<p style="color: #424242; margin-left: 20pt; margin-top: 20px; font-size: 24pt; font-weight: bold; font-family: 'Open Sans', serif;">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>
	<ul style="margin-left: 21pt; margin-top: 16px; color: #424242;">
		<li>@foreach ($entry->category as $category)<p style="font-size: 11pt;"><strong>Category:</strong><a href="../categories/{{ $category }}"> {{ $category }}</a></p>@endforeach</li>
		<li style="margin-bottom: 30px;"><p style="font-size: 11pt;"><strong>Subcategory:</strong><a> Volcanic Glass</a></p></li>
		<li><p style="font-size: 11pt;"><strong>Mohs scale hardness:</strong> 5–6</p></li>
		<li><p style="font-size: 11pt;"><strong>Optical properties:</strong> Translucent</p></li>
		<li>@foreach ($entry->color as $color)<p style="font-size: 11pt;"><strong>Color:</strong> <a href="../colors/{{ $color }}">{{ $color }}</a></p>@endforeach</li>
		<li>@foreach ($entry->lustre as $lustre)<p style="font-size: 11pt;"><strong>Lustre:</strong> <a href="../lustres/{{ $lustre }}">{{ $lustre }}</a></p>@endforeach
		</li>
		<li><p style="font-size: 11pt;"><strong>Streak:</strong> <a href="../streaks/{{ $entry->streak }}">{{ $entry->streak }}</a></p></li>
		<li><p style="font-size: 11pt;"><strong>Fracture:</strong> Conchoidal</p></li>
		<li><p style="font-size: 11pt;"><strong>Specific gravity:</strong> c. 2.4</p></li>
		<li style="font-size: 11pt; margin-top: 24pt;"><strong>Last updated: </strong>{{ $entry->updated_at->diffForHumans() }}</li>
	</ul>
</div>
<div style="overflow: hidden; height: 385px; width: calc(100% - 300px); float: left; background: #616161;">
	<div style="background-image: url(/storage/{{ $entry->photo->photo() }}); height: 100%; width: 750px; background-size: cover; background-position: center; float: right; margin-right: 150px;"></div>
</div>
<div style="width: calc(100% - 300px); display: inline-block;">
	<article style="width: 750px; float: right; margin-right: 150px;">
		<div style="overflow-y: hidden; margin-top: 20px;">
			<p class="entry-caption">Summary</p>
			<p class="entry-text">{{ $entry->summary }}</p>
			<p class="entry-caption">Body</p>
				<div class="entry-text">{!!html_entity_decode($entry->body)!!}</div>
				<a class="entry-text" style="color: #2EBEF2;" href="{{ action('EntryController@edit', [$entry->id]) }}">Edit</a>
			<button class="accordion entry-caption"">Contributers <img style="float: right; height: 30pt;" src="{{asset('images/down-arrow-dark.svg')}}"></button>
			<div class="panel" style="margin-top: 10pt;">
				<div style="padding-top: 10pt;">
					<div style="width: 34pt; height: 34pt; border-radius: 50%; background-image: linear-gradient(20deg, #43e97b 0%, #38f9d7 100%); display: inline-block;">
						<p style="font-size: 16pt; padding-top: 4pt; padding-left: 11.5pt; font-weight: bold; color: #fff;" class="initial">{{ substr($entry->user->name, 0, 1) }}</p>
					</div>
					<p class="entry-text" style="display: inline-block; margin-left: 10pt; font-weight: bold;">{{$entry->user->name}}</p>
				</div>
			</div>
			<div class="animated fadeInUp" style="animation-delay: .18s; width: 100%; height: 30pt; margin-top: 30pt; margin-bottom:28pt;">
				<div style="width: 30pt; height: 30pt; margin-left: calc(51% - 28pt); display: block;">
					<a href="{{ url('/') }}">
						<?xml version="1.0" encoding="UTF-8" standalone="no"?>
						<svg
						height="30pt" width="30pt"
						sodipodi:docname="favicon.svg"
						id="svg10"
						preserveAspectRatio="xMidYMid meet"
						viewBox="0 0 250.000000 250.000000"
						height="250.000000pt"
						width="250.000000pt"
						version="1.0"
						inkscape:version="0.92.2 (5c3e80d, 2017-08-06)">
						<defs
						id="defs14" />
						<sodipodi:namedview
						inkscape:window-height="1020"
						inkscape:window-width="1920"
						inkscape:pageshadow="2"
						inkscape:pageopacity="0"
						guidetolerance="10"
						gridtolerance="10"
						objecttolerance="10"
						borderopacity="1"
						bordercolor="#666666"
						pagecolor="#ffffff" />
						<metadata
						id="metadata2">
						<rdf:RDF>
						<cc:Work
						rdf:about="">
						<dc:format>image/svg+xml</dc:format>
						<dc:type
						rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
					</cc:Work>
				</rdf:RDF>
			</metadata>
			<g
			transform="translate(0.000000,250.000000) scale(0.100000,-0.100000)"
			stroke="none"
			id="g8">
			<path
			d="M1010 2445 c-41 -12 -140 -41 -220 -64 -80 -22 -171 -49 -202 -58 -32 -9 -58 -19 -58 -23 0 -4 -21 -13 -47 -20 -82 -21 -208 -61 -220 -68 -7 -4 -21 -44 -31 -87 -11 -44 -38 -154 -61 -245 -59 -233 -60 -239 -50 -245 5 -3 21 1 37 9 16 8 65 29 108 46 43 18 81 35 84 39 3 3 17 11 31 18 l26 11 18 -89 c10 -49 21 -89 25 -89 3 0 12 -28 18 -62 7 -35 15 -74 18 -87 6 -22 4 -21 -42 12 -27 20 -67 55 -89 78 -35 38 -40 41 -49 25 -6 -10 -41 -50 -78 -89 -38 -39 -68 -74 -68 -79 0 -9 11 -20 290 -288 100 -96 241 -233 313 -304 147 -145 143 -144 166 -35 7 35 24 106 36 158 l22 93 13 -46 c7 -25 17 -46 21 -46 5 0 9 -6 9 -13 0 -21 161 -521 170 -527 4 -3 18 -39 30 -80 45 -147 70 -225 79 -239 8 -12 74 -4 421 50 226 35 416 67 421 70 6 3 21 55 34 115 13 60 40 183 60 274 66 298 85 392 85 415 0 13 4 25 9 27 6 2 20 54 33 115 l23 113 -20 37 c-11 20 -25 41 -30 47 -6 6 -20 29 -31 51 -56 112 -157 290 -169 299 -8 6 -21 27 -29 46 -8 20 -37 75 -64 122 -28 48 -53 96 -57 107 -11 37 -47 66 -140 116 -49 27 -92 52 -95 55 -3 4 -63 37 -135 75 -136 70 -197 105 -205 115 -3 4 -48 28 -100 55 -52 26 -124 63 -160 82 -36 18 -67 32 -70 32 -3 -1 -39 -11 -80 -24z"
			class="path4"
			style="fill-opacity:1" />
			<path
			d="M320 877 c0 -7 16 -28 35 -47 19 -19 35 -38 35 -43 0 -6 38 -47 85 -93 47 -45 85 -86 85 -90 0 -9 71 -88 86 -94 6 -3 38 -36 70 -75 33 -38 88 -99 124 -136 36 -37 90 -96 120 -132 54 -64 88 -93 97 -84 6 6 -19 334 -26 345 -8 12 -176 123 -223 147 -21 11 -38 22 -38 26 0 7 -84 62 -183 120 -32 19 -75 49 -95 66 -21 18 -42 33 -47 33 -6 0 -34 16 -62 35 -58 39 -63 41 -63 22z"
			class="path4"
			style="fill-opacity:1" />
		</g>
	</svg>
</a>
</div>
</div>
</div>
</article>
</div>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}
</script>
<script src="{{asset('js/siema.js')}}"></script>
<script>
  new Siema();
</script>

@endsection
