@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet"> 
<style type="text/css">
	.tag{
		background-image: linear-gradient(to right, #546E7A, #263238);
		background-attachment: fixed;
	}
</style>

<div style="width: 70%; margin-left: 15%; height: 195pt; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20); border-radius: 0 0 3px 3px; background-image: url(https://i.redd.it/acdvxi7kzfl01.jpg); background-size: cover; margin-top: 60px;">
	<div style="text-align: center; padding-top: 15pt;">
		<p style="font-size: 32pt; font-family: 'Roboto', sans-serif; color: #fff; " id="question">{{ $question->content }}</p>
		@foreach ($question->answer as $answer)
		<button onclick="get()" type="button" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.18); margin: 5pt; margin-left: 10pt; border-radius: 3px; display: inline-block; border: none; color: #fff; background: {{ $answer->button_color }}; height: 29.5pt; width: auto; "><p style="padding: 6pt 12.5pt; font-family: 'Roboto';     text-transform: uppercase; font-size: 12pt;">{{ $answer->content }}</p></button>
		@endforeach
	</div>
	<p style="display: inline-block; float: left; color: #fff; font-family: 'Roboto', sans-serif; font-size: 13pt; margin-top: 48pt; margin-left: 25pt;">From r/nature</p>
	<button style="display: inline-block; float: right; background: #fff; border: none; border-radius: 3px; font-family: 'Roboto', sans-serif; margin-top: 42pt; height: 32pt; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20); margin-right: 25pt;">
		<p style="padding: 0 15pt; font-size: 13pt; margin-top: 5pt; color: #263238;">SKIP</p>
	</button>
</div>
<div style="width: 70%; margin-left: 15%;">
	<div style="width: 100%; display: inline-block;">
	<div style="height: 25pt; margin-top: 15px;">
		<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 90pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 75pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 80pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 90pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 80pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 75pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
		<div class="tag" style="height: 100%; width: 85pt; border-radius: 12.5pt; display: inline-block; margin-right: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.20);"></div>
	</div>

	<div style="column-width: 22%; column-gap: 15px; column-count: 4; height: auto; display: inline-block; margin-top: 15px;">
		@foreach ($entries as $entry)
		<article class="card" style="width: 100%; height: auto; margin-bottom: 15px; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.16); display: inline-block; column-break-inside: avoid; border-radius: 3px;">
			<a href="{{ action('EntryController@show', [$entry->id]) }}">
				<img style="width: 100%; border-radius: 3px 3px 0 0;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
				<div style="display: block; letter-spacing: .25px; padding-left: 5%; font-size: 17pt; height: 28px; margin-top: 2%; margin-bottom: 2%; color: #263238; font-family: 'ubuntu';">{{ $entry->title }}
					<p style=" display: inline-block; font-family: 'ubuntu-l'; letter-spacing: .25px;">
						@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif
					</p>
				</div>
				<div style="display: block; padding-left: 5.5%; margin-bottom: 3%; font-size: 10.5pt; float: left; margin-top: .25%;">
					@foreach ($entry->category as $category)
					<a style="color: #263238;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
				</div>
			</a>
		</article>
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