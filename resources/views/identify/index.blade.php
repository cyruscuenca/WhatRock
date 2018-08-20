@extends('layouts.app')
@section('content')
<style type="text/css">
.tag{
	height: 27pt;
	border-radius: 13.5pt;
	display: inline-block;
	background: #607D8B;
	color: #fff;
	margin-left: 5pt;
}
.tag p{
	margin: 5.5pt 20pt;
	text-align: center;
}
.sidebar{
}
#sidebar-item-7{
	background: #4c606b;
}
#sidebar-item-7-text{
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
.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5pt; border: 1pt solid #B0BEC5; height: 32pt; width: 32pt; color: #455A64; font-size: 12pt;}
.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
	background: #455A64;
	border: 1pt solid #455A64;
}
.accordion {
	background: none;
	color: #455A64;
	font-weight: bold;
	cursor: pointer;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	background:none;
	outline:none;
	padding:0;
	margin-top: 13pt;
}
.accordion:active {
	background:none;
	outline:none;
	padding:0;
}
#panel {
	display: none;
	overflow: hidden;
	border: none;
	background: none;
	box-shadow: none;
	font-weight: bold;
	margin-bottom: 14pt;
}
.card{
	height: 274pt;
	width: 220pt;
	display: inline-block;
	float: left;
	transition: filter .25s;
	display: block;
}
.card:hover{
	-webkit-filter: brightness(105%); /* Safari 6.0 - 9.0 */
	filter: brightness(108%);
	transition: filter .25s;
}
.card-container{

}
#answer-list{
	margin: 0; padding: 0; margin-left: 2pt; height: 30pt;
}
#answer-list li{
	margin-right: 12pt; height: 30pt; border-radius: 2pt; border: none; margin-top: 5pt; color: #fff; width: auto; display: inline-block; float: left; cursor: pointer;

}
#answer-list li p{
	color: #fff; font-weight: bold; margin: 0 16pt; margin-top: 5.7pt; font-family: 'Roboto', sans-serif; font-size: 12.25pt; text-transform: uppercase;
}
</style>
<div style="width: 100%; height: 180pt; background: #37474F;">
	<div class="fixed-width" style=" text-align: left; padding-top: 25pt;">
		<p style="margin-left: -2.25pt; font-size: 38pt; font-family: 'Open Sans', sans-serif; color: #fff;"  class="animated fadeInLeft" id="question" data-level="{{ $question->level }}">{{ $question->content }}</p>
		<ul id="answer-list">
		@foreach ($question->answer as $answer)
		<li class="animated fadeInLeft answer" onclick="getQuestion(this.children[0].innerHTML);" type="button" style="background: {{ $answer->button_color }};">
			<p>{{ $answer->content }}</p>
		</li>
		@endforeach
		</ul>
	</div>
	<div class="fixed-width">
		<button class="" style="animation-duration: .4s; display: inline-block; float: right; background: #fff; border: none; border-radius: 2pt; font-family: 'Roboto', sans-serif; height: 30pt; margin-top: 15pt ;">
			<p style="font-weight: bold; padding: 0 13pt; font-size: 13pt; margin-top: 5.5pt; color: #2F3D43;">SKIP</p>
		</button>
	</div>
