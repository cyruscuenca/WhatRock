@extends('layouts.app')
@section('content')
<style type="text/css">
.welcome-card{
	height: 76%;
	background: #ECEFF1;
	width: 200pt;
	display: inline-block;
	border-radius: 2.5pt;
	margin-top: 40pt;
}
.welcome-card-image{
	width: 100%;
	height: 64%;
	background: #455A64;
}
.entry-cont {
	text-align: center;
	margin-bottom: 55pt;
}
.entry-cont article {
	display: inline-block;
	width: 250pt;
	text-align: left;
	margin: 0 12pt;
	border-radius: 3px;
	margin-top: 16pt;
	background: #F5F5F5;
	margin-bottom: 14pt;
}
.entry-cont article img {
	border-radius: 2px 2px 0 0;
}
.entry-cont article h2{
	font-weight: bold;
	color: #424242;
	padding-bottom: 6pt;
	font-family: 'Open Sans';
	font-size: 20pt;
	margin-left: 12pt;
}
.entry-cont article p{
	color: #424242;
	line-height: 200%;
	font-family: 'Open Sans';
	margin: 0 14pt;
	margin-bottom: 14pt;
}
.extras-cont {
	text-align: center;
	margin-top: -36pt;
}
.extras-cont article {
	display: inline-block;
	width: 250pt;
	text-align: left;
	margin: 0 12pt;
	border-radius: 3px;
	margin-top: 16pt;
	background: #F5F5F5;
}
.extras-cont article img {
	border-radius: 2px 2px 0 0;
}
.extras-cont article h2{
	font-weight: bold;
	color: #424242;
	padding-bottom: 6pt;
	font-family: 'Open Sans';
	font-size: 20pt;
	margin-left: 12pt;
}
.extras-cont article p{
	color: #424242;
	line-height: 200%;
	font-family: 'Open Sans';
	margin: 0 14pt;
	margin-bottom: 14pt;
}
.call-to-act-cont {
	width: 400pt;
	display: table-cell;
	vertical-align: middle;
}
.call-to-act-cont a{
	display: block;
	width: 225pt;
	margin: 0 auto;
	margin-top: 5pt;
}
.call-to-act-cont a:nth-child(3){
	background: #424242;
}
.call-to-act-cont a:nth-child(4), .call-to-act-cont a:nth-child(5){
	background: #F5F5F5;
	color: #424242;
}
</style>
<div style="width: 100%; height: calc(100vh - 60px);">
	<div class="fixed-width" style="display: table; height: calc(100% - 36pt); margin-top: 18pt; border-radius: 2px; border-radius: 3px; background-image: url({{asset('images/arid-canyon-cliff-965159.jpg')}}); background-size: cover; background-position: center; text-align: center;">
	<div class="call-to-act-cont">
	<a style="margin-top: -35pt;" href="{{ route('www/index') }}">
						<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg height="75pt" width="75pt" sodipodi:docname="favicon.svg"id="svg10"preserveAspectRatio="xMidYMid meet"viewBox="0 0 250.000000 250.000000"height="250.000000pt"width="250.000000pt"version="1.0"inkscape:version="0.92.2 (5c3e80d, 2017-08-06)"> <defs id="defs14" /> <sodipodi:namedview inkscape:window-height="1020"inkscape:window-width="1920"inkscape:pageshadow="2"inkscape:pageopacity="0"guidetolerance="10"gridtolerance="10"objecttolerance="10"borderopacity="1"bordercolor="#666666"pagecolor="#ffffff" /> <metadata id="metadata2"> <rdf:RDF> <cc:Work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" /> </cc:Work> </rdf:RDF> </metadata> <g transform="translate(0.000000,250.000000) scale(0.100000,-0.100000)"stroke="none"id="g8"> <path d="M1010 2445 c-41 -12 -140 -41 -220 -64 -80 -22 -171 -49 -202 -58 -32 -9 -58 -19 -58 -23 0 -4 -21 -13 -47 -20 -82 -21 -208 -61 -220 -68 -7 -4 -21 -44 -31 -87 -11 -44 -38 -154 -61 -245 -59 -233 -60 -239 -50 -245 5 -3 21 1 37 9 16 8 65 29 108 46 43 18 81 35 84 39 3 3 17 11 31 18 l26 11 18 -89 c10 -49 21 -89 25 -89 3 0 12 -28 18 -62 7 -35 15 -74 18 -87 6 -22 4 -21 -42 12 -27 20 -67 55 -89 78 -35 38 -40 41 -49 25 -6 -10 -41 -50 -78 -89 -38 -39 -68 -74 -68 -79 0 -9 11 -20 290 -288 100 -96 241 -233 313 -304 147 -145 143 -144 166 -35 7 35 24 106 36 158 l22 93 13 -46 c7 -25 17 -46 21 -46 5 0 9 -6 9 -13 0 -21 161 -521 170 -527 4 -3 18 -39 30 -80 45 -147 70 -225 79 -239 8 -12 74 -4 421 50 226 35 416 67 421 70 6 3 21 55 34 115 13 60 40 183 60 274 66 298 85 392 85 415 0 13 4 25 9 27 6 2 20 54 33 115 l23 113 -20 37 c-11 20 -25 41 -30 47 -6 6 -20 29 -31 51 -56 112 -157 290 -169 299 -8 6 -21 27 -29 46 -8 20 -37 75 -64 122 -28 48 -53 96 -57 107 -11 37 -47 66 -140 116 -49 27 -92 52 -95 55 -3 4 -63 37 -135 75 -136 70 -197 105 -205 115 -3 4 -48 28 -100 55 -52 26 -124 63 -160 82 -36 18 -67 32 -70 32 -3 -1 -39 -11 -80 -24z"class="path4"/> <path d="M320 877 c0 -7 16 -28 35 -47 19 -19 35 -38 35 -43 0 -6 38 -47 85 -93 47 -45 85 -86 85 -90 0 -9 71 -88 86 -94 6 -3 38 -36 70 -75 33 -38 88 -99 124 -136 36 -37 90 -96 120 -132 54 -64 88 -93 97 -84 6 6 -19 334 -26 345 -8 12 -176 123 -223 147 -21 11 -38 22 -38 26 0 7 -84 62 -183 120 -32 19 -75 49 -95 66 -21 18 -42 33 -47 33 -6 0 -34 16 -62 35 -58 39 -63 41 -63 22z"class="path4"/> </g> </svg>
		 </a>
		<p style="color: #FAFAFA; font-weight: bold; font-family: 'Open Sans'; font-size: 36pt;">Undestand the World</p>
		<a class="standard-btn" href="{{ route('identify/index') }}">Identification Tool</a>
		<a class="standard-btn" href="{{ route('learn/index') }}">Learning Section</a>
		<a class="standard-btn" href="{{ route('store/index') }}">WhatRock Store</a>
		</div>
	</div>
