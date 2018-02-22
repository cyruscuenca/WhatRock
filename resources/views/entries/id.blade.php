@extends('layouts.app')
@section('content')

<div class="body-wrapper">
	<div class="body">
			<div style="width: 100%; height: 167pt; border-radius:0 0 3px 3px; background: #455A64; box-shadow: 0 6px 6px rgba(0,0,0,0.10), 0 2px 2px rgba(0,0,0,0.10);">
				<div style="text-align: center; padding-top: 38pt;">
					<b><p style="font-size: 26pt; font-family: 'ubuntu-l'; color: #fff;" id="question">{{ $question->content }}</p></b>
					@foreach ($question->answer as $answer)
					<button type="button" style="margin: 8pt; border-radius: 2px; display: inline-block; font-family: 'ubuntu-l'; color: #fff; background: {{ $answer->button_color }}; height: 26pt; width: auto; border: none;" class="answer"><p style="margin-left: 13px; margin-right: 13px; margin-top: 4px; font-size: 12pt;">{{ $answer->content }}</p></button>
					@endforeach
				</div>
			</div>
			<div style="column-width: 22%; column-gap: 25px; column-count: 4; height: auto; display: inline-block; margin-top: 25px;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; margin-bottom: 25px; background: #455A64; display: inline-block; column-break-inside: avoid; border-radius: 3px;\">
					<a href="{{ action('EntryController@show', [$entry->id]) }}">
					<img style="width: 100%; border-radius: 3px 3px 0 0;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
					<div style="display: block; padding-left: 5%; font-size: 18pt; height: 28px; margin-top: 2%; margin-bottom: 2%; color: #ffff; font-family: 'ubuntu-l';">{{ $entry->title }}
					<p style="display: block;">
					@if(!is_null($entry->alt_title)) &nbsp;({{ $entry->alt_title }})@endif
					</p>
					</div>
					<div style="display: block; padding-left: 5.5%; margin-bottom: 3%; font-size: 10.5pt; float: left; margin-top: 1.5%;">
					@foreach ($entry->category as $category)
					<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
					</div>
					</a>
				</article>
			@endforeach

			</div>
		</div>
	@endsection
</div>

<script
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>

<script type="text/javascript">
	$(".answer").on('click', function () {
	    var question = document.getElementById(question);
	    var answer = $(this).text();

   		$(this).question(question.replace('dog', 'doll')); 

	});

</script>