@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Identify your rock<p>
			</div>
			<div style="width: 100%; height: 175pt; ">
				<div style="text-align: center; padding-top: 38pt;">
					<b><i><p style="font-size: 26pt; font-family: 'ubuntu-l'; color: #705CE1;">{{ $question->content }}</p></i></b>

					@foreach ($question->answer as $answer)
						<a style="margin: 8pt; border-radius: 2px; display: inline-block; font-family: 'ubuntu-l'; color: #fff; background: {{ $answer->button_color }}; height: 26pt; width: auto; border: none;"><p style="padding-top: 2.2pt; font-size: 13pt; padding-left: 12pt; padding-right: 12pt; font-weight: bold;">{{ $answer->content }}</p></a>
					@endforeach
				</div>
			</div>
			</div>
			@include('partials.category-sidebar')
	</div>
@endsection