</div>
<div style="width: 100%; background: #E0E0E0; position: relative;">
	<div class="fixed-width extras-cont">
	<div style="width: 100%; height: 85pt;">
	<h2 style="font-weight: bold; color: #616161; padding-top: 24pt; float: left; font-family: 'Open Sans';">Extras</h2>
	<a class="standard-btn" style="float: right; margin-top: 37pt; background: #424242;">MORE</a>
	</div>
	<a href="{{route('earthquakes')}}">
	<article>
		<img style="width: 100%;" src="{{asset('images/earthquakes.jpeg')}}">
		<h2>Live Earthquake Feed</h2>
		<p>Monitor live earthquake data from multiple different sources.</p>
	</article>
	</a>
	<a href="{{route('news')}}">
	<article>
		<img style="width: 100%;" src="{{asset('images/news.jpg')}}">
		<h2>Geology News</h2>
		<p>The latest geology news aggregated from around the web.</p>
	</article>
	</a>
	<a href="https://reddit.com/r/whatisthisrock">
	<article>
		<div style="background-image: url({{asset('images/reddit.jpg')}}); width: 100%; height: 221px; border-radius: 2px 2px 0 0; background-size: cover; background-position: center;"></div>
		<h2>Reddit Community</h2>
		<p>Check out the reddit community at reddit.com/r/whatisthisrock</p>
	</article>
	</a>
	<a href="{{route('maps')}}">
	<article>
		<img style="width: 100%;" src="{{asset('images/maps.jpg')}}">
		<h2>Map Collection</h2>
		<p>An extensive collection of landscape maps of various places around the world.</p>
	</article>
	</a>
	</div>
	<div class="fixed-width entry-cont">
	<div style="width: 100%; height: 85pt;">
		<h2 style="font-weight: bold; color: #616161; padding-top: 24pt; float: left; font-family: 'Open Sans';">Recent entries</h2>
		<a class="standard-btn" style="float: right; margin-top: 37pt; background: #424242;">MORE</a>
	</div>
	@foreach($entries as $entry)
		<article>
			<div style="background-image: url(/storage/{{ $entry->photo->photo() }}); width: 100%; height: 221px; border-radius: 2px 2px 0 0; background-size: cover; background-position: center;"></div>
			<h2>{{$entry->title}}</h2>
			<p>{{str_limit($entry->summary, 115) . '...'}}</p>
		</article>
	@endforeach
	@foreach($entries as $entry)
		<article>
			<div style="background-image: url(/storage/{{ $entry->photo->photo() }}); width: 100%; height: 221px; border-radius: 2px 2px 0 0; background-size: cover; background-position: center;"></div>
			<h2>{{$entry->title}}</h2>
			<p>{{str_limit($entry->summary, 115) . '...'}}</p>
		</article>
	@endforeach
	</div>
</div>
<a href="{{route('about')}}">
	<button style="width: 23pt; height: 23pt; border: none; position: fixed; border-radius: 50%; background: rgba(117, 117, 117, .55); right: 24pt; bottom: 23pt; color: #fff; font-weight: bold; font-size: 14.25pt;">?</button>
</a>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
  var pContainerHeight = $('.landing-container').height();
  $(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.call-to-action').css({
      'transform' : 'translate(0px, '+ wScroll /8 +'%)'
    });

    $('.landing-jump').css({
      'transform' : 'translate(0px, '+ wScroll /3 +'%)'
    });

	}
});
</script>

@include('partials.footer')
@endsection