</div>
<div class="fixed-width" style="padding-bottom: 25pt;">
	<div style="width: 100%; display: inline-block;">
		<button class="accordion"><p class="animated fadeInUp" style="display: inline-block; float: left; color: #546E7A; font-weight: bold;">1,032 Results Found</p>
			<a class="animated fadeInUp" href="{{ route('/entries') }}" style="display: inline-block; float: right; color: #546E7A; font-weight: bold;">
				<svg fill="#546E7A" style="width: 17.5pt; height: 17.5pt; margin-bottom: -4.2pt; margin-right: 3.8pt;" xmlns="http://www.w3.org/2000/svg">
					<path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
					<path d="M0 0h24v24H0z" fill="none"/>
				</svg>FILTER
			</a>
		</button>
		<div id="panel" style="margin-top: 2pt;">
		</div>
		<div class="pinned-card-container">
		</div>
		<div class="card-container">
			@foreach ($entries as $entry)
			<a href="{{ action('EntryController@show', [$entry->slug]) }}">
				<article class="card"  style="border-radius: 2pt 2pt 2pt 2pt; background: @foreach ($entry->hex as $hex) {{$hex}} @endforeach; color: {{$entry->getTextcolorAttribute()}};">
					<div style="height: 176pt; width: 100%; border-radius: 1.85pt 1.85pt 0 0; background-image: url(/storage/{{ $entry->photo->photo() }}); background-size: cover; background-position: center;"></div>

					<p style="margin-left: 15pt; margin-top: 8pt; font-size: 17.5pt; height: 20pt; width: 100%; float: left; color: {{$entry->getTextcolorAttribute()}};">{{ $entry->title }}@if(!is_null($entry->alt_title)) ({{ $entry->alt_title }})@endif</p>

					@foreach ($entry->category as $category)

					<a style="margin-left: 15pt; height: 35pt; width: 100%; font-size: 12pt; float: left; color: {{$entry->getTextcolorAttribute()}};" href="../categories/{{ $category }}">{{ $category }}</a>
					@endforeach

					<p style="margin-right: 15pt; float: right; color: {{$entry->getTextcolorAttribute()}}; font-family: 'Roboto'; font-size: 12.5pt; cursor: pointer;">PIN</p>
				</article>
			</a>
			@endforeach
		</div>
	</div>
</div>
<div class="text-center" style="padding-bottom: 32pt;">
	{!! $entries->links() !!}
</div>
@include('partials.footer')

<script type="text/javascript"
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
// AJAX setup
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

</script>
<script type="text/javascript">
function getQuestion(answer) {
	var url = "http://identify.whatrock.local/questions/get";
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

		// Console log for debugging
		console.log(data)

		// Get question via DOM
		document.getElementById("question").innerHTML = data.question;
		// Define answer-list
		var answerList = document.getElementById('answer-list');
		// Create new empty answer
		var newAnswer = document.createElement('li');
		// Define panel
		var tagList = document.getElementById('panel');
		// Create new empty tag
		var newTag = document.createElement('div');
		// Populate tag
		newTag.innerHTML = '<p>'+data.tag+'</p>';
		newTag.className = 'tag';
		// Remove all answer buttons from #answer-list
		while (answerList.firstChild) {
		    answerList.removeChild(answerList.firstChild);
		}

		function renderAnswers(data) {
	    for(var i = 0; i < data.answer.length; i++) {
					var newAnswer = document.createElement('li');
					newAnswer.innerHTML = '<p>'+data.answer[i].content+'</p>';
					newAnswer.setAttribute('class', 'animated fadeInLeft answer');
					newAnswer.setAttribute('onclick', 'getQuestion(this.children[0].innerHTML);');
					newAnswer.setAttribute('style', 'background: '+data.answer[i].button_color+';');
					newAnswer.setAttribute('type', 'button');
					answerList.appendChild(newAnswer);
					console.log(newAnswer)
	    }
		}
		renderAnswers(data);
		// Append newTag
		tagList.appendChild(newTag);

		// If there are tags, use them to filter the entries
		if (document.querySelectorAll('.tag > p') != null) {
			getEntries();
		}

	})
}
function getEntries() {
	var url = "http://identify.whatrock.local/entries/get";
	//var tags = document.querySelectorAll('.tag > p');
	var tags = [].slice.call(document.querySelectorAll('.tag'));
	for (var i = 0; i < tags.length; i++) {
		tags[i] = tags[i].document.querySelectorAll('.tag > p').innerHTML;
	}
	//console.log(tags[1] +"TAGS");

	/*$.ajax({
		type: "POST",
		contentType: "application/json",
		url: url,
		data: JSON.stringify({
			tags: tags,
		}),
		processData: false,
	})
	.done(function(data) {

		// Console log for debugging
		console.log(data)

	})

}
*/
</script>
<script>

var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.display === "block") {
			panel.style.display = "none";
		} else {
			panel.style.display = "block";
		}
	});
}

</script>
@endsection
