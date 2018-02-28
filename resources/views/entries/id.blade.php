@extends('layouts.app')
@section('content')

<div class="body-wrapper">
			<div style="width: 100%; height: 160pt; background: #263238;">
				<div style="text-align: center; padding-top: 34pt;">
					<b><p style="font-size: 25pt; font-family: 'ubuntu-l'; color: #fff;" class="question">{{ $question->content }}</p></b>
					@foreach ($question->answer as $answer)
					<button type="button" style="margin: 8pt; margin-left: 10pt; border-radius: 2px; display: inline-block;  color: #fff; background: {{ $answer->button_color }}; height: 26pt; width: auto; border: none;"><p class="answer" style="padding: 4px; padding-left: 8px; padding-right: 8px; font-family: 'ubuntu-l'; font-size: 12pt;">{{ $answer->content }}</p></button>
					@endforeach
				</div>
			</div>

			<div style="column-width: 22%; column-gap: 25px; column-count: 4; height: auto; display: inline-block; margin-top: 25px; width: calc(75% - 50px); margin-left: 25px;">
			@foreach ($entries as $entry)
				<article style="width: 100%; height: auto; margin-bottom: 25px; background: #263238; display: inline-block; column-break-inside: avoid; border-radius: 3px;">
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
@include('partials.footer')
@endsection


<script
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(".answer").on('click', function () {
        var question = document.getElementById("question").innerHTML;
        var answer = $(this).text();

        function updateFunction(data){
            //update question
            $(".question").html(data.content);
        }

        $.ajax({
          method: "POST",
          url: "questions/get",
          data: { question: question, answer: answer }
        }).then(updateFunction);

    });
</script>