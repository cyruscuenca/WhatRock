@extends('layouts.app')
@section('content')
	<div class="body-wrapper">
			<div class="body">
			<div class="title-bar">
				<p>Identify your rock<p>
			</div>
					<p style="font-size: 18pt; font-family: 'ubuntu-l'; text-align: center; margin-top: 80pt; color: gray;">{{ $question->content }}</p>
					
			</div>

			@include('partials.category-sidebar')
	</div>
@endsection