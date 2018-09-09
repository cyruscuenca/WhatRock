@extends('layouts.app')
@section('content')
<style type="text/css">
	.rss2html-note {
		display: none;
	}
	.feed-item-title a{
		color: #424242;
		font-weight: bold;
		font-family: 'Open Sans';
	}
	.feed-item-desc {
		color: #616161;
		font-family: 'Open Sans';
		margin-bottom: 25pt;
	}
</style>
<div class="fixed-width">
	<h1 style="font-weight: bold; font-family: 'Open Sans'; margin: 25pt 0;">News Feed</h1>
	<div style="width: 385pt;">
	<script src="//rss.bloople.net/?url=http%3A%2F%2Fnews.mit.edu%2Frss%2Ftopic%2Fgeology&detail=26&limit=6&showtitle=false&type=js"></script>
	<script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.bgs.ac.uk%2Fnews%2Frss%2Fannouncements.xml&detail=26&limit=6&showtitle=false&type=js"></script>
	<script src="//rss.bloople.net/?url=https%3A%2F%2Fwww.sciencedaily.com%2Frss%2Fearth_climate%2Fgeology.xml&detail=26&limit=6&showtitle=false&type=js"></script>
	</div>
</div>
@include('partials.footer')
@endsection
