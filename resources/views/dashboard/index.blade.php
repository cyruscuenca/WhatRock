@extends('layouts.app')
@section('content')
<style type="text/css">
div {}
.bg-dark { background: black }
.bg-light { background: pink }

.light {  color: #000;}
.dark {  color: #fff;}

</style>
@include('partials.dashrow')

<div style="height: 910pt; width: 100%;">
	<div class="fixed-width" style="margin-top: 10pt;">
		<div style="width: 70%; float: left; display: inline-block;">
			<p style="font-size: 12pt; font-weight: bold; color: #455A64; margin-top: -2pt;">Notifications</p>
			<div style="border-radius: 2pt; width: 100%; height: 400pt; background: rgba(207,216,220,1);">

			</div>
			<p style="font-size: 12pt; font-weight: bold; color: #455A64; margin-top: 5pt; margin-bottom: 4pt;">Statistics</p>
			<div style="border-radius: 2pt; width: 100%; height: 400pt; background: rgba(207,216,220,1);">

			</div>
		</div>
		<div style="width: calc(30% - 25pt); float: right; display: inline-block;">
			<p style="font-size: 12pt; font-weight: bold; color: #455A64; margin-top: -2pt;">Entries</p>
			<div style="width: 100%; height: 600pt; border-radius: 2pt; background: rgba(207,216,220,1)">

			</div>
			<div style="margin-top: 10pt;">
				<a style="font-weight: bold; font-size: 11.5pt; float: right;" href="">List All Entries</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
</script>
@include('partials.footer')
@endsection
