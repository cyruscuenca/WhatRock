@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:500" rel="stylesheet"> 
<style type="text/css">
.tag{
	background-image: linear-gradient(to left, #546E7A 0%, #546E7A 100%);
	background-attachment: fixed;
}
</style>

<div style="max-width: 850pt; width: 70%; margin-left: auto; margin-right: auto; height: 164pt;  background: #455A64; margin-top: 60px;">
	<div style="text-align: center; padding-top: 12pt;">
		<p style="font-size: 34pt; font-family: 'Open Sans', sans-serif; color: #fff; " id="question">{{ $question->content }}</p>
		@foreach ($question->answer as $answer)
		<button onclick="get()" type="button" style="margin: 5pt; margin-left: 10pt; border-radius: 1px; display: inline-block; border: none; color: #fff; background: {{ $answer->button_color }}; height: 29.5pt; width: auto; "><p style="padding: 6pt 12.5pt; font-family: 'Roboto'; text-transform: uppercase; font-size: 12pt;">{{ $answer->content }}</p></button>
		@endforeach
	</div>

	<button style="display: inline-block; float: right; background: #fff; border: none; border-radius: 1px; font-family: 'Roboto', sans-serif; margin-top: 10pt; height: 32pt; ; margin-right: 25pt;">
		<p style="padding: 0 15pt; font-size: 13pt; margin-top: 5pt; color: #263238;">SKIP</p>
	</button>
</div>
<div style="max-width: 850pt; width: 70%; margin-left: auto; margin-right: auto;">
	<div style="width: 100%; display: inline-block;">
		<div style="height: 25pt; margin-top: 15px;">
			<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 90pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 75pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 80pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 90pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 80pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 75pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; ;"></div>
			<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px;"></div>
		</div>

		<div style="column-width: 22%; column-gap: 15px; column-count: 4; height: auto; display: inline-block; margin-top: 15px;">
			@foreach ($entries as $entry)
			@foreach ($entry->color as $color)
			<article class="card" style="width: 100%; height: auto; margin-bottom: 15px; background: {{ $color->hex }}; display: inline-block; column-break-inside: avoid;">
				<a href="{{ action('EntryController@show', [$entry->id]) }}">
					<img style="width: 100%;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="display: block; letter-spacing: .25px; padding-left: 5%; font-size: 17pt; height: 28px; margin-top: 2%; margin-bottom: 2%; color: #fff; font-family: 'Open Sans', sans-serif;">{{ $entry->title }}
						<p style=" display: inline-block; font-family: 'Open Sans', sans-serif;letter-spacing: .25px;">
							@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif
						</p>
					</div>
					<div style="display: block; padding-left: 5.5%; font-family: 'Open Sans', sans-serif; margin-bottom: 3%; font-size: 10.8pt; float: left; margin-top: .25%;">
						@foreach ($entry->category as $category)
						<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
						@endforeach

					</div>
				</a>
			</article>
			@endforeach
			@endforeach
		</div>
	</div>
</div>
@include('partials.footer')
@endsection


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

<script type="text/javascript">

	//var token = "{{ Session::token() }}";
	var url = "{{ route('/questions/get') }}";

	function get() {
		var question = document.getElementById("question").innerHTML;
		var answer = $(this);
		$.ajax({
			type: "POST",
			url: url,
			data: JSON.stringify({
				question: 'question',
				answer: 'answer',
			}),
			processData: false,
		})
		.done(function(data) {
			console.log(data.question)
			document.getElementById("question").innerHTML = data.question;
		})
	}
</script>