@extends('layouts.app')
@section('content')
@include('partials.dashrow')

<div class="fixed-width" style="margin-top: 15pt;">
		<a href="{{route('admin/entries/moderate')}}">
		<button class="med-shadow" style="display: inline-block; background: #0288D1; border: none; color: #fff; border-radius: 2pt; font-weight: bold; padding: 7pt 14pt;">MODERATE</button>
		</a>
</div>
@endsection
