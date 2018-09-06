@extends('layouts.app')
@section('content')
@include('partials.admin-menu')
<style type="text/css">
	.settings-menu ul li:nth-child(3) {
		border-right: 5px solid #0288D1;
	}
</style>
<div class="fixed-width">
	<div style="width: calc(100% - 200pt); float: right;">
		<div style="width: 50%; margin-top: 22pt;">
		  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1544_RC03/embed_loader.js"></script>
		  <script type="text/javascript">
		    trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"whats this rock","geo":"US","time":"today 12-m"},{"keyword":"what rock is this","geo":"US","time":"today 12-m"},{"keyword":"whatrock","geo":"US","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=US&q=whats%20this%20rock,what%20rock%20is%20this,whatrock&date=today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
		  </script>
		</div>
	</div>
</div>
@endsection
