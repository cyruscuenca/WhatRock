@extends('layouts.app')
@section('content')
<style type="text/css">
div {}
.bg-dark { background: black }
.bg-light { background: pink }

.light {  color: #000;}
.dark {  color: #fff;}

</style>
@include('partials.dashmenu')
<div style="height: 975pt; width: 100%;">
	<div style="margin: 18pt;">
		<div style="width: calc(100% - 200pt); float: right;">
		<div style="width: 70%; float: left; display: inline-block;">
			@if ( auth()->user()->bio == null )
			<div style="margin-bottom: 12px; border-radius: 2pt; width: 100%; background: #EF5350; color: #E0E0E0;">
				<div style="padding: 18px;">
				<p style="font-size: 12pt;">Your profile is missing a bio and location. You will not be able to contribute until this information is added.</p>
				<a style="color: #E0E0E0; font-size: 12pt; font-weight: bold;" href="{{route('settings')}}">ADD INFO</a>
				</div>
			</div>
			@endif
			<p style="font-size: 12pt; font-weight: bold; color: #424242; margin-top: 0pt;">Notifications</p>
			<div style="border-radius: 2pt; width: 100%; height: 400pt; background: #424242;">

			</div>
			<p style="font-size: 12pt; font-weight: bold; color: #424242; margin-top: 7pt; margin-bottom: 6pt;">Statistics</p>
			<div style="border-radius: 2pt; width: 100%; height: 400pt; background: #424242;">

			</div>
		</div>
		<div style="width: calc(30% - 25pt); float: right; display: inline-block;">
			<p style="font-size: 12pt; font-weight: bold; color: #424242;">Entries</p>
			<div style="width: 100%; height: 600pt; border-radius: 2pt; background: #424242;">
			</div>
			<div style="margin-top: 10pt;">
				<a style="font-weight: bold; font-size: 11.5pt; float: right;" href="">List All Entries</a>
			</div>
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
@endsection
