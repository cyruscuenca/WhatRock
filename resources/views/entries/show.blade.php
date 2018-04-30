@extends('layouts.app')
@section('content')
    <title>{{ $entry->title }} | WhatRock</title>


<style type="text/css">
ul{
	list-style:none;
	padding-left:0;
}

.fadeInUp{
	animation-duration: .45s;
}
.slideInRight{
	animation-delay: .40s;
	animation-duration: .40s;
}
a svg:hover .path4 {
    fill: #afbbd2; 
}
.path4{
	fill: #cfd8e4;
}
</style>
@foreach ($entry->color as $color)
<div class="animated slideInRight" style="width: 275pt; height: 100%; position: fixed; background: {{ $color->hex }}; margin-top: 60px; float: right; color: #fff; right: 0;">
	@endforeach

	<img style="width: 100%; " src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">

	<p style="color: #fff; padding-top: 10pt; margin-left: 20pt; margin-top: 12pt;  font-size: 24pt; font-weight: bold;">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>

	<ul style="margin-left: 21pt; margin-top: 22pt; ">
		<li>
			@foreach ($entry->category as $category)
			<p style="color: #fff; font-size: 11pt;"><strong>Category:</strong> <a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a></p>
			@endforeach
		</li>
		<li style="margin-bottom: 30px;">
			<p style="color: #fff; font-size: 11pt;"><strong>Subcategory:</strong> <a style="color: #fff;">Volcanic Glass</a></p>
		</li>
		<li>
			<p style="color: #fff; font-size: 11pt;"><strong>Mohs scale hardness:</strong> 5–6</p>
		</li>
		<li>
			<p style="color: #fff; font-size: 11pt;"><strong>Optical properties:</strong> Translucent</p>
		</li>
		<li>
			@foreach ($entry->color as $color)
			<p style="color: #fff; font-size: 11pt;"><strong>Color:</strong> <a style="color: #fff;" href="../colors/{{ $color->name }}">{{ $color->name }}</a></p>
			@endforeach
		</li>
		<li>
			@foreach ($entry->lustre as $lustre)
			<p style="color: #fff; font-size: 11pt;"><strong>Lustre:</strong> <a style="color: #fff;" href="../lustres/{{ $lustre->name }}">{{ $lustre->name }}</a></p>
			@endforeach
		</li>
		<li>
			@foreach ($entry->streak as $streak)
			<p style="color: #fff; font-size: 11pt;"><strong>Streak:</strong> <a style="color: #fff;" href="../streaks/{{ $streak->name }}">{{ $streak->name }}</a></p>
			@endforeach
		</li>
		<li>
			<p style="color: #fff; font-size: 11pt;"><strong>Fracture:</strong> Conchoidal</p>
		</li>
		<li>
			<p style="color: #fff; font-size: 11pt;"><strong>Specific gravity:</strong> c. 2.4</p>
		</li>
	</ul>
</div>
<article style="margin-top: 50px; max-width: 575pt; width: 55%; margin-right: auto; margin-left: auto;">
	<div>
		@if($entry->photo)
		<div>
			
		</div>
		@endif
	</div>
	<div style="overflow-y: hidden; margin-top: calc(40px + 50px);">
		<div class="animated fadeInUp" style="background: #fff; border-radius: 2pt;">
			<p class="text" style="padding: 12pt 16pt;">{{ $entry->summary }}</p>
		</div>
		<div class="animated fadeInUp" style="animation-delay: .006s; border-radius: 2pt; background: #fff; margin-top: 40px;">
			<div style="margin: 16pt; padding-top: 10pt; padding-bottom: 10pt;">
				<p class="text">{!!html_entity_decode($entry->body)!!}</p>
				<a href="{{ action('EntryController@edit', [$entry->id]) }}">Edit</a>
			</div>
		</div>
		<div class="animated fadeInUp" style="animation-delay: .15s; width: 100%; height: 30pt; margin-top: 30pt; margin-bottom:28pt;">
			<div style="width: 30pt; height: 30pt; margin-left: calc(51% - 28pt); display: block;">
				<a href="{{ url('/') }}">
					<?xml version="1.0" encoding="UTF-8" standalone="no"?>
					<svg  
					height="30pt" width="30pt"
					xmlns:dc="http://purl.org/dc/elements/1.1/"
					xmlns:cc="http://creativecommons.org/ns#"
					xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
					xmlns:svg="http://www.w3.org/2000/svg"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
					xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
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
					inkscape:current-layer="svg10"
					inkscape:window-maximized="1"
					inkscape:window-y="25"
					inkscape:window-x="-9"
					inkscape:cy="166.66667"
					inkscape:cx="166.66667"
					inkscape:zoom="0.708"
					showgrid="false"
					id="namedview12"
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
					Created by potrace 1.15, written by Peter Selinger 2001-2017
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
@endsection
