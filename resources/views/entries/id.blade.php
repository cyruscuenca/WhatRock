@extends('layouts.app')
@section('content')
<style type="text/css">
.tag{
	background-image: linear-gradient(to left, #fff 0%, #fff 100%);
	background-attachment: fixed;
	margin: 5pt 0;
	height: 25pt;
  width: 85pt;
  border-radius: 12.5pt;
  display: inline-block;
  margin-right: 6px;
}
.sidebar{
}
#sidebar-item-7{
	background: #dce0e2;
}
#sidebar-item-7-text{
}
.card:hover{
		-webkit-filter: brightness(105%); /* Safari 6.0 - 9.0 */
		filter: brightness(105%);
}
.fadeInUp{
  animation-delay: .26s;
	animation-duration: .36s;
}
.fadeInDown{
	animation-duration: .45s;
}
</style>

<div style="width: 70%; margin-left: auto; margin-right: auto; height: 162pt; background: #455A64; margin-top: 60px; max-width: 850pt;">
	<div style="text-align: center; padding-top: 14pt;">
		<p style="font-size: 34pt; font-family: 'Open Sans', sans-serif; color: #fff; " class="animated fadeInDown" id="question">{{ $question->content }}</p>
		@foreach ($question->answer as $answer)
		<button class="animated fadeInDown" onclick="get(this.innerHTML);" type="button" style="margin: 5pt; margin-left: 10pt; border-radius: 1px; display: inline-block; border: none; color: #fff; background: {{ $answer->button_color }}; width: auto; ">{{ $answer->content }}</button>
		@endforeach
	</div>

	<button class="animated fadeInDown" style="animation-duration: .4s; display: inline-block; float: right; background: #fff; border: none; border-radius: 1px; font-family: 'Roboto', sans-serif; margin-top: 6pt; height: 32pt; ; margin-right: 15pt;">
		<p style="padding: 0 14pt; font-size: 13pt; margin-top: 6pt; color: #263238;">SKIP</p>
	</button>
</div>
<div style="max-width: 850pt; width: 70%; margin-left: auto; margin-right: auto;">
	<div style="width: 100%; display: inline-block;">
		<div style="height: calc(25pt + 10pt); background: #37474F;">
			<div style="height: 100%; width: 30pt; float: left; background: #303e44; display: inline-block;"><img style="width: 100%; display: inline-block; margin-top: 3.5pt;" src="{{ asset('images/left-arrow.svg') }}"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div class="tag"></div>
			<div style="height: 100%; width: 30pt; background: #303e44; display: inline-block; float: right;"><img style="width: 100%; display: inline-block; margin-top: 3.5pt;" src="{{ asset('images/right-arrow.svg') }}"></div>
		</div>
		<div style=" width: 100%; margin-top: 14px; font-family: 'Roboto', sans-serif; font-size: 12pt;">
		<p class="animated fadeInUp" style="display: inline-block; float: left; color: #455A64;">Possible Results:</p>
		<a class="animated fadeInUp" href="#" style="display: inline-block; float: right; color: #4588F4;">ALL ENTRIES</a>
		</div>
		<div style="column-width: 22%; column-gap: 15px; column-count: 4; height: auto; display: inline-block; overflow-y: hidden;;">
			@foreach ($entries as $entry)
			@foreach ($entry->color as $color)
			<article class="card animated fadeInUp" style="border-radius: 2pt; width: 100%; height: auto; margin-bottom: 15px; background: {{ $color->hex }}; display: inline-block; break-inside: avoid;">
				<a href="{{ action('EntryController@show', [$entry->id]) }}">
					<img style="border-radius: 2pt 2pt 0 0; width: 100%;" src="/storage/{{ $entry->photo->photo() }}" alt="Photo of {{$entry->title}}">
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
	var url = "{{ route('/questions/get') }}";
	function get(answer) {
		var question = document.getElementById("question").innerHTML;
		$.ajax({
			type: "POST",
   			contentType: "application/json",
			url: url,
			data: JSON.stringify({
				question: question,
				answer: answer,
			}),
			processData: false,
		})
		.done(function(data) {
			console.log(data )

			document.getElementById("question").innerHTML = data.question;
		})
	}
</script>
