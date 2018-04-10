@extends('layouts.app')
@section('content')
<style type="text/css">
.tag{
	background-image: linear-gradient(to right, #fff 0%, #fff 100%);
	background-attachment: fixed;
	margin: 4.5pt 3.5px;
	height: 25pt;
	width: 85pt;
	border-radius: 12.5pt;
	display: inline-block;
}
.sidebar{
}
#sidebar-item-7{
	background: #546E7A;
}
#sidebar-item-7-text{
}
.card{
	min-height: 180pt;
}
.card:hover{
	-webkit-filter: brightness(105%); /* Safari 6.0 - 9.0 */
	filter: brightness(108%);
	transition: filter .25s;
}
.fadeInUp{
	animation-delay: .20;
	animation-duration: .5s;
}
.fadeInDown{
	animation-duration: .50s;
}
input[type=text]:focus{
	background: #fff;
	color: #90A4AE;
	transition: background .2s;
}
a svg:hover .path4 {
	fill: #afbbd2; 
}
.fadeInLeft{
	animation-duration: .36s;
}
</style>
<div style="width: 100%; height: 190pt; margin-top: 60px; background: #37474F;">
	<div style="text-align: left; padding-top: 24pt; width: 68%; margin: 0 auto;">
		<p style="margin-left: -2.5pt; font-size: 42pt; font-family: 'Open Sans', sans-serif; color: #fff;"  class="animated fadeInLeft" id="question" data-level="{{ $question->level }}">{{ $question->content }}</p>
		@foreach ($question->answer as $answer)
		<button class="animated fadeInLeft" onclick="get(this.children[0].innerHTML);" type="button" style="margin-right: 10pt; height: 30pt; border-radius: 1.5pt; display: inline-block; border: none; margin-top: 2pt; color: #fff; background: {{ $answer->button_color }}; width: auto; "><p style="font-weight: bold; margin: 3pt 12.5pt; padding-top: 1.5pt; font-family: 'Roboto', sans-serif; font-size: 12pt; text-transform: uppercase;">{{ $answer->content }}</p></button>
		@endforeach
	</div>

	<button class="" style="animation-duration: .4s; display: inline-block; float: right; background: #fff; border: none; border-radius: 1.6pt; font-family: 'Roboto', sans-serif; height: 30pt; margin-top: 20pt ; margin-right: 16%;">
		<p style="font-weight: bold; padding: 0 13pt; font-size: 13pt; margin-top: 5.5pt; color: #2F3D43;">SKIP</p>
	</button>
</div>
<div style="max-width: 875pt; width: 68%; margin-left: auto; margin-right: auto; padding-bottom: 12.5%; ">
	<div style="width: 100%; display: inline-block;">
		<div style=" width: 100%; margin-top: 10pt; font-family: 'Roboto', sans-serif; font-size: 12pt;">
			<p class="animated fadeInUp" style="display: inline-block; float: left; color: #546E7A; font-weight: bold;">1,032 Results Found</p>
			<a class="animated fadeInUp" href="{{ route('/entries') }}" style="display: inline-block; float: right; color: #546E7A; font-weight: bold;">
				<svg fill="#546E7A" style="width: 17.5pt; 
				height: 17.5pt; margin-bottom: -4.2pt; margin-right: 3.8pt;"  xmlns="http://www.w3.org/2000/svg">
				<path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
				<path d="M0 0h24v24H0z" fill="none"/>
			</svg>FILTER
		</a>
	</div>
	<div style="column-width: 22%; column-gap: 15pt; column-count: 4; height: auto; display: inline-block; overflow-y: hidden;;">
		@foreach ($entries as $entry)
		@foreach ($entry->color as $color)
		<article class="card animated fadeInUp" style="border-radius: 3pt 3pt 1.85pt 1.85pt; width: 100%; height: auto; margin-bottom: 15pt; background: {{ $color->hex }}; display: inline-block; break-inside: avoid;">
			<a href="{{ action('EntryController@show', [$entry->id]) }}">
				<div style="height: 155pt; width: 100%; border-radius: 1.85pt 1.85pt 0 0; background-image: url(/storage/{{ $entry->photo->photo() }}); background-size: cover; background-position: center;">
					
				</div>
				<div style="display: block; letter-spacing: .25px; padding-left: 6%; font-size: 20pt; height: 28px; margin-top: 3.5%; margin-bottom: 3%; color: #fff; font-family: 'Open Sans', sans-serif;">
					{{ $entry->title }}
					<p style=" display: inline-block; font-family: 'Open Sans', sans-serif; letter-spacing: .25px;">
						@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif
					</p>
				</div>
				<div style="display: block; padding-left: 6.5%; font-family: 'Open Sans', sans-serif; margin-bottom: 3%; font-size: 11pt; float: left; margin-top: .25%;">
					@foreach ($entry->category as $category)
					<a style="color: #fff;" href="../categories/{{ $category->name }}">{{ $category->name }}</a>
					@endforeach
				</div>
				<div style="width: 100%; height: 58pt; padding-top: 30pt; padding-right: 14pt;">
					<a style="color: #fff; font-family: 'Roboto'; float: right; font-size: 12.5pt;">PIN</a>
				</div>
			</a>
		</article>
		@endforeach
		@endforeach
	</div>
</div>
<div class="text-center">
	{!! $entries->links() !!}
</div>
</div>
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
	var url = "https://whatrock.local/questions/get";
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